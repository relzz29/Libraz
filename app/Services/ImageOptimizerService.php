<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageOptimizerService
{
    /**
     * Mengompresi dan mengonversi gambar sampul buku menjadi WebP optimal
     * menggunakan GD library bawaan PHP (tanpa dependensi eksternal berat).
     *
     * @param UploadedFile $file
     * @param string $directory Subdirektori penyimpanan di storage disk 'public'
     * @param int $maxWidth Batas lebar maksimal (default 600px untuk rasio sampul)
     * @param int $quality Tingkat kualitas WebP (default 80)
     * @return string URL relatif publik untuk disimpan di database (misal: '/storage/covers/...')
     */
    public function optimizeAndStoreCover(
        UploadedFile $file,
        string $directory = 'covers',
        int $maxWidth = 600,
        int $quality = 80
    ): string {
        $sourcePath = $file->getRealPath();
        $mime = $file->getMimeType();

        // 1. Baca gambar sumber berdasarkan MIME type
        $srcImage = null;
        switch ($mime) {
            case 'image/jpeg':
            case 'image/jpg':
                $srcImage = @imagecreatefromjpeg($sourcePath);
                break;
            case 'image/png':
                $srcImage = @imagecreatefrompng($sourcePath);
                break;
            case 'image/webp':
                $srcImage = @imagecreatefromwebp($sourcePath);
                break;
            default:
                // Fallback jika format imagecreatetruecolor lain
                $data = file_get_contents($sourcePath);
                $srcImage = @imagecreatefromstring($data);
                break;
        }

        // Jika GD gagal mengurai gambar, simpan fallback normal
        if (!$srcImage) {
            $path = $file->store($directory, 'public');
            return '/storage/' . $path;
        }

        $origWidth = imagesx($srcImage);
        $origHeight = imagesy($srcImage);

        // 2. Hitung skala proporsional jika lebar melebihi $maxWidth
        if ($origWidth > $maxWidth) {
            $newWidth = $maxWidth;
            $newHeight = (int) round(($origHeight / $origWidth) * $newWidth);
        } else {
            $newWidth = $origWidth;
            $newHeight = $origHeight;
        }

        // 3. Buat kanvas truecolor baru
        $dstImage = imagecreatetruecolor($newWidth, $newHeight);

        // Pertahankan transparansi (untuk PNG/WebP transparan)
        imagealphablending($dstImage, false);
        imagesavealpha($dstImage, true);
        $transparent = imagecolorallocatealpha($dstImage, 255, 255, 255, 127);
        imagefilledrectangle($dstImage, 0, 0, $newWidth, $newHeight, $transparent);
        imagealphablending($dstImage, true);

        // Resample dengan filter bicubic yang halus
        imagecopyresampled($dstImage, $srcImage, 0, 0, 0, 0, $newWidth, $newHeight, $origWidth, $origHeight);

        // 4. Simpan ke berkas WebP
        $filename = Str::uuid() . '.webp';
        $fullRelPath = trim($directory, '/') . '/' . $filename;
        $tempPath = tempnam(sys_get_temp_dir(), 'webp_');

        if (function_exists('imagewebp')) {
            imagewebp($dstImage, $tempPath, $quality);
            Storage::disk('public')->put($fullRelPath, file_get_contents($tempPath));
            @unlink($tempPath);
            $savedUrl = '/storage/' . $fullRelPath;
        } else {
            // Fallback JPEG jika server tidak ada WebP
            imagejpeg($dstImage, $tempPath, $quality);
            $fullJpgPath = trim($directory, '/') . '/' . Str::uuid() . '.jpg';
            Storage::disk('public')->put($fullJpgPath, file_get_contents($tempPath));
            @unlink($tempPath);
            $savedUrl = '/storage/' . $fullJpgPath;
        }

        // Bebaskan memori GD
        imagedestroy($srcImage);
        imagedestroy($dstImage);

        return $savedUrl;
    }
}

