<?php
header('Content-Type: text/plain; charset=utf-8');
echo "=== VERCEL PHP RUNTIME OK ===\n";
echo "PHP Version: " . PHP_VERSION . "\n";
echo "Server Software: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'N/A') . "\n";
echo "Vercel Region: " . ($_SERVER['VERCEL_REGION'] ?? 'N/A') . "\n";
echo "Timestamp: " . date('Y-m-d H:i:s') . "\n";

