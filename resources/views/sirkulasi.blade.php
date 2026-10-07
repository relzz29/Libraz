<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
<title>Sirkulasi - BiblioZ</title>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&family=Space+Grotesk:wght@700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
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
<script id="tailwind-config">tailwind.config = {"darkMode":"class","theme":{"extend":{"colors":{"on-primary-fixed":"rgb(var(--color-on-primary-fixed) / <alpha-value>)","on-primary-fixed-variant":"rgb(var(--color-on-primary-fixed-variant) / <alpha-value>)","surface-container-highest":"rgb(var(--color-surface-container-highest) / <alpha-value>)","on-error":"rgb(var(--color-on-error) / <alpha-value>)","on-error-container":"rgb(var(--color-on-error-container) / <alpha-value>)","surface-container":"rgb(var(--color-surface-container) / <alpha-value>)","surface-container-high":"rgb(var(--color-surface-container-high) / <alpha-value>)","on-tertiary-fixed":"rgb(var(--color-on-tertiary-fixed) / <alpha-value>)","on-secondary-fixed":"rgb(var(--color-on-secondary-fixed) / <alpha-value>)","secondary-fixed":"rgb(var(--color-secondary-fixed) / <alpha-value>)","on-tertiary":"rgb(var(--color-on-tertiary) / <alpha-value>)","on-surface":"rgb(var(--color-on-surface) / <alpha-value>)","surface-variant":"rgb(var(--color-surface-variant) / <alpha-value>)","surface-container-low":"rgb(var(--color-surface-container-low) / <alpha-value>)","on-primary-container":"rgb(var(--color-on-primary-container) / <alpha-value>)","on-surface-variant":"rgb(var(--color-on-surface-variant) / <alpha-value>)","background":"rgb(var(--color-background) / <alpha-value>)","inverse-primary":"rgb(var(--color-inverse-primary) / <alpha-value>)","inverse-on-surface":"rgb(var(--color-inverse-on-surface) / <alpha-value>)","tertiary-container":"rgb(var(--color-tertiary-container) / <alpha-value>)","error-container":"rgb(var(--color-error-container) / <alpha-value>)","primary":"rgb(var(--color-primary) / <alpha-value>)","on-secondary-container":"rgb(var(--color-on-secondary-container) / <alpha-value>)","surface-tint":"rgb(var(--color-surface-tint) / <alpha-value>)","secondary-fixed-dim":"rgb(var(--color-secondary-fixed-dim) / <alpha-value>)","secondary":"rgb(var(--color-secondary) / <alpha-value>)","surface-dim":"rgb(var(--color-surface-dim) / <alpha-value>)","tertiary-fixed-dim":"rgb(var(--color-tertiary-fixed-dim) / <alpha-value>)","tertiary-fixed":"rgb(var(--color-tertiary-fixed) / <alpha-value>)","on-background":"rgb(var(--color-on-background) / <alpha-value>)","secondary-container":"rgb(var(--color-secondary-container) / <alpha-value>)","tertiary":"rgb(var(--color-tertiary) / <alpha-value>)","inverse-surface":"rgb(var(--color-inverse-surface) / <alpha-value>)","primary-fixed-dim":"rgb(var(--color-primary-fixed-dim) / <alpha-value>)","primary-fixed":"rgb(var(--color-primary-fixed) / <alpha-value>)","on-secondary":"rgb(var(--color-on-secondary) / <alpha-value>)","error":"rgb(var(--color-error) / <alpha-value>)","surface-container-lowest":"rgb(var(--color-surface-container-lowest) / <alpha-value>)","primary-container":"rgb(var(--color-primary-container) / <alpha-value>)","surface":"rgb(var(--color-surface) / <alpha-value>)","outline":"rgb(var(--color-outline) / <alpha-value>)","surface-bright":"rgb(var(--color-surface-bright) / <alpha-value>)","on-secondary-fixed-variant":"rgb(var(--color-on-secondary-fixed-variant) / <alpha-value>)","on-primary":"rgb(var(--color-on-primary) / <alpha-value>)","on-tertiary-fixed-variant":"rgb(var(--color-on-tertiary-fixed-variant) / <alpha-value>)","outline-variant":"rgb(var(--color-outline-variant) / <alpha-value>)","on-tertiary-container":"rgb(var(--color-on-tertiary-container) / <alpha-value>)"},"borderRadius":{"DEFAULT":"0.25rem","lg":"0.5rem","xl":"0.75rem","full":"9999px"},"spacing":{"space-xs":"0.25rem","gutter-sm":"0.75rem","space-lg":"1.25rem","margin":"1.25rem","gutter":"1rem","margin-desktop":"2.5rem","space-md":"0.875rem","space-sm":"0.5rem","space-xl":"2rem"},"fontFamily":{"title-md":["Plus Jakarta Sans"],"headline-lg-mobile":["Plus Jakarta Sans"],"headline-md":["Plus Jakarta Sans"],"display-lg":["Plus Jakarta Sans"],"body-sm":["Plus Jakarta Sans"],"label-sm":["Space Grotesk"],"headline-sm":["Plus Jakarta Sans"],"headline-lg":["Plus Jakarta Sans"],"label-lg":["Space Grotesk"],"body-lg":["Plus Jakarta Sans"],"body-md":["Plus Jakarta Sans"],"label-md":["Space Grotesk"]},"fontSize":{"title-md":["16px",{"lineHeight":"22px","fontWeight":"700"}],"headline-lg-mobile":["26px",{"lineHeight":"32px","fontWeight":"800"}],"headline-md":["22px",{"lineHeight":"28px","fontWeight":"700"}],"display-lg":["38px",{"lineHeight":"44px","fontWeight":"800"}],"body-sm":["12px",{"lineHeight":"18px","fontWeight":"400"}],"label-sm":["10px",{"lineHeight":"12px","fontWeight":"700"}],"headline-sm":["18px",{"lineHeight":"24px","fontWeight":"700"}],"headline-lg":["30px",{"lineHeight":"36px","fontWeight":"800"}],"label-lg":["13px",{"lineHeight":"16px","fontWeight":"700"}],"body-lg":["16px",{"lineHeight":"24px","fontWeight":"500"}],"body-md":["14px",{"lineHeight":"20px","fontWeight":"500"}],"label-md":["11px",{"lineHeight":"14px","fontWeight":"700"}]}}}};</script>
<script>
  if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) || localStorage.theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    document.documentElement.classList.add('dark')
  } else {
    document.documentElement.classList.remove('dark')
  }
</script>
<style>
  body {
    min-height: max(884px, 100dvh);
  }
</style>
</head>
<body class="bg-background font-body-md text-body-md text-on-surface flex flex-col min-h-screen">
  
<!-- Desktop Sidebar -->
<aside class="hidden md:flex fixed left-0 top-0 h-screen w-64 bg-surface-container-lowest border-r border-surface-container-high flex-col z-50">
  <div class="h-16 flex items-center px-6 border-b border-surface-container-high gap-3">
    <img alt="BiblioZ Logo" class="h-8 w-auto object-contain flex-shrink-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAz2hoVQ9wOeungd-4ubStxt3uW2O2agaLbBXWfGvi50WoxUohQpS1yMGEOWVn3E1FfRDlQjUNIjc8U7kCnkRxZRKb_FmsWrxzUds9I4q7uzTH1WwhU3gP9Ixf3B82RgmnN0hKWT1MbmwIFykWAzRz7Rk0zLiqbGMIAh8vPkB5TkkU3q-_iAdQkfqN0k__yeu90O4L1BBAF2jgxjXZziX8XqXajMJjFWTDTlpqIgIs7jbXrN5InJK2I"/>
    <span class="font-title-md text-title-md text-primary font-bold tracking-wider uppercase">BiblioZ</span>
  </div>
  <nav class="flex-1 p-4 flex flex-col gap-2 overflow-y-auto">
    <a href="/katalog" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">
      <span class="material-symbols-outlined text-[22px]">menu_book</span>
      Katalog
    </a>
    <a href="/sirkulasi" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20] transition-all">
      <span class="material-symbols-outlined text-[22px]">sync_alt</span>
      Sirkulasi
    </a>
    <a href="/statistik" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">
      <span class="material-symbols-outlined text-[22px]">analytics</span>
      Statistik
    </a>
    <a href="/akun" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">
      <span class="material-symbols-outlined text-[22px]">account_circle</span>
      Akun
    </a>
      <a href="{{ route('akun.pengaturan') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">
      <span class="material-symbols-outlined text-[22px]">settings</span>
      Pengaturan
    </a>
  </nav>
</aside>

  <header class="fixed top-0 w-full md:w-[calc(100%-16rem)] md:left-64 z-40 pt-safe bg-surface/80 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
    <div class="h-16 px-margin flex items-center justify-between gap-space-sm">
      <div class="flex items-center gap-space-sm min-w-0">
        <img alt="BiblioZ App Logo" class="h-8 w-auto object-contain flex-shrink-0 md:hidden" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAz2hoVQ9wOeungd-4ubStxt3uW2O2agaLbBXWfGvi50WoxUohQpS1yMGEOWVn3E1FfRDlQjUNIjc8U7kCnkRxZRKb_FmsWrxzUds9I4q7uzTH1WwhU3gP9Ixf3B82RgmnN0hKWT1MbmwIFykWAzRz7Rk0zLiqbGMIAh8vPkB5TkkU3q-_iAdQkfqN0k__yeu90O4L1BBAF2jgxjXZziX8XqXajMJjFWTDTlpqIgIs7jbXrN5InJK2I"/>
        <div class="flex flex-col min-w-0">
          <span class="font-label-sm text-label-sm text-primary tracking-wider uppercase truncate md:hidden">BiblioZ</span>
          <span class="font-title-md text-title-md text-on-surface truncate">Sirkulasi Peminjaman</span>
        </div>
      </div>
      <div class="flex items-center gap-space-xs flex-shrink-0">
        <a href="/notifikasi" aria-label="Notifikasi" class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors focus:outline-none">
          <span class="material-symbols-outlined text-[24px]">notifications</span>
        </a>
        <a href="/edit-profil" class="w-11 h-11 flex items-center justify-center hover:scale-105 transition-transform cursor-pointer" title="Edit Profil">
          <img id="profile-avatar-small" alt="Profile" class="w-8 h-8 rounded-full object-cover border border-surface-container-high" src="https://ui-avatars.com/api/?name=User&amp;background=random&amp;color=fff"/>
        </a>
      </div>
    </div>
  </header>

  <main class="flex flex-col relative w-full md:w-[calc(100%-16rem)] md:ml-64 pt-20 pb-24 md:pb-8 bg-surface min-h-screen px-margin">
    
    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-8">
      
      <!-- Quota Card -->
      <div class="bg-surface-container-lowest rounded-2xl p-space-md shadow-[3px_3px_0px_#1c1b20] border border-surface-container-high flex flex-col justify-between relative overflow-hidden transition-transform hover:-translate-y-0.5">
        <div class="flex justify-between items-start mb-4 relative z-10">
          <div class="flex items-center gap-3">
            <div class="w-12 h-12 rounded-xl bg-primary-fixed flex items-center justify-center text-primary shadow-[2px_2px_0px_#1c1b20]">
              <span class="material-symbols-outlined">auto_stories</span>
            </div>
            <div>
              <div class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Status Akun</div>
              <div class="font-title-md text-title-md text-on-surface">Kuota Peminjaman</div>
            </div>
          </div>
          <div class="bg-primary-fixed px-3 py-1 rounded-full text-primary font-label-md text-label-md shadow-sm" id="quota-text">
            0/5 Buku
          </div>
        </div>
        <div class="w-full bg-surface-container h-2 rounded-full overflow-hidden mb-3 relative z-10">
          <div class="h-full bg-primary rounded-full transition-all duration-500" id="quota-bar" style="width: 0%"></div>
        </div>
        <div class="flex justify-between font-body-sm text-body-sm text-on-surface-variant font-medium relative z-10">
          <span id="quota-left">Sisa kapasitas: 5 buku lagi</span>
          <span>Maks 14 hari/pinjam</span>
        </div>
        <!-- Decorative bg pattern -->
        <span class="material-symbols-outlined absolute -right-6 -bottom-6 text-[120px] text-surface-container opacity-50 z-0 pointer-events-none">book_4</span>
      </div>

      <!-- Scan Card -->
      <div class="bg-primary text-on-primary rounded-2xl p-space-md shadow-[3px_3px_0px_#1c1b20] flex items-center gap-space-md cursor-pointer transition-transform hover:-translate-y-0.5 active:translate-y-0" onclick="window.location.href='{{ route('scanner') }}'">
        <div class="w-14 h-14 bg-on-primary/20 rounded-xl flex items-center justify-center flex-shrink-0">
          <span class="material-symbols-outlined text-[32px]">document_scanner</span>
        </div>
        <div class="flex flex-col min-w-0">
          <h3 class="font-title-md text-title-md mb-1 truncate">Scan Barcode Buku</h3>
          <p class="font-body-sm text-body-sm text-on-primary/80 line-clamp-2">Self-checkout untuk pinjam mandiri di perpustakaan tanpa antri</p>
        </div>
        <span class="material-symbols-outlined ml-auto text-[24px] flex-shrink-0">chevron_right</span>
      </div>

    </div>

    <!-- Active Borrowings Section -->
    <div class="flex items-center justify-between mb-space-sm pt-space-xs">
      <h2 class="font-headline-sm text-headline-sm text-on-surface flex items-center gap-2">
        Peminjaman Aktif 
        <span class="bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm px-2 py-0.5 rounded-full" id="active-count">0</span>
      </h2>
    </div>

    <div id="loading-indicator" class="flex flex-col items-center justify-center p-12 text-on-surface-variant mt-8 bg-surface-container-lowest rounded-2xl shadow-sm border border-surface-container-high">
      <span class="material-symbols-outlined text-4xl animate-spin mb-3">refresh</span>
      <p class="font-body-sm text-body-sm">Memuat data peminjaman...</p>
    </div>

    <div id="empty-state" class="hidden bg-surface-container-lowest rounded-2xl p-8 text-center border border-surface-container-high shadow-sm flex-col items-center justify-center mt-4">
      <div class="w-16 h-16 bg-surface-container flex items-center justify-center rounded-full mb-4">
        <span class="material-symbols-outlined text-[32px] text-on-surface-variant">book</span>
      </div>
      <h3 class="font-title-md text-title-md text-on-surface mb-2">Belum ada peminjaman aktif</h3>
      <p class="font-body-sm text-body-sm text-on-surface-variant mb-6">Jelajahi katalog kami dan temukan buku menarik untuk dibaca hari ini.</p>
      <a href="{{ route('katalog') }}" class="bg-primary text-on-primary px-6 py-2.5 rounded-xl font-label-md text-label-md shadow-[2px_2px_0px_#1c1b20] hover:bg-primary-container hover:text-on-primary-container active:translate-y-0.5 transition-all w-full flex items-center justify-center gap-2">
        <span class="material-symbols-outlined text-[20px]">search</span>
        Cari Buku
      </a>
    </div>

    <div id="borrowings-grid" class="hidden flex-col gap-space-md">
      <!-- Rendered by JS -->
    </div>

  </main>

  <nav class="fixed bottom-0 w-full z-50 pb-safe bg-surface/85 backdrop-blur-xl shadow-[0_-2px_12px_rgba(0,0,0,0.05)] md:hidden" data-active-classes="bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]">
    <div class="flex items-center justify-around h-16 px-space-xs max-w-md mx-auto">
      <a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="katalog-buku" href="/katalog">
        <span class="material-symbols-outlined text-[22px]">menu_book</span>
        <span class="font-label-sm text-label-sm tracking-tight mt-0.5">Katalog</span>
      </a>
      <a aria-current="page" class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl transition-all bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]" data-path="sirkulasi-peminjaman" href="/sirkulasi">
        <span class="material-symbols-outlined text-[22px]">sync_alt</span>
        <span class="font-label-sm text-label-sm tracking-tight mt-0.5">Sirkulasi</span>
      </a>
      <a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="petugas-statistik" href="/statistik">
        <span class="material-symbols-outlined text-[22px]">analytics</span>
        <span class="font-label-sm text-label-sm tracking-tight mt-0.5">Statistik</span>
      </a>
      <a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="akun-profil" href="/akun">
        <span class="material-symbols-outlined text-[22px]">account_circle</span>
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
        // Fetch User Profile for Top Header
        const userResponse = await fetch('/api/user', {
          headers: {
            'Authorization': 'Bearer ' + token,
            'Accept': 'application/json'
          }
        });
        
        if (userResponse.ok) {
          const user = await userResponse.json();
          let avatarUrl = 'https://ui-avatars.com/api/?name=' + encodeURIComponent(user.name) + '&background=random&color=fff';
          if (user.avatar) {
              avatarUrl = user.avatar.startsWith('http') ? user.avatar : '/' + user.avatar;
          }
          const avatarImg = document.getElementById('profile-avatar-small');
          if (avatarImg) avatarImg.src = avatarUrl;
        } else {
          localStorage.removeItem('auth_token');
          window.location.href = '/login';
          return;
        }

        // Fetch Borrowings
        const borrowResponse = await fetch('/api/borrowings', {
          headers: {
            'Authorization': 'Bearer ' + token,
            'Accept': 'application/json'
          }
        });

        if (borrowResponse.ok) {
          const data = await borrowResponse.json();
          const borrowings = data.borrowings;
          
          document.getElementById('loading-indicator').classList.add('hidden');
          
          // Update Quota UI
          const count = borrowings.length;
          document.getElementById('quota-text').innerText = `${count}/5 Buku`;
          document.getElementById('quota-bar').style.width = `${(count / 5) * 100}%`;
          document.getElementById('quota-left').innerText = `Sisa kapasitas: ${5 - count} buku`;
          document.getElementById('active-count').innerText = count;

          if (count === 0) {
            document.getElementById('empty-state').classList.remove('hidden');
            document.getElementById('empty-state').classList.add('flex');
          } else {
            const grid = document.getElementById('borrowings-grid');
            grid.classList.remove('hidden');
            grid.classList.add('flex');
            
            borrowings.forEach(borrowing => {
              const book = borrowing.book;
              const dueDate = new Date(borrowing.due_date);
              const today = new Date();
              today.setHours(0,0,0,0);
              dueDate.setHours(0,0,0,0);
              
              const diffTime = dueDate - today;
              const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
              const isLate = diffDays < 0;
              const absDays = Math.abs(diffDays);

              const formattedDate = dueDate.toLocaleDateString('id-ID', { day: '2-digit', month: 'short', year: 'numeric' });
              
              let statusBadge = '';
              if (isLate) {
                statusBadge = `
                  <span class="font-label-sm text-label-sm font-bold text-error bg-error-container px-2 py-0.5 rounded flex items-center gap-1">
                    <span class="material-symbols-outlined text-[14px]">warning</span>
                    Terlambat ${absDays} Hari
                  </span>
                `;
              } else {
                statusBadge = `
                  <span class="font-label-sm text-label-sm font-bold text-on-secondary-container bg-secondary-container px-2 py-0.5 rounded flex items-center gap-1 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-secondary"></span>
                    ${absDays === 0 ? 'Hari Ini' : absDays + ' Hari Lagi'}
                  </span>
                `;
              }

              let footerAction = '';
              if (isLate) {
                const fine = absDays * 1000;
                footerAction = `
                  <div class="flex items-center gap-3 w-full">
                    <div class="flex-1 text-error font-title-md text-title-md">Rp ${fine.toLocaleString('id-ID')}</div>
                    <button class="bg-error text-on-error px-4 py-2 rounded-xl font-label-md text-label-md shadow-[2px_2px_0px_#1c1b20] active:translate-y-0.5 transition-all">
                      Bayar Denda
                    </button>
                  </div>
                `;
              } else {
                const isRenewable = borrowing.renew_count === 0;
                footerAction = `
                  <div class="flex gap-2 w-full">
                    <button onclick="selesaiBaca(${borrowing.id})" class="flex-1 bg-surface-container text-on-surface px-2 py-2.5 rounded-xl font-label-md text-label-md shadow-sm active:translate-y-0.5 transition-all hover:bg-surface-container-high flex justify-center items-center gap-1 border border-surface-container-high">
                      <span class="material-symbols-outlined text-[18px]">task_alt</span>
                      Selesai
                    </button>
                    <button onclick="perpanjangWaktu(${borrowing.id})" class="flex-1 bg-secondary text-on-secondary px-2 py-2.5 rounded-xl font-label-md text-label-md flex items-center justify-center gap-1 shadow-[2px_2px_0px_#1c1b20] active:translate-y-0.5 transition-all ${!isRenewable ? 'opacity-50 cursor-not-allowed' : 'hover:bg-secondary-fixed-dim'}" ${!isRenewable ? 'disabled' : ''}>
                      <span class="material-symbols-outlined text-[18px]">sync</span>
                      Perpanjang
                    </button>
                  </div>
                `;
              }

              const coverUrl = book.cover_image_url || 'https://via.placeholder.com/150x200?text=No+Cover';
              const rack = book.rack || 'RAK UMUM';

              const card = document.createElement('article');
              card.className = `bg-surface-container-lowest rounded-xl p-space-md shadow-[3px_3px_0px_#1c1b20] flex flex-col gap-space-md ${isLate ? 'border-2 border-error' : ''}`;
              card.innerHTML = `
                <div class="flex gap-space-md">
                  <div class="relative w-24 h-36 rounded-lg overflow-hidden flex-shrink-0 shadow-[2px_2px_0px_#1c1b20] bg-surface-container">
                    <img src="${coverUrl}" alt="Cover" class="w-full h-full object-cover">
                  </div>
                  <div class="flex-1 flex flex-col min-w-0 justify-between">
                    <div class="flex flex-col gap-1">
                      <div class="flex items-center justify-between mb-1">
                        <span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-bold truncate">${rack}</span>
                      </div>
                      <h3 class="font-title-md text-title-md text-on-surface line-clamp-2">${book.title}</h3>
                      <p class="font-body-sm text-body-sm text-on-surface-variant truncate">${book.author}</p>
                    </div>
                    
                    <div class="flex flex-col gap-1.5 mt-2">
                       ${statusBadge}
                       <div class="flex items-center gap-1 font-label-sm text-label-sm text-on-surface-variant">
                         <span class="material-symbols-outlined text-[14px]">event</span>
                         Kembali: <strong class="${isLate ? 'text-error' : 'text-on-surface'}">${formattedDate}</strong>
                       </div>
                    </div>
                  </div>
                </div>
                
                <div class="w-full pt-space-xs border-t border-surface-container-high mt-1">
                   ${footerAction}
                </div>
              `;
              grid.appendChild(card);
            });
          }
        }
      } catch (e) {
        console.error('Error fetching data:', e);
        document.getElementById('loading-indicator').innerHTML = `
           <span class="material-symbols-outlined text-4xl text-error mb-2">error</span>
           <p class="font-body-sm text-body-sm text-error">Gagal memuat data. Periksa koneksi Anda.</p>
        `;
      }
    });

    // --- Custom Modal Logic ---
    function showConfirmModal(title, text, onConfirm) {
      const modalHTML = `
        <div id="custom-modal" class="fixed inset-0 z-[100] flex items-center justify-center p-4">
          <div class="absolute inset-0 bg-black/60 backdrop-blur-sm transition-opacity opacity-0 duration-300" id="modal-backdrop"></div>
          <div class="relative bg-surface-container-lowest rounded-3xl w-full max-w-sm p-6 shadow-2xl transform scale-95 opacity-0 transition-all duration-300" id="modal-card">
            <div class="w-16 h-16 rounded-full bg-primary/10 text-primary flex items-center justify-center mx-auto mb-4">
              <span class="material-symbols-outlined text-[32px]">menu_book</span>
            </div>
            <h3 class="font-headline-sm text-headline-sm text-center text-on-surface mb-2">${title}</h3>
            <p class="font-body-md text-body-md text-center text-on-surface-variant mb-6">${text}</p>
            <div class="flex gap-3">
              <button id="modal-cancel" class="flex-1 py-3 rounded-xl bg-surface-container text-on-surface font-label-md text-label-md hover:bg-surface-container-high transition-colors">Batal</button>
              <button id="modal-confirm" class="flex-1 py-3 rounded-xl bg-primary text-on-primary font-label-md text-label-md shadow-[2px_2px_0px_#1c1b20] active:translate-y-0.5 transition-all">Selesaikan</button>
            </div>
          </div>
        </div>
      `;
      document.body.insertAdjacentHTML('beforeend', modalHTML);
      
      setTimeout(() => {
        document.getElementById('modal-backdrop').classList.remove('opacity-0');
        document.getElementById('modal-card').classList.remove('scale-95', 'opacity-0');
      }, 10);

      const close = () => {
        document.getElementById('modal-backdrop').classList.add('opacity-0');
        document.getElementById('modal-card').classList.add('scale-95', 'opacity-0');
        setTimeout(() => document.getElementById('custom-modal').remove(), 300);
      };

      document.getElementById('modal-cancel').onclick = close;
      document.getElementById('modal-backdrop').onclick = close;
      document.getElementById('modal-confirm').onclick = () => {
        close();
        onConfirm();
      };
    }

    function showSuccessModal(xp, message, onClosed) {
      const modalHTML = `
        <div id="custom-modal" class="fixed inset-0 z-[100] flex items-center justify-center p-4">
          <div class="absolute inset-0 bg-black/60 backdrop-blur-sm transition-opacity opacity-0 duration-300" id="modal-backdrop"></div>
          <div class="relative bg-gradient-to-br from-primary via-primary-container to-secondary-fixed rounded-3xl w-full max-w-sm p-1 shadow-2xl transform scale-95 opacity-0 transition-all duration-300" id="modal-card">
            <div class="bg-surface-container-lowest rounded-[23px] w-full p-8 flex flex-col items-center relative overflow-hidden">
              <div class="absolute top-0 right-0 w-32 h-32 bg-secondary-fixed/20 blur-xl rounded-full -mr-10 -mt-10 pointer-events-none"></div>
              
              <div class="w-20 h-20 rounded-full bg-gradient-to-tr from-secondary to-secondary-fixed text-on-secondary flex items-center justify-center shadow-lg mb-5 relative z-10 animate-bounce">
                <span class="material-symbols-outlined text-[40px]">workspace_premium</span>
              </div>
              
              <h3 class="font-headline-md text-headline-md text-center text-on-surface mb-2 relative z-10">Luar Biasa! 🎉</h3>
              <p class="font-body-md text-body-md text-center text-on-surface-variant mb-4 relative z-10">${message}</p>
              
              <div class="w-full bg-surface-container rounded-2xl p-4 flex items-center justify-center gap-2 mb-6 border border-surface-container-high relative z-10">
                <span class="material-symbols-outlined text-secondary-fixed text-[28px]">bolt</span>
                <span class="font-display-lg text-display-lg font-black text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary-fixed">+${xp} XP</span>
              </div>
              
              <button id="modal-ok" class="w-full py-3.5 rounded-xl bg-primary text-on-primary font-label-lg text-label-lg shadow-[3px_3px_0px_#1c1b20] active:translate-y-0.5 transition-all relative z-10">Lanjutkan</button>
            </div>
          </div>
        </div>
      `;
      document.body.insertAdjacentHTML('beforeend', modalHTML);
      
      setTimeout(() => {
        document.getElementById('modal-backdrop').classList.remove('opacity-0');
        document.getElementById('modal-card').classList.remove('scale-95', 'opacity-0');
      }, 10);

      const close = () => {
        document.getElementById('modal-backdrop').classList.add('opacity-0');
        document.getElementById('modal-card').classList.add('scale-95', 'opacity-0');
        setTimeout(() => {
          document.getElementById('custom-modal').remove();
          if(onClosed) onClosed();
        }, 300);
      };

      document.getElementById('modal-ok').onclick = close;
    }
    // -------------------------

    window.selesaiBaca = function(id) {
        showConfirmModal(
          'Kembalikan Buku?', 
          'Yakin ingin menyelesaikan bacaan dan mengembalikan buku ini sekarang?', 
          async () => {
            try {
                const response = await fetch('/selesai-baca/' + id, {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('auth_token'),
                        'Accept': 'application/json'
                    }
                });
                const data = await response.json();
                if(data.success) {
                    showSuccessModal(50, data.message, () => {
                        window.location.reload();
                    });
                } else {
                    alert('Gagal: ' + data.message);
                }
            } catch(e) {
                console.error(e);
                alert('Terjadi kesalahan jaringan.');
            }
          }
        );
    }

    window.perpanjangWaktu = function(id) {
        showConfirmModal(
          'Perpanjang Waktu?', 
          'Ingin memperpanjang waktu peminjaman buku ini selama 7 hari ke depan?', 
          async () => {
            try {
                const response = await fetch('/perpanjang/' + id, {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('auth_token'),
                        'Accept': 'application/json'
                    }
                });
                const data = await response.json();
                if(data.success) {
                    alert(data.message);
                    window.location.reload();
                } else {
                    alert('Gagal: ' + data.message);
                }
            } catch(e) {
                console.error(e);
                alert('Terjadi kesalahan jaringan.');
            }
          }
        );
    }
  </script>
</body>
</html>
