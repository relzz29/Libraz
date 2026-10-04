<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
<title>Laporan - Admin BiblioZ</title>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&family=Space+Grotesk:wght@700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com"></script>
<style>
:root {
  --color-on-primary-fixed: 30 0 96;
  --color-surface-container-highest: 229 225 232;
  --color-on-error: 255 255 255;
  --color-surface-container: 241 236 244;
  --color-surface-container-high: 235 230 238;
  --color-on-surface: 28 27 32;
  --color-surface-variant: 229 225 232;
  --color-surface-container-low: 247 242 249;
  --color-on-surface-variant: 72 68 86;
  --color-background: 253 248 255;
  --color-primary: 67 0 187;
  --color-surface-tint: 101 49 240;
  --color-secondary: 0 108 70;
  --color-on-background: 28 27 32;
  --color-secondary-container: 67 252 174;
  --color-on-secondary: 255 255 255;
  --color-error: 186 26 26;
  --color-surface-container-lowest: 255 255 255;
  --color-primary-container: 91 33 230;
  --color-surface: 253 248 255;
  --color-outline: 121 116 136;
  --color-on-primary: 255 255 255;
}
html.dark {
  --color-surface-container-highest: 63 65 71;
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
}
</style>
<script id="tailwind-config">tailwind.config = {"darkMode":"class","theme":{"extend":{"colors":{"surface-container-highest":"rgb(var(--color-surface-container-highest) / <alpha-value>)","surface-container":"rgb(var(--color-surface-container) / <alpha-value>)","surface-container-high":"rgb(var(--color-surface-container-high) / <alpha-value>)","on-surface":"rgb(var(--color-on-surface) / <alpha-value>)","surface-variant":"rgb(var(--color-surface-variant) / <alpha-value>)","surface-container-low":"rgb(var(--color-surface-container-low) / <alpha-value>)","on-surface-variant":"rgb(var(--color-on-surface-variant) / <alpha-value>)","background":"rgb(var(--color-background) / <alpha-value>)","primary":"rgb(var(--color-primary) / <alpha-value>)","surface-tint":"rgb(var(--color-surface-tint) / <alpha-value>)","secondary":"rgb(var(--color-secondary) / <alpha-value>)","on-background":"rgb(var(--color-on-background) / <alpha-value>)","secondary-container":"rgb(var(--color-secondary-container) / <alpha-value>)","on-secondary":"rgb(var(--color-on-secondary) / <alpha-value>)","error":"rgb(var(--color-error) / <alpha-value>)","surface-container-lowest":"rgb(var(--color-surface-container-lowest) / <alpha-value>)","primary-container":"rgb(var(--color-primary-container) / <alpha-value>)","surface":"rgb(var(--color-surface) / <alpha-value>)","outline":"rgb(var(--color-outline) / <alpha-value>)","on-primary":"rgb(var(--color-on-primary) / <alpha-value>)"},"fontFamily":{"title-md":["Plus Jakarta Sans"],"headline-sm":["Plus Jakarta Sans"],"headline-lg":["Plus Jakarta Sans"],"label-lg":["Space Grotesk"],"body-lg":["Plus Jakarta Sans"],"body-md":["Plus Jakarta Sans"],"label-md":["Space Grotesk"]}}}};</script>
<script>
  if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
  } else {
    document.documentElement.classList.remove('dark');
  }
</script>
</head>
<body class="bg-background font-body-md text-on-surface flex flex-col min-h-screen">
  
<!-- Desktop Sidebar -->
<aside class="hidden md:flex fixed left-0 top-0 h-screen w-64 bg-surface-container-lowest border-r border-surface-container-high flex-col z-50">
  <div class="h-16 flex items-center px-6 border-b border-surface-container-high gap-3">
    <img alt="BiblioZ Logo" class="h-8 w-auto object-contain flex-shrink-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAz2hoVQ9wOeungd-4ubStxt3uW2O2agaLbBXWfGvi50WoxUohQpS1yMGEOWVn3E1FfRDlQjUNIjc8U7kCnkRxZRKb_FmsWrxzUds9I4q7uzTH1WwhU3gP9Ixf3B82RgmnN0hKWT1MbmwIFykWAzRz7Rk0zLiqbGMIAh8vPkB5TkkU3q-_iAdQkfqN0k__yeu90O4L1BBAF2jgxjXZziX8XqXajMJjFWTDTlpqIgIs7jbXrN5InJK2I"/>
    <span class="font-title-md text-primary font-bold tracking-wider uppercase">BiblioZ</span>
  </div>
  <nav class="flex-1 p-4 flex flex-col gap-2 overflow-y-auto">
    <div class="px-4 py-2 mt-2 mb-1">
        <span class="font-label-md text-outline tracking-widest uppercase">Admin Panel</span>
    </div>
    <a href="/admin" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">
      <span class="material-symbols-outlined text-[22px]">dashboard</span>
      Dashboard
    </a>
    <a href="/admin/tambah-buku" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">
      <span class="material-symbols-outlined text-[22px]">add_circle</span>
      Tambah Buku
    </a>
    <a href="/admin/laporan" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20] transition-all">
      <span class="material-symbols-outlined text-[22px]">analytics</span>
      Laporan
    </a>
    <a href="/katalog" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">
      <span class="material-symbols-outlined text-[22px]">menu_book</span>
      Ke Tampilan User
    </a>
  </nav>
  <div class="p-4 border-t border-surface-container-high">
    <form action="{{ route('admin.logout') }}" method="POST">
      @csrf
      <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-error hover:bg-error/10 transition-all font-bold">
        <span class="material-symbols-outlined text-[22px]">logout</span>
        Keluar
      </button>
    </form>
  </div>
</aside>

<header class="fixed top-0 w-full md:w-[calc(100%-16rem)] md:left-64 z-40 pt-safe bg-surface/80 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)] border-b border-surface-container-high">
    <div class="h-16 px-6 flex items-center justify-between gap-4">
        <div class="flex items-center gap-4 min-w-0">
            <div class="flex flex-col min-w-0">
                <span class="font-title-md text-on-surface truncate">Laporan Perpustakaan</span>
                <span class="font-label-md text-on-surface-variant mt-0.5">Statistik data buku dan sirkulasi.</span>
            </div>
        </div>
        <button class="bg-primary text-on-primary px-4 py-2 rounded-xl text-sm font-bold flex items-center gap-2 hover:bg-surface-tint transition-all shadow-sm">
            <span class="material-symbols-outlined text-[18px]">download</span> Unduh PDF
        </button>
    </div>
</header>

<main class="flex flex-col relative w-full md:w-[calc(100%-16rem)] md:ml-64 pt-24 pb-8 px-8 bg-surface min-h-screen">
    <!-- Dotted background -->
    <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden bg-[radial-gradient(#d1d5db_2px,transparent_2px)] [background-size:24px_24px] opacity-40"></div>
    
    <div class="w-full mx-auto max-w-5xl relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Ringkasan Buku Card -->
            <div class="bg-[#ffde59] p-8 rounded-2xl border-4 border-on-surface shadow-[8px_8px_0px_rgba(0,0,0,1)] relative overflow-hidden group hover:-translate-y-2 transition-all duration-300">
                <div class="absolute -right-10 -top-10 w-40 h-40 bg-white/20 rounded-full blur-xl"></div>
                <h3 class="font-headline-lg text-on-surface mb-1 flex items-center gap-4 text-3xl font-black drop-shadow-[2px_2px_0px_#fff]">
                    <div class="w-14 h-14 rounded-xl bg-white border-4 border-on-surface flex items-center justify-center text-on-surface shadow-[4px_4px_0px_rgba(0,0,0,1)] hover:-rotate-12 transition-transform">
                        <span class="material-symbols-outlined text-[32px]">library_books</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="uppercase">Ringkasan Buku</span>
                        <span class="text-on-surface font-label-md font-bold text-sm mt-0.5 tracking-wider bg-white px-2 py-0.5 border-2 border-on-surface inline-block w-fit">TOTAL BUKU</span>
                    </div>
                </h3>
                
                <div class="space-y-4 mt-8">
                    <div class="flex justify-between items-center p-5 bg-white rounded-xl border-4 border-on-surface shadow-[4px_4px_0px_rgba(0,0,0,1)] hover:-translate-y-1 hover:translate-x-1 hover:shadow-[0px_0px_0px_rgba(0,0,0,1)] transition-all">
                        <span class="font-label-md text-on-surface font-black uppercase text-lg flex items-center gap-3"><span class="text-3xl">📚</span> Buku Tersimpan</span>
                        <span class="font-headline-lg text-3xl font-black bg-[#ffde59] border-4 border-on-surface px-5 py-1.5 rounded-lg shadow-[2px_2px_0px_rgba(0,0,0,1)]">{{ number_format($totalBooks) }}</span>
                    </div>
                    <div class="flex justify-between items-center p-5 bg-white rounded-xl border-4 border-on-surface shadow-[4px_4px_0px_rgba(0,0,0,1)] hover:-translate-y-1 hover:translate-x-1 hover:shadow-[0px_0px_0px_rgba(0,0,0,1)] transition-all">
                        <span class="font-label-md text-on-surface font-black uppercase text-lg flex items-center gap-3"><span class="text-3xl">📕</span> Buku Fisik</span>
                        <span class="font-headline-lg text-3xl font-black bg-[#38b6ff] border-4 border-on-surface px-5 py-1.5 rounded-lg shadow-[2px_2px_0px_rgba(0,0,0,1)] text-white">{{ number_format($totalPhysical) }}</span>
                    </div>
                    <div class="flex justify-between items-center p-5 bg-white rounded-xl border-4 border-on-surface shadow-[4px_4px_0px_rgba(0,0,0,1)] hover:-translate-y-1 hover:translate-x-1 hover:shadow-[0px_0px_0px_rgba(0,0,0,1)] transition-all">
                        <span class="font-label-md text-on-surface font-black uppercase text-lg flex items-center gap-3"><span class="text-3xl">📱</span> E-Book</span>
                        <span class="font-headline-lg text-3xl font-black bg-[#ff5757] border-4 border-on-surface px-5 py-1.5 rounded-lg shadow-[2px_2px_0px_rgba(0,0,0,1)] text-white">{{ number_format($totalEbook) }}</span>
                    </div>
                </div>
            </div>

            <!-- Sirkulasi & Peminjaman Card -->
            <div class="bg-[#cb6ce6] p-8 rounded-2xl border-4 border-on-surface shadow-[8px_8px_0px_rgba(0,0,0,1)] relative overflow-hidden group hover:-translate-y-2 transition-all duration-300 flex flex-col">
                <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-white/20 rounded-full blur-xl"></div>
                
                <h3 class="font-headline-lg text-white mb-1 flex items-center gap-4 text-3xl font-black drop-shadow-[2px_2px_0px_rgba(0,0,0,1)]">
                    <div class="w-14 h-14 rounded-xl bg-white border-4 border-on-surface flex items-center justify-center text-on-surface shadow-[4px_4px_0px_rgba(0,0,0,1)] hover:-rotate-12 transition-transform">
                        <span class="material-symbols-outlined text-[32px]">swap_horiz</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="uppercase">Sirkulasi</span>
                        <span class="text-on-surface font-label-md font-bold text-sm mt-0.5 tracking-wider bg-[#ffde59] px-2 py-0.5 border-2 border-on-surface inline-block w-fit text-black drop-shadow-none">PEMINJAMAN</span>
                    </div>
                </h3>
                
                <div class="flex-1 flex items-center justify-center p-8 mt-6 bg-white rounded-xl border-4 border-on-surface shadow-inner relative overflow-hidden">
                    <div class="absolute inset-0 bg-[radial-gradient(#d1d5db_2px,transparent_2px)] [background-size:16px_16px] opacity-30"></div>
                    <div class="relative z-10 text-center flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full bg-[#38b6ff] flex items-center justify-center mb-6 border-4 border-on-surface group-hover:rotate-180 transition-transform duration-700 shadow-[4px_4px_0px_rgba(0,0,0,1)]">
                            <span class="material-symbols-outlined text-[48px] text-white">sync_alt</span>
                        </div>
                        <h4 class="font-headline-lg text-8xl mb-4 text-on-surface font-black drop-shadow-[4px_4px_0px_#cb6ce6]">{{ number_format($totalBorrows) }}</h4>
                        <p class="font-label-md text-on-surface bg-[#ffde59] px-6 py-2 rounded-lg border-4 border-on-surface shadow-[4px_4px_0px_rgba(0,0,0,1)] uppercase tracking-widest font-black text-xl hover:-translate-y-1 transition-transform">Total Peminjaman</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
