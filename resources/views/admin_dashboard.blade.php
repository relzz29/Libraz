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

        <!-- Quick Stats Cards (Glassmorphism) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
            <!-- Card 1: Total Books -->
            <div class="p-5 rounded-2xl bg-gradient-to-br from-primary/10 to-transparent border border-primary/20 relative overflow-hidden group">
                <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:scale-110 transition-transform"><span class="material-symbols-outlined text-[60px] text-primary">auto_stories</span></div>
                <div class="w-10 h-10 rounded-lg bg-primary/20 flex items-center justify-center text-primary mb-3">
                    <span class="material-symbols-outlined">library_books</span>
                </div>
                <p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider mb-1">Total Buku</p>
                <div class="flex items-end gap-3">
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">{{ number_format($totalBooks) }}</h2>
                    <span class="text-secondary font-label-md flex items-center mb-1 bg-secondary/10 px-2 py-0.5 rounded-full"><span class="material-symbols-outlined text-[14px]">trending_up</span> +3.2%</span>
                </div>
            </div>
            
            <!-- Card 2: Active Users -->
            <div class="p-5 rounded-2xl bg-gradient-to-br from-secondary/10 to-transparent border border-secondary/20 relative overflow-hidden group">
                <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:scale-110 transition-transform"><span class="material-symbols-outlined text-[60px] text-secondary">group</span></div>
                <div class="w-10 h-10 rounded-lg bg-secondary/20 flex items-center justify-center text-secondary mb-3">
                    <span class="material-symbols-outlined">people</span>
                </div>
                <p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider mb-1">Akun Aktif</p>
                <div class="flex items-end gap-3">
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">{{ number_format($activeUsers) }}</h2>
                    <span class="text-secondary font-label-md flex items-center mb-1 bg-secondary/10 px-2 py-0.5 rounded-full"><span class="material-symbols-outlined text-[14px]">trending_up</span> +5.8%</span>
                </div>
            </div>

            <!-- Card 3: Pending Approvals -->
            <div class="p-5 rounded-2xl bg-gradient-to-br from-[#d97706]/10 to-transparent border border-[#d97706]/20 relative overflow-hidden group">
                <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:scale-110 transition-transform"><span class="material-symbols-outlined text-[60px] text-[#d97706]">pending_actions</span></div>
                <div class="w-10 h-10 rounded-lg bg-[#d97706]/20 flex items-center justify-center text-[#d97706] mb-3">
                    <span class="material-symbols-outlined">hourglass_top</span>
                </div>
                <p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider mb-1">Menunggu Persetujuan</p>
                <div class="flex items-end gap-3">
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">{{ number_format($pendingApprovals) }}</h2>
                    <span class="text-[#d97706] font-label-md flex items-center mb-1 bg-[#d97706]/10 px-2 py-0.5 rounded-full">Perlu Tinjauan</span>
                </div>
            </div>
            
            <!-- Card 4: Monthly Borrows -->
            <div class="p-5 rounded-2xl bg-gradient-to-br from-surface-tint/10 to-transparent border border-surface-tint/20 relative overflow-hidden group">
                <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:scale-110 transition-transform"><span class="material-symbols-outlined text-[60px] text-surface-tint">shopping_cart</span></div>
                <div class="w-10 h-10 rounded-lg bg-surface-tint/20 flex items-center justify-center text-surface-tint mb-3">
                    <span class="material-symbols-outlined">sync_alt</span>
                </div>
                <p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider mb-1">Peminjaman Bulan Ini</p>
                <div class="flex items-end gap-3">
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">{{ number_format($monthlyBorrows) }}</h2>
                    <span class="text-secondary font-label-md flex items-center mb-1 bg-secondary/10 px-2 py-0.5 rounded-full"><span class="material-symbols-outlined text-[14px]">trending_up</span> +12%</span>
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
        <div class="flex flex-col rounded-3xl bg-surface-container-lowest border border-surface-container-highest shadow-sm mt-4 overflow-hidden">
            <div class="p-5 border-b border-surface-container-high flex items-center justify-between">
                <h3 class="font-headline-sm text-headline-sm text-on-surface">Sirkulasi Terbaru</h3>
                <button class="text-primary hover:text-surface-tint font-label-md font-bold flex items-center gap-1 transition-colors">
                    Lihat Semua <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                </button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-surface-container-low text-on-surface-variant font-label-md uppercase tracking-wider border-b border-surface-container-high">
                            <th class="p-4 font-bold">Judul Buku</th>
                            <th class="p-4 font-bold">Tipe</th>
                            <th class="p-4 font-bold">Kategori</th>
                            <th class="p-4 font-bold">Stok</th>
                            <th class="p-4 font-bold">ISBN</th>
                            <th class="p-4 font-bold">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-surface-container-high font-body-sm text-on-surface">
                        @forelse($books as $book)
                        <tr class="hover:bg-surface-container-low transition-colors">
                            <td class="p-4 font-title-md">{{ $book->title }}</td>
                            <td class="p-4 font-body-md uppercase text-xs">{{ $book->type }}</td>
                            <td class="p-4 text-on-surface-variant">{{ $book->category }}</td>
                            <td class="p-4 text-on-surface-variant">{{ $book->stock }}</td>
                            <td class="p-4 text-on-surface-variant">{{ $book->isbn ?? '-' }}</td>
                            <td class="p-4">
                                <button class="text-outline hover:text-primary transition-colors"><span class="material-symbols-outlined text-[20px]">more_vert</span></button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="p-4 text-center text-on-surface-variant">Belum ada data buku.</td>
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
