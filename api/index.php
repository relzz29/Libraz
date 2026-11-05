<?php

/**
 * ==============================================================================
 * VERCEL SERVERLESS ENTRYPOINT FOR LARAVEL
 * ==============================================================================
 */

// Siapkan struktur direktori writable di /tmp
$storageDirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache'
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// Arahkan view yang dicompile ke /tmp yang writable
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');

// Teruskan penanganan permintaan ke file utama public/index.php
require __DIR__ . '/../public/index.php';
