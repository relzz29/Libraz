 <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;family=Space+Grotesk:wght@700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <style>@layer base{html,body{width:100vw;margin:0;padding:0;}body{overscroll-behavior:none;}.pb-safe{padding-bottom:env(safe-area-inset-bottom,0px);}.pt-safe{padding-top:env(safe-area-inset-top,0px);}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style>
    <script src="https://cdn.tailwindcss.com"></script>
    
<style>
:root {
  --color-on-primary-fixed: 30 0 96;
  --color-on-primary-fixed-variant: 76 0 211;
  --color-surface-container-highest: 229 225 232;
  --color-on-error: 255 255 255;
  --color-on-error-container: 147 0 10;
  --color-surface-container: 241 236 244;
  --color-surface-container-high: 235 230 238;
  --color-on-tertiary-fixed: 64 0 15;
  --color-on-secondary-fixed: 0 33 18;
  --color-secondary-fixed: 77 255 178;
  --color-on-tertiary: 255 255 255;
  --color-on-surface: 28 27 32;
  --color-surface-variant: 229 225 232;
  --color-surface-container-low: 247 242 249;
  --color-on-primary-container: 207 193 255;
  --color-on-surface-variant: 72 68 86;
  --color-background: 253 248 255;
  --color-inverse-primary: 204 190 255;
  --color-inverse-on-surface: 244 239 246;
  --color-tertiary-container: 172 0 54;
  --color-error-container: 255 218 214;
  --color-primary: 67 0 187;
  --color-on-secondary-container: 0 113 73;
  --color-surface-tint: 101 49 240;
  --color-secondary-fixed-dim: 0 226 150;
  --color-secondary: 0 108 70;
  --color-surface-dim: 221 216 224;
  --color-tertiary-fixed-dim: 255 178 184;
  --color-tertiary-fixed: 255 218 219;
  --color-on-background: 28 27 32;
  --color-secondary-container: 67 252 174;
  --color-tertiary: 128 0 38;
  --color-inverse-surface: 49 48 53;
  --color-primary-fixed-dim: 204 190 255;
  --color-primary-fixed: 231 222 255;
  --color-on-secondary: 255 255 255;
  --color-error: 186 26 26;
  --color-surface-container-lowest: 255 255 255;
  --color-primary-container: 91 33 230;
  --color-surface: 253 248 255;
  --color-outline: 121 116 136;
  --color-surface-bright: 253 248 255;
  --color-on-secondary-fixed-variant: 0 82 52;
  --color-on-primary: 255 255 255;
  --color-on-tertiary-fixed-variant: 145 0 44;
  --color-outline-variant: 202 195 217;
  --color-on-tertiary-container: 255 183 188;
}
html.dark {
  --color-surface-container-highest: 63 65 71;
  --color-on-error: 255 255 255;
  --color-surface-container: 43 45 49;
  --color-surface-container-high: 49 51 56;
  --color-on-surface: 242 243 245;
  --color-surface-variant: 43 45 49;
  --color-surface-container-low: 30 31 34;
  --color-on-surface-variant: 181 186 193;
  --color-background: 49 51 56;
  --color-primary: 99 102 241;
  --color-surface-tint: 79 70 229;
  --color-secondary: 13 148 136;
  --color-on-background: 242 243 245;
  --color-secondary-container: 15 118 110;
  --color-on-secondary: 255 255 255;
  --color-error: 218 55 60;
  --color-surface-container-lowest: 30 31 34;
  --color-primary-container: 67 56 202;
  --color-surface: 49 51 56;
  --color-outline: 63 65 71;
  --color-on-primary: 255 255 255;
  --color-outline-variant: 43 45 49;
}
</style>
<script id="tailwind-config">tailwind.config = {"darkMode":"class","theme":{"extend":{"colors":{"on-primary-fixed":"rgb(var(--color-on-primary-fixed) \/ <alpha-value>)","on-primary-fixed-variant":"rgb(var(--color-on-primary-fixed-variant) \/ <alpha-value>)","surface-container-highest":"rgb(var(--color-surface-container-highest) \/ <alpha-value>)","on-error":"rgb(var(--color-on-error) \/ <alpha-value>)","on-error-container":"rgb(var(--color-on-error-container) \/ <alpha-value>)","surface-container":"rgb(var(--color-surface-container) \/ <alpha-value>)","surface-container-high":"rgb(var(--color-surface-container-high) \/ <alpha-value>)","on-tertiary-fixed":"rgb(var(--color-on-tertiary-fixed) \/ <alpha-value>)","on-secondary-fixed":"rgb(var(--color-on-secondary-fixed) \/ <alpha-value>)","secondary-fixed":"rgb(var(--color-secondary-fixed) \/ <alpha-value>)","on-tertiary":"rgb(var(--color-on-tertiary) \/ <alpha-value>)","on-surface":"rgb(var(--color-on-surface) \/ <alpha-value>)","surface-variant":"rgb(var(--color-surface-variant) \/ <alpha-value>)","surface-container-low":"rgb(var(--color-surface-container-low) \/ <alpha-value>)","on-primary-container":"rgb(var(--color-on-primary-container) \/ <alpha-value>)","on-surface-variant":"rgb(var(--color-on-surface-variant) \/ <alpha-value>)","background":"rgb(var(--color-background) \/ <alpha-value>)","inverse-primary":"rgb(var(--color-inverse-primary) \/ <alpha-value>)","inverse-on-surface":"rgb(var(--color-inverse-on-surface) \/ <alpha-value>)","tertiary-container":"rgb(var(--color-tertiary-container) \/ <alpha-value>)","error-container":"rgb(var(--color-error-container) \/ <alpha-value>)","primary":"rgb(var(--color-primary) \/ <alpha-value>)","on-secondary-container":"rgb(var(--color-on-secondary-container) \/ <alpha-value>)","surface-tint":"rgb(var(--color-surface-tint) \/ <alpha-value>)","secondary-fixed-dim":"rgb(var(--color-secondary-fixed-dim) \/ <alpha-value>)","secondary":"rgb(var(--color-secondary) \/ <alpha-value>)","surface-dim":"rgb(var(--color-surface-dim) \/ <alpha-value>)","tertiary-fixed-dim":"rgb(var(--color-tertiary-fixed-dim) \/ <alpha-value>)","tertiary-fixed":"rgb(var(--color-tertiary-fixed) \/ <alpha-value>)","on-background":"rgb(var(--color-on-background) \/ <alpha-value>)","secondary-container":"rgb(var(--color-secondary-container) \/ <alpha-value>)","tertiary":"rgb(var(--color-tertiary) \/ <alpha-value>)","inverse-surface":"rgb(var(--color-inverse-surface) \/ <alpha-value>)","primary-fixed-dim":"rgb(var(--color-primary-fixed-dim) \/ <alpha-value>)","primary-fixed":"rgb(var(--color-primary-fixed) \/ <alpha-value>)","on-secondary":"rgb(var(--color-on-secondary) \/ <alpha-value>)","error":"rgb(var(--color-error) \/ <alpha-value>)","surface-container-lowest":"rgb(var(--color-surface-container-lowest) \/ <alpha-value>)","primary-container":"rgb(var(--color-primary-container) \/ <alpha-value>)","surface":"rgb(var(--color-surface) \/ <alpha-value>)","outline":"rgb(var(--color-outline) \/ <alpha-value>)","surface-bright":"rgb(var(--color-surface-bright) \/ <alpha-value>)","on-secondary-fixed-variant":"rgb(var(--color-on-secondary-fixed-variant) \/ <alpha-value>)","on-primary":"rgb(var(--color-on-primary) \/ <alpha-value>)","on-tertiary-fixed-variant":"rgb(var(--color-on-tertiary-fixed-variant) \/ <alpha-value>)","outline-variant":"rgb(var(--color-outline-variant) \/ <alpha-value>)","on-tertiary-container":"rgb(var(--color-on-tertiary-container) \/ <alpha-value>)"},"borderRadius":{"DEFAULT":"0.25rem","lg":"0.5rem","xl":"0.75rem","full":"9999px"},"spacing":{"space-xs":"0.25rem","gutter-sm":"0.75rem","space-lg":"1.25rem","margin":"1.25rem","gutter":"1rem","margin-desktop":"2.5rem","space-md":"0.875rem","space-sm":"0.5rem","space-xl":"2rem"},"fontFamily":{"title-md":["Plus Jakarta Sans"],"headline-lg-mobile":["Plus Jakarta Sans"],"headline-md":["Plus Jakarta Sans"],"display-lg":["Plus Jakarta Sans"],"body-sm":["Plus Jakarta Sans"],"label-sm":["Space Grotesk"],"headline-sm":["Plus Jakarta Sans"],"headline-lg":["Plus Jakarta Sans"],"label-lg":["Space Grotesk"],"body-lg":["Plus Jakarta Sans"],"body-md":["Plus Jakarta Sans"],"label-md":["Space Grotesk"]},"fontSize":{"title-md":["16px",{"lineHeight":"22px","fontWeight":"700"}],"headline-lg-mobile":["26px",{"lineHeight":"32px","fontWeight":"800"}],"headline-md":["22px",{"lineHeight":"28px","fontWeight":"700"}],"display-lg":["38px",{"lineHeight":"44px","fontWeight":"800"}],"body-sm":["12px",{"lineHeight":"18px","fontWeight":"400"}],"label-sm":["10px",{"lineHeight":"12px","fontWeight":"700"}],"headline-sm":["18px",{"lineHeight":"24px","fontWeight":"700"}],"headline-lg":["30px",{"lineHeight":"36px","fontWeight":"800"}],"label-lg":["13px",{"lineHeight":"16px","fontWeight":"700"}],"body-lg":["16px",{"lineHeight":"24px","fontWeight":"500"}],"body-md":["14px",{"lineHeight":"20px","fontWeight":"500"}],"label-md":["11px",{"lineHeight":"14px","fontWeight":"700"}]}}}};</script>
<script>
  if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) || localStorage.theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    document.documentElement.classList.add('dark')
  } else {
    document.documentElement.classList.remove('dark')
  }
</script>

</head>
<body class="bg-background font-body-md text-body-md text-on-surface flex flex-col min-h-screen">
    <header class="fixed top-0 w-full z-50 pt-safe bg-surface/80 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
        <div class="h-16 px-margin flex items-center justify-between gap-space-sm">
            <div class="flex items-center gap-space-sm min-w-0">
                <a aria-label="Kembali ke Katalog" class="w-11 h-11 -ml-space-xs rounded-full flex items-center justify-center text-on-surface hover:text-primary transition-colors focus:outline-none flex-shrink-0" href="/katalog">
                    <span class="material-symbols-outlined text-[24px]">arrow_back</span>
                </a>
                <div class="flex flex-col min-w-0">
                    <span class="font-label-sm text-label-sm text-primary tracking-wider uppercase truncate">PEMBERITAHUAN</span>
                    <span class="font-title-md text-title-md text-on-surface truncate">Notifikasi</span>
                </div>
            </div>
            <div class="flex items-center gap-space-xs flex-shrink-0">
                <button aria-label="Bantuan" class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors focus:outline-none">
                    <span class="material-symbols-outlined text-[22px]">help_outline</span>
                </button>
            </div>
        </div>
    </header>

    <main class="flex flex-col relative w-full pt-20 pb-24 min-h-screen items-center bg-gradient-to-br from-indigo-50 via-white to-purple-50 relative overflow-hidden">
        <!-- Ambient Glassmorphism Blobs -->
        <div class="absolute top-[-10%] left-[-10%] w-[50vw] h-[50vw] max-w-[600px] max-h-[600px] bg-purple-300/30 rounded-full blur-[120px] pointer-events-none mix-blend-multiply"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[50vw] h-[50vw] max-w-[600px] max-h-[600px] bg-indigo-300/30 rounded-full blur-[120px] pointer-events-none mix-blend-multiply"></div>
        <div class="flex flex-col w-full max-w-md md:max-w-3xl lg:max-w-4xl px-margin space-y-space-md pt-space-md relative z-10">
            
            <!-- Title & Mark as read -->
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <h1 class="font-headline-md text-headline-md text-on-surface tracking-tight">Pemberitahuan</h1>
                    <span class="px-2 py-0.5 rounded-full bg-primary text-on-primary font-label-sm text-label-sm font-bold">3 Baru</span>
                </div>
                <button class="flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-surface-container-highest text-on-surface-variant hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-[16px]">done_all</span>
                    <span class="font-label-sm text-label-sm">Tandai Dibaca</span>
                </button>
            </div>

            <!-- Filters -->
            <div class="flex items-center gap-2 overflow-x-auto pb-1 no-scrollbar pt-2">
                <button class="px-3.5 py-1.5 rounded-full bg-primary text-on-primary font-label-md text-label-md whitespace-nowrap shadow-sm flex items-center gap-1.5">
                    Semua <span class="w-5 h-5 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center text-[10px]">12</span>
                </button>
                <button class="px-3.5 py-1.5 rounded-full bg-surface-container text-on-surface-variant font-label-md text-label-md whitespace-nowrap hover:bg-surface-container-high transition-colors flex items-center gap-1.5">
                    Tenggat <span class="w-5 h-5 rounded-full bg-surface-container-high text-on-surface flex items-center justify-center text-[10px]">4</span>
                </button>
                <button class="px-3.5 py-1.5 rounded-full bg-surface-container text-on-surface-variant font-label-md text-label-md whitespace-nowrap hover:bg-surface-container-high transition-colors flex items-center gap-1.5">
                    Loker &amp; Booking <span class="w-5 h-5 rounded-full bg-surface-container-high text-on-surface flex items-center justify-center text-[10px]">2</span>
                </button>
            </div>

            <!-- Section Dinamis Notifikasi -->
            <div class="flex flex-col space-y-space-sm pt-space-xs">
                @forelse($notifications as $notif)
                <div id="{{ $notif['id'] }}" data-type="{{ $notif['type'] }}" class="notif-card relative bg-white/80 backdrop-blur-xl rounded-2xl p-5 shadow-lg shadow-indigo-100/50 border border-white/50 border-l-[6px] flex flex-col gap-3 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 md:flex-row md:items-center md:gap-6 md:p-6
                    @if($notif['type'] == 'success') border-emerald-500
                    @elseif($notif['type'] == 'info') border-blue-500
                    @elseif($notif['type'] == 'warning') border-amber-500
                    @elseif($notif['type'] == 'danger') border-rose-500
                    @else border-primary @endif
                ">
                    <div class="flex items-center gap-3 pr-12 md:pr-0 flex-shrink-0">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center shadow-inner
                            @if($notif['type'] == 'success') bg-emerald-100 text-emerald-600
                            @elseif($notif['type'] == 'info') bg-blue-100 text-blue-600
                            @elseif($notif['type'] == 'warning') bg-amber-100 text-amber-600
                            @elseif($notif['type'] == 'danger') bg-rose-100 text-rose-600
                            @else bg-primary-container text-primary @endif
                        ">
                            <span class="material-symbols-outlined text-[20px] md:text-[24px]">{{ $notif['icon'] }}</span>
                        </div>
                        @if(isset($notif['urgent']) && $notif['urgent'])
                            <span class="px-2 py-0.5 rounded font-label-sm text-label-sm uppercase tracking-wider font-bold
                                @if($notif['type'] == 'danger') bg-rose-100 text-rose-600
                                @elseif($notif['type'] == 'warning') bg-amber-100 text-amber-600 @endif
                            ">URGENT</span>
                        @endif
                    </div>
                    <div class="flex flex-col gap-1.5 flex-1 min-w-0 md:pr-8">
                        <h3 class="font-title-md text-title-md md:text-lg md:font-bold text-slate-800">{{ $notif['title'] }}</h3>
                        <p class="font-body-sm text-body-sm md:text-base text-slate-500 leading-relaxed">{{ $notif['message'] }}</p>
                    </div>
                    <!-- Time and Close Button (Absolute on Mobile, Static on Desktop) -->
                    <div class="absolute right-space-md top-space-md md:static md:right-auto md:top-auto flex flex-col items-end justify-between gap-2 z-10 md:ml-auto flex-shrink-0 h-full">
                        <button onclick="dismissNotif('{{ $notif['id'] }}')" class="w-7 h-7 md:w-8 md:h-8 rounded-full bg-slate-100/80 hover:bg-slate-200/90 text-slate-400 hover:text-slate-700 flex items-center justify-center transition-all cursor-pointer backdrop-blur-sm md:self-end" title="Hapus Notifikasi">
                            <span class="material-symbols-outlined text-[16px]">close</span>
                        </button>
                        <span class="font-label-sm text-label-sm md:text-xs md:font-semibold text-slate-400 whitespace-nowrap md:mt-auto bg-slate-50/50 md:bg-transparent px-2 md:px-0 py-0.5 rounded-md backdrop-blur-md">{{ $notif['time'] }}</span>
                    </div>
                </div>
                @empty
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
                @endforelse
            </div>
            <br>
            <br>
            <br>
        </main>

    <nav class="fixed bottom-0 w-full z-50 pb-safe bg-surface/85 backdrop-blur-xl shadow-[0_-2px_12px_rgba(0,0,0,0.05)] md:hidden" data-active-classes="bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]">
        <div class="flex items-center justify-around h-16 px-space-xs max-w-md mx-auto">
            <a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="katalog-buku" href="{{ route('katalog') }}">
                <span class="material-symbols-outlined text-[22px]">menu_book</span>
                <span class="font-label-sm text-label-sm tracking-tight mt-0.5">Katalog</span>
            </a>
            <a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="sirkulasi-peminjaman" href="{{ route('sirkulasi') }}">
                <span class="material-symbols-outlined text-[22px]">sync_alt</span>
                <span class="font-label-sm text-label-sm tracking-tight mt-0.5">Sirkulasi</span>
            </a>
            
            <a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl transition-all hover:text-primary text-on-surface-variant" data-path="akun" href="{{ route('akun') }}">
                <span class="material-symbols-outlined text-[22px]">person</span>
                <span class="font-label-sm text-label-sm tracking-tight mt-0.5">Akun</span>
            </a>
        </div>
    </nav>
<script>
  document.addEventListener('DOMContentLoaded', async () => {
    const token = localStorage.getItem('auth_token');
    if (!token) {
      window.location.href = '/login';
      return;
    }
    
    try {
      const response = await fetch('/api/user', {
        headers: {
          'Authorization': 'Bearer ' + token,
          'Accept': 'application/json'
        }
      });
      
      if (!response.ok) {
        localStorage.removeItem('auth_token');
        window.location.href = '/login';
      } else {
        const user = await response.json();
        if (!user.email || !user.school_name || user.school_name === 'Asal Sekolah Default' || !user.whatsapp_number || !user.bio) {
          window.location.href = '/edit-profil?first_login=1';
          return;
        }
      }
    } catch (e) {
      console.error(e);
    }
  });
</script>
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
</body>
</html>
