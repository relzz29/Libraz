<?php

/**
 * ==============================================================================
 * VERCEL SERVERLESS ENTRYPOINT FOR LARAVEL (LIBRAZ)
 * ==============================================================================
 */

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Fallback environment variables jika belum diisi di dashboard Vercel
function ensure_env($key, $default) {
    $val = getenv($key);
    if ($val === false || $val === '') {
        $val = $_ENV[$key] ?? '';
    }
    if ($val === false || $val === '') {
        putenv("{$key}={$default}");
        $_ENV[$key] = $default;
        $_SERVER[$key] = $default;
    }
}

// Set default envs untuk Libraz
ensure_env('APP_NAME', 'Libraz');
ensure_env('APP_ENV', 'production');
ensure_env('APP_DEBUG', 'true');
ensure_env('APP_KEY', 'base64:N8TGYkDq37voyNpCkzleQSf4elBPXtPeKkvfX8BGZPg=');
ensure_env('APP_URL', 'https://librazperpustakaan.vercel.app');

// Database Supabase Fallbacks
ensure_env('DB_CONNECTION', 'pgsql');
ensure_env('DB_HOST', 'aws-0-ap-south-1.pooler.supabase.com');
ensure_env('DB_PORT', '6543');
ensure_env('DB_DATABASE', 'postgres');
ensure_env('DB_USERNAME', 'postgres.otvrdawzgzqxfqbsfymu');
ensure_env('DB_PASSWORD', 'farelmiripmonyet');

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
$_ENV['VIEW_COMPILED_PATH'] = $tmpStorage . '/framework/views';

putenv('APP_CONFIG_CACHE=/tmp/bootstrap/cache/config.php');
putenv('APP_EVENTS_CACHE=/tmp/bootstrap/cache/events.php');
putenv('APP_PACKAGES_CACHE=/tmp/bootstrap/cache/packages.php');
putenv('APP_ROUTES_CACHE=/tmp/bootstrap/cache/routes.php');
putenv('APP_SERVICES_CACHE=/tmp/bootstrap/cache/services.php');

// Health check endpoint jika query parameter ?check=1
if (isset($_GET['check']) || str_contains($_SERVER['REQUEST_URI'] ?? '', 'check=1')) {
    header('Content-Type: text/plain; charset=utf-8');
    echo "=== LIBRAZ VERCEL HEALTH & DIAGNOSTICS ===\n\n";
    echo "PHP Version: " . PHP_VERSION . "\n";
    echo "OS: " . PHP_OS . "\n";
    echo "Autoload: " . (file_exists(__DIR__ . '/../vendor/autoload.php') ? 'FOUND' : 'MISSING') . "\n";
    echo "Public Index: " . (file_exists(__DIR__ . '/../public/index.php') ? 'FOUND' : 'MISSING') . "\n";
    echo "Bootstrap App: " . (file_exists(__DIR__ . '/../bootstrap/app.php') ? 'FOUND' : 'MISSING') . "\n";
    echo "APP_KEY: " . (getenv('APP_KEY') ? 'CONFIGURED (' . substr(getenv('APP_KEY'), 0, 15) . '...)' : 'MISSING!') . "\n";
    echo "DB_HOST: " . getenv('DB_HOST') . "\n";
    echo "DB_DATABASE: " . getenv('DB_DATABASE') . "\n";
    echo "DB_USERNAME: " . getenv('DB_USERNAME') . "\n\n";

    // Test PDO connection ke Supabase
    try {
        $host = getenv('DB_HOST');
        $port = getenv('DB_PORT');
        $db   = getenv('DB_DATABASE');
        $user = getenv('DB_USERNAME');
        $pass = getenv('DB_PASSWORD');
        $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=require", $user, $pass, [
            PDO::ATTR_TIMEOUT => 5,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
        echo "SUPABASE DATABASE: CONNECTED SUCCESSFULLY!\n";
    } catch (\Throwable $e) {
        echo "SUPABASE DATABASE ERROR: " . $e->getMessage() . "\n";
    }
    exit;
}

// Tangkap fatal shutdown error agar dapat terbaca jelas
register_shutdown_function(function () {
    $err = error_get_last();
    if ($err && in_array($err['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR, E_USER_ERROR])) {
        http_response_code(200);
        header('Content-Type: text/plain; charset=utf-8');
        echo "=== VERCEL FATAL SHUTDOWN ERROR ===\n\n";
        echo "Message: " . $err['message'] . "\n";
        echo "File:    " . $err['file'] . ":" . $err['line'] . "\n";
        exit;
    }
});

// Jalankan Laravel via public/index.php
try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    http_response_code(200);
    header('Content-Type: text/plain; charset=utf-8');
    echo "=== LARAVEL RUNTIME EXCEPTION ON VERCEL ===\n\n";
    echo "Error: " . $e->getMessage() . "\n";
    echo "File:  " . $e->getFile() . ":" . $e->getLine() . "\n\n";
    echo "Trace:\n" . $e->getTraceAsString();
    exit;
}
