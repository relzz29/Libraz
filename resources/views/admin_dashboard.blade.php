<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
<title>Admin Dashboard - BiblioZ</title>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&family=Space+Grotesk:wght@700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<style>@layer base{html,body{width:100vw;margin:0;padding:0;}body{overscroll-behavior:none;}.pb-safe{padding-bottom:env(safe-area-inset-bottom,0px);}.pt-safe{padding-top:env(safe-area-inset-top,0px);}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style>
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
<script id="tailwind-config">tailwind.config = {"darkMode":"class","theme":{"extend":{"colors":{"surface-container-highest":"rgb(var(--color-surface-container-highest) / <alpha-value>)","surface-container":"rgb(var(--color-surface-container) / <alpha-value>)","surface-container-high":"rgb(var(--color-surface-container-high) / <alpha-value>)","on-surface":"rgb(var(--color-on-surface) / <alpha-value>)","surface-variant":"rgb(var(--color-surface-variant) / <alpha-value>)","surface-container-low":"rgb(var(--color-surface-container-low) / <alpha-value>)","on-surface-variant":"rgb(var(--color-on-surface-variant) / <alpha-value>)","background":"rgb(var(--color-background) / <alpha-value>)","primary":"rgb(var(--color-primary) / <alpha-value>)","surface-tint":"rgb(var(--color-surface-tint) / <alpha-value>)","secondary":"rgb(var(--color-secondary) / <alpha-value>)","on-background":"rgb(var(--color-on-background) / <alpha-value>)","secondary-container":"rgb(var(--color-secondary-container) / <alpha-value>)","on-secondary":"rgb(var(--color-on-secondary) / <alpha-value>)","error":"rgb(var(--color-error) / <alpha-value>)","surface-container-lowest":"rgb(var(--color-surface-container-lowest) / <alpha-value>)","primary-container":"rgb(var(--color-primary-container) / <alpha-value>)","surface":"rgb(var(--color-surface) / <alpha-value>)","outline":"rgb(var(--color-outline) / <alpha-value>)","on-primary":"rgb(var(--color-on-primary) / <alpha-value>)"},"borderRadius":{"DEFAULT":"0.25rem","lg":"0.5rem","xl":"0.75rem","full":"9999px"},"spacing":{"space-xs":"0.25rem","gutter-sm":"0.75rem","space-lg":"1.25rem","margin":"1.25rem","gutter":"1rem","margin-desktop":"2.5rem","space-md":"0.875rem","space-sm":"0.5rem","space-xl":"2rem"},"fontFamily":{"title-md":["Plus Jakarta Sans"],"headline-sm":["Plus Jakarta Sans"],"headline-lg":["Plus Jakarta Sans"],"label-lg":["Space Grotesk"],"body-lg":["Plus Jakarta Sans"],"body-md":["Plus Jakarta Sans"],"label-md":["Space Grotesk"]},"fontSize":{"title-md":["16px",{"lineHeight":"22px","fontWeight":"700"}],"headline-sm":["18px",{"lineHeight":"24px","fontWeight":"700"}],"headline-lg":["30px",{"lineHeight":"36px","fontWeight":"800"}],"label-lg":["13px",{"lineHeight":"16px","fontWeight":"700"}],"body-lg":["16px",{"lineHeight":"24px","fontWeight":"500"}],"body-md":["14px",{"lineHeight":"20px","fontWeight":"500"}],"label-md":["11px",{"lineHeight":"14px","fontWeight":"700"}]}}}};</script>
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
  
  /* Modal Animation Styles */
  .modal-overlay {
    backdrop-filter: blur(8px);
    transition: opacity 0.3s ease;
  }
  .modal-content {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    transform: scale(0.95);
    opacity: 0;
  }
  .modal-open .modal-content {
    transform: scale(1);
    opacity: 1;
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
    <div class="px-4 py-2 mt-2 mb-1">
        <span class="font-label-md text-label-md text-outline tracking-widest uppercase">Admin Panel</span>
    </div>
    <a href="/admin" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20] transition-all">
      <span class="material-symbols-outlined text-[22px]">dashboard</span>
      Dashboard
    </a>
    <a href="/admin/tambah-buku" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">
      <span class="material-symbols-outlined text-[22px]">add_circle</span>
      Tambah Buku
    </a>
    <a href="/admin/laporan" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">
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
    <div class="h-16 px-margin flex items-center justify-between gap-space-sm">
        <div class="flex items-center gap-space-sm min-w-0">
            <div class="flex flex-col min-w-0">
                <span class="font-title-md text-title-md text-on-surface truncate">Beranda Admin 👋</span>
                <span class="font-label-md text-label-md text-on-surface-variant mt-0.5">Kelola seluruh aktivitas perpustakaan.</span>
            </div>
        </div>
        <div class="flex items-center gap-space-md flex-shrink-0">
            <div class="relative w-64 hidden lg:block">
                <input type="text" placeholder="Cari buku, user, resi..." class="w-full bg-surface-container-low border border-surface-container-high rounded-full py-2 pl-10 pr-4 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-body-md transition-all">
                <span class="material-symbols-outlined absolute left-3 top-2.5 text-on-surface-variant text-[20px]">search</span>
            </div>
            <div class="w-11 h-11 flex items-center justify-center relative cursor-pointer">
                <img id="profile-avatar-small" alt="Profile Admin" class="w-9 h-9 rounded-full object-cover border-2 border-primary/20" src="https://ui-avatars.com/api/?name=Admin&background=4300bb&color=fff"/>
                <div class="absolute bottom-0 right-1 w-3 h-3 bg-secondary rounded-full border-2 border-surface"></div>
            </div>
        </div>
    </div>
</header>

<main class="flex flex-col relative w-full md:w-[calc(100%-16rem)] md:ml-64 pt-20 pb-24 md:pb-8 bg-surface min-h-screen">
    <div class="flex flex-col w-full px-margin gap-space-lg max-w-6xl mx-auto">
        
        <!-- Header Actions -->
        <div class="flex flex-wrap items-center justify-between gap-4 mt-2">
            <div>
                <h1 class="font-headline-lg text-headline-lg text-on-surface bg-gradient-to-r from-primary to-surface-tint bg-clip-text text-transparent">Overview Sistem</h1>
            </div>
        </div>

        <!-- Quick Stats Cards (Comic Style / Neo Brutalism) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1: Total Books -->
            <div class="p-6 rounded-2xl bg-[#ffde59] border-4 border-on-surface relative overflow-hidden hover:-translate-y-2 hover:translate-x-2 hover:shadow-[0px_0px_0px_rgba(0,0,0,1)] shadow-[6px_6px_0px_rgba(0,0,0,1)] transition-all duration-200">
                <div class="absolute -right-4 -top-4 p-4 opacity-20"><span class="material-symbols-outlined text-[100px] text-on-surface">auto_stories</span></div>
                <div class="w-14 h-14 rounded-xl border-4 border-on-surface bg-white flex items-center justify-center text-on-surface mb-4 shadow-[4px_4px_0px_rgba(0,0,0,1)]">
                    <span class="material-symbols-outlined text-[32px]">library_books</span>
                </div>
                <p class="font-label-md text-on-surface uppercase tracking-black font-black mb-2 text-lg">Total Buku</p>
                <div class="flex items-center gap-3">
                    <h2 class="font-headline-lg text-5xl text-on-surface font-black drop-shadow-[2px_2px_0px_#fff]">{{ number_format($totalBooks) }}</h2>
                    <span class="text-on-surface font-label-md flex items-center bg-white px-3 py-1 rounded-lg border-4 border-on-surface shadow-[4px_4px_0px_rgba(0,0,0,1)] font-black"><span class="material-symbols-outlined text-[20px] mr-1">trending_up</span>+3.2%</span>
                </div>
            </div>
            
            <!-- Card 2: Active Users -->
            <div class="p-6 rounded-2xl bg-[#38b6ff] border-4 border-on-surface relative overflow-hidden hover:-translate-y-2 hover:translate-x-2 hover:shadow-[0px_0px_0px_rgba(0,0,0,1)] shadow-[6px_6px_0px_rgba(0,0,0,1)] transition-all duration-200">
                <div class="absolute -right-4 -top-4 p-4 opacity-20"><span class="material-symbols-outlined text-[100px] text-on-surface">group</span></div>
                <div class="w-14 h-14 rounded-xl border-4 border-on-surface bg-white flex items-center justify-center text-on-surface mb-4 shadow-[4px_4px_0px_rgba(0,0,0,1)]">
                    <span class="material-symbols-outlined text-[32px]">people</span>
                </div>
                <p class="font-label-md text-on-surface uppercase tracking-black font-black mb-2 text-lg">Akun Aktif</p>
                <div class="flex items-center gap-3">
                    <h2 class="font-headline-lg text-5xl text-on-surface font-black drop-shadow-[2px_2px_0px_#fff]">{{ number_format($activeUsers) }}</h2>
                    <span class="text-on-surface font-label-md flex items-center bg-white px-3 py-1 rounded-lg border-4 border-on-surface shadow-[4px_4px_0px_rgba(0,0,0,1)] font-black"><span class="material-symbols-outlined text-[20px] mr-1">trending_up</span>+5.8%</span>
                </div>
            </div>

            <!-- Card 3: Pending Approvals -->
            <div class="p-6 rounded-2xl bg-[#ff5757] border-4 border-on-surface relative overflow-hidden hover:-translate-y-2 hover:translate-x-2 hover:shadow-[0px_0px_0px_rgba(0,0,0,1)] shadow-[6px_6px_0px_rgba(0,0,0,1)] transition-all duration-200">
                <div class="absolute -right-4 -top-4 p-4 opacity-20"><span class="material-symbols-outlined text-[100px] text-on-surface">pending_actions</span></div>
                <div class="w-14 h-14 rounded-xl border-4 border-on-surface bg-white flex items-center justify-center text-on-surface mb-4 shadow-[4px_4px_0px_rgba(0,0,0,1)]">
                    <span class="material-symbols-outlined text-[32px]">hourglass_top</span>
                </div>
                                <!-- Statistik Menu -->
                <p class="font-label-md text-on-surface uppercase tracking-black font-black mb-2 text-lg mt-6">Statistik</p>
                <ul class="flex flex-col gap-2">
                    <li>
                        <a href="{{ route('statistik') }}" class="text-on-surface font-label-md flex items-center bg-white px-3 py-1 rounded-lg border-4 border-on-surface shadow-[4px_4px_0px_rgba(0,0,0,1)] font-black hover:bg-gray-100 transition-colors">Lihat Statistik</a>
                    </li>
                </ul>
                <p class="font-label-md text-on-surface uppercase tracking-black font-black mb-2 text-lg mt-6">Persetujuan</p>
                <div class="flex items-center gap-3">
                    <h2 class="font-headline-lg text-5xl text-on-surface font-black drop-shadow-[2px_2px_0px_#fff]">{{ number_format($pendingApprovals) }}</h2>
                    <a href="{{ route('admin.persetujuan') }}" class="text-on-surface font-label-md flex items-center bg-white px-3 py-1 rounded-lg border-4 border-on-surface shadow-[4px_4px_0px_rgba(0,0,0,1)] font-black hover:bg-gray-100 transition-colors">Tinjauan</a>
                </div>
            </div>
            
            <!-- Card 4: Monthly Borrows -->
            <div class="p-6 rounded-2xl bg-[#7ed957] border-4 border-on-surface relative overflow-hidden hover:-translate-y-2 hover:translate-x-2 hover:shadow-[0px_0px_0px_rgba(0,0,0,1)] shadow-[6px_6px_0px_rgba(0,0,0,1)] transition-all duration-200">
                <div class="absolute -right-4 -top-4 p-4 opacity-20"><span class="material-symbols-outlined text-[100px] text-on-surface">shopping_cart</span></div>
                <div class="w-14 h-14 rounded-xl border-4 border-on-surface bg-white flex items-center justify-center text-on-surface mb-4 shadow-[4px_4px_0px_rgba(0,0,0,1)]">
                    <span class="material-symbols-outlined text-[32px]">sync_alt</span>
                </div>
                <p class="font-label-md text-on-surface uppercase tracking-black font-black mb-2 text-lg">Peminjaman</p>
                <div class="flex items-center gap-3">
                    <h2 class="font-headline-lg text-5xl text-on-surface font-black drop-shadow-[2px_2px_0px_#fff]">{{ number_format($monthlyBorrows) }}</h2>
                    <span class="text-on-surface font-label-md flex items-center bg-white px-3 py-1 rounded-lg border-4 border-on-surface shadow-[4px_4px_0px_rgba(0,0,0,1)] font-black"><span class="material-symbols-outlined text-[20px] mr-1">trending_up</span>+12%</span>
                </div>
            </div>
        </div>

        @if(session('success'))
        <div class="bg-secondary/10 border-l-4 border-secondary text-secondary p-4 rounded-xl mt-4">
            <p class="font-body-md">{{ session('success') }}</p>
        </div>
        @endif
        @if($errors->any())
        <div class="bg-error/10 border-l-4 border-error text-error p-4 rounded-xl mt-4">
            <ul class="list-disc ml-5 font-body-md">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Recent Borrowings Data Table -->
        <div class="flex flex-col rounded-3xl bg-white border-4 border-on-surface shadow-[8px_8px_0px_rgba(0,0,0,1)] mt-10 overflow-hidden relative">
            <div class="p-6 border-b-4 border-on-surface flex items-center justify-between bg-[#cb6ce6]">
                <h3 class="font-headline-lg text-white font-black drop-shadow-[2px_2px_0px_rgba(0,0,0,1)] flex items-center gap-3 text-3xl">
                    <div class="w-12 h-12 rounded-xl bg-white border-4 border-on-surface flex items-center justify-center text-on-surface shadow-[4px_4px_0px_rgba(0,0,0,1)]">
                        <span class="material-symbols-outlined text-[28px]">table_rows</span>
                    </div>
                    SIRKULASI TERBARU
                </h3>
                <button class="px-5 py-3 rounded-xl bg-white text-on-surface font-label-md font-black flex items-center gap-2 border-4 border-on-surface shadow-[4px_4px_0px_rgba(0,0,0,1)] hover:translate-y-1 hover:translate-x-1 hover:shadow-[0px_0px_0px_rgba(0,0,0,1)] transition-all uppercase">
                    Lihat Semua <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                </button>
            </div>
            <div class="overflow-x-auto p-4 bg-[radial-gradient(#d1d5db_2px,transparent_2px)] [background-size:16px_16px]">
                <table class="w-full text-left border-collapse border-spacing-y-2">
                    <thead>
                        <tr class="text-on-surface font-label-md uppercase tracking-wider bg-white border-4 border-on-surface">
                            <th class="p-4 font-black">Judul Buku</th>
                            <th class="p-4 font-black">Tipe</th>
                            <th class="p-4 font-black">Kategori</th>
                            <th class="p-4 font-black">Stok</th>
                            <th class="p-4 font-black">ISBN</th>
                            <th class="p-4 font-black text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="font-body-sm text-on-surface space-y-4">
                        @forelse($books as $book)
                        <tr class="bg-white border-4 border-on-surface hover:bg-[#ffde59] transition-colors shadow-[4px_4px_0px_rgba(0,0,0,1)] rounded-xl group/row">
                            <td class="p-4 font-title-md">
                                <div class="flex items-center gap-3">
                                    <div class="w-12 h-12 rounded-lg bg-white border-4 border-on-surface flex items-center justify-center text-on-surface shadow-[2px_2px_0px_rgba(0,0,0,1)]">
                                        <span class="material-symbols-outlined text-[24px]">book_4</span>
                                    </div>
                                    <span class="font-black text-lg">{{ $book->title }}</span>
                                </div>
                            </td>
                            <td class="p-4 font-label-md uppercase font-black">
                                @if($book->type == 'physical')
                                    <span class="bg-[#38b6ff] px-3 py-1.5 rounded-lg border-2 border-on-surface shadow-[2px_2px_0px_rgba(0,0,0,1)]">Fisik</span>
                                @elseif($book->type == 'ebook')
                                    <span class="bg-[#ff5757] text-white px-3 py-1.5 rounded-lg border-2 border-on-surface shadow-[2px_2px_0px_rgba(0,0,0,1)]">Digital</span>
                                @else
                                    <span class="bg-[#cb6ce6] text-white px-3 py-1.5 rounded-lg border-2 border-on-surface shadow-[2px_2px_0px_rgba(0,0,0,1)]">Mix</span>
                                @endif
                            </td>
                            <td class="p-4 font-bold"><span class="bg-surface-container px-3 py-1.5 rounded-lg border-2 border-on-surface shadow-[2px_2px_0px_rgba(0,0,0,1)]">{{ $book->category }}</span></td>
                            <td class="p-4 font-black text-xl">{{ $book->stock }}</td>
                            <td class="p-4 font-bold">{{ $book->isbn ?? '-' }}</td>
                            <td class="p-4 text-center">
                                <button class="w-10 h-10 rounded-xl bg-white border-4 border-on-surface shadow-[2px_2px_0px_rgba(0,0,0,1)] flex items-center justify-center text-on-surface hover:bg-black hover:text-white transition-colors mx-auto"><span class="material-symbols-outlined text-[24px]">more_vert</span></button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="p-8 text-center text-on-surface bg-white border-4 border-on-surface shadow-[4px_4px_0px_rgba(0,0,0,1)] font-black text-xl">
                                <div class="flex flex-col items-center justify-center gap-4">
                                    <span class="material-symbols-outlined text-[64px]">auto_stories</span>
                                    <p>WADUH! BELUM ADA DATA BUKU!</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<!-- Modal removed -->

</body>
</html>
