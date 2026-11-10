<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Laporan Perpustakaan - Admin Libraz</title>
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

  .kpi-updated {
    animation: kpiSoftFlash 0.7s ease-out;
  }
  @keyframes kpiSoftFlash {
    0% { transform: scale(1.04); background-color: #fef08a; }
    100% { transform: scale(1); }
  }

  /* PRINT STYLES */
  @media print {
    body {
      background: #ffffff !important;
      color: #000000 !important;
      font-size: 11pt;
    }
    aside, header, .no-print, .pagination-nav, #tabSwitcherArea, .quick-filter-badge {
      display: none !important;
    }
    main {
      width: 100% !important;
      margin: 0 !important;
      padding: 0 !important;
    }
    .print-only {
      display: block !important;
    }
    .table-container {
      box-shadow: none !important;
      border: 1px solid #000 !important;
      border-radius: 0 !important;
      background: transparent !important;
    }
    table {
      border-collapse: collapse !important;
      width: 100% !important;
    }
    th, td {
      border: 1px solid #000 !important;
      padding: 6px 8px !important;
      font-size: 9pt !important;
    }
    th {
      background-color: #f1f5f9 !important;
      color: #000 !important;
    }
  }

  .print-only {
    display: none;
  }
</style>
</head>
<body class="soft-page font-['Plus_Jakarta_Sans',sans-serif] text-slate-900 flex flex-col min-h-screen selection:bg-amber-200 selection:text-slate-900">
@php
  $activeTab = $activeTab ?? 'harian';
@endphp
  
<!-- Desktop Sidebar (Soft Brutalism) -->
<aside class="hidden md:flex fixed left-0 top-0 h-screen w-64 bg-white border-r-2 border-slate-900 flex-col z-50 no-print">
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
    
    <!-- Dashboard -->
    <a href="{{ route('admin') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-slate-700 font-bold hover:bg-slate-100 hover:text-slate-900 transition-all">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <rect x="3" y="3" width="7" height="7" rx="1.5"/>
        <rect x="14" y="3" width="7" height="7" rx="1.5"/>
        <rect x="14" y="14" width="7" height="7" rx="1.5"/>
        <rect x="3" y="14" width="7" height="7" rx="1.5"/>
      </svg>
      <span class="text-sm">Dashboard</span>
    </a>

    @php
      $currentRole = strtolower(session('admin_role', 'admin it'));
      $canManageBooks = in_array($currentRole, ['pustakawan', 'admin it', 'admin']);
      $canApprove = in_array($currentRole, ['pustakawan', 'kepala perpus', 'admin it', 'admin']);
    @endphp

    <!-- Tambah Buku -->
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

    <!-- Persetujuan -->
    @if($canApprove)
    <a href="{{ route('admin.persetujuan') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-slate-700 font-bold hover:bg-slate-100 hover:text-slate-900 transition-all">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
        <rect x="8" y="2" width="8" height="4" rx="1"/>
        <path d="m9 14 2 2 4-4"/>
      </svg>
      <span class="text-sm">Persetujuan</span>
    </a>
    @endif

    <!-- Active Laporan Item (Soft Brutalism) -->
    <a href="{{ route('admin.laporan') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl bg-indigo-600 text-white font-extrabold border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] transition-all">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="18" y1="20" x2="18" y2="10"/>
        <line x1="12" y1="20" x2="12" y2="4"/>
        <line x1="6" y1="20" x2="6" y2="14"/>
      </svg>
      <span class="text-sm tracking-wide">Laporan</span>
    </a>

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

<!-- Topbar / Header with Soft Brutalism Styling -->
<header class="fixed top-0 w-full md:w-[calc(100%-16rem)] md:left-64 z-40 pt-safe bg-white/95 backdrop-blur-md border-b-2 border-slate-900 no-print">
    <div class="h-20 px-6 sm:px-8 flex items-center justify-between gap-4">
        <div class="flex flex-col min-w-0">
            <div class="flex items-center gap-2.5 flex-wrap">
                <span class="text-xl sm:text-2xl font-extrabold text-slate-900 truncate tracking-tight font-['Space_Grotesk',sans-serif]">
                    Laporan Eksekutif Perpustakaan 📊
                </span>
                <span class="bg-amber-100 text-amber-950 font-black text-xs px-2.5 py-0.5 rounded-lg border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] uppercase tracking-wide">
                    {{ strtoupper(session('admin_role', 'ADMIN IT')) }}
                </span>
                
                <!-- Real-Time Status Pill -->
                <div id="liveBadge" onclick="toggleAutoSync()" title="Klik untuk mengaktifkan/menonaktifkan auto-update" class="flex items-center gap-2 bg-emerald-100 text-emerald-950 font-bold text-xs px-3 py-1 rounded-xl border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] cursor-pointer soft-btn-hover select-none">
                    <span class="relative flex h-2.5 w-2.5">
                        <span id="livePing" class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-500 opacity-75"></span>
                        <span id="liveDot" class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-600"></span>
                    </span>
                    <span id="liveBadgeText" class="tracking-wide">REAL-TIME AKTIF</span>
                </div>
            </div>
            <div class="flex items-center gap-2 text-xs font-medium text-slate-600 mt-0.5">
                <span>Sinkron terakhir: <span id="lastSyncedText" class="font-bold text-slate-900 font-mono">Baru saja</span></span>
                <span>•</span>
                <button type="button" onclick="triggerManualSync()" class="text-indigo-600 font-bold underline flex items-center gap-0.5 hover:text-slate-900">
                    <span id="syncSpinner" class="material-symbols-outlined text-[14px]">sync</span>
                    <span>Perbarui Sekarang</span>
                </button>
            </div>
        </div>

        <div class="flex items-center gap-3 flex-shrink-0">
            <div class="relative flex items-center justify-center" title="{{ auth()->user()->name ?? 'Aryandi Ramadhani' }}">
                <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-indigo-600 border-2 border-slate-900 flex items-center justify-center text-white font-extrabold text-sm shadow-[2px_2px_0px_#0f172a]">
                    {{ strtoupper(substr(auth()->user()->name ?? 'Aryandi Ramadhani', 0, 2)) }}
                </div>
                <div class="absolute bottom-0 right-0 w-3 h-3 sm:w-3.5 sm:h-3.5 bg-emerald-500 rounded-full border-2 border-slate-900"></div>
            </div>
        </div>
    </div>
</header>

<!-- Floating Toast Notification for Real-Time Events -->
<div id="realtimeToast" class="fixed bottom-6 right-6 z-50 transform translate-y-32 opacity-0 transition-all duration-300 pointer-events-none no-print">
    <div class="bg-amber-100 border-2 border-slate-900 p-4 rounded-2xl shadow-[4px_4px_0px_#0f172a] flex items-center gap-3 max-w-sm">
        <div id="toastIconWrapper" class="w-10 h-10 rounded-xl bg-white border-2 border-slate-900 flex items-center justify-center flex-shrink-0 shadow-[2px_2px_0px_#0f172a]">
            <span id="toastIcon" class="material-symbols-outlined text-2xl text-amber-700">bolt</span>
        </div>
        <div class="flex flex-col">
            <span id="toastTitle" class="font-extrabold text-sm uppercase text-slate-900">Update Real-Time</span>
            <span id="toastMessage" class="text-xs font-semibold text-slate-700">Data peminjaman telah disinkronkan otomatis.</span>
        </div>
    </div>
</div>

<!-- Main Content -->
<main class="flex flex-col relative w-full md:w-[calc(100%-16rem)] md:ml-64 pt-24 pb-24 md:pb-12 min-h-screen">
    
    <!-- KOP SURAT RESMI KHUSUS CETAK (PRINT ONLY) -->
    <div class="print-only mb-6 px-4">
        <div class="text-center border-b-2 border-black pb-4 mb-4">
            <h1 class="text-2xl font-black uppercase tracking-wider">PERPUSTAKAAN DIGITAL LIBRAZ</h1>
            <h2 class="text-lg font-bold">SMK NEGERI 1 CIOMAS - KABUPATEN BOGOR</h2>
            <p class="text-xs text-gray-600">Jl. Raya Laladon No. 1, Ciomas, Kab. Bogor | Email: libraz@smkn1ciomas.sch.id | NPSN: 20231415</p>
            <div class="border-b-2 border-black mt-1"></div>
        </div>
        <div class="flex justify-between items-center text-sm font-bold mb-4">
            <div>
                @if($activeTab === 'harian')
                    <span class="text-lg font-black uppercase">LAPORAN PEMINJAMAN BUKU HARIAN</span><br>
                    <span>Tanggal: {{ \Carbon\Carbon::parse($selectedDate)->translatedFormat('l, d F Y') }}</span>
                @else
                    <span class="text-lg font-black uppercase">LAPORAN BULANAN KETERSEDIAAN & SIRKULASI BUKU</span><br>
                    <span>Periode: {{ \Carbon\Carbon::createFromDate($selectedYear, $selectedMonth, 1)->translatedFormat('F Y') }}</span>
                @endif
            </div>
            <div class="text-right text-xs">
                <span>Dicetak Oleh: {{ auth()->user()->name ?? session('admin_role', 'Administrator') }}</span><br>
                <span>Waktu Cetak: {{ now()->timezone('Asia/Jakarta')->translatedFormat('d F Y, H:i') }} WIB</span>
            </div>
        </div>
    </div>

    <div class="flex flex-col w-full px-6 sm:px-8 gap-6 max-w-7xl mx-auto">
        
        <!-- Flash Messages -->
        @if(session('success'))
        <div class="no-print w-full bg-emerald-100 border-2 border-slate-900 rounded-2xl p-4 shadow-[3px_3px_0px_#0f172a] flex items-center justify-between gap-3 text-emerald-950">
            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined text-emerald-700 font-extrabold text-2xl">check_circle</span>
                <span class="font-extrabold text-sm sm:text-base">{{ session('success') }}</span>
            </div>
            <button type="button" onclick="this.parentElement.remove()" class="font-black text-slate-800 text-lg">✕</button>
        </div>
        @endif

        @if(session('warning'))
        <div class="no-print w-full bg-amber-100 border-2 border-slate-900 rounded-2xl p-4 shadow-[3px_3px_0px_#0f172a] flex items-center justify-between gap-3 text-amber-950">
            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined text-amber-700 font-extrabold text-2xl">warning</span>
                <span class="font-extrabold text-sm sm:text-base">{{ session('warning') }}</span>
            </div>
            <button type="button" onclick="this.parentElement.remove()" class="font-black text-slate-800 text-lg">✕</button>
        </div>
        @endif

        <!-- DUAL REPORT SELECTOR TABS (Soft Brutalism) -->
        <div id="tabSwitcherArea" class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-4 mt-1 no-print">
            <div class="flex items-center gap-2 bg-white p-1.5 rounded-2xl border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] flex-wrap">
                <!-- Tab 1 Button: Laporan Harian -->
                <a href="{{ route('admin.laporan', ['tab' => 'harian', 'date' => $selectedDate]) }}"
                   class="flex-1 sm:flex-initial px-4 py-2.5 rounded-xl font-extrabold text-xs sm:text-sm uppercase flex items-center justify-center gap-2 transition-all {{ $activeTab === 'harian' ? 'bg-indigo-600 text-white border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a]' : 'text-slate-700 hover:bg-slate-100' }}">
                    <span class="material-symbols-outlined text-[20px]">calendar_today</span>
                    <span>1. Laporan Harian</span>
                    <span id="tabBadgeHarian" class="{{ $activeTab === 'harian' ? 'bg-amber-100 text-amber-950 border border-slate-900' : 'bg-slate-100 text-slate-700' }} text-xs px-2 py-0.5 rounded-md font-bold">
                        {{ $harianTotal }} Pinjam
                    </span>
                </a>

                <!-- Tab 2 Button: Laporan Bulanan -->
                <a href="{{ route('admin.laporan', ['tab' => 'bulanan', 'month' => $selectedMonth, 'year' => $selectedYear, 'view' => $monthlyView]) }}"
                   class="flex-1 sm:flex-initial px-4 py-2.5 rounded-xl font-extrabold text-xs sm:text-sm uppercase flex items-center justify-center gap-2 transition-all {{ $activeTab === 'bulanan' ? 'bg-violet-600 text-white border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a]' : 'text-slate-700 hover:bg-slate-100' }}">
                    <span class="material-symbols-outlined text-[20px]">calendar_month</span>
                    <span>2. Laporan Bulanan</span>
                    <span id="tabBadgeBulanan" class="{{ $activeTab === 'bulanan' ? 'bg-violet-100 text-violet-950 border border-slate-900' : 'bg-slate-100 text-slate-700' }} text-xs px-2 py-0.5 rounded-md font-bold">
                        {{ $bulananTersedia }} Koleksi
                    </span>
                </a>
            </div>

            <!-- Single Action Button on Right (Excel Only - Soft Brutalism) -->
            <div class="flex items-center gap-3">
                @if($activeTab === 'harian')
                <button type="button" id="btnExportHarian"
                   onclick="handleDownloadExcel(event, 'harian')"
                   title="Unduh Berkas Excel Laporan Harian Siap Cetak (.xlsx)"
                   class="w-full sm:w-auto px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold text-xs sm:text-sm uppercase border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] soft-btn-hover flex items-center justify-center gap-2 cursor-pointer transition-all active:translate-y-0.5">
                    <span id="exportIconHarian" class="material-symbols-outlined text-[20px]">file_download</span>
                    <span id="exportTextHarian">Unduh Excel Harian (.xlsx)</span>
                </button>
                @else
                <button type="button" id="btnExportBulanan"
                   onclick="handleDownloadExcel(event, 'bulanan')"
                   title="Unduh Berkas Excel Laporan Bulanan 2-Sheet Siap Cetak (.xlsx)"
                   class="w-full sm:w-auto px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold text-xs sm:text-sm uppercase border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] soft-btn-hover flex items-center justify-center gap-2 cursor-pointer transition-all active:translate-y-0.5">
                    <span id="exportIconBulanan" class="material-symbols-outlined text-[20px]">file_download</span>
                    <span id="exportTextBulanan">Unduh Excel Bulanan (.xlsx)</span>
                </button>
                @endif
            </div>
        </div>


        <!-- ========================================================================= -->
        <!-- TAB 1: LAPORAN HARIAN (PEMINJAMAN, NIS SISWA & BUKU YANG DIPINJAM)      -->
        <!-- ========================================================================= -->
        @if($activeTab === 'harian')
        <div class="flex flex-col gap-6" id="containerHarian">

            <!-- Filter Card Harian (Soft Brutalism) -->
            <div class="bg-white p-5 sm:p-6 rounded-2xl border-2 border-slate-900 shadow-[4px_4px_0px_#0f172a] flex flex-col gap-4 no-print">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                    <div class="flex items-center gap-3">
                        <div class="w-11 h-11 rounded-xl bg-amber-100 border-2 border-slate-900 flex items-center justify-center text-amber-900 shadow-[2px_2px_0px_#0f172a] flex-shrink-0">
                            <span class="material-symbols-outlined text-[24px]">filter_alt</span>
                        </div>
                        <div>
                            <h3 class="font-extrabold text-base sm:text-lg text-slate-900 leading-tight">Pilih Tanggal Peminjaman Harian</h3>
                            <p class="text-xs text-slate-600 font-medium mt-0.5">Ganti tanggal di bawah untuk melihat siapa yang meminjam dan buku apa yang dipinjam pada hari tersebut.</p>
                        </div>
                    </div>

                    <!-- Date Form -->
                    <form action="{{ route('admin.laporan') }}" method="GET" class="flex flex-wrap items-center gap-2.5">
                        <input type="hidden" name="tab" value="harian">
                        <div class="relative flex items-center">
                            <span class="material-symbols-outlined absolute left-3 text-slate-400 text-[18px]">calendar_today</span>
                            <input type="date" id="inputDateHarian" name="date" value="{{ $selectedDate }}"
                                   class="pl-9 pr-3.5 py-2 rounded-xl border-2 border-slate-900 bg-slate-50 font-bold text-xs sm:text-sm text-slate-900 shadow-[2px_2px_0px_#0f172a] focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>
                        <button type="submit" class="px-4 py-2 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-extrabold text-xs sm:text-sm uppercase border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] soft-btn-hover flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[16px]">search</span>
                            <span>Terapkan</span>
                        </button>
                        <a href="{{ route('admin.laporan', ['tab' => 'harian', 'date' => now()->format('Y-m-d')]) }}" class="px-3.5 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold text-xs sm:text-sm border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] soft-btn-hover">
                            Hari Ini
                        </a>
                    </form>
                </div>

                <!-- Quick Date Pills -->
                @if($recentActiveDates->isNotEmpty())
                <div class="pt-3 border-t border-slate-200 flex items-center gap-2 flex-wrap">
                    <span class="text-[11px] font-bold uppercase text-slate-400 tracking-wider">Lompat Tanggal Cepat:</span>
                    @foreach($recentActiveDates as $rad)
                        @php
                            $isCurrentPicked = ($rad->borrow_date == $selectedDate);
                        @endphp
                        <a href="{{ route('admin.laporan', ['tab' => 'harian', 'date' => $rad->borrow_date]) }}"
                           class="quick-filter-badge px-3 py-1 rounded-lg border-2 border-slate-900 text-xs font-bold shadow-[1.5px_1.5px_0px_#0f172a] soft-btn-hover transition-all {{ $isCurrentPicked ? 'bg-indigo-600 text-white' : 'bg-white hover:bg-amber-100 text-slate-800' }}">
                            {{ \Carbon\Carbon::parse($rad->borrow_date)->translatedFormat('d M Y') }}
                            <span class="ml-1 opacity-75">({{ $rad->count }})</span>
                        </a>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- KPI Metric Summary Cards Harian (Soft Brutalism Pastel Tones) -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
                <!-- 1. Total Buku Dipinjam -->
                <div id="cardHarianTotal" class="bg-emerald-100/90 p-5 rounded-2xl border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] flex flex-col justify-between soft-card-hover">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-900 bg-white/90 px-2 py-0.5 rounded-md border border-slate-900">TOTAL PINJAM</span>
                        <span class="material-symbols-outlined text-2xl text-emerald-800">menu_book</span>
                    </div>
                    <div id="kpiHarianTotal" class="text-3xl font-extrabold text-slate-900 my-1 font-['Space_Grotesk',sans-serif]">{{ number_format($harianTotal) }}</div>
                    <span class="text-xs font-semibold text-slate-600">Buku dipinjam pada hari ini</span>
                </div>

                <!-- 2. Siswa yang Meminjam -->
                <div id="cardHarianSiswa" class="bg-sky-100/90 p-5 rounded-2xl border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] flex flex-col justify-between soft-card-hover">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-900 bg-white/90 px-2 py-0.5 rounded-md border border-slate-900">SISWA PEMINJAM</span>
                        <span class="material-symbols-outlined text-2xl text-sky-800">group</span>
                    </div>
                    <div id="kpiHarianSiswa" class="text-3xl font-extrabold text-slate-900 my-1 font-['Space_Grotesk',sans-serif]">{{ number_format($harianSiswa) }}</div>
                    <span class="text-xs font-semibold text-slate-600">Siswa aktif bertransaksi</span>
                </div>

                <!-- 3. Masih Dipinjam (Aktif) -->
                <div id="cardHarianDipinjam" class="bg-amber-100/90 p-5 rounded-2xl border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] flex flex-col justify-between soft-card-hover">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-900 bg-white/90 px-2 py-0.5 rounded-md border border-slate-900">SEDANG DIPINJAM</span>
                        <span class="material-symbols-outlined text-2xl text-amber-800">pending</span>
                    </div>
                    <div id="kpiHarianDipinjam" class="text-3xl font-extrabold text-slate-900 my-1 font-['Space_Grotesk',sans-serif]">{{ number_format($harianDipinjam) }}</div>
                    <span class="text-xs font-semibold text-slate-600">Belum dikembalikan ke rak</span>
                </div>

                <!-- 4. Sudah Dikembalikan -->
                <div id="cardHarianKembali" class="bg-violet-100/90 p-5 rounded-2xl border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] flex flex-col justify-between soft-card-hover">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-900 bg-white/90 px-2 py-0.5 rounded-md border border-slate-900">SUDAH KEMBALI</span>
                        <span class="material-symbols-outlined text-2xl text-violet-800">task_alt</span>
                    </div>
                    <div id="kpiHarianKembali" class="text-3xl font-extrabold text-slate-900 my-1 font-['Space_Grotesk',sans-serif]">{{ number_format($harianKembali) }}</div>
                    <span class="text-xs font-semibold text-slate-600">Selesai dibaca & kembali</span>
                </div>
            </div>

            <!-- Tabel Data Laporan Harian (Soft Brutalism) -->
            <div class="table-container rounded-2xl bg-white border-2 border-slate-900 shadow-[4px_4px_0px_#0f172a] overflow-hidden flex flex-col">
                <!-- Table Card Header -->
                <div class="p-4 sm:p-5 border-b-2 border-slate-900 bg-slate-900 text-white flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-lg bg-indigo-500 border border-white/20 flex items-center justify-center text-white flex-shrink-0">
                            <span class="material-symbols-outlined text-[20px]">list_alt</span>
                        </div>
                        <div>
                            <h3 class="font-extrabold text-base sm:text-lg tracking-tight leading-tight uppercase font-['Space_Grotesk',sans-serif]">
                                DAFTAR PEMINJAMAN HARIAN (<span id="textHeaderDate">{{ \Carbon\Carbon::parse($selectedDate)->translatedFormat('d F Y') }}</span>)
                            </h3>
                            <span class="text-xs text-slate-300 font-medium">Laporan transaksi harian real-time lengkap dengan NIS siswa, nama peminjam, dan buku yang dipinjam.</span>
                        </div>
                    </div>
                </div>

                <!-- Table Content -->
                <div class="overflow-x-auto p-3 sm:p-4 bg-slate-50/50">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-slate-800 uppercase tracking-wider bg-slate-100 border-2 border-slate-900 text-[11px] font-extrabold">
                                <th class="p-3 text-center w-12">No</th>
                                <th class="p-3 text-center">ID Resi</th>
                                <th class="p-3">NIS Siswa</th>
                                <th class="p-3">Peminjam / Siswa</th>
                                <th class="p-3">Buku yang Dipinjam</th>
                                <th class="p-3">Kategori & Rak</th>
                                <th class="p-3 text-center">Waktu Pinjam</th>
                                <th class="p-3 text-center">Batas Kembali</th>
                                <th class="p-3 text-center">Status</th>
                                <th class="p-3 text-center no-print">Aksi Status</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyHarian" class="text-slate-900 divide-y divide-slate-200">
                            @forelse($harianBorrowings as $index => $item)
                            @php
                                $statusUpper = strtoupper($item->status ?? 'PENDING');
                                $isOverdue = ($item->status == 'approved' || $item->status == 'borrowed') && $item->due_date && \Carbon\Carbon::parse($item->due_date)->isPast() && is_null($item->returned_at);
                            @endphp
                            <tr id="rowBorrow_{{ $item->id }}" class="bg-white hover:bg-slate-50 transition-colors">
                                <!-- No -->
                                <td class="p-3 text-xs text-center font-bold text-slate-600">
                                    {{ $harianBorrowings->firstItem() + $index }}
                                </td>

                                <!-- Resi -->
                                <td class="p-3 text-xs text-center font-bold">
                                    <span class="bg-slate-100 text-slate-800 px-2 py-0.5 rounded border border-slate-300 font-mono text-[11px]">
                                        #{{ $item->id }}
                                    </span>
                                </td>

                                <!-- NIS SISWA -->
                                <td class="p-3">
                                    <span class="inline-flex items-center gap-1 font-mono font-extrabold text-xs text-amber-950 bg-amber-100 px-2.5 py-1 rounded-lg border border-slate-900 shadow-[1px_1px_0px_#0f172a]">
                                        <span class="material-symbols-outlined text-[14px]">badge</span>
                                        {{ $item->user->nis ?? '-' }}
                                    </span>
                                </td>

                                <!-- Nama Peminjam -->
                                <td class="p-3 font-bold text-xs sm:text-sm">
                                    <div class="flex items-center gap-2">
                                        <div class="w-7 h-7 rounded-full bg-indigo-100 border border-slate-900 flex items-center justify-center text-indigo-950 font-extrabold text-[11px] flex-shrink-0">
                                            {{ strtoupper(substr($item->user->name ?? 'User', 0, 2)) }}
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="font-extrabold text-slate-900">{{ $item->user->name ?? 'Siswa' }}</span>
                                            <span class="text-[10px] text-slate-500 font-medium">{{ $item->user->role ?? 'Siswa' }}</span>
                                        </div>
                                    </div>
                                </td>

                                <!-- Buku yang Dipinjam -->
                                <td class="p-3 font-bold text-xs sm:text-sm">
                                    <div class="flex flex-col">
                                        <span class="font-extrabold text-slate-900 hover:text-indigo-600 transition-colors">
                                            {{ $item->book->title ?? 'Buku Tidak Diketahui' }}
                                        </span>
                                        <span class="text-[11px] text-slate-500 font-normal">Pengarang: {{ $item->book->author ?? 'Kemdikbud' }}</span>
                                    </div>
                                </td>

                                <!-- Kategori & Rak -->
                                <td class="p-3 font-semibold text-xs">
                                    <div class="flex flex-col gap-0.5">
                                        <span class="bg-slate-100 text-slate-700 px-2 py-0.5 rounded border border-slate-300 text-[10px] font-bold w-fit">
                                            {{ $item->book->category ?? 'Umum' }}
                                        </span>
                                        <span class="text-[10px] text-slate-500">{{ $item->book->rack ?? 'Rak Utama' }}</span>
                                    </div>
                                </td>

                                <!-- Waktu Pinjam -->
                                <td class="p-3 text-center text-xs font-semibold text-slate-700">
                                    <div>{{ $item->borrowed_at ? $item->borrowed_at->timezone('Asia/Jakarta')->translatedFormat('d M Y') : '-' }}</div>
                                    <div class="text-[10px] text-slate-400 font-mono">{{ $item->borrowed_at ? $item->borrowed_at->timezone('Asia/Jakarta')->format('H:i') . ' WIB' : '' }}</div>
                                </td>

                                <!-- Batas Kembali -->
                                <td class="p-3 text-center text-xs font-bold">
                                    <span class="{{ $isOverdue ? 'text-rose-600 font-extrabold' : 'text-slate-700' }}">
                                        {{ $item->due_date ? $item->due_date->translatedFormat('d M Y') : '-' }}
                                    </span>
                                </td>

                                <!-- Status Badge (Pastel Soft Brutalism) -->
                                <td class="p-3 text-center" id="statusBadgeCell_{{ $item->id }}">
                                    @if($item->status == 'lost' || $item->status == 'hilang')
                                        <span class="inline-flex items-center gap-1 bg-rose-100 text-rose-950 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900">
                                            <span class="material-symbols-outlined text-[14px]">report_problem</span> HILANG
                                        </span>
                                    @elseif($item->status == 'returned' || !is_null($item->returned_at))
                                        <span class="inline-flex items-center gap-1 bg-emerald-100 text-emerald-950 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900">
                                            <span class="material-symbols-outlined text-[14px]">task_alt</span> DIKEMBALIKAN
                                        </span>
                                    @elseif($isOverdue)
                                        <span class="inline-flex items-center gap-1 bg-rose-200 text-rose-950 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900 animate-pulse">
                                            <span class="material-symbols-outlined text-[14px]">warning</span> TERLAMBAT
                                        </span>
                                    @elseif($item->status == 'approved' || $item->status == 'borrowed')
                                        <span class="inline-flex items-center gap-1 bg-amber-100 text-amber-950 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900">
                                            <span class="material-symbols-outlined text-[14px]">schedule</span> DIPINJAM
                                        </span>
                                    @elseif($item->status == 'rejected')
                                        <span class="inline-flex items-center gap-1 bg-slate-200 text-slate-800 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900">
                                            DITOLAK
                                        </span>
                                    @else
                                        <span class="inline-flex items-center gap-1 bg-white text-slate-800 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900">
                                            MENUNGGU
                                        </span>
                                    @endif
                                </td>

                                <!-- Aksi Cepat Admin -->
                                <td class="p-3 text-center no-print" id="actionButtonsCell_{{ $item->id }}">
                                    <div class="flex items-center justify-center gap-1.5">
                                        @if($item->status !== 'returned' && is_null($item->returned_at))
                                        <button type="button" onclick="handleQuickStatus({{ $item->id }}, 'returned')" title="Tandai Sudah Dikembalikan" class="px-2 py-1 bg-emerald-100 hover:bg-emerald-200 text-emerald-950 text-[10px] font-extrabold rounded-md border border-slate-900 shadow-[1px_1px_0px_#0f172a] soft-btn-hover flex items-center gap-0.5">
                                            <span class="material-symbols-outlined text-[13px]">check</span> Kembali
                                        </button>
                                        @endif

                                        @if($item->status !== 'lost')
                                        <button type="button" onclick="handleQuickStatus({{ $item->id }}, 'lost')" title="Tandai Buku Hilang" class="px-2 py-1 bg-rose-100 hover:bg-rose-200 text-rose-950 text-[10px] font-extrabold rounded-md border border-slate-900 shadow-[1px_1px_0px_#0f172a] soft-btn-hover flex items-center gap-0.5">
                                            <span class="material-symbols-outlined text-[13px]">report</span> Hilang
                                        </button>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr id="emptyRowHarian">
                                <td colspan="10" class="p-8 text-center bg-white rounded-xl">
                                    <div class="flex flex-col items-center justify-center gap-2">
                                        <div class="w-12 h-12 rounded-full bg-amber-100 border border-slate-900 flex items-center justify-center">
                                            <span class="material-symbols-outlined text-2xl text-amber-800">event_busy</span>
                                        </div>
                                        <h4 class="text-base font-extrabold text-slate-900">Tidak Ada Peminjaman Pada Tanggal Ini</h4>
                                        <p class="text-xs font-medium text-slate-500 max-w-sm">Belum ada catatan buku yang dipinjam pada tanggal {{ \Carbon\Carbon::parse($selectedDate)->translatedFormat('d F Y') }}.</p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination Card Footer Harian -->
                <div class="p-4 border-t-2 border-slate-900 bg-white flex flex-col sm:flex-row items-center justify-between gap-3 no-print">
                    <span id="paginationInfoHarian" class="text-xs font-bold text-slate-600">
                        Menampilkan data ke {{ $harianBorrowings->firstItem() ?? 0 }} - {{ $harianBorrowings->lastItem() ?? 0 }} dari total {{ $harianBorrowings->total() }} peminjaman
                    </span>
                    <div class="pagination-nav">
                        {{ $harianBorrowings->links() }}
                    </div>
                </div>
            </div>

        </div>
        @endif


        <!-- ========================================================================= -->
        <!-- TAB 2: LAPORAN BULANAN (KETERSEDIAAN BUKU, HILANG, PINJAM, KEMBALI)       -->
        <!-- ========================================================================= -->
        @if($activeTab === 'bulanan')
        <div class="flex flex-col gap-6" id="containerBulanan">

            <!-- Filter Card Bulanan (Soft Brutalism) -->
            <div class="bg-white p-5 sm:p-6 rounded-2xl border-2 border-slate-900 shadow-[4px_4px_0px_#0f172a] flex flex-col gap-4 no-print">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                    <div class="flex items-center gap-3">
                        <div class="w-11 h-11 rounded-xl bg-violet-100 border-2 border-slate-900 flex items-center justify-center text-violet-900 shadow-[2px_2px_0px_#0f172a] flex-shrink-0">
                            <span class="material-symbols-outlined text-[24px]">date_range</span>
                        </div>
                        <div>
                            <h3 class="font-extrabold text-base sm:text-lg text-slate-900 leading-tight">Pilih Periode Bulan & Tahun</h3>
                            <p class="text-xs text-slate-600 font-medium mt-0.5">Filter data ketersediaan buku, buku hilang, sedang dipinjam, belum kembali, dan sudah dikembalikan.</p>
                        </div>
                    </div>

                    <!-- Month & Year Form -->
                    <form action="{{ route('admin.laporan') }}" method="GET" class="flex flex-wrap items-center gap-2.5">
                        <input type="hidden" name="tab" value="bulanan">
                        <input type="hidden" name="view" value="{{ $monthlyView }}">

                        <!-- Dropdown Bulan -->
                        <div class="relative">
                            <select id="selectMonthBulanan" name="month" class="px-3.5 py-2 rounded-xl border-2 border-slate-900 bg-slate-50 font-bold text-xs sm:text-sm text-slate-900 shadow-[2px_2px_0px_#0f172a] focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                @for($m = 1; $m <= 12; $m++)
                                    @php
                                        $monthLabel = \Carbon\Carbon::create(null, $m, 1)->translatedFormat('F');
                                    @endphp
                                    <option value="{{ $m }}" {{ $selectedMonth == $m ? 'selected' : '' }}>
                                        {{ $monthLabel }}
                                    </option>
                                @endfor
                            </select>
                        </div>

                        <!-- Dropdown Tahun -->
                        <div class="relative">
                            <select id="selectYearBulanan" name="year" class="px-3.5 py-2 rounded-xl border-2 border-slate-900 bg-slate-50 font-bold text-xs sm:text-sm text-slate-900 shadow-[2px_2px_0px_#0f172a] focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                @for($y = 2024; $y <= 2028; $y++)
                                    <option value="{{ $y }}" {{ $selectedYear == $y ? 'selected' : '' }}>
                                        Tahun {{ $y }}
                                    </option>
                                @endfor
                            </select>
                        </div>

                        <button type="submit" class="px-4 py-2 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-extrabold text-xs sm:text-sm uppercase border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] soft-btn-hover flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[16px]">search</span>
                            <span>Terapkan</span>
                        </button>

                        <a href="{{ route('admin.laporan', ['tab' => 'bulanan', 'month' => now()->month, 'year' => now()->year, 'view' => $monthlyView]) }}" class="px-3.5 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold text-xs sm:text-sm border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] soft-btn-hover">
                            Bulan Ini
                        </a>
                    </form>
                </div>

                <!-- View Switcher (Soft Brutalism) -->
                <div class="pt-3 border-t border-slate-200 flex items-center justify-between gap-3 flex-wrap">
                    <span class="text-[11px] font-bold uppercase text-slate-400 tracking-wider">Tampilan Data Tabel:</span>
                    <div class="flex items-center gap-2">
                        <a href="{{ route('admin.laporan', ['tab' => 'bulanan', 'month' => $selectedMonth, 'year' => $selectedYear, 'view' => 'books']) }}"
                           class="px-3 py-1.5 rounded-lg text-xs font-bold border-2 border-slate-900 shadow-[1.5px_1.5px_0px_#0f172a] soft-btn-hover transition-all {{ $monthlyView === 'books' ? 'bg-amber-100 text-amber-950 font-extrabold' : 'bg-white text-slate-700 hover:bg-slate-50' }}">
                            📚 1. Rekap Ketersediaan & Koleksi Buku
                        </a>
                        <a href="{{ route('admin.laporan', ['tab' => 'bulanan', 'month' => $selectedMonth, 'year' => $selectedYear, 'view' => 'transactions']) }}"
                           class="px-3 py-1.5 rounded-lg text-xs font-bold border-2 border-slate-900 shadow-[1.5px_1.5px_0px_#0f172a] soft-btn-hover transition-all {{ $monthlyView === 'transactions' ? 'bg-sky-100 text-sky-950 font-extrabold' : 'bg-white text-slate-700 hover:bg-slate-50' }}">
                            📝 2. Log Rincian Transaksi Bulanan (<span id="badgeBulananTransTotal">{{ $bulananTotalSirkulasi }}</span>)
                        </a>
                    </div>
                </div>
            </div>

            <!-- KPI Metric Summary Cards Bulanan (Soft Pastel Tones) -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3.5 sm:gap-4">
                <!-- 1. Buku yang Tersedia -->
                <div id="cardBulananTersedia" class="bg-amber-100/90 p-4 sm:p-5 rounded-2xl border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] flex flex-col justify-between soft-card-hover">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-900 bg-white/90 px-2 py-0.5 rounded-md border border-slate-900">1. TERSEDIA</span>
                        <span class="material-symbols-outlined text-2xl text-amber-800">inventory_2</span>
                    </div>
                    <div id="kpiBulananTersedia" class="text-2xl sm:text-3xl font-extrabold text-slate-900 my-1 font-['Space_Grotesk',sans-serif]">{{ number_format($bulananTersedia) }}</div>
                    <span class="text-[11px] font-semibold text-slate-600">Stok siap di rak</span>
                </div>

                <!-- 2. Buku Sedang Dipinjam -->
                <div id="cardBulananDipinjam" class="bg-sky-100/90 p-4 sm:p-5 rounded-2xl border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] flex flex-col justify-between soft-card-hover">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-900 bg-white/90 px-2 py-0.5 rounded-md border border-slate-900">2. SEDANG DIPINJAM</span>
                        <span class="material-symbols-outlined text-2xl text-sky-800">local_library</span>
                    </div>
                    <div id="kpiBulananDipinjam" class="text-2xl sm:text-3xl font-extrabold text-slate-900 my-1 font-['Space_Grotesk',sans-serif]">{{ number_format($bulananDipinjam) }}</div>
                    <span class="text-[11px] font-semibold text-slate-600">Peminjaman aktif</span>
                </div>

                <!-- 3. Belum Dikembalikan (Terlambat) -->
                <div id="cardBulananBelumKembali" class="bg-rose-100/90 p-4 sm:p-5 rounded-2xl border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] flex flex-col justify-between soft-card-hover text-slate-900">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-900 bg-white/90 px-2 py-0.5 rounded-md border border-slate-900">3. BELUM KEMBALI</span>
                        <span class="material-symbols-outlined text-2xl text-rose-700">warning</span>
                    </div>
                    <div id="kpiBulananBelumKembali" class="text-2xl sm:text-3xl font-extrabold text-slate-900 my-1 font-['Space_Grotesk',sans-serif]">{{ number_format($bulananBelumKembali) }}</div>
                    <span class="text-[11px] font-semibold text-slate-600">Lewat jatuh tempo</span>
                </div>

                <!-- 4. Sudah Dikembalikan -->
                <div id="cardBulananKembali" class="bg-emerald-100/90 p-4 sm:p-5 rounded-2xl border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] flex flex-col justify-between soft-card-hover">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-900 bg-white/90 px-2 py-0.5 rounded-md border border-slate-900">4. SUDAH KEMBALI</span>
                        <span class="material-symbols-outlined text-2xl text-emerald-800">task_alt</span>
                    </div>
                    <div id="kpiBulananKembali" class="text-2xl sm:text-3xl font-extrabold text-slate-900 my-1 font-['Space_Grotesk',sans-serif]">{{ number_format($bulananKembali) }}</div>
                    <span class="text-[11px] font-semibold text-slate-600">Telah kembali</span>
                </div>

                <!-- 5. Buku Hilang -->
                <div id="cardBulananHilang" class="bg-purple-100/90 p-4 sm:p-5 rounded-2xl border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] flex flex-col justify-between soft-card-hover col-span-2 md:col-span-1">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-900 bg-white/90 px-2 py-0.5 rounded-md border border-slate-900">5. BUKU HILANG</span>
                        <span class="material-symbols-outlined text-2xl text-purple-800">report_problem</span>
                    </div>
                    <div id="kpiBulananHilang" class="text-2xl sm:text-3xl font-extrabold text-slate-900 my-1 font-['Space_Grotesk',sans-serif]">{{ number_format($bulananHilang) }}</div>
                    <span class="text-[11px] font-semibold text-slate-600">Dalam pembukuan</span>
                </div>
            </div>

            <!-- TAMPILAN 1: REKAPITULASI KETERSEDIAAN PER BUKU -->
            @if($monthlyView === 'books')
            <div class="table-container rounded-2xl bg-white border-2 border-slate-900 shadow-[4px_4px_0px_#0f172a] overflow-hidden flex flex-col">
                <!-- Card Header -->
                <div class="p-4 sm:p-5 border-b-2 border-slate-900 bg-slate-900 text-white flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-lg bg-violet-600 border border-white/20 flex items-center justify-center text-white flex-shrink-0">
                            <span class="material-symbols-outlined text-[20px]">shelves</span>
                        </div>
                        <div>
                            <h3 class="font-extrabold text-base sm:text-lg tracking-tight leading-tight uppercase font-['Space_Grotesk',sans-serif]">
                                REKAPITULASI KETERSEDIAAN & STATUS BUKU ({{ \Carbon\Carbon::createFromDate($selectedYear, $selectedMonth, 1)->translatedFormat('F Y') }})
                            </h3>
                            <span class="text-xs text-slate-300 font-medium">
                                Meliputi stok tersedia, buku sedang dipinjam, buku belum kembali (terlambat), sudah dikembalikan, dan buku hilang.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Table Content -->
                <div class="overflow-x-auto p-3 sm:p-4 bg-slate-50/50">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-slate-800 uppercase tracking-wider bg-slate-100 border-2 border-slate-900 text-[11px] font-extrabold">
                                <th class="p-3 text-center w-12">No</th>
                                <th class="p-3">Kode / ISBN</th>
                                <th class="p-3">Judul Buku & Pengarang</th>
                                <th class="p-3">Kategori & Rak</th>
                                <th class="p-3 text-center bg-amber-50">Stok Tersedia</th>
                                <th class="p-3 text-center bg-sky-50">Dipinjam</th>
                                <th class="p-3 text-center bg-rose-50">Belum Kembali</th>
                                <th class="p-3 text-center bg-emerald-50">Sudah Kembali</th>
                                <th class="p-3 text-center bg-purple-50">Buku Hilang</th>
                                <th class="p-3 text-center">Total Sirkulasi</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyBulananBooks" class="text-slate-900 divide-y divide-slate-200">
                            @forelse($bulananBooks as $index => $book)
                            <tr class="bg-white hover:bg-slate-50 transition-colors">
                                <!-- No -->
                                <td class="p-3 text-xs text-center font-bold text-slate-600">
                                    {{ $bulananBooks->firstItem() + $index }}
                                </td>

                                <!-- ISBN -->
                                <td class="p-3 font-semibold text-xs">
                                    <span class="bg-slate-100 text-slate-800 px-2 py-0.5 rounded border border-slate-300 font-mono text-[11px] font-bold">
                                        {{ $book->isbn ?: 'LIB-' . str_pad($book->id, 4, '0', STR_PAD_LEFT) }}
                                    </span>
                                </td>

                                <!-- Judul Buku -->
                                <td class="p-3 font-bold text-xs sm:text-sm">
                                    <div class="flex flex-col">
                                        <span class="font-extrabold text-slate-900">{{ $book->title }}</span>
                                        <span class="text-[11px] text-slate-500 font-normal">Pengarang: {{ $book->author }}</span>
                                    </div>
                                </td>

                                <!-- Kategori & Rak -->
                                <td class="p-3 font-semibold text-xs">
                                    <div class="flex flex-col gap-0.5">
                                        <span class="bg-slate-100 text-slate-700 px-2 py-0.5 rounded border border-slate-300 font-bold text-[10px] w-fit">
                                            {{ $book->category }}
                                        </span>
                                        <span class="text-[10px] text-slate-500">{{ $book->rack ?: 'Rak Utama' }}</span>
                                    </div>
                                </td>

                                <!-- Stok Tersedia -->
                                <td class="p-3 text-center font-extrabold text-xs sm:text-sm">
                                    <span class="bg-amber-100 text-amber-950 px-2.5 py-1 rounded-lg border border-slate-900">
                                        {{ number_format($book->stock) }}
                                    </span>
                                </td>

                                <!-- Sedang Dipinjam -->
                                <td class="p-3 text-center font-bold text-xs sm:text-sm">
                                    <span class="{{ $book->active_loans > 0 ? 'bg-sky-100 text-sky-950 border border-slate-900' : 'text-slate-400' }} px-2 py-0.5 rounded-md">
                                        {{ number_format($book->active_loans) }}
                                    </span>
                                </td>

                                <!-- Belum Kembali / Terlambat -->
                                <td class="p-3 text-center font-bold text-xs sm:text-sm">
                                    <span class="{{ $book->overdue_loans > 0 ? 'bg-rose-100 text-rose-950 border border-slate-900' : 'text-slate-400' }} px-2 py-0.5 rounded-md">
                                        {{ number_format($book->overdue_loans) }}
                                    </span>
                                </td>

                                <!-- Sudah Dikembalikan -->
                                <td class="p-3 text-center font-bold text-xs sm:text-sm">
                                    <span class="{{ $book->returned_loans > 0 ? 'bg-emerald-100 text-emerald-950 border border-slate-900' : 'text-slate-400' }} px-2 py-0.5 rounded-md">
                                        {{ number_format($book->returned_loans) }}
                                    </span>
                                </td>

                                <!-- Buku Hilang -->
                                <td class="p-3 text-center font-bold text-xs sm:text-sm">
                                    <span class="{{ $book->lost_loans > 0 ? 'bg-purple-100 text-purple-950 border border-slate-900' : 'text-slate-400' }} px-2 py-0.5 rounded-md">
                                        {{ number_format($book->lost_loans) }}
                                    </span>
                                </td>

                                <!-- Total Sirkulasi -->
                                <td class="p-3 text-center font-extrabold text-xs sm:text-sm">
                                    <span class="bg-slate-100 text-slate-800 px-2 py-0.5 rounded border border-slate-300">
                                        {{ number_format($book->total_loans) }}
                                    </span>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="10" class="p-8 text-center bg-white rounded-xl text-slate-600 font-bold">
                                    Belum ada data buku dalam katalog perpustakaan.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination Card Footer Bulanan (Books) -->
                <div class="p-4 border-t-2 border-slate-900 bg-white flex flex-col sm:flex-row items-center justify-between gap-3 no-print">
                    <span class="text-xs font-bold text-slate-600">
                        Menampilkan buku ke {{ $bulananBooks->firstItem() ?? 0 }} - {{ $bulananBooks->lastItem() ?? 0 }} dari total {{ $bulananBooks->total() }} judul buku
                    </span>
                    <div class="pagination-nav">
                        {{ $bulananBooks->links() }}
                    </div>
                </div>
            </div>
            @endif

            <!-- TAMPILAN 2: RINCIAN TRANSAKSI SIRKULASI SISWA -->
            @if($monthlyView === 'transactions')
            <div class="table-container rounded-2xl bg-white border-2 border-slate-900 shadow-[4px_4px_0px_#0f172a] overflow-hidden flex flex-col">
                <!-- Card Header -->
                <div class="p-4 sm:p-5 border-b-2 border-slate-900 bg-slate-900 text-white flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-lg bg-sky-600 border border-white/20 flex items-center justify-center text-white flex-shrink-0">
                            <span class="material-symbols-outlined text-[20px]">manage_history</span>
                        </div>
                        <div>
                            <h3 class="font-extrabold text-base sm:text-lg tracking-tight leading-tight uppercase font-['Space_Grotesk',sans-serif]">
                                LOG RINCIAN TRANSAKSI BULANAN ({{ \Carbon\Carbon::createFromDate($selectedYear, $selectedMonth, 1)->translatedFormat('F Y') }})
                            </h3>
                            <span class="text-xs text-slate-300 font-medium">Daftar riwayat peminjaman siswa lengkap dengan NIS, judul buku, batas kembali, dan status transaksi.</span>
                        </div>
                    </div>
                </div>

                <!-- Table Content -->
                <div class="overflow-x-auto p-3 sm:p-4 bg-slate-50/50">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-slate-800 uppercase tracking-wider bg-slate-100 border-2 border-slate-900 text-[11px] font-extrabold">
                                <th class="p-3 text-center w-12">No</th>
                                <th class="p-3 text-center">ID Resi</th>
                                <th class="p-3">NIS Siswa</th>
                                <th class="p-3">Peminjam</th>
                                <th class="p-3">Judul Buku</th>
                                <th class="p-3 text-center">Tgl Pinjam</th>
                                <th class="p-3 text-center">Batas Kembali</th>
                                <th class="p-3 text-center">Tgl Kembali</th>
                                <th class="p-3 text-center">Status</th>
                                <th class="p-3 text-center no-print">Aksi Status</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyBulananTransactions" class="text-slate-900 divide-y divide-slate-200">
                            @forelse($bulananTransactions as $index => $item)
                            @php
                                $statusUpper = strtoupper($item->status ?? 'PENDING');
                                $isOverdue = ($item->status == 'approved' || $item->status == 'borrowed') && $item->due_date && \Carbon\Carbon::parse($item->due_date)->isPast() && is_null($item->returned_at);
                            @endphp
                            <tr id="rowTrans_{{ $item->id }}" class="bg-white hover:bg-slate-50 transition-colors">
                                <!-- No -->
                                <td class="p-3 text-xs text-center font-bold text-slate-600">
                                    {{ $bulananTransactions->firstItem() + $index }}
                                </td>

                                <!-- Resi -->
                                <td class="p-3 text-xs text-center font-bold">
                                    <span class="bg-slate-100 text-slate-800 px-2 py-0.5 rounded border border-slate-300 font-mono text-[11px]">
                                        #{{ $item->id }}
                                    </span>
                                </td>

                                <!-- NIS SISWA -->
                                <td class="p-3">
                                    <span class="inline-flex items-center gap-1 font-mono font-extrabold text-xs text-amber-950 bg-amber-100 px-2.5 py-1 rounded-lg border border-slate-900 shadow-[1px_1px_0px_#0f172a]">
                                        {{ $item->user->nis ?? '-' }}
                                    </span>
                                </td>

                                <!-- Nama Peminjam -->
                                <td class="p-3 font-extrabold text-xs sm:text-sm text-slate-900">
                                    {{ $item->user->name ?? 'Siswa' }}
                                </td>

                                <!-- Judul Buku -->
                                <td class="p-3 font-bold text-xs sm:text-sm text-slate-900">
                                    {{ $item->book->title ?? 'Buku Tidak Diketahui' }}
                                </td>

                                <!-- Tgl Pinjam -->
                                <td class="p-3 text-center text-xs font-semibold text-slate-700">
                                    {{ $item->borrowed_at ? $item->borrowed_at->timezone('Asia/Jakarta')->translatedFormat('d M Y') : '-' }}
                                </td>

                                <!-- Batas Kembali -->
                                <td class="p-3 text-center text-xs font-bold {{ $isOverdue ? 'text-rose-600 font-extrabold' : 'text-slate-700' }}">
                                    {{ $item->due_date ? $item->due_date->translatedFormat('d M Y') : '-' }}
                                </td>

                                <!-- Tgl Kembali -->
                                <td class="p-3 text-center text-xs font-semibold text-slate-700">
                                    {{ $item->returned_at ? $item->returned_at->timezone('Asia/Jakarta')->translatedFormat('d M Y') : '-' }}
                                </td>

                                <!-- Status Badge -->
                                <td class="p-3 text-center">
                                    @if($item->status == 'lost' || $item->status == 'hilang')
                                        <span class="inline-flex items-center gap-1 bg-rose-100 text-rose-950 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900">
                                            HILANG
                                        </span>
                                    @elseif($item->status == 'returned' || !is_null($item->returned_at))
                                        <span class="inline-flex items-center gap-1 bg-emerald-100 text-emerald-950 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900">
                                            DIKEMBALIKAN
                                        </span>
                                    @elseif($isOverdue)
                                        <span class="inline-flex items-center gap-1 bg-rose-200 text-rose-950 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900">
                                            TERLAMBAT
                                        </span>
                                    @elseif($item->status == 'approved' || $item->status == 'borrowed')
                                        <span class="inline-flex items-center gap-1 bg-amber-100 text-amber-950 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900">
                                            DIPINJAM
                                        </span>
                                    @else
                                        <span class="inline-flex items-center gap-1 bg-slate-200 text-slate-800 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900">
                                            {{ strtoupper($item->status) }}
                                        </span>
                                    @endif
                                </td>

                                <!-- Aksi Cepat Admin -->
                                <td class="p-3 text-center no-print" id="actionTransCell_{{ $item->id }}">
                                    <div class="flex items-center justify-center gap-1.5">
                                        @if($item->status !== 'returned' && is_null($item->returned_at))
                                        <button type="button" onclick="handleQuickStatus({{ $item->id }}, 'returned')" title="Tandai Sudah Dikembalikan" class="px-2 py-1 bg-emerald-100 hover:bg-emerald-200 text-emerald-950 text-[10px] font-extrabold rounded-md border border-slate-900 shadow-[1px_1px_0px_#0f172a] soft-btn-hover flex items-center gap-0.5">
                                            <span class="material-symbols-outlined text-[13px]">check</span> Kembali
                                        </button>
                                        @endif

                                        @if($item->status !== 'lost')
                                        <button type="button" onclick="handleQuickStatus({{ $item->id }}, 'lost')" title="Tandai Buku Hilang" class="px-2 py-1 bg-rose-100 hover:bg-rose-200 text-rose-950 text-[10px] font-extrabold rounded-md border border-slate-900 shadow-[1px_1px_0px_#0f172a] soft-btn-hover flex items-center gap-0.5">
                                            <span class="material-symbols-outlined text-[13px]">report</span> Hilang
                                        </button>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="10" class="p-8 text-center bg-white rounded-xl text-slate-600 font-bold">
                                    Belum ada transaksi peminjaman pada bulan ini.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination Card Footer Bulanan (Transactions) -->
                <div class="p-4 border-t-2 border-slate-900 bg-white flex flex-col sm:flex-row items-center justify-between gap-3 no-print">
                    <span class="text-xs font-bold text-slate-600">
                        Menampilkan transaksi ke {{ $bulananTransactions->firstItem() ?? 0 }} - {{ $bulananTransactions->lastItem() ?? 0 }} dari total {{ $bulananTransactions->total() }} catatan
                    </span>
                    <div class="pagination-nav">
                        {{ $bulananTransactions->links() }}
                    </div>
                </div>
            </div>
            @endif

        </div>
        @endif

        <!-- TANDA TANGAN RESMI KHUSUS CETAK (PRINT ONLY) -->
        <div class="print-only mt-10 pt-4">
            <div class="grid grid-cols-2 text-center text-sm">
                <div>
                    <p>Mengetahui,</p>
                    <p class="font-bold">Kepala Perpustakaan Libraz</p>
                    <div class="h-20"></div>
                    <p class="font-bold underline">( Farell Giekady, S.Pd )</p>
                    <p class="text-xs">NIP. 19850412 201001 1 012</p>
                </div>
                <div>
                    <p>Ciomas, {{ now()->translatedFormat('d F Y') }}</p>
                    <p class="font-bold">Petugas Pelapor / Administrator</p>
                    <div class="h-20"></div>
                    <p class="font-bold underline">( {{ auth()->user()->name ?? session('admin_role', 'Administrator') }} )</p>
                    <p class="text-xs">Petugas Sirkulasi & Pelaporan</p>
                </div>
            </div>
        </div>

    </div>
</main>

<!-- REAL-TIME JAVASCRIPT ENGINE (Soft Brutalism Compatible) -->
<script>
let autoSyncEnabled = true;
let syncInterval = null;
let secondsSinceLastSync = 0;
const currentTab = "{{ $activeTab }}";
const currentDate = "{{ $selectedDate }}";
const currentMonth = "{{ $selectedMonth }}";
const currentYear = "{{ $selectedYear }}";
const currentView = "{{ $monthlyView }}";
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

// 1. Toast Notification Helper
function showToast(title, message, isWarning = false) {
    const toast = document.getElementById('realtimeToast');
    const toastTitle = document.getElementById('toastTitle');
    const toastMsg = document.getElementById('toastMessage');
    const toastIcon = document.getElementById('toastIcon');

    toastTitle.innerText = title;
    toastMsg.innerText = message;
    toastIcon.innerText = isWarning ? 'warning' : 'bolt';

    toast.classList.remove('translate-y-32', 'opacity-0');
    toast.classList.add('translate-y-0', 'opacity-100');

    setTimeout(() => {
        toast.classList.remove('translate-y-0', 'opacity-100');
        toast.classList.add('translate-y-32', 'opacity-0');
    }, 3200);
}

// 2. Format Number with Commas
function formatNumber(num) {
    return new Intl.NumberFormat('id-ID').format(num);
}

// 3. Highlight updated element with soft flash animation
function highlightChange(elementId, newValue) {
    const el = document.getElementById(elementId);
    if (!el) return;
    const currentVal = el.innerText.trim().replace(/\./g, '');
    if (currentVal !== String(newValue)) {
        el.innerText = formatNumber(newValue);
        el.parentElement.classList.add('kpi-updated');
        setTimeout(() => {
            el.parentElement.classList.remove('kpi-updated');
        }, 800);
    }
}

// 4. Core Real-Time Fetch Function
async function fetchRealtimeData(isManual = false) {
    const spinner = document.getElementById('syncSpinner');
    if (spinner) spinner.classList.add('animate-spin');

    try {
        const queryParams = new URLSearchParams({
            tab: currentTab,
            date: currentDate,
            month: currentMonth,
            year: currentYear,
            view: currentView
        });

        const res = await fetch("{{ route('admin.laporan.realtime') }}?" + queryParams.toString(), {
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
            }
        });

        if (!res.ok) throw new Error("Gagal mengambil data real-time");
        const json = await res.json();

        if (json.success) {
            secondsSinceLastSync = 0;
            const lastSyncedText = document.getElementById('lastSyncedText');
            if (lastSyncedText) {
                lastSyncedText.innerText = json.timestamp + ' WIB';
            }

            if (currentTab === 'harian') {
                updateHarianDOM(json.harian);
            } else {
                updateBulananDOM(json.bulanan);
            }

            if (isManual) {
                showToast("Data Disinkronkan", "Statistik dan tabel laporan telah diperbarui ke data terbaru.");
            }
        }
    } catch (err) {
        console.warn("Realtime poll notice:", err);
    } finally {
        if (spinner) {
            setTimeout(() => spinner.classList.remove('animate-spin'), 400);
        }
    }
}

// 5. Update DOM for Laporan Harian
function updateHarianDOM(data) {
    highlightChange('kpiHarianTotal', data.total);
    highlightChange('kpiHarianSiswa', data.siswa);
    highlightChange('kpiHarianDipinjam', data.dipinjam);
    highlightChange('kpiHarianKembali', data.kembali);

    const badgeHarian = document.getElementById('tabBadgeHarian');
    if (badgeHarian) badgeHarian.innerText = data.total + ' Pinjam';

    const paginationInfo = document.getElementById('paginationInfoHarian');
    if (paginationInfo) {
        paginationInfo.innerText = `Menampilkan data ke ${data.first_item} - ${data.last_item} dari total ${data.total_items} peminjaman`;
    }

    if (data.items && data.items.length > 0) {
        data.items.forEach(item => {
            const statusCell = document.getElementById(`statusBadgeCell_${item.id}`);
            const actionCell = document.getElementById(`actionButtonsCell_${item.id}`);

            if (statusCell) {
                let badgeHTML = '';
                if (item.status === 'lost' || item.status === 'hilang') {
                    badgeHTML = `<span class="inline-flex items-center gap-1 bg-rose-100 text-rose-950 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900"><span class="material-symbols-outlined text-[14px]">report_problem</span> HILANG</span>`;
                } else if (item.has_returned) {
                    badgeHTML = `<span class="inline-flex items-center gap-1 bg-emerald-100 text-emerald-950 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900"><span class="material-symbols-outlined text-[14px]">task_alt</span> DIKEMBALIKAN</span>`;
                } else if (item.is_overdue) {
                    badgeHTML = `<span class="inline-flex items-center gap-1 bg-rose-200 text-rose-950 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900 animate-pulse"><span class="material-symbols-outlined text-[14px]">warning</span> TERLAMBAT</span>`;
                } else if (item.status === 'approved' || item.status === 'borrowed') {
                    badgeHTML = `<span class="inline-flex items-center gap-1 bg-amber-100 text-amber-950 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900"><span class="material-symbols-outlined text-[14px]">schedule</span> DIPINJAM</span>`;
                } else {
                    badgeHTML = `<span class="inline-flex items-center gap-1 bg-white text-slate-800 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900">${item.status.toUpperCase()}</span>`;
                }
                statusCell.innerHTML = badgeHTML;
            }

            if (actionCell) {
                let actionHTML = '<div class="flex items-center justify-center gap-1.5">';
                if (!item.has_returned) {
                    actionHTML += `<button type="button" onclick="handleQuickStatus(${item.id}, 'returned')" title="Tandai Sudah Dikembalikan" class="px-2 py-1 bg-emerald-100 hover:bg-emerald-200 text-emerald-950 text-[10px] font-extrabold rounded-md border border-slate-900 shadow-[1px_1px_0px_#0f172a] soft-btn-hover flex items-center gap-0.5"><span class="material-symbols-outlined text-[13px]">check</span> Kembali</button>`;
                }
                if (item.status !== 'lost') {
                    actionHTML += `<button type="button" onclick="handleQuickStatus(${item.id}, 'lost')" title="Tandai Buku Hilang" class="px-2 py-1 bg-rose-100 hover:bg-rose-200 text-rose-950 text-[10px] font-extrabold rounded-md border border-slate-900 shadow-[1px_1px_0px_#0f172a] soft-btn-hover flex items-center gap-0.5"><span class="material-symbols-outlined text-[13px]">report</span> Hilang</button>`;
                }
                actionHTML += '</div>';
                actionCell.innerHTML = actionHTML;
            }
        });
    }
}

// 6. Update DOM for Laporan Bulanan
function updateBulananDOM(data) {
    highlightChange('kpiBulananTersedia', data.tersedia);
    highlightChange('kpiBulananDipinjam', data.dipinjam);
    highlightChange('kpiBulananBelumKembali', data.belum_kembali);
    highlightChange('kpiBulananKembali', data.kembali);
    highlightChange('kpiBulananHilang', data.hilang);

    const badgeBulanan = document.getElementById('tabBadgeBulanan');
    if (badgeBulanan) badgeBulanan.innerText = data.tersedia + ' Koleksi';

    const badgeTransTotal = document.getElementById('badgeBulananTransTotal');
    if (badgeTransTotal) badgeTransTotal.innerText = data.total_sirkulasi;

    if (data.transactions && data.transactions.length > 0) {
        data.transactions.forEach(item => {
            const statusCell = document.getElementById(`statusBadgeTrans_${item.id}`);
            const actionCell = document.getElementById(`actionTransCell_${item.id}`);

            if (statusCell) {
                let badgeHTML = '';
                if (item.status === 'lost' || item.status === 'hilang') {
                    badgeHTML = `<span class="inline-flex items-center gap-1 bg-rose-100 text-rose-950 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900">HILANG</span>`;
                } else if (item.status === 'returned') {
                    badgeHTML = `<span class="inline-flex items-center gap-1 bg-emerald-100 text-emerald-950 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900">DIKEMBALIKAN</span>`;
                } else if (item.is_overdue) {
                    badgeHTML = `<span class="inline-flex items-center gap-1 bg-rose-200 text-rose-950 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900">TERLAMBAT</span>`;
                } else if (item.status === 'approved' || item.status === 'borrowed') {
                    badgeHTML = `<span class="inline-flex items-center gap-1 bg-amber-100 text-amber-950 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900">DIPINJAM</span>`;
                } else {
                    badgeHTML = `<span class="inline-flex items-center gap-1 bg-slate-200 text-slate-800 font-extrabold text-[11px] px-2.5 py-0.5 rounded-lg border border-slate-900">${item.status.toUpperCase()}</span>`;
                }
                statusCell.innerHTML = badgeHTML;
            }

            if (actionCell) {
                let actionHTML = '<div class="flex items-center justify-center gap-1.5">';
                if (item.status !== 'returned') {
                    actionHTML += `<button type="button" onclick="handleQuickStatus(${item.id}, 'returned')" title="Tandai Sudah Dikembalikan" class="px-2 py-1 bg-emerald-100 hover:bg-emerald-200 text-emerald-950 text-[10px] font-extrabold rounded-md border border-slate-900 shadow-[1px_1px_0px_#0f172a] soft-btn-hover flex items-center gap-0.5"><span class="material-symbols-outlined text-[13px]">check</span> Kembali</button>`;
                }
                if (item.status !== 'lost') {
                    actionHTML += `<button type="button" onclick="handleQuickStatus(${item.id}, 'lost')" title="Tandai Buku Hilang" class="px-2 py-1 bg-rose-100 hover:bg-rose-200 text-rose-950 text-[10px] font-extrabold rounded-md border border-slate-900 shadow-[1px_1px_0px_#0f172a] soft-btn-hover flex items-center gap-0.5"><span class="material-symbols-outlined text-[13px]">report</span> Hilang</button>`;
                }
                actionHTML += '</div>';
                actionCell.innerHTML = actionHTML;
            }
        });
    }
}

// 7. Instant AJAX Status Update
async function handleQuickStatus(id, newStatus) {
    if (newStatus === 'lost') {
        const confirmLost = confirm('Apakah Anda yakin ingin menandai buku ini sebagai HILANG? Data akan langsung masuk ke statistik buku hilang.');
        if (!confirmLost) return;
    }

    try {
        const formData = new FormData();
        formData.append('_token', csrfToken);
        formData.append('status', newStatus);

        const res = await fetch(`/admin/laporan/status/${id}`, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
            },
            body: formData
        });

        const json = await res.json();
        if (json.success) {
            showToast("Status Diperbarui", json.message, newStatus === 'lost');
            fetchRealtimeData();
        } else {
            alert(json.message || "Gagal mengubah status.");
        }
    } catch (err) {
        console.error(err);
        alert("Terjadi kesalahan koneksi saat memperbarui status.");
    }
}

// 8. Toggle Auto-Sync
function toggleAutoSync() {
    autoSyncEnabled = !autoSyncEnabled;
    const badge = document.getElementById('liveBadge');
    const badgeText = document.getElementById('liveBadgeText');
    const ping = document.getElementById('livePing');
    const dot = document.getElementById('liveDot');

    if (autoSyncEnabled) {
        badge.className = "flex items-center gap-2 bg-emerald-100 text-emerald-950 font-bold text-xs px-3 py-1 rounded-xl border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] cursor-pointer soft-btn-hover select-none";
        badgeText.innerText = "REAL-TIME AKTIF";
        ping.className = "animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-500 opacity-75";
        dot.className = "relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-600";
        startPolling();
        showToast("Auto-Sync Diaktifkan", "Halaman akan memperbarui data secara real-time setiap 4 detik.");
    } else {
        badge.className = "flex items-center gap-2 bg-slate-200 text-slate-800 font-bold text-xs px-3 py-1 rounded-xl border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] cursor-pointer soft-btn-hover select-none";
        badgeText.innerText = "AUTO-SYNC JEDA";
        ping.className = "hidden";
        dot.className = "relative inline-flex rounded-full h-2.5 w-2.5 bg-slate-500";
        stopPolling();
        showToast("Auto-Sync Dijeda", "Pembaruan otomatis dinonaktifkan sementara.");
    }
}

function triggerManualSync() {
    fetchRealtimeData(true);
}

// 9. Robust Excel Download with Dynamic Input Sync & Instant Feedback
function handleDownloadExcel(e, type) {
    if (e) {
        e.preventDefault();
        e.stopPropagation();
    }

    let exportUrl = '';
    let fileName = '';
    let toastTitle = '';
    let toastDesc = '';
    let btnTextId = (type === 'harian') ? 'exportTextHarian' : 'exportTextBulanan';
    let btnIconId = (type === 'harian') ? 'exportIconHarian' : 'exportIconBulanan';
    let defaultText = (type === 'harian') ? 'Unduh Excel Harian (.xlsx)' : 'Unduh Excel Bulanan (.xlsx)';

    if (type === 'harian') {
        const dateInput = document.getElementById('inputDateHarian');
        const pickedDate = dateInput ? dateInput.value : '{{ $selectedDate }}';
        exportUrl = `{{ route('admin.laporan.export.harian') }}?date=${encodeURIComponent(pickedDate)}`;
        fileName = `Laporan_Harian_Peminjaman_${pickedDate}.xlsx`;
        toastTitle = "Menyiapkan Excel Harian";
        toastDesc = `Laporan tanggal ${pickedDate} sedang diunduh...`;
    } else {
        const monthSelect = document.getElementById('selectMonthBulanan');
        const yearSelect = document.getElementById('selectYearBulanan');
        const pickedMonth = monthSelect ? monthSelect.value : '{{ $selectedMonth }}';
        const pickedYear = yearSelect ? yearSelect.value : '{{ $selectedYear }}';
        exportUrl = `{{ route('admin.laporan.export.bulanan') }}?month=${encodeURIComponent(pickedMonth)}&year=${encodeURIComponent(pickedYear)}`;
        fileName = `Laporan_Bulanan_Libraz_${pickedMonth}_${pickedYear}.xlsx`;
        toastTitle = "Menyiapkan Excel Bulanan";
        toastDesc = `Laporan 2 sheet bulan ${pickedMonth}/${pickedYear} sedang diunduh...`;
    }

    const exportText = document.getElementById(btnTextId);
    const exportIcon = document.getElementById(btnIconId);

    if (exportIcon && exportText) {
        exportIcon.innerText = "sync";
        exportIcon.classList.add("animate-spin");
        exportText.innerText = "MENGUNDUH...";
    }

    showToast(toastTitle, toastDesc);

    // Reliable client-side download: Create invisible link & click
    try {
        const link = document.createElement('a');
        link.href = exportUrl;
        link.setAttribute('download', fileName);
        link.style.display = 'none';
        document.body.appendChild(link);
        link.click();
        setTimeout(() => {
            if (link.parentNode) {
                link.parentNode.removeChild(link);
            }
        }, 1000);
    } catch (err) {
        window.location.href = exportUrl;
    }

    setTimeout(() => {
        if (exportIcon && exportText) {
            exportIcon.innerText = "file_download";
            exportIcon.classList.remove("animate-spin");
            exportText.innerText = defaultText;
        }
    }, 3000);
}

function startPolling() {
    stopPolling();
    syncInterval = setInterval(() => {
        if (autoSyncEnabled) {
            fetchRealtimeData();
        }
    }, 4000);
}

function stopPolling() {
    if (syncInterval) {
        clearInterval(syncInterval);
        syncInterval = null;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    // Sync Date & Month Pickers directly to Export Buttons
    const dateInput = document.getElementById('inputDateHarian');
    if (dateInput) {
        dateInput.addEventListener('change', () => {
            const btn = document.getElementById('btnExportHarian');
            if (btn) {
                btn.href = `{{ route('admin.laporan.export.harian') }}?date=${encodeURIComponent(dateInput.value)}`;
                btn.setAttribute('download', `Laporan_Harian_Peminjaman_${dateInput.value}.xlsx`);
            }
        });
    }

    const monthSelect = document.getElementById('selectMonthBulanan');
    const yearSelect = document.getElementById('selectYearBulanan');
    function updateBulananExportUrl() {
        const btn = document.getElementById('btnExportBulanan');
        if (btn && monthSelect && yearSelect) {
            btn.href = `{{ route('admin.laporan.export.bulanan') }}?month=${encodeURIComponent(monthSelect.value)}&year=${encodeURIComponent(yearSelect.value)}`;
            btn.setAttribute('download', `Laporan_Bulanan_Libraz_${monthSelect.value}_${yearSelect.value}.xlsx`);
        }
    }
    if (monthSelect) monthSelect.addEventListener('change', updateBulananExportUrl);
    if (yearSelect) yearSelect.addEventListener('change', updateBulananExportUrl);

    startPolling();
});
</script>

</body>
</html>
