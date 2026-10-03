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
            'book_id' => 'required|exists:books,id'
        ]);

        $book = Book::findOrFail($request->book_id);

        if ($book->stock <= 0) {
            return back()->with('error', 'Stok buku habis.');
        }

        // Mocking user ID if auth is not set up correctly, but try to use Auth::id() first
        $userId = Auth::id() ?? 1; 

        Borrowing::create([
            'user_id' => $userId,
            'book_id' => $book->id,
            'borrowed_at' => now(),
            'due_date' => now()->addDays(14),
        ]);

        $book->decrement('stock');

        return redirect()->route('sirkulasi.sukses')->with('success', 'Buku berhasil dipinjam');
    }
}
