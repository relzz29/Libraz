<?php
$file = __DIR__ . '/resources/views/akun.blade.php';
$content = file_get_contents($file);

$search = '<div class="flex items-center gap-6 relative z-10 w-full mb-6">';
$replace = '<div class="flex flex-col md:flex-row md:items-start items-center text-center md:text-left gap-6 md:gap-8 relative z-10 w-full mb-6">';

$content = str_replace($search, $replace, $content);

// Center elements internally on mobile if needed
$search2 = '<div class="mt-3 flex items-center gap-3">';
$replace2 = '<div class="mt-3 flex flex-wrap justify-center md:justify-start items-center gap-3">';
$content = str_replace($search2, $replace2, $content);

$search3 = '<div class="mt-5 flex flex-col gap-4">';
$replace3 = '<div class="mt-6 flex flex-col items-center md:items-start gap-4">';
$content = str_replace($search3, $replace3, $content);

file_put_contents($file, $content);
echo "Alignment fixed.";
