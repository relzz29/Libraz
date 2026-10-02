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
  </head><body class="bg-background font-body-md text-body-md text-on-surface flex flex-col min-h-screen"><header class="fixed top-0 w-full z-50 pt-safe bg-surface/80 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]"><div class="h-16 px-margin flex items-center justify-between gap-space-sm"><div class="flex items-center gap-space-sm min-w-0"><img alt="BiblioZ App Logo" class="h-8 w-auto object-contain flex-shrink-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAz2hoVQ9wOeungd-4ubStxt3uW2O2agaLbBXWfGvi50WoxUohQpS1yMGEOWVn3E1FfRDlQjUNIjc8U7kCnkRxZRKb_FmsWrxzUds9I4q7uzTH1WwhU3gP9Ixf3B82RgmnN0hKWT1MbmwIFykWAzRz7Rk0zLiqbGMIAh8vPkB5TkkU3q-_iAdQkfqN0k__yeu90O4L1BBAF2jgxjXZziX8XqXajMJjFWTDTlpqIgIs7jbXrN5InJK2I"/><div class="flex flex-col min-w-0"><span class="font-label-sm text-label-sm text-primary tracking-wider uppercase truncate">BiblioZ</span><span class="font-title-md text-title-md text-on-surface truncate">Katalog Buku</span></div></div><div class="flex items-center gap-space-xs flex-shrink-0"><a href="{{ route('notifikasi') }}" aria-label="Notifikasi" class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors focus:outline-none"><span class="material-symbols-outlined text-[24px]">notifications</span></a><a href="/edit-profil" class="w-11 h-11 flex items-center justify-center hover:scale-105 transition-transform cursor-pointer" title="Edit Profil"><img id="profile-avatar-small" alt="Profile" class="w-8 h-8 rounded-full object-cover" src="https://ui-avatars.com/api/?name=User&amp;background=random&amp;color=fff"/></a></div></div></header><main class="flex flex-col relative w-full pt-16 pb-24 bg-surface min-h-screen"><div class="flex flex-col w-full relative min-h-[calc(100vh-4rem)] select-none overflow-hidden bg-on-background">
<!-- Realistic Library Camera Feed Simulation Background -->
<div class="absolute inset-0 bg-cover bg-center opacity-65 scale-105 filter blur-[1px]" data-alt="First-person POV camera lens view aiming at a sleek modern library wooden bookshelf filled with contemporary academic books and novels. Moody cinematic lighting with soft purple and cyan rim light ambiance, high dynamic range, subtle lens dust, authentic shallow depth of field focusing on an ISBN barcode on a crisp matte book cover." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAjyT8-mnlAaXjLxdZkSMILlDr8hpZzB4xUsuzhRTbI_WDea0usVtf2XuWsz6-WGOPxWRqoFQ1-L35MYQQs2zMmJu386BmypPGKJhkhIGFkq-o43599YNriFsZypwUraJVFx1HP7RTfK4iG8CIeWDKMSQBnbwsUIoK5eW3vG8pqQd0BQAE2DNAm9Hd9ADUN5RQ21AZMj4Ekg360dJVlXIy7zE8PnX2Tk6E11HdcU8oPofCWmfUdpLiI')">
</div>
<!-- High-Tech Camera HUD Matrix / Gradient Vignette -->
<div class="absolute inset-0 bg-gradient-to-b from-black/85 via-black/40 to-black/90 pointer-events-none"></div>
<!-- Dynamic Grid Reticle Overlay -->
<div class="absolute inset-0 opacity-15 pointer-events-none bg-[radial-gradient(#43fcae_1px,transparent_1px)] [background-size:24px_24px]"></div>
<!-- Top Glass HUD Control Bar -->
<div class="relative z-20 px-margin pt-space-md pb-space-sm flex flex-col gap-space-sm">
<div class="flex items-center justify-between gap-space-xs">
<!-- Back Navigation Button -->
<button class="flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-surface-container-highest/30 backdrop-blur-md text-surface-bright active:scale-95 transition-transform" id="btnBack" type="button">
<span class="material-symbols-outlined text-[20px]">arrow_back_ios_new</span>
<span class="font-label-md text-label-md tracking-wider uppercase">Kembali</span>
</button>
<!-- Live Engine Status Badge -->
<div class="flex items-center gap-space-xs px-space-md py-1.5 rounded-full bg-surface-container-highest/25 backdrop-blur-md shadow-sm">
<span class="relative flex h-2 w-2">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary-container opacity-75"></span>
<span class="relative inline-flex rounded-full h-2 w-2 bg-secondary-container"></span>
</span>
<span class="font-label-sm text-label-sm text-surface-bright tracking-widest uppercase">Live • 60 FPS</span>
</div>
<!-- Quick Toggles (Torch & Audio) -->
<div class="flex items-center gap-space-xs">
<button aria-label="Nyalakan Senter" class="w-10 h-10 rounded-full bg-surface-container-highest/30 backdrop-blur-md text-surface-bright flex items-center justify-center active:scale-95 transition-all" id="torchToggle" type="button">
<span class="material-symbols-outlined text-[20px]" id="torchIcon">flashlight_off</span>
</button>
<button aria-label="Aktifkan Suara" class="w-10 h-10 rounded-full bg-surface-container-highest/30 backdrop-blur-md text-secondary-container flex items-center justify-center active:scale-95 transition-all" id="soundToggle" type="button">
<span class="material-symbols-outlined text-[20px]" id="soundIcon">volume_up</span>
</button>
</div>
</div>
<!-- Targeted Scan Sub-title Card -->
<div class="flex items-center justify-center">
<div class="px-space-md py-1 rounded-full bg-primary-container/80 backdrop-blur-md text-on-primary shadow-sm flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px] text-secondary-container">center_focus_strong</span>
<span class="font-label-md text-label-md tracking-wide">Pindai Barcode ISBN-13 / RFID Buku</span>
</div>
</div>
</div>
<!-- Central Camera Viewfinder & Laser Target Area -->
<div class="relative z-10 flex-1 flex flex-col items-center justify-center px-margin py-space-sm">
<div class="relative w-full max-w-[320px] aspect-[4/3] flex items-center justify-center">
<!-- Target Corner Brackets with Violet & Mint Highlights -->
<!-- Top Left -->
<div class="absolute -top-1 -left-1 w-8 h-8 rounded-tl-xl border-t-[3.5px] border-l-[3.5px] border-secondary-container shadow-[0_0_12px_rgba(67,252,174,0.6)]"></div>
<!-- Top Right -->
<div class="absolute -top-1 -right-1 w-8 h-8 rounded-tr-xl border-t-[3.5px] border-r-[3.5px] border-secondary-container shadow-[0_0_12px_rgba(67,252,174,0.6)]"></div>
<!-- Bottom Left -->
<div class="absolute -bottom-1 -left-1 w-8 h-8 rounded-bl-xl border-b-[3.5px] border-l-[3.5px] border-secondary-container shadow-[0_0_12px_rgba(67,252,174,0.6)]"></div>
<!-- Bottom Right -->
<div class="absolute -bottom-1 -right-1 w-8 h-8 rounded-br-xl border-b-[3.5px] border-r-[3.5px] border-secondary-container shadow-[0_0_12px_rgba(67,252,174,0.6)]"></div>
<!-- Inner High-Contrast Scanning Frame -->
<div class="relative w-full h-full rounded-lg overflow-hidden bg-primary-container/5 backdrop-blur-[0.5px]">
<!-- Center Optical Aiming Crosshairs -->
<div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-40">
<div class="w-10 h-0.5 bg-secondary-container"></div>
<div class="h-10 w-0.5 bg-secondary-container -ml-5"></div>
</div>
<!-- Animated Sweeping Laser Beam Component -->
<div class="absolute left-0 right-0 h-1 bg-gradient-to-r from-transparent via-secondary-container to-transparent shadow-[0_0_16px_#43fcae] transform transition-transform duration-75" id="laserBeam">
<div class="w-full h-12 -mt-12 bg-gradient-to-t from-secondary-container/25 to-transparent pointer-events-none"></div>
</div>
<!-- Optical Alignment Markers Grid -->
<div class="absolute top-2 left-2 text-surface-bright/40 font-label-sm text-label-sm tracking-tighter">AI: AUTO-FOCUS</div>
<div class="absolute bottom-2 right-2 text-surface-bright/40 font-label-sm text-label-sm tracking-tighter">FOV: 78° STABLE</div>
</div>
<!-- Live Recognition Lock Target Tag -->
<div class="absolute -top-5 left-1/2 -translate-x-1/2 px-space-sm py-1 bg-secondary-container text-on-secondary-container rounded-full shadow-md flex items-center gap-1.5 transition-all duration-300" id="detectionTag">
<span class="material-symbols-outlined text-[14px]">qr_code_scanner</span>
<span class="font-label-sm text-label-sm tracking-wide uppercase font-bold">Deteksi Aktif: ISBN-13</span>
</div>
</div>
<!-- Instruction Subtext -->
<p class="text-surface-bright/80 font-body-sm text-body-sm text-center mt-space-md max-w-xs drop-shadow-sm">
      Arahkan barcode punggung buku atau QR identitas anggota ke tengah kotak bidik
    </p>
<!-- Zoom Factor Controller (1x / 2x / Macro) -->
<div class="flex items-center gap-space-xs mt-space-sm bg-black/50 backdrop-blur-md p-1 rounded-full">
<button class="zoom-btn px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm" data-zoom="1" type="button">1.0x</button>
<button class="zoom-btn px-3 py-1 rounded-full text-surface-bright font-label-sm text-label-sm hover:bg-surface-container-highest/30" data-zoom="2" type="button">2.0x</button>
<button class="zoom-btn px-3 py-1 rounded-full text-surface-bright font-label-sm text-label-sm hover:bg-surface-container-highest/30" data-zoom="3" type="button">MACRO</button>
</div>
</div>
<!-- Detected Book Live Preview Drawer (Interactive HUD Card) -->
<div class="relative z-30 px-margin pb-space-sm transition-all duration-300 transform translate-y-0" id="scanPreviewDrawer">
<div class="w-full bg-surface-container-lowest/95 backdrop-blur-xl rounded-xl p-space-md shadow-xl flex items-center gap-space-md">
<!-- Book Cover Inset -->
<div class="relative w-14 h-20 rounded-lg overflow-hidden flex-shrink-0 bg-surface-container">
<img class="w-full h-full object-cover" data-alt="Crisp book cover design for an Indonesian science fiction novel titled 'Laskar Langit Digital' featuring vibrant neon indigo and teal minimalist graphic geometric elements." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBqJLQtZelCjMK_twelcBENp3WGN2V-roSMrssb1DgBTCB56Xp8EwM1ML5NfeMyPIYzmSVNCNEmTM5nYKhHJ9hPHO2taIur-QVsmVYSRT9sq2h-pwehYc5NfJijez-rPreukIl7G4bKK6ElZKLjhYg0ME3-p__T22ZPmHfIXRKi1Hra5SEladsW8vt2h5bVdCXr0GB35Je40NFJ5F3IMIo12FgrX66UDBfa4juzx67y2uibW3l-bqdo"/>
<div class="absolute bottom-0 inset-x-0 bg-primary/90 text-center py-0.5">
<span class="font-label-sm text-[9px] text-on-primary leading-none uppercase">TERDAFTAR</span>
</div>
</div>
<!-- Book Metadata Details -->
<div class="flex-1 min-w-0 flex flex-col justify-between py-0.5">
<div class="flex items-start justify-between gap-space-xs">
<div class="min-w-0">
<span class="inline-block px-1.5 py-0.5 rounded bg-secondary/15 text-secondary font-label-sm text-label-sm">RAK ILMU B-04</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface truncate mt-0.5">Laskar Langit Digital</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant truncate">Dr. Aris Sudarmawan • 2023</p>
</div>
</div>
<div class="flex items-center justify-between mt-space-xs pt-space-xs">
<span class="font-label-sm text-label-sm text-outline">ISBN 978-602-03-8841-9</span>
<button class="px-space-md py-1.5 rounded-lg bg-primary-container text-on-primary font-label-md text-label-md flex items-center gap-1 active:scale-95 transition-transform shadow-md" id="btnProcessScan" type="button">
<span>Detail</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
<!-- Bottom Control Deck & Navigation Modes -->
<div class="relative z-30 px-margin pb-space-lg pt-space-xs flex flex-col gap-space-sm bg-gradient-to-t from-black via-black/80 to-transparent">
<!-- Mode Switcher Pill Segment -->
<div class="w-full p-1 rounded-full bg-surface-container-highest/20 backdrop-blur-md flex items-center justify-between">
<button class="mode-btn flex-1 py-2 text-center rounded-full bg-primary-container text-on-primary font-label-md text-label-md shadow-sm transition-all" data-mode="barcode" type="button">
        Barcode Buku
      </button>
<button class="mode-btn flex-1 py-2 text-center rounded-full text-surface-bright/70 hover:text-surface-bright font-label-md text-label-md transition-all" data-mode="student" type="button">
        Kartu Siswa
      </button>
<button class="mode-btn flex-1 py-2 text-center rounded-full text-surface-bright/70 hover:text-surface-bright font-label-md text-label-md transition-all" data-mode="rfid" type="button">
        Scan RFID
      </button>
</div>
<!-- Manual Code Entry Fallback Button -->
<div class="flex items-center gap-space-sm">
<button class="flex-1 py-3 px-space-md rounded-xl bg-surface-container-highest/30 backdrop-blur-md text-surface-bright hover:bg-surface-container-highest/40 active:scale-[0.98] transition-all flex items-center justify-center gap-space-sm" id="btnManualInput" type="button">
<span class="material-symbols-outlined text-[20px] text-secondary-container">keyboard</span>
<span class="font-title-md text-title-md">Ketik Kode / ISBN Manual</span>
</button>
<button aria-label="Mode Banyak Sekaligus" class="w-12 h-12 rounded-xl bg-surface-container-highest/30 backdrop-blur-md text-surface-bright flex items-center justify-center active:scale-95 transition-all" id="btnBatchMode" type="button">
<span class="material-symbols-outlined text-[22px]">library_add_check</span>
</button>
</div>
</div>
<!-- Manual ISBN Entry Modal Sheet (Hidden by default) -->
<div class="hidden absolute inset-0 z-50 bg-black/75 backdrop-blur-sm flex flex-col justify-end" id="manualModal">
<div class="w-full bg-surface-container-lowest rounded-t-2xl p-margin shadow-2xl flex flex-col gap-space-md">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-[24px]">pin</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Input Barcode Manual</h2>
</div>
<button class="w-8 h-8 rounded-full bg-surface-container text-on-surface flex items-center justify-center" id="btnCloseModal" type="button">
<span class="material-symbols-outlined text-[18px]">close</span>
</button>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
        Masukkan 13 digit angka ISBN atau nomor seri barcode yang tertera pada buku perpustakaan.
      </p>
<div class="flex flex-col gap-space-xs">
<label class="font-label-sm text-label-sm text-outline uppercase tracking-wider" for="inputIsbn">Nomor ISBN / ID Eksemplar</label>
<div class="relative flex items-center">
<input class="w-full px-space-md py-3 rounded-lg bg-surface-container-low text-on-surface font-title-md text-title-md outline-none focus:bg-surface-container-lowest transition-all" id="inputIsbn" placeholder="Contoh: 9786020388419" type="text"/>
<button class="absolute right-3 text-primary" type="button">
<span class="material-symbols-outlined text-[20px]">search</span>
</button>
</div>
</div>
<div class="flex items-center gap-space-sm pt-space-xs">
<button class="flex-1 py-3 rounded-lg bg-surface-container text-on-surface font-title-md text-title-md" id="btnCancelInput" type="button">
          Batal
        </button>
<button class="flex-1 py-3 rounded-lg bg-primary-container text-on-primary font-title-md text-title-md shadow-md active:scale-95 transition-transform" id="btnSubmitManual" type="button">
          Verifikasi Buku
        </button>
</div>
</div>
</div>
<!-- Audio Chime Synthesizer Simulation -->
<script>
    (function () {
      // Laser Vertical Scan Animation Loop
      const laser = document.getElementById('laserBeam');
      let direction = 1;
      let pos = 0;
      const maxTravel = 210; // Target scan area travel bounds in px

      function animateLaser() {
        pos += direction * 2.2;
        if (pos >= maxTravel) {
          pos = maxTravel;
          direction = -1;
        } else if (pos <= 0) {
          pos = 0;
          direction = 1;
        }
        if (laser) {
          laser.style.transform = `translateY(${pos}px)`;
        }
        requestAnimationFrame(animateLaser);
      }
      requestAnimationFrame(animateLaser);

      // Flashlight Toggle Interaction
      const torchBtn = document.getElementById('torchToggle');
      const torchIcon = document.getElementById('torchIcon');
      let torchActive = false;

      if (torchBtn && torchIcon) {
        torchBtn.addEventListener('click', () => {
          torchActive = !torchActive;
          if (torchActive) {
            torchBtn.classList.remove('bg-surface-container-highest/30', 'text-surface-bright');
            torchBtn.classList.add('bg-secondary-container', 'text-on-secondary-container');
            torchIcon.textContent = 'flashlight_on';
          } else {
            torchBtn.classList.remove('bg-secondary-container', 'text-on-secondary-container');
            torchBtn.classList.add('bg-surface-container-highest/30', 'text-surface-bright');
            torchIcon.textContent = 'flashlight_off';
          }
        });
      }

      // Audio Feedback Toggle
      const soundBtn = document.getElementById('soundToggle');
      const soundIcon = document.getElementById('soundIcon');
      let soundActive = true;

      if (soundBtn && soundIcon) {
        soundBtn.addEventListener('click', () => {
          soundActive = !soundActive;
          if (soundActive) {
            soundBtn.classList.remove('text-surface-bright/50');
            soundBtn.classList.add('text-secondary-container');
            soundIcon.textContent = 'volume_up';
          } else {
            soundBtn.classList.remove('text-secondary-container');
            soundBtn.classList.add('text-surface-bright/50');
            soundIcon.textContent = 'volume_off';
          }
        });
      }

      // Zoom Button Switching
      const zoomButtons = document.querySelectorAll('.zoom-btn');
      zoomButtons.forEach((btn) => {
        btn.addEventListener('click', () => {
          zoomButtons.forEach((b) => {
            b.classList.remove('bg-secondary-container', 'text-on-secondary-container');
            b.classList.add('text-surface-bright');
          });
          btn.classList.add('bg-secondary-container', 'text-on-secondary-container');
          btn.classList.remove('text-surface-bright');
        });
      });

      // Scan Mode Selector Switch
      const modeButtons = document.querySelectorAll('.mode-btn');
      const detectionTag = document.getElementById('detectionTag');
      modeButtons.forEach((btn) => {
        btn.addEventListener('click', () => {
          modeButtons.forEach((b) => {
            b.classList.remove('bg-primary-container', 'text-on-primary', 'shadow-sm');
            b.classList.add('text-surface-bright/70');
          });
          btn.classList.add('bg-primary-container', 'text-on-primary', 'shadow-sm');
          btn.classList.remove('text-surface-bright/70');

          const mode = btn.dataset.mode;
          if (detectionTag) {
            if (mode === 'barcode') {
              detectionTag.innerHTML = '<span class="material-symbols-outlined text-[14px]">qr_code_scanner</span><span class="font-label-sm text-label-sm tracking-wide uppercase font-bold">Deteksi Aktif: ISBN-13</span>';
            } else if (mode === 'student') {
              detectionTag.innerHTML = '<span class="material-symbols-outlined text-[14px]">badge</span><span class="font-label-sm text-label-sm tracking-wide uppercase font-bold">Deteksi: QR Kartu Pelajar</span>';
            } else {
              detectionTag.innerHTML = '<span class="material-symbols-outlined text-[14px]">contactless</span><span class="font-label-sm text-label-sm tracking-wide uppercase font-bold">Siap Tag Sensor RFID</span>';
            }
          }
        });
      });

      // Manual Modal Controls
      const manualModal = document.getElementById('manualModal');
      const btnManual = document.getElementById('btnManualInput');
      const btnCloseModal = document.getElementById('btnCloseModal');
      const btnCancelInput = document.getElementById('btnCancelInput');
      const btnSubmitManual = document.getElementById('btnSubmitManual');
      const inputIsbn = document.getElementById('inputIsbn');

      function openModal() {
        if (manualModal) {
          manualModal.classList.remove('hidden');
          if (inputIsbn) inputIsbn.focus();
        }
      }

      function closeModal() {
        if (manualModal) {
          manualModal.classList.add('hidden');
        }
      }

      if (btnManual) btnManual.addEventListener('click', openModal);
      if (btnCloseModal) btnCloseModal.addEventListener('click', closeModal);
      if (btnCancelInput) btnCancelInput.addEventListener('click', closeModal);
      if (btnSubmitManual) {
        btnSubmitManual.addEventListener('click', () => {
          closeModal();
          const drawer = document.getElementById('scanPreviewDrawer');
          if (drawer) {
            drawer.classList.remove('translate-y-0');
            drawer.classList.add('scale-95');
            setTimeout(() => {
              drawer.classList.remove('scale-95');
              drawer.classList.add('translate-y-0');
            }, 180);
          }
        });
      }

      // Quick Back Action
      const btnBack = document.getElementById('btnBack');
      if (btnBack) {
        btnBack.addEventListener('click', () => {
          window.location.href = "{{ route('katalog') }}";
        });
      }
    })();
  </script>
</div></main><nav class="fixed bottom-0 w-full z-50 pb-safe bg-surface/85 backdrop-blur-xl shadow-[0_-2px_12px_rgba(0,0,0,0.05)] md:hidden" data-active-classes="bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]"><div class="flex items-center justify-around h-16 px-space-xs max-w-md mx-auto"><a aria-current="page" class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl transition-all bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]" data-path="katalog-buku" href="{{ route('katalog') }}"><span class="material-symbols-outlined text-[22px]">menu_book</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Katalog</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="sirkulasi-peminjaman" href="{{ route('sirkulasi') }}"><span class="material-symbols-outlined text-[22px]">sync_alt</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Sirkulasi</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="petugas-statistik" href="{{ route('statistik') }}"><span class="material-symbols-outlined text-[22px]">analytics</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Statistik</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="akun-profil" href="{{ route('akun') }}"><span class="material-symbols-outlined text-[22px]">account_circle</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Akun</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="akun-pengaturan" href="{{ route('akun.pengaturan') }}"><span class="material-symbols-outlined text-[22px]">settings</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Pengaturan</span></a></div></nav><script>
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
