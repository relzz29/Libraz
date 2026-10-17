<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminBookController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $booksQuery = Book::latest();

        if ($search) {
            $booksQuery->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('author', 'like', "%{$search}%")
                  ->orWhere('category', 'like', "%{$search}%")
                  ->orWhere('isbn', 'like', "%{$search}%");
            });
        }

        $books = $booksQuery->get();
        $now = now();
        $startThisMonth = $now->copy()->startOfMonth();
        $startLastMonth = $now->copy()->subMonth()->startOfMonth();
        $endLastMonth = $now->copy()->subMonth()->endOfMonth();

        // 1. Total Buku & Tren Pertumbuhan (Buku baru ditambah bulan ini vs bulan lalu)
        $totalBooks = Book::count();
        $booksThisMonth = Book::where('created_at', '>=', $startThisMonth)->count();
        $booksLastMonth = Book::whereBetween('created_at', [$startLastMonth, $endLastMonth])->count();
        $bookGrowth = $this->calculateGrowthRate($booksThisMonth, $booksLastMonth, $totalBooks);

        // 2. Akun Aktif & Tren Pertumbuhan (User baru terdaftar bulan ini vs bulan lalu)
        $activeUsers = User::count();
        $usersThisMonth = User::where('created_at', '>=', $startThisMonth)->count();
        $usersLastMonth = User::whereBetween('created_at', [$startLastMonth, $endLastMonth])->count();
        $userGrowth = $this->calculateGrowthRate($usersThisMonth, $usersLastMonth, $activeUsers);

        // 3. Persetujuan Tertunda
        $pendingApprovals = \App\Models\Borrowing::where('status', 'pending')->count();

        // 4. Peminjaman Bulanan & Tren Pertumbuhan
        $monthlyBorrows = \App\Models\Borrowing::whereMonth('borrowed_at', $now->month)
            ->whereYear('borrowed_at', $now->year)
            ->count();
        $lastMonthBorrows = \App\Models\Borrowing::whereMonth('borrowed_at', $startLastMonth->month)
            ->whereYear('borrowed_at', $startLastMonth->year)
            ->count();
        $borrowGrowth = $this->calculateGrowthRate($monthlyBorrows, $lastMonthBorrows, $monthlyBorrows);

        $currentMonthName = $now->translatedFormat('F');

        return view('admin_dashboard', compact(
            'books', 'totalBooks', 'bookGrowth',
            'activeUsers', 'userGrowth',
            'pendingApprovals',
            'monthlyBorrows', 'borrowGrowth', 'currentMonthName',
            'search'
        ));
    }

    private function calculateGrowthRate($current, $previous, $total = 0)
    {
        if ($previous > 0) {
            $diff = (($current - $previous) / $previous) * 100;
        } else {
            // Jika bulan lalu 0 tapi bulan ini ada data baru
            $diff = $current > 0 ? ($current / max($total, 1)) * 100 : 0;
        }

        $formatted = number_format(abs($diff), 1);
        if ($diff > 0) {
            return ['direction' => 'up', 'text' => "+{$formatted}%", 'color' => 'text-emerald-700 bg-emerald-100'];
        } elseif ($diff < 0) {
            return ['direction' => 'down', 'text' => "-{$formatted}%", 'color' => 'text-rose-700 bg-rose-100'];
        } else {
            return ['direction' => 'same', 'text' => "0.0%", 'color' => 'text-slate-700 bg-slate-100'];
        }
    }

    public function search(Request $request)
    {
        $q = trim($request->input('q', ''));
        if (empty($q)) {
            return response()->json([
                'books' => [],
                'users' => [],
                'borrowings' => []
            ]);
        }

        // 1. Search Books
        $books = Book::where('title', 'like', "%{$q}%")
            ->orWhere('author', 'like', "%{$q}%")
            ->orWhere('category', 'like', "%{$q}%")
            ->orWhere('isbn', 'like', "%{$q}%")
            ->take(5)
            ->get(['id', 'title', 'author', 'category', 'type', 'stock', 'isbn', 'cover_image_url']);

        // 2. Search Users
        $users = User::where('name', 'like', "%{$q}%")
            ->orWhere('email', 'like', "%{$q}%")
            ->orWhere('nis', 'like', "%{$q}%")
            ->take(5)
            ->get(['id', 'name', 'email', 'nis', 'role']);

        // 3. Search Borrowings / Resi
        $borrowings = \App\Models\Borrowing::with(['user:id,name', 'book:id,title'])
            ->where('id', 'like', "%{$q}%")
            ->orWhereHas('book', function ($b) use ($q) {
                $b->where('title', 'like', "%{$q}%");
            })
            ->orWhereHas('user', function ($u) use ($q) {
                $u->where('name', 'like', "%{$q}%");
            })
            ->take(5)
            ->get();

        return response()->json([
            'books' => $books,
            'users' => $users,
            'borrowings' => $borrowings
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'type' => 'required|in:physical,ebook,both',
            'isbn' => 'nullable|string|max:255',
            'stock' => 'required|integer|min:0',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'pdf_file' => 'nullable|mimes:pdf|max:10240',
        ]);

        $coverImageUrl = null;
        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('covers', 'public');
            $coverImageUrl = '/storage/' . $path;
        }

        $pdfPath = null;
        if ($request->hasFile('pdf_file')) {
            $path = $request->file('pdf_file')->store('pdfs', 'public');
            $pdfPath = '/storage/' . $path;
        }

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'category' => $request->category,
            'type' => $request->type,
            'isbn' => $request->isbn,
            'stock' => $request->stock,
            'rack' => 'Rak Baru', // default or make it dynamic
            'cover_image_url' => $coverImageUrl,
            'pdf_path' => $pdfPath,
        ]);

        return redirect()->route('admin.books.create')->with('success', 'Buku berhasil ditambahkan ke database!');
    }

    public function create()
    {
        $books = Book::latest()->get();
        return view('admin_tambah_buku', compact('books'));
    }

    public function laporan()
    {
        // Add stats or reports here
        $totalBooks = Book::count();
        $totalPhysical = Book::whereIn('type', ['physical', 'both'])->count();
        $totalEbook = Book::whereIn('type', ['ebook', 'both'])->count();
        $totalBorrows = \App\Models\Borrowing::count() ?? 0;
        
        return view('admin_laporan', compact('totalBooks', 'totalPhysical', 'totalEbook', 'totalBorrows'));
    }

    public function edit(string $id)
    {
        $book = Book::findOrFail($id);
        return view('admin_edit_buku', compact('book'));
    }

    public function update(Request $request, string $id)
    {
        $book = Book::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'type' => 'required|in:physical,ebook,both',
            'isbn' => 'nullable|string|max:255',
            'stock' => 'required|integer|min:0',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'pdf_file' => 'nullable|mimes:pdf|max:10240',
        ]);

        if ($request->hasFile('cover_image')) {
            // Delete old cover if exists
            if ($book->cover_image_url && str_starts_with($book->cover_image_url, '/storage/')) {
                $oldPath = str_replace('/storage/', '', $book->cover_image_url);
                Storage::disk('public')->delete($oldPath);
            }
            $path = $request->file('cover_image')->store('covers', 'public');
            $book->cover_image_url = '/storage/' . $path;
        }

        if ($request->hasFile('pdf_file')) {
            // Delete old pdf if exists
            if ($book->pdf_path && str_starts_with($book->pdf_path, '/storage/')) {
                $oldPath = str_replace('/storage/', '', $book->pdf_path);
                Storage::disk('public')->delete($oldPath);
            }
            $path = $request->file('pdf_file')->store('pdfs', 'public');
            $book->pdf_path = '/storage/' . $path;
        }

        $book->title = $request->title;
        $book->author = $request->author;
        $book->category = $request->category;
        $book->type = $request->type;
        $book->isbn = $request->isbn;
        $book->stock = $request->stock;
        
        $book->save();

        return redirect()->route('admin.books.create')->with('success', 'Buku berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);
        
        // Delete cover image if it's in storage
        if ($book->cover_image_url && str_starts_with($book->cover_image_url, '/storage/')) {
            $path = str_replace('/storage/', '', $book->cover_image_url);
            Storage::disk('public')->delete($path);
        }

        // Delete pdf if it's in storage
        if ($book->pdf_path && str_starts_with($book->pdf_path, '/storage/')) {
            $path = str_replace('/storage/', '', $book->pdf_path);
            Storage::disk('public')->delete($path);
        }

        $book->delete();

        return redirect()->route('admin.books.create')->with('success', 'Buku berhasil dihapus secara permanen beserta filenya!');
    }
}
