<?php
$file = __DIR__ . '/resources/views/notifikasi.blade.php';
$content = file_get_contents($file);

// 1. Remove the old time & close button div
$oldTimeBlockRegex = '/<div class="absolute right-space-md top-space-md flex flex-col items-end gap-1\.5 z-10">.*?<\/div>\s*<div class="flex items-center gap-3 pr-12 md:pr-0 flex-shrink-0">/s';
$content = preg_replace($oldTimeBlockRegex, '<div class="flex items-center gap-3 pr-12 md:pr-0 flex-shrink-0">', $content);

// 2. Add padding to the text block
$content = str_replace(
    '<div class="flex flex-col gap-1.5 flex-1 min-w-0">',
    '<div class="flex flex-col gap-1.5 flex-1 min-w-0 md:pr-8">',
    $content
);

// 3. Inject the new time & close button div after the text block
$textBlockRegex = '/(<div class="flex flex-col gap-1\.5 flex-1 min-w-0 md:pr-8">.*?<\/div>)/s';
$newTimeBlock = <<<HTML
$1
                    <!-- Time and Close Button (Absolute on Mobile, Static on Desktop) -->
                    <div class="absolute right-space-md top-space-md md:static md:right-auto md:top-auto flex flex-col items-end justify-between gap-2 z-10 md:ml-auto flex-shrink-0 h-full">
                        <button onclick="dismissNotif('{{ \$notif['id'] }}')" class="w-7 h-7 md:w-8 md:h-8 rounded-full bg-slate-100/80 hover:bg-slate-200/90 text-slate-400 hover:text-slate-700 flex items-center justify-center transition-all cursor-pointer backdrop-blur-sm md:self-end" title="Hapus Notifikasi">
                            <span class="material-symbols-outlined text-[16px]">close</span>
                        </button>
                        <span class="font-label-sm text-label-sm md:text-xs md:font-semibold text-slate-400 whitespace-nowrap md:mt-auto bg-slate-50/50 md:bg-transparent px-2 md:px-0 py-0.5 rounded-md backdrop-blur-md">{{ \$notif['time'] }}</span>
                    </div>
HTML;
$content = preg_replace($textBlockRegex, $newTimeBlock, $content);

file_put_contents($file, $content);
echo "Layout fixed.";
