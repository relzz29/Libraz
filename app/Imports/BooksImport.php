<?php

namespace App\Imports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsErrors;

class BooksImport implements 
    ToModel, 
    WithHeadingRow, 
    WithChunkReading, 
    WithBatchInserts, 
    WithValidation, 
    SkipsOnFailure, 
    SkipsOnError
{
    use SkipsFailures, SkipsErrors;

    protected int $successCount = 0;

    /**
     * Memetakan setiap baris spreadsheet ke instance Model Book
     */
    public function model(array $row): \Illuminate\Database\Eloquent\Model|array|null
    {
        // Support header bahasa Inggris maupun bahasa Indonesia
        $title    = trim($row['title'] ?? $row['judul'] ?? '');
        $author   = trim($row['author'] ?? $row['penulis'] ?? '');
        $category = trim($row['category'] ?? $row['kategori'] ?? 'Umum');
        $rack     = trim($row['rack'] ?? $row['rak'] ?? 'Rak 1');
        $isbn     = !empty($row['isbn']) ? trim((string)$row['isbn']) : null;
        $stock    = isset($row['stock']) ? (int)$row['stock'] : (isset($row['stok']) ? (int)$row['stok'] : 50);
        $typeRaw  = strtolower(trim($row['type'] ?? $row['tipe'] ?? 'physical'));
        $type     = in_array($typeRaw, ['ebook', 'both', 'physical']) ? $typeRaw : 'physical';
        $desc     = !empty($row['description']) ? trim($row['description']) : (!empty($row['deskripsi']) ? trim($row['deskripsi']) : null);

        // Jika judul dan penulis kosong, lewati baris
        if (empty($title) || empty($author)) {
            return null;
        }

        $this->successCount++;

        return new Book([
            'title'            => $title,
            'author'           => $author,
            'category'         => $category,
            'rack'             => $rack ?: 'Rak 1',
            'stock'            => max(0, $stock),
            'isbn'             => $isbn,
            'type'             => $type,
            'description'      => $desc,
            'rating'           => isset($row['rating']) ? (float)$row['rating'] : 4.5,
            'popularity_score' => 0,
            'cover_image_url'  => !empty($row['cover_image_url']) ? trim($row['cover_image_url']) : null,
            'pdf_path'         => !empty($row['pdf_path']) ? trim($row['pdf_path']) : null,
        ]);
    }

    /**
     * Aturan validasi ketat per baris data
     */
    public function rules(): array
    {
        return [
            '*.title'    => ['required_without:*.judul', 'string', 'max:255'],
            '*.judul'    => ['required_without:*.title', 'string', 'max:255'],
            '*.author'   => ['required_without:*.penulis', 'string', 'max:255'],
            '*.penulis'  => ['required_without:*.author', 'string', 'max:255'],
            '*.category' => ['nullable', 'string', 'max:100'],
            '*.kategori' => ['nullable', 'string', 'max:100'],
            '*.stock'    => ['nullable', 'numeric', 'min:0'],
            '*.stok'     => ['nullable', 'numeric', 'min:0'],
            '*.isbn'     => ['nullable', 'string', 'max:50'],
            '*.rack'     => ['nullable', 'string', 'max:50'],
            '*.rak'      => ['nullable', 'string', 'max:50'],
        ];
    }

    /**
     * Penamaan kolom yang mudah dibaca pada pesan error validasi
     */
    public function customValidationAttributes(): array
    {
        return [
            '*.title'    => 'Judul Buku',
            '*.judul'    => 'Judul Buku',
            '*.author'   => 'Penulis',
            '*.penulis'  => 'Penulis',
            '*.category' => 'Kategori',
            '*.kategori' => 'Kategori',
            '*.stock'    => 'Jumlah Stok',
            '*.stok'     => 'Jumlah Stok',
            '*.isbn'     => 'ISBN',
        ];
    }

    /**
     * Batas ukuran chunk membaca file demi efisiensi memori (RAM)
     */
    public function chunkSize(): int
    {
        return 500;
    }

    /**
     * Batas batch query insert sekaligus ke database
     */
    public function batchSize(): int
    {
        return 250;
    }

    /**
     * Mengambil jumlah baris yang berhasil diimpor
     */
    public function getSuccessCount(): int
    {
        return $this->successCount;
    }
}
