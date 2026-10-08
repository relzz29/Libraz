<?php
$file = __DIR__ . '/resources/views/notifikasi.blade.php';
$content = file_get_contents($file);

// 1. Fix the timestamp and close button positioning
// Replace: <div class="absolute right-space-md top-space-md md:relative md:right-0 md:top-0 flex flex-col items-end gap-2 ml-auto">
// With:    <div class="absolute right-space-md top-space-md flex flex-col items-end gap-1.5 z-10">
$content = str_replace(
    '<div class="absolute right-space-md top-space-md md:relative md:right-0 md:top-0 flex flex-col items-end gap-2 ml-auto">',
    '<div class="absolute right-space-md top-space-md flex flex-col items-end gap-1.5 z-10">',
    $content
);

$content = str_replace(
    '<button onclick="dismissNotif(\'{{ $notif[\'id\'] }}\')" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-400 hover:text-slate-600 flex items-center justify-center transition-colors mb-1 md:mb-0" title="Hapus Notifikasi">',
    '<button onclick="dismissNotif(\'{{ $notif[\'id\'] }}\')" class="w-7 h-7 md:w-8 md:h-8 rounded-full bg-slate-100/80 hover:bg-slate-200/90 text-slate-400 hover:text-slate-700 flex items-center justify-center transition-all cursor-pointer backdrop-blur-sm" title="Hapus Notifikasi">',
    $content
);

// 2. Enhance the Empty State
$emptyStateOld = '<div id="empty-state" class="py-8 text-center text-on-surface-variant flex flex-col items-center hidden">';
$emptyStateNew = <<<HTML
<div id="empty-state" class="hidden mt-8 flex-col items-center justify-center w-full bg-white/40 backdrop-blur-xl border border-white/60 rounded-[32px] p-10 md:p-16 shadow-lg shadow-indigo-100/30">
    <div class="w-24 h-24 mb-6 rounded-full bg-gradient-to-tr from-indigo-100 to-purple-50 flex items-center justify-center shadow-inner relative">
        <div class="absolute inset-0 bg-white/50 rounded-full blur-md"></div>
        <span class="material-symbols-outlined text-[48px] text-indigo-300 relative z-10">notifications_paused</span>
    </div>
    <h3 class="font-title-md text-xl md:text-2xl text-slate-700 font-bold mb-2">Belum Ada Notifikasi</h3>
    <p class="font-body-md text-sm md:text-base text-slate-500 text-center max-w-sm leading-relaxed">
        Kamu sudah membaca semua pemberitahuan hari ini. Pinjam buku baru untuk mendapatkan update terbaru!
    </p>
    <a href="/katalog" class="mt-8 px-6 py-2.5 rounded-full bg-indigo-600 hover:bg-indigo-700 text-white font-label-md text-sm shadow-md shadow-indigo-200 hover:-translate-y-0.5 transition-all">
        Jelajahi Katalog
    </a>
</div>
HTML;

// Only replace if the old empty state is found in the exact shape
$content = preg_replace('/<div id="empty-state"[^>]*>.*?<\/div>/s', $emptyStateNew, $content);

file_put_contents($file, $content);
echo "Notifikasi Blade updated.\n";

// 3. Fix the Timezone in routes/web.php
$routeFile = __DIR__ . '/routes/web.php';
$routeContent = file_get_contents($routeFile);

$routeContent = str_replace(
    '$dateStr = \Carbon\Carbon::parse($b->borrowed_at)->translatedFormat(\'d M Y, H:i\');',
    '$dateStr = \Carbon\Carbon::parse($b->borrowed_at)->timezone(\'Asia/Jakarta\')->translatedFormat(\'d M Y, H:i\');',
    $routeContent
);

$routeContent = str_replace(
    '$timeDiff = \Carbon\Carbon::parse($b->borrowed_at)->diffForHumans();',
    '$timeDiff = \Carbon\Carbon::parse($b->borrowed_at)->timezone(\'Asia/Jakarta\')->diffForHumans();',
    $routeContent
);

$routeContent = str_replace(
    '$dateStr = \Carbon\Carbon::parse($b->returned_at)->translatedFormat(\'d M Y, H:i\');',
    '$dateStr = \Carbon\Carbon::parse($b->returned_at)->timezone(\'Asia/Jakarta\')->translatedFormat(\'d M Y, H:i\');',
    $routeContent
);

$routeContent = str_replace(
    '$timeDiff = \Carbon\Carbon::parse($b->returned_at)->diffForHumans();',
    '$timeDiff = \Carbon\Carbon::parse($b->returned_at)->timezone(\'Asia/Jakarta\')->diffForHumans();',
    $routeContent
);

file_put_contents($routeFile, $routeContent);
echo "Web.php timezone updated.\n";
