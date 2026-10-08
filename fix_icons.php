<?php
$file = __DIR__ . '/resources/views/sirkulasi.blade.php';
$content = file_get_contents($file);

$oldFont = <<<HTML
<style>
  body, h1, h2, h3, h4, h5, h6, p, span, div, a, button {
    font-family: 'Plus Jakarta Sans', sans-serif !important;
  }
</style>
HTML;

$newFont = <<<HTML
<style>
  body, h1, h2, h3, h4, h5, h6, p, div, a, button {
    font-family: 'Plus Jakarta Sans', sans-serif !important;
  }
  span:not(.material-symbols-outlined) {
    font-family: 'Plus Jakarta Sans', sans-serif !important;
  }
  .material-symbols-outlined {
    font-family: 'Material Symbols Outlined' !important;
  }
</style>
HTML;

$content = str_replace($oldFont, $newFont, $content);

file_put_contents($file, $content);
echo "Font fixed properly.";
