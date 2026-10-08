<?php
$file = __DIR__ . '/resources/views/sirkulasi.blade.php';
$content = file_get_contents($file);

$cssFont = <<<HTML
<style>
  body, h1, h2, h3, h4, h5, h6, p, span, div, a, button {
    font-family: 'Plus Jakarta Sans', sans-serif !important;
  }
</style>
</head>
HTML;

$content = str_replace('</head>', $cssFont, $content);
file_put_contents($file, $content);
echo "Font fixed.";
