<?php

/**
 * ==============================================================================
 * VERCEL SERVERLESS ENTRYPOINT FOR LARAVEL 11/12
 * ==============================================================================
 */

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Health check endpoint: jika URL memiliki ?check=1
if (isset($_GET['check']) || str_contains($_SERVER['REQUEST_URI'] ?? '', 'check=1')) {
    header('Content-Type: text/plain; charset=utf-8');
    echo "=== LIBRAZ VERCEL DIAGNOSTICS ===\n\n";
    echo "PHP Version: " . PHP_VERSION . "\n";
    echo "OS: " . PHP_OS . "\n";
    echo "vendor/autoload.php: " . (file_exists(__DIR__ . '/../vendor/autoload.php') ? 'FOUND' : 'MISSING!') . "\n";
    echo "public/index.php: " . (file_exists(__DIR__ . '/../public/index.php') ? 'FOUND' : 'MISSING!') . "\n";
    echo "bootstrap/app.php: " . (file_exists(__DIR__ . '/../bootstrap/app.php') ? 'FOUND' : 'MISSING!') . "\n\n";
    echo "APP_KEY: " . (getenv('APP_KEY') ?: ($_ENV['APP_KEY'] ?? 'MISSING!')) . "\n";
    echo "DB_CONNECTION: " . (getenv('DB_CONNECTION') ?: ($_ENV['DB_CONNECTION'] ?? 'MISSING!')) . "\n";
    echo "DB_HOST: " . (getenv('DB_HOST') ?: ($_ENV['DB_HOST'] ?? 'MISSING!')) . "\n";
    echo "DB_PORT: " . (getenv('DB_PORT') ?: ($_ENV['DB_PORT'] ?? 'MISSING!')) . "\n";
    echo "DB_DATABASE: " . (getenv('DB_DATABASE') ?: ($_ENV['DB_DATABASE'] ?? 'MISSING!')) . "\n";
    echo "DB_USERNAME: " . (getenv('DB_USERNAME') ?: ($_ENV['DB_USERNAME'] ?? 'MISSING!')) . "\n";
    echo "DB_PASSWORD: " . (getenv('DB_PASSWORD') ? 'SET' : 'MISSING!') . "\n\n";
    
    // Test PDO connection
    $host = getenv('DB_HOST') ?: ($_ENV['DB_HOST'] ?? null);
    $port = getenv('DB_PORT') ?: ($_ENV['DB_PORT'] ?? '6543');
    $db   = getenv('DB_DATABASE') ?: ($_ENV['DB_DATABASE'] ?? null);
    $user = getenv('DB_USERNAME') ?: ($_ENV['DB_USERNAME'] ?? null);
    $pass = getenv('DB_PASSWORD') ?: ($_ENV['DB_PASSWORD'] ?? null);
    
    if ($host && $db && $user) {
        try {
            $dsn = "pgsql:host=$host;port=$port;dbname=$db;sslmode=require";
            $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_TIMEOUT => 5]);
            echo "DATABASE TEST: CONNECTED TO SUPABASE SUCCESSFULLY!\n";
        } catch (\Throwable $e) {
            echo "DATABASE TEST FAILED: " . $e->getMessage() . "\n";
        }
    } else {
        echo "DATABASE TEST SKIPPED: Database environment variables are missing.\n";
    }
    exit;
}

// Tangkap fatal shutdown error agar tidak disembunyikan oleh Vercel
register_shutdown_function(function () {
    $err = error_get_last();
    if ($err && in_array($err['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR, E_USER_ERROR])) {
        http_response_code(200);
        header('Content-Type: text/plain; charset=utf-8');
        echo "=== VERCEL FATAL SHUTDOWN ERROR ===\n\n";
        echo "Message: " . $err['message'] . "\n";
        echo "File:    " . $err['file'] . "\n";
        echo "Line:    " . $err['line'] . "\n";
        exit;
    }
});

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

try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    http_response_code(200);
    header('Content-Type: text/plain; charset=utf-8');
    echo "=== LARAVEL RUNTIME EXCEPTION ON VERCEL ===\n\n";
    echo $e->getMessage() . "\n\n";
    echo "File: " . $e->getFile() . ":" . $e->getLine() . "\n\n";
    echo $e->getTraceAsString();
    exit;
}
