<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
<title>Laporan - Admin BiblioZ</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&family=Space+Grotesk:wght@700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com"></script>
<style>
  @layer base {
    html, body {
      width: 100vw;
      margin: 0;
      padding: 0;
    }
    body {
      overscroll-behavior: none;
    }
    .pb-safe { padding-bottom: env(safe-area-inset-bottom, 0px); }
    .pt-safe { padding-top: env(safe-area-inset-top, 0px); }
  }
  ::-webkit-scrollbar { display: none; }

  /* Comic & Manga Neo-Brutalist Styles */
  .comic-page-rays {
    background-color: #faf6ee;
    background-image: repeating-conic-gradient(
      from 0deg at 50% -12%,
      rgba(0, 0, 0, 0.038) 0deg 2.2deg,
      transparent 2.2deg 8.5deg
    );
  }

  .comic-sidebar-rays {
    background-color: #fcf9f2;
    background-image: repeating-conic-gradient(
      from 135deg at 20% 12%,
      rgba(0, 0, 0, 0.04) 0deg 2deg,
      transparent 2deg 8.5deg
    );
  }

  .comic-title {
    font-family: 'Fredoka', 'Plus Jakarta Sans', sans-serif;
    background: linear-gradient(135deg, #7c3aed 0%, #c026d3 50%, #ec4899 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    -webkit-text-stroke: 2px #000;
    filter: drop-shadow(3px 3px 0px #000);
    letter-spacing: -0.02em;
  }

  .comic-btn-hover {
    transition: transform 0.12s ease, box-shadow 0.12s ease;
  }
  .comic-btn-hover:hover {
    transform: translate(2px, 2px);
    box-shadow: 1px 1px 0px #000 !important;
  }
</style>
</head>
<body class="comic-page-rays font-['Plus_Jakarta_Sans',sans-serif] text-black flex flex-col min-h-screen selection:bg-[#fbbf24] selection:text-black">
  
<!-- Desktop Sidebar -->
<aside class="hidden md:flex fixed left-0 top-0 h-screen w-64 comic-sidebar-rays border-r-[3.5px] border-black flex-col z-50">
  <!-- Brand Header -->
  <div class="h-20 flex items-center px-6 border-b-[3.5px] border-black gap-3 bg-[#fbf8f0]">
    <div class="relative flex-shrink-0">
      <svg class="w-10 h-10 filter drop-shadow-[2px_2px_0px_#000]" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M22 11 C15 8 8 9 5 11 L5 33 C8 31 15 30 22 32 Z" fill="#84cc16" stroke="#000" stroke-width="2.8" stroke-linejoin="round" />
        <path d="M22 11 C29 8 36 9 39 11 L39 33 C36 31 29 30 22 32 Z" fill="#facc15" stroke="#000" stroke-width="2.8" stroke-linejoin="round" />
        <path d="M22 10 L22 32" stroke="#000" stroke-width="2.8" />
        <path d="M12 10 C15 8 20 9 22 10 C24 9 29 8 32 10" stroke="#9333ea" stroke-width="2" stroke-linecap="round" fill="none" />
      </svg>
    </div>
    <div class="flex flex-col">
      <span class="font-black text-2xl tracking-wider text-black leading-none font-['Space_Grotesk',sans-serif]">BIBLIOZ</span>
      <span class="text-[9px] font-black tracking-[0.25em] text-black/60 uppercase leading-tight mt-1">BIBLIOZ</span>
    </div>
  </div>

  <!-- Navigation Menu -->
  <nav class="flex-1 p-4 flex flex-col gap-2 overflow-y-auto">
    <div class="px-3 pt-3 pb-1">
      <span class="font-black text-[12px] tracking-widest text-black uppercase">ADMIN PANEL</span>
    </div>
    
    <!-- Dashboard -->
    <a href="{{ route('admin') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-black font-extrabold hover:bg-black/5 hover:translate-x-1 transition-all">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <rect x="3" y="3" width="7" height="7" rx="1.5"/>
        <rect x="14" y="3" width="7" height="7" rx="1.5"/>
        <rect x="14" y="14" width="7" height="7" rx="1.5"/>
        <rect x="3" y="14" width="7" height="7" rx="1.5"/>
      </svg>
      <span class="text-base">Dashboard</span>
    </a>

    @php
      $currentRole = strtolower(session('admin_role', 'admin it'));
      $canManageBooks = in_array($currentRole, ['pustakawan', 'admin it', 'admin']);
      $canApprove = in_array($currentRole, ['pustakawan', 'kepala perpus', 'admin it', 'admin']);
      $canViewReports = in_array($currentRole, ['kepala perpus', 'admin it', 'admin']);
    @endphp

    <!-- Tambah Buku (Pustakawan & Admin IT) -->
    @if($canManageBooks)
    <a href="{{ route('admin.books.create') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-black font-extrabold hover:bg-black/5 hover:translate-x-1 transition-all">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
        <circle cx="12" cy="12" r="9"/>
        <line x1="12" y1="8" x2="12" y2="16"/>
        <line x1="8" y1="12" x2="16" y2="12"/>
      </svg>
      <span class="text-base">Tambah Buku</span>
    </a>
    @endif

    <!-- Persetujuan (Pustakawan, Kepala Perpus & Admin IT) -->
    @if($canApprove)
    <a href="{{ route('admin.persetujuan') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-black font-extrabold hover:bg-black/5 hover:translate-x-1 transition-all">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
        <rect x="8" y="2" width="8" height="4" rx="1"/>
        <path d="m9 14 2 2 4-4"/>
      </svg>
      <span class="text-base">Persetujuan</span>
    </a>
    @endif

    <!-- Active Laporan Item (Kepala Perpus & Admin IT) -->
    @if($canViewReports)
    <a href="{{ route('admin.laporan') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl bg-[#5f15e8] text-white font-black border-[2.5px] border-black shadow-[4px_4px_0px_#000] transition-all">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <line x1="18" y1="20" x2="18" y2="10"/>
        <line x1="12" y1="20" x2="12" y2="4"/>
        <line x1="6" y1="20" x2="6" y2="14"/>
      </svg>
      <span class="text-base tracking-wide">Laporan</span>
    </a>
    @endif

    <!-- Ke Tampilan User -->
    <a href="{{ route('katalog') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-black font-extrabold hover:bg-black/5 hover:translate-x-1 transition-all">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
      </svg>
      <span class="text-base">Ke Tampilan User</span>
    </a>
  </nav>

  <!-- Logout Button -->
  <div class="p-4 border-t-[3.5px] border-black bg-[#fbf8f0]">
    <form action="{{ route('admin.logout') }}" method="POST">
      @csrf
      <button type="submit" class="w-full flex items-center justify-center gap-2.5 px-4 py-2.5 rounded-xl bg-white text-black font-black border-2 border-black shadow-[3px_3px_0px_#000] comic-btn-hover">
        <span class="material-symbols-outlined text-[20px] text-red-600 font-bold">logout</span>
        <span>Keluar</span>
      </button>
    </form>
  </div>
</aside>

<!-- Topbar / Header -->
<header class="fixed top-0 w-full md:w-[calc(100%-16rem)] md:left-64 z-40 pt-safe bg-[#faf6ee]/95 backdrop-blur-md border-b-[3.5px] border-black">
    <div class="h-20 px-6 sm:px-8 flex items-center justify-between gap-4">
        <div class="flex flex-col min-w-0">
            <div class="flex items-center gap-2 flex-wrap">
                <span class="text-xl sm:text-2xl font-black text-black truncate tracking-tight">
                    Laporan Perpustakaan 📊
                </span>
                <span class="bg-[#facc15] text-black font-black text-xs px-2.5 py-0.5 rounded-lg border-2 border-black shadow-[3px_3px_0px_#000] uppercase tracking-wide">
                    {{ strtoupper(session('admin_role', 'ADMIN IT')) }}
                </span>
            </div>
            <span class="text-xs sm:text-sm font-semibold text-gray-800 mt-0.5">Statistik dan data sirkulasi perpustakaan.</span>
        </div>

        <div class="flex items-center gap-4 flex-shrink-0">
            <button type="button" onclick="window.print()" class="bg-[#8ce934] text-black font-black text-sm px-4 py-2.5 rounded-xl border-[2.5px] border-black shadow-[3px_3px_0px_#000] comic-btn-hover flex items-center gap-2 uppercase">
                <span class="material-symbols-outlined text-[20px]">print</span>
                <span>Cetak / PDF</span>
            </button>
            <div class="relative flex items-center justify-center" title="{{ auth()->user()->name ?? 'Aryandi Ramadhani' }}">
                <div class="w-11 h-11 rounded-full bg-[#5f15e8] border-[2.5px] border-black flex items-center justify-center text-white font-black text-sm shadow-[2px_2px_0px_#000]">
                    {{ strtoupper(substr(auth()->user()->name ?? 'Aryandi Ramadhani', 0, 2)) }}
                </div>
                <div class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-[#22c55e] rounded-full border-2 border-black"></div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="flex flex-col relative w-full md:w-[calc(100%-16rem)] md:ml-64 pt-24 pb-24 md:pb-10 min-h-screen">
    <div class="flex flex-col w-full px-6 sm:px-8 gap-6 max-w-7xl mx-auto">
        
        <!-- Header Section Title -->
        <div class="flex items-center justify-between gap-3 mt-1 flex-wrap">
            <h1 class="comic-title text-3xl sm:text-4xl font-black">
                Ringkasan Eksekutif
            </h1>
            <span class="px-4 py-2 rounded-xl bg-white text-black font-black border-2 border-black shadow-[3px_3px_0px_#000] text-sm">
                Periode: {{ now()->translatedFormat('F Y') }}
            </span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 mt-2">
            <!-- Ringkasan Buku Card -->
            <div class="bg-[#ffde59] p-6 sm:p-8 rounded-3xl border-[3.5px] border-black shadow-[8px_8px_0px_#000] relative overflow-hidden flex flex-col justify-between">
                <div>
                    <h3 class="mb-6 flex items-center gap-4 text-2xl sm:text-3xl font-black text-black">
                        <div class="w-14 h-14 rounded-2xl bg-white border-[2.5px] border-black flex items-center justify-center text-black shadow-[4px_4px_0px_#000]">
                            <span class="material-symbols-outlined text-[32px]">library_books</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="uppercase leading-none">Ringkasan Koleksi</span>
                            <span class="text-xs font-black tracking-wider bg-white px-2.5 py-0.5 border-2 border-black rounded-lg mt-1 w-fit">STATUS KATALOG</span>
                        </div>
                    </h3>
                    
                    <div class="space-y-4">
                        <div class="flex justify-between items-center p-4 bg-white rounded-2xl border-[2.5px] border-black shadow-[4px_4px_0px_#000]">
                            <span class="font-black text-black uppercase text-base flex items-center gap-3">
                                <span class="text-2xl">📚</span> Total Koleksi
                            </span>
                            <span class="text-2xl font-black bg-[#ffde59] border-2 border-black px-4 py-1 rounded-xl shadow-[2px_2px_0px_#000]">
                                {{ number_format($totalBooks) }}
                            </span>
                        </div>
                        <div class="flex justify-between items-center p-4 bg-white rounded-2xl border-[2.5px] border-black shadow-[4px_4px_0px_#000]">
                            <span class="font-black text-black uppercase text-base flex items-center gap-3">
                                <span class="text-2xl">📕</span> Buku Fisik
                            </span>
                            <span class="text-2xl font-black bg-[#38b6ff] border-2 border-black px-4 py-1 rounded-xl shadow-[2px_2px_0px_#000] text-black">
                                {{ number_format($totalPhysical) }}
                            </span>
                        </div>
                        <div class="flex justify-between items-center p-4 bg-white rounded-2xl border-[2.5px] border-black shadow-[4px_4px_0px_#000]">
                            <span class="font-black text-black uppercase text-base flex items-center gap-3">
                                <span class="text-2xl">📱</span> Koleksi E-Book
                            </span>
                            <span class="text-2xl font-black bg-[#ff5757] border-2 border-black px-4 py-1 rounded-xl shadow-[2px_2px_0px_#000] text-white">
                                {{ number_format($totalEbook) }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="mt-6 pt-4 border-t-2 border-black flex items-center justify-between">
                    <span class="text-xs font-bold text-black/70">Terakhir diperbarui: Hari ini</span>
                    <a href="{{ route('admin.books.create') }}" class="text-xs font-black underline text-black hover:text-[#5f15e8]">Kelola Koleksi →</a>
                </div>
            </div>

            <!-- Sirkulasi & Peminjaman Card -->
            <div class="bg-[#cb6ce6] p-6 sm:p-8 rounded-3xl border-[3.5px] border-black shadow-[8px_8px_0px_#000] relative overflow-hidden flex flex-col justify-between">
                <div>
                    <h3 class="mb-6 flex items-center gap-4 text-2xl sm:text-3xl font-black text-white drop-shadow-[2px_2px_0px_#000]">
                        <div class="w-14 h-14 rounded-2xl bg-white border-[2.5px] border-black flex items-center justify-center text-black shadow-[4px_4px_0px_#000]">
                            <span class="material-symbols-outlined text-[32px]">sync_alt</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="uppercase leading-none">Sirkulasi Siswa</span>
                            <span class="text-xs font-black tracking-wider bg-[#ffde59] px-2.5 py-0.5 border-2 border-black rounded-lg mt-1 w-fit text-black drop-shadow-none">TRANSAKSI</span>
                        </div>
                    </h3>
                    
                    <div class="flex items-center justify-center p-8 bg-white rounded-2xl border-[2.5px] border-black shadow-[4px_4px_0px_#000] relative overflow-hidden">
                        <div class="relative z-10 text-center flex flex-col items-center">
                            <div class="w-20 h-20 rounded-full bg-[#8ce934] flex items-center justify-center mb-4 border-2 border-black shadow-[3px_3px_0px_#000]">
                                <span class="material-symbols-outlined text-[40px] text-black">analytics</span>
                            </div>
                            <h4 class="text-7xl font-black text-black leading-none mb-3">
                                {{ number_format($totalBorrows) }}
                            </h4>
                            <p class="bg-[#ffde59] px-5 py-1.5 rounded-xl border-2 border-black shadow-[3px_3px_0px_#000] uppercase tracking-wider font-black text-sm">
                                Total Peminjaman Aktif & Selesai
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-6 pt-4 border-t-2 border-black flex items-center justify-between text-white font-bold text-xs drop-shadow-[1px_1px_0px_#000]">
                    <span>Status Transaksi Terintegrasi</span>
                    <a href="{{ route('admin.persetujuan') }}" class="underline font-black hover:text-[#ffde59]">Cek Persetujuan →</a>
                </div>
            </div>
        </div>

    </div>
</main>
</body>
</html>
