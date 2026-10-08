<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Borrowing;
use Illuminate\Support\Facades\Auth;

class LibraryController extends Controller
{
    public static function getHardcodedBooks()
    {
        return [
            (object)[
                'id' => 1,
                'title' => 'Animasi BS Kelas XI dan XII',
                'author' => 'Kemdikbud',
                'category' => 'Seni & Animasi',
                'rack' => 'Rak 1',
                'type' => 'both',
                'stock' => 50,
                'cover_image_url' => 'buku/sampul/Animasi_BS_Kelas_XI_dan_XII_Cover.png',
                'pdf_path' => 'buku/pdf/Animasi_BS_XI_dan_XII (1).pdf',
                'rating' => 4.5,
                'popularity_score' => 0,
            ],
            (object)[
                'id' => 2,
                'title' => 'Dasar Teknik Konstruksi Kapal Semester 2 KLS X',
                'author' => 'Kemdikbud',
                'category' => 'Teknik & Rekayasa',
                'rack' => 'Rak 1',
                'type' => 'both',
                'stock' => 50,
                'cover_image_url' => 'buku/sampul/Dasar-Teknik-Konstruksi-Kapal-Semester-2-BS-KLS-X-Cover.png',
                'pdf_path' => 'buku/pdf/Dasar-Teknik-Konstruksi-Kapal-Semester-2-BS-KLS-X (1).pdf',
                'rating' => 4.0,
                'popularity_score' => 0,
            ],
            (object)[
                'id' => 3,
                'title' => 'Ekonomi Kelas XI',
                'author' => 'Kemdikbud',
                'category' => 'Mata Pelajaran Umum',
                'rack' => 'Rak 1',
                'type' => 'both',
                'stock' => 50,
                'cover_image_url' => 'buku/sampul/ekonimi_kls_XI.jpeg',
                'pdf_path' => 'buku/pdf/Ekonomi_BG_KLS_XI_Rev_2.pdf',
                'rating' => 4.2,
                'popularity_score' => 0,
            ],
            (object)[
                'id' => 4,
                'title' => 'Bahasa Indonesia Kelas XI',
                'author' => 'Kemdikbud',
                'category' => 'Mata Pelajaran Umum',
                'rack' => 'Rak 1',
                'type' => 'both',
                'stock' => 50,
                'cover_image_url' => 'buku/sampul/indonesia_BG_kls_XI.jpeg',
                'pdf_path' => 'buku/pdf/Indonesia_BG_KLS_XI_Rev.pdf',
                'rating' => 4.5,
                'popularity_score' => 0,
            ],
            (object)[
                'id' => 5,
                'title' => 'Informatika Kelas XI',
                'author' => 'Kemdikbud',
                'category' => 'Kurikulum Merdeka',
                'rack' => 'Rak 1',
                'type' => 'both',
                'stock' => 50,
                'cover_image_url' => 'buku/sampul/Informatika_kls_11.jpeg',
                'pdf_path' => 'buku/pdf/Informatika_BG_KLS_XI_Rev.pdf',
                'rating' => 4.7,
                'popularity_score' => 0,
            ],
            (object)[
                'id' => 6,
                'title' => 'Pendidikan Agama Islam Kelas XI',
                'author' => 'Kemdikbud',
                'category' => 'Mata Pelajaran Umum',
                'rack' => 'Rak 1',
                'type' => 'both',
                'stock' => 50,
                'cover_image_url' => 'buku/sampul/islam_BG_kls_XI.jpeg',
                'pdf_path' => 'buku/pdf/Islam-BG-KLS-XI.pdf',
                'rating' => 4.8,
                'popularity_score' => 0,
            ],
            (object)[
                'id' => 7,
                'title' => 'Bahasa Jepang Kelas XI',
                'author' => 'Kemdikbud',
                'category' => 'Mata Pelajaran Umum',
                'rack' => 'Rak 1',
                'type' => 'both',
                'stock' => 50,
                'cover_image_url' => 'buku/sampul/BahasaJepang.jpeg',
                'pdf_path' => 'buku/pdf/Jepang_BG_KLS_XI.pdf',
                'rating' => 4.3,
                'popularity_score' => 0,
            ],
            (object)[
                'id' => 8,
                'title' => 'KKA Kelas XI',
                'author' => 'Kemdikbud',
                'category' => 'Teknik & Rekayasa',
                'rack' => 'Rak 1',
                'type' => 'both',
                'stock' => 50,
                'cover_image_url' => 'buku/sampul/KKA_BS_KLS_11_Cover.png',
                'pdf_path' => 'buku/pdf/KKA_BS_KLS_11.pdf',
                'rating' => 4.0,
                'popularity_score' => 0,
            ],
            (object)[
                'id' => 9,
                'title' => 'Kuliner Kelas XI',
                'author' => 'Kemdikbud',
                'category' => 'Teknik & Rekayasa',
                'rack' => 'Rak 1',
                'type' => 'both',
                'stock' => 50,
                'cover_image_url' => 'buku/sampul/Kuliner_BS_KLS_XI.jpeg',
                'pdf_path' => 'buku/pdf/Kuliner_BS_KLS_XI.pdf',
                'rating' => 4.6,
                'popularity_score' => 0,
            ],
            (object)[
                'id' => 10,
                'title' => 'Layanan Penunjang Keperawatan dan Caregiving Kelas XI',
                'author' => 'Kemdikbud',
                'category' => 'Teknik & Rekayasa',
                'rack' => 'Rak 1',
                'type' => 'both',
                'stock' => 50,
                'cover_image_url' => 'buku/sampul/Layanan_Penunjang_Keperawatan_dan_Caregiving_BS_Kelas_XI.jpeg',
                'pdf_path' => 'buku/pdf/Layanan_Penunjang_Keperawatan_dan_Caregiving_BS_Kelas_XI_Rev.pdf',
                'rating' => 4.4,
                'popularity_score' => 0,
            ],
            (object)[
                'id' => 11,
                'title' => 'Bahasa Mandarin Kelas XI',
                'author' => 'Kemdikbud',
                'category' => 'Mata Pelajaran Umum',
                'rack' => 'Rak 1',
                'type' => 'both',
                'stock' => 50,
                'cover_image_url' => 'buku/sampul/Mandarin_BG_XI.jpeg',
                'pdf_path' => 'buku/pdf/Mandarin_BG_XI.pdf',
                'rating' => 4.3,
                'popularity_score' => 0,
            ],
            (object)[
                'id' => 12,
                'title' => 'Nautika Kapal Niaga Kelas XI',
                'author' => 'Kemdikbud',
                'category' => 'Teknik & Rekayasa',
                'rack' => 'Rak 1',
                'type' => 'both',
                'stock' => 50,
                'cover_image_url' => 'buku/sampul/Nautika_kapal_niaga_kls_XI.jpeg',
                'pdf_path' => 'buku/pdf/Nautika_Kapal_Niaga_BG_KLS_XI.pdf',
                'rating' => 4.7,
                'popularity_score' => 0,
            ],
            (object)[
                'id' => 13,
                'title' => 'PJOK Kelas XI',
                'author' => 'Kemdikbud',
                'category' => 'Mata Pelajaran Umum',
                'rack' => 'Rak 1',
                'type' => 'both',
                'stock' => 50,
                'cover_image_url' => 'buku/sampul/PJOK_kls_BG_XI.jpeg',
                'pdf_path' => 'buku/pdf/PJOK_BS_KLS_XI.pdf',
                'rating' => 4.5,
                'popularity_score' => 0,
            ],
            (object)[
                'id' => 14,
                'title' => 'Pengembangan Gim BG Kelas XI XII',
                'author' => 'Kemdikbud',
                'category' => 'Pengembangan Gim',
                'rack' => 'Rak 1',
                'type' => 'both',
                'stock' => 50,
                'cover_image_url' => 'buku/sampul/Pengembangan_Gim_BG_KLS_XI_XII_Cover.png',
                'pdf_path' => 'buku/pdf/Pengembangan_Gim_BG_KLS_XI_XII.pdf',
                'rating' => 4.8,
                'popularity_score' => 0,
            ],
            (object)[
                'id' => 15,
                'title' => 'Pengembangan Gim BS Kelas XI XII',
                'author' => 'Kemdikbud',
                'category' => 'Pengembangan Gim',
                'rack' => 'Rak 1',
                'type' => 'both',
                'stock' => 50,
                'cover_image_url' => 'buku/sampul/Pengembangan_Gim_BS_KLS_XI_XII_Cover.png',
                'pdf_path' => 'buku/pdf/Pengembangan_Gim_BS_KLS_XI_XII.pdf',
                'rating' => 4.8,
                'popularity_score' => 0,
            ],
            (object)[
                'id' => 16,
                'title' => 'Sejarah Kelas XI',
                'author' => 'Kemdikbud',
                'category' => 'Mata Pelajaran Umum',
                'rack' => 'Rak 1',
                'type' => 'both',
                'stock' => 50,
                'cover_image_url' => 'buku/sampul/Sejarah_BS_Kelas_XI_Rev_Cover.png',
                'pdf_path' => 'buku/pdf/Sejarah_BS_Kelas_XI_Rev.pdf',
                'rating' => 4.4,
                'popularity_score' => 0,
            ],
            (object)[
                'id' => 17,
                'title' => 'Seni Musik Kelas XI',
                'author' => 'Kemdikbud',
                'category' => 'Seni & Animasi',
                'rack' => 'Rak 1',
                'type' => 'both',
                'stock' => 50,
                'cover_image_url' => 'buku/sampul/seni_musik_BG_kls_XI.jpeg',
                'pdf_path' => 'buku/pdf/Seni_Musik_BG_KLS_XI_Rev.pdf',
                'rating' => 4.6,
                'popularity_score' => 0,
            ],
            (object)[
                'id' => 18,
                'title' => 'Seni Tari Kelas X',
                'author' => 'Kemdikbud',
                'category' => 'Seni & Animasi',
                'rack' => 'Rak 1',
                'type' => 'both',
                'stock' => 50,
                'cover_image_url' => 'buku/sampul/Seni_Tari_BG_KLS_X_Rev_Cover.png',
                'pdf_path' => 'buku/pdf/Seni_Tari_BG_KLS_X_Rev.pdf',
                'rating' => 4.5,
                'popularity_score' => 0,
            ],
            (object)[
                'id' => 19,
                'title' => 'Teknik Energi Surya Hidro dan Angin Kelas X',
                'author' => 'Kemdikbud',
                'category' => 'Teknik & Rekayasa',
                'rack' => 'Rak 1',
                'type' => 'both',
                'stock' => 50,
                'cover_image_url' => 'buku/sampul/teknik_tenaga_surya.jpeg',
                'pdf_path' => 'buku/pdf/Teknik_Energi_Surya_Hidro_dan_Angin_BS_Kelas_X.pdf',
                'rating' => 4.6,
                'popularity_score' => 0,
            ]
        ];
    }

    public function katalog()
    {
        $books = Book::all();
        $total_books = $books->sum('stock');
        return view('katalog', compact('books', 'total_books'));
    }


    public function sirkulasi()
    {
        return view('sirkulasi');
    }

    public function getBorrowings()
    {
        $user = Auth::user();
        $borrowings = Borrowing::with('book')
            ->where('user_id', $user->id)
            ->whereNull('returned_at')
            ->orderBy('due_date', 'asc')
            ->get();
            
        return response()->json([
            'success' => true,
            'borrowings' => $borrowings
        ]);
    }

    public function statistik()
    {
        // Basic stats for UI
        $popular_books = Book::orderBy('popularity_score', 'desc')->take(3)->get();
        return view('statistik', compact('popular_books'));
    }

    public function akun()
    {
        $user = Auth::user();
        return view('akun', compact('user'));
    }

    public function akunPengaturan()
    {
        $user = Auth::user();
        return view('akun_pengaturan', compact('user'));
    }

    public function scanBook(Request $request)
    {
        $code = trim($request->input('code', ''));
        if (empty($code)) {
            return response()->json(['success' => false, 'message' => 'Kode barcode buku kosong.'], 422);
        }

        // Try find by ID, or title, or category/rack
        $book = null;
        if (is_numeric($code)) {
            $book = Book::find($code);
        }
        
        if (!$book) {
            $book = Book::where('title', 'like', "%{$code}%")
                ->orWhere('category', 'like', "%{$code}%")
                ->orWhere('rack', 'like', "%{$code}%")
                ->first();
        }

        // If still not found, pick the first available book as demo match if keyword contains book or generic
        if (!$book) {
            $book = Book::first();
        }

        if (!$book) {
            return response()->json(['success' => false, 'message' => 'Buku tidak ditemukan dalam katalog.'], 404);
        }

        $action = $request->input('action', 'borrow');
        if ($action === 'borrow') {
            $user = Auth::user();

            // Check if already borrowed and active
            $existing = Borrowing::where('user_id', $user->id)
                ->where('book_id', $book->id)
                ->whereNull('returned_at')
                ->first();

            if ($existing) {
                return response()->json([
                    'success' => false,
                    'message' => 'Buku "' . $book->title . '" sudah sedang kamu pinjam!',
                    'book' => $book,
                ], 400);
            }

            if ($book->stock < 1) {
                return response()->json([
                    'success' => false,
                    'message' => 'Stok buku "' . $book->title . '" sedang habis / dipinjam.',
                    'book' => $book,
                ], 400);
            }

            // Create loan
            $borrowing = Borrowing::create([
                'user_id' => $user->id,
                'book_id' => $book->id,
                'borrowed_at' => \Carbon\Carbon::now(),
                'due_date' => \Carbon\Carbon::now()->addDays(14),
                'renew_count' => 0,
                'fine_amount' => 0,
                'status' => 'pending'
            ]);

            $book->decrement('stock');

            return response()->json([
                'success' => true,
                'message' => 'Peminjaman Mandiri Berhasil! Buku: ' . $book->title,
                'book' => $book,
                'due_date' => $borrowing->due_date->format('d M Y'),
            ]);
        }

        return response()->json([
            'success' => true,
            'book' => $book,
        ]);
    }
}
