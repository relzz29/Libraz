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
<style>
  @keyframes shimmer {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
  }
  .background-animate {
    background-size: 200% 200%;
    animation: gradient-flow 5s ease infinite;
  }
  @keyframes gradient-flow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }
</style>
<style>
  body, h1, h2, h3, h4, h5, h6, p, div, a, button {
    font-family: 'Plus Jakarta Sans', sans-serif !important;
  }
  span:not(.material-symbols-outlined) {
    font-family: 'Plus Jakarta Sans', sans-serif !important;
  }
  .material-symbols-outlined {
    font-family: 'Material Symbols Outlined' !important;
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

    <main class="flex flex-col w-full md:w-[calc(100%-16rem)] md:ml-64 pt-20 pb-24 md:pb-8 min-h-screen px-margin relative overflow-hidden bg-slate-50">
    <!-- Super Vibrant Ambient Background -->
    <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden">
        <div class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] rounded-full bg-gradient-to-br from-purple-400 to-indigo-500 mix-blend-multiply filter blur-[100px] opacity-40 animate-[spin_15s_linear_infinite]"></div>
        <div class="absolute top-[20%] right-[-10%] w-[60%] h-[60%] rounded-full bg-gradient-to-br from-cyan-300 to-blue-500 mix-blend-multiply filter blur-[120px] opacity-40 animate-[spin_20s_reverse_infinite]"></div>
        <div class="absolute bottom-[-20%] left-[20%] w-[70%] h-[70%] rounded-full bg-gradient-to-br from-fuchsia-400 to-pink-500 mix-blend-multiply filter blur-[130px] opacity-30 animate-[spin_25s_linear_infinite]"></div>
        <div class="absolute inset-0 bg-white/40 backdrop-blur-[2px]"></div>
    </div>
    
        <div class="relative z-10 w-full mb-8 mt-4">
        <h1 class="text-4xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-700 via-purple-600 to-pink-600 drop-shadow-sm tracking-tight mb-2">Pusat Sirkulasi</h1>
        <p class="text-slate-600 text-base md:text-lg max-w-xl">Kelola aktivitas peminjaman, perpanjang tenggat waktu, dan jelajahi buku dengan mudah.</p>
    </div>
    
    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-8">
      
<!-- Quota Card -->
      <div class="group relative bg-white/50 backdrop-blur-2xl rounded-[32px] p-8 border border-white/80 shadow-[0_8px_32px_rgba(31,38,135,0.07)] flex flex-col justify-between overflow-hidden transition-all duration-500 hover:shadow-[0_15px_40px_rgba(99,102,241,0.15)] hover:-translate-y-2 z-10">
        <!-- Shine effect -->
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-white/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none z-0"></div>
        
        <div class="flex justify-between items-start mb-8 relative z-10">
          <div class="flex items-center gap-5">
            <div class="w-16 h-16 rounded-[20px] bg-gradient-to-br from-white to-indigo-50 border border-white flex items-center justify-center text-indigo-600 shadow-[0_4px_15px_rgba(0,0,0,0.05)] transform group-hover:rotate-12 transition-transform duration-500">
              <span class="material-symbols-outlined text-[32px]">auto_stories</span>
            </div>
            <div>
              <div class="font-label-sm text-xs text-indigo-500 font-bold uppercase tracking-[0.2em] mb-1">Status Akun</div>
              <div class="font-title-md text-2xl font-extrabold text-slate-800">Kuota Peminjaman</div>
            </div>
          </div>
          <div class="bg-indigo-600 text-white px-5 py-2 rounded-full font-label-md text-sm font-bold shadow-lg shadow-indigo-200/50" id="quota-text">
            0/5 Buku
          </div>
        </div>
        
        <div class="w-full bg-indigo-900/5 h-4 rounded-full overflow-hidden mb-4 relative z-10 shadow-inner p-0.5 border border-white/50">
          <div class="h-full bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-full transition-all duration-1000 relative overflow-hidden w-0 shadow-[0_0_10px_rgba(99,102,241,0.5)]" id="quota-bar">
            <!-- Animated shine inside progress bar -->
            <div class="absolute inset-0 bg-[linear-gradient(90deg,transparent,rgba(255,255,255,0.5),transparent)] -translate-x-full animate-[shimmer_2s_infinite]"></div>
          </div>
        </div>
        
        <div class="flex justify-between font-body-sm text-sm text-slate-600 font-medium relative z-10">
          <span id="quota-left" class="bg-white/60 px-3 py-1 rounded-lg">Sisa: 5 buku lagi</span>
          <span class="bg-white/60 px-3 py-1 rounded-lg">Maks 14 hari/pinjam</span>
        </div>
        
        <!-- Ambient shapes -->
        <div class="absolute -right-10 -bottom-10 w-48 h-48 bg-gradient-to-br from-indigo-300 to-purple-300 rounded-full blur-[40px] opacity-30 z-0 pointer-events-none group-hover:opacity-50 transition-opacity"></div>
      </div>

<!-- Scan Card -->
      <div class="group relative rounded-[32px] p-8 flex items-center gap-6 cursor-pointer transition-all duration-500 hover:-translate-y-2 z-10 overflow-hidden" onclick="window.location.href='{{ route('scanner') }}'">
        <!-- Animated vibrant background -->
        <div class="absolute inset-0 bg-gradient-to-r from-violet-600 via-fuchsia-600 to-indigo-600 background-animate z-0"></div>
        <div class="absolute inset-0 bg-black/10 z-0 group-hover:bg-black/0 transition-colors duration-500"></div>
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-20 z-0 mix-blend-overlay"></div>
        
        <div class="w-20 h-20 bg-white/20 backdrop-blur-xl border border-white/30 rounded-[24px] flex items-center justify-center flex-shrink-0 shadow-[0_8px_32px_rgba(0,0,0,0.1)] group-hover:scale-110 transition-transform duration-500 z-10">
          <span class="material-symbols-outlined text-[40px] text-white drop-shadow-[0_2px_4px_rgba(0,0,0,0.3)]">document_scanner</span>
        </div>
        
        <div class="flex flex-col min-w-0 relative z-10 flex-1">
          <div class="inline-block px-3 py-1 bg-white/20 backdrop-blur-md rounded-lg text-white text-xs font-bold uppercase tracking-widest mb-3 w-max border border-white/20">Fitur Baru</div>
          <h3 class="text-2xl md:text-3xl font-extrabold text-white drop-shadow-md mb-2 truncate group-hover:text-fuchsia-100 transition-colors">Scan Barcode</h3>
          <p class="font-body-sm text-sm text-indigo-50 line-clamp-2 opacity-90 group-hover:opacity-100">Pinjam buku instan tanpa harus antri ke pustakawan.</p>
        </div>
        
        <div class="w-12 h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center border border-white/30 z-10 group-hover:bg-white group-hover:text-indigo-600 text-white transition-all duration-300 group-hover:shadow-[0_0_20px_rgba(255,255,255,0.5)]">
            <span class="material-symbols-outlined text-[28px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
        </div>
        
        <!-- Decorative light flares -->
        <div class="absolute -left-10 -top-10 w-40 h-40 bg-white/30 rounded-full blur-3xl z-0 pointer-events-none group-hover:bg-white/40 transition-colors"></div>
        <div class="absolute -right-10 -bottom-10 w-56 h-56 bg-fuchsia-400/40 rounded-full blur-3xl z-0 pointer-events-none"></div>
      </div>

    </div>

    <!-- Active Borrowings Section -->
    <div class="flex items-center justify-between mb-space-sm pt-space-xs">
      <h2 class="text-2xl font-extrabold text-slate-800 flex items-center gap-3 relative z-10">
        Peminjaman Aktif 
        <span class="bg-indigo-100 text-indigo-700 font-label-sm text-label-sm px-2.5 py-1 rounded-full shadow-sm" id="active-count">0</span>
      </h2>
    </div>

    <div id="loading-indicator" class="flex flex-col items-center justify-center p-12 text-slate-400 mt-6 bg-white/40 backdrop-blur-md rounded-[32px] border border-white/60 shadow-sm relative z-10">
      <span class="material-symbols-outlined text-4xl animate-spin mb-4 text-indigo-400">refresh</span>
      <p class="font-body-sm text-sm font-medium">Memuat data peminjaman...</p>
    </div>

    <div id="empty-state" class="hidden flex-col items-center justify-center mt-4 w-full bg-white/50 backdrop-blur-2xl border border-white/80 rounded-[40px] p-12 md:p-20 shadow-[0_8px_32px_rgba(31,38,135,0.05)] relative z-10 overflow-hidden">
      <!-- Background floating shapes -->
      <div class="absolute top-10 left-10 w-32 h-32 bg-indigo-200/50 rounded-full blur-2xl animate-[pulse_4s_infinite]"></div>
      <div class="absolute bottom-10 right-10 w-40 h-40 bg-purple-200/50 rounded-full blur-2xl animate-[pulse_5s_infinite]"></div>
      
      <div class="w-32 h-32 mb-8 rounded-[32px] bg-gradient-to-tr from-white to-indigo-50 border border-white shadow-[0_10px_30px_rgba(99,102,241,0.15)] flex items-center justify-center relative transform rotate-3 hover:rotate-0 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-br from-indigo-100/50 to-purple-100/50 rounded-[32px] blur-md -z-10"></div>
          <span class="material-symbols-outlined text-[64px] text-transparent bg-clip-text bg-gradient-to-br from-indigo-500 to-purple-500">book_4</span>
          
          <!-- Sparkles -->
          <span class="material-symbols-outlined absolute -top-4 -right-4 text-yellow-400 text-2xl animate-bounce">sparkles</span>
      </div>
      <h3 class="text-2xl md:text-3xl text-slate-800 font-extrabold mb-4 text-center">Ruang Baca Anda Masih Kosong</h3>
      <p class="font-body-md text-base md:text-lg text-slate-500 text-center max-w-md leading-relaxed mb-10">
          Dunia pengetahuan menanti Anda. Jelajahi ribuan koleksi buku menarik kami dan mulailah petualangan baru hari ini.
      </p>
      <a href="{{ route('katalog') }}" class="group relative px-10 py-4 rounded-full bg-slate-900 text-white font-bold text-base shadow-[0_10px_30px_rgba(0,0,0,0.2)] hover:-translate-y-1 transition-all flex items-center gap-3 overflow-hidden">
          <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 via-purple-600 to-indigo-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500 background-animate"></div>
          <span class="material-symbols-outlined text-[24px] relative z-10 group-hover:rotate-12 transition-transform">travel_explore</span>
          <span class="relative z-10">Jelajahi Katalog</span>
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
                    <button class="bg-gradient-to-r from-red-500 to-rose-600 hover:from-red-600 hover:to-rose-700 text-white px-5 py-2.5 rounded-full font-label-md text-label-md shadow-md shadow-red-200 hover:-translate-y-0.5 transition-all">
                      Bayar Denda
                    </button>
                  </div>
                `;
              } else {
                const isRenewable = borrowing.renew_count === 0;
                footerAction = `
                  <div class="flex gap-2 w-full">
                    <button onclick="selesaiBaca(${borrowing.id})" class="flex-1 bg-white/80 hover:bg-white text-slate-700 px-4 py-2.5 rounded-full font-label-md text-label-md shadow-sm border border-slate-200 hover:border-slate-300 hover:shadow-md transition-all flex justify-center items-center gap-1.5">
                      <span class="material-symbols-outlined text-[18px]">task_alt</span>
                      Selesai
                    </button>
                    <button onclick="perpanjangWaktu(${borrowing.id})" class="flex-1 bg-gradient-to-r from-teal-500 to-emerald-500 text-white px-4 py-2.5 rounded-full font-label-md text-label-md flex items-center justify-center gap-1.5 shadow-md shadow-teal-200 transition-all ${!isRenewable ? 'opacity-50 cursor-not-allowed' : 'hover:from-teal-600 hover:to-emerald-600 hover:-translate-y-0.5'}" ${!isRenewable ? 'disabled' : ''}>
                      <span class="material-symbols-outlined text-[18px]">sync</span>
                      Perpanjang
                    </button>
                  </div>
                `;
              }

              const coverUrl = book.cover_image_url || 'https://via.placeholder.com/150x200?text=No+Cover';
              const rack = book.rack || 'RAK UMUM';

              const card = document.createElement('article');
              card.className = `bg-white/70 backdrop-blur-xl rounded-[24px] p-6 shadow-xl shadow-indigo-100/50 border border-white/60 flex flex-col gap-space-md transition-all hover:shadow-2xl hover:-translate-y-1 z-10 relative ${isLate ? 'border-2 border-red-500 shadow-red-200/50' : ''}`;
              card.innerHTML = `
                <div class="flex gap-space-md">
                  <div class="relative w-24 h-36 rounded-lg overflow-hidden flex-shrink-0 shadow-md shadow-indigo-200/50 border border-white/50 bg-slate-100">
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
          <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-md transition-opacity opacity-0 duration-300" id="modal-backdrop"></div>
          <div class="relative bg-white/80 backdrop-blur-2xl border border-white/60 rounded-[32px] w-full max-w-sm p-8 shadow-[0_20px_60px_rgba(31,38,135,0.15)] transform scale-95 opacity-0 transition-all duration-300 overflow-hidden" id="modal-card">
            
            <!-- Ambient modal glow -->
            <div class="absolute -top-10 -right-10 w-32 h-32 bg-indigo-400/20 rounded-full blur-2xl"></div>
            <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-purple-400/20 rounded-full blur-2xl"></div>

            <div class="w-20 h-20 rounded-[24px] bg-gradient-to-br from-indigo-100 to-white shadow-inner flex items-center justify-center mx-auto mb-6 relative z-10 border border-white">
              <span class="material-symbols-outlined text-[36px] text-indigo-600">help</span>
            </div>
            
            <h3 class="text-2xl font-extrabold text-center text-slate-800 mb-3 relative z-10">${title}</h3>
            <p class="font-body-md text-base text-center text-slate-500 leading-relaxed mb-8 relative z-10">${text}</p>
            
            <div class="flex gap-3 relative z-10">
              <button id="modal-cancel" class="flex-1 py-3.5 rounded-full bg-slate-100 text-slate-600 font-bold text-sm hover:bg-slate-200 transition-colors">Batal</button>
              <button id="modal-confirm" class="flex-1 py-3.5 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-bold text-sm shadow-md shadow-indigo-200 hover:-translate-y-0.5 transition-all">Ya, Lanjutkan</button>
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

    function showSuccessModal(title, message, onClosed) {
      const modalHTML = `
        <div id="custom-modal" class="fixed inset-0 z-[100] flex items-center justify-center p-4">
          <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-md transition-opacity opacity-0 duration-300" id="modal-backdrop"></div>
          <div class="relative bg-white/80 backdrop-blur-2xl border border-white/60 rounded-[32px] w-full max-w-sm p-8 shadow-[0_20px_60px_rgba(31,38,135,0.15)] transform scale-95 opacity-0 transition-all duration-300 overflow-hidden" id="modal-card">
            
            <!-- Ambient modal glow -->
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-emerald-100/40 to-teal-100/40 opacity-50"></div>
            <div class="absolute -top-10 -right-10 w-40 h-40 bg-emerald-400/20 rounded-full blur-3xl animate-pulse"></div>

            <div class="w-24 h-24 rounded-[32px] bg-gradient-to-br from-emerald-400 to-teal-500 shadow-lg shadow-emerald-200 flex items-center justify-center mx-auto mb-6 relative z-10 animate-bounce">
              <span class="material-symbols-outlined text-[48px] text-white">check_circle</span>
              <span class="material-symbols-outlined absolute -top-2 -right-2 text-yellow-400 text-2xl animate-spin">sparkles</span>
            </div>
            
            <h3 class="text-2xl font-extrabold text-center text-slate-800 mb-3 relative z-10">${title}</h3>
            <p class="font-body-md text-base text-center text-slate-600 leading-relaxed mb-8 relative z-10">${message}</p>
            
            <button id="modal-ok" class="w-full py-4 rounded-full bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-bold text-base shadow-lg shadow-emerald-200 hover:-translate-y-1 transition-all relative z-10">Luar Biasa!</button>
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
                    showSuccessModal('Buku Dikembalikan!', data.message, () => {
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
                    showSuccessModal('Berhasil Diperpanjang!', data.message, () => {
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
  </script>
</body>
</html>
