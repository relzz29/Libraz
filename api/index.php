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

// Set variable lingkungan penting untuk Vercel serverless
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
putenv('APP_CONFIG_CACHE=/tmp/config.php');
putenv('APP_ROUTES_CACHE=/tmp/routes.php');
putenv('APP_EVENTS_CACHE=/tmp/events.php');
putenv('APP_PACKAGES_CACHE=/tmp/packages.php');
putenv('APP_SERVICES_CACHE=/tmp/services.php');

// Teruskan penanganan permintaan ke file utama public/index.php
require __DIR__ . '/../public/index.php';
