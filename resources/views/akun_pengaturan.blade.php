<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
<title>Pengaturan Pustaka - BiblioZ</title>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Space+Grotesk:wght@700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<style>
@layer base {
  html, body { width: 100vw; margin: 0; padding: 0; }
  body { overscroll-behavior: none; }
  .pb-safe { padding-bottom: env(safe-area-inset-bottom, 0px); }
  .pt-safe { padding-top: env(safe-area-inset-top, 0px); }
}
::-webkit-scrollbar { display: none; }
</style>
<script src="https://cdn.tailwindcss.com"></script>
<style>
:root {
  --color-primary: 67 0 187;
  --color-surface-tint: 101 49 240;
  --color-surface: 253 248 255;
  --color-surface-container: 241 236 244;
  --color-surface-container-high: 235 230 238;
  --color-surface-container-highest: 229 225 232;
  --color-surface-container-lowest: 255 255 255;
  --color-on-surface: 28 27 32;
  --color-on-surface-variant: 72 68 86;
  --color-outline: 121 116 136;
  --color-outline-variant: 202 195 217;
  --color-primary-container: 91 33 230;
  --color-on-primary: 255 255 255;
  --color-secondary-fixed: 77 255 178;
  --color-secondary: 0 108 70;
}
html.dark {
  --color-surface: 24 24 32;
  --color-surface-container: 33 34 44;
  --color-surface-container-high: 40 41 53;
  --color-surface-container-highest: 50 51 65;
  --color-surface-container-lowest: 18 19 26;
  --color-on-surface: 242 243 248;
  --color-on-surface-variant: 168 172 188;
  --color-outline: 74 76 96;
  --color-outline-variant: 52 54 70;
  --color-primary: 139 92 246;
  --color-primary-container: 109 40 217;
  --color-on-primary: 255 255 255;
}
</style>
<script id="tailwind-config">tailwind.config = {
  "darkMode": "class",
  "theme": {
    "extend": {
      "colors": {
        "primary": "rgb(var(--color-primary) / <alpha-value>)",
        "surface": "rgb(var(--color-surface) / <alpha-value>)",
        "surface-container": "rgb(var(--color-surface-container) / <alpha-value>)",
        "surface-container-high": "rgb(var(--color-surface-container-high) / <alpha-value>)",
        "surface-container-highest": "rgb(var(--color-surface-container-highest) / <alpha-value>)",
        "surface-container-lowest": "rgb(var(--color-surface-container-lowest) / <alpha-value>)",
        "on-surface": "rgb(var(--color-on-surface) / <alpha-value>)",
        "on-surface-variant": "rgb(var(--color-on-surface-variant) / <alpha-value>)",
        "outline": "rgb(var(--color-outline) / <alpha-value>)",
        "outline-variant": "rgb(var(--color-outline-variant) / <alpha-value>)",
        "primary-container": "rgb(var(--color-primary-container) / <alpha-value>)",
        "on-primary": "rgb(var(--color-on-primary) / <alpha-value>)"
      },
      "fontFamily": {
        "sans": ["Plus Jakarta Sans", "sans-serif"],
        "display": ["Plus Jakarta Sans", "sans-serif"],
        "mono": ["Space Grotesk", "monospace"]
      }
    }
  }
};</script>
<script>
  if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) || localStorage.theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    document.documentElement.classList.add('dark')
  } else {
    document.documentElement.classList.remove('dark')
  }
</script>
</head>
<body class="bg-surface font-sans text-on-surface flex flex-col min-h-screen selection:bg-primary/20 selection:text-primary">
  
<!-- Desktop Sidebar -->
<aside class="hidden md:flex fixed left-0 top-0 h-screen w-64 bg-surface-container-lowest border-r border-surface-container-high flex-col z-50">
  <div class="h-16 flex items-center px-6 border-b border-surface-container-high gap-3">
    <img alt="BiblioZ Logo" class="h-8 w-auto object-contain flex-shrink-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAz2hoVQ9wOeungd-4ubStxt3uW2O2agaLbBXWfGvi50WoxUohQpS1yMGEOWVn3E1FfRDlQjUNIjc8U7kCnkRxZRKb_FmsWrxzUds9I4q7uzTH1WwhU3gP9Ixf3B82RgmnN0hKWT1MbmwIFykWAzRz7Rk0zLiqbGMIAh8vPkB5TkkU3q-_iAdQkfqN0k__yeu90O4L1BBAF2jgxjXZziX8XqXajMJjFWTDTlpqIgIs7jbXrN5InJK2I"/>
    <span class="text-base text-primary font-extrabold tracking-wider uppercase">BiblioZ</span>
  </div>
  <nav class="flex-1 p-4 flex flex-col gap-2 overflow-y-auto">
    <a href="/katalog" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all font-semibold text-sm">
      <span class="material-symbols-outlined text-[22px]">menu_book</span>
      Katalog
    </a>
    <a href="/sirkulasi" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all font-semibold text-sm">
      <span class="material-symbols-outlined text-[22px]">sync_alt</span>
      Sirkulasi
    </a>
    <a href="/akun" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all font-semibold text-sm">
      <span class="material-symbols-outlined text-[22px]">account_circle</span>
      Akun
    </a>
    <a href="{{ route('akun.pengaturan') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20] transition-all text-sm">
      <span class="material-symbols-outlined text-[22px]">settings</span>
      Pengaturan
    </a>
  </nav>
</aside>

<!-- Top Fixed Header -->
<header class="fixed top-0 w-full md:w-[calc(100%-16rem)] md:left-64 z-40 pt-safe bg-surface/80 backdrop-blur-xl border-b border-surface-container-high/60 shadow-[0_1px_8px_rgba(0,0,0,0.03)]">
  <div class="h-16 px-4 md:px-8 flex items-center justify-between gap-4">
    <div class="flex items-center gap-3 min-w-0">
      <img alt="BiblioZ App Logo" class="h-8 w-auto object-contain flex-shrink-0 md:hidden" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAz2hoVQ9wOeungd-4ubStxt3uW2O2agaLbBXWfGvi50WoxUohQpS1yMGEOWVn3E1FfRDlQjUNIjc8U7kCnkRxZRKb_FmsWrxzUds9I4q7uzTH1WwhU3gP9Ixf3B82RgmnN0hKWT1MbmwIFykWAzRz7Rk0zLiqbGMIAh8vPkB5TkkU3q-_iAdQkfqN0k__yeu90O4L1BBAF2jgxjXZziX8XqXajMJjFWTDTlpqIgIs7jbXrN5InJK2I"/>
      <div class="flex flex-col min-w-0">
        <span class="text-[10px] text-primary tracking-wider uppercase font-bold md:hidden">BiblioZ Library</span>
        <span class="text-lg font-extrabold text-on-surface truncate flex items-center gap-1.5">
          <span>Pengaturan Pustaka</span>
          <span class="text-sm">📖</span>
        </span>
      </div>
    </div>
    <div class="flex items-center gap-2 flex-shrink-0">
      <a href="/notifikasi" aria-label="Notifikasi" class="w-10 h-10 rounded-full flex items-center justify-center text-on-surface-variant hover:text-primary hover:bg-surface-container transition-all">
        <span class="material-symbols-outlined text-[22px]">notifications</span>
      </a>
      <a href="/akun" class="w-10 h-10 flex items-center justify-center hover:scale-105 transition-transform" title="Profil Akun">
        <img id="profile-avatar-small" alt="Profile" class="w-8 h-8 rounded-full object-cover border-2 border-primary/20 shadow-sm" src="{{ !empty($user->avatar) ? (str_starts_with($user->avatar, 'http') ? $user->avatar : '/' . $user->avatar) : 'https://ui-avatars.com/api/?name=' . urlencode($user->name ?? 'User') . '&background=random&color=fff' }}"/>
      </a>
    </div>
  </div>
</header>

<!-- Main Body -->
<main class="flex flex-col relative w-full md:w-[calc(100%-16rem)] md:ml-64 pt-20 pb-28 md:pb-12 min-h-screen overflow-hidden">
  
  <!-- Ambient Atmospheric Glowing Orbs -->
  <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
    <div class="absolute -top-[15%] -left-[10%] w-[55%] h-[55%] rounded-full bg-primary/15 blur-[130px] animate-pulse" style="animation-duration: 9s;"></div>
    <div class="absolute top-[35%] -right-[15%] w-[45%] h-[55%] rounded-full bg-amber-500/10 dark:bg-amber-400/5 blur-[120px] animate-pulse" style="animation-duration: 12s; animation-delay: 2s;"></div>
    <div class="absolute -bottom-[20%] left-[25%] w-[60%] h-[45%] rounded-full bg-emerald-500/10 dark:bg-emerald-400/5 blur-[120px]"></div>
  </div>

  <div class="flex flex-col w-full max-w-4xl mx-auto px-4 md:px-8 gap-6 relative z-10">
    
    <!-- Hero Header / Passport Banner -->
    <div class="relative overflow-hidden rounded-[28px] bg-gradient-to-br from-white/80 via-white/40 to-amber-50/30 dark:from-slate-900/80 dark:via-slate-900/40 dark:to-purple-950/20 backdrop-blur-2xl p-6 sm:p-8 border border-white/60 dark:border-white/10 shadow-[0_8px_30px_rgba(0,0,0,0.04)]">
      <div class="absolute -right-8 -bottom-8 opacity-5 dark:opacity-10 pointer-events-none">
        <span class="material-symbols-outlined text-[160px]">local_library</span>
      </div>
      
      <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 relative z-10">
        <div class="flex flex-col max-w-xl">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-extrabold uppercase tracking-wider w-fit mb-3">
            <span>📚 BiblioZ Smart Library</span>
            <span class="text-amber-500">★</span>
          </div>
          <h1 class="text-2xl sm:text-3xl font-extrabold text-on-surface tracking-tight leading-tight">
            Pengaturan &amp; Preferensi Pustaka
          </h1>
          <p class="text-sm text-on-surface-variant font-medium mt-1.5 leading-relaxed">
            Atur notifikasi pengingat peminjaman buku, kenyamanan visual ruang baca, dan keamanan kartu anggota digital Anda.
          </p>
        </div>

        <!-- Student Library Passport Chip -->
        <div class="flex items-center gap-3.5 p-3.5 rounded-2xl bg-white/70 dark:bg-slate-800/60 backdrop-blur-md border border-white/80 dark:border-white/10 shadow-sm shrink-0">
          <img class="w-12 h-12 rounded-xl object-cover border-2 border-primary/30 shadow-sm" alt="Avatar" src="{{ !empty($user->avatar) ? (str_starts_with($user->avatar, 'http') ? $user->avatar : '/' . $user->avatar) : 'https://ui-avatars.com/api/?name=' . urlencode($user->name ?? 'User') . '&background=random&color=fff' }}"/>
          <div class="flex flex-col">
            <span class="font-bold text-sm text-on-surface leading-tight">{{ $user->name ?? 'Siswa Pustaka' }}</span>
            <span class="text-xs text-on-surface-variant font-medium mt-0.5">NIS: {{ $user->nis ?? '242352424' }}</span>
            <span class="inline-flex items-center gap-1 text-[11px] font-bold text-emerald-600 dark:text-emerald-400 mt-1">
              <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Anggota Aktif Pustaka
            </span>
          </div>
        </div>
      </div>
    </div>

    <!-- SECTION 1: Sirkulasi & Notifikasi Buku -->
    <div class="rounded-[24px] p-6 bg-white/75 dark:bg-slate-900/60 backdrop-blur-xl border border-white/60 dark:border-white/10 shadow-sm flex flex-col space-y-4">
      <div class="flex items-center justify-between pb-2 border-b border-surface-container-high/60">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-2xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center font-bold">
            <span class="material-symbols-outlined text-[22px]">notifications_active</span>
          </div>
          <div>
            <h2 class="text-base font-bold text-on-surface">Sirkulasi &amp; Pengingat Buku</h2>
            <p class="text-xs text-on-surface-variant">Pemberitahuan otomatis agar terbebas dari denda dan keterlambatan.</p>
          </div>
        </div>
      </div>

      <div class="flex flex-col divide-y divide-surface-container-high/40">
        <!-- Toggle 1: Pengingat H-2 -->
        <div class="flex items-center justify-between py-3.5 gap-4">
          <div class="flex items-start gap-3.5">
            <div class="w-9 h-9 rounded-xl bg-indigo-50 dark:bg-indigo-950/40 text-indigo-600 dark:text-indigo-400 flex items-center justify-center shrink-0 mt-0.5">
              <span class="material-symbols-outlined text-[20px]">schedule</span>
            </div>
            <div class="flex flex-col">
              <span class="text-sm font-bold text-on-surface">Pengingat H-2 Tenggat Pengembalian</span>
              <span class="text-xs text-on-surface-variant mt-0.5">Kirim peringatan via Push Notifikasi &amp; WhatsApp 2 hari sebelum jatuh tempo.</span>
            </div>
          </div>
          <button type="button" role="switch" data-setting="reminder_due" aria-checked="true" class="setting-toggle relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent bg-primary transition-colors duration-200 ease-in-out focus:outline-none shadow-sm">
            <span class="setting-knob pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow-md ring-0 transition duration-200 ease-in-out translate-x-5"></span>
          </button>
        </div>

        <!-- Toggle 2: Auto-Hold Loker Smart -->
        <div class="flex items-center justify-between py-3.5 gap-4">
          <div class="flex items-start gap-3.5">
            <div class="w-9 h-9 rounded-xl bg-emerald-50 dark:bg-emerald-950/40 text-emerald-600 dark:text-emerald-400 flex items-center justify-center shrink-0 mt-0.5">
              <span class="material-symbols-outlined text-[20px]">bookmark_add</span>
            </div>
            <div class="flex flex-col">
              <span class="text-sm font-bold text-on-surface">Auto-Hold Buku Incaran</span>
              <span class="text-xs text-on-surface-variant mt-0.5">Otomatis reservasi antrean saat buku incaran telah tersedia di Loker Smart Perpus.</span>
            </div>
          </div>
          <button type="button" role="switch" data-setting="auto_hold" aria-checked="true" class="setting-toggle relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent bg-primary transition-colors duration-200 ease-in-out focus:outline-none shadow-sm">
            <span class="setting-knob pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow-md ring-0 transition duration-200 ease-in-out translate-x-5"></span>
          </button>
        </div>

        <!-- Toggle 3: Daily Reading Streak -->
        <div class="flex items-center justify-between py-3.5 gap-4">
          <div class="flex items-start gap-3.5">
            <div class="w-9 h-9 rounded-xl bg-rose-50 dark:bg-rose-950/40 text-rose-600 dark:text-rose-400 flex items-center justify-center shrink-0 mt-0.5">
              <span class="material-symbols-outlined text-[20px]">local_fire_department</span>
            </div>
            <div class="flex flex-col">
              <span class="text-sm font-bold text-on-surface">Pengingat Runtunan Membaca (Streak)</span>
              <span class="text-xs text-on-surface-variant mt-0.5">Notifikasi santai setiap pukul 19:30 WIB untuk mempertahankan rekor literasi harian.</span>
            </div>
          </div>
          <button type="button" role="switch" data-setting="reading_streak" aria-checked="true" class="setting-toggle relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent bg-primary transition-colors duration-200 ease-in-out focus:outline-none shadow-sm">
            <span class="setting-knob pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow-md ring-0 transition duration-200 ease-in-out translate-x-5"></span>
          </button>
        </div>

        <!-- Toggle 4: Rekomendasi FYP & Buletin -->
        <div class="flex items-center justify-between py-3.5 gap-4">
          <div class="flex items-start gap-3.5">
            <div class="w-9 h-9 rounded-xl bg-purple-50 dark:bg-purple-950/40 text-purple-600 dark:text-purple-400 flex items-center justify-center shrink-0 mt-0.5">
              <span class="material-symbols-outlined text-[20px]">auto_awesome</span>
            </div>
            <div class="flex flex-col">
              <span class="text-sm font-bold text-on-surface">Katalog Baru &amp; Kurasi FYP</span>
              <span class="text-xs text-on-surface-variant mt-0.5">Dapatkan buletin mingguan berisi buku rekomendasi AI yang cocok dengan minat baca.</span>
            </div>
          </div>
          <button type="button" role="switch" data-setting="new_books_bulletin" aria-checked="false" class="setting-toggle relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent bg-slate-300 dark:bg-slate-700 transition-colors duration-200 ease-in-out focus:outline-none shadow-sm">
            <span class="setting-knob pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow-md ring-0 transition duration-200 ease-in-out translate-x-0"></span>
          </button>
        </div>
      </div>
    </div>

    <!-- SECTION 2: Pengalaman Membaca & Suasana Perpus -->
    <div class="rounded-[24px] p-6 bg-white/75 dark:bg-slate-900/60 backdrop-blur-xl border border-white/60 dark:border-white/10 shadow-sm flex flex-col space-y-5">
      <div class="flex items-center justify-between pb-2 border-b border-surface-container-high/60">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-2xl bg-purple-500/10 text-purple-600 dark:text-purple-400 flex items-center justify-center font-bold">
            <span class="material-symbols-outlined text-[22px]">auto_stories</span>
          </div>
          <div>
            <h2 class="text-base font-bold text-on-surface">Suasana Baca &amp; Tampilan Visual</h2>
            <p class="text-xs text-on-surface-variant">Kustomisasi nuansa tema visual dan kenyamanan mata saat membaca.</p>
          </div>
        </div>
      </div>

      <!-- Theme Selector Visual Cards -->
      <div class="flex flex-col space-y-2">
        <span class="text-xs font-extrabold text-on-surface-variant uppercase tracking-wider ml-1">Pilihan Tema Visual</span>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
          <!-- Light Mode Card -->
          <button type="button" data-theme="light" class="theme-card relative p-4 rounded-2xl border-2 text-left transition-all flex flex-col justify-between gap-3 group cursor-pointer hover:border-primary/50">
            <div class="flex items-center justify-between">
              <span class="w-8 h-8 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center text-sm shadow-sm font-bold">☀️</span>
              <span class="theme-check material-symbols-outlined text-[20px] text-primary opacity-0 transition-opacity">check_circle</span>
            </div>
            <div>
              <span class="font-bold text-sm block text-on-surface">Mode Terang</span>
              <span class="text-[11px] text-on-surface-variant mt-0.5 block leading-tight">Nuansa kertas buku bersih &amp; cerah.</span>
            </div>
          </button>

          <!-- Dark Mode Card -->
          <button type="button" data-theme="dark" class="theme-card relative p-4 rounded-2xl border-2 text-left transition-all flex flex-col justify-between gap-3 group cursor-pointer hover:border-primary/50">
            <div class="flex items-center justify-between">
              <span class="w-8 h-8 rounded-xl bg-indigo-900/60 text-indigo-300 flex items-center justify-center text-sm shadow-sm font-bold">🌙</span>
              <span class="theme-check material-symbols-outlined text-[20px] text-primary opacity-0 transition-opacity">check_circle</span>
            </div>
            <div>
              <span class="font-bold text-sm block text-on-surface">Mode Gelap</span>
              <span class="text-[11px] text-on-surface-variant mt-0.5 block leading-tight">Kontras lembut nyaman di malam hari.</span>
            </div>
          </button>

          <!-- Auto Mode Card -->
          <button type="button" data-theme="auto" class="theme-card relative p-4 rounded-2xl border-2 text-left transition-all flex flex-col justify-between gap-3 group cursor-pointer hover:border-primary/50">
            <div class="flex items-center justify-between">
              <span class="w-8 h-8 rounded-xl bg-purple-100 dark:bg-purple-900/40 text-purple-700 dark:text-purple-300 flex items-center justify-center text-sm shadow-sm font-bold">💻</span>
              <span class="theme-check material-symbols-outlined text-[20px] text-primary opacity-0 transition-opacity">check_circle</span>
            </div>
            <div>
              <span class="font-bold text-sm block text-on-surface">Otomatis</span>
              <span class="text-[11px] text-on-surface-variant mt-0.5 block leading-tight">Mengikuti setelan sistem perangkat.</span>
            </div>
          </button>
        </div>
      </div>

      <!-- Extra Reading Ambiance Toggles -->
      <div class="flex flex-col divide-y divide-surface-container-high/40 pt-1">
        <!-- Quiet Library Mode -->
        <div class="flex items-center justify-between py-3.5 gap-4">
          <div class="flex items-start gap-3.5">
            <div class="w-9 h-9 rounded-xl bg-teal-50 dark:bg-teal-950/40 text-teal-600 dark:text-teal-400 flex items-center justify-center shrink-0 mt-0.5">
              <span class="material-symbols-outlined text-[20px]">volume_off</span>
            </div>
            <div class="flex flex-col">
              <span class="text-sm font-bold text-on-surface">Mode Hening Ruang Baca (Quiet Library)</span>
              <span class="text-xs text-on-surface-variant mt-0.5">Senyapkan suara notifikasi aplikasi otomatis saat jam membaca perpustakaan.</span>
            </div>
          </div>
          <button type="button" role="switch" data-setting="quiet_mode" aria-checked="true" class="setting-toggle relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent bg-primary transition-colors duration-200 ease-in-out focus:outline-none shadow-sm">
            <span class="setting-knob pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow-md ring-0 transition duration-200 ease-in-out translate-x-5"></span>
          </button>
        </div>

        <!-- Eye Comfort Warm Filter -->
        <div class="flex items-center justify-between py-3.5 gap-4">
          <div class="flex items-start gap-3.5">
            <div class="w-9 h-9 rounded-xl bg-amber-50 dark:bg-amber-950/40 text-amber-600 dark:text-amber-400 flex items-center justify-center shrink-0 mt-0.5">
              <span class="material-symbols-outlined text-[20px]">visibility</span>
            </div>
            <div class="flex flex-col">
              <span class="text-sm font-bold text-on-surface">Filter Kertas Hangat (Eye Comfort)</span>
              <span class="text-xs text-on-surface-variant mt-0.5">Gunakan palet warna lembut ramah mata saat membuka katalog dan reader e-book.</span>
            </div>
          </div>
          <button type="button" role="switch" data-setting="warm_reader" aria-checked="false" class="setting-toggle relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent bg-slate-300 dark:bg-slate-700 transition-colors duration-200 ease-in-out focus:outline-none shadow-sm">
            <span class="setting-knob pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow-md ring-0 transition duration-200 ease-in-out translate-x-0"></span>
          </button>
        </div>
      </div>
    </div>

    <!-- SECTION 3: Keamanan & Kartu Anggota Digital -->
    <div class="rounded-[24px] p-6 bg-white/75 dark:bg-slate-900/60 backdrop-blur-xl border border-white/60 dark:border-white/10 shadow-sm flex flex-col space-y-4">
      <div class="flex items-center justify-between pb-2 border-b border-surface-container-high/60">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-2xl bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 flex items-center justify-center font-bold">
            <span class="material-symbols-outlined text-[22px]">verified_user</span>
          </div>
          <div>
            <h2 class="text-base font-bold text-on-surface">Keamanan &amp; Kartu Anggota</h2>
            <p class="text-xs text-on-surface-variant">Proteksi akun peminjaman dan integrasi kartu anggota perpustakaan.</p>
          </div>
        </div>
      </div>

      <div class="flex flex-col divide-y divide-surface-container-high/40">
        <!-- Ubah PIN -->
        <div class="flex items-center justify-between py-3.5 gap-4">
          <div class="flex items-start gap-3.5">
            <div class="w-9 h-9 rounded-xl bg-blue-50 dark:bg-blue-950/40 text-blue-600 dark:text-blue-400 flex items-center justify-center shrink-0 mt-0.5">
              <span class="material-symbols-outlined text-[20px]">lock_reset</span>
            </div>
            <div class="flex flex-col">
              <span class="text-sm font-bold text-on-surface">PIN Masuk &amp; Verifikasi Sirkulasi</span>
              <span class="text-xs text-on-surface-variant mt-0.5">PIN 6-digit untuk otorisasi cepat saat meminjam buku di mesin pemindai mandiri.</span>
            </div>
          </div>
          <button id="btnOpenPinModal" type="button" class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-primary/10 hover:bg-primary/20 text-primary font-bold text-xs transition-colors shrink-0">
            <span>Ubah PIN</span>
            <span class="material-symbols-outlined text-[16px]">chevron_right</span>
          </button>
        </div>

        <!-- Biometrik & Face Unlock -->
        <div class="flex items-center justify-between py-3.5 gap-4">
          <div class="flex items-start gap-3.5">
            <div class="w-9 h-9 rounded-xl bg-cyan-50 dark:bg-cyan-950/40 text-cyan-600 dark:text-cyan-400 flex items-center justify-center shrink-0 mt-0.5">
              <span class="material-symbols-outlined text-[20px]">fingerprint</span>
            </div>
            <div class="flex flex-col">
              <span class="text-sm font-bold text-on-surface">Biometrik &amp; Face Unlock</span>
              <span class="text-xs text-on-surface-variant mt-0.5">Buka akses peminjaman instan menggunakan sensor biometrik perangkat Anda.</span>
            </div>
          </div>
          <button type="button" role="switch" data-setting="biometric_auth" aria-checked="true" class="setting-toggle relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent bg-primary transition-colors duration-200 ease-in-out focus:outline-none shadow-sm">
            <span class="setting-knob pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow-md ring-0 transition duration-200 ease-in-out translate-x-5"></span>
          </button>
        </div>

        <!-- Sinkronisasi Data Sekolah -->
        <div class="flex items-center justify-between py-3.5 gap-4">
          <div class="flex items-start gap-3.5">
            <div class="w-9 h-9 rounded-xl bg-purple-50 dark:bg-purple-950/40 text-purple-600 dark:text-purple-400 flex items-center justify-center shrink-0 mt-0.5">
              <span class="material-symbols-outlined text-[20px]">account_balance</span>
            </div>
            <div class="flex flex-col">
              <span class="text-sm font-bold text-on-surface">Sinkronisasi Portal Sekolah</span>
              <span class="text-xs text-on-surface-variant mt-0.5">Data perpustakaan terhubung langsung dengan sistem absensi &amp; Dapodik {{ $user->school_name ?? 'SMKN 1 CIOMAS' }}.</span>
            </div>
          </div>
          <span class="px-3 py-1 rounded-full bg-emerald-100 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300 font-bold text-xs flex items-center gap-1.5 shrink-0 border border-emerald-200 dark:border-emerald-800/50">
            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
            Terhubung
          </span>
        </div>
      </div>
    </div>

    <!-- SECTION 4: Zona Keluar & Info Perpustakaan -->
    <div class="flex flex-col space-y-4 pt-2">
      <button id="btnLogout" type="button" class="w-full py-4 rounded-2xl bg-rose-50 hover:bg-rose-100/80 dark:bg-rose-950/20 dark:hover:bg-rose-950/40 text-rose-600 dark:text-rose-400 font-bold text-sm flex items-center justify-center gap-2 border border-rose-200/80 dark:border-rose-900/30 shadow-sm active:scale-[0.99] transition-all">
        <span class="material-symbols-outlined text-[20px]">logout</span>
        <span>Keluar dari Akun (Logout)</span>
      </button>

      <!-- Library Info Footer -->
      <div class="rounded-2xl p-5 bg-surface-container/40 border border-surface-container-high/40 text-center flex flex-col items-center gap-1.5">
        <div class="flex items-center gap-2 text-xs font-extrabold uppercase tracking-wider text-on-surface-variant">
          <span>🏛️ BiblioZ Smart Library v2.4</span>
          <span>•</span>
          <span>{{ $user->school_name ?? 'SMKN 1 CIOMAS' }}</span>
        </div>
        <p class="text-xs text-on-surface-variant/80">
          Jam Buka Pustaka: Senin – Jumat (07:30 – 16:00 WIB) • Layanan E-Book 24 Jam
        </p>
        <p class="text-[11px] text-outline">
          Terhubung ke Sistem Informasi Literasi Nasional &amp; Kemendikdasmen
        </p>
      </div>
    </div>

  </div>
</main>

<!-- Bottom Navigation for Mobile -->
<nav class="fixed bottom-0 w-full z-50 pb-safe bg-surface/85 backdrop-blur-xl border-t border-surface-container-high/60 shadow-[0_-2px_12px_rgba(0,0,0,0.05)] md:hidden">
  <div class="flex items-center justify-around h-16 px-2 max-w-md mx-auto">
    <a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-2 py-1 rounded-xl text-on-surface-variant hover:text-primary transition-all" href="/katalog">
      <span class="material-symbols-outlined text-[22px]">menu_book</span>
      <span class="text-[10px] font-bold tracking-tight mt-0.5">Katalog</span>
    </a>
    <a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-2 py-1 rounded-xl text-on-surface-variant hover:text-primary transition-all" href="/sirkulasi">
      <span class="material-symbols-outlined text-[22px]">sync_alt</span>
      <span class="text-[10px] font-bold tracking-tight mt-0.5">Sirkulasi</span>
    </a>
    <a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-2 py-1 rounded-xl text-on-surface-variant hover:text-primary transition-all" href="/akun">
      <span class="material-symbols-outlined text-[22px]">account_circle</span>
      <span class="text-[10px] font-bold tracking-tight mt-0.5">Akun</span>
    </a>
    <a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-2 py-1 rounded-xl bg-primary-container text-on-primary font-bold shadow-[2px_2px_0px_#1c1b20]" href="{{ route('akun.pengaturan') }}">
      <span class="material-symbols-outlined text-[22px]">settings</span>
      <span class="text-[10px] font-bold tracking-tight mt-0.5">Pengaturan</span>
    </a>
  </div>
</nav>

<!-- Modal Ubah PIN Masuk -->
<div id="pinModal" class="fixed inset-0 z-[100] flex items-center justify-center hidden opacity-0 transition-opacity duration-300">
  <div id="pinBackdrop" class="absolute inset-0 bg-black/50 backdrop-blur-sm cursor-pointer"></div>
  <div class="relative bg-surface-container-lowest rounded-[28px] w-[90%] max-w-sm p-6 shadow-[0_16px_40px_rgba(0,0,0,0.18)] border border-surface-container-high transform scale-95 transition-transform duration-300">
    <div class="flex items-center justify-between mb-4">
      <div class="flex items-center gap-2.5">
        <span class="w-9 h-9 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
          <span class="material-symbols-outlined text-[20px]">lock_reset</span>
        </span>
        <h3 class="text-base font-extrabold text-on-surface">Ubah PIN Pustaka</h3>
      </div>
      <button id="btnClosePinModal" class="w-8 h-8 rounded-full hover:bg-surface-container flex items-center justify-center text-on-surface-variant">
        <span class="material-symbols-outlined text-[18px]">close</span>
      </button>
    </div>
    
    <div class="flex flex-col gap-3.5">
      <p class="text-xs text-on-surface-variant leading-relaxed">
        Masukkan 6 digit angka untuk keamanan transaksi peminjaman di kiosk scanner.
      </p>
      <div class="flex flex-col gap-1.5">
        <label class="text-xs font-bold text-on-surface">PIN Baru (6 Digit Angka)</label>
        <input id="inputNewPin" type="password" maxlength="6" placeholder="Contoh: 123456" class="w-full bg-surface-container border border-surface-container-high rounded-xl px-4 py-2.5 text-sm font-bold tracking-widest text-on-surface focus:outline-none focus:border-primary transition-colors text-center"/>
      </div>
      <div class="flex flex-col gap-1.5">
        <label class="text-xs font-bold text-on-surface">Konfirmasi PIN Baru</label>
        <input id="inputConfirmPin" type="password" maxlength="6" placeholder="Ulangi 6 digit PIN" class="w-full bg-surface-container border border-surface-container-high rounded-xl px-4 py-2.5 text-sm font-bold tracking-widest text-on-surface focus:outline-none focus:border-primary transition-colors text-center"/>
      </div>
      <div class="flex items-center gap-2 pt-2">
        <button id="btnCancelPin" type="button" class="flex-1 py-2.5 rounded-xl bg-surface-container hover:bg-surface-container-high text-on-surface text-xs font-bold transition-colors">Batal</button>
        <button id="btnSavePin" type="button" class="flex-1 py-2.5 rounded-xl bg-primary text-white text-xs font-bold shadow-md shadow-primary/30 transition-transform active:scale-95">Simpan PIN</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Logout Confirmation -->
<div id="logoutModal" class="fixed inset-0 z-[100] flex items-center justify-center hidden opacity-0 transition-opacity duration-300">
  <div id="logoutBackdrop" class="absolute inset-0 bg-black/50 backdrop-blur-sm cursor-pointer"></div>
  <div class="relative bg-surface-container-lowest rounded-[32px] w-[90%] max-w-sm p-6 shadow-[0_16px_40px_rgba(0,0,0,0.18)] border border-surface-container-high transform scale-95 transition-transform duration-300">
    <div class="flex flex-col items-center text-center space-y-4">
      <div class="w-16 h-16 rounded-full bg-rose-50 dark:bg-rose-950/40 text-rose-600 flex items-center justify-center border border-rose-200 dark:border-rose-900/50 shadow-inner">
        <span class="material-symbols-outlined text-[32px]">logout</span>
      </div>
      <div>
        <h3 class="text-lg font-extrabold text-on-surface mb-1">Yakin Ingin Keluar? 🥺</h3>
        <p class="text-xs text-on-surface-variant leading-relaxed">Sesi perpustakaan Anda akan berakhir. Anda perlu login kembali untuk meminjam buku atau membaca e-book.</p>
      </div>
      <div class="flex items-center gap-3 w-full pt-1">
        <button id="btnCancelLogout" class="flex-1 py-2.5 rounded-2xl bg-surface-container hover:bg-surface-container-high text-on-surface font-bold text-xs transition-colors" type="button">Batal</button>
        <button id="btnConfirmLogout" class="flex-1 py-2.5 rounded-2xl bg-rose-600 hover:bg-rose-700 text-white font-bold text-xs transition-colors shadow-md shadow-rose-600/30" type="button">Ya, Keluar</button>
      </div>
    </div>
  </div>
</div>

<!-- Floating Toast Notification -->
<div id="toastNotification" class="fixed bottom-20 md:bottom-8 right-6 z-[90] flex items-center gap-2.5 px-4 py-2.5 rounded-2xl bg-slate-900/90 text-white dark:bg-white/95 dark:text-slate-900 backdrop-blur-md shadow-xl text-xs font-bold transform translate-y-12 opacity-0 pointer-events-none transition-all duration-300">
  <span class="material-symbols-outlined text-[18px] text-emerald-400 dark:text-emerald-600">check_circle</span>
  <span id="toastMessage">Pengaturan berhasil disimpan ✨</span>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const token = localStorage.getItem('auth_token');

  // 1. Toast Notification Helper
  let toastTimer = null;
  const showToast = (message) => {
    const toast = document.getElementById('toastNotification');
    const toastMsg = document.getElementById('toastMessage');
    if (!toast) return;
    if (toastMsg && message) toastMsg.textContent = message;
    
    toast.classList.remove('translate-y-12', 'opacity-0', 'pointer-events-none');
    toast.classList.add('translate-y-0', 'opacity-100');

    clearTimeout(toastTimer);
    toastTimer = setTimeout(() => {
      toast.classList.add('translate-y-12', 'opacity-0', 'pointer-events-none');
      toast.classList.remove('translate-y-0', 'opacity-100');
    }, 2400);
  };

  // 2. Interactive Setting Toggles
  const toggles = document.querySelectorAll('.setting-toggle');
  toggles.forEach(btn => {
    const settingKey = btn.dataset.setting;
    const knob = btn.querySelector('.setting-knob');
    if (!settingKey || !knob) return;

    // Load initial state
    let isActive = localStorage.getItem(`setting_${settingKey}`);
    if (isActive === null) {
      isActive = btn.getAttribute('aria-checked') === 'true';
    } else {
      isActive = isActive === 'true';
    }

    const updateToggleUI = (active) => {
      if (active) {
        btn.classList.remove('bg-slate-300', 'dark:bg-slate-700');
        btn.classList.add('bg-primary');
        knob.classList.remove('translate-x-0');
        knob.classList.add('translate-x-5');
        btn.setAttribute('aria-checked', 'true');
      } else {
        btn.classList.remove('bg-primary');
        btn.classList.add('bg-slate-300', 'dark:bg-slate-700');
        knob.classList.remove('translate-x-5');
        knob.classList.add('translate-x-0');
        btn.setAttribute('aria-checked', 'false');
      }
    };

    updateToggleUI(isActive);

    btn.addEventListener('click', () => {
      isActive = !isActive;
      localStorage.setItem(`setting_${settingKey}`, isActive ? 'true' : 'false');
      updateToggleUI(isActive);
      showToast(isActive ? 'Fitur diaktifkan ✨' : 'Fitur dinonaktifkan');
    });
  });

  // 3. Theme Selector Logic
  const themeCards = document.querySelectorAll('.theme-card');

  const updateThemeCardsUI = (currentTheme) => {
    themeCards.forEach(card => {
      const cardTheme = card.dataset.theme;
      const check = card.querySelector('.theme-check');
      if (cardTheme === currentTheme) {
        card.classList.add('border-primary', 'bg-primary/5', 'shadow-sm');
        card.classList.remove('border-surface-container-high', 'bg-surface-container/30');
        if (check) check.classList.remove('opacity-0');
      } else {
        card.classList.remove('border-primary', 'bg-primary/5', 'shadow-sm');
        card.classList.add('border-surface-container-high', 'bg-surface-container/30');
        if (check) check.classList.add('opacity-0');
      }
    });
  };

  const applyTheme = (theme) => {
    if (theme === 'dark') {
      document.documentElement.classList.add('dark');
      localStorage.setItem('theme', 'dark');
    } else if (theme === 'light') {
      document.documentElement.classList.remove('dark');
      localStorage.setItem('theme', 'light');
    } else {
      localStorage.setItem('theme', 'auto');
      if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.documentElement.classList.add('dark');
      } else {
        document.documentElement.classList.remove('dark');
      }
    }
    updateThemeCardsUI(theme);
  };

  const savedTheme = localStorage.getItem('theme') || 'auto';
  applyTheme(savedTheme);

  themeCards.forEach(card => {
    card.addEventListener('click', () => {
      applyTheme(card.dataset.theme);
      showToast('Tema aplikasi diperbarui ✨');
    });
  });

  // 4. Modal PIN Logic
  const pinModal = document.getElementById('pinModal');
  const btnOpenPinModal = document.getElementById('btnOpenPinModal');
  const btnClosePinModal = document.getElementById('btnClosePinModal');
  const btnCancelPin = document.getElementById('btnCancelPin');
  const pinBackdrop = document.getElementById('pinBackdrop');
  const btnSavePin = document.getElementById('btnSavePin');
  const inputNewPin = document.getElementById('inputNewPin');
  const inputConfirmPin = document.getElementById('inputConfirmPin');

  const togglePinModal = (show) => {
    if (!pinModal) return;
    if (show) {
      pinModal.classList.remove('hidden');
      requestAnimationFrame(() => {
        pinModal.classList.remove('opacity-0');
        pinModal.querySelector('.relative').classList.remove('scale-95');
        pinModal.querySelector('.relative').classList.add('scale-100');
      });
    } else {
      pinModal.classList.add('opacity-0');
      pinModal.querySelector('.relative').classList.remove('scale-100');
      pinModal.querySelector('.relative').classList.add('scale-95');
      setTimeout(() => { pinModal.classList.add('hidden'); }, 300);
    }
  };

  if (btnOpenPinModal) btnOpenPinModal.addEventListener('click', () => togglePinModal(true));
  if (btnClosePinModal) btnClosePinModal.addEventListener('click', () => togglePinModal(false));
  if (btnCancelPin) btnCancelPin.addEventListener('click', () => togglePinModal(false));
  if (pinBackdrop) pinBackdrop.addEventListener('click', () => togglePinModal(false));

  if (btnSavePin) {
    btnSavePin.addEventListener('click', () => {
      const pin1 = inputNewPin.value.trim();
      const pin2 = inputConfirmPin.value.trim();

      if (pin1.length !== 6 || !/^\d+$/.test(pin1)) {
        alert('PIN harus terdiri dari 6 digit angka!');
        return;
      }
      if (pin1 !== pin2) {
        alert('Konfirmasi PIN tidak cocok!');
        return;
      }

      localStorage.setItem('user_library_pin', pin1);
      togglePinModal(false);
      showToast('PIN Pustaka berhasil diubah ✨');
      inputNewPin.value = '';
      inputConfirmPin.value = '';
    });
  }

  // 5. Logout Confirmation Modal
  const btnLogout = document.getElementById('btnLogout');
  const logoutModal = document.getElementById('logoutModal');
  const logoutBackdrop = document.getElementById('logoutBackdrop');
  const btnCancelLogout = document.getElementById('btnCancelLogout');
  const btnConfirmLogout = document.getElementById('btnConfirmLogout');

  const toggleLogoutModal = (show) => {
    if (!logoutModal) return;
    if (show) {
      logoutModal.classList.remove('hidden');
      requestAnimationFrame(() => {
        logoutModal.classList.remove('opacity-0');
        logoutModal.querySelector('.relative').classList.remove('scale-95');
        logoutModal.querySelector('.relative').classList.add('scale-100');
      });
    } else {
      logoutModal.classList.add('opacity-0');
      logoutModal.querySelector('.relative').classList.remove('scale-100');
      logoutModal.querySelector('.relative').classList.add('scale-95');
      setTimeout(() => { logoutModal.classList.add('hidden'); }, 300);
    }
  };

  if (btnLogout) btnLogout.addEventListener('click', () => toggleLogoutModal(true));
  if (btnCancelLogout) btnCancelLogout.addEventListener('click', () => toggleLogoutModal(false));
  if (logoutBackdrop) logoutBackdrop.addEventListener('click', () => toggleLogoutModal(false));

  if (btnConfirmLogout) {
    btnConfirmLogout.addEventListener('click', async () => {
      btnConfirmLogout.textContent = 'Keluar...';
      try {
        await fetch('/api/logout', {
          method: 'POST',
          headers: { 'Authorization': 'Bearer ' + token }
        });
      } catch (e) {}
      localStorage.removeItem('auth_token');
      window.location.href = '/login';
    });
  }
});
</script>
</body>
</html>