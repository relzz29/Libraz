<?php
$file = __DIR__ . '/resources/views/edit_profil.blade.php';
$content = file_get_contents($file);

$search = "email: newEmail,";
$replace = "email: newEmail === '' ? null : newEmail,";

$content = str_replace($search, $replace, $content);
file_put_contents($file, $content);
echo "Email field fixed.";
