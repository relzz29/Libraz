<?php
$viewsDir = __DIR__ . '/resources/views';
$files = glob($viewsDir . '/*.blade.php');

$pattern1 = '/<a[^>]*href="(?:\{\{\s*route\(\'statistik\'\)\s*\}\}|\/statistik)"[^>]*>.*?<\/a>/is';

foreach ($files as $file) {
    // Skip admin files and statistik itself
    if (strpos($file, 'admin_') !== false || strpos($file, 'statistik.blade.php') !== false) {
        continue;
    }
    
    $content = file_get_contents($file);
    if (preg_match($pattern1, $content)) {
        $content = preg_replace($pattern1, '', $content);
        file_put_contents($file, $content);
        echo "Removed from " . basename($file) . "\n";
    }
}

// Now add it to admin_dashboard.blade.php
$adminDash = $viewsDir . '/admin_dashboard.blade.php';
$adminContent = file_get_contents($adminDash);
if (strpos($adminContent, 'href="{{ route(\'statistik\') }}"') === false && strpos($adminContent, 'Persetujuan') !== false) {
    $addition = <<<HTML
                <!-- Statistik Menu -->
                <p class="font-label-md text-on-surface uppercase tracking-black font-black mb-2 text-lg mt-6">Statistik</p>
                <ul class="flex flex-col gap-2">
                    <li>
                        <a href="{{ route('statistik') }}" class="text-on-surface font-label-md flex items-center bg-white px-3 py-1 rounded-lg border-4 border-on-surface shadow-[4px_4px_0px_rgba(0,0,0,1)] font-black hover:bg-gray-100 transition-colors">Lihat Statistik</a>
                    </li>
                </ul>
HTML;
    $adminContent = str_replace('<p class="font-label-md text-on-surface uppercase tracking-black font-black mb-2 text-lg">Persetujuan</p>', $addition . "\n                " . '<p class="font-label-md text-on-surface uppercase tracking-black font-black mb-2 text-lg mt-6">Persetujuan</p>', $adminContent);
    file_put_contents($adminDash, $adminContent);
    echo "Added to admin_dashboard.blade.php\n";
}

// And to admin_persetujuan.blade.php
$adminPers = $viewsDir . '/admin_persetujuan.blade.php';
$adminPersContent = file_get_contents($adminPers);
if (strpos($adminPersContent, 'href="{{ route(\'statistik\') }}"') === false && strpos($adminPersContent, 'Persetujuan') !== false) {
    $addition2 = <<<HTML
                <!-- Statistik Menu -->
                <p class="font-label-md text-on-surface uppercase tracking-black font-black mb-2 text-lg mt-6">Statistik</p>
                <ul class="flex flex-col gap-2">
                    <li>
                        <a href="{{ route('statistik') }}" class="text-on-surface font-label-md flex items-center bg-white px-3 py-1 rounded-lg border-4 border-on-surface shadow-[4px_4px_0px_rgba(0,0,0,1)] font-black hover:bg-gray-100 transition-colors">Lihat Statistik</a>
                    </li>
                </ul>
HTML;
    $adminPersContent = str_replace('<p class="font-label-md text-on-surface uppercase tracking-black font-black mb-2 text-lg">Persetujuan</p>', $addition2 . "\n                " . '<p class="font-label-md text-on-surface uppercase tracking-black font-black mb-2 text-lg mt-6">Persetujuan</p>', $adminPersContent);
    file_put_contents($adminPers, $adminPersContent);
    echo "Added to admin_persetujuan.blade.php\n";
}
echo "Done";
