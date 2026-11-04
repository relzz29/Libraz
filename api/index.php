<?php

/**
 * ==============================================================================
 * VERCEL SERVERLESS ENTRYPOINT FOR LARAVEL
 * ==============================================================================
 * Di lingkungan serverless Vercel, sistem file bersifat read-only kecuali direktori /tmp.
 * Skrip ini memastikan folder cache dan session diarahkan ke /tmp.
 */

// Siapkan direktori penyimpanan dinamis di /tmp (serverless writable directory)
$storageDirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache'
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// Teruskan penanganan permintaan ke file utama public/index.php Laravel
require __DIR__ . '/../public/index.php';

