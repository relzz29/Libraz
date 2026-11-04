<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * ==============================================================================
 * MODEL: Review
 * TABEL: reviews
 * FUNGSI: Menghubungkan data ulasan dan rating antara tabel users dan books
 * ==============================================================================
 */
class Review extends Model
{
    use HasFactory;

    // Kolom-kolom yang diizinkan untuk diisi data secara langsung (Mass Assignment)
    protected $fillable = [
        'user_id',       // ID Siswa pengulas
        'book_id',       // ID Buku yang diulas
        'borrowing_id',  // ID Transaksi peminjaman (opsional)
        'rating',        // Nilai bintang (1 - 5)
        'comment',       // Isi teks ulasan
        'type'           // 'peminjaman' atau 'baca_ebook'
    ];

    /**
     * RELASI: Setiap ulasan dimiliki oleh satu User (Siswa/Anggota)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * RELASI: Setiap ulasan tertuju pada satu Buku tertentu
     */
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    /**
     * RELASI: Setiap ulasan bisa terhubung dengan satu riwayat peminjaman
     */
    public function borrowing()
    {
        return $this->belongsTo(Borrowing::class);
    }
}
