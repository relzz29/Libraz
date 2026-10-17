<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use App\Models\Book;
use Illuminate\Http\Request;

class AdminApprovalController extends Controller
{
    public function index()
    {
        $pendingApprovals = Borrowing::with(['user', 'book'])->where('status', 'pending')->latest()->get();
        $decisionHistory = Borrowing::with(['user', 'book'])
            ->whereIn('status', ['approved', 'rejected', 'borrowed', 'returned'])
            ->latest('updated_at')
            ->take(50)
            ->get();

        return view('admin_persetujuan', compact('pendingApprovals', 'decisionHistory'));
    }

    public function approve($id)
    {
        $borrowing = Borrowing::findOrFail($id);
        if ($borrowing->status == 'pending') {
            $borrowing->status = 'approved';
            $borrowing->save();
        }
        return redirect()->back()->with('success', 'Peminjaman disetujui.');
    }

    public function reject($id)
    {
        $borrowing = Borrowing::findOrFail($id);
        if ($borrowing->status == 'pending') {
            $borrowing->status = 'rejected';
            $borrowing->save();

            // Return stock
            $book = Book::find($borrowing->book_id);
            if ($book) {
                $book->increment('stock');
            }
        }
        return redirect()->back()->with('success', 'Peminjaman ditolak.');
    }
}
