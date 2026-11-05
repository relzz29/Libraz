<?php

/**
 * ==============================================================================
 * VERCEL SERVERLESS ENTRYPOINT FOR LARAVEL
 * ==============================================================================
 */

// Tandai lingkungan Vercel
putenv('VERCEL=1');
$_ENV['VERCEL'] = '1';
$_SERVER['VERCEL'] = '1';

// Siapkan direktori storage sementara di /tmp yang writable
$tmpStorage = '/tmp/storage';
$requiredDirs = [
    $tmpStorage . '/framework/views',
    $tmpStorage . '/framework/cache',
    $tmpStorage . '/framework/cache/data',
    $tmpStorage . '/framework/sessions',
    $tmpStorage . '/logs',
    $tmpStorage . '/app/public',
    '/tmp/bootstrap/cache',
];

foreach ($requiredDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// Arahkan path compile dan cache ke /tmp
putenv('VIEW_COMPILED_PATH=' . $tmpStorage . '/framework/views');
putenv('APP_CONFIG_CACHE=/tmp/bootstrap/cache/config.php');
putenv('APP_EVENTS_CACHE=/tmp/bootstrap/cache/events.php');
putenv('APP_PACKAGES_CACHE=/tmp/bootstrap/cache/packages.php');
putenv('APP_ROUTES_CACHE=/tmp/bootstrap/cache/routes.php');
putenv('APP_SERVICES_CACHE=/tmp/bootstrap/cache/services.php');

// Teruskan penanganan permintaan ke file utama public/index.php
require __DIR__ . '/../public/index.php';
