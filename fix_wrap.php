<?php
$file = __DIR__ . '/resources/views/akun.blade.php';
$content = file_get_contents($file);

$search = '<div class="mt-4 flex flex-col md:flex-row items-center md:items-stretch gap-4 w-full">';
$replace = '<div class="mt-4 flex flex-wrap justify-center md:justify-start items-start gap-4 w-full">';

$content = str_replace($search, $replace, $content);
file_put_contents($file, $content);
echo "Fix wrap and stretch.";
