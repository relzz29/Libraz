<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminBookController extends Controller
{
    public function index()
    {
        $books = Book::latest()->get();
        // Assuming Borrowing is not fully set up, we'll just mock it or skip it for now, 
        // or check if Borrowing model exists and use it.
        $totalBooks = Book::count();
        $activeUsers = User::count();
        $pendingApprovals = \App\Models\Borrowing::where('status', 'pending')->count();
        $monthlyBorrows = 0; // Mock or calculate

        return view('admin_dashboard', compact('books', 'totalBooks', 'activeUsers', 'pendingApprovals', 'monthlyBorrows'));
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
