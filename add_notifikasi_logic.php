<?php
$file = __DIR__ . '/resources/views/notifikasi.blade.php';
$content = file_get_contents($file);

// 1. Calculate dynamic counts and inject filter UI
$pillsReplacement = <<<HTML
            @php
                \$totalCount = count(\$notifications);
                \$tenggatCount = collect(\$notifications)->whereIn('type', ['warning', 'danger'])->count();
                \$sirkulasiCount = collect(\$notifications)->whereIn('type', ['success', 'info'])->count();
            @endphp
            <div class="flex items-center gap-2 overflow-x-auto no-scrollbar pb-1 md:flex-wrap md:pb-0" id="filter-pills">
                <button onclick="filterNotif('all', this)" class="filter-btn active-pill px-3.5 py-1.5 rounded-full bg-primary text-white font-label-md text-label-md whitespace-nowrap active:scale-95 transition-all flex items-center gap-1.5 shadow-sm">
                    Semua <span class="w-5 h-5 rounded-full bg-white/20 text-white flex items-center justify-center text-[10px]">{{ \$totalCount }}</span>
                </button>
                <button onclick="filterNotif('tenggat', this)" class="filter-btn px-3.5 py-1.5 rounded-full bg-surface-container text-slate-500 font-label-md text-label-md whitespace-nowrap hover:bg-slate-200 transition-all flex items-center gap-1.5">
                    Tenggat <span class="w-5 h-5 rounded-full bg-slate-200 text-slate-600 flex items-center justify-center text-[10px]">{{ \$tenggatCount }}</span>
                </button>
                <button onclick="filterNotif('sirkulasi', this)" class="filter-btn px-3.5 py-1.5 rounded-full bg-surface-container text-slate-500 font-label-md text-label-md whitespace-nowrap hover:bg-slate-200 transition-all flex items-center gap-1.5">
                    Sirkulasi <span class="w-5 h-5 rounded-full bg-slate-200 text-slate-600 flex items-center justify-center text-[10px]">{{ \$sirkulasiCount }}</span>
                </button>
            </div>
HTML;

$content = preg_replace(
    '/<div class="flex items-center gap-2 overflow-x-auto no-scrollbar pb-1 md:flex-wrap md:pb-0">.*?<\/div>\s*<!-- Section Dinamis Notifikasi -->/s',
    $pillsReplacement . "\n\n            <!-- Section Dinamis Notifikasi -->",
    $content
);

// 2. Add id and data-type to the card, and a dismiss button
$cardSearch = '<div class="relative bg-white/80 backdrop-blur-xl rounded-2xl p-5 shadow-lg shadow-indigo-100/50 border border-white/50 border-l-[6px] flex flex-col gap-3 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 md:flex-row md:items-center md:gap-6 md:p-6';
$cardReplace = '<div id="{{ $notif[\'id\'] }}" data-type="{{ $notif[\'type\'] }}" class="notif-card relative bg-white/80 backdrop-blur-xl rounded-2xl p-5 shadow-lg shadow-indigo-100/50 border border-white/50 border-l-[6px] flex flex-col gap-3 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 md:flex-row md:items-center md:gap-6 md:p-6';
$content = str_replace($cardSearch, $cardReplace, $content);

$timeSearch = '<div class="absolute right-space-md top-space-md md:relative md:right-0 md:top-0 font-label-sm text-label-sm md:text-sm md:font-medium text-slate-400 whitespace-nowrap ml-auto">{{ $notif[\'time\'] }}</div>';
$timeReplace = '<div class="absolute right-space-md top-space-md md:relative md:right-0 md:top-0 flex flex-col items-end gap-2 ml-auto">
                        <button onclick="dismissNotif(\'{{ $notif[\'id\'] }}\')" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-400 hover:text-slate-600 flex items-center justify-center transition-colors mb-1 md:mb-0" title="Hapus Notifikasi">
                            <span class="material-symbols-outlined text-[16px]">close</span>
                        </button>
                        <span class="font-label-sm text-label-sm md:text-sm md:font-medium text-slate-400 whitespace-nowrap">{{ $notif[\'time\'] }}</span>
                    </div>';
$content = str_replace($timeSearch, $timeReplace, $content);

// 3. Add Javascript for filtering and dismissing
$js = <<<JS
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Hide dismissed notifications on load
        const dismissed = JSON.parse(localStorage.getItem('dismissed_notifs') || '[]');
        dismissed.forEach(id => {
            const el = document.getElementById(id);
            if (el) el.style.display = 'none';
        });
        updateEmptyState();
    });

    function dismissNotif(id) {
        // Animate out
        const el = document.getElementById(id);
        if(!el) return;
        el.style.opacity = '0';
        el.style.transform = 'scale(0.95)';
        setTimeout(() => {
            el.style.display = 'none';
            // Save to local storage
            let dismissed = JSON.parse(localStorage.getItem('dismissed_notifs') || '[]');
            if (!dismissed.includes(id)) {
                dismissed.push(id);
                localStorage.setItem('dismissed_notifs', JSON.stringify(dismissed));
            }
            updateEmptyState();
        }, 300);
    }

    function filterNotif(filter, btnElement) {
        // Update active styling
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.classList.remove('bg-primary', 'text-white', 'active-pill');
            btn.classList.add('bg-surface-container', 'text-slate-500');
            const badge = btn.querySelector('span');
            if(badge) {
                badge.classList.remove('bg-white/20', 'text-white');
                badge.classList.add('bg-slate-200', 'text-slate-600');
            }
        });
        
        btnElement.classList.remove('bg-surface-container', 'text-slate-500');
        btnElement.classList.add('bg-primary', 'text-white', 'active-pill');
        const badge = btnElement.querySelector('span');
        if(badge) {
            badge.classList.remove('bg-slate-200', 'text-slate-600');
            badge.classList.add('bg-white/20', 'text-white');
        }

        // Filter cards
        const dismissed = JSON.parse(localStorage.getItem('dismissed_notifs') || '[]');
        document.querySelectorAll('.notif-card').forEach(card => {
            if(dismissed.includes(card.id)) return; // Keep it hidden if dismissed
            
            const type = card.getAttribute('data-type');
            let show = false;
            
            if (filter === 'all') show = true;
            if (filter === 'tenggat' && (type === 'warning' || type === 'danger')) show = true;
            if (filter === 'sirkulasi' && (type === 'success' || type === 'info')) show = true;
            
            card.style.display = show ? 'flex' : 'none';
        });
        
        updateEmptyState();
    }
    
    function updateEmptyState() {
        const visibleCards = document.querySelectorAll('.notif-card[style=""], .notif-card:not([style*="display: none"])');
        const emptyState = document.getElementById('empty-state');
        if(emptyState) {
            emptyState.style.display = visibleCards.length === 0 ? 'flex' : 'none';
        }
    }
</script>
JS;

$content = str_replace(
    '<div class="py-8 text-center text-on-surface-variant flex flex-col items-center">',
    '<div id="empty-state" class="py-8 text-center text-on-surface-variant flex flex-col items-center hidden">',
    $content
);

$content = preg_replace('/<\/body>/', $js . "\n</body>", $content);

file_put_contents($file, $content);
echo "Filtering and dismissing logic added.";
