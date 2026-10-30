<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class BooksTemplateExport implements FromArray, WithHeadings, WithStyles
{
    /**
     * Header baris pertama template
     */
    public function headings(): array
    {
        return [
            'title',
            'author',
            'category',
            'rack',
            'stock',
            'isbn',
            'type',
            'description',
        ];
    }

    /**
     * Contoh data baris sampel untuk panduan admin
     */
    public function array(): array
    {
        return [
            [
                'title'       => 'Pemrograman Web Modern dengan Laravel & Tailwind',
                'author'      => 'Ahmad Syahrir, S.Kom',
                'category'    => 'Teknik & Rekayasa',
                'rack'        => 'Rak A-1',
                'stock'       => 50,
                'isbn'        => '978-602-1234-56-7',
                'type'        => 'both',
                'description' => 'Buku panduan praktis implementasi rekayasa perangkat lunak untuk siswa SMK.',
            ],
            [
                'title'       => 'Dasar-Dasar Desain Animasi 3D',
                'author'      => 'Kemdikbud',
                'category'    => 'Seni & Animasi',
                'rack'        => 'Rak B-2',
                'stock'       => 40,
                'isbn'        => '978-602-9876-54-3',
                'type'        => 'physical',
                'description' => 'Buku teks utama mata pelajaran kejuruan Animasi kelas XI.',
            ],
            [
                'title'       => 'Pendidikan Kewirausahaan & Ekonomi Kreatif',
                'author'      => 'Dr. Siti Nurhaliza',
                'category'    => 'Mata Pelajaran Umum',
                'rack'        => 'Rak C-1',
                'stock'       => 35,
                'isbn'        => '978-602-5555-12-0',
                'type'        => 'ebook',
                'description' => 'Panduan pengembangan produk kreatif dan bisnis digital di sekolah.',
            ],
        ];
    }

    /**
     * Styling header template
     */
    public function styles(Worksheet $sheet): ?array
    {
        return [
            1 => [
                'font' => ['bold' => true, 'color' => ['rgb' => 'FFFFFF']],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'startColor' => ['rgb' => '6354D4']
                ],
            ],
        ];
    }
}
