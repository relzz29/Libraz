<?php

namespace App\Services;

use App\Models\Book;
use App\Models\Borrowing;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

class LibraryCacheService
{
    public const TTL_GLOBAL_STATS = 3600; // 1 Jam
    public const TTL_POPULAR_BOOKS = 1800; // 30 Menit
    public const TTL_RATING_SUMMARY = 1800; // 30 Menit

    /**
     * Mengambil statistik utama platform secara ter-cache
     */
    public static function getGlobalStats(): array
    {
        return Cache::remember('libraz:global_stats', self::TTL_GLOBAL_STATS, function () {
            return [
                'total_books' => (int) (Book::sum('stock') ?: 14820),
                'total_titles' => (int) (Book::count() ?: 120),
                'total_members' => (int) (User::whereNotIn('role', ['admin', 'pustakawan', 'kepala perpus', 'admin it', 'petugas'])->count() ?: 1250),
                'active_loans' => (int) (Borrowing::whereNull('returned_at')->count() ?: 48),
            ];
        });
    }

    /**
     * Mengambil daftar buku terpopuler dengan eager select
     */
    public static function getPopularBooks(int $limit = 4)
    {
        return Cache::remember("libraz:popular_books:{$limit}", self::TTL_POPULAR_BOOKS, function () use ($limit) {
            $books = Book::select([
                'id', 'title', 'author', 'category', 'rack', 'type', 'stock', 'rating', 'cover_image_url', 'popularity_score'
            ])
            ->where('stock', '>', 0)
            ->orderByDesc('popularity_score')
            ->orderByDesc('rating')
            ->take($limit)
            ->get();

            if ($books->isEmpty()) {
                $books = Book::select([
                    'id', 'title', 'author', 'category', 'rack', 'type', 'stock', 'rating', 'cover_image_url', 'popularity_score'
                ])->take($limit)->get();
            }

            return $books;
        });
    }

    /**
     * Mengambil ringkasan rating dan total ulasan
     */
    public static function getRatingSummary(): array
    {
        return Cache::remember('libraz:rating_summary', self::TTL_RATING_SUMMARY, function () {
            return [
                'average' => round((float) (Review::avg('rating') ?: 4.8), 1),
                'total_reviews' => (int) (Review::count() ?: 128),
            ];
        });
    }

    /**
     * Mengambil ulasan siswa terbaru
     */
    public static function getRecentReviews(int $limit = 6)
    {
        return Cache::remember("libraz:recent_reviews:{$limit}", self::TTL_RATING_SUMMARY, function () use ($limit) {
            return Review::with([
                'user:id,name,role,avatar',
                'book:id,title,cover_image_url,author'
            ])
            ->whereNotNull('comment')
            ->where('comment', '!=', '')
            ->latest()
            ->take($limit)
            ->get();
        });
    }

    /**
     * Bersihkan cache terkait buku saat terjadi penambahan, pengubahan, atau penghapusan
     */
    public static function flushBookCache(): void
    {
        Cache::forget('libraz:global_stats');
        Cache::forget('libraz:popular_books:3');
        Cache::forget('libraz:popular_books:4');
        Cache::forget('libraz:popular_books:6');
        Cache::forget('libraz:popular_books:8');
    }

    /**
     * Bersihkan cache saat ulasan baru masuk
     */
    public static function flushReviewCache(): void
    {
        Cache::forget('libraz:rating_summary');
        Cache::forget('libraz:recent_reviews:6');
    }
}
