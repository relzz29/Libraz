<!DOCTYPE html>

<html lang="id"><head><meta charset="utf-8"/><meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/><link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;family=Space+Grotesk:wght@700&amp;display=swap" rel="stylesheet"/><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/><style>@layer base{html,body{width:100vw;margin:0;padding:0;}body{overscroll-behavior:none;}.pb-safe{padding-bottom:env(safe-area-inset-bottom,0px);}.pt-safe{padding-top:env(safe-area-inset-top,0px);}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com"></script>
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
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
</head><body class="bg-background font-body-md text-body-md text-on-surface flex flex-col min-h-screen">

<!-- Desktop Sidebar -->
<aside class="hidden md:flex fixed left-0 top-0 h-screen w-64 bg-surface-container-lowest border-r border-surface-container-high flex-col z-50">
  <div class="h-16 flex items-center px-6 border-b border-surface-container-high gap-3">
    <img alt="BiblioZ Logo" class="h-8 w-auto object-contain flex-shrink-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAz2hoVQ9wOeungd-4ubStxt3uW2O2agaLbBXWfGvi50WoxUohQpS1yMGEOWVn3E1FfRDlQjUNIjc8U7kCnkRxZRKb_FmsWrxzUds9I4q7uzTH1WwhU3gP9Ixf3B82RgmnN0hKWT1MbmwIFykWAzRz7Rk0zLiqbGMIAh8vPkB5TkkU3q-_iAdQkfqN0k__yeu90O4L1BBAF2jgxjXZziX8XqXajMJjFWTDTlpqIgIs7jbXrN5InJK2I"/>
    <span class="font-title-md text-title-md text-primary font-bold tracking-wider uppercase">BiblioZ</span>
  </div>
  <nav class="flex-1 p-4 flex flex-col gap-2 overflow-y-auto">
    <a href="/katalog" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20] transition-all">
      <span class="material-symbols-outlined text-[22px]">menu_book</span>
      Katalog
    </a>
    <a href="/sirkulasi" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">
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

<header class="fixed top-0 w-full md:w-[calc(100%-16rem)] md:left-64 z-40 pt-safe bg-surface/80 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]"><div class="h-16 px-margin flex items-center justify-between gap-space-sm"><div class="flex items-center gap-space-sm min-w-0"><img alt="BiblioZ App Logo" class="h-8 w-auto object-contain flex-shrink-0 md:hidden" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAz2hoVQ9wOeungd-4ubStxt3uW2O2agaLbBXWfGvi50WoxUohQpS1yMGEOWVn3E1FfRDlQjUNIjc8U7kCnkRxZRKb_FmsWrxzUds9I4q7uzTH1WwhU3gP9Ixf3B82RgmnN0hKWT1MbmwIFykWAzRz7Rk0zLiqbGMIAh8vPkB5TkkU3q-_iAdQkfqN0k__yeu90O4L1BBAF2jgxjXZziX8XqXajMJjFWTDTlpqIgIs7jbXrN5InJK2I"/><div class="flex flex-col min-w-0"><span class="font-label-sm text-label-sm text-primary tracking-wider uppercase truncate md:hidden">BiblioZ</span><span class="font-title-md text-title-md text-on-surface truncate">Katalog Buku</span></div></div><div class="flex items-center gap-space-xs flex-shrink-0"><a href="/notifikasi" aria-label="Notifikasi" class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors focus:outline-none"><span class="material-symbols-outlined text-[24px]">notifications</span></a><div class="w-11 h-11 flex items-center justify-center"><img id="profile-avatar-small" alt="Profile" class="w-8 h-8 rounded-full object-cover" src="https://ui-avatars.com/api/?name=User&amp;background=random&amp;color=fff"/></div></div></div></header><main class="flex flex-col relative w-full md:w-[calc(100%-16rem)] md:ml-64 pt-16 pb-24 md:pb-8 bg-surface min-h-screen"><div class="flex flex-col w-full px-margin pb-space-xl gap-space-lg">
<!-- Micro-Banner Notification: Reservasi Mandiri Status -->
<div class="relative overflow-hidden rounded-xl bg-secondary-container text-on-secondary-fixed shadow-[3px_3px_0px_#1c1b20] p-space-md flex items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-sm min-w-0">
<div class="w-10 h-10 rounded-lg bg-surface-container-lowest text-secondary flex items-center justify-center flex-shrink-0 shadow-[2px_2px_0px_#1c1b20]">
<span class="material-symbols-outlined text-[24px]">electric_bolt</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Auto-Hold Alert</span>
<p class="font-body-sm text-body-sm text-on-secondary-fixed leading-tight font-medium">Buku incaranmu disimpan <strong class="font-bold">24 jam di Loker Smart</strong> saat giliranmu tiba!</p>
</div>
</div>
<button aria-label="Tutup Banner" class="w-8 h-8 rounded-full bg-surface/40 hover:bg-surface flex items-center justify-center text-on-surface flex-shrink-0 transition-transform active:scale-90" onclick="this.closest('div.relative').remove()">
<span class="material-symbols-outlined text-[18px]">close</span>
</button>
</div>
<!-- Interactive Search Section with Scan Barcode -->
<div class="flex flex-col gap-space-xs">
<div class="relative flex items-center w-full">
<span class="material-symbols-outlined absolute left-3.5 text-on-surface-variant text-[22px] pointer-events-none">search</span>
<input class="w-full h-12 pl-11 pr-14 rounded-xl bg-surface-container-lowest text-on-surface placeholder:text-on-surface-variant font-body-md text-body-md shadow-[3px_3px_0px_#1c1b20] focus:outline-none focus:shadow-[3px_3px_0px_#5b21e6] transition-all" id="catalogSearch" placeholder="Cari judul, penulis, ISBN, atau mapel..." type="search"/>
<button class="absolute right-1.5 h-9 px-2.5 rounded-lg bg-primary-fixed text-primary hover:bg-primary hover:text-on-primary flex items-center gap-1 transition-all active:translate-x-0.5 active:translate-y-0.5" id="scanBarcodeBtn" title="Scan Barcode / ISBN">
<span class="material-symbols-outlined text-[20px]">barcode_scanner</span>
<span class="font-label-sm text-label-sm hidden sm:inline">SCAN</span>
</button>
</div>
<div class="flex items-center justify-between px-1">
<span class="font-label-sm text-label-sm text-on-surface-variant">Koleksi Terupdate: 14.820 Eksemplar</span>
<span class="font-label-sm text-label-sm text-primary flex items-center gap-0.5">
<span class="material-symbols-outlined text-[14px]">tune</span> Filter Lanjutan
      </span>
</div>
</div>
<!-- Horizontal Scrollable Category Pills -->
<div class="flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs overflow-x-auto no-scrollbar py-1 -mx-margin px-margin">
<button class="filter-pill flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-primary text-on-primary shadow-[2px_2px_0px_#1c1b20] font-label-md text-label-md whitespace-nowrap active:translate-x-0.5 active:translate-y-0.5 transition-all" data-category="all">
<span>🔥 Semua Buku</span>
</button>
<button class="filter-pill flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-surface-container-lowest text-on-surface shadow-[2px_2px_0px_#1c1b20] font-label-md text-label-md whitespace-nowrap hover:bg-surface-container-high transition-all" data-category="kurikulum">
<span>Kurikulum Merdeka</span>
</button>
<button class="filter-pill flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-surface-container-lowest text-on-surface shadow-[2px_2px_0px_#1c1b20] font-label-md text-label-md whitespace-nowrap hover:bg-surface-container-high transition-all" data-category="teknik">
<span>Teknik &amp; Rekayasa</span>
</button>
<button class="filter-pill flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-surface-container-lowest text-on-surface shadow-[2px_2px_0px_#1c1b20] font-label-md text-label-md whitespace-nowrap hover:bg-surface-container-high transition-all" data-category="animasi">
<span>Seni &amp; Animasi</span>
</button>
<button class="filter-pill flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-surface-container-lowest text-on-surface shadow-[2px_2px_0px_#1c1b20] font-label-md text-label-md whitespace-nowrap hover:bg-surface-container-high transition-all" data-category="gim">
<span>Pengembangan Gim</span>
</button>
<button class="filter-pill flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-surface-container-lowest text-on-surface shadow-[2px_2px_0px_#1c1b20] font-label-md text-label-md whitespace-nowrap hover:bg-surface-container-high transition-all" data-category="umum">
<span>Mata Pelajaran Umum</span>
</button>
<button class="filter-pill flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-surface-container-lowest text-on-surface shadow-[2px_2px_0px_#1c1b20] font-label-md text-label-md whitespace-nowrap hover:bg-surface-container-high transition-all" data-category="ebook">
<span>E-Book PDF</span>
</button>
</div>
</div>
<!-- Section Header: Status Rak & Ketersediaan -->
<div class="flex items-center justify-between pt-space-xs">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-secondary-fixed-dim inline-block animate-ping"></span>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Katalog Pilihan Siswa</h2>
</div>
<span class="font-label-md text-label-md text-on-surface-variant bg-surface-container-high px-2 py-0.5 rounded">7 Menampilkan</span>
</div>
<!-- Book Card 1: Dasar-Dasar Teknik Konstruksi Kapal Semester 2 -->
<article class="book-card flex flex-col bg-surface-container-lowest rounded-xl shadow-[3px_3px_0px_#1c1b20] p-space-md gap-space-md transition-all hover:-translate-y-0.5" data-category="kurikulum teknik ebook">
<div class="flex gap-space-md">
<!-- Thumbnail Cover -->
<div class="relative w-24 h-36 rounded-lg overflow-hidden flex-shrink-0 shadow-[2px_2px_0px_#1c1b20] bg-surface-container">
<img class="w-full h-full object-cover" alt="Dasar-Dasar Teknik Konstruksi Kapal Semester 2" src="{{ asset('buku/sampul/Dasar-Teknik-Konstruksi-Kapal-Semester-2-BS-KLS-X-Cover.png') }}"/>
<div class="absolute top-1 left-1 bg-surface-container-lowest/90 px-1.5 py-0.5 rounded font-label-sm text-label-sm text-primary flex items-center gap-0.5">
<span class="material-symbols-outlined text-[12px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span>
          5.0
        </div>
</div>
<!-- Info Details -->
<div class="flex flex-col flex-1 min-w-0 justify-between">
<div class="flex flex-col gap-1">
<div class="flex items-center justify-between gap-1">
<span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-bold truncate">623.8 / TEKNIK KAPAL</span>
<button class="text-on-surface-variant hover:text-tertiary transition-colors" title="Simpan ke Wishlist">
<span class="material-symbols-outlined text-[20px]">bookmark</span>
</button>
</div>
<h3 class="font-title-md text-title-md text-on-surface line-clamp-2">Dasar-Dasar Teknik Konstruksi Kapal Semester 2</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant truncate">Danang Kurniawan &amp; Lilik Mutiatul</p>
</div>
<!-- Shelf & Availability Status -->
<div class="flex flex-wrap items-center gap-1.5 mt-2">
<span class="inline-flex items-center gap-1 px-2 py-1 rounded bg-emerald-100 text-emerald-900 font-label-sm text-label-sm font-bold">
<span class="w-2 h-2 rounded-full bg-emerald-500"></span>
            Tersedia di Rak 1A (5 Eks.)
          </span>
<span class="font-label-sm text-label-sm px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface-variant">Lantai 1</span>
</div>
</div>
</div>
<!-- Action Buttons -->
<div class="grid grid-cols-2 gap-space-sm pt-space-xs">
<button class="h-10 px-3 rounded-lg bg-primary text-on-primary font-label-md text-label-md flex items-center justify-center gap-1.5 shadow-[2px_2px_0px_#1c1b20] active:translate-x-0.5 active:translate-y-0.5 transition-all" onclick="document.getElementById('borrowConfirmationModal').classList.remove('hidden')">
<span class="material-symbols-outlined text-[18px]">touch_app</span>
        Pinjam Mandiri
      </button>
<a href="{{ asset('buku/pdf/Dasar-Teknik-Konstruksi-Kapal-Semester-2-BS-KLS-X (1).pdf') }}" target="_blank" class="h-10 px-3 rounded-lg bg-secondary-fixed text-on-secondary-fixed font-label-md text-label-md flex items-center justify-center gap-1.5 shadow-[2px_2px_0px_#1c1b20] active:translate-x-0.5 active:translate-y-0.5 transition-all">
<span class="material-symbols-outlined text-[18px]">picture_as_pdf</span>
        Baca E-Book (PDF)
      </a>
</div>
</article>
<!-- Book Card 2: Animasi Kelas XI dan XII -->
<article class="book-card flex flex-col bg-surface-container-lowest rounded-xl shadow-[3px_3px_0px_#1c1b20] p-space-md gap-space-md transition-all hover:-translate-y-0.5" data-category="kurikulum animasi ebook">
<div class="flex gap-space-md">
<!-- Thumbnail Cover -->
<div class="relative w-24 h-36 rounded-lg overflow-hidden flex-shrink-0 shadow-[2px_2px_0px_#1c1b20] bg-surface-container">
<img class="w-full h-full object-cover" alt="Animasi Kelas XI dan XII" src="{{ asset('buku/sampul/Animasi_BS_Kelas_XI_dan_XII_Cover.png') }}"/>
<div class="absolute top-1 left-1 bg-surface-container-lowest/90 px-1.5 py-0.5 rounded font-label-sm text-label-sm text-primary flex items-center gap-0.5">
<span class="material-symbols-outlined text-[12px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span>
          4.8
        </div>
</div>
<!-- Info Details -->
<div class="flex flex-col flex-1 min-w-0 justify-between">
<div class="flex flex-col gap-1">
<div class="flex items-center justify-between gap-1">
<span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-bold truncate">006.6 / ANIMASI</span>
<button class="text-on-surface-variant hover:text-tertiary transition-colors" title="Simpan ke Wishlist">
<span class="material-symbols-outlined text-[20px]">bookmark</span>
</button>
</div>
<h3 class="font-title-md text-title-md text-on-surface line-clamp-2">Animasi Kelas XI dan XII</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant truncate">Kemdikbudristek</p>
</div>
<!-- Shelf & Availability Status -->
<div class="flex flex-wrap items-center gap-1.5 mt-2">
<span class="inline-flex items-center gap-1 px-2 py-1 rounded bg-emerald-100 text-emerald-900 font-label-sm text-label-sm font-bold">
<span class="w-2 h-2 rounded-full bg-emerald-500"></span>
            Tersedia (E-Book &amp; Fisik)
          </span>
</div>
</div>
</div>
<!-- Action Buttons -->
<div class="grid grid-cols-2 gap-space-sm pt-space-xs">
<button class="h-10 px-3 rounded-lg bg-primary text-on-primary font-label-md text-label-md flex items-center justify-center gap-1.5 shadow-[2px_2px_0px_#1c1b20] active:translate-x-0.5 active:translate-y-0.5 transition-all" onclick="document.getElementById('borrowConfirmationModal').classList.remove('hidden')">
<span class="material-symbols-outlined text-[18px]">touch_app</span>
        Pinjam Mandiri
      </button>
<a href="{{ asset('buku/pdf/Animasi_BS_XI_dan_XII (1).pdf') }}" target="_blank" class="h-10 px-3 rounded-lg bg-secondary-fixed text-on-secondary-fixed font-label-md text-label-md flex items-center justify-center gap-1.5 shadow-[2px_2px_0px_#1c1b20] active:translate-x-0.5 active:translate-y-0.5 transition-all">
<span class="material-symbols-outlined text-[18px]">picture_as_pdf</span>
        Baca E-Book (PDF)
      </a>
</div>
</article>

<!-- Book Card 3: KKA Kelas XI -->
<article class="book-card flex flex-col bg-surface-container-lowest rounded-xl shadow-[3px_3px_0px_#1c1b20] p-space-md gap-space-md transition-all hover:-translate-y-0.5" data-category="kurikulum teknik ebook">
<div class="flex gap-space-md">
<!-- Thumbnail Cover -->
<div class="relative w-24 h-36 rounded-lg overflow-hidden flex-shrink-0 shadow-[2px_2px_0px_#1c1b20] bg-surface-container">
<img class="w-full h-full object-cover" alt="Buku Siswa Kelas XI KKA" src="{{ asset('buku/sampul/KKA_BS_KLS_11_Cover.png') }}"/>
<div class="absolute top-1 left-1 bg-surface-container-lowest/90 px-1.5 py-0.5 rounded font-label-sm text-label-sm text-primary flex items-center gap-0.5">
<span class="material-symbols-outlined text-[12px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span>
          4.7
        </div>
</div>
<!-- Info Details -->
<div class="flex flex-col flex-1 min-w-0 justify-between">
<div class="flex flex-col gap-1">
<div class="flex items-center justify-between gap-1">
<span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-bold truncate">600 / TEKNIK (KKA)</span>
<button class="text-on-surface-variant hover:text-tertiary transition-colors" title="Simpan ke Wishlist">
<span class="material-symbols-outlined text-[20px]">bookmark</span>
</button>
</div>
<h3 class="font-title-md text-title-md text-on-surface line-clamp-2">Buku Siswa Kejuruan KKA Kelas XI</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant truncate">Kemdikbudristek</p>
</div>
<!-- Shelf & Availability Status -->
<div class="flex flex-wrap items-center gap-1.5 mt-2">
<span class="inline-flex items-center gap-1 px-2 py-1 rounded bg-emerald-100 text-emerald-900 font-label-sm text-label-sm font-bold">
<span class="w-2 h-2 rounded-full bg-emerald-500"></span>
            Tersedia (E-Book &amp; Fisik)
          </span>
</div>
</div>
</div>
<!-- Action Buttons -->
<div class="grid grid-cols-2 gap-space-sm pt-space-xs">
<button class="h-10 px-3 rounded-lg bg-primary text-on-primary font-label-md text-label-md flex items-center justify-center gap-1.5 shadow-[2px_2px_0px_#1c1b20] active:translate-x-0.5 active:translate-y-0.5 transition-all" onclick="document.getElementById('borrowConfirmationModal').classList.remove('hidden')">
<span class="material-symbols-outlined text-[18px]">touch_app</span>
        Pinjam Mandiri
      </button>
<a href="{{ asset('buku/pdf/KKA_BS_KLS_11.pdf') }}" target="_blank" class="h-10 px-3 rounded-lg bg-secondary-fixed text-on-secondary-fixed font-label-md text-label-md flex items-center justify-center gap-1.5 shadow-[2px_2px_0px_#1c1b20] active:translate-x-0.5 active:translate-y-0.5 transition-all">
<span class="material-symbols-outlined text-[18px]">picture_as_pdf</span>
        Baca E-Book (PDF)
      </a>
</div>
</article>

<!-- Book Card 4: Pengembangan Gim Buku Guru -->
<article class="book-card flex flex-col bg-surface-container-lowest rounded-xl shadow-[3px_3px_0px_#1c1b20] p-space-md gap-space-md transition-all hover:-translate-y-0.5" data-category="kurikulum gim ebook">
<div class="flex gap-space-md">
<!-- Thumbnail Cover -->
<div class="relative w-24 h-36 rounded-lg overflow-hidden flex-shrink-0 shadow-[2px_2px_0px_#1c1b20] bg-surface-container">
<img class="w-full h-full object-cover" alt="Pengembangan Gim Buku Guru Kelas XI dan XII" src="{{ asset('buku/sampul/Pengembangan_Gim_BG_KLS_XI_XII_Cover.png') }}"/>
<div class="absolute top-1 left-1 bg-surface-container-lowest/90 px-1.5 py-0.5 rounded font-label-sm text-label-sm text-primary flex items-center gap-0.5">
<span class="material-symbols-outlined text-[12px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span>
          5.0
        </div>
</div>
<!-- Info Details -->
<div class="flex flex-col flex-1 min-w-0 justify-between">
<div class="flex flex-col gap-1">
<div class="flex items-center justify-between gap-1">
<span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-bold truncate">005.1 / GIM (GURU)</span>
<button class="text-on-surface-variant hover:text-tertiary transition-colors" title="Simpan ke Wishlist">
<span class="material-symbols-outlined text-[20px]">bookmark</span>
</button>
</div>
<h3 class="font-title-md text-title-md text-on-surface line-clamp-2">Pengembangan Gim - Buku Panduan Guru Kelas XI-XII</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant truncate">Kemdikbudristek</p>
</div>
<!-- Shelf & Availability Status -->
<div class="flex flex-wrap items-center gap-1.5 mt-2">
<span class="inline-flex items-center gap-1 px-2 py-1 rounded bg-blue-100 text-blue-900 font-label-sm text-label-sm font-bold">
<span class="material-symbols-outlined text-[14px]">cloud_download</span>
            E-Book Only (Khusus Guru)
          </span>
</div>
</div>
</div>
<!-- Action Buttons -->
<div class="w-full pt-space-xs">
<a href="{{ asset('buku/pdf/Pengembangan_Gim_BG_KLS_XI_XII.pdf') }}" target="_blank" class="w-full h-10 px-3 rounded-lg bg-secondary-fixed text-on-secondary-fixed font-label-md text-label-md flex items-center justify-center gap-1.5 shadow-[2px_2px_0px_#1c1b20] active:translate-x-0.5 active:translate-y-0.5 transition-all">
<span class="material-symbols-outlined text-[18px]">picture_as_pdf</span>
        Baca E-Book (PDF)
      </a>
</div>
</article>

<!-- Book Card 5: Pengembangan Gim Buku Siswa -->
<article class="book-card flex flex-col bg-surface-container-lowest rounded-xl shadow-[3px_3px_0px_#1c1b20] p-space-md gap-space-md transition-all hover:-translate-y-0.5" data-category="kurikulum gim ebook">
<div class="flex gap-space-md">
<!-- Thumbnail Cover -->
<div class="relative w-24 h-36 rounded-lg overflow-hidden flex-shrink-0 shadow-[2px_2px_0px_#1c1b20] bg-surface-container">
<img class="w-full h-full object-cover" alt="Pengembangan Gim Buku Siswa Kelas XI dan XII" src="{{ asset('buku/sampul/Pengembangan_Gim_BS_KLS_XI_XII_Cover.png') }}"/>
<div class="absolute top-1 left-1 bg-surface-container-lowest/90 px-1.5 py-0.5 rounded font-label-sm text-label-sm text-primary flex items-center gap-0.5">
<span class="material-symbols-outlined text-[12px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span>
          4.9
        </div>
</div>
<!-- Info Details -->
<div class="flex flex-col flex-1 min-w-0 justify-between">
<div class="flex flex-col gap-1">
<div class="flex items-center justify-between gap-1">
<span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-bold truncate">005.1 / GIM (SISWA)</span>
<button class="text-on-surface-variant hover:text-tertiary transition-colors" title="Simpan ke Wishlist">
<span class="material-symbols-outlined text-[20px]">bookmark</span>
</button>
</div>
<h3 class="font-title-md text-title-md text-on-surface line-clamp-2">Pengembangan Gim - Buku Siswa Kelas XI-XII</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant truncate">Kemdikbudristek</p>
</div>
<!-- Shelf & Availability Status -->
<div class="flex flex-wrap items-center gap-1.5 mt-2">
<span class="inline-flex items-center gap-1 px-2 py-1 rounded bg-emerald-100 text-emerald-900 font-label-sm text-label-sm font-bold">
<span class="w-2 h-2 rounded-full bg-emerald-500"></span>
            Tersedia (E-Book &amp; Fisik)
          </span>
</div>
</div>
</div>
<!-- Action Buttons -->
<div class="grid grid-cols-2 gap-space-sm pt-space-xs">
<button class="h-10 px-3 rounded-lg bg-primary text-on-primary font-label-md text-label-md flex items-center justify-center gap-1.5 shadow-[2px_2px_0px_#1c1b20] active:translate-x-0.5 active:translate-y-0.5 transition-all" onclick="document.getElementById('borrowConfirmationModal').classList.remove('hidden')">
<span class="material-symbols-outlined text-[18px]">touch_app</span>
        Pinjam Mandiri
      </button>
<a href="{{ asset('buku/pdf/Pengembangan_Gim_BS_KLS_XI_XII.pdf') }}" target="_blank" class="h-10 px-3 rounded-lg bg-secondary-fixed text-on-secondary-fixed font-label-md text-label-md flex items-center justify-center gap-1.5 shadow-[2px_2px_0px_#1c1b20] active:translate-x-0.5 active:translate-y-0.5 transition-all">
<span class="material-symbols-outlined text-[18px]">picture_as_pdf</span>
        Baca E-Book (PDF)
      </a>
</div>
</article>

<!-- Book Card 6: Sejarah Kelas XI -->
<article class="book-card flex flex-col bg-surface-container-lowest rounded-xl shadow-[3px_3px_0px_#1c1b20] p-space-md gap-space-md transition-all hover:-translate-y-0.5" data-category="kurikulum umum ebook">
<div class="flex gap-space-md">
<!-- Thumbnail Cover -->
<div class="relative w-24 h-36 rounded-lg overflow-hidden flex-shrink-0 shadow-[2px_2px_0px_#1c1b20] bg-surface-container">
<img class="w-full h-full object-cover" alt="Sejarah Buku Siswa Kelas XI" src="{{ asset('buku/sampul/Sejarah_BS_Kelas_XI_Rev_Cover.png') }}"/>
<div class="absolute top-1 left-1 bg-surface-container-lowest/90 px-1.5 py-0.5 rounded font-label-sm text-label-sm text-primary flex items-center gap-0.5">
<span class="material-symbols-outlined text-[12px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span>
          4.5
        </div>
</div>
<!-- Info Details -->
<div class="flex flex-col flex-1 min-w-0 justify-between">
<div class="flex flex-col gap-1">
<div class="flex items-center justify-between gap-1">
<span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-bold truncate">900 / SEJARAH</span>
<button class="text-on-surface-variant hover:text-tertiary transition-colors" title="Simpan ke Wishlist">
<span class="material-symbols-outlined text-[20px]">bookmark</span>
</button>
</div>
<h3 class="font-title-md text-title-md text-on-surface line-clamp-2">Sejarah Kelas XI (Buku Siswa)</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant truncate">Kemdikbudristek</p>
</div>
<!-- Shelf & Availability Status -->
<div class="flex flex-wrap items-center gap-1.5 mt-2">
<span class="inline-flex items-center gap-1 px-2 py-1 rounded bg-emerald-100 text-emerald-900 font-label-sm text-label-sm font-bold">
<span class="w-2 h-2 rounded-full bg-emerald-500"></span>
            Tersedia (E-Book &amp; Fisik)
          </span>
</div>
</div>
</div>
<!-- Action Buttons -->
<div class="grid grid-cols-2 gap-space-sm pt-space-xs">
<button class="h-10 px-3 rounded-lg bg-primary text-on-primary font-label-md text-label-md flex items-center justify-center gap-1.5 shadow-[2px_2px_0px_#1c1b20] active:translate-x-0.5 active:translate-y-0.5 transition-all" onclick="document.getElementById('borrowConfirmationModal').classList.remove('hidden')">
<span class="material-symbols-outlined text-[18px]">touch_app</span>
        Pinjam Mandiri
      </button>
<a href="{{ asset('buku/pdf/Sejarah_BS_Kelas_XI_Rev.pdf') }}" target="_blank" class="h-10 px-3 rounded-lg bg-secondary-fixed text-on-secondary-fixed font-label-md text-label-md flex items-center justify-center gap-1.5 shadow-[2px_2px_0px_#1c1b20] active:translate-x-0.5 active:translate-y-0.5 transition-all">
<span class="material-symbols-outlined text-[18px]">picture_as_pdf</span>
        Baca E-Book (PDF)
      </a>
</div>
</article>

<!-- Book Card 7: Seni Tari Buku Guru Kelas X -->
<article class="book-card flex flex-col bg-surface-container-lowest rounded-xl shadow-[3px_3px_0px_#1c1b20] p-space-md gap-space-md transition-all hover:-translate-y-0.5" data-category="kurikulum umum ebook">
<div class="flex gap-space-md">
<!-- Thumbnail Cover -->
<div class="relative w-24 h-36 rounded-lg overflow-hidden flex-shrink-0 shadow-[2px_2px_0px_#1c1b20] bg-surface-container">
<img class="w-full h-full object-cover" alt="Seni Tari Buku Guru Kelas X" src="{{ asset('buku/sampul/Seni_Tari_BG_KLS_X_Rev_Cover.png') }}"/>
<div class="absolute top-1 left-1 bg-surface-container-lowest/90 px-1.5 py-0.5 rounded font-label-sm text-label-sm text-primary flex items-center gap-0.5">
<span class="material-symbols-outlined text-[12px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span>
          4.8
        </div>
</div>
<!-- Info Details -->
<div class="flex flex-col flex-1 min-w-0 justify-between">
<div class="flex flex-col gap-1">
<div class="flex items-center justify-between gap-1">
<span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-bold truncate">793.3 / SENI TARI</span>
<button class="text-on-surface-variant hover:text-tertiary transition-colors" title="Simpan ke Wishlist">
<span class="material-symbols-outlined text-[20px]">bookmark</span>
</button>
</div>
<h3 class="font-title-md text-title-md text-on-surface line-clamp-2">Panduan Guru Seni Tari Kelas X</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant truncate">Kemdikbudristek</p>
</div>
<!-- Shelf & Availability Status -->
<div class="flex flex-wrap items-center gap-1.5 mt-2">
<span class="inline-flex items-center gap-1 px-2 py-1 rounded bg-blue-100 text-blue-900 font-label-sm text-label-sm font-bold">
<span class="material-symbols-outlined text-[14px]">cloud_download</span>
            E-Book Only (Khusus Guru)
          </span>
</div>
</div>
</div>
<!-- Action Buttons -->
<div class="w-full pt-space-xs">
<a href="{{ asset('buku/pdf/Seni_Tari_BG_KLS_X_Rev.pdf') }}" target="_blank" class="w-full h-10 px-3 rounded-lg bg-secondary-fixed text-on-secondary-fixed font-label-md text-label-md flex items-center justify-center gap-1.5 shadow-[2px_2px_0px_#1c1b20] active:translate-x-0.5 active:translate-y-0.5 transition-all">
<span class="material-symbols-outlined text-[18px]">picture_as_pdf</span>
        Baca E-Book (PDF)
      </a>
</div>
</article>

<!-- Interactive Quick Fact Widget -->
<div class="p-space-md rounded-xl bg-surface-container text-on-surface flex items-start gap-space-sm shadow-[2px_2px_0px_#1c1b20]">
<div class="w-9 h-9 rounded-lg bg-primary-fixed text-primary flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-[20px]">lightbulb</span>
</div>
<div class="flex flex-col min-w-0">
<h4 class="font-title-md text-title-md text-on-surface">Tips Cari Kilat Perpustakaan</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Gunakan kamera HP untuk scan barcode pada kartu anggota atau punggung buku fisik untuk cek ketersediaan seketika.</p>
</div>
</div>
</div>
<!-- Micro-Interactions Client Script -->
<script>
  // Filter Pills Toggle & Filtering Logic
  const pills = document.querySelectorAll('.filter-pill');
  const bookCards = document.querySelectorAll('.book-card');
  const countDisplay = document.querySelector('.flex.items-center.justify-between.pt-space-xs span.font-label-md');

  pills.forEach(pill => {
    pill.addEventListener('click', () => {
      // 1. Update visual active state for buttons
      pills.forEach(p => {
        p.classList.remove('bg-primary', 'text-on-primary');
        p.classList.add('bg-surface-container-lowest', 'text-on-surface');
      });
      pill.classList.remove('bg-surface-container-lowest', 'text-on-surface');
      pill.classList.add('bg-primary', 'text-on-primary');

      // 2. Filter the book cards
      const selectedCategory = pill.getAttribute('data-category');
      const searchTerm = searchInput ? searchInput.value.toLowerCase() : '';
      let visibleCount = 0;

      bookCards.forEach(card => {
        const cardCategories = card.getAttribute('data-category');
        const textContent = card.innerText.toLowerCase();
        
        const matchesSearch = searchTerm === '' || textContent.includes(searchTerm);
        const matchesCategory = selectedCategory === 'all' || (cardCategories && cardCategories.includes(selectedCategory));
        
        if (matchesSearch && matchesCategory) {
          card.style.display = 'flex';
          visibleCount++;
        } else {
          card.style.display = 'none';
        }
      });

      // 3. Update the visible count text
      if (countDisplay) {
        countDisplay.textContent = `${visibleCount} Menampilkan`;
      }
    });
  });

  // Search Logic & Barcode Scanner Simulator
  const scanBtn = document.getElementById('scanBarcodeBtn');
  const searchInput = document.getElementById('catalogSearch');
  
  if (searchInput) {
    searchInput.addEventListener('input', (e) => {
      const searchTerm = e.target.value.toLowerCase();
      let visibleCount = 0;
      
      const activePill = document.querySelector('.filter-pill.bg-primary');
      const selectedCategory = activePill ? activePill.getAttribute('data-category') : 'all';

      bookCards.forEach(card => {
        const textContent = card.innerText.toLowerCase();
        const cardCategories = card.getAttribute('data-category');
        
        const matchesSearch = textContent.includes(searchTerm);
        const matchesCategory = selectedCategory === 'all' || (cardCategories && cardCategories.includes(selectedCategory));
        
        if (matchesSearch && matchesCategory) {
          card.style.display = 'flex';
          visibleCount++;
        } else {
          card.style.display = 'none';
        }
      });
      
      if (countDisplay) {
        countDisplay.textContent = `${visibleCount} Menampilkan`;
      }
    });
  }

  if (scanBtn) {
    scanBtn.addEventListener('click', () => {
      window.location.href = "/scanner";
    });
  }
</script></main><nav class="fixed bottom-0 w-full z-50 pb-safe bg-surface/85 backdrop-blur-xl shadow-[0_-2px_12px_rgba(0,0,0,0.05)] md:hidden" data-active-classes="bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]"><div class="flex items-center justify-around h-16 px-space-xs max-w-md mx-auto"><a aria-current="page" class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl transition-all bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]" data-path="katalog-buku" href="{{ route('katalog') }}"><span class="material-symbols-outlined text-[22px]">menu_book</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Katalog</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="sirkulasi-peminjaman" href="{{ route('sirkulasi') }}"><span class="material-symbols-outlined text-[22px]">sync_alt</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Sirkulasi</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="petugas-statistik" href="{{ route('statistik') }}"><span class="material-symbols-outlined text-[22px]">analytics</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Statistik</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="akun" href="{{ route('akun') }}"><span class="material-symbols-outlined text-[22px]">account_circle</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Akun</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="akun-pengaturan" href="{{ route('akun.pengaturan') }}"><span class="material-symbols-outlined text-[22px]">settings</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Pengaturan</span></a></div></nav><div class="fixed inset-0 z-50 flex items-end justify-center bg-slate-900/60 backdrop-blur-sm transition-opacity duration-300 hidden" id="borrowConfirmationModal">
<div class="w-full max-w-[430px] bg-white rounded-t-[32px] p-6 shadow-2xl relative border-t border-purple-100 flex flex-col max-h-[90vh] overflow-y-auto no-scrollbar animate-slide-up">
<!-- Drag Handle -->
<div class="w-12 h-1.5 bg-slate-200 rounded-full mx-auto mb-4 flex-shrink-0"></div>
<!-- Header -->
<div class="flex items-start justify-between gap-3 mb-4">
<div class="flex flex-col gap-1">
<span class="inline-flex items-center gap-1 bg-purple-100 text-purple-700 text-[11px] font-bold px-2.5 py-0.5 rounded-full uppercase tracking-wider w-fit">
<span class="material-symbols-outlined text-[14px]">verified</span>
          Konfirmasi Peminjaman
        </span>
<h3 class="text-[20px] font-extrabold text-slate-900 leading-tight">Pinjam Mandiri Buku?</h3>
</div>
<button aria-label="Tutup Modal" class="w-9 h-9 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-800 flex items-center justify-center flex-shrink-0 transition-colors" onclick="document.getElementById('borrowConfirmationModal').classList.add('hidden')" type="button">
<span class="material-symbols-outlined text-[20px]">close</span>
</button>
</div>
<!-- Book Summary Card -->
<div class="bg-purple-50/70 rounded-2xl p-3.5 border border-purple-100 flex gap-3.5 items-center mb-4">
<img alt="Dasar-Dasar Teknik Konstruksi Kapal Semester 2" class="w-14 h-20 rounded-xl object-cover shadow-md flex-shrink-0 bg-purple-100" src="{{ asset('buku/sampul/Dasar-Teknik-Konstruksi-Kapal-Semester-2-BS-KLS-X-Cover.png') }}"/>
<div class="flex flex-col flex-1 min-w-0">
<div class="flex items-center gap-1.5 mb-1">
<span class="text-[10px] font-bold px-2 py-0.5 rounded bg-purple-200/70 text-purple-900">623.8 • TEKNIK KAPAL</span>
<span class="text-[10px] font-medium text-purple-700">Rak 1A (Lt. 1)</span>
</div>
<h4 class="font-bold text-slate-900 text-sm leading-snug line-clamp-2">Dasar-Dasar Teknik Konstruksi Kapal Semester 2</h4>
<p class="text-xs text-slate-500 truncate mt-0.5">Danang Kurniawan &amp; Lilik Mutiatul</p>
<span class="text-[10px] text-slate-400 font-mono mt-1 font-semibold">#BZ-2024-0812</span>
</div>
</div>
<!-- Circulation Details Grid -->
<div class="bg-slate-50 p-3.5 rounded-2xl border border-slate-100 mb-4 flex flex-col gap-3">
<div class="grid grid-cols-2 gap-3">
<div class="flex flex-col bg-white p-2.5 rounded-xl border border-slate-100 shadow-sm">
<span class="text-[11px] text-slate-400 font-medium">Tanggal Pinjam</span>
<span class="text-[13px] font-bold text-slate-800 mt-0.5">Hari Ini (27 Nov)</span>
</div>
<div class="flex flex-col bg-white p-2.5 rounded-xl border border-purple-100 shadow-sm">
<span class="text-[11px] text-purple-600 font-medium">Tenggat Kembali</span>
<span class="text-[13px] font-bold text-purple-700 mt-0.5">11 Des 2024 <span class="text-[10px] text-purple-500 font-normal">(14 Hari)</span></span>
</div>
</div>
<!-- Borrowing Quota Progress -->
<div class="flex flex-col gap-1.5 px-0.5 pt-1 border-t border-slate-200/60">
<div class="flex items-center justify-between text-xs">
<span class="text-slate-600 font-medium">Kuota Peminjaman Kamu</span>
<span class="font-bold text-slate-900">2 <span class="text-slate-400 font-normal">dari 3 buku</span></span>
</div>
<div class="w-full h-2 bg-slate-200 rounded-full overflow-hidden">
<div class="h-full bg-[#5b21e6] rounded-full" style="width: 66.6%;"></div>
</div>
</div>
</div>
<!-- Terms & Guidelines -->
<div class="bg-slate-50/80 rounded-2xl p-3 border border-slate-100 mb-4 flex flex-col gap-2.5">
<div class="flex items-start gap-2 text-xs text-slate-700 leading-tight">
<span class="material-symbols-outlined text-[16px] text-purple-600 flex-shrink-0 mt-0.5">contactless</span>
<span>Bawa buku ke <strong>RFID Gate / Loket Sirkulasi</strong> untuk aktivasi tag peminjaman otomatis.</span>
</div>
<div class="flex items-start gap-2 text-xs text-slate-700 leading-tight">
<span class="material-symbols-outlined text-[16px] text-amber-600 flex-shrink-0 mt-0.5">schedule</span>
<span>Denda keterlambatan <strong>Rp 1.000 / hari</strong> jika lewat dari 11 Des 2024.</span>
</div>
<div class="flex items-start gap-2 text-xs text-slate-700 leading-tight">
<span class="material-symbols-outlined text-[16px] text-emerald-600 flex-shrink-0 mt-0.5">update</span>
<span>Dapat diperpanjang <strong>1x (+7 hari)</strong> via menu Sirkulasi sebelum H-1 tenggat.</span>
</div>
</div>
<!-- Agreement Checkbox -->
<label class="flex items-center gap-2.5 cursor-pointer mb-4 px-1">
<input checked="" class="w-4 h-4 rounded text-purple-600 border-slate-300 focus:ring-purple-500 accent-[#5b21e6] cursor-pointer" type="checkbox"/>
<span class="text-xs text-slate-600 font-medium leading-tight">Saya setuju menjaga kondisi buku dan mematuhi tata tertib perpustakaan.</span>
</label>
<!-- CTA Action Buttons -->
<div class="flex flex-col gap-1.5">
<button class="w-full py-3.5 px-4 rounded-2xl bg-[#5b21e6] hover:bg-[#4c17cf] text-white font-bold text-sm shadow-lg shadow-purple-500/25 flex items-center justify-center gap-2 transition-all active:scale-[0.99]" onclick="window.location.href='/sirkulasi-sukses'" type="button">
<span class="material-symbols-outlined text-[18px]">check_circle</span>
        Konfirmasi &amp; Ambil Buku
      </button>
<button class="w-full py-2.5 text-center text-slate-500 hover:text-slate-800 font-semibold text-xs transition-colors" onclick="document.getElementById('borrowConfirmationModal').classList.add('hidden')" type="button">
        Batal
      </button>
</div>
</div>
</div>
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
      
      if (response.ok) {
        const user = await response.json();
        
        // Cek data diri untuk pengguna baru (wajib mengisi)
        if (!user.email || !user.school_name || user.school_name === 'Asal Sekolah Default' || !user.whatsapp_number || !user.bio) {
          window.location.href = '/edit-profil?first_login=1';
          return;
        }

        const elAvatarSmall = document.getElementById('profile-avatar-small');
        if (elAvatarSmall) {
          let avatarUrl = 'https://ui-avatars.com/api/?name=' + encodeURIComponent(user.name) + '&background=random&color=fff';
          if (user.avatar) {
              avatarUrl = user.avatar.startsWith('http') ? user.avatar : '/' + user.avatar;
          }
          elAvatarSmall.src = avatarUrl;
        }
      } else {
        localStorage.removeItem('auth_token');
        window.location.href = '/login';
      }
    } catch (e) {
      console.error(e);
    }
  });
</script>
</body></html>
