<?php
$file = __DIR__ . '/resources/views/katalog.blade.php';
$content = file_get_contents($file);

// 1. Wrap the @forelse in a grid container
// The line right before @forelse is the section header:
// <div class="flex items-center justify-between pt-space-xs"> ... </div>
// We need to inject <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6"> before @forelse
// and </div> after @endforelse

$content = str_replace('@forelse($books as $book)', '<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">' . "\n" . '@forelse($books as $book)', $content);
$content = str_replace('@endforelse', '@endforelse' . "\n" . '</div>', $content);

// 2. Modify the book-card article classes
// Currently it is `<article class="book-card flex flex-col...`
// The inside is `<div class="flex gap-space-md">` for the image and text side-by-side.
// We want it to be stacked: image on top (full width), text on bottom.
$content = preg_replace('/<div class="flex gap-space-md">/', '<div class="flex flex-col gap-space-md">', $content, 100); // 100 is max replacements

// 3. Make the thumbnail cover full width instead of 24x36
$content = str_replace('w-24 h-36', 'w-full h-48 sm:h-56', $content);

// 4. Center the text or keep it left-aligned but stacked nicely
// In the Info details: <div class="flex flex-col flex-1 min-w-0 justify-between">
// Just let it be flex-col.
$content = str_replace('line-clamp-2', 'line-clamp-2 mt-2', $content);

// 5. Update the action buttons
// <div class="grid grid-cols-2 gap-space-sm pt-space-xs"> 
// Keep it grid-cols-2 or grid-cols-1 depending on space, let's make it flex flex-col gap-2
$content = str_replace('<div class="grid grid-cols-2 gap-space-sm pt-space-xs">', '<div class="flex flex-col gap-2 pt-space-sm mt-auto">', $content);

// Save
file_put_contents($file, $content);
echo "Katalog updated to Grid Layout";
