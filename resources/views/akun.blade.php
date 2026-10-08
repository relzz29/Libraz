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
    <a href="/katalog" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">
      <span class="material-symbols-outlined text-[22px]">menu_book</span>
      Katalog
    </a>
    <a href="/sirkulasi" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">
      <span class="material-symbols-outlined text-[22px]">sync_alt</span>
      Sirkulasi
    </a>
    
    <a href="/akun" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20] transition-all">
      <span class="material-symbols-outlined text-[22px]">account_circle</span>
      Akun
    </a>
      <a href="{{ route('akun.pengaturan') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">
      <span class="material-symbols-outlined text-[22px]">settings</span>
      Pengaturan
    </a>
  </nav>
</aside>
  
  <header class="fixed top-0 w-full md:w-[calc(100%-16rem)] md:left-64 z-40 pt-safe bg-surface/80 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]"><div class="h-16 px-margin flex items-center justify-between gap-space-sm"><div class="flex items-center gap-space-sm min-w-0"><img alt="BiblioZ App Logo" class="h-8 w-auto object-contain flex-shrink-0 md:hidden" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAz2hoVQ9wOeungd-4ubStxt3uW2O2agaLbBXWfGvi50WoxUohQpS1yMGEOWVn3E1FfRDlQjUNIjc8U7kCnkRxZRKb_FmsWrxzUds9I4q7uzTH1WwhU3gP9Ixf3B82RgmnN0hKWT1MbmwIFykWAzRz7Rk0zLiqbGMIAh8vPkB5TkkU3q-_iAdQkfqN0k__yeu90O4L1BBAF2jgxjXZziX8XqXajMJjFWTDTlpqIgIs7jbXrN5InJK2I"/><div class="flex flex-col min-w-0"><span class="font-label-sm text-label-sm text-primary tracking-wider uppercase truncate md:hidden">BiblioZ</span><span class="font-title-md text-title-md text-on-surface truncate">Akun</span></div></div><div class="flex items-center gap-space-xs flex-shrink-0"><a href="{{ route('notifikasi') }}" aria-label="Notifikasi" class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors focus:outline-none"><span class="material-symbols-outlined text-[24px]">notifications</span></a><a href="/edit-profil" class="w-11 h-11 flex items-center justify-center hover:scale-105 transition-transform cursor-pointer" title="Edit Profil"><img id="profile-avatar-small" alt="Profile" class="w-8 h-8 rounded-full object-cover" src="https://ui-avatars.com/api/?name=User&amp;background=random&amp;color=fff"/></a></div></div></header><main class="flex flex-col relative w-full md:w-[calc(100%-16rem)] md:ml-64 pt-16 pb-24 md:pb-8 bg-surface min-h-screen overflow-hidden">
  
  <!-- Animated Background Orbs -->
  <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
    <div class="absolute -top-[20%] -left-[10%] w-[50%] h-[50%] rounded-full bg-primary/20 blur-[120px] animate-pulse" style="animation-duration: 8s;"></div>
    <div class="absolute top-[40%] -right-[10%] w-[40%] h-[60%] rounded-full bg-secondary-fixed/20 blur-[100px] animate-pulse" style="animation-duration: 12s; animation-delay: 2s;"></div>
    <div class="absolute -bottom-[20%] left-[20%] w-[60%] h-[40%] rounded-full bg-tertiary-container/10 blur-[100px] animate-pulse" style="animation-duration: 10s; animation-delay: 4s;"></div>
  </div>

  <div class="flex flex-col w-full max-w-7xl mx-auto px-4 md:px-8 py-8 gap-8 relative z-10">
    
    <!-- HEADER HERO SECTION (Glassmorphism & Glow) -->
    <section class="flex flex-col md:flex-row items-center bg-white/40 dark:bg-black/40 backdrop-blur-2xl p-8 rounded-[2rem] shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white/50 dark:border-white/10 gap-8 relative overflow-hidden group hover:shadow-[0_8px_40px_rgba(100,50,255,0.1)] transition-shadow duration-500">
      <div class="absolute inset-0 bg-gradient-to-r from-primary/5 to-transparent pointer-events-none"></div>
      
      <!-- Profile Info -->
      <div class="flex items-center gap-6 z-10 w-full md:w-auto">
        <div class="relative flex-shrink-0 group-hover:scale-105 transition-transform duration-500">
          <div class="absolute inset-0 rounded-full bg-gradient-to-tr from-primary to-secondary blur-md opacity-60 group-hover:opacity-100 transition-opacity duration-500"></div>
          <img id="profile-avatar-large" class="relative w-24 h-24 rounded-full object-cover shadow-xl border-4 border-surface" alt="Avatar" src="https://ui-avatars.com/api/?name=User&background=random&color=fff"/>
          <div class="absolute -bottom-2 -right-2 w-9 h-9 rounded-full bg-gradient-to-br from-secondary to-[#00d084] flex items-center justify-center text-white shadow-lg border-2 border-surface">
            <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">verified</span>
          </div>
        </div>
        <div class="flex flex-col min-w-0">
          <h2 id="profile-name" class="font-display-lg text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-on-surface to-primary truncate tracking-tight">{{ $user->name ?? 'Nama Siswa' }}</h2>
          <p id="profile-nis" class="font-body-lg text-on-surface-variant mt-1.5">NIS: {{ $user->nis ?? '1234567890' }} • <span class="font-bold text-on-surface">{{ $user->role ?? 'Siswa' }}</span></p>
          <div class="mt-3 flex flex-wrap justify-center md:justify-start items-center gap-3">
            <span id="profile-school-name" class="text-xs font-black text-primary tracking-widest uppercase bg-primary/10 px-4 py-1.5 rounded-full ring-1 ring-primary/20 shadow-sm">{{ $user->school_name ?? 'SMAN 1 Garudapura' }}</span>
            <a href="{{ route('edit.profil') }}" class="flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-white/20 hover:bg-white/40 dark:bg-black/20 dark:hover:bg-black/40 text-on-surface shadow-sm border border-white/30 dark:border-white/10 transition-colors backdrop-blur-sm group/edit">
              <span class="material-symbols-outlined text-[16px] group-hover/edit:text-primary transition-colors">edit</span>
              <span class="text-xs font-bold group-hover/edit:text-primary transition-colors">Edit Profil</span>
            </a>
          </div>
          
          <div class="mt-4 flex flex-wrap justify-center md:justify-start items-start gap-4 w-full">
            <div class="flex flex-col items-center md:items-start gap-3 w-full md:w-auto shrink-0">
            @if(!empty($user->email))
            <div class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-indigo-50/80 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 shadow-sm border border-indigo-200/50 dark:border-indigo-800/50 w-max backdrop-blur-md cursor-default">
                <span class="material-symbols-outlined text-[16px]">mail</span>
                <span class="font-bold text-xs tracking-wide">{{ $user->email }}</span>
            </div>
            @endif
            
            @if(!empty($user->bio))
            <div class="relative overflow-hidden bg-gradient-to-br from-white/60 to-white/20 dark:from-slate-800/50 dark:to-slate-900/20 backdrop-blur-lg p-3.5 md:p-4 rounded-[16px] border border-white/60 dark:border-white/10 shadow-sm max-w-sm md:max-w-md group">
                <div class="absolute -top-3 -left-2 text-indigo-200/40 dark:text-indigo-900/30 transform -rotate-12 pointer-events-none">
                    <span class="material-symbols-outlined text-[60px]" style="font-variation-settings: 'FILL' 1;">format_quote</span>
                </div>
                <p class="relative z-10 font-body-md text-sm text-slate-700 dark:text-slate-300 font-medium italic leading-relaxed pl-3 border-l-2 border-indigo-300/40">
                    {{ $user->bio }}
                </p>
                <div class="absolute -bottom-8 -right-8 w-24 h-24 bg-purple-300/10 dark:bg-purple-900/20 rounded-full blur-xl pointer-events-none"></div>
            </div>
            @else
            <div class="relative overflow-hidden bg-white/30 dark:bg-slate-800/30 backdrop-blur-md p-3.5 rounded-[16px] border border-white/40 dark:border-white/5 shadow-sm max-w-sm opacity-60 border-dashed border-2">
                <div class="flex items-center gap-2 text-slate-500">
                    <span class="material-symbols-outlined text-[18px]">edit_note</span>
                    <p class="font-body-sm text-xs italic">Belum ada bio. Tambahkan di Edit Profil.</p>
                </div>
            </div>
            @endif
            </div>
            
            <!-- Minat Baca & FYP Widget -->
            <div class="relative overflow-hidden bg-gradient-to-br from-white/50 to-white/10 dark:from-slate-800/40 dark:to-slate-900/10 backdrop-blur-md p-3.5 md:p-4 rounded-[16px] border border-white/60 dark:border-white/10 shadow-sm w-full md:w-56 lg:w-64 flex flex-col justify-between group transition-all hover:bg-white/60 dark:hover:bg-slate-800/60">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-[10px] font-black text-slate-500 dark:text-slate-400 uppercase tracking-widest">Minat Baca & FYP</span>
                    <span class="material-symbols-outlined text-[16px] text-primary animate-pulse">auto_awesome</span>
                </div>
                
                <div class="flex flex-wrap gap-1.5 mb-3">
                    <span class="px-2 py-1 bg-blue-100/80 dark:bg-blue-900/40 text-blue-700 dark:text-blue-300 rounded-lg text-[10px] font-bold border border-blue-200/50">Sci-Fi</span>
                    <span class="px-2 py-1 bg-emerald-100/80 dark:bg-emerald-900/40 text-emerald-700 dark:text-emerald-300 rounded-lg text-[10px] font-bold border border-emerald-200/50">Misteri</span>
                    <span class="px-2 py-1 bg-rose-100/80 dark:bg-rose-900/40 text-rose-700 dark:text-rose-300 rounded-lg text-[10px] font-bold border border-rose-200/50">Sejarah</span>
                    <span class="px-2 py-1 bg-amber-100/80 dark:bg-amber-900/40 text-amber-700 dark:text-amber-300 rounded-lg text-[10px] font-bold border border-amber-200/50">Psikologi</span>
                    <span class="px-2 py-1 bg-purple-100/80 dark:bg-purple-900/40 text-purple-700 dark:text-purple-300 rounded-lg text-[10px] font-bold border border-purple-200/50 cursor-pointer hover:bg-purple-200 transition-colors">+ Edit</span>
                </div>
                
                <div class="flex items-center gap-2 mt-auto pt-3 border-t border-slate-200/50 dark:border-white/10">
                    <div class="w-8 h-4 bg-primary/20 rounded-full relative shadow-inner cursor-pointer hover:bg-primary/30 transition-colors">
                        <div class="absolute right-0.5 top-0.5 w-3 h-3 bg-primary rounded-full shadow-sm"></div>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-[10px] font-bold text-slate-700 dark:text-slate-300 leading-tight">Algoritma FYP Aktif</span>
                        <span class="text-[9px] text-slate-500 font-medium">Buku disesuaikan minat</span>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>

      <!-- XP & Gamification Widget -->
      @php
          $nextLevelXp = $user->level * 100;
          $xpPercent = min(100, ($user->xp / $nextLevelXp) * 100);
          $titles = [1 => 'Pembaca Baru', 2 => 'Pembaca Aktif', 3 => 'Penggemar Buku', 4 => 'Kutu Buku', 5 => 'Master Literasi'];
          $levelTitle = $titles[$user->level] ?? 'Legendary Reader';
          $todayStr = now()->format('Y-m-d');
          $yesterdayStr = now()->subDay()->format('Y-m-d');
          $isStreakActive = $user->current_streak > 0 && in_array($user->last_read_date, [$todayStr, $yesterdayStr]);
          $displayStreak = $isStreakActive ? $user->current_streak : 0;
      @endphp
      <div class="flex-1 w-full md:max-w-[420px] ml-auto bg-white/50 dark:bg-black/50 backdrop-blur-md p-6 rounded-3xl z-10 flex flex-col gap-4 border border-white/60 dark:border-white/10 shadow-sm relative overflow-hidden">
        <div class="absolute -right-10 -bottom-10 opacity-5 pointer-events-none">
          <span class="material-symbols-outlined text-[120px]">stars</span>
        </div>
        <div class="flex items-center justify-between">
          <div class="flex flex-col">
            <span class="text-xs text-primary font-black uppercase tracking-[0.2em] mb-1">Peringkat Literasi</span>
            <span class="font-extrabold text-xl text-on-surface flex items-center gap-2" id="profile-level-title">
              <span class="bg-surface-container-high w-8 h-8 rounded-lg flex items-center justify-center text-sm shadow-inner">L{{ $user->level }}</span>
              {{ $levelTitle }}
            </span>
          </div>
          <span class="text-xs font-black px-4 py-2 rounded-xl bg-gradient-to-r from-primary to-primary-container text-white shadow-lg shadow-primary/30" id="profile-top-percent">
            Top {{ max(1, 100 - ($user->level * 10)) }}%
          </span>
        </div>
        <div class="flex flex-col gap-2 mt-2">
          <div class="flex items-center justify-between text-xs font-bold text-on-surface-variant">
            <span id="profile-xp-text" class="text-on-surface">{{ $user->xp }} / {{ $nextLevelXp }} XP</span>
            <span id="profile-xp-next" class="text-primary">+{{ $nextLevelXp - $user->xp }} XP ke Lvl {{ $user->level + 1 }}</span>
          </div>
          <div class="w-full h-3.5 rounded-full bg-surface-container-highest overflow-hidden shadow-inner p-0.5">
            <div id="profile-xp-bar" class="h-full rounded-full bg-gradient-to-r from-primary via-[#9d4edd] to-secondary-fixed transition-all duration-1000 ease-out shadow-[0_0_10px_rgba(100,50,255,0.5)] relative overflow-hidden" style="width: {{ $xpPercent }}%;">
              <div class="absolute inset-0 bg-white/20 w-full h-full" style="background-image: linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent); background-size: 1rem 1rem; animation: progress-stripes 1s linear infinite;"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- MAIN GRID DASHBOARD -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
      
      <!-- LEFT COLUMN (Main Content) -->
      <div class="lg:col-span-8 flex flex-col gap-8">
        
        <!-- COMPACT STATS (Bento 4-Grid with Hover Effects) -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
          <div class="rounded-3xl bg-white/60 dark:bg-black/40 backdrop-blur-xl p-6 shadow-sm flex flex-col justify-between hover:-translate-y-2 hover:shadow-[0_15px_30px_-5px_rgba(0,0,0,0.1)] transition-all duration-300 gap-4 border border-white/50 dark:border-white/10 group cursor-default">
            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-primary/20 to-primary/5 text-primary flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
              <span class="material-symbols-outlined text-[26px]">auto_stories</span>
            </div>
            <div>
              <div class="font-black text-3xl text-on-surface group-hover:text-primary transition-colors">{{ $user->read_count }}</div>
              <div class="text-[11px] text-on-surface-variant font-black uppercase tracking-widest mt-1">Buku Selesai</div>
            </div>
          </div>
          <div class="rounded-3xl bg-white/60 dark:bg-black/40 backdrop-blur-xl p-6 shadow-sm flex flex-col justify-between hover:-translate-y-2 hover:shadow-[0_15px_30px_-5px_rgba(0,0,0,0.1)] transition-all duration-300 gap-4 border border-white/50 dark:border-white/10 group cursor-default">
            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-secondary/20 to-secondary/5 text-secondary flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
              <span class="material-symbols-outlined text-[26px]">schedule</span>
            </div>
            <div>
              <div class="font-black text-3xl text-on-surface group-hover:text-secondary transition-colors">{{ $user->reading_hours }}<span class="text-xl text-on-surface-variant">j</span></div>
              <div class="text-[11px] text-on-surface-variant font-black uppercase tracking-widest mt-1">Total Baca</div>
            </div>
          </div>
          <div class="rounded-3xl bg-white/60 dark:bg-black/40 backdrop-blur-xl p-6 shadow-sm flex flex-col justify-between hover:-translate-y-2 hover:shadow-[0_15px_30px_-5px_rgba(0,0,0,0.1)] transition-all duration-300 gap-4 border border-white/50 dark:border-white/10 group cursor-default">
            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-amber-500/20 to-amber-500/5 text-amber-500 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
              <span class="material-symbols-outlined text-[26px]" style="font-variation-settings: 'FILL' {{ $user->reviews_count > 0 ? '1' : '0' }};">star</span>
            </div>
            <div>
              <div class="font-black text-3xl text-on-surface group-hover:text-amber-500 transition-colors">{{ $user->reviews_count }}</div>
              <div class="text-[11px] text-on-surface-variant font-black uppercase tracking-widest mt-1">Rating Ulasan</div>
            </div>
          </div>
          <div class="rounded-3xl bg-white/60 dark:bg-black/40 backdrop-blur-xl p-6 shadow-sm flex flex-col justify-between hover:-translate-y-2 hover:shadow-[0_15px_30px_-5px_rgba(0,0,0,0.1)] transition-all duration-300 gap-4 border border-white/50 dark:border-white/10 group cursor-default">
            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-error/20 to-error/5 text-error flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
              <span class="material-symbols-outlined text-[26px]" style="font-variation-settings: 'FILL' {{ $user->favorites_count > 0 ? '1' : '0' }};">favorite</span>
            </div>
            <div>
              <div class="font-black text-3xl text-on-surface group-hover:text-error transition-colors">{{ $user->favorites_count }}</div>
              <div class="text-[11px] text-on-surface-variant font-black uppercase tracking-widest mt-1">Favorit</div>
            </div>
          </div>
        </div>

        <!-- DIGITAL PASS CARD (Holographic Redesign) -->
        <div class="relative w-full rounded-[2rem] p-8 text-white shadow-2xl overflow-hidden group hover:scale-[1.01] transition-transform duration-500" style="background: linear-gradient(135deg, #1e1b4b 0%, #4338ca 50%, #818cf8 100%);">
          <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4IiBoZWlnaHQ9IjgiPgo8cmVjdCB3aWR0aD0iOCIgaGVpZ2h0PSI4IiBmaWxsPSIjZmZmIiBmaWxsLW9wYWNpdHk9IjAuMDUiLz4KPC9zdmc+')] opacity-30 mix-blend-overlay pointer-events-none"></div>
          <div class="absolute -right-20 -top-20 w-80 h-80 bg-[#c084fc] rounded-full blur-[80px] pointer-events-none opacity-40 group-hover:opacity-60 group-hover:translate-x-10 transition-all duration-700"></div>
          <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-[#38bdf8] rounded-full blur-[80px] pointer-events-none opacity-40 group-hover:opacity-60 group-hover:-translate-x-10 transition-all duration-700"></div>
          <div class="absolute right-0 bottom-0 opacity-[0.05] pointer-events-none transform translate-x-8 translate-y-8">
            <span class="material-symbols-outlined text-[220px]">local_library</span>
          </div>
          
          <div class="relative z-10 flex flex-col gap-8 h-full justify-between">
            <div class="flex items-center justify-between">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center shadow-inner border border-white/30">
                  <span class="material-symbols-outlined text-white text-[24px]">bolt</span>
                </div>
                <span class="font-black tracking-[0.25em] uppercase text-white/90 text-sm drop-shadow-md">BiblioZ Pass • 26/27</span>
              </div>
              <span class="px-4 py-2 rounded-full bg-white/10 backdrop-blur-xl text-xs font-black text-white shadow-[0_4px_12px_rgba(0,0,0,0.1)] border border-white/20">
                Master Reader
              </span>
            </div>
            
            <div class="flex items-end justify-between pt-6 pb-2">
              <div class="flex flex-col gap-1">
                <p class="text-xs text-white/70 uppercase tracking-[0.2em] font-bold">Nomor Anggota Digital</p>
                <p class="text-4xl md:text-5xl font-black tracking-wider text-white drop-shadow-lg" style="font-family: 'Space Grotesk', sans-serif;">BZ-9921-4882</p>
                <p class="text-sm text-white/80 mt-2 font-medium flex items-center gap-2">
                  <span class="w-2 h-2 rounded-full bg-[#38bdf8] shadow-[0_0_10px_#38bdf8] animate-pulse"></span>
                  Gerbang RFID Aktif • Berlaku s/d Juni 2027
                </p>
              </div>
              <div class="w-14 h-12 rounded-xl bg-white/20 flex items-center justify-center backdrop-blur-md shadow-inner border border-white/30 hover:bg-white/30 transition-colors cursor-pointer" title="NFC Ready">
                <span class="material-symbols-outlined text-white text-[32px]">contactless</span>
              </div>
            </div>

            <div class="pt-4 border-t border-white/20 mt-2">
              <button class="w-full py-4 px-6 rounded-2xl bg-white/10 hover:bg-white/20 backdrop-blur-xl border border-white/30 text-white font-black text-sm flex items-center justify-center gap-3 shadow-lg transition-all active:scale-[0.98]" id="toggleQrBtn">
                <span class="material-symbols-outlined text-[24px]">qr_code_scanner</span>
                <span>TAMPILKAN QR MASUK KILAT</span>
              </button>
            </div>
            
            <div class="hidden flex-col items-center justify-center bg-white text-on-surface rounded-2xl p-6 mt-2 gap-4 shadow-2xl" id="qrCodeContainer">
              <div class="flex flex-col items-center w-full max-w-sm">
                <!-- Barcode dummy aesthetic -->
                <div class="w-full h-16 flex items-center justify-between py-1 px-4 rounded-xl">
                  <span class="w-2 h-full bg-black rounded-sm"></span><span class="w-1 h-full bg-black rounded-sm"></span><span class="w-3 h-full bg-black rounded-sm"></span><span class="w-1.5 h-full bg-black rounded-sm"></span><span class="w-1 h-full bg-black rounded-sm"></span><span class="w-4 h-full bg-black rounded-sm"></span><span class="w-2 h-full bg-black rounded-sm"></span><span class="w-2.5 h-full bg-black rounded-sm"></span><span class="w-1 h-full bg-black rounded-sm"></span><span class="w-3.5 h-full bg-black rounded-sm"></span><span class="w-1.5 h-full bg-black rounded-sm"></span><span class="w-1 h-full bg-black rounded-sm"></span><span class="w-2.5 h-full bg-black rounded-sm"></span><span class="w-3 h-full bg-black rounded-sm"></span><span class="w-1 h-full bg-black rounded-sm"></span><span class="w-2 h-full bg-black rounded-sm"></span>
                </div>
                <span id="profile-gate-id" class="font-black tracking-[0.25em] text-on-surface-variant mt-3 text-sm">1234567890-BIBLIOZ-GATE</span>
              </div>
              <p class="text-xs text-center text-on-surface-variant/80 max-w-[250px] font-medium">Arahkan barcode ke scanner turnstile gerbang perpustakaan</p>
            </div>
          </div>
        </div>

        <!-- RIWAYAT SIRKULASI -->
        <section class="flex flex-col w-full gap-5 bg-white/60 dark:bg-black/40 backdrop-blur-xl p-8 rounded-[2rem] shadow-sm border border-white/50 dark:border-white/10">
          <div class="flex items-center justify-between">
            <h3 class="text-2xl font-extrabold text-on-surface">Riwayat Sirkulasi</h3>
            <span class="text-[10px] font-black text-primary bg-primary/10 px-4 py-2 rounded-full uppercase tracking-widest ring-1 ring-primary/20">Semester Ganjil</span>
          </div>
          
          <div class="flex items-center gap-3 overflow-x-auto pb-2 no-scrollbar mt-2">
            <button class="px-5 py-2.5 rounded-xl bg-on-surface text-surface font-bold text-sm whitespace-nowrap shadow-md hover:scale-105 transition-transform">
              Selesai Dibaca ({{ $borrowings->count() }})
            </button>
            <button class="px-5 py-2.5 rounded-xl bg-surface-container-highest text-on-surface-variant font-bold text-sm whitespace-nowrap hover:bg-surface-container transition-colors">
              Sedang Berjalan (0)
            </button>
            <button class="px-5 py-2.5 rounded-xl bg-surface-container-highest text-on-surface-variant font-bold text-sm whitespace-nowrap hover:bg-surface-container transition-colors">
              Reservasi (0)
            </button>
          </div>
          
          <div class="flex flex-col gap-4 mt-4">
            @forelse ($borrowings as $borrow)
            <div class="flex gap-6 p-5 rounded-3xl bg-white dark:bg-surface-container hover:bg-surface-container-lowest hover:shadow-[0_8px_30px_rgb(0,0,0,0.06)] transition-all duration-300 border border-transparent hover:border-outline-variant group">
              <div class="w-24 h-32 rounded-2xl overflow-hidden flex-shrink-0 bg-surface-container shadow-md group-hover:scale-105 transition-transform duration-500">
                <img class="w-full h-full object-cover" alt="{{ $borrow->book->title ?? 'Buku' }}" src="{{ asset($borrow->book->cover_image_url ?? '') }}"/>
              </div>
              <div class="flex flex-col justify-between flex-1 min-w-0 py-1">
                <div class="flex flex-col">
                  <div class="flex items-center justify-between gap-2 mb-2">
                    <span class="px-3 py-1 rounded-lg {{ $borrow->book->type == 'physical' ? 'bg-primary/10 text-primary' : 'bg-secondary/10 text-secondary' }} text-[10px] font-black uppercase tracking-widest">{{ $borrow->book->type == 'physical' ? 'Fisik' : 'E-Book' }}</span>
                    <span class="text-xs text-on-surface-variant font-bold bg-surface-container-highest px-3 py-1 rounded-lg">{{ \Carbon\Carbon::parse($borrow->borrowed_at)->format('d M Y') }}</span>
                  </div>
                  <h4 class="text-lg font-black text-on-surface truncate group-hover:text-primary transition-colors">{{ $borrow->book->title ?? 'Judul Buku' }}</h4>
                  <p class="text-sm text-on-surface-variant truncate mt-0.5 font-medium">{{ $borrow->book->author ?? 'Penulis' }}</p>
                </div>
                <div class="flex items-center justify-between pt-3 border-t border-surface-container-highest mt-3">
                  <div class="flex items-center text-amber-500 gap-1 bg-amber-500/10 px-3 py-1.5 rounded-lg">
                    @if($borrow->book->rating)
                      <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                      <span class="text-xs font-black text-amber-600 ml-1">{{ number_format($borrow->book->rating, 1) }}</span>
                    @else
                      <span class="text-[11px] font-bold text-amber-600/70 uppercase">No Rating</span>
                    @endif
                  </div>
                  @if($borrow->book->type == 'physical')
                  <button class="px-5 py-2 rounded-xl bg-surface-container-highest text-on-surface font-bold text-xs hover:bg-primary hover:text-white transition-colors shadow-sm">
                    Pinjam Lagi
                  </button>
                  @else
                  <a href="{{ route('baca.ebook', $borrow->book->id) }}" class="px-5 py-2 rounded-xl bg-primary-container text-on-primary-container font-bold text-xs hover:bg-primary hover:text-white transition-colors shadow-sm">
                    Buka File
                  </a>
                  @endif
                </div>
              </div>
            </div>
            @empty
            <div class="p-12 text-center flex flex-col items-center gap-4 bg-white/50 dark:bg-black/20 rounded-[2rem] border-2 border-dashed border-outline-variant">
              <div class="w-20 h-20 rounded-full bg-surface-container flex items-center justify-center text-outline">
                <span class="material-symbols-outlined text-[40px]">history</span>
              </div>
              <div class="flex flex-col gap-1">
                <h4 class="text-lg font-bold text-on-surface">Belum ada riwayat</h4>
                <p class="text-on-surface-variant font-medium text-sm max-w-xs mx-auto">Pinjam dan selesaikan buku pertamamu untuk melihat riwayat di sini.</p>
              </div>
            </div>
            @endforelse
          </div>
        </section>

      </div>

      <!-- RIGHT COLUMN (Sidebar) -->
      <div class="lg:col-span-4 flex flex-col gap-8">
        
        <!-- DAILY STREAK WIDGET (Sleek Redesigned) -->
        <div class="flex flex-col p-8 rounded-[2rem] {{ $isStreakActive ? 'bg-gradient-to-br from-[#ec4899] to-[#8b5cf6] shadow-[0_10px_30px_rgba(236,72,153,0.3)] border border-[#f472b6]' : 'bg-white/60 dark:bg-black/40 border border-white/50 dark:border-white/10' }} gap-5 relative overflow-hidden group hover:scale-[1.02] transition-transform duration-500">
          @if($isStreakActive)
            <div class="absolute -right-10 -top-10 w-40 h-40 bg-white/20 rounded-full blur-[40px] pointer-events-none"></div>
            <div class="absolute -left-10 -bottom-10 w-32 h-32 bg-white/10 rounded-full blur-[30px] pointer-events-none"></div>
          @endif
          
          <div class="flex items-center gap-5 z-10">
            <div class="w-16 h-16 rounded-[1.25rem] flex items-center justify-center {{ $isStreakActive ? 'bg-white text-[#ec4899] shadow-inner shadow-[#ec4899]/20' : 'bg-surface-container-highest text-outline grayscale' }}">
              <span class="material-symbols-outlined text-4xl drop-shadow-sm">local_fire_department</span>
            </div>
            <div class="flex flex-col">
              <span class="text-3xl font-black {{ $isStreakActive ? 'text-white drop-shadow-sm' : 'text-on-surface' }}">{{ $displayStreak }} Hari</span>
              <span class="text-[11px] uppercase tracking-widest font-black {{ $isStreakActive ? 'text-white/90' : 'text-on-surface-variant' }} mt-1">{{ $isStreakActive ? 'Runtunan Menyala!' : 'Mulai Runtunanmu' }}</span>
            </div>
          </div>
          <div class="flex items-center justify-between mt-3 px-1 z-10 bg-black/10 p-3 rounded-2xl backdrop-blur-sm">
            @foreach(['S','S','R','K','J','S','M'] as $index => $day)
            <div class="flex flex-col items-center gap-1.5">
              <span class="w-9 h-9 rounded-xl {{ ($isStreakActive && $index < min(7, $displayStreak)) ? 'bg-white text-[#ec4899] shadow-md shadow-black/10' : ($isStreakActive ? 'bg-white/20 text-white' : 'bg-surface-container-highest text-on-surface-variant') }} flex items-center justify-center text-sm font-black transition-all hover:-translate-y-1">{{ $day }}</span>
            </div>
            @endforeach
          </div>
        </div>

        <!-- BADGE REWARDS & PRESTASI -->
        <section class="flex flex-col w-full gap-5 bg-white/60 dark:bg-black/40 backdrop-blur-xl p-8 rounded-[2rem] shadow-sm border border-white/50 dark:border-white/10">
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-xl bg-[#eab308]/10 text-[#eab308] flex items-center justify-center">
                <span class="material-symbols-outlined text-xl" style="font-variation-settings: 'FILL' 1;">emoji_events</span>
              </div>
              <h3 class="text-xl font-extrabold text-on-surface">Prestasi</h3>
            </div>
          </div>
          
          <div class="flex items-center bg-surface-container-highest/50 p-1.5 rounded-xl text-sm font-bold w-full">
            <button class="flex-1 py-2 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all" id="badgeTabUnlocked">Tercapai (0)</button>
            <button class="flex-1 py-2 rounded-lg bg-surface text-primary shadow-md transition-all" id="badgeTabLocked">Terkunci (6)</button>
          </div>
          
          <div class="flex flex-col gap-4 max-h-[420px] overflow-y-auto pr-3 custom-scrollbar mt-2" id="badgeContainer">
            <!-- Badge 1 -->
            <div class="badge-item locked flex items-center p-4 rounded-2xl bg-white dark:bg-surface-container hover:shadow-md transition-shadow border border-transparent hover:border-outline-variant gap-4 group">
              <div class="w-14 h-14 rounded-2xl bg-surface-container-highest text-outline flex items-center justify-center flex-shrink-0 group-hover:scale-110 group-hover:bg-primary/10 group-hover:text-primary transition-all duration-300">
                <span class="material-symbols-outlined text-[28px]">lock</span>
              </div>
              <div class="flex flex-col flex-1">
                <div class="flex items-center justify-between mb-1.5">
                  <h4 class="font-bold text-on-surface text-sm">Speed Reader</h4>
                  <span class="text-[10px] font-black text-on-surface-variant bg-surface-container-highest px-2.5 py-1 rounded-lg">0/1</span>
                </div>
                <p class="text-[11px] font-medium text-on-surface-variant line-clamp-1">Selesaikan baca buku < 48 jam</p>
                <div class="w-full h-1.5 rounded-full bg-surface-container-highest mt-2.5"><div class="h-full bg-primary rounded-full w-0"></div></div>
              </div>
            </div>
            <!-- Badge 2 -->
            <div class="badge-item locked flex items-center p-4 rounded-2xl bg-white dark:bg-surface-container hover:shadow-md transition-shadow border border-transparent hover:border-outline-variant gap-4 group">
              <div class="w-14 h-14 rounded-2xl bg-surface-container-highest text-outline flex items-center justify-center flex-shrink-0 group-hover:scale-110 group-hover:bg-primary/10 group-hover:text-primary transition-all duration-300">
                <span class="material-symbols-outlined text-[28px]">lock</span>
              </div>
              <div class="flex flex-col flex-1">
                <div class="flex items-center justify-between mb-1.5">
                  <h4 class="font-bold text-on-surface text-sm">Marathon Kurikulum</h4>
                  <span class="text-[10px] font-black text-on-surface-variant bg-surface-container-highest px-2.5 py-1 rounded-lg">0/10</span>
                </div>
                <p class="text-[11px] font-medium text-on-surface-variant line-clamp-1">Baca 10 modul pelajaran resmi</p>
                <div class="w-full h-1.5 rounded-full bg-surface-container-highest mt-2.5"><div class="h-full bg-primary rounded-full w-0"></div></div>
              </div>
            </div>
            <!-- Badge 3 -->
            <div class="badge-item locked flex items-center p-4 rounded-2xl bg-white dark:bg-surface-container hover:shadow-md transition-shadow border border-transparent hover:border-outline-variant gap-4 group">
              <div class="w-14 h-14 rounded-2xl bg-surface-container-highest text-outline flex items-center justify-center flex-shrink-0 group-hover:scale-110 group-hover:bg-primary/10 group-hover:text-primary transition-all duration-300">
                <span class="material-symbols-outlined text-[28px]">lock</span>
              </div>
              <div class="flex flex-col flex-1">
                <div class="flex items-center justify-between mb-1.5">
                  <h4 class="font-bold text-on-surface text-sm">Reviewer Teladan</h4>
                  <span class="text-[10px] font-black text-on-surface-variant bg-surface-container-highest px-2.5 py-1 rounded-lg">0/5</span>
                </div>
                <p class="text-[11px] font-medium text-on-surface-variant line-clamp-1">5 ulasan bermutu di katalog</p>
                <div class="w-full h-1.5 rounded-full bg-surface-container-highest mt-2.5"><div class="h-full bg-primary rounded-full w-0"></div></div>
              </div>
            </div>
          </div>
        </section>

        <!-- QUICK SHORTCUTS & SUPPORT -->
        <section class="flex flex-col w-full gap-5 bg-white/60 dark:bg-black/40 backdrop-blur-xl p-8 rounded-[2rem] shadow-sm border border-white/50 dark:border-white/10">
          <h3 class="text-xl font-extrabold text-on-surface">Layanan & Integrasi</h3>
          <div class="flex flex-col gap-3">
            <a class="flex items-center justify-between p-4 rounded-2xl bg-white dark:bg-surface-container hover:shadow-md border border-transparent hover:border-outline-variant transition-all group" href="#">
              <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-secondary-container/30 text-secondary flex items-center justify-center group-hover:scale-110 transition-transform">
                  <span class="material-symbols-outlined text-[24px]">verified_user</span>
                </div>
                <div class="flex flex-col gap-0.5">
                  <span class="font-bold text-[15px] text-on-surface group-hover:text-primary transition-colors">Status Denda</span>
                  <span class="text-xs text-secondary font-black tracking-wide uppercase">Bebas Tunggakan</span>
                </div>
              </div>
              <span class="material-symbols-outlined text-outline text-[24px] group-hover:translate-x-1 transition-transform">chevron_right</span>
            </a>
            
            <a class="flex items-center justify-between p-4 rounded-2xl bg-white dark:bg-surface-container hover:shadow-md border border-transparent hover:border-outline-variant transition-all group" href="#">
              <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-primary/10 text-primary flex items-center justify-center group-hover:scale-110 transition-transform">
                  <span class="material-symbols-outlined text-[24px]">sync</span>
                </div>
                <div class="flex flex-col gap-0.5">
                  <span class="font-bold text-[15px] text-on-surface group-hover:text-primary transition-colors">Rapor Literasi</span>
                  <span class="text-xs text-on-surface-variant font-bold">Tersinkron Dapodik</span>
                </div>
              </div>
              <span class="material-symbols-outlined text-outline text-[24px] group-hover:translate-x-1 transition-transform">chevron_right</span>
            </a>
            
            <a class="flex items-center justify-between p-4 rounded-2xl bg-white dark:bg-surface-container hover:shadow-md border border-transparent hover:border-outline-variant transition-all group" href="/bantuan">
              <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-[#ec4899]/10 text-[#ec4899] flex items-center justify-center group-hover:scale-110 transition-transform">
                  <span class="material-symbols-outlined text-[24px]">support_agent</span>
                </div>
                <div class="flex flex-col gap-0.5">
                  <span class="font-bold text-[15px] text-on-surface group-hover:text-primary transition-colors">Tanya Pustakawan</span>
                  <span class="text-xs text-on-surface-variant font-bold">Bantuan Online 24/7</span>
                </div>
              </div>
              <span class="material-symbols-outlined text-outline text-[24px] group-hover:translate-x-1 transition-transform">chevron_right</span>
            </a>
          </div>
        </section>

      </div>
    </div>
  </div>
</main><script>
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
    
    try {
      const response = await fetch('/api/user', {
        headers: {
          'Authorization': 'Bearer ' + (token || ''),
          'Accept': 'application/json'
        }
      });
      if (response.ok) {
        const user = await response.json();

        const elName = document.getElementById('profile-name');
        const elNis = document.getElementById('profile-nis');
        const elSchool = document.getElementById('profile-school-name');
        const elGate = document.getElementById('profile-gate-id');
        
        if (elName) elName.textContent = user.name;
        if (elNis) elNis.innerHTML = `NIS: ${user.nis} &bull; <span class="font-bold text-on-surface">${user.role || 'Siswa'}</span>`;
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
        console.warn('API /api/user not authorized. Using Blade variables.');
      }
    } catch (e) {
      console.error(e);
    }
  });
</script></main><nav class="fixed bottom-0 w-full z-50 pb-safe bg-surface/85 backdrop-blur-xl shadow-[0_-2px_12px_rgba(0,0,0,0.05)] md:hidden" data-active-classes="bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]"><div class="flex items-center justify-around h-16 px-space-xs max-w-md mx-auto"><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="katalog-buku" href="{{ route('katalog') }}"><span class="material-symbols-outlined text-[22px]">menu_book</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Katalog</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="sirkulasi-peminjaman" href="{{ route('sirkulasi') }}"><span class="material-symbols-outlined text-[22px]">sync_alt</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Sirkulasi</span></a><a aria-current="page" class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl transition-all bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]" data-path="akun" href="{{ route('akun') }}"><span class="material-symbols-outlined text-[22px]">account_circle</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Akun</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="akun-pengaturan" href="{{ route('akun.pengaturan') }}"><span class="material-symbols-outlined text-[22px]">settings</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Pengaturan</span></a></div></nav></body></html>
