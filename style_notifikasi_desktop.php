<?php
$file = __DIR__ . '/resources/views/notifikasi.blade.php';
$content = file_get_contents($file);

// Enhance main background and max-width container
$content = preg_replace(
    '/<main class="flex flex-col relative w-full pt-16 pb-24 bg-surface min-h-screen items-center">/',
    '<main class="flex flex-col relative w-full pt-20 pb-24 min-h-screen items-center bg-gradient-to-br from-indigo-50 via-white to-purple-50 relative overflow-hidden">
        <!-- Ambient Glassmorphism Blobs -->
        <div class="absolute top-[-10%] left-[-10%] w-[50vw] h-[50vw] max-w-[600px] max-h-[600px] bg-purple-300/30 rounded-full blur-[120px] pointer-events-none mix-blend-multiply"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[50vw] h-[50vw] max-w-[600px] max-h-[600px] bg-indigo-300/30 rounded-full blur-[120px] pointer-events-none mix-blend-multiply"></div>',
    $content
);

$content = preg_replace(
    '/<div class="flex flex-col w-full max-w-md px-margin space-y-space-md pt-space-md">/',
    '<div class="flex flex-col w-full max-w-md md:max-w-3xl lg:max-w-4xl px-margin space-y-space-md pt-space-md relative z-10">',
    $content
);

// Enhance header for desktop
$content = preg_replace(
    '/<div class="flex items-center justify-between mt-space-sm mb-space-xs">/',
    '<div class="flex items-center justify-between mt-space-sm mb-space-xs bg-white/60 backdrop-blur-md p-4 rounded-2xl shadow-sm border border-white">',
    $content
);

// Enhance filter pills
$content = preg_replace(
    '/<div class="flex items-center gap-2 overflow-x-auto no-scrollbar pb-1">/',
    '<div class="flex items-center gap-2 overflow-x-auto no-scrollbar pb-1 md:flex-wrap md:pb-0">',
    $content
);

// Enhance dynamic cards
$content = str_replace(
    'bg-surface-container-lowest rounded-2xl p-space-md shadow-sm border-l-[6px] flex flex-col gap-3',
    'bg-white/80 backdrop-blur-xl rounded-2xl p-5 shadow-lg shadow-indigo-100/50 border border-white/50 border-l-[6px] flex flex-col gap-3 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 md:flex-row md:items-center md:gap-6 md:p-6',
    $content
);

$content = str_replace(
    '<div class="absolute right-space-md top-space-md font-label-sm text-label-sm text-on-surface-variant">{{ $notif[\'time\'] }}</div>',
    '<div class="absolute right-space-md top-space-md md:relative md:right-0 md:top-0 font-label-sm text-label-sm md:text-sm md:font-medium text-slate-400 whitespace-nowrap ml-auto">{{ $notif[\'time\'] }}</div>',
    $content
);

$content = str_replace(
    '<div class="flex items-center gap-2 pr-12">',
    '<div class="flex items-center gap-3 pr-12 md:pr-0 flex-shrink-0">',
    $content
);

$content = str_replace(
    '<div class="w-8 h-8 rounded-full flex items-center justify-center',
    '<div class="w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center shadow-inner',
    $content
);

$content = str_replace(
    '<span class="material-symbols-outlined text-[18px]">{{ $notif[\'icon\'] }}</span>',
    '<span class="material-symbols-outlined text-[20px] md:text-[24px]">{{ $notif[\'icon\'] }}</span>',
    $content
);

$content = str_replace(
    '<div class="flex flex-col gap-1">',
    '<div class="flex flex-col gap-1.5 flex-1 min-w-0">',
    $content
);

$content = str_replace(
    '<h3 class="font-title-md text-title-md text-on-surface">{{ $notif[\'title\'] }}</h3>',
    '<h3 class="font-title-md text-title-md md:text-lg md:font-bold text-slate-800">{{ $notif[\'title\'] }}</h3>',
    $content
);

$content = str_replace(
    '<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mt-0.5">{{ $notif[\'message\'] }}</p>',
    '<p class="font-body-sm text-body-sm md:text-base text-slate-500 leading-relaxed">{{ $notif[\'message\'] }}</p>',
    $content
);

file_put_contents($file, $content);
echo "Desktop UI styling applied to Notifikasi.\n";
