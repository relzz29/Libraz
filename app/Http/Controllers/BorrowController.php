<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BorrowController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'return_date' => 'nullable|date|after_or_equal:tomorrow'
        ]);

        $book = Book::findOrFail($request->book_id);

        if ($book->stock <= 0) {
            return back()->with('error', 'Stok buku habis.');
        }

        // Mocking user ID if auth is not set up correctly, but try to use Auth::id() first
        $userId = Auth::id() ?? 1; 

        $dueDate = $request->return_date ? \Carbon\Carbon::parse($request->return_date) : now()->addDays(14);

        Borrowing::create([
            'user_id' => $userId,
            'book_id' => $book->id,
            'borrowed_at' => now(),
            'due_date' => $dueDate,
            'status' => 'pending'
        ]);

        $book->decrement('stock');

        return redirect()->route('sirkulasi.sukses')->with('success', 'Pengajuan peminjaman berhasil dikirim. Menunggu persetujuan Admin.');
    }

    public function storeApi(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'return_date' => 'nullable|date'
        ]);

        $book = Book::findOrFail($request->book_id);

        if ($book->stock <= 0) {
            return response()->json(['success' => false, 'message' => 'Stok buku habis.'], 400);
        }

        $userId = Auth::id(); 

        $dueDate = $request->return_date ? \Carbon\Carbon::parse($request->return_date) : now()->addDays(14);

        $borrowing = Borrowing::create([
            'user_id' => $userId,
            'book_id' => $book->id,
            'borrowed_at' => now(),
            'due_date' => $dueDate,
            'status' => 'pending'
        ]);

        $book->decrement('stock');

        return response()->json([
            'success' => true, 
            'message' => 'Pengajuan peminjaman berhasil dikirim. Menunggu persetujuan Admin.',
            'borrowing_id' => $borrowing->id
        ]);
    }
}
