<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
<title>Admin Dashboard - Libraz</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&family=Space+Grotesk:wght@600;700;800&family=JetBrains+Mono:wght@600;700;800&display=swap" rel="stylesheet"/>
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

  /* Soft Brutalism Style Palette */
  .soft-page {
    background-color: #f8fafc;
    background-image: radial-gradient(rgba(148, 163, 184, 0.25) 1.2px, transparent 1.2px);
    background-size: 22px 22px;
  }

  .soft-title {
    font-family: 'Space Grotesk', 'Plus Jakarta Sans', sans-serif;
    font-weight: 800;
    color: #0f172a;
    letter-spacing: -0.025em;
  }

  .soft-btn-hover {
    transition: transform 0.12s ease, box-shadow 0.12s ease, background-color 0.12s ease;
  }
  .soft-btn-hover:hover {
    transform: translate(1.5px, 1.5px);
    box-shadow: 1.5px 1.5px 0px #0f172a !important;
  }

  .soft-card-hover {
    transition: transform 0.15s ease, box-shadow 0.15s ease;
  }
  .soft-card-hover:hover {
    transform: translate(-1.5px, -1.5px);
    box-shadow: 5px 5px 0px #0f172a !important;
  }
</style>
</head>
<body class="soft-page font-['Plus_Jakarta_Sans',sans-serif] text-slate-900 flex flex-col min-h-screen selection:bg-amber-200 selection:text-slate-900">
  
<!-- Desktop Sidebar (Soft Brutalism) -->
<aside class="hidden md:flex fixed left-0 top-0 h-screen w-64 bg-white border-r-2 border-slate-900 flex-col z-50">
  <!-- Brand Header -->
  <div class="h-20 flex items-center px-6 border-b-2 border-slate-900 gap-3 bg-white">
    <div class="relative flex-shrink-0">
      <svg class="w-10 h-10 filter drop-shadow-[1.5px_1.5px_0px_#0f172a]" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M22 11 C15 8 8 9 5 11 L5 33 C8 31 15 30 22 32 Z" fill="#6ee7b7" stroke="#0f172a" stroke-width="2.2" stroke-linejoin="round" />
        <path d="M22 11 C29 8 36 9 39 11 L39 33 C36 31 29 30 22 32 Z" fill="#fde047" stroke="#0f172a" stroke-width="2.2" stroke-linejoin="round" />
        <path d="M22 10 L22 32" stroke="#0f172a" stroke-width="2.2" />
        <path d="M12 10 C15 8 20 9 22 10 C24 9 29 8 32 10" stroke="#8b5cf6" stroke-width="2" stroke-linecap="round" fill="none" />
      </svg>
    </div>
    <div class="flex flex-col">
      <span class="font-extrabold text-2xl tracking-tight text-slate-900 leading-none font-['Space_Grotesk',sans-serif]">LIBRAZ</span>
      <span class="text-[9px] font-bold tracking-[0.2em] text-slate-500 uppercase leading-tight mt-1">PERPUSTAKAAN</span>
    </div>
  </div>

  <!-- Navigation Menu -->
  <nav class="flex-1 p-4 flex flex-col gap-1.5 overflow-y-auto">
    <div class="px-3 pt-2 pb-1">
      <span class="font-bold text-[11px] tracking-wider text-slate-400 uppercase">ADMIN PANEL</span>
    </div>
    
    <!-- Active Dashboard Item (Soft Brutalism) -->
    <a href="{{ route('admin') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl bg-indigo-600 text-white font-extrabold border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] transition-all">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <rect x="3" y="3" width="7" height="7" rx="1.5"/>
        <rect x="14" y="3" width="7" height="7" rx="1.5"/>
        <rect x="14" y="14" width="7" height="7" rx="1.5"/>
        <rect x="3" y="14" width="7" height="7" rx="1.5"/>
      </svg>
      <span class="text-sm tracking-wide">Dashboard</span>
    </a>

    @php
      $currentRole = strtolower(session('admin_role', 'admin it'));
      $canManageBooks = in_array($currentRole, ['pustakawan', 'admin it', 'admin']);
      $canApprove = in_array($currentRole, ['pustakawan', 'kepala perpus', 'admin it', 'admin']);
      $canViewReports = in_array($currentRole, ['kepala perpus', 'admin it', 'admin', 'pustakawan']);
    @endphp

    <!-- Tambah Buku (Pustakawan & Admin IT) -->
    @if($canManageBooks)
    <a href="{{ route('admin.books.create') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-slate-700 font-bold hover:bg-slate-100 hover:text-slate-900 transition-all">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
        <circle cx="12" cy="12" r="9"/>
        <line x1="12" y1="8" x2="12" y2="16"/>
        <line x1="8" y1="12" x2="16" y2="12"/>
      </svg>
      <span class="text-sm">Tambah Buku</span>
    </a>
    @endif

    <!-- Persetujuan (Pustakawan, Kepala Perpus & Admin IT) -->
    @if($canApprove)
    <a href="{{ route('admin.persetujuan') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-slate-700 font-bold hover:bg-slate-100 hover:text-slate-900 transition-all relative">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
        <rect x="8" y="2" width="8" height="4" rx="1"/>
        <path d="m9 14 2 2 4-4"/>
      </svg>
      <span class="text-sm">Persetujuan</span>
      @if(isset($pendingApprovals) && $pendingApprovals > 0)
        <span class="ml-auto px-2 py-0.5 rounded-full bg-rose-500 text-white font-extrabold text-[11px] border border-slate-900 shadow-[1px_1px_0px_#0f172a] animate-pulse">
          {{ $pendingApprovals }}
        </span>
      @endif
    </a>
    @endif

    <!-- Laporan (Kepala Perpus & Admin IT & Pustakawan) -->
    @if($canViewReports)
    <a href="{{ route('admin.laporan') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-slate-700 font-bold hover:bg-slate-100 hover:text-slate-900 transition-all">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="18" y1="20" x2="18" y2="10"/>
        <line x1="12" y1="20" x2="12" y2="4"/>
        <line x1="6" y1="20" x2="6" y2="14"/>
      </svg>
      <span class="text-sm">Laporan</span>
    </a>
    @endif

    <!-- Ke Tampilan User -->
    <a href="{{ route('katalog') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-slate-700 font-bold hover:bg-slate-100 hover:text-slate-900 transition-all">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
      </svg>
      <span class="text-sm">Ke Tampilan User</span>
    </a>
  </nav>

  <!-- Logout Button -->
  <div class="p-4 border-t-2 border-slate-900 bg-white">
    <form action="{{ route('admin.logout') }}" method="POST">
      @csrf
      <button type="submit" class="w-full flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl bg-white hover:bg-rose-50 text-slate-800 font-extrabold border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] soft-btn-hover text-sm">
        <span class="material-symbols-outlined text-[18px] text-rose-600 font-bold">logout</span>
        <span>Keluar</span>
      </button>
    </form>
  </div>
</aside>

<!-- Topbar / Header (Soft Brutalism) -->
<header class="fixed top-0 w-full md:w-[calc(100%-16rem)] md:left-64 z-40 pt-safe bg-white/95 backdrop-blur-md border-b-2 border-slate-900">
    <div class="h-20 px-6 sm:px-8 flex items-center justify-between gap-4">
        <!-- Left: Greetings & Role Badge -->
        <div class="flex flex-col min-w-0">
            <div class="flex items-center gap-2.5 flex-wrap">
                <span class="text-xl sm:text-2xl font-extrabold text-slate-900 truncate tracking-tight font-['Space_Grotesk',sans-serif]">
                    Halo, {{ auth()->user()->name ?? 'Aryandi Ramadhani' }} 👋
                </span>
                <span class="bg-amber-100 text-amber-950 font-black text-xs px-2.5 py-0.5 rounded-lg border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] uppercase tracking-wide">
                    {{ strtoupper(session('admin_role', 'ADMIN IT')) }}
                </span>
            </div>
            <span class="text-xs sm:text-sm font-medium text-slate-600 mt-0.5">Kelola seluruh aktivitas dan koleksi perpustakaan.</span>
        </div>

        <!-- Right: Search Bar & Profile Avatar -->
        <div class="flex items-center gap-4 flex-shrink-0">
            <!-- Search bar with Live Dropdown -->
            <div class="relative w-72 lg:w-96 hidden sm:block">
                <form action="{{ route('admin') }}" method="GET" class="m-0" id="adminSearchForm">
                    <div class="relative">
                        <input type="text" 
                               name="search" 
                               id="adminSearchInput"
                               value="{{ $search ?? '' }}"
                               placeholder="Cari buku, user, resi..." 
                               autocomplete="off"
                               class="w-full bg-slate-50 border-2 border-slate-900 rounded-full py-2 pl-10 pr-9 shadow-[2px_2px_0px_#0f172a] text-sm font-bold text-slate-900 focus:outline-none focus:bg-white placeholder-slate-400">
                        <svg class="w-4 h-4 absolute left-3.5 top-3 text-slate-700 stroke-[2.2]" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <circle cx="11" cy="11" r="7"/>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                        </svg>
                        <button type="button" id="clearSearchBtn" class="{{ empty($search) ? 'hidden' : '' }} absolute right-3 top-2.5 text-slate-400 hover:text-slate-900">
                            <span class="material-symbols-outlined text-[18px]">close</span>
                        </button>
                    </div>
                </form>

                <!-- Live Search Results Dropdown -->
                <div id="liveSearchResults" class="hidden absolute top-12 left-0 right-0 bg-white border-2 border-slate-900 rounded-2xl shadow-[4px_4px_0px_#0f172a] z-50 overflow-hidden max-h-[420px] overflow-y-auto">
                    <div id="searchLoading" class="hidden p-4 text-center font-bold text-xs text-slate-600">
                        <span class="inline-block animate-spin mr-1">⚡</span> Mencari data...
                    </div>
                    <div id="searchResultsContent" class="divide-y divide-slate-100"></div>
                </div>
            </div>

            <!-- Profile Avatar -->
            <div class="relative flex items-center justify-center cursor-pointer" title="{{ auth()->user()->name ?? 'Aryandi Ramadhani' }} ({{ session('admin_role', 'Admin IT') }})">
                <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-indigo-600 border-2 border-slate-900 flex items-center justify-center text-white font-extrabold text-sm shadow-[2px_2px_0px_#0f172a]">
                    {{ strtoupper(substr(auth()->user()->name ?? 'Aryandi Ramadhani', 0, 2)) }}
                </div>
                <!-- Status dot -->
                <div class="absolute bottom-0 right-0 w-3 h-3 sm:w-3.5 sm:h-3.5 bg-emerald-500 rounded-full border-2 border-slate-900"></div>
            </div>
        </div>
    </div>
</header>

<!-- Main Dashboard Content -->
<main class="flex flex-col relative w-full md:w-[calc(100%-16rem)] md:ml-64 pt-24 pb-24 md:pb-10 min-h-screen">
    <div class="flex flex-col w-full px-6 sm:px-8 gap-6 max-w-7xl mx-auto">
        
        <!-- Header: Overview Title -->
        <div class="flex items-center justify-between gap-3 mt-1 flex-wrap">
            <div class="flex items-center gap-3">
                <h1 class="soft-title text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900">
                    Overview Sistem
                </h1>
                <span class="bg-indigo-100 text-indigo-900 font-extrabold text-xs px-3 py-1 rounded-full border-2 border-slate-900 shadow-[1.5px_1.5px_0px_#0f172a] flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span>LIVE AKTIF</span>
                </span>
            </div>

            <div class="flex items-center gap-2">
                <a href="{{ route('admin.laporan') }}" class="px-3.5 py-1.5 rounded-xl bg-white hover:bg-slate-50 text-slate-900 font-extrabold text-xs border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] soft-btn-hover flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[16px] text-indigo-600">bar_chart</span>
                    <span>Buka Laporan Lengkap</span>
                </a>
            </div>
        </div>

        <!-- 4 Quick Stats Cards (Soft Brutalism Pastel Palette) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            
            <!-- ================= CARD 1: TOTAL BUKU (Amber Pastel) ================= -->
            <div class="p-5 rounded-2xl bg-amber-100 border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] relative overflow-hidden soft-card-hover flex flex-col justify-between min-h-[190px]">
                <!-- Top Row: Icon Square & Graphic -->
                <div class="flex items-start justify-between relative z-10 mb-3">
                    <div class="w-11 h-11 rounded-xl bg-white border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] flex items-center justify-center text-slate-900">
                        <span class="material-symbols-outlined text-2xl text-amber-700">menu_book</span>
                    </div>

                    <div class="w-9 h-9 rounded-full bg-white/70 border border-slate-900/20 flex items-center justify-center text-amber-800">
                        <span class="material-symbols-outlined text-[18px]">library_books</span>
                    </div>
                </div>

                <!-- Label & Value -->
                <div class="relative z-10">
                    <p class="font-extrabold text-amber-950 uppercase tracking-wider text-xs mb-1">TOTAL BUKU</p>
                    <div class="flex items-center gap-3">
                        <span class="text-4xl sm:text-5xl font-extrabold text-slate-900 tracking-tight leading-none font-['Space_Grotesk',sans-serif]">
                            {{ number_format($totalBooks) }}
                        </span>
                        <!-- Dynamic Pill Badge -->
                        <div class="border-2 border-slate-900 rounded-xl px-2.5 py-1 shadow-[2px_2px_0px_#0f172a] flex items-center gap-1 font-extrabold text-xs {{ $bookGrowth['color'] ?? 'bg-white text-slate-900' }}" title="Pertumbuhan buku baru bulan ini dibanding bulan lalu">
                            <span class="text-sm font-black">
                                @if(($bookGrowth['direction'] ?? '') === 'up') ↗
                                @elseif(($bookGrowth['direction'] ?? '') === 'down') ↘
                                @else •
                                @endif
                            </span>
                            <span>{{ $bookGrowth['text'] ?? '0.0%' }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ================= CARD 2: AKUN AKTIF (Sky Pastel) ================= -->
            <div class="p-5 rounded-2xl bg-sky-100 border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] relative overflow-hidden soft-card-hover flex flex-col justify-between min-h-[190px]">
                <!-- Top Row: Icon Square -->
                <div class="flex items-start justify-between relative z-10 mb-3">
                    <div class="w-11 h-11 rounded-xl bg-white border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] flex items-center justify-center text-slate-900">
                        <span class="material-symbols-outlined text-2xl text-sky-700">group</span>
                    </div>

                    <div class="w-9 h-9 rounded-full bg-white/70 border border-slate-900/20 flex items-center justify-center text-sky-800">
                        <span class="material-symbols-outlined text-[18px]">badge</span>
                    </div>
                </div>

                <!-- Label & Value -->
                <div class="relative z-10">
                    <p class="font-extrabold text-sky-950 uppercase tracking-wider text-xs mb-1">AKUN AKTIF</p>
                    <div class="flex items-center gap-3">
                        <span class="text-4xl sm:text-5xl font-extrabold text-slate-900 tracking-tight leading-none font-['Space_Grotesk',sans-serif]">
                            {{ number_format($activeUsers) }}
                        </span>
                        <!-- Dynamic Pill Badge -->
                        <div class="border-2 border-slate-900 rounded-xl px-2.5 py-1 shadow-[2px_2px_0px_#0f172a] flex items-center gap-1 font-extrabold text-xs {{ $userGrowth['color'] ?? 'bg-white text-slate-900' }}" title="Pertumbuhan anggota baru bulan ini dibanding bulan lalu">
                            <span class="text-sm font-black">
                                @if(($userGrowth['direction'] ?? '') === 'up') ↗
                                @elseif(($userGrowth['direction'] ?? '') === 'down') ↘
                                @else •
                                @endif
                            </span>
                            <span>{{ $userGrowth['text'] ?? '0.0%' }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ================= CARD 3: STATISTIK & PERSETUJUAN (Rose Pastel) ================= -->
            <div class="p-5 rounded-2xl bg-rose-100 border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] relative overflow-hidden soft-card-hover flex flex-col justify-between min-h-[190px]">
                <!-- Top Row: Icon Square -->
                <div class="flex items-start justify-between relative z-10 mb-2">
                    <div class="w-11 h-11 rounded-xl bg-white border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] flex items-center justify-center text-slate-900">
                        <span class="material-symbols-outlined text-2xl text-rose-700">pending_actions</span>
                    </div>

                    <a href="{{ route('statistik') }}" class="bg-white hover:bg-slate-50 text-slate-900 font-extrabold text-xs py-1 px-2.5 rounded-lg border-2 border-slate-900 shadow-[1.5px_1.5px_0px_#0f172a] soft-btn-hover flex items-center gap-1">
                        <span>Statistik</span>
                        <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                    </a>
                </div>

                <!-- Lower Section: PERSETUJUAN & Action Pill -->
                <div class="relative z-10">
                    <p class="font-extrabold text-rose-950 uppercase tracking-wider text-xs mb-1">PERLU DISETUJUI</p>
                    <div class="flex items-center justify-between gap-2">
                        <span class="text-4xl font-extrabold text-slate-900 tracking-tight leading-none font-['Space_Grotesk',sans-serif]">
                            {{ number_format($pendingApprovals) }}
                        </span>
                        <a href="{{ route('admin.persetujuan') }}" class="bg-white hover:bg-slate-50 text-slate-900 font-extrabold text-xs py-1.5 px-3 rounded-xl border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] soft-btn-hover flex items-center gap-1">
                            <span>Tinjau</span>
                            <span class="material-symbols-outlined text-[15px] text-rose-600">chevron_right</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- ================= CARD 4: PEMINJAMAN (Emerald Pastel) ================= -->
            <div class="p-5 rounded-2xl bg-emerald-100 border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] relative overflow-hidden soft-card-hover flex flex-col justify-between min-h-[190px]">
                <!-- Top Row: Icon Square -->
                <div class="flex items-start justify-between relative z-10 mb-3">
                    <div class="w-11 h-11 rounded-xl bg-white border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] flex items-center justify-center text-slate-900">
                        <span class="material-symbols-outlined text-2xl text-emerald-700">sync_alt</span>
                    </div>

                    <span class="text-[10px] font-extrabold uppercase bg-slate-900 text-white px-2 py-0.5 rounded-md tracking-wider">
                        {{ $currentMonthName ?? 'BULAN INI' }}
                    </span>
                </div>

                <!-- Label & Value -->
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-1">
                        <p class="font-extrabold text-emerald-950 uppercase tracking-wider text-xs">PEMINJAMAN BULAN INI</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-4xl sm:text-5xl font-extrabold text-slate-900 tracking-tight leading-none font-['Space_Grotesk',sans-serif]">
                            {{ number_format($monthlyBorrows) }}
                        </span>
                        <!-- Dynamic Pill Badge -->
                        <div class="border-2 border-slate-900 rounded-xl px-2.5 py-1 shadow-[2px_2px_0px_#0f172a] flex items-center gap-1 font-extrabold text-xs {{ $borrowGrowth['color'] ?? 'bg-white text-slate-900' }}" title="Pertumbuhan peminjaman bulan ini dibanding bulan lalu">
                            <span class="text-sm font-black">
                                @if(($borrowGrowth['direction'] ?? '') === 'up') ↗
                                @elseif(($borrowGrowth['direction'] ?? '') === 'down') ↘
                                @else •
                                @endif
                            </span>
                            <span>{{ $borrowGrowth['text'] ?? '0.0%' }}</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Notification Banner (Soft Brutalism Alert) -->
        @if(session('error'))
        <div class="w-full bg-rose-100 border-2 border-slate-900 rounded-2xl p-4 shadow-[3px_3px_0px_#0f172a] flex items-center gap-3.5">
            <div class="w-8 h-8 rounded-xl bg-white border-2 border-slate-900 flex items-center justify-center flex-shrink-0 text-slate-900 shadow-[2px_2px_0px_#0f172a]">
                <span class="material-symbols-outlined text-[20px] text-rose-600 font-bold">lock</span>
            </div>
            <div class="flex flex-col">
                <span class="text-xs font-extrabold uppercase tracking-wide text-rose-900">AKSES DIBATASI (ROLE-BASED CONTROL)</span>
                <span class="text-slate-900 font-bold text-sm">{{ session('error') }}</span>
            </div>
        </div>
        @else
        <div class="w-full bg-emerald-100 border-2 border-slate-900 rounded-xl p-3 px-4 shadow-[3px_3px_0px_#0f172a] flex items-center gap-3">
            <div class="w-6 h-6 rounded-full border-2 border-slate-900 flex items-center justify-center flex-shrink-0 bg-white">
                <svg class="w-3.5 h-3.5 text-emerald-700 stroke-[3]" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <span class="text-slate-900 font-bold text-sm">
                {{ session('success') ?? ('Berhasil masuk sebagai ' . (session('admin_role') ?? 'Admin IT') . '. Seluruh sistem siap beroperasi.') }}
            </span>
        </div>
        @endif

        @if(isset($errors) && $errors->any())
        <div class="bg-rose-100 border-2 border-slate-900 text-slate-900 p-4 rounded-xl shadow-[3px_3px_0px_#0f172a]">
            <ul class="list-disc ml-5 font-bold text-sm space-y-1">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Recent Books / Inventory Data Table (Soft Brutalism) -->
        <div class="flex flex-col rounded-2xl bg-white border-2 border-slate-900 shadow-[4px_4px_0px_#0f172a] overflow-hidden">
            <!-- Table Card Header -->
            <div class="p-4 sm:p-5 border-b-2 border-slate-900 flex items-center justify-between bg-violet-100 flex-wrap gap-3">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-white border-2 border-slate-900 flex items-center justify-center text-slate-900 shadow-[2px_2px_0px_#0f172a]">
                        <span class="material-symbols-outlined text-[22px] text-violet-700">table_rows</span>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="text-slate-900 font-extrabold text-xl sm:text-2xl tracking-tight font-['Space_Grotesk',sans-serif]">
                            {{ !empty($search) ? 'Hasil Pencarian: "' . $search . '"' : 'Daftar Koleksi Buku' }}
                        </h3>
                        <span class="text-xs font-semibold text-slate-600">Kelola metadata, stok fisik, dan tautan digital.</span>
                    </div>
                    @if(!empty($search) || (!empty($selectedCategory) && $selectedCategory !== 'all') || (!empty($selectedType) && $selectedType !== 'all'))
                        <a href="{{ route('admin') }}" class="px-2.5 py-1 rounded-lg bg-white hover:bg-rose-50 text-slate-800 font-extrabold text-xs border-2 border-slate-900 shadow-[1.5px_1.5px_0px_#0f172a] soft-btn-hover flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px] text-rose-600">close</span> Reset Filter
                        </a>
                    @endif
                </div>
                <div class="flex items-center gap-2">
                    <span class="px-3 py-1.5 rounded-xl bg-white text-slate-800 font-extrabold border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] text-xs uppercase hidden sm:inline-block">
                        Total: {{ $books->total() }} Koleksi
                    </span>
                    @if($canManageBooks)
                    <a href="{{ route('admin.books.create') }}" class="px-4 py-2 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white font-extrabold flex items-center gap-1.5 border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] soft-btn-hover text-xs sm:text-sm">
                        <span class="material-symbols-outlined text-[18px]">add_circle</span> Tambah Buku
                    </a>
                    @endif
                </div>
            </div>

            <!-- Filter Controls Bar -->
            <div class="p-3.5 sm:p-4 bg-slate-50 border-b-2 border-slate-900 flex flex-wrap items-center justify-between gap-3">
                <form action="{{ route('admin') }}" method="GET" class="flex flex-wrap items-center gap-2.5 w-full sm:w-auto" id="filterForm">
                    @if(!empty($search))
                        <input type="hidden" name="search" value="{{ $search }}">
                    @endif
                    
                    <!-- Filter Kategori -->
                    <div class="flex items-center gap-1.5">
                        <label class="text-xs font-extrabold uppercase text-slate-700 hidden sm:inline-flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">category</span> Kategori:
                        </label>
                        <select name="category" onchange="document.getElementById('filterForm').submit()" class="bg-white border-2 border-slate-900 rounded-xl px-3 py-1.5 text-xs font-bold text-slate-900 shadow-[2px_2px_0px_#0f172a] cursor-pointer focus:outline-none">
                            <option value="all" {{ empty($selectedCategory) || $selectedCategory === 'all' ? 'selected' : '' }}>Semua Kategori</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat }}" {{ ($selectedCategory ?? '') === $cat ? 'selected' : '' }}>{{ $cat }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Filter Tipe -->
                    <div class="flex items-center gap-1.5">
                        <label class="text-xs font-extrabold uppercase text-slate-700 hidden sm:inline-flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">menu_book</span> Format:
                        </label>
                        <select name="type" onchange="document.getElementById('filterForm').submit()" class="bg-white border-2 border-slate-900 rounded-xl px-3 py-1.5 text-xs font-bold text-slate-900 shadow-[2px_2px_0px_#0f172a] cursor-pointer focus:outline-none">
                            <option value="all" {{ empty($selectedType) || $selectedType === 'all' ? 'selected' : '' }}>Semua Format</option>
                            <option value="physical" {{ ($selectedType ?? '') === 'physical' ? 'selected' : '' }}>Buku Fisik</option>
                            <option value="ebook" {{ ($selectedType ?? '') === 'ebook' ? 'selected' : '' }}>E-Book / Digital</option>
                            <option value="both" {{ ($selectedType ?? '') === 'both' ? 'selected' : '' }}>Campuran / Mix</option>
                        </select>
                    </div>
                </form>

                <div class="text-xs font-bold text-slate-600 ml-auto hidden md:block">
                    Menampilkan <span class="font-extrabold text-slate-900">{{ $books->firstItem() ?? 0 }}</span> - <span class="font-extrabold text-slate-900">{{ $books->lastItem() ?? 0 }}</span> dari <span class="font-extrabold text-slate-900">{{ $books->total() }}</span> buku
                </div>
            </div>

            <!-- Table Container -->
            <div class="overflow-x-auto p-4 bg-slate-50/50">
                <table class="w-full text-left border-separate border-spacing-y-2">
                    <thead>
                        <tr class="text-slate-700 uppercase tracking-wider text-xs font-extrabold">
                            <th class="p-3.5 pl-4">Judul Buku</th>
                            <th class="p-3.5">Format</th>
                            <th class="p-3.5">Kategori</th>
                            <th class="p-3.5">Lokasi Rak</th>
                            <th class="p-3.5">Stok</th>
                            <th class="p-3.5">ISBN</th>
                            <th class="p-3.5 text-center pr-4">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-slate-900">
                        @forelse($books as $book)
                        <tr class="bg-white border-2 border-slate-900 hover:bg-amber-50/50 transition-colors shadow-[2px_2px_0px_#0f172a] rounded-xl group/row">
                            <td class="p-3.5 pl-4 rounded-l-xl border-y-2 border-l-2 border-slate-900">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-slate-100 border-2 border-slate-900 flex items-center justify-center text-slate-700 shadow-[1.5px_1.5px_0px_#0f172a] overflow-hidden flex-shrink-0">
                                        @if(!empty($book->cover_image_url))
                                            <img src="{{ $book->cover_image_url }}" alt="{{ $book->title }}" class="w-full h-full object-cover">
                                        @else
                                            <span class="material-symbols-outlined text-[20px]">book_4</span>
                                        @endif
                                    </div>
                                    <div class="flex flex-col min-w-0">
                                        <span class="font-extrabold text-sm sm:text-base text-slate-900 line-clamp-1 group-hover/row:text-indigo-600 transition-colors">{{ $book->title }}</span>
                                        <span class="text-xs font-semibold text-slate-500 truncate">{{ $book->author }}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="p-3.5 uppercase font-bold text-xs border-y-2 border-slate-900">
                                @if($book->type == 'physical')
                                    <span class="bg-sky-100 text-sky-900 px-2.5 py-1 rounded-lg border border-slate-900 shadow-[1.5px_1.5px_0px_#0f172a]">Fisik</span>
                                @elseif($book->type == 'ebook')
                                    <span class="bg-rose-100 text-rose-900 px-2.5 py-1 rounded-lg border border-slate-900 shadow-[1.5px_1.5px_0px_#0f172a]">Digital</span>
                                @else
                                    <span class="bg-violet-100 text-violet-900 px-2.5 py-1 rounded-lg border border-slate-900 shadow-[1.5px_1.5px_0px_#0f172a]">Mix</span>
                                @endif
                            </td>
                            <td class="p-3.5 font-bold border-y-2 border-slate-900">
                                <span class="bg-slate-100 text-slate-800 px-2.5 py-1 rounded-lg border border-slate-900 shadow-[1.5px_1.5px_0px_#0f172a] text-xs">
                                    {{ $book->category }}
                                </span>
                            </td>
                            <td class="p-3.5 font-bold text-xs border-y-2 border-slate-900">
                                <span class="bg-amber-100 text-amber-950 px-2.5 py-1 rounded-lg border border-slate-900 shadow-[1.5px_1.5px_0px_#0f172a] flex items-center gap-1 w-fit">
                                    <span class="material-symbols-outlined text-[14px]">shelves</span>
                                    {{ $book->rack ?? 'Rak Utama' }}
                                </span>
                            </td>
                            <td class="p-3.5 font-extrabold text-base border-y-2 border-slate-900 {{ $book->stock > 0 ? 'text-slate-900' : 'text-rose-600' }}">
                                {{ $book->stock }}
                            </td>
                            <td class="p-3.5 font-mono text-xs font-bold text-slate-600 border-y-2 border-slate-900">
                                {{ $book->isbn ?? '-' }}
                            </td>
                            <td class="p-3.5 text-center pr-4 rounded-r-xl border-y-2 border-r-2 border-slate-900">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('admin.books.edit', $book->id) }}" class="w-8 h-8 rounded-lg bg-white hover:bg-slate-100 text-slate-800 border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] inline-flex items-center justify-center soft-btn-hover" title="Edit Buku">
                                        <span class="material-symbols-outlined text-[17px]">edit</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="p-8 text-center text-slate-900 bg-white border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] rounded-xl font-extrabold text-base">
                                <div class="flex flex-col items-center justify-center gap-2 py-4">
                                    <span class="material-symbols-outlined text-[48px] text-slate-400">auto_stories</span>
                                    <p class="text-slate-800">Tidak ada data buku yang sesuai dengan pencarian atau filter.</p>
                                    @if(!empty($search) || !empty($selectedCategory) || !empty($selectedType))
                                        <a href="{{ route('admin') }}" class="px-4 py-2 mt-2 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-extrabold text-xs border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] soft-btn-hover">
                                            Reset Semua Filter
                                        </a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Soft-Brutalist Pagination Bar -->
            @if($books->hasPages())
            <div class="p-4 bg-white border-t-2 border-slate-900 flex flex-wrap items-center justify-between gap-3">
                <div class="text-xs font-bold text-slate-600">
                    Halaman <span class="font-extrabold text-slate-900">{{ $books->currentPage() }}</span> dari <span class="font-extrabold text-slate-900">{{ $books->lastPage() }}</span>
                </div>
                <div class="flex items-center gap-1.5 flex-wrap">
                    {{-- Previous Page Link --}}
                    @if ($books->onFirstPage())
                        <span class="px-3 py-1.5 rounded-xl bg-slate-100 text-slate-400 font-bold text-xs border-2 border-slate-300 cursor-not-allowed flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">chevron_left</span> Prev
                        </span>
                    @else
                        <a href="{{ $books->previousPageUrl() }}" class="px-3 py-1.5 rounded-xl bg-white hover:bg-slate-50 text-slate-800 font-extrabold text-xs border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] soft-btn-hover flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">chevron_left</span> Prev
                        </a>
                    @endif

                    {{-- Numeric Pagination Elements --}}
                    @foreach ($books->getUrlRange(max(1, $books->currentPage() - 2), min($books->lastPage(), $books->currentPage() + 2)) as $page => $url)
                        @if ($page == $books->currentPage())
                            <span class="w-8 h-8 rounded-xl bg-indigo-600 text-white font-extrabold text-xs border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] flex items-center justify-center">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}" class="w-8 h-8 rounded-xl bg-white hover:bg-slate-50 text-slate-800 font-extrabold text-xs border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] soft-btn-hover flex items-center justify-center">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($books->hasMorePages())
                        <a href="{{ $books->nextPageUrl() }}" class="px-3 py-1.5 rounded-xl bg-white hover:bg-slate-50 text-slate-800 font-extrabold text-xs border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] soft-btn-hover flex items-center gap-1">
                            Next <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                        </a>
                    @else
                        <span class="px-3 py-1.5 rounded-xl bg-slate-100 text-slate-400 font-bold text-xs border-2 border-slate-300 cursor-not-allowed flex items-center gap-1">
                            Next <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                        </span>
                    @endif
                </div>
            </div>
            @endif
        </div>
    </div>
</main>

<!-- Mobile Bottom Navigation Bar (md:hidden) -->
<nav class="md:hidden fixed bottom-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-t-2 border-slate-900 px-3 py-2 flex items-center justify-around pb-safe shadow-[0_-3px_10px_rgba(15,23,42,0.06)]">
  <!-- Dashboard -->
  <a href="{{ route('admin') }}" class="flex flex-col items-center gap-0.5 py-1 px-3 rounded-xl bg-indigo-600 text-white font-extrabold border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a]">
    <span class="material-symbols-outlined text-[20px]">dashboard</span>
    <span class="text-[9px] uppercase tracking-wider font-extrabold">Home</span>
  </a>

  <!-- Tambah Buku -->
  @if($canManageBooks)
  <a href="{{ route('admin.books.create') }}" class="flex flex-col items-center gap-0.5 py-1 px-2.5 rounded-xl text-slate-700 font-bold hover:bg-slate-100">
    <span class="material-symbols-outlined text-[20px]">add_circle</span>
    <span class="text-[9px] uppercase tracking-wider font-bold">Tambah</span>
  </a>
  @endif

  <!-- Persetujuan -->
  @if($canApprove)
  <a href="{{ route('admin.persetujuan') }}" class="flex flex-col items-center gap-0.5 py-1 px-2.5 rounded-xl text-slate-700 font-bold hover:bg-slate-100 relative">
    <span class="material-symbols-outlined text-[20px]">assignment_turned_in</span>
    <span class="text-[9px] uppercase tracking-wider font-bold">Setujui</span>
    @if(isset($pendingApprovals) && $pendingApprovals > 0)
    <span class="absolute top-0 right-1 w-2.5 h-2.5 rounded-full bg-rose-500 border border-slate-900 animate-pulse"></span>
    @endif
  </a>
  @endif

  <!-- Laporan -->
  @if($canViewReports)
  <a href="{{ route('admin.laporan') }}" class="flex flex-col items-center gap-0.5 py-1 px-2.5 rounded-xl text-slate-700 font-bold hover:bg-slate-100">
    <span class="material-symbols-outlined text-[20px]">bar_chart</span>
    <span class="text-[9px] uppercase tracking-wider font-bold">Laporan</span>
  </a>
  @endif

  <!-- Keluar / Logout -->
  <form action="{{ route('admin.logout') }}" method="POST" class="inline">
    @csrf
    <button type="submit" class="flex flex-col items-center gap-0.5 py-1 px-2.5 rounded-xl text-rose-600 font-bold hover:bg-rose-50">
      <span class="material-symbols-outlined text-[20px]">logout</span>
      <span class="text-[9px] uppercase tracking-wider font-bold">Keluar</span>
    </button>
  </form>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('adminSearchInput');
    const searchForm = document.getElementById('adminSearchForm');
    const clearBtn = document.getElementById('clearSearchBtn');
    const resultsDropdown = document.getElementById('liveSearchResults');
    const resultsContent = document.getElementById('searchResultsContent');
    const searchLoading = document.getElementById('searchLoading');

    let debounceTimer = null;

    if (clearBtn) {
        clearBtn.addEventListener('click', function () {
            searchInput.value = '';
            clearBtn.classList.add('hidden');
            resultsDropdown.classList.add('hidden');
            if (window.location.search.includes('search=')) {
                window.location.href = "{{ route('admin') }}";
            }
        });
    }

    searchInput.addEventListener('input', function () {
        const query = searchInput.value.trim();
        if (query.length > 0) {
            clearBtn.classList.remove('hidden');
        } else {
            clearBtn.classList.add('hidden');
            resultsDropdown.classList.add('hidden');
            return;
        }

        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => {
            fetchSearchResults(query);
        }, 280);
    });

    searchInput.addEventListener('focus', function () {
        if (searchInput.value.trim().length > 1 && resultsContent.children.length > 0) {
            resultsDropdown.classList.remove('hidden');
        }
    });

    // Close dropdown when clicked outside
    document.addEventListener('click', function (e) {
        if (!searchInput.contains(e.target) && !resultsDropdown.contains(e.target)) {
            resultsDropdown.classList.add('hidden');
        }
    });

    function fetchSearchResults(query) {
        if (query.length < 2) {
            resultsDropdown.classList.add('hidden');
            return;
        }

        resultsDropdown.classList.remove('hidden');
        searchLoading.classList.remove('hidden');
        resultsContent.innerHTML = '';

        fetch(`{{ route('admin.search') }}?q=${encodeURIComponent(query)}`)
            .then(res => res.json())
            .then(data => {
                searchLoading.classList.add('hidden');
                renderResults(data, query);
            })
            .catch(err => {
                searchLoading.classList.add('hidden');
                resultsContent.innerHTML = '<div class="p-3 text-xs font-bold text-rose-600">Terjadi kesalahan pencarian.</div>';
            });
    }

    function renderResults(data, query) {
        const totalItems = (data.books?.length || 0) + (data.users?.length || 0) + (data.borrowings?.length || 0);

        if (totalItems === 0) {
            resultsContent.innerHTML = `
                <div class="p-5 text-center">
                    <span class="material-symbols-outlined text-3xl text-slate-400">search_off</span>
                    <p class="font-extrabold text-xs text-slate-800 mt-1">Tidak ditemukan hasil untuk "${escapeHtml(query)}"</p>
                    <p class="text-[10px] text-slate-500">Coba kata kunci lain atau periksa ejaan.</p>
                </div>
            `;
            return;
        }

        let html = '';

        // 1. Books Group
        if (data.books && data.books.length > 0) {
            html += `
                <div class="p-2.5 bg-amber-100 border-b-2 border-slate-900 flex items-center justify-between">
                    <span class="font-extrabold text-[11px] uppercase tracking-wider text-amber-950 flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[15px]">menu_book</span> BUKU & KOLEKSI (${data.books.length})
                    </span>
                </div>
                <div class="divide-y divide-slate-100">
            `;
            data.books.forEach(b => {
                html += `
                    <a href="/admin/books/${b.id}/edit" class="flex items-center justify-between p-3 hover:bg-amber-50/60 transition-colors group">
                        <div class="flex items-center gap-2.5 min-w-0">
                            <div class="w-8 h-8 rounded-lg bg-slate-100 border border-slate-900 flex items-center justify-center font-bold text-xs flex-shrink-0 overflow-hidden shadow-[1px_1px_0px_#0f172a]">
                                ${b.cover_image_url ? `<img src="${b.cover_image_url}" class="w-full h-full object-cover">` : '<span class="material-symbols-outlined text-[16px]">book</span>'}
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="font-extrabold text-xs text-slate-900 truncate group-hover:text-indigo-600 transition-colors">${escapeHtml(b.title)}</span>
                                <span class="text-[10px] font-semibold text-slate-500 truncate">${escapeHtml(b.author || '-')} • ${escapeHtml(b.category || '-')}</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 flex-shrink-0">
                            <span class="text-[10px] font-extrabold px-2 py-0.5 rounded-md border border-slate-900 ${b.stock > 0 ? 'bg-emerald-100 text-emerald-950' : 'bg-rose-100 text-rose-950'}">Stok: ${b.stock}</span>
                            <span class="material-symbols-outlined text-[16px] text-slate-400 group-hover:text-slate-900">edit</span>
                        </div>
                    </a>
                `;
            });
            html += '</div>';
        }

        // 2. Users Group
        if (data.users && data.users.length > 0) {
            html += `
                <div class="p-2.5 bg-sky-100 border-b-2 border-slate-900 border-t-2 border-slate-900 flex items-center justify-between">
                    <span class="font-extrabold text-[11px] uppercase tracking-wider text-sky-950 flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[15px]">person</span> ANGGOTA / USER (${data.users.length})
                    </span>
                </div>
                <div class="divide-y divide-slate-100">
            `;
            data.users.forEach(u => {
                html += `
                    <div class="flex items-center justify-between p-3 hover:bg-sky-50/60 transition-colors">
                        <div class="flex items-center gap-2.5 min-w-0">
                            <div class="w-8 h-8 rounded-full bg-indigo-600 text-white border border-slate-900 flex items-center justify-center font-extrabold text-xs flex-shrink-0 shadow-[1px_1px_0px_#0f172a]">
                                ${(u.name || 'U').substring(0,2).toUpperCase()}
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="font-extrabold text-xs text-slate-900 truncate">${escapeHtml(u.name)}</span>
                                <span class="text-[10px] font-semibold text-slate-500 truncate">${escapeHtml(u.email || '-')} ${u.nis ? '• NIS: ' + escapeHtml(u.nis) : ''}</span>
                            </div>
                        </div>
                        <span class="text-[10px] font-extrabold px-2 py-0.5 rounded-md border border-slate-900 bg-white text-slate-900">${escapeHtml(u.role || 'Siswa')}</span>
                    </div>
                `;
            });
            html += '</div>';
        }

        // 3. Borrowings / Sirkulasi Group
        if (data.borrowings && data.borrowings.length > 0) {
            html += `
                <div class="p-2.5 bg-violet-100 border-b-2 border-slate-900 border-t-2 border-slate-900 flex items-center justify-between">
                    <span class="font-extrabold text-[11px] uppercase tracking-wider text-violet-950 flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[15px]">swap_horiz</span> SIRKULASI / RESI (${data.borrowings.length})
                    </span>
                    <a href="{{ route('admin.persetujuan') }}" class="text-[10px] font-extrabold underline text-violet-900 hover:text-slate-900">Buka Persetujuan</a>
                </div>
                <div class="divide-y divide-slate-100">
            `;
            data.borrowings.forEach(br => {
                const borrowerName = br.user ? br.user.name : 'User #' + br.user_id;
                const bookTitle = br.book ? br.book.title : 'Buku #' + br.book_id;
                let statusBadge = '<span class="bg-amber-100 text-amber-950 px-2 py-0.5 rounded border border-slate-900 text-[9px] font-extrabold">PENDING</span>';
                if (br.status === 'borrowed') statusBadge = '<span class="bg-sky-100 text-sky-950 px-2 py-0.5 rounded border border-slate-900 text-[9px] font-extrabold">DIPINJAM</span>';
                if (br.status === 'returned') statusBadge = '<span class="bg-emerald-100 text-emerald-950 px-2 py-0.5 rounded border border-slate-900 text-[9px] font-extrabold">KEMBALI</span>';

                html += `
                    <div class="flex items-center justify-between p-3 hover:bg-violet-50/60 transition-colors">
                        <div class="flex flex-col min-w-0 pr-2">
                            <span class="font-extrabold text-xs text-slate-900 truncate">#${br.id} - ${escapeHtml(bookTitle)}</span>
                            <span class="text-[10px] font-semibold text-slate-500 truncate">Peminjam: ${escapeHtml(borrowerName)}</span>
                        </div>
                        <div class="flex items-center gap-2 flex-shrink-0">
                            ${statusBadge}
                        </div>
                    </div>
                `;
            });
            html += '</div>';
        }

        resultsContent.innerHTML = html;
    }

    function escapeHtml(text) {
        if (!text) return '';
        const map = {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#039;'
        };
        return String(text).replace(/[&<>"']/g, m => map[m]);
    }
});
</script>

</body>
</html>
