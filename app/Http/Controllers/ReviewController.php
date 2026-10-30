<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
            'borrowing_id' => 'nullable|exists:borrowings,id',
            'type' => 'nullable|string|in:peminjaman,baca_ebook'
        ]);

        $tokenUser = null;
        $bearer = $request->bearerToken();
        if ($bearer) {
            $pat = \Laravel\Sanctum\PersonalAccessToken::findToken($bearer);
            if ($pat) {
                $tokenUser = $pat->tokenable;
            }
        }

        $user = $tokenUser ?? auth('sanctum')->user() ?? auth()->user();
        if (!$user) {
            $user = User::first();
        }

        $book = Book::findOrFail($request->book_id);

        $review = Review::create([
            'user_id' => $user->id,
            'book_id' => $book->id,
            'borrowing_id' => $request->borrowing_id,
            'rating' => (int)$request->rating,
            'comment' => $request->comment,
            'type' => $request->type ?? 'peminjaman'
        ]);

        // Recalculate book's rating
        $avgRating = Review::where('book_id', $book->id)->avg('rating');
        $book->update([
            'rating' => round($avgRating, 1),
            'popularity_score' => ($book->popularity_score ?? 0) + 2
        ]);

        // Gamification bonus for leaving a review
        $xpEarned = 20;
        $user->increment('reviews_count');
        $user->increment('xp', $xpEarned);

        // Check level up
        $batasXp = $user->level * 100;
        if ($user->xp >= $batasXp) {
            $user->increment('level');
            $user->decrement('xp', $batasXp);
        }

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Terima kasih! Ulasan dan rating berhasil dikirim (+20 XP literasi).',
                'review' => $review->load('user:id,name,avatar'),
                'book_rating' => $book->rating,
                'reviews_count' => $user->reviews_count,
                'xp_earned' => $xpEarned
            ]);
        }

        return back()->with('success', 'Ulasan dan rating berhasil dikirim! (+20 XP)');
    }

    public function getBookReviews($bookId)
    {
        $book = Book::findOrFail($bookId);
        $reviews = Review::with(['user:id,name,avatar,role'])
            ->where('book_id', $bookId)
            ->latest()
            ->take(20)
            ->get();

        $avgRating = Review::where('book_id', $bookId)->avg('rating');
        $totalReviews = Review::where('book_id', $bookId)->count();

        return response()->json([
            'success' => true,
            'book' => [
                'id' => $book->id,
                'title' => $book->title,
                'rating' => $book->rating ?? 0,
                'avg_rating' => round($avgRating ?? 0, 1),
                'total_reviews' => $totalReviews
            ],
            'reviews' => $reviews
        ]);
    }
}

