<?php
$file = __DIR__ . '/resources/views/notifikasi.blade.php';
$content = file_get_contents($file);

// Replace everything inside <!-- Section HARI INI --> up to </main>
$startStr = '<!-- Section HARI INI -->';
$endStr = '</main>';

$startPos = strpos($content, $startStr);
$endPos = strpos($content, $endStr, $startPos);

if ($startPos !== false && $endPos !== false) {
    $newSection = <<<HTML
<!-- Section Dinamis Notifikasi -->
            <div class="flex flex-col space-y-space-sm pt-space-xs">
                @forelse(\$notifications as \$notif)
                <div class="relative bg-surface-container-lowest rounded-2xl p-space-md shadow-sm border-l-[6px] flex flex-col gap-3
                    @if(\$notif['type'] == 'success') border-emerald-500
                    @elseif(\$notif['type'] == 'info') border-blue-500
                    @elseif(\$notif['type'] == 'warning') border-amber-500
                    @elseif(\$notif['type'] == 'danger') border-rose-500
                    @else border-primary @endif
                ">
                    <div class="absolute right-space-md top-space-md font-label-sm text-label-sm text-on-surface-variant">{{ \$notif['time'] }}</div>
                    <div class="flex items-center gap-2 pr-12">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center
                            @if(\$notif['type'] == 'success') bg-emerald-100 text-emerald-600
                            @elseif(\$notif['type'] == 'info') bg-blue-100 text-blue-600
                            @elseif(\$notif['type'] == 'warning') bg-amber-100 text-amber-600
                            @elseif(\$notif['type'] == 'danger') bg-rose-100 text-rose-600
                            @else bg-primary-container text-primary @endif
                        ">
                            <span class="material-symbols-outlined text-[18px]">{{ \$notif['icon'] }}</span>
                        </div>
                        @if(isset(\$notif['urgent']) && \$notif['urgent'])
                            <span class="px-2 py-0.5 rounded font-label-sm text-label-sm uppercase tracking-wider font-bold
                                @if(\$notif['type'] == 'danger') bg-rose-100 text-rose-600
                                @elseif(\$notif['type'] == 'warning') bg-amber-100 text-amber-600 @endif
                            ">URGENT</span>
                        @endif
                    </div>
                    <div class="flex flex-col gap-1">
                        <h3 class="font-title-md text-title-md text-on-surface">{{ \$notif['title'] }}</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mt-0.5">{{ \$notif['message'] }}</p>
                    </div>
                </div>
                @empty
                <div class="py-8 text-center text-on-surface-variant flex flex-col items-center">
                    <span class="material-symbols-outlined text-[48px] mb-2 opacity-50">notifications_paused</span>
                    <p>Belum ada notifikasi baru untukmu hari ini.</p>
                </div>
                @endforelse
            </div>
            <br>
            <br>
            <br>
HTML;

    $content = substr_replace($content, $newSection . "\n        " , $startPos, $endPos - $startPos);
    file_put_contents($file, $content);
    echo "Notifikasi dynamic view updated.";
} else {
    echo "Could not find start/end section in notifikasi.blade.php.";
}
