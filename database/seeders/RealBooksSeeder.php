<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class RealBooksSeeder extends Seeder
{
    public function run()
    {
        Book::truncate();

        $books = [
            [
                'title' => 'Animasi Kelas XI & XII',
                'author' => 'Kemdikbud',
                'category' => 'Pelajaran',
                'type' => 'both',
                'isbn' => '978-623-1234-01',
                'stock' => 10,
                'rack' => 'Rak Baru',
                'cover_image_url' => 'buku/sampul/Animasi_BS_Kelas_XI_dan_XII_Cover.png',
                'pdf_path' => 'buku/pdf/Animasi_BS_XI_dan_XII (1).pdf'
            ],
            [
                'title' => 'Dasar Teknik Konstruksi Kapal Semester 2 Kelas X',
                'author' => 'Kemdikbud',
                'category' => 'Sains & Teknologi',
                'type' => 'both',
                'isbn' => '978-623-1234-02',
                'stock' => 5,
                'rack' => 'Rak Baru',
                'cover_image_url' => 'buku/sampul/Dasar-Teknik-Konstruksi-Kapal-Semester-2-BS-KLS-X-Cover.png',
                'pdf_path' => 'buku/pdf/Dasar-Teknik-Konstruksi-Kapal-Semester-2-BS-KLS-X (1).pdf'
            ],
            [
                'title' => 'KKA Kelas 11',
                'author' => 'Kemdikbud',
                'category' => 'Pelajaran',
                'type' => 'both',
                'isbn' => '978-623-1234-03',
                'stock' => 7,
                'rack' => 'Rak Baru',
                'cover_image_url' => 'buku/sampul/KKA_BS_KLS_11_Cover.png',
                'pdf_path' => 'buku/pdf/KKA_BS_KLS_11.pdf'
            ],
            [
                'title' => 'Buku Guru: Pengembangan Gim Kelas XI & XII',
                'author' => 'Kemdikbud',
                'category' => 'Sains & Teknologi',
                'type' => 'both',
                'isbn' => '978-623-1234-04',
                'stock' => 2,
                'rack' => 'Rak Baru',
                'cover_image_url' => 'buku/sampul/Pengembangan_Gim_BG_KLS_XI_XII_Cover.png',
                'pdf_path' => 'buku/pdf/Pengembangan_Gim_BG_KLS_XI_XII.pdf'
            ],
            [
                'title' => 'Buku Siswa: Pengembangan Gim Kelas XI & XII',
                'author' => 'Kemdikbud',
                'category' => 'Sains & Teknologi',
                'type' => 'both',
                'isbn' => '978-623-1234-05',
                'stock' => 20,
                'rack' => 'Rak Baru',
                'cover_image_url' => 'buku/sampul/Pengembangan_Gim_BS_KLS_XI_XII_Cover.png',
                'pdf_path' => 'buku/pdf/Pengembangan_Gim_BS_KLS_XI_XII.pdf'
            ],
            [
                'title' => 'Sejarah Kelas XI (Revisi)',
                'author' => 'Kemdikbud',
                'category' => 'Sejarah',
                'type' => 'both',
                'isbn' => '978-623-1234-06',
                'stock' => 15,
                'rack' => 'Rak Baru',
                'cover_image_url' => 'buku/sampul/Sejarah_BS_Kelas_XI_Rev_Cover.png',
                'pdf_path' => 'buku/pdf/Sejarah_BS_Kelas_XI_Rev.pdf'
            ],
            [
                'title' => 'Buku Guru: Seni Tari Kelas X (Revisi)',
                'author' => 'Kemdikbud',
                'category' => 'Seni',
                'type' => 'both',
                'isbn' => '978-623-1234-07',
                'stock' => 3,
                'rack' => 'Rak Baru',
                'cover_image_url' => 'buku/sampul/Seni_Tari_BG_KLS_X_Rev_Cover.png',
                'pdf_path' => 'buku/pdf/Seni_Tari_BG_KLS_X_Rev.pdf'
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
