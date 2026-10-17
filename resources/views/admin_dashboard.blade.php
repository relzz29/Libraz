<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
<title>Admin Dashboard - BiblioZ</title>
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

  /* Comic Title: 3D Pop-Art Bubble Typography */
  .comic-overview-title {
    font-family: 'Fredoka', 'Plus Jakarta Sans', sans-serif;
    background: linear-gradient(135deg, #7c3aed 0%, #c026d3 50%, #ec4899 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    -webkit-text-stroke: 2px #000;
    filter: drop-shadow(3px 3px 0px #000);
    letter-spacing: -0.02em;
  }

  /* Manga Speedburst for Card 1 (Total Buku) */
  .comic-burst-yellow {
    background-color: #fbb03b;
    background-image: repeating-conic-gradient(
      from 200deg at 78% 28%,
      rgba(0, 0, 0, 0.16) 0deg 1.2deg,
      transparent 1.2deg 5.5deg
    );
  }

  /* Comic Halftone Printing Pattern for Cards 2, 3, 4 */
  .comic-halftone-pattern {
    background-image: radial-gradient(#000000 18%, transparent 19%);
    background-size: 7.5px 7.5px;
  }

  /* Speech Bubble Tail for "Tinjauan" button */
  .speech-bubble-tail::before {
    content: '';
    position: absolute;
    left: -8px;
    top: 50%;
    transform: translateY(-50%);
    width: 0;
    height: 0;
    border-top: 6px solid transparent;
    border-bottom: 6px solid transparent;
    border-right: 9px solid #000;
  }
  .speech-bubble-tail::after {
    content: '';
    position: absolute;
    left: -4.5px;
    top: 50%;
    transform: translateY(-50%);
    width: 0;
    height: 0;
    border-top: 4.5px solid transparent;
    border-bottom: 4.5px solid transparent;
    border-right: 7px solid #fff;
  }

  /* Neo-brutalist interaction classes */
  .comic-card-hover {
    transition: transform 0.15s ease, box-shadow 0.15s ease;
  }
  .comic-card-hover:hover {
    transform: translate(-2px, -2px);
    box-shadow: 8px 8px 0px #000 !important;
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
      <!-- Comic Book Logo with green, purple, yellow pages and thick outlines -->
      <svg class="w-10 h-10 filter drop-shadow-[2px_2px_0px_#000]" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
        <!-- Left Page (Lime Green) -->
        <path d="M22 11 C15 8 8 9 5 11 L5 33 C8 31 15 30 22 32 Z" fill="#84cc16" stroke="#000" stroke-width="2.8" stroke-linejoin="round" />
        <!-- Right Page (Yellow) -->
        <path d="M22 11 C29 8 36 9 39 11 L39 33 C36 31 29 30 22 32 Z" fill="#facc15" stroke="#000" stroke-width="2.8" stroke-linejoin="round" />
        <!-- Center Spine Page (Purple) -->
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
    
    <!-- Active Dashboard Item -->
    <a href="{{ route('admin') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl bg-[#5f15e8] text-white font-black border-[2.5px] border-black shadow-[4px_4px_0px_#000] transition-all">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
        <rect x="3" y="3" width="7" height="7" rx="1.5" stroke="#000" stroke-width="2"/>
        <rect x="14" y="3" width="7" height="7" rx="1.5" stroke="#000" stroke-width="2"/>
        <rect x="14" y="14" width="7" height="7" rx="1.5" stroke="#000" stroke-width="2"/>
        <rect x="3" y="14" width="7" height="7" rx="1.5" stroke="#000" stroke-width="2"/>
      </svg>
      <span class="text-base tracking-wide">Dashboard</span>
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
    <a href="{{ route('admin.persetujuan') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-black font-extrabold hover:bg-black/5 hover:translate-x-1 transition-all relative">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
        <rect x="8" y="2" width="8" height="4" rx="1"/>
        <path d="m9 14 2 2 4-4"/>
      </svg>
      <span class="text-base">Persetujuan</span>
      @if(isset($pendingApprovals) && $pendingApprovals > 0)
        <span class="ml-auto px-2 py-0.5 rounded-full bg-rose-500 text-white font-black text-xs border border-black animate-pulse">
          {{ $pendingApprovals }}
        </span>
      @endif
    </a>
    @endif

    <!-- Laporan (Kepala Perpus & Admin IT) -->
    @if($canViewReports)
    <a href="{{ route('admin.laporan') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-black font-extrabold hover:bg-black/5 hover:translate-x-1 transition-all">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <line x1="18" y1="20" x2="18" y2="10"/>
        <line x1="12" y1="20" x2="12" y2="4"/>
        <line x1="6" y1="20" x2="6" y2="14"/>
      </svg>
      <span class="text-base">Laporan</span>
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
        <!-- Left: Greetings & Role Badge -->
        <div class="flex flex-col min-w-0">
            <div class="flex items-center gap-2 flex-wrap">
                <span class="text-xl sm:text-2xl font-black text-black truncate tracking-tight">
                    Halo, {{ auth()->user()->name ?? 'Aryandi Ramadhani' }} 👋
                </span>
                <span class="bg-[#facc15] text-black font-black text-xs px-2.5 py-0.5 rounded-lg border-2 border-black shadow-[3px_3px_0px_#000] uppercase tracking-wide">
                    {{ strtoupper(session('admin_role', 'ADMIN IT')) }}
                </span>
            </div>
            <span class="text-xs sm:text-sm font-semibold text-gray-800 mt-0.5">Kelola seluruh aktivitas perpustakaan.</span>
        </div>

        <!-- Right: Search Bar & Profile Avatar -->
        <div class="flex items-center gap-4 flex-shrink-0">
            <!-- Search bar pill with Live Dropdown -->
            <div class="relative w-72 lg:w-96 hidden sm:block">
                <form action="{{ route('admin') }}" method="GET" class="m-0" id="adminSearchForm">
                    <div class="relative">
                        <input type="text" 
                               name="search" 
                               id="adminSearchInput"
                               value="{{ $search ?? '' }}"
                               placeholder="Cari buku, user, resi..." 
                               autocomplete="off"
                               class="w-full bg-[#fcf9f2] border-[2.5px] border-black rounded-full py-2 pl-10 pr-9 shadow-[3px_3px_0px_#000] text-sm font-bold text-black focus:outline-none focus:bg-white placeholder-gray-500">
                        <svg class="w-4 h-4 absolute left-3.5 top-3 text-black stroke-[2.5]" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <circle cx="11" cy="11" r="7"/>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                        </svg>
                        <button type="button" id="clearSearchBtn" class="{{ empty($search) ? 'hidden' : '' }} absolute right-3 top-2.5 text-gray-500 hover:text-black">
                            <span class="material-symbols-outlined text-[18px]">close</span>
                        </button>
                    </div>
                </form>

                <!-- Live Search Results Dropdown -->
                <div id="liveSearchResults" class="hidden absolute top-12 left-0 right-0 bg-[#faf6ee] border-[3px] border-black rounded-2xl shadow-[6px_6px_0px_#000] z-50 overflow-hidden max-h-[420px] overflow-y-auto">
                    <div id="searchLoading" class="hidden p-4 text-center font-bold text-xs text-gray-600">
                        <span class="inline-block animate-spin mr-1">⚡</span> Mencari data...
                    </div>
                    <div id="searchResultsContent" class="divide-y-2 divide-black/10"></div>
                </div>
            </div>

            <!-- Profile Avatar -->
            <div class="relative flex items-center justify-center cursor-pointer" title="{{ auth()->user()->name ?? 'Aryandi Ramadhani' }} ({{ session('admin_role', 'Admin IT') }})">
                <div class="w-11 h-11 rounded-full bg-[#5f15e8] border-[2.5px] border-black flex items-center justify-center text-white font-black text-sm shadow-[2px_2px_0px_#000]">
                    {{ strtoupper(substr(auth()->user()->name ?? 'Aryandi Ramadhani', 0, 2)) }}
                </div>
                <!-- Status dot -->
                <div class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-[#22c55e] rounded-full border-2 border-black"></div>
            </div>
        </div>
    </div>
</header>

<!-- Main Dashboard Content -->
<main class="flex flex-col relative w-full md:w-[calc(100%-16rem)] md:ml-64 pt-24 pb-24 md:pb-10 min-h-screen">
    <div class="flex flex-col w-full px-6 sm:px-8 gap-6 max-w-7xl mx-auto">
        
        <!-- Header: Overview Sistem Title with Pop-art Typography & Sparkles -->
        <div class="flex items-center gap-3 mt-1">
            <h1 class="comic-overview-title text-3xl sm:text-4xl lg:text-5xl font-black">
                Overview Sistem
            </h1>
            <!-- Comic action sparkle rays -->
            <div class="relative -mt-4 flex-shrink-0">
                <svg class="w-8 h-8" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 2 L16 10" stroke="#000" stroke-width="2.5" stroke-linecap="round"/>
                    <path d="M7 6 L12 12" stroke="#000" stroke-width="2.5" stroke-linecap="round"/>
                    <path d="M25 6 L20 12" stroke="#000" stroke-width="2.5" stroke-linecap="round"/>
                    <path d="M16 2 L16 8" stroke="#d946ef" stroke-width="1.8" stroke-linecap="round"/>
                    <path d="M7 6 L11 11" stroke="#d946ef" stroke-width="1.8" stroke-linecap="round"/>
                    <path d="M25 6 L21 11" stroke="#d946ef" stroke-width="1.8" stroke-linecap="round"/>
                </svg>
            </div>
        </div>

        <!-- 4 Quick Stats Cards (Comic Style / Neo-Brutalist) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 sm:gap-6">
            
            <!-- ================= CARD 1: TOTAL BUKU ================= -->
            <div class="p-5 rounded-2xl comic-burst-yellow border-[3.5px] border-black shadow-[6px_6px_0px_#000] relative overflow-hidden comic-card-hover flex flex-col justify-between min-h-[200px]">
                <!-- Radial Speedburst Lines SVG overlay for authentic manga effect -->
                <div class="absolute inset-0 pointer-events-none overflow-hidden">
                    <svg class="w-full h-full opacity-35" viewBox="0 0 300 200" preserveAspectRatio="none">
                        <g stroke="#000" stroke-width="1.6">
                            <line x1="230" y1="45" x2="0" y2="0"/>
                            <line x1="230" y1="45" x2="40" y2="0"/>
                            <line x1="230" y1="45" x2="90" y2="0"/>
                            <line x1="230" y1="45" x2="140" y2="0"/>
                            <line x1="230" y1="45" x2="0" y2="40"/>
                            <line x1="230" y1="45" x2="0" y2="90"/>
                            <line x1="230" y1="45" x2="0" y2="140"/>
                            <line x1="230" y1="45" x2="0" y2="190"/>
                            <line x1="230" y1="45" x2="50" y2="200"/>
                            <line x1="230" y1="45" x2="110" y2="200"/>
                            <line x1="230" y1="45" x2="170" y2="200"/>
                            <line x1="230" y1="45" x2="230" y2="200"/>
                            <line x1="230" y1="45" x2="280" y2="200"/>
                            <line x1="230" y1="45" x2="300" y2="170"/>
                            <line x1="230" y1="45" x2="300" y2="110"/>
                            <line x1="230" y1="45" x2="300" y2="60"/>
                            <line x1="230" y1="45" x2="300" y2="10"/>
                            <line x1="230" y1="45" x2="250" y2="0"/>
                            <line x1="230" y1="45" x2="190" y2="0"/>
                        </g>
                    </svg>
                </div>

                <!-- Top Row: Icon Square & Comic Book Graphic -->
                <div class="flex items-start justify-between relative z-10 mb-3">
                    <!-- Top-Left Icon Box -->
                    <div class="w-12 h-12 rounded-xl bg-white border-[2.5px] border-black shadow-[3px_3px_0px_#000] flex items-center justify-center">
                        <svg class="w-6 h-6 text-black stroke-[2.5]" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                            <line x1="8" y1="13" x2="16" y2="13"/>
                            <line x1="8" y1="17" x2="13" y2="17"/>
                        </svg>
                    </div>

                    <!-- Top-Right Comic Open Book Graphic with Motion Lines -->
                    <div class="relative">
                        <svg class="w-16 h-14" viewBox="0 0 70 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Left speed dashes -->
                            <line x1="2" y1="20" x2="14" y2="20" stroke="#000" stroke-width="2.5" stroke-linecap="round"/>
                            <line x1="6" y1="26" x2="16" y2="26" stroke="#000" stroke-width="2.5" stroke-linecap="round"/>
                            <line x1="4" y1="32" x2="12" y2="32" stroke="#000" stroke-width="2.5" stroke-linecap="round"/>
                            <!-- Left Page (white) -->
                            <path d="M38 14 C30 11 20 12 16 15 L16 46 C20 43 30 42 38 45 Z" fill="#ffffff" stroke="#000" stroke-width="2.5" stroke-linejoin="round"/>
                            <!-- Right Page (yellow) -->
                            <path d="M38 14 C46 11 56 12 60 15 L60 46 C56 43 46 42 38 45 Z" fill="#facc15" stroke="#000" stroke-width="2.5" stroke-linejoin="round"/>
                            <!-- Spine Center Line -->
                            <line x1="38" y1="14" x2="38" y2="45" stroke="#000" stroke-width="2.5"/>
                            <!-- Book depth page layer -->
                            <path d="M60 18 L64 19 L64 50 L60 46" fill="#fde047" stroke="#000" stroke-width="2" stroke-linejoin="round"/>
                            <!-- Right speed dashes -->
                            <line x1="56" y1="8" x2="62" y2="5" stroke="#000" stroke-width="2.5" stroke-linecap="round"/>
                            <line x1="64" y1="14" x2="68" y2="12" stroke="#000" stroke-width="2.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>

                <!-- Label & Value -->
                <div class="relative z-10">
                    <p class="font-black text-black uppercase tracking-wider text-sm mb-1">TOTAL BUKU</p>
                    <div class="flex items-center gap-3">
                        <span class="text-5xl font-black text-black tracking-tight leading-none">
                            {{ number_format($totalBooks) }}
                        </span>
                        <!-- Dynamic Pill Badge -->
                        <div class="border-[2.5px] border-black rounded-xl px-2.5 py-1 shadow-[3px_3px_0px_#000] flex items-center gap-1 font-black text-xs {{ $bookGrowth['color'] ?? 'bg-white text-black' }}" title="Pertumbuhan buku baru bulan ini dibanding bulan lalu">
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

            <!-- ================= CARD 2: AKUN AKTIF ================= -->
            <div class="p-5 rounded-2xl bg-[#00b4d8] border-[3.5px] border-black shadow-[6px_6px_0px_#000] relative overflow-hidden comic-card-hover flex flex-col justify-between min-h-[200px]">
                <!-- Halftone Dots Texture Overlay -->
                <div class="absolute inset-0 pointer-events-none comic-halftone-pattern opacity-20"></div>

                <!-- Top Row: Icon Square & Comic User Outline Graphic -->
                <div class="flex items-start justify-between relative z-10 mb-3">
                    <!-- Top-Left Icon Box -->
                    <div class="w-12 h-12 rounded-xl bg-white border-[2.5px] border-black shadow-[3px_3px_0px_#000] flex items-center justify-center">
                        <svg class="w-6 h-6 text-black stroke-[2.5]" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>

                    <!-- Top-Right Comic User Outline Illustration -->
                    <div class="relative">
                        <svg class="w-16 h-14" viewBox="0 0 70 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Background secondary silhouette -->
                            <circle cx="50" cy="18" r="9" fill="#0284c7" stroke="#000" stroke-width="2.5"/>
                            <path d="M36 46 C36 38 42 33 50 33 C58 33 64 38 64 46" fill="#0284c7" stroke="#000" stroke-width="2.5"/>
                            <!-- Foreground primary silhouette with comic double styling -->
                            <circle cx="36" cy="22" r="10" fill="#38bdf8" stroke="#000" stroke-width="2.8"/>
                            <circle cx="36" cy="22" r="6" fill="#00b4d8" stroke="#000" stroke-width="1.8"/>
                            <path d="M20 52 C20 42 28 36 36 36 C44 36 52 42 52 52" fill="#38bdf8" stroke="#000" stroke-width="2.8"/>
                            <path d="M24 52 C24 44 30 40 36 40 C42 40 48 44 48 52" fill="#00b4d8" stroke="#000" stroke-width="1.8"/>
                        </svg>
                    </div>
                </div>

                <!-- Label & Value -->
                <div class="relative z-10">
                    <p class="font-black text-black uppercase tracking-wider text-sm mb-1">AKUN AKTIF</p>
                    <div class="flex items-center gap-3">
                        <span class="text-5xl font-black text-black tracking-tight leading-none">
                            {{ number_format($activeUsers) }}
                        </span>
                        <!-- Dynamic Pill Badge -->
                        <div class="border-[2.5px] border-black rounded-xl px-2.5 py-1 shadow-[3px_3px_0px_#000] flex items-center gap-1 font-black text-xs {{ $userGrowth['color'] ?? 'bg-white text-black' }}" title="Pertumbuhan anggota baru bulan ini dibanding bulan lalu">
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

            <!-- ================= CARD 3: STATISTIK & PERSETUJUAN ================= -->
            <div class="p-5 rounded-2xl bg-[#ff5757] border-[3.5px] border-black shadow-[6px_6px_0px_#000] relative overflow-hidden comic-card-hover flex flex-col justify-between min-h-[200px]">
                <!-- Halftone Dots Texture Overlay -->
                <div class="absolute inset-0 pointer-events-none comic-halftone-pattern opacity-20"></div>

                <!-- Top Row: Icon Square & Comic Clipboard with Clock Graphic -->
                <div class="flex items-start justify-between relative z-10 mb-2">
                    <!-- Top-Left Icon Box (Hourglass) -->
                    <div class="w-12 h-12 rounded-xl bg-white border-[2.5px] border-black shadow-[3px_3px_0px_#000] flex items-center justify-center">
                        <svg class="w-6 h-6 text-black stroke-[2.5]" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M5 22h14"/>
                            <path d="M5 2h14"/>
                            <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22"/>
                            <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2"/>
                        </svg>
                    </div>

                    <!-- Top-Right Comic Clipboard Graphic with Clock Badge -->
                    <div class="relative">
                        <svg class="w-16 h-16" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Clipboard Base -->
                            <rect x="18" y="10" width="36" height="46" rx="5" fill="#ffffff" stroke="#000" stroke-width="2.5"/>
                            <!-- Top Clip -->
                            <rect x="27" y="6" width="18" height="8" rx="2.5" fill="#f87171" stroke="#000" stroke-width="2.5"/>
                            <circle cx="36" cy="10" r="1.5" fill="#000"/>
                            <!-- Checklist lines -->
                            <line x1="25" y1="22" x2="47" y2="22" stroke="#000" stroke-width="2" stroke-linecap="round"/>
                            <line x1="25" y1="29" x2="47" y2="29" stroke="#000" stroke-width="2" stroke-linecap="round"/>
                            <line x1="25" y1="36" x2="40" y2="36" stroke="#000" stroke-width="2" stroke-linecap="round"/>
                            <!-- Circular Clock Badge on bottom right -->
                            <circle cx="48" cy="46" r="11" fill="#ef4444" stroke="#000" stroke-width="2.5"/>
                            <line x1="48" y1="46" x2="48" y2="40" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
                            <line x1="48" y1="46" x2="53" y2="46" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="48" cy="46" r="1.5" fill="#fff"/>
                        </svg>
                    </div>
                </div>

                <!-- Upper Section: STATISTIK & Button -->
                <div class="relative z-10 mb-2">
                    <p class="font-black text-black uppercase tracking-wider text-xs mb-1">STATISTIK</p>
                    <a href="{{ route('statistik') }}" class="block w-full bg-white text-black font-black text-center text-xs sm:text-sm py-1.5 px-3 rounded-xl border-[2.5px] border-black shadow-[3px_3px_0px_#000] comic-btn-hover">
                        Lihat Statistik
                    </a>
                </div>

                <!-- Lower Section: PERSETUJUAN & Tinjauan Speech Bubble -->
                <div class="relative z-10">
                    <p class="font-black text-black uppercase tracking-wider text-xs mb-1">PERSETUJUAN</p>
                    <div class="flex items-center gap-3">
                        <span class="text-4xl font-black text-black tracking-tight leading-none">
                            {{ number_format($pendingApprovals) }}
                        </span>
                        <!-- Speech bubble pill badge -->
                        <a href="{{ route('admin.persetujuan') }}" class="relative bg-white text-black font-black text-xs sm:text-sm py-1 px-3.5 rounded-xl border-[2.5px] border-black shadow-[3px_3px_0px_#000] speech-bubble-tail comic-btn-hover ml-2 flex items-center justify-center">
                            Tinjauan
                        </a>
                    </div>
                </div>
            </div>

            <!-- ================= CARD 4: PEMINJAMAN ================= -->
            <div class="p-5 rounded-2xl bg-[#84cc16] border-[3.5px] border-black shadow-[6px_6px_0px_#000] relative overflow-hidden comic-card-hover flex flex-col justify-between min-h-[200px]">
                <!-- Halftone Dots Texture Overlay -->
                <div class="absolute inset-0 pointer-events-none comic-halftone-pattern opacity-20"></div>

                <!-- Top Row: Icon Square & Comic Shopping Cart with Gear Graphic -->
                <div class="flex items-start justify-between relative z-10 mb-3">
                    <!-- Top-Left Icon Box (Transfer / Swap Arrows) -->
                    <div class="w-12 h-12 rounded-xl bg-white border-[2.5px] border-black shadow-[3px_3px_0px_#000] flex items-center justify-center">
                        <svg class="w-6 h-6 text-black stroke-[2.5]" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M21 8H7l4-4"/>
                            <path d="M3 16h14l-4 4"/>
                        </svg>
                    </div>

                    <!-- Top-Right Comic Shopping Cart with Cog Graphic -->
                    <div class="relative">
                        <svg class="w-16 h-14" viewBox="0 0 70 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Shopping cart frame -->
                            <path d="M12 16 L18 16 L25 40 L52 40 L58 22 L20 22" fill="#84cc16" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Wheels -->
                            <circle cx="28" cy="47" r="3.5" fill="#000"/>
                            <circle cx="48" cy="47" r="3.5" fill="#000"/>
                            <!-- Gear / Cog inside cart -->
                            <g transform="translate(36, 14) scale(0.75)">
                                <circle cx="12" cy="12" r="6" fill="#a3e635" stroke="#000" stroke-width="2.5"/>
                                <path d="M12 2 V5 M12 19 V22 M2 12 H5 M19 12 H22 M4.9 4.9 L7.1 7.1 M16.9 16.9 L19.1 19.1 M4.9 19.1 L7.1 16.9 M16.9 7.1 L19.1 4.9" stroke="#000" stroke-width="2.5" stroke-linecap="round"/>
                            </g>
                        </svg>
                    </div>
                </div>

                <!-- Label & Value -->
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-1">
                        <p class="font-black text-black uppercase tracking-wider text-sm">PEMINJAMAN</p>
                        <span class="text-[10px] font-black uppercase bg-black text-white px-2 py-0.5 rounded-md tracking-wider">
                            {{ $currentMonthName ?? 'BULAN INI' }}
                        </span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-5xl font-black text-black tracking-tight leading-none">
                            {{ number_format($monthlyBorrows) }}
                        </span>
                        <!-- Dynamic Pill Badge -->
                        <div class="border-[2.5px] border-black rounded-xl px-2.5 py-1 shadow-[3px_3px_0px_#000] flex items-center gap-1 font-black text-xs {{ $borrowGrowth['color'] ?? 'bg-white text-black' }}" title="Pertumbuhan peminjaman bulan ini dibanding bulan lalu">
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

        <!-- Notification Banner (Green Comic Alert / Red Warning Alert) -->
        @if(session('error'))
        <div class="w-full bg-[#ff5757] border-[3.5px] border-black rounded-2xl p-4 shadow-[5px_5px_0px_#000] flex items-center gap-3.5">
            <div class="w-8 h-8 rounded-xl bg-white border-2 border-black flex items-center justify-center flex-shrink-0 text-black shadow-[2px_2px_0px_#000]">
                <span class="material-symbols-outlined text-[20px] text-rose-600 font-bold">lock</span>
            </div>
            <div class="flex flex-col">
                <span class="text-xs font-black uppercase tracking-wide text-white drop-shadow-[1px_1px_0px_#000]">AKSES DIBATASI (ROLE-BASED CONTROL)</span>
                <span class="text-black font-black text-sm sm:text-base">{{ session('error') }}</span>
            </div>
        </div>
        @else
        <div class="w-full bg-[#8ce934] border-[3px] border-black rounded-xl p-3 px-4 shadow-[4px_4px_0px_#000] flex items-center gap-3">
            <div class="w-6 h-6 rounded-full border-2 border-black flex items-center justify-center flex-shrink-0 bg-transparent">
                <svg class="w-4 h-4 text-black stroke-[3]" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <circle cx="12" cy="12" r="9" stroke="black" stroke-width="2" fill="none"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 12l3 3L16 9" />
                </svg>
            </div>
            <span class="text-black font-black text-sm sm:text-base">
                {{ session('success') ?? ('Berhasil login sebagai ' . (session('admin_role') ?? 'Admin IT') . '.') }}
            </span>
        </div>
        @endif

        @if($errors->any())
        <div class="bg-[#ff5757] border-[3px] border-black text-black p-4 rounded-xl shadow-[4px_4px_0px_#000]">
            <ul class="list-disc ml-5 font-bold text-sm">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Recent Borrowings Data Table -->
        <div class="flex flex-col rounded-3xl bg-white border-[3.5px] border-black shadow-[8px_8px_0px_#000] mt-6 overflow-hidden relative">
            <div class="p-5 border-b-[3.5px] border-black flex items-center justify-between bg-[#cb6ce6] flex-wrap gap-3">
                <div class="flex items-center gap-3">
                    <h3 class="text-white font-black drop-shadow-[2px_2px_0px_#000] flex items-center gap-3 text-2xl sm:text-3xl tracking-tight">
                        <div class="w-11 h-11 rounded-xl bg-white border-[2.5px] border-black flex items-center justify-center text-black shadow-[3px_3px_0px_#000]">
                            <span class="material-symbols-outlined text-[26px]">table_rows</span>
                        </div>
                        {{ !empty($search) ? 'HASIL PENCARIAN: "' . $search . '"' : 'SIRKULASI TERBARU' }}
                    </h3>
                    @if(!empty($search) || (!empty($selectedCategory) && $selectedCategory !== 'all') || (!empty($selectedType) && $selectedType !== 'all'))
                        <a href="{{ route('admin') }}" class="px-3 py-1.5 rounded-lg bg-white text-black font-black text-xs border-2 border-black shadow-[2px_2px_0px_#000] hover:bg-rose-500 hover:text-white transition-colors flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">close</span> Reset Filter
                        </a>
                    @endif
                </div>
                <div class="flex items-center gap-2">
                    <span class="px-3 py-1.5 rounded-xl bg-white text-black font-black border-[2px] border-black shadow-[2px_2px_0px_#000] text-xs uppercase hidden sm:inline-block">
                        Total: {{ $books->total() }} Data
                    </span>
                    <a href="{{ route('admin.books.create') }}" class="px-4 py-2 rounded-xl bg-[#8ce934] text-black font-black flex items-center gap-1.5 border-[2.5px] border-black shadow-[3px_3px_0px_#000] comic-btn-hover uppercase text-xs sm:text-sm">
                        <span class="material-symbols-outlined text-[18px]">add_circle</span> Tambah
                    </a>
                </div>
            </div>

            <!-- Filter Controls Bar -->
            <div class="p-3.5 sm:p-4 bg-[#fbf7ed] border-b-[2.5px] border-black flex flex-wrap items-center justify-between gap-3">
                <form action="{{ route('admin') }}" method="GET" class="flex flex-wrap items-center gap-2.5 w-full sm:w-auto" id="filterForm">
                    @if(!empty($search))
                        <input type="hidden" name="search" value="{{ $search }}">
                    @endif
                    
                    <!-- Filter Kategori -->
                    <div class="flex items-center gap-1.5">
                        <label class="text-xs font-black uppercase text-black hidden sm:inline-flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">category</span> Kategori:
                        </label>
                        <select name="category" onchange="document.getElementById('filterForm').submit()" class="bg-white border-2 border-black rounded-xl px-3 py-1.5 text-xs font-black shadow-[2px_2px_0px_#000] cursor-pointer focus:outline-none focus:bg-[#fffdf0]">
                            <option value="all" {{ empty($selectedCategory) || $selectedCategory === 'all' ? 'selected' : '' }}>Semua Kategori</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat }}" {{ ($selectedCategory ?? '') === $cat ? 'selected' : '' }}>{{ $cat }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Filter Tipe -->
                    <div class="flex items-center gap-1.5">
                        <label class="text-xs font-black uppercase text-black hidden sm:inline-flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">menu_book</span> Format:
                        </label>
                        <select name="type" onchange="document.getElementById('filterForm').submit()" class="bg-white border-2 border-black rounded-xl px-3 py-1.5 text-xs font-black shadow-[2px_2px_0px_#000] cursor-pointer focus:outline-none focus:bg-[#fffdf0]">
                            <option value="all" {{ empty($selectedType) || $selectedType === 'all' ? 'selected' : '' }}>Semua Tipe</option>
                            <option value="physical" {{ ($selectedType ?? '') === 'physical' ? 'selected' : '' }}>Buku Fisik</option>
                            <option value="ebook" {{ ($selectedType ?? '') === 'ebook' ? 'selected' : '' }}>E-Book / Digital</option>
                            <option value="both" {{ ($selectedType ?? '') === 'both' ? 'selected' : '' }}>Campuran / Mix</option>
                        </select>
                    </div>
                </form>

                <div class="text-xs font-bold text-gray-700 ml-auto hidden md:block">
                    Menampilkan <span class="font-black text-black">{{ $books->firstItem() ?? 0 }}</span> - <span class="font-black text-black">{{ $books->lastItem() ?? 0 }}</span> dari <span class="font-black text-black">{{ $books->total() }}</span> buku
                </div>
            </div>

            <div class="overflow-x-auto p-4 bg-[#fcf9f2] bg-[radial-gradient(#00000015_2px,transparent_2px)] [background-size:16px_16px]">
                <table class="w-full text-left border-collapse border-spacing-y-2">
                    <thead>
                        <tr class="text-black uppercase tracking-wider bg-white border-[2.5px] border-black shadow-[2px_2px_0px_#000]">
                            <th class="p-3.5 font-black text-xs sm:text-sm">Judul Buku</th>
                            <th class="p-3.5 font-black text-xs sm:text-sm">Tipe</th>
                            <th class="p-3.5 font-black text-xs sm:text-sm">Kategori</th>
                            <th class="p-3.5 font-black text-xs sm:text-sm">Lokasi Rak</th>
                            <th class="p-3.5 font-black text-xs sm:text-sm">Stok</th>
                            <th class="p-3.5 font-black text-xs sm:text-sm">ISBN</th>
                            <th class="p-3.5 font-black text-xs sm:text-sm text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-black space-y-4">
                        @forelse($books as $book)
                        <tr class="bg-white border-[2.5px] border-black hover:bg-[#ffde59] transition-colors shadow-[3px_3px_0px_#000] rounded-xl group/row">
                            <td class="p-3.5">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-white border-2 border-black flex items-center justify-center text-black shadow-[2px_2px_0px_#000] overflow-hidden flex-shrink-0">
                                        @if(!empty($book->cover_image_url))
                                            <img src="{{ $book->cover_image_url }}" alt="{{ $book->title }}" class="w-full h-full object-cover">
                                        @else
                                            <span class="material-symbols-outlined text-[22px]">book_4</span>
                                        @endif
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-black text-base line-clamp-1">{{ $book->title }}</span>
                                        <span class="text-xs font-bold text-gray-600">{{ $book->author }}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="p-3.5 uppercase font-black text-xs">
                                @if($book->type == 'physical')
                                    <span class="bg-[#38b6ff] px-2.5 py-1 rounded-lg border-2 border-black shadow-[2px_2px_0px_#000]">Fisik</span>
                                @elseif($book->type == 'ebook')
                                    <span class="bg-[#ff5757] text-white px-2.5 py-1 rounded-lg border-2 border-black shadow-[2px_2px_0px_#000]">Digital</span>
                                @else
                                    <span class="bg-[#cb6ce6] text-white px-2.5 py-1 rounded-lg border-2 border-black shadow-[2px_2px_0px_#000]">Mix</span>
                                @endif
                            </td>
                            <td class="p-3.5 font-bold"><span class="bg-gray-100 px-2.5 py-1 rounded-lg border-2 border-black shadow-[2px_2px_0px_#000]">{{ $book->category }}</span></td>
                            <td class="p-3.5 font-black text-xs">
                                <span class="bg-[#facc15] px-2.5 py-1 rounded-lg border-2 border-black shadow-[2px_2px_0px_#000] flex items-center gap-1 w-fit">
                                    <span class="material-symbols-outlined text-[14px]">shelves</span>
                                    {{ $book->rack ?? 'Rak Utama' }}
                                </span>
                            </td>
                            <td class="p-3.5 font-black text-lg {{ $book->stock > 0 ? '' : 'text-red-600' }}">{{ $book->stock }}</td>
                            <td class="p-3.5 font-bold text-sm">{{ $book->isbn ?? '-' }}</td>
                            <td class="p-3.5 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('admin.books.edit', $book->id) }}" class="w-9 h-9 rounded-xl bg-white border-2 border-black shadow-[2px_2px_0px_#000] inline-flex items-center justify-center text-black hover:bg-black hover:text-white transition-colors" title="Edit Buku">
                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="p-8 text-center text-black bg-white border-[2.5px] border-black shadow-[3px_3px_0px_#000] font-black text-lg">
                                <div class="flex flex-col items-center justify-center gap-3">
                                    <span class="material-symbols-outlined text-[54px]">auto_stories</span>
                                    <p>WADUH! BELUM ADA DATA BUKU YANG SESUAI!</p>
                                    @if(!empty($search) || !empty($selectedCategory) || !empty($selectedType))
                                        <a href="{{ route('admin') }}" class="px-4 py-2 rounded-xl bg-[#5f15e8] text-white font-black text-sm border-2 border-black shadow-[3px_3px_0px_#000] hover:bg-black transition-colors">
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

            <!-- Neo-Brutalist Comic Pagination Bar -->
            @if($books->hasPages())
            <div class="p-4 bg-white border-t-[3px] border-black flex flex-wrap items-center justify-between gap-3">
                <div class="text-xs font-black uppercase text-gray-700">
                    Halaman {{ $books->currentPage() }} dari {{ $books->lastPage() }}
                </div>
                <div class="flex items-center gap-1.5 flex-wrap">
                    {{-- Previous Page Link --}}
                    @if ($books->onFirstPage())
                        <span class="px-3 py-1.5 rounded-xl bg-gray-200 text-gray-400 font-black text-xs border-2 border-gray-400 cursor-not-allowed flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">chevron_left</span> Prev
                        </span>
                    @else
                        <a href="{{ $books->previousPageUrl() }}" class="px-3 py-1.5 rounded-xl bg-white text-black font-black text-xs border-2 border-black shadow-[2px_2px_0px_#000] hover:bg-[#ffde59] transition-colors flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">chevron_left</span> Prev
                        </a>
                    @endif

                    {{-- Numeric Pagination Elements --}}
                    @foreach ($books->getUrlRange(max(1, $books->currentPage() - 2), min($books->lastPage(), $books->currentPage() + 2)) as $page => $url)
                        @if ($page == $books->currentPage())
                            <span class="w-8 h-8 rounded-xl bg-[#5f15e8] text-white font-black text-xs border-2 border-black shadow-[2px_2px_0px_#000] flex items-center justify-center">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}" class="w-8 h-8 rounded-xl bg-white text-black font-black text-xs border-2 border-black shadow-[2px_2px_0px_#000] hover:bg-[#ffde59] transition-colors flex items-center justify-center">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($books->hasMorePages())
                        <a href="{{ $books->nextPageUrl() }}" class="px-3 py-1.5 rounded-xl bg-white text-black font-black text-xs border-2 border-black shadow-[2px_2px_0px_#000] hover:bg-[#ffde59] transition-colors flex items-center gap-1">
                            Next <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                        </a>
                    @else
                        <span class="px-3 py-1.5 rounded-xl bg-gray-200 text-gray-400 font-black text-xs border-2 border-gray-400 cursor-not-allowed flex items-center gap-1">
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
<nav class="md:hidden fixed bottom-0 left-0 right-0 z-50 bg-[#faf6ee]/95 backdrop-blur-md border-t-[3.5px] border-black px-3 py-2 flex items-center justify-around pb-safe shadow-[0_-4px_10px_rgba(0,0,0,0.1)]">
  <!-- Dashboard: Semua Peran -->
  <a href="{{ route('admin') }}" class="flex flex-col items-center gap-0.5 py-1 px-3 rounded-xl bg-[#5f15e8] text-white font-black border-2 border-black shadow-[2px_2px_0px_#000]">
    <span class="material-symbols-outlined text-[20px]">dashboard</span>
    <span class="text-[9px] uppercase tracking-wider font-extrabold">Home</span>
  </a>

  <!-- Tambah Buku (Pustakawan & Admin IT) -->
  @if($canManageBooks)
  <a href="{{ route('admin.books.create') }}" class="flex flex-col items-center gap-0.5 py-1 px-2.5 rounded-xl text-black font-extrabold hover:bg-black/5">
    <span class="material-symbols-outlined text-[20px]">add_circle</span>
    <span class="text-[9px] uppercase tracking-wider font-extrabold">Tambah</span>
  </a>
  @endif

  <!-- Persetujuan (Pustakawan, Kepala Perpus & Admin IT) -->
  @if($canApprove)
  <a href="{{ route('admin.persetujuan') }}" class="flex flex-col items-center gap-0.5 py-1 px-2.5 rounded-xl text-black font-extrabold hover:bg-black/5 relative">
    <span class="material-symbols-outlined text-[20px]">assignment_turned_in</span>
    <span class="text-[9px] uppercase tracking-wider font-extrabold">Setujui</span>
    @if(isset($pendingApprovals) && $pendingApprovals > 0)
    <span class="absolute top-0 right-1 w-2.5 h-2.5 rounded-full bg-rose-500 border border-black animate-pulse"></span>
    @endif
  </a>
  @endif

  <!-- Laporan (Kepala Perpus & Admin IT) -->
  @if($canViewReports)
  <a href="{{ route('admin.laporan') }}" class="flex flex-col items-center gap-0.5 py-1 px-2.5 rounded-xl text-black font-extrabold hover:bg-black/5">
    <span class="material-symbols-outlined text-[20px]">bar_chart</span>
    <span class="text-[9px] uppercase tracking-wider font-extrabold">Laporan</span>
  </a>
  @endif

  <!-- Keluar / Logout -->
  <form action="{{ route('admin.logout') }}" method="POST" class="inline">
    @csrf
    <button type="submit" class="flex flex-col items-center gap-0.5 py-1 px-2.5 rounded-xl text-rose-600 font-extrabold hover:bg-rose-50">
      <span class="material-symbols-outlined text-[20px]">logout</span>
      <span class="text-[9px] uppercase tracking-wider font-extrabold">Keluar</span>
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
                resultsContent.innerHTML = '<div class="p-3 text-xs font-bold text-red-600">Terjadi kesalahan pencarian.</div>';
            });
    }

    function renderResults(data, query) {
        const totalItems = (data.books?.length || 0) + (data.users?.length || 0) + (data.borrowings?.length || 0);

        if (totalItems === 0) {
            resultsContent.innerHTML = `
                <div class="p-5 text-center">
                    <span class="material-symbols-outlined text-[32px] text-gray-400">search_off</span>
                    <p class="font-black text-xs text-black mt-1">Tidak ada hasil untuk "${query}"</p>
                    <p class="text-[11px] font-bold text-gray-500">Coba kata kunci judul buku, nama siswa, atau ID transaksi.</p>
                </div>
            `;
            return;
        }

        let html = '';

        // 1. Books Group
        if (data.books && data.books.length > 0) {
            html += `
                <div class="p-2 bg-[#ffde59] border-b-2 border-black flex items-center justify-between">
                    <span class="font-black text-[11px] uppercase tracking-wider text-black flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[15px]">menu_book</span> BUKU (${data.books.length})
                    </span>
                    <a href="{{ route('admin') }}?search=${encodeURIComponent(query)}" class="text-[10px] font-black underline text-black">Filter Tabel</a>
                </div>
                <div class="divide-y divide-black/10">
            `;
            data.books.forEach(b => {
                const editUrl = "{{ url('/admin/books') }}/" + b.id + "/edit";
                html += `
                    <a href="${editUrl}" class="flex items-center justify-between p-3 hover:bg-[#fff9d2] transition-colors group">
                        <div class="flex items-center gap-2.5 min-w-0">
                            <div class="w-8 h-8 rounded-lg bg-white border-2 border-black flex items-center justify-center text-black flex-shrink-0 shadow-[1px_1px_0px_#000]">
                                <span class="material-symbols-outlined text-[18px]">book_4</span>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="font-black text-xs text-black truncate group-hover:text-[#5f15e8]">${escapeHtml(b.title)}</span>
                                <span class="text-[10px] font-bold text-gray-600 truncate">${escapeHtml(b.author)} • ${escapeHtml(b.category)}</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 flex-shrink-0">
                            <span class="text-[10px] font-black px-2 py-0.5 rounded-md border border-black ${b.stock > 0 ? 'bg-emerald-200' : 'bg-red-200'}">Stok: ${b.stock}</span>
                            <span class="material-symbols-outlined text-[16px] text-black">edit</span>
                        </div>
                    </a>
                `;
            });
            html += '</div>';
        }

        // 2. Users Group
        if (data.users && data.users.length > 0) {
            html += `
                <div class="p-2 bg-[#38b6ff] border-b-2 border-black border-t-2 border-black flex items-center justify-between">
                    <span class="font-black text-[11px] uppercase tracking-wider text-black flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[15px]">person</span> ANGGOTA / USER (${data.users.length})
                    </span>
                </div>
                <div class="divide-y divide-black/10">
            `;
            data.users.forEach(u => {
                html += `
                    <div class="flex items-center justify-between p-3 hover:bg-[#e0f2fe] transition-colors">
                        <div class="flex items-center gap-2.5 min-w-0">
                            <div class="w-8 h-8 rounded-full bg-[#5f15e8] text-white border-2 border-black flex items-center justify-center font-black text-xs flex-shrink-0 shadow-[1px_1px_0px_#000]">
                                ${(u.name || 'U').substring(0,2).toUpperCase()}
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="font-black text-xs text-black truncate">${escapeHtml(u.name)}</span>
                                <span class="text-[10px] font-bold text-gray-600 truncate">${escapeHtml(u.email || '-')} ${u.nis ? '• NIS: ' + escapeHtml(u.nis) : ''}</span>
                            </div>
                        </div>
                        <span class="text-[10px] font-black px-2 py-0.5 rounded-md border border-black bg-white">${escapeHtml(u.role || 'Siswa')}</span>
                    </div>
                `;
            });
            html += '</div>';
        }

        // 3. Borrowings / Sirkulasi Group
        if (data.borrowings && data.borrowings.length > 0) {
            html += `
                <div class="p-2 bg-[#cb6ce6] border-b-2 border-black border-t-2 border-black flex items-center justify-between">
                    <span class="font-black text-[11px] uppercase tracking-wider text-white flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[15px]">swap_horiz</span> SIRKULASI / RESI (${data.borrowings.length})
                    </span>
                    <a href="{{ route('admin.persetujuan') }}" class="text-[10px] font-black underline text-white">Buka Persetujuan</a>
                </div>
                <div class="divide-y divide-black/10">
            `;
            data.borrowings.forEach(br => {
                const borrowerName = br.user ? br.user.name : 'User #' + br.user_id;
                const bookTitle = br.book ? br.book.title : 'Buku #' + br.book_id;
                let statusBadge = '<span class="bg-amber-200 text-black px-2 py-0.5 rounded border border-black text-[9px] font-black">PENDING</span>';
                if (br.status === 'borrowed') statusBadge = '<span class="bg-blue-200 text-black px-2 py-0.5 rounded border border-black text-[9px] font-black">DIPINJAM</span>';
                if (br.status === 'returned') statusBadge = '<span class="bg-emerald-200 text-black px-2 py-0.5 rounded border border-black text-[9px] font-black">KEMBALI</span>';

                html += `
                    <div class="flex items-center justify-between p-3 hover:bg-[#f5d0fe] transition-colors">
                        <div class="flex flex-col min-w-0 pr-2">
                            <span class="font-black text-xs text-black truncate">#${br.id} - ${escapeHtml(bookTitle)}</span>
                            <span class="text-[10px] font-bold text-gray-700 truncate">Peminjam: ${escapeHtml(borrowerName)}</span>
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
