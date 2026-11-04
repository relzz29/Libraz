<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * ==============================================================================
 * CONTROLLER: ReviewController
 * FUNGSI: Mengelola ulasan (review), rating bintang 1-5, dan perhitungan gamifikasi
 * ==============================================================================
 */
class ReviewController extends Controller
{
    /**
     * ==========================================================================
     * METHOD: store
     * FUNGSI: Menyimpan rating dan ulasan yang dikirim oleh siswa/pengguna
     * ==========================================================================
     */
    public function store(Request $request)
    {
        // 1. VALIDASI DATA: Memastikan data yang dikirim tidak kosong dan sesuai aturan
        $request->validate([
            'book_id' => 'required|exists:books,id',            // Buku harus terdaftar di tabel books
            'rating' => 'required|integer|min:1|max:5',         // Nilai bintang harus angka 1 sampai 5
            'comment' => 'nullable|string|max:1000',            // Komentar ulasan opsional (maks 1000 huruf)
            'borrowing_id' => 'nullable|exists:borrowings,id',  // ID peminjaman (jika ada)
            'type' => 'nullable|string|in:peminjaman,baca_ebook'// Jenis: peminjaman fisik atau baca e-book
        ]);

        // 2. IDENTIFIKASI PENGGUNA: Mengambil user dari Bearer Token (Sanctum) atau Web Session
        $tokenUser = null;
        $bearer = $request->bearerToken();
        if ($bearer) {
            $pat = \Laravel\Sanctum\PersonalAccessToken::findToken($bearer);
            if ($pat) {
                $tokenUser = $pat->tokenable;
            }
        }

        // Ambil user login (atau default user pertama jika mode simulasi)
        $user = $tokenUser ?? auth('sanctum')->user() ?? auth()->user();
        if (!$user) {
            $user = User::first();
        }

        // Cari data buku yang diulas
        $book = Book::findOrFail($request->book_id);

        // 3. SIMPAN ULASAN KE DATABASE (Tabel reviews)
        $review = Review::create([
            'user_id' => $user->id,
            'book_id' => $book->id,
            'borrowing_id' => $request->borrowing_id,
            'rating' => (int)$request->rating,
            'comment' => $request->comment,
            'type' => $request->type ?? 'peminjaman'
        ]);

        // 4. HITUNG ULANG RATA-RATA RATING BUKU:
        // Mengambil rata-rata semua rating yang pernah diberikan ke buku ini lalu disimpan ke tabel books
        $avgRating = Review::where('book_id', $book->id)->avg('rating');
        $book->update([
            'rating' => round($avgRating, 1),
            'popularity_score' => ($book->popularity_score ?? 0) + 2 // Menambah poin popularitas buku
        ]);

        // 5. BONUS GAMIFIKASI (XP & REWARDS):
        // Siswa dihadiahi +20 XP literasi dan jumlah ulasannya bertambah
        $xpEarned = 20;
        $user->increment('reviews_count');
        $user->increment('xp', $xpEarned);

        // Cek apakah XP siswa sudah cukup untuk naik level (misal Level 1 butuh 100 XP)
        $batasXp = $user->level * 100;
        if ($user->xp >= $batasXp) {
            $user->increment('level');
            $user->decrement('xp', $batasXp);
        }

        // 6. RESPONSE JSON (Untuk panggilan JavaScript / Fetch AJAX dari antarmuka web)
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

    /**
     * ==========================================================================
     * METHOD: getBookReviews
     * FUNGSI: Mengambil daftar ulasan komunitas pembaca lain untuk ditampilkan di modal katalog
     * ==========================================================================
     */
    public function getBookReviews($bookId)
    {
        // Cari buku yang diminta
        $book = Book::findOrFail($bookId);

        // Ambil 20 ulasan terbaru beserta nama dan foto avatar pengulasnya
        $reviews = Review::with(['user:id,name,avatar,role'])
            ->where('book_id', $bookId)
            ->latest()
            ->take(20)
            ->get();

        // Hitung rata-rata dan total ulasan
        $avgRating = Review::where('book_id', $bookId)->avg('rating');
        $totalReviews = Review::where('book_id', $bookId)->count();

        // Kembalikan data dalam format JSON agar bisa dibaca oleh JavaScript di browser
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
