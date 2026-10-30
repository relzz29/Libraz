<?php

namespace App\Http\Controllers;

use App\Exports\BooksTemplateExport;
use App\Imports\BooksImport;
use App\Services\LibraryCacheService;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Log;

class AdminBookImportController extends Controller
{
    /**
     * Tampilkan halaman antarmuka upload import data buku
     */
    public function showForm()
    {
        return view('admin_import_buku');
    }

    /**
     * Proses file spreadsheet (XLSX / CSV) dan eksekusi import massal
     */
    public function import(Request $request)
    {
        // 1. Validasi Keamanan Berkas Unggahan
        $request->validate([
            'file' => [
                'required',
                'file',
                'mimes:xlsx,xls,csv,txt',
                'max:10240', // Maksimal 10 MB
            ],
        ], [
            'file.required' => 'Silakan pilih berkas Excel atau CSV terlebih dahulu.',
            'file.mimes'    => 'Format berkas tidak didukung! Harap unggah berkas berekstensi .xlsx, .xls, atau .csv.',
            'file.max'      => 'Ukuran berkas melebihi batas maksimal (10 MB).',
        ]);

        $file = $request->file('file');

        try {
            // 2. Inisialisasi Class Import dengan Chunk & Batch Inserts
            $import = new BooksImport();

            // 3. Eksekusi Pembacaan Berkas Menggunakan Laravel-Excel
            Excel::import($import, $file);

            // 4. Bersihkan Cache Perpustakaan agar data di Katalog & Landing segera tampil
            LibraryCacheService::flushBookCache();

            // 5. Periksa Apakah Ada Baris yang Gagal Validasi
            $failures = $import->failures();
            $successCount = $import->getSuccessCount();

            // Format baris-baris yang gagal untuk ditampilkan rapi ke admin
            $failureDetails = [];
            foreach ($failures as $failure) {
                $failureDetails[] = [
                    'row'       => $failure->row(),
                    'attribute' => $failure->attribute(),
                    'errors'    => $failure->errors(),
                    'values'    => $failure->values(),
                ];
            }

            // Jika ada baris gagal namun ada pula yang berhasil
            if (!empty($failureDetails)) {
                $message = "Import selesai! Sebanyak {$successCount} buku berhasil ditambahkan, namun terdapat " . count($failureDetails) . " baris data yang memiliki kesalahan validasi.";
                
                return redirect()->route('admin.books.import')
                    ->with('warning', $message)
                    ->with('failures', $failureDetails);
            }

            // Jika semua baris berhasil 100%
            return redirect()->route('admin.books.import')
                ->with('success', "🎉 Selamat! Sebanyak {$successCount} data buku berhasil diimpor ke dalam katalog perpustakaan tanpa kendala.");

        } catch (\Throwable $e) {
            Log::error('Bulk import book error: ' . $e->getMessage(), [
                'exception' => $e,
            ]);

            return redirect()->route('admin.books.import')
                ->with('error', 'Gagal memproses berkas spreadsheet: ' . $e->getMessage());
        }
    }

    /**
     * Download berkas contoh template spreadsheet (.xlsx atau .csv)
     */
    public function downloadTemplate($format = 'xlsx')
    {
        $extension = strtolower($format) === 'csv' ? 'csv' : 'xlsx';
        $fileName = 'template_import_buku_libraz.' . $extension;

        $writerType = $extension === 'csv' 
            ? \Maatwebsite\Excel\Excel::CSV 
            : \Maatwebsite\Excel\Excel::XLSX;

        return Excel::download(new BooksTemplateExport(), $fileName, $writerType);
    }
}

