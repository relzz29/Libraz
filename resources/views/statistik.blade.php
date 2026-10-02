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
  --color-on-primary-fixed: 30 0 96;
  --color-on-primary-fixed-variant: 76 0 211;
  --color-surface-container-highest: 33 28 58;
  --color-on-error: 105 0 5;
  --color-on-error-container: 255 218 214;
  --color-surface-container: 21 17 36;
  --color-surface-container-high: 26 21 46;
  --color-on-tertiary-fixed: 64 0 15;
  --color-on-secondary-fixed: 0 33 18;
  --color-secondary-fixed: 77 255 178;
  --color-on-tertiary: 104 0 28;
  --color-on-surface: 229 225 232;
  --color-surface-variant: 229 225 232;
  --color-surface-container-low: 15 12 27;
  --color-on-primary-container: 231 222 255;
  --color-on-surface-variant: 196 192 206;
  --color-background: 11 9 20;
  --color-inverse-primary: 67 0 187;
  --color-inverse-on-surface: 244 239 246;
  --color-tertiary-container: 145 0 44;
  --color-error-container: 147 0 10;
  --color-primary: 178 140 255;
  --color-on-secondary-container: 67 252 174;
  --color-surface-tint: 101 49 240;
  --color-secondary-fixed-dim: 0 226 150;
  --color-secondary: 0 226 150;
  --color-surface-dim: 5 4 10;
  --color-tertiary-fixed-dim: 255 178 184;
  --color-tertiary-fixed: 255 218 219;
  --color-on-background: 229 225 232;
  --color-secondary-container: 0 82 52;
  --color-tertiary: 255 178 184;
  --color-inverse-surface: 49 48 53;
  --color-primary-fixed-dim: 204 190 255;
  --color-primary-fixed: 231 222 255;
  --color-on-secondary: 0 56 35;
  --color-error: 255 180 171;
  --color-surface-container-lowest: 6 5 12;
  --color-primary-container: 69 0 205;
  --color-surface: 11 9 20;
  --color-outline: 141 135 156;
  --color-surface-bright: 31 26 47;
  --color-on-secondary-fixed-variant: 0 82 52;
  --color-on-primary: 45 0 135;
  --color-on-tertiary-fixed-variant: 145 0 44;
  --color-outline-variant: 64 58 82;
  --color-on-tertiary-container: 255 218 219;
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
    <a href="/katalog" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">
      <span class="material-symbols-outlined text-[22px]">menu_book</span>
      Katalog
    </a>
    <a href="/sirkulasi" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">
      <span class="material-symbols-outlined text-[22px]">sync_alt</span>
      Sirkulasi
    </a>
    <a href="/statistik" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20] transition-all">
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
  
  <header class="fixed top-0 w-full md:w-[calc(100%-16rem)] md:left-64 z-40 pt-safe bg-surface/80 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]"><div class="h-16 px-margin flex items-center justify-between gap-space-sm"><div class="flex items-center gap-space-sm min-w-0"><img alt="BiblioZ App Logo" class="h-8 w-auto object-contain flex-shrink-0 md:hidden" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAz2hoVQ9wOeungd-4ubStxt3uW2O2agaLbBXWfGvi50WoxUohQpS1yMGEOWVn3E1FfRDlQjUNIjc8U7kCnkRxZRKb_FmsWrxzUds9I4q7uzTH1WwhU3gP9Ixf3B82RgmnN0hKWT1MbmwIFykWAzRz7Rk0zLiqbGMIAh8vPkB5TkkU3q-_iAdQkfqN0k__yeu90O4L1BBAF2jgxjXZziX8XqXajMJjFWTDTlpqIgIs7jbXrN5InJK2I"/><div class="flex flex-col min-w-0"><span class="font-label-sm text-label-sm text-primary tracking-wider uppercase truncate md:hidden">BiblioZ</span><span class="font-title-md text-title-md text-on-surface truncate">Petugas Statistik</span></div></div><div class="flex items-center gap-space-xs flex-shrink-0"><a href="{{ route('notifikasi') }}" aria-label="Notifikasi" class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors focus:outline-none"><span class="material-symbols-outlined text-[24px]">notifications</span></a><div class="w-11 h-11 flex items-center justify-center"><img id="profile-avatar-small" alt="Profile" class="w-8 h-8 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCeMcIBPpdbR0tPBGiVimgYl-q4p7nL7BcQYJ7IcdLCHLYTkHLDPnk-ayKRKdEev1qD1470u9-ar0rYopea9CJD2dRSAtpNmE2PU7moVedjpoyQR2058LWMVg4TfPJ9zIOuDWFYOIu-SZp6xOG3sT-vR-ZMPYVTpwuh_sxQZWAEviqDVh69xAt-vrz4HngLmA8xJMzVImBkfqVfslHgj4czghqYetb8nPu-LPshUAXXl8phoCVGXn6W"/></div></div></div></header><main class="flex flex-col relative w-full md:w-[calc(100%-16rem)] md:ml-64 pt-16 pb-24 md:pb-8 bg-surface min-h-screen"><div class="flex flex-col w-full">
<div class="px-margin pt-space-md pb-space-xs">
<div class="bg-surface-container-lowest p-space-md rounded-xl shadow-md flex items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-sm min-w-0">
<div class="w-10 h-10 rounded-lg bg-primary-fixed flex items-center justify-center flex-shrink-0 text-primary shadow-sm">
<span class="material-symbols-outlined text-[24px]">verified_user</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-md text-label-md text-primary tracking-wide uppercase truncate">Panel Petugas &amp; Statistik</span>
<span id="stat-school-name" class="font-headline-sm text-headline-sm text-on-surface truncate">SMAN 1 Garudapustaka</span>
</div>
</div>
<div class="flex items-center gap-1.5 bg-secondary-fixed/40 px-2.5 py-1 rounded-full flex-shrink-0">
<span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
<span class="font-label-sm text-label-sm text-on-secondary-fixed">Akreditasi A</span>
</div>
</div>
</div>
<div class="px-margin py-space-xs">
<div class="bg-primary-container text-on-primary p-space-md rounded-xl shadow-md flex items-center justify-between gap-space-sm relative overflow-hidden">
<div class="flex items-center gap-space-sm z-10 min-w-0">
<div class="w-9 h-9 rounded-full bg-on-primary/15 flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-[20px] text-secondary-container">cloud_done</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-title-md text-title-md text-on-primary leading-snug truncate">Sinkron Dapodik &amp; Perpustakaan RI</span>
<span class="font-body-sm text-body-sm text-on-primary-container truncate">Sinkronisasi terakhir: Hari ini, 08:30 WIB</span>
</div>
</div>
<button class="z-10 bg-secondary-container text-on-secondary-container font-label-md text-label-md px-3 py-1.5 rounded-lg flex items-center gap-1 shadow-sm active:scale-95 transition-transform flex-shrink-0">
<span class="material-symbols-outlined text-[16px]">sync</span>
<span>Sync</span>
</button>
<div class="absolute -right-6 -bottom-6 w-24 h-24 rounded-full bg-on-primary/5 pointer-events-none"></div>
</div>
</div>
<div class="px-margin pt-space-sm pb-space-xs">
<div class="flex items-center justify-between mb-space-xs">
<span class="font-title-md text-title-md text-on-surface">Metrik Harian Perpustakaan</span>
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Live Monitor</span>
</div>
<div class="grid grid-cols-2 gap-gutter-sm">
<div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden">
<div class="flex items-center justify-between">
<span class="w-8 h-8 rounded-lg bg-secondary-fixed/50 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-[18px]">groups</span>
</span>
<span class="font-label-sm text-label-sm text-secondary flex items-center font-bold">
<span class="material-symbols-outlined text-[14px]">arrow_upward</span>18%
          </span>
</div>
<div class="mt-space-sm">
<span class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface font-extrabold block">342</span>
<span class="font-body-sm text-body-sm text-on-surface-variant font-medium">Kunjungan Hari Ini</span>
</div>
<div class="mt-space-xs w-full bg-surface-container rounded-full h-1.5 overflow-hidden">
<div class="bg-secondary h-full rounded-full" style="width: 78%;"></div>
</div>
</div>
<div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden">
<div class="flex items-center justify-between">
<span class="w-8 h-8 rounded-lg bg-primary-fixed flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[18px]">auto_stories</span>
</span>
<span class="font-label-sm text-label-sm text-primary font-bold">Aktif</span>
</div>
<div class="mt-space-sm">
<span class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface font-extrabold block">128</span>
<span class="font-body-sm text-body-sm text-on-surface-variant font-medium">Buku Terpinjam</span>
</div>
<div class="mt-space-xs w-full bg-surface-container rounded-full h-1.5 overflow-hidden">
<div class="bg-primary-container h-full rounded-full" style="width: 62%;"></div>
</div>
</div>
<div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden">
<div class="flex items-center justify-between">
<span class="w-8 h-8 rounded-lg bg-error-container flex items-center justify-center text-error">
<span class="material-symbols-outlined text-[18px]">timer_off</span>
</span>
<span class="font-label-sm text-label-sm text-on-error-container bg-error-container px-1.5 py-0.5 rounded">Perlu Aksi</span>
</div>
<div class="mt-space-sm">
<span class="font-headline-lg-mobile text-headline-lg-mobile text-error font-extrabold block">14</span>
<span class="font-body-sm text-body-sm text-on-surface-variant font-medium">Terlambat Kembali</span>
</div>
<div class="mt-space-xs w-full bg-surface-container rounded-full h-1.5 overflow-hidden">
<div class="bg-error h-full rounded-full" style="width: 35%;"></div>
</div>
</div>
<div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden">
<div class="flex items-center justify-between">
<span class="w-8 h-8 rounded-lg bg-surface-container-high flex items-center justify-center text-on-surface">
<span class="material-symbols-outlined text-[18px]">inventory_2</span>
</span>
<span class="font-label-sm text-label-sm text-on-secondary-container bg-secondary-fixed/50 px-1.5 py-0.5 rounded">Ready</span>
</div>
<div class="mt-space-sm">
<span class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface font-extrabold block">4,850</span>
<span class="font-body-sm text-body-sm text-on-surface-variant font-medium">Stok Koleksi Siap</span>
</div>
<div class="mt-space-xs w-full bg-surface-container rounded-full h-1.5 overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 92%;"></div>
</div>
</div>
</div>
</div>
<div class="px-margin pt-space-md pb-space-xs">
<div class="flex items-center justify-between mb-space-sm">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-tertiary-container text-[20px]">local_fire_department</span>
<span class="font-title-md text-title-md text-on-surface">Buku Terpopuler Minggu Ini</span>
</div>
<span class="font-label-sm text-label-sm text-primary font-bold">Top 3 Siswa</span>
</div>
<div class="space-y-space-xs">
<div class="bg-surface-container-lowest p-space-sm rounded-xl shadow-sm flex items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-sm min-w-0">
<div class="w-8 h-8 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-label-md text-label-md flex-shrink-0 font-extrabold shadow-sm">
            #1
          </div>
<img class="w-12 h-16 rounded-lg object-cover shadow-sm flex-shrink-0" data-alt="Cover of Atomic Habits book by James Clear with clean white background, vibrant typography, and professional editorial studio lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC__bhfOi2XG9IzhWbZ9rJI4w8Cs2G2bnZHfw4H-7QTO2hWPZ70QwCzO8xgwHgDmpOt2fB2cDOqntQ5vMuNLzNC4UrVjXnlBFLYszL0YBXrCbE0NSVLnSyes28zZ7GA3G1dBrUFwRNVq_ImlImnLnW7cGmRa03xKt_2b6EL7q0ztWTw0LgLry7e502dy7-bDzHB824FfRfWRAl8Xipv1rkT0rk2Wz11vzuc2Z0dm0i5jufp6RwhiCrE"/>
<div class="flex flex-col min-w-0">
<span class="font-title-md text-title-md text-on-surface truncate">Atomic Habits</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">James Clear • Self Development</span>
<span class="font-label-sm text-label-sm text-primary bg-primary-fixed/40 px-2 py-0.5 rounded w-fit mt-1">Rak 158.1 CLE</span>
</div>
</div>
<div class="text-right flex-shrink-0">
<span class="font-headline-sm text-headline-sm text-on-surface block font-extrabold">48x</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Dipinjam</span>
</div>
</div>
<div class="bg-surface-container-lowest p-space-sm rounded-xl shadow-sm flex items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-sm min-w-0">
<div class="w-8 h-8 rounded-full bg-primary-fixed text-primary flex items-center justify-center font-label-md text-label-md flex-shrink-0 font-extrabold shadow-sm">
            #2
          </div>
<img class="w-12 h-16 rounded-lg object-cover shadow-sm flex-shrink-0" data-alt="Cover of high school mathematics textbook titled Matematika Peminatan Kelas XI with geometric shapes, modern Indonesian educational design, clean layout." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDTfgZdtissM_ZImOKVQGPDcRVq9bb8ZGBIlQC9aCUM1_sd9HFp1wj2CbGc-i4BCFR0xmHzdXW9sZUL9bxD3aO4zSW8QyKx7c12uVky6RDF19kfeaw6GrP7uGN55F6fGAkfKRjHHGTYrVUYxAxfGMuQC9jkY_J1oR47lfEgYbRbscOtc68wq7lS_ZrhZM9jApm2E-hI8oWrfFMOoaiOy0AufTCAjyMu_9fL1qdEyc-VI5fTKNF8csh7"/>
<div class="flex flex-col min-w-0">
<span class="font-title-md text-title-md text-on-surface truncate">Matematika Peminatan XI</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Kemendikbudristek • Sains &amp; Tek</span>
<span class="font-label-sm text-label-sm text-secondary bg-secondary-fixed/30 px-2 py-0.5 rounded w-fit mt-1">Rak 510 KEM</span>
</div>
</div>
<div class="text-right flex-shrink-0">
<span class="font-headline-sm text-headline-sm text-on-surface block font-extrabold">39x</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Dipinjam</span>
</div>
</div>
<div class="bg-surface-container-lowest p-space-sm rounded-xl shadow-sm flex items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-sm min-w-0">
<div class="w-8 h-8 rounded-full bg-surface-container-high text-on-surface-variant flex items-center justify-center font-label-md text-label-md flex-shrink-0 font-extrabold shadow-sm">
            #3
          </div>
<img class="w-12 h-16 rounded-lg object-cover shadow-sm flex-shrink-0" data-alt="Cover of Indonesian novel Laut Bercerita by Leila S. Chudori, artistic ocean aesthetic, deep blue tone, high quality editorial book photograph." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAm4lXN3HwVrtxWa1puB8rkcl9y70s2fbbB8ImDsJxOLRj8w6jJqEL2A9xV9sPh-06gi-7J1P7XT8OVVhHjovBRWG_6IBf0oXyxCQI_TjsmfOTf9TmGfYAJSCaVJSdQbtfcwq7RXXjs0qBxgk-Uw29jbN4f4Z-3Adgdy4uOzfToSn6oHFJg0u2QahrJW8sB4VcWpaiKaIAZ394azDbFnpjVIBRt-6--zjkwRLOvKXYmTsA5UyZ7cpUD"/>
<div class="flex flex-col min-w-0">
<span class="font-title-md text-title-md text-on-surface truncate">Laut Bercerita</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Leila S. Chudori • Sastra Fiksi</span>
<span class="font-label-sm text-label-sm text-tertiary-container bg-tertiary-fixed px-2 py-0.5 rounded w-fit mt-1">Rak 899.2 CHU</span>
</div>
</div>
<div class="text-right flex-shrink-0">
<span class="font-headline-sm text-headline-sm text-on-surface block font-extrabold">35x</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Dipinjam</span>
</div>
</div>
</div>
</div>
<div class="px-margin pt-space-md pb-space-xs">
<div class="flex items-center justify-between mb-space-sm">
<span class="font-title-md text-title-md text-on-surface">Operasional Inventaris &amp; Layanan</span>
<span class="font-label-sm text-label-sm text-primary font-bold">Akses Cepat</span>
</div>
<div class="space-y-space-xs">
<button class="w-full bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex items-center justify-between text-left active:scale-[0.99] transition-transform">
<div class="flex items-center gap-space-sm min-w-0">
<div class="w-11 h-11 rounded-lg bg-primary-fixed flex items-center justify-center text-primary flex-shrink-0 shadow-sm">
<span class="material-symbols-outlined text-[24px]">qr_code_scanner</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-title-md text-title-md text-on-surface truncate">Cetak Label Barcode &amp; DDC</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Antrean cetak: 24 label baru siap cetak</span>
</div>
</div>
<span class="material-symbols-outlined text-on-surface-variant text-[20px] flex-shrink-0">arrow_forward_ios</span>
</button>
<button class="w-full bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex items-center justify-between text-left active:scale-[0.99] transition-transform">
<div class="flex items-center gap-space-sm min-w-0">
<div class="w-11 h-11 rounded-lg bg-error-container flex items-center justify-center text-error flex-shrink-0 shadow-sm">
<span class="material-symbols-outlined text-[24px]">fact_check</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-title-md text-title-md text-on-surface truncate">Audit Stok &amp; Kondisi Fisik</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">12 buku rusak • 3 hilang dalam investigasi</span>
</div>
</div>
<span class="material-symbols-outlined text-on-surface-variant text-[20px] flex-shrink-0">arrow_forward_ios</span>
</button>
<button class="w-full bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex items-center justify-between text-left active:scale-[0.99] transition-transform">
<div class="flex items-center gap-space-sm min-w-0">
<div class="w-11 h-11 rounded-lg bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed flex-shrink-0 shadow-sm">
<span class="material-symbols-outlined text-[24px]">co_present</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-title-md text-title-md text-on-surface truncate">Rekap Absensi Kunjungan Kelas</span>
<span class="font-body-sm text-body-sm text-secondary font-bold truncate">Juara pekan ini: Kelas XII MIPA 1 (94 siswa)</span>
</div>
</div>
<span class="material-symbols-outlined text-on-surface-variant text-[20px] flex-shrink-0">arrow_forward_ios</span>
</button>
</div>
</div>
<div class="px-margin pt-space-md pb-space-lg">
<div class="bg-surface-container-high p-space-md rounded-xl shadow-sm">
<div class="flex items-center justify-between mb-space-xs">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-primary text-[20px]">assignment_turned_in</span>
<span class="font-title-md text-title-md text-on-surface">Kepatuhan &amp; Akreditasi</span>
</div>
<span class="font-label-sm text-label-sm text-on-secondary-container bg-secondary-fixed/50 px-2 py-0.5 rounded-full font-bold">Standard BNSP</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
        Unduh paket data terpadu untuk evaluasi kinerja tahunan, portofolio akreditasi, dan audit pengawas sekolah.
      </p>
<div class="grid grid-cols-2 gap-gutter-sm">
<button class="bg-primary text-on-primary py-2.5 px-3 rounded-lg flex items-center justify-center gap-1.5 font-label-md text-label-md shadow-sm active:scale-95 transition-transform" id="btn-export-pdf">
<span class="material-symbols-outlined text-[18px]">picture_as_pdf</span>
<span>Export PDF</span>
</button>
<button class="bg-surface-container-lowest text-on-surface py-2.5 px-3 rounded-lg flex items-center justify-center gap-1.5 font-label-md text-label-md shadow-sm active:scale-95 transition-transform" id="btn-export-excel">
<span class="material-symbols-outlined text-[18px] text-secondary">table_view</span>
<span>Export Excel</span>
</button>
</div>
<div class="hidden mt-space-xs bg-secondary-container text-on-secondary-container font-label-sm text-label-sm p-2 rounded-lg text-center font-bold" id="export-toast">
        File laporan berhasil diunduh ke memori perangkat!
      </div>
</div>
</div>
</div>
<script>
  const pdfBtn = document.getElementById('btn-export-pdf');
  const excelBtn = document.getElementById('btn-export-excel');
  const toast = document.getElementById('export-toast');

  function showToast(format) {
    toast.textContent = `Laporan Akreditasi (${format}) berhasil diunduh!`;
    toast.classList.remove('hidden');
    setTimeout(() => {
      toast.classList.add('hidden');
    }, 3000);
  }

  if (pdfBtn) {
    pdfBtn.addEventListener('click', () => showToast('PDF'));
  }
  if (excelBtn) {
    excelBtn.addEventListener('click', () => showToast('Excel .xlsx'));
  }
</script></main><nav class="fixed bottom-0 w-full z-50 pb-safe bg-surface/85 backdrop-blur-xl shadow-[0_-2px_12px_rgba(0,0,0,0.05)] md:hidden" data-active-classes="bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]"><div class="flex items-center justify-around h-16 px-space-xs max-w-md mx-auto"><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="katalog-buku" href="{{ route('katalog') }}"><span class="material-symbols-outlined text-[22px]">menu_book</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Katalog</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="sirkulasi-peminjaman" href="{{ route('sirkulasi') }}"><span class="material-symbols-outlined text-[22px]">sync_alt</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Sirkulasi</span></a><a aria-current="page" class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl transition-all bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]" data-path="petugas-statistik" href="{{ route('statistik') }}"><span class="material-symbols-outlined text-[22px]">analytics</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Statistik</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="akun-profil" href="{{ route('akun') }}"><span class="material-symbols-outlined text-[22px]">account_circle</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Akun</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="akun-pengaturan" href="{{ route('akun.pengaturan') }}"><span class="material-symbols-outlined text-[22px]">settings</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Pengaturan</span></a></div></nav><script>
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
        
        const elSchool = document.getElementById('stat-school-name');
        if (elSchool && user.school_name) {
            elSchool.textContent = user.school_name;
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
