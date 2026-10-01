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
  </head><body class="bg-background font-body-md text-body-md text-on-surface flex flex-col min-h-screen"><header class="fixed top-0 w-full z-50 pt-safe bg-surface/80 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]"><div class="h-16 px-margin flex items-center justify-between gap-space-sm max-w-5xl mx-auto"><div class="flex items-center gap-space-sm min-w-0"><img alt="BiblioZ App Logo" class="h-8 w-auto object-contain flex-shrink-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAz2hoVQ9wOeungd-4ubStxt3uW2O2agaLbBXWfGvi50WoxUohQpS1yMGEOWVn3E1FfRDlQjUNIjc8U7kCnkRxZRKb_FmsWrxzUds9I4q7uzTH1WwhU3gP9Ixf3B82RgmnN0hKWT1MbmwIFykWAzRz7Rk0zLiqbGMIAh8vPkB5TkkU3q-_iAdQkfqN0k__yeu90O4L1BBAF2jgxjXZziX8XqXajMJjFWTDTlpqIgIs7jbXrN5InJK2I"/><div class="flex flex-col min-w-0"><span class="font-label-sm text-label-sm text-primary tracking-wider uppercase truncate">BiblioZ</span><span class="font-title-md text-title-md text-on-surface truncate">Akun</span></div></div><div class="flex items-center gap-space-xs flex-shrink-0"><a href="{{ route('notifikasi') }}" aria-label="Notifikasi" class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors focus:outline-none"><span class="material-symbols-outlined text-[24px]">notifications</span></a><div class="w-11 h-11 flex items-center justify-center"><img id="profile-avatar-small" alt="Profile" class="w-8 h-8 rounded-full object-cover" src="https://ui-avatars.com/api/?name=User&amp;background=random&amp;color=fff"/></div></div></div></header><main class="flex flex-col relative w-full pt-16 pb-24 bg-surface min-h-screen items-center"><div class="flex flex-col lg:grid lg:grid-cols-12 w-full max-w-5xl px-margin pb-space-xl gap-space-lg lg:items-start">
<div class="lg:col-span-5 flex flex-col gap-space-lg w-full">
<!-- TOP IDENTITY & INTERACTIVE DIGITAL CARD -->
<section class="flex flex-col w-full gap-space-md">
<!-- Student Quick Info -->
<div class="flex items-center justify-between gap-space-sm pt-space-xs">
<div class="flex items-center gap-space-md min-w-0">
<div class="relative flex-shrink-0">
<img id="profile-avatar-large" class="w-16 h-16 rounded-full object-cover shadow-md" alt="Avatar" src="https://ui-avatars.com/api/?name=User&amp;background=random&amp;color=fff"/>
<div class="absolute -bottom-1 -right-1 w-6 h-6 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container shadow-sm">
<span class="material-symbols-outlined text-[15px]" style="font-variation-settings: 'FILL' 1;">verified</span>
</div>
</div>
<div class="flex flex-col min-w-0">
<div class="flex items-center gap-1.5 flex-wrap">
<h2 id="profile-name" class="font-headline-sm text-headline-sm text-on-surface truncate">Nama Siswa</h2>
</div>
<p id="profile-nis" class="font-body-sm text-body-sm text-on-surface-variant truncate">NIS: 1234567890 • XII MIPA 2</p>
<p id="profile-school-name" class="font-label-sm text-label-sm text-primary tracking-wide uppercase mt-0.5">SMAN 1 Garudapura</p>
</div>
</div>
<!-- Action Icons -->
<div class="flex items-center gap-1.5 flex-shrink-0">
<a aria-label="Edit Profil" class="flex items-center gap-1 px-3 py-1.5 rounded-full bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors" href="{{ route('akun.pengaturan') }}?tab=profil">
<span class="material-symbols-outlined text-[16px]">edit</span>
<span class="font-label-sm text-label-sm">Edit Profil</span>
</a>
<a aria-label="Pengaturan" class="flex items-center gap-1 px-3 py-1.5 rounded-full bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors" href="{{ route('akun.pengaturan') }}?tab=pengaturan">
<span class="material-symbols-outlined text-[16px]">tune</span>
<span class="font-label-sm text-label-sm">Pengaturan</span>
</a>
</div>
</div>
<!-- Interactive Digital Library Membership Pass (Gen-Z Holographic Vibe) -->
<div class="relative w-full rounded-2xl bg-gradient-to-br from-primary-container via-[#4c00d3] to-surface-tint p-space-lg text-on-primary shadow-xl overflow-hidden">
<!-- Decorative Backdrop Geometry -->
<div class="absolute -right-12 -top-12 w-40 h-40 bg-secondary-fixed/20 rounded-full blur-2xl pointer-events-none"></div>
<div class="absolute right-4 bottom-2 opacity-10 pointer-events-none">
<span class="material-symbols-outlined text-[130px]">local_library</span>
</div>
<div class="relative z-10 flex flex-col gap-space-md">
<!-- Card Top Bar -->
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-secondary-fixed text-[20px]">bolt</span>
<span class="font-label-md text-label-md tracking-widest uppercase text-secondary-fixed">BiblioZ Pass • 2024/2025</span>
</div>
<span class="px-2.5 py-1 rounded-full bg-surface-container-lowest/20 backdrop-blur-md font-label-sm text-label-sm text-on-primary">
            Master Reader ⚡
          </span>
</div>
<!-- Middle Card Chip & Details -->
<div class="flex items-end justify-between pt-2">
<div>
<p class="font-label-sm text-label-sm text-on-primary-container uppercase tracking-wider">Nomor Anggota Digital</p>
<p class="font-headline-sm text-headline-sm font-label-md tracking-widest text-on-primary mt-0.5">BZ-9921-4882-01</p>
<p class="font-body-sm text-body-sm text-on-primary/80 mt-1">Berlaku s/d Juni 2025 • Gerbang RFID Aktif</p>
</div>
<div class="w-10 h-8 rounded-lg bg-surface-container-lowest/25 flex items-center justify-center">
<span class="material-symbols-outlined text-on-primary text-[22px]">contactless</span>
</div>
</div>
<!-- Interactive Trigger Button for Modal/Barcode -->
<div class="pt-2">
<button class="w-full py-2.5 px-space-md rounded-xl bg-surface-container-lowest text-primary font-label-lg text-label-lg flex items-center justify-center gap-2 shadow-md hover:bg-surface-container-low transition-transform active:scale-[0.98]" id="toggleQrBtn">
<span class="material-symbols-outlined text-[20px]">qr_code_scanner</span>
<span>Tampilkan Barcode &amp; QR Masuk Kilat</span>
</button>
</div>
<!-- Collapsible QR Code Barcode Area -->
<div class="hidden flex-col items-center justify-center bg-surface-container-lowest text-on-surface rounded-xl p-space-md mt-1 gap-2" id="qrCodeContainer">
<div class="flex flex-col items-center py-2 px-4 bg-white rounded-lg shadow-inner w-full">
<!-- Simulated Crisp SVG Barcode -->
<div class="w-full max-w-[240px] h-12 flex items-center justify-between py-1">
<span class="w-1 h-full bg-on-surface"></span>
<span class="w-0.5 h-full bg-on-surface"></span>
<span class="w-2 h-full bg-on-surface"></span>
<span class="w-1.5 h-full bg-on-surface"></span>
<span class="w-0.5 h-full bg-on-surface"></span>
<span class="w-2.5 h-full bg-on-surface"></span>
<span class="w-1 h-full bg-on-surface"></span>
<span class="w-3 h-full bg-on-surface"></span>
<span class="w-0.5 h-full bg-on-surface"></span>
<span class="w-1.5 h-full bg-on-surface"></span>
<span class="w-2 h-full bg-on-surface"></span>
<span class="w-0.5 h-full bg-on-surface"></span>
<span class="w-1 h-full bg-on-surface"></span>
<span class="w-2.5 h-full bg-on-surface"></span>
<span class="w-1 h-full bg-on-surface"></span>
</div>
<span id="profile-gate-id" class="font-label-sm text-label-sm tracking-widest text-on-surface-variant mt-1">1234567890-BIBLIOZ-GATE</span>
</div>
<p class="font-body-sm text-body-sm text-center text-on-surface-variant">Arahkan ke scanner turnstile gerbang perpustakaan atau meja sirkulasi mandiri</p>
</div>
</div>
</div>
</section>
<!-- QUICK SHORTCUTS & SUPPORT -->
<section class="flex flex-col w-full gap-space-sm pt-space-xs">
<h3 class="font-headline-sm text-headline-sm text-on-surface">Layanan &amp; Integrasi</h3>
<div class="flex flex-col rounded-2xl bg-surface-container-lowest shadow-sm overflow-hidden divide-y divide-surface-container">
<!-- Fine Status Item -->
<a class="flex items-center justify-between p-space-md hover:bg-surface-container-low transition-colors" href="#">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-secondary-container/40 text-secondary flex items-center justify-center">
<span class="material-symbols-outlined text-[22px]">verified_user</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface">Status Denda &amp; Bebas Pinjam</span>
<span class="font-body-sm text-body-sm text-secondary font-medium">Bebas Denda (Rp 0 • Tidak Ada Tunggakan)</span>
</div>
</div>
<span class="material-symbols-outlined text-outline text-[20px]">chevron_right</span>
</a>
<!-- Dapodik / School Report Integration -->
<a class="flex items-center justify-between p-space-md hover:bg-surface-container-low transition-colors" href="#">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-primary-fixed text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[22px]">sync</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface">Sinkronisasi Rapor Literasi</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Tersinkron otomatis ke Kemendikdasmen</span>
</div>
</div>
<span class="material-symbols-outlined text-outline text-[20px]">chevron_right</span>
</a>
<!-- Librarian Help Desk -->
<a class="flex items-center justify-between p-space-md hover:bg-surface-container-low transition-colors" href="#">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-tertiary-fixed text-tertiary flex items-center justify-center">
<span class="material-symbols-outlined text-[22px]">support_agent</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface">Tanya Pustakawan</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Konsultasi riset karya ilmiah</span>
</div>
</div>
<span class="material-symbols-outlined text-outline text-[20px]">chevron_right</span>
</a>
</div>
</section>
</div>
<div class="lg:col-span-7 flex flex-col gap-space-lg w-full">
<!-- GAMIFICATION & LEVEL PROGRESSION SECTION -->
<section class="flex flex-col w-full gap-space-sm">
<!-- Level Banner Card -->
<div class="w-full rounded-2xl bg-surface-container-lowest p-space-md shadow-sm flex flex-col gap-space-sm">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2.5">
<div class="w-10 h-10 rounded-xl bg-surface-container-high flex items-center justify-center text-outline">
<span class="material-symbols-outlined text-[24px]">workspace_premium</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Peringkat Literasi</span>
<span class="font-title-md text-title-md text-on-surface" id="profile-level-title">Level 1 • Pembaca Baru</span>
</div>
</div>
<span class="font-label-md text-label-md px-2.5 py-1 rounded-full bg-surface-container-high text-on-surface" id="profile-top-percent">
          Top 100%
        </span>
</div>
<!-- XP Bar -->
<div class="flex flex-col gap-1.5 pt-1">
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant font-label-sm text-label-sm" id="profile-xp-text">0 / 100 XP</span>
<span class="text-on-surface-variant font-label-sm text-label-sm" id="profile-xp-next">+100 XP ke Level 2</span>
</div>
<div class="w-full h-3 rounded-full bg-surface-container overflow-hidden p-0.5">
<div id="profile-xp-bar" class="h-full rounded-full bg-gradient-to-r from-primary via-primary-container to-secondary-fixed transition-all duration-700" style="width: 0%;"></div>
</div>
</div>
<!-- Daily Streak Mini Widget -->
<div class="flex items-center justify-between p-space-sm rounded-xl bg-surface-container-low mt-1">
<div class="flex items-center gap-2">
<span class="text-xl opacity-50 grayscale">🔥</span>
<div class="flex flex-col">
<span class="font-label-lg text-label-lg text-on-surface">0 Hari Streak Membaca</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Mulai baca hari ini untuk streak!</span>
</div>
</div>
<!-- 7-day mini streak indicators -->
<div class="flex items-center gap-1">
<span class="w-6 h-6 rounded-full bg-surface-container text-outline flex items-center justify-center font-label-sm text-label-sm">S</span>
<span class="w-6 h-6 rounded-full bg-surface-container text-outline flex items-center justify-center font-label-sm text-label-sm">S</span>
<span class="w-6 h-6 rounded-full bg-surface-container text-outline flex items-center justify-center font-label-sm text-label-sm">R</span>
<span class="w-6 h-6 rounded-full bg-surface-container text-outline flex items-center justify-center font-label-sm text-label-sm">K</span>
<span class="w-6 h-6 rounded-full bg-surface-container text-outline flex items-center justify-center font-label-sm text-label-sm">J</span>
<span class="w-6 h-6 rounded-full bg-surface-container text-outline flex items-center justify-center font-label-sm text-label-sm">S</span>
<span class="w-6 h-6 rounded-full bg-surface-container text-outline flex items-center justify-center font-label-sm text-label-sm">M</span>
</div>
</div>
</div>
<!-- Quick Stat Metrics (2x2 Compact Bento) -->
<div class="grid grid-cols-2 gap-space-sm">
<div class="rounded-xl bg-surface-container-lowest p-space-md shadow-sm flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-surface-container-high text-outline flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-[22px]">auto_stories</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-headline-sm text-headline-sm text-on-surface">0</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Buku Selesai</span>
</div>
</div>
<div class="rounded-xl bg-surface-container-lowest p-space-md shadow-sm flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-surface-container-high text-outline flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-[22px]">schedule</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-headline-sm text-headline-sm text-on-surface">0 Jam</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Total Membaca</span>
</div>
</div>
<div class="rounded-xl bg-surface-container-lowest p-space-md shadow-sm flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-surface-container-high text-outline flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' 0;">star</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-headline-sm text-headline-sm text-on-surface">0 / 5</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Rating Ulasan</span>
</div>
</div>
<div class="rounded-xl bg-surface-container-lowest p-space-md shadow-sm flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-surface-container-high text-outline flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' 0;">favorite</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-headline-sm text-headline-sm text-on-surface">0 Item</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Koleksi Favorit</span>
</div>
</div>
</div>
</section>
<!-- BADGE REWARDS & PRESTASI -->
<section class="flex flex-col w-full gap-space-sm">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<h3 class="font-headline-sm text-headline-sm text-on-surface">Lencana Prestasi</h3>
<span class="text-base">🏆</span>
</div>
<!-- Filter Switcher -->
<div class="flex items-center bg-surface-container rounded-lg p-1 text-label-sm font-label-sm">
<button class="px-2.5 py-1 rounded-md text-on-surface-variant hover:text-on-surface transition-all" id="badgeTabUnlocked">Tercapai (0)</button>
<button class="px-2.5 py-1 rounded-md bg-surface-container-lowest text-primary shadow-xs font-bold transition-all" id="badgeTabLocked">Terkunci (6)</button>
</div>
</div>
<!-- Badge Showcase Grid -->
<div class="grid grid-cols-2 gap-space-sm" id="badgeContainer">
<!-- Badge 1 (Locked) -->
<div class="badge-item locked flex flex-col p-space-md rounded-2xl bg-surface-container-low shadow-sm gap-2 relative overflow-hidden opacity-90">
<div class="flex items-center justify-between">
<div class="w-11 h-11 rounded-2xl bg-surface-container-highest text-outline flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">lock</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm">0 / 1</span>
</div>
<div class="flex flex-col mt-1">
<h4 class="font-title-md text-title-md text-on-surface">Speed Reader</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Selesaikan baca buku &lt; 48 jam</p>
<div class="w-full h-1.5 rounded-full bg-surface-container-highest mt-2 overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 0%;"></div>
</div>
</div>
</div>
<!-- Badge 2 (Locked) -->
<div class="badge-item locked flex flex-col p-space-md rounded-2xl bg-surface-container-low shadow-sm gap-2 relative overflow-hidden opacity-90">
<div class="flex items-center justify-between">
<div class="w-11 h-11 rounded-2xl bg-surface-container-highest text-outline flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">lock</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm">0 / 10</span>
</div>
<div class="flex flex-col mt-1">
<h4 class="font-title-md text-title-md text-on-surface">Marathon Kurikulum</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Selesaikan 10 modul pelajaran resmi</p>
<div class="w-full h-1.5 rounded-full bg-surface-container-highest mt-2 overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 0%;"></div>
</div>
</div>
</div>
<!-- Badge 3 (Locked) -->
<div class="badge-item locked flex flex-col p-space-md rounded-2xl bg-surface-container-low shadow-sm gap-2 relative overflow-hidden opacity-90">
<div class="flex items-center justify-between">
<div class="w-11 h-11 rounded-2xl bg-surface-container-highest text-outline flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">lock</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm">0 / 5</span>
</div>
<div class="flex flex-col mt-1">
<h4 class="font-title-md text-title-md text-on-surface">Reviewer Teladan</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">5 ulasan bermutu di katalog buku</p>
<div class="w-full h-1.5 rounded-full bg-surface-container-highest mt-2 overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 0%;"></div>
</div>
</div>
</div>
<!-- Badge 4 (Locked) -->
<div class="badge-item locked flex flex-col p-space-md rounded-2xl bg-surface-container-low shadow-sm gap-2 relative overflow-hidden opacity-90">
<div class="flex items-center justify-between">
<div class="w-11 h-11 rounded-2xl bg-surface-container-highest text-outline flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">lock</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm">0 / 1</span>
</div>
<div class="flex flex-col mt-1">
<h4 class="font-title-md text-title-md text-on-surface">Nocturnal Reader</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Pinjam &amp; baca e-book &gt; jam 19.00</p>
<div class="w-full h-1.5 rounded-full bg-surface-container-highest mt-2 overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 0%;"></div>
</div>
</div>
</div>
<!-- Badge 5 (Locked / Progress) -->
<div class="badge-item locked flex flex-col p-space-md rounded-2xl bg-surface-container-low shadow-sm gap-2 relative overflow-hidden opacity-90">
<div class="flex items-center justify-between">
<div class="w-11 h-11 rounded-2xl bg-surface-container-highest text-outline flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">lock</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm">0 / 50</span>
</div>
<div class="flex flex-col mt-1">
<h4 class="font-title-md text-title-md text-on-surface">Grand Master</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Baca total 50 judul buku cetak &amp; digital</p>
<div class="w-full h-1.5 rounded-full bg-surface-container-highest mt-2 overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 0%;"></div>
</div>
</div>
</div>
<!-- Badge 6 (Locked / Progress) -->
<div class="badge-item locked flex flex-col p-space-md rounded-2xl bg-surface-container-low shadow-sm gap-2 relative overflow-hidden opacity-90">
<div class="flex items-center justify-between">
<div class="w-11 h-11 rounded-2xl bg-surface-container-highest text-outline flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">lock</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm">0%</span>
</div>
<div class="flex flex-col mt-1">
<h4 class="font-title-md text-title-md text-on-surface">Duta Literasi</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Tembus Top 3 peminjam terbanyak sekolah</p>
<div class="w-full h-1.5 rounded-full bg-surface-container-highest mt-2 overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 0%;"></div>
</div>
</div>
</div>
</div>
</section>
<!-- READING HISTORY & CIRCULATION RECORD -->
<section class="flex flex-col w-full gap-space-sm">
<div class="flex items-center justify-between">
<h3 class="font-headline-sm text-headline-sm text-on-surface">Riwayat Sirkulasi</h3>
<span class="font-label-sm text-label-sm text-primary">Semester Ganjil</span>
</div>
<!-- Tab Filter Switcher -->
<div class="flex items-center gap-2 overflow-x-auto pb-1 no-scrollbar">
<button class="px-3.5 py-1.5 rounded-xl bg-primary text-on-primary font-label-md text-label-md whitespace-nowrap shadow-sm">
        Selesai Dibaca (32)
      </button>
<button class="px-3.5 py-1.5 rounded-xl bg-surface-container text-on-surface-variant font-label-md text-label-md whitespace-nowrap hover:bg-surface-container-high">
        Sedang Berjalan (2)
      </button>
<button class="px-3.5 py-1.5 rounded-xl bg-surface-container text-on-surface-variant font-label-md text-label-md whitespace-nowrap hover:bg-surface-container-high">
        Reservasi (1)
      </button>
</div>
<!-- History Cards Stack -->
<div class="flex flex-col gap-space-sm">
<!-- Book 1 -->
<div class="flex gap-space-md p-space-md rounded-2xl bg-surface-container-lowest shadow-sm">
<div class="w-20 h-28 rounded-xl overflow-hidden flex-shrink-0 bg-surface-container shadow-xs">
<img class="w-full h-full object-cover" data-alt="Cover of the modern philosophy book Filosofi Teras by Henry Manampiring, minimalist clean design with stoic aesthetics, purple and white tones, sharp book cover presentation." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDSPxegg5lgJo3ibibrnCIx0ItB3SO7X5KM0BxSW0gpgwgCWQuWQNYnnrZFCgAtkTWjGBBXHCyZcTslKygvKa8-2Uux5UTOX_4GYssQrunxHF_POMyvPy85Tnhd8-AZ_dHHxWk1ZBKseMVihdZvj0t0fIqN8UAElJNWn8dzq1MZtoIeTAsXKqWiPd6IeCTI8svJgdIBMMwQPnIq39iTQaR0TKBKezYY9N9sjl7x9BaksqAiMlN2wcuH"/>
</div>
<div class="flex flex-col justify-between flex-1 min-w-0">
<div class="flex flex-col">
<div class="flex items-center justify-between gap-1">
<span class="px-2 py-0.5 rounded-md bg-surface-container-high text-primary font-label-sm text-label-sm uppercase">Self Growth</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">10 Nov 2024</span>
</div>
<h4 class="font-title-md text-title-md text-on-surface truncate mt-1">Filosofi Teras</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant truncate">Henry Manampiring • Fisik</p>
</div>
<div class="flex items-center justify-between pt-2">
<div class="flex items-center text-[#d97706]">
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="font-label-sm text-label-sm text-on-surface ml-1">5.0</span>
</div>
<button class="px-2.5 py-1 rounded-lg bg-surface-container text-primary font-label-sm text-label-sm hover:bg-primary-fixed transition-colors">
              Ulas Lagi
            </button>
</div>
</div>
</div>
<!-- Book 2 -->
<div class="flex gap-space-md p-space-md rounded-2xl bg-surface-container-lowest shadow-sm">
<div class="w-20 h-28 rounded-xl overflow-hidden flex-shrink-0 bg-surface-container shadow-xs">
<img class="w-full h-full object-cover" data-alt="Cover of high school Physics and Cosmology textbook with deep space nebula, abstract quantum geometry, vibrant futuristic blue and violet accents, modern scientific educational cover." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBWvPloWTR62CU8-fOVfKz9f6VYsIrkVnA9MmfgcSI8_lF0-2PXl-CDCVMEMv7sI7HE4FA-J5fCoa_zph3s8_5tJ7IMvqFNmA0O3HsssWzIRdtRlsrtVg7oEsFzvPaaN0yUTGBqkOCmZcgTOIDRHrnl5FweVAUk4aBeJw2sw6b3PFMG2wNS0ZYBQ9OQQ2XgPJgqulgCJ5YNfVOX6WYYZbtcRhk-t6qqPt-UyxD9VJkZVrdYNaGBcxGi"/>
</div>
<div class="flex flex-col justify-between flex-1 min-w-0">
<div class="flex flex-col">
<div class="flex items-center justify-between gap-1">
<span class="px-2 py-0.5 rounded-md bg-secondary-container/60 text-on-secondary-container font-label-sm text-label-sm uppercase">Sains • E-Book</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">28 Okt 2024</span>
</div>
<h4 class="font-title-md text-title-md text-on-surface truncate mt-1">Fisika Modern &amp; Kosmologi</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant truncate">Prof. Yohanes S. • Digital PDF</p>
</div>
<div class="flex items-center justify-between pt-2">
<div class="flex items-center text-[#d97706]">
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 0.5;">star_half</span>
<span class="font-label-sm text-label-sm text-on-surface ml-1">4.8</span>
</div>
<button class="px-2.5 py-1 rounded-lg bg-surface-container text-primary font-label-sm text-label-sm hover:bg-primary-fixed transition-colors">
              Buka File
            </button>
</div>
</div>
</div>
<!-- Book 3 -->
<div class="flex gap-space-md p-space-md rounded-2xl bg-surface-container-lowest shadow-sm">
<div class="w-20 h-28 rounded-xl overflow-hidden flex-shrink-0 bg-surface-container shadow-xs">
<img class="w-full h-full object-cover" data-alt="Cover of the famous Indonesian novel Laskar Pelangi by Andrea Hirata, iconic rainbow imagery with a traditional wooden classroom silhouette, warm golden-hour lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBEpLREQhd1WHaZm4RzFW_BoPmD72eCctHfdRXdCc82nkZ5SMwzeAubTQI4TwqljjirA8LtBP_UOKAdxijpZsM3CSET0qu7A6DAhih50JlEDugMbnB7Muji18Ma9vZ6u-fxDubuA0Hd2MJJjUW6vAvZMOgvdMBY05f4VNgiod-RvoMBMl7usNpZvLhcERpBItEwC6vH0BcYkhM5243KvI1LGqPKX-l-Ge7fsXfBpJp-Dh7Azc7nvL-g"/>
</div>
<div class="flex flex-col justify-between flex-1 min-w-0">
<div class="flex flex-col">
<div class="flex items-center justify-between gap-1">
<span class="px-2 py-0.5 rounded-md bg-surface-container-high text-primary font-label-sm text-label-sm uppercase">Sastra Novel</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">12 Okt 2024</span>
</div>
<h4 class="font-title-md text-title-md text-on-surface truncate mt-1">Laskar Pelangi</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant truncate">Andrea Hirata • Rak B-04</p>
<p class="font-body-sm text-body-sm text-outline italic mt-1 line-clamp-1">"Inspiratif banget buat pejuang beasiswa"</p>
</div>
<div class="flex items-center justify-end pt-1">
<button class="px-2.5 py-1 rounded-lg bg-secondary-container text-on-secondary-container font-label-sm text-label-sm hover:opacity-90 transition-colors">
              Pinjam Lagi
            </button>
</div>
</div>
</div>
</div>
<!-- Download Semester Reading Certificate Banner -->
<div class="flex items-center justify-between p-space-md rounded-2xl bg-primary-fixed text-on-primary-fixed mt-1">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-surface-container-lowest text-primary flex items-center justify-center shadow-xs">
<span class="material-symbols-outlined text-[22px]">download_for_offline</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-title-md text-primary">Sertifikat Literasi Sem. 1</span>
<span class="font-body-sm text-body-sm text-on-primary-fixed-variant">Format PDF resmi terverifikasi Kepala Perpustakaan</span>
</div>
</div>
<button class="w-9 h-9 rounded-full bg-primary text-on-primary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[20px]">arrow_forward</span>
</button>
</div>
</section>
</section>
</div>
</div>
<script>
  // Interactive Toggle for Barcode / QR Section
  const toggleBtn = document.getElementById('toggleQrBtn');
  const qrContainer = document.getElementById('qrCodeContainer');
  if (toggleBtn && qrContainer) {
    toggleBtn.addEventListener('click', () => {
      const isHidden = qrContainer.classList.contains('hidden');
      if (isHidden) {
        qrContainer.classList.remove('hidden');
        qrContainer.classList.add('flex');
        toggleBtn.innerHTML = '<span class="material-symbols-outlined text-[20px]">visibility_off</span><span>Tutup Barcode Anggota</span>';
      } else {
        qrContainer.classList.add('hidden');
        qrContainer.classList.remove('flex');
        toggleBtn.innerHTML = '<span class="material-symbols-outlined text-[20px]">qr_code_scanner</span><span>Tampilkan Barcode &amp; QR Masuk Kilat</span>';
      }
    });
  }

  // Interactive Badges Filter Tab
  const btnUnlocked = document.getElementById('badgeTabUnlocked');
  const btnLocked = document.getElementById('badgeTabLocked');
  const unlockedItems = document.querySelectorAll('.badge-item.unlocked');
  const lockedItems = document.querySelectorAll('.badge-item.locked');

  if (btnUnlocked && btnLocked) {
    btnUnlocked.addEventListener('click', () => {
      btnUnlocked.className = 'px-2.5 py-1 rounded-md bg-surface-container-lowest text-primary shadow-xs font-bold transition-all';
      btnLocked.className = 'px-2.5 py-1 rounded-md text-on-surface-variant hover:text-on-surface transition-all';
      unlockedItems.forEach(el => el.classList.remove('hidden'));
      lockedItems.forEach(el => el.classList.add('hidden'));
    });

    btnLocked.addEventListener('click', () => {
      btnLocked.className = 'px-2.5 py-1 rounded-md bg-surface-container-lowest text-primary shadow-xs font-bold transition-all';
      btnUnlocked.className = 'px-2.5 py-1 rounded-md text-on-surface-variant hover:text-on-surface transition-all';
      unlockedItems.forEach(el => el.classList.add('hidden'));
      lockedItems.forEach(el => el.classList.remove('hidden'));
      lockedItems.forEach(el => el.classList.add('flex'));
    });
  }

  // Fetch User Data from API
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
          window.location.href = '/akun-pengaturan?tab=profil&first_login=1';
          return;
        }

        const elName = document.getElementById('profile-name');
        const elNis = document.getElementById('profile-nis');
        const elSchool = document.getElementById('profile-school-name');
        const elGate = document.getElementById('profile-gate-id');
        
        if (elName) elName.textContent = user.name;
        if (elNis) elNis.textContent = `NIS: ${user.nis} • XII MIPA 2`;
        if (elSchool) elSchool.textContent = user.school_name || 'SMAN 1 GARUDAPURA';
        if (elGate) elGate.textContent = `${user.nis}-BIBLIOZ-GATE`;
        
        const elAvatarSmall = document.getElementById('profile-avatar-small');
        const elAvatarLarge = document.getElementById('profile-avatar-large');
        
        let avatarUrl = 'https://ui-avatars.com/api/?name=' + encodeURIComponent(user.name) + '&background=random&color=fff';
        if (user.avatar) {
            avatarUrl = user.avatar.startsWith('http') ? user.avatar : '/' + user.avatar;
        }

        if (elAvatarSmall) elAvatarSmall.src = avatarUrl;
        if (elAvatarLarge) elAvatarLarge.src = avatarUrl;

        // --- Logic Peringkat Literasi & XP (Gen Z Ranking System) ---
        // Jika backend belum support, default ke 1.
        let userLevel = user.level || 1; 
        let userXp = user.xp || 0;
        
        function getLiteracyTitle(level) {
          if (level >= 100) return 'Dewa Literasi ⚡';
          if (level >= 90) return 'Penjaga Arsip Sejarah';
          if (level >= 80) return 'Grandmaster Pustaka';
          if (level >= 70) return 'Sang Ensiklopedia';
          if (level >= 60) return 'Kutu Buku Veteran';
          if (level >= 50) return 'Master Literasi';
          if (level >= 40) return 'Ahli Pustaka';
          if (level >= 30) return 'Pengamat Sastra';
          if (level >= 25) return 'Kolektor Kata';
          if (level >= 20) return 'Pengejar Ilmu';
          if (level >= 15) return 'Pelahap Cerita';
          if (level >= 10) return 'Kutu Buku Junior';
          if (level >= 6) return 'Penjelajah Halaman';
          return 'Pembaca Baru';
        }

        const elLevelTitle = document.getElementById('profile-level-title');
        const elXpText = document.getElementById('profile-xp-text');
        const elXpNext = document.getElementById('profile-xp-next');
        const elXpBar = document.getElementById('profile-xp-bar');
        const elTopPercent = document.getElementById('profile-top-percent');
        
        if (elLevelTitle) {
          elLevelTitle.textContent = `Level ${userLevel} • ${getLiteracyTitle(userLevel)}`;
          
          let xpRequirement = userLevel * 100; // Contoh rumus sederhana (Level 1 butuh 100XP, dsb)
          if (elXpText) elXpText.textContent = `${userXp} / ${xpRequirement} XP`;
          
          let xpLeft = xpRequirement - userXp;
          let nextLevel = userLevel + 1;
          if (elXpNext) elXpNext.textContent = `+${xpLeft} XP ke Level ${nextLevel}`;
          
          let progressPercent = (userXp / xpRequirement) * 100;
          if (elXpBar) elXpBar.style.width = `${progressPercent}%`;
          
          if (elTopPercent) {
            let percent = Math.max(1, 100 - (userLevel * 2)); // Rumus kasar
            elTopPercent.textContent = `Top ${percent}%`;
            if(userLevel >= 10) {
               elTopPercent.className = 'font-label-md text-label-md px-2.5 py-1 rounded-full bg-primary/20 text-primary font-bold';
            }
          }
        }
      } else {
        localStorage.removeItem('auth_token');
        window.location.href = '/login';
      }
    } catch (e) {
      console.error(e);
    }
  });
</script></main><nav class="fixed bottom-0 w-full z-50 pb-safe bg-surface/85 backdrop-blur-xl shadow-[0_-2px_12px_rgba(0,0,0,0.05)]" data-active-classes="bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]"><div class="flex items-center justify-around h-16 px-space-xs max-w-5xl mx-auto"><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="katalog-buku" href="{{ route('katalog') }}"><span class="material-symbols-outlined text-[22px]">menu_book</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Katalog</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="sirkulasi-peminjaman" href="{{ route('sirkulasi') }}"><span class="material-symbols-outlined text-[22px]">sync_alt</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Sirkulasi</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="petugas-statistik" href="{{ route('statistik') }}"><span class="material-symbols-outlined text-[22px]">analytics</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Statistik</span></a><a aria-current="page" class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl transition-all bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]" data-path="akun" href="{{ route('akun') }}"><span class="material-symbols-outlined text-[22px]">person</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Akun</span></a></div></nav></body></html>
