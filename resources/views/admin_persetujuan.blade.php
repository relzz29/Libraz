<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
<title>Persetujuan Peminjaman - Admin BiblioZ</title>
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

    <!-- Active Persetujuan Item (Pustakawan, Kepala Perpus & Admin IT) -->
    @if($canApprove)
    <a href="{{ route('admin.persetujuan') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl bg-[#5f15e8] text-white font-black border-[2.5px] border-black shadow-[4px_4px_0px_#000] transition-all">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
        <rect x="8" y="2" width="8" height="4" rx="1"/>
        <path d="m9 14 2 2 4-4"/>
      </svg>
      <span class="text-base tracking-wide">Persetujuan</span>
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
        <div class="flex flex-col min-w-0">
            <div class="flex items-center gap-2 flex-wrap">
                <span class="text-xl sm:text-2xl font-black text-black truncate tracking-tight">
                    Persetujuan Peminjaman ⏳
                </span>
                <span class="bg-[#facc15] text-black font-black text-xs px-2.5 py-0.5 rounded-lg border-2 border-black shadow-[3px_3px_0px_#000] uppercase tracking-wide">
                    {{ strtoupper(session('admin_role', 'ADMIN IT')) }}
                </span>
            </div>
            <span class="text-xs sm:text-sm font-semibold text-gray-800 mt-0.5">Tinjau dan setujui permintaan peminjaman buku.</span>
        </div>

        <div class="flex items-center gap-4 flex-shrink-0">
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
        
        <!-- Header Section Title with Dual Tabs -->
        <div class="flex items-center justify-between gap-4 mt-1 flex-wrap">
            <div class="flex items-center gap-3">
                <button type="button" onclick="switchApprovalTab('pending')" id="tabBtnPending" class="px-5 py-2.5 rounded-2xl bg-[#ff5757] text-white font-black border-[3px] border-black shadow-[4px_4px_0px_#000] text-sm uppercase flex items-center gap-2 transition-all">
                    <span class="material-symbols-outlined text-[20px]">pending_actions</span>
                    <span>Menunggu Tinjauan</span>
                    <span class="bg-white text-black px-2 py-0.5 rounded-lg text-xs font-black">{{ count($pendingApprovals) }}</span>
                </button>
                <button type="button" onclick="switchApprovalTab('history')" id="tabBtnHistory" class="px-5 py-2.5 rounded-2xl bg-white text-black font-black border-[3px] border-black shadow-[4px_4px_0px_#000] text-sm uppercase flex items-center gap-2 hover:bg-gray-100 transition-all">
                    <span class="material-symbols-outlined text-[20px]">history</span>
                    <span>Riwayat Keputusan</span>
                    <span class="bg-[#facc15] text-black px-2 py-0.5 rounded-lg text-xs font-black">{{ count($decisionHistory) }}</span>
                </button>
            </div>
        </div>

        @if(session('success'))
        <div class="w-full bg-[#8ce934] border-[3px] border-black rounded-xl p-3.5 px-4 shadow-[4px_4px_0px_#000] flex items-center gap-3">
            <div class="w-6 h-6 rounded-full border-2 border-black flex items-center justify-center flex-shrink-0 bg-transparent">
                <svg class="w-4 h-4 text-black stroke-[3]" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <circle cx="12" cy="12" r="9" stroke="black" stroke-width="2" fill="none"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 12l3 3L16 9" />
                </svg>
            </div>
            <span class="text-black font-black text-sm sm:text-base">{{ session('success') }}</span>
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

        <!-- TAB 1: PENDING APPROVALS -->
        <div id="tabPendingContent" class="flex flex-col rounded-3xl bg-white border-[3.5px] border-black shadow-[8px_8px_0px_#000] overflow-hidden relative">
            <div class="p-5 border-b-[3.5px] border-black flex items-center justify-between bg-[#ff5757]">
                <h3 class="text-white font-black drop-shadow-[2px_2px_0px_#000] flex items-center gap-3 text-2xl sm:text-3xl tracking-tight">
                    <div class="w-11 h-11 rounded-xl bg-white border-[2.5px] border-black flex items-center justify-center text-black shadow-[3px_3px_0px_#000]">
                        <span class="material-symbols-outlined text-[26px]">pending_actions</span>
                    </div>
                    PERMINTAAN MENUNGGU PERSETUJUAN
                </h3>
            </div>
            
            <div class="overflow-x-auto p-4 bg-[#fcf9f2] bg-[radial-gradient(#00000015_2px,transparent_2px)] [background-size:16px_16px] min-h-[300px]">
                <table class="w-full text-left border-collapse border-spacing-y-2">
                    <thead>
                        <tr class="text-black uppercase tracking-wider bg-white border-[2.5px] border-black shadow-[2px_2px_0px_#000]">
                            <th class="p-3.5 font-black text-xs sm:text-sm">ID Resi</th>
                            <th class="p-3.5 font-black text-xs sm:text-sm">Peminjam / User</th>
                            <th class="p-3.5 font-black text-xs sm:text-sm">Judul Buku</th>
                            <th class="p-3.5 font-black text-xs sm:text-sm">Tgl Pinjam</th>
                            <th class="p-3.5 font-black text-xs sm:text-sm">Tgl Kembali</th>
                            <th class="p-3.5 font-black text-xs sm:text-sm text-center">Aksi Keputusan</th>
                        </tr>
                    </thead>
                    <tbody class="text-black space-y-4">
                        @forelse($pendingApprovals as $approval)
                        <tr class="bg-white border-[2.5px] border-black hover:bg-[#ffde59] transition-colors shadow-[3px_3px_0px_#000] rounded-xl group/row">
                            <td class="p-3.5 font-black text-xs">
                                <span class="bg-[#facc15] px-2.5 py-1 rounded-lg border-2 border-black shadow-[2px_2px_0px_#000]">#{{ $approval->id }}</span>
                            </td>
                            <td class="p-3.5 font-bold">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-full bg-[#00b4d8] border-2 border-black flex items-center justify-center text-white font-black text-xs shadow-[2px_2px_0px_#000]">
                                        {{ strtoupper(substr($approval->user->name ?? 'User', 0, 2)) }}
                                    </div>
                                    <span class="font-black text-sm sm:text-base">{{ $approval->user->name ?? 'User Siswa' }}</span>
                                </div>
                            </td>
                            <td class="p-3.5 font-bold text-sm sm:text-base">{{ $approval->book->title ?? 'Buku Tidak Diketahui' }}</td>
                            <td class="p-3.5 font-bold text-xs sm:text-sm">{{ $approval->borrowed_at ? $approval->borrowed_at->format('d M Y') : '-' }}</td>
                            <td class="p-3.5 font-bold text-xs sm:text-sm">{{ $approval->due_date ? $approval->due_date->format('d M Y') : '-' }}</td>
                            <td class="p-3.5 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <form action="{{ route('admin.persetujuan.approve', $approval->id) }}" method="POST" class="m-0 inline">
                                        @csrf
                                        <button type="submit" class="px-3.5 py-1.5 rounded-xl bg-[#8ce934] text-black font-black text-xs sm:text-sm border-2 border-black shadow-[2px_2px_0px_#000] comic-btn-hover flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[18px]">check_circle</span> Setujui
                                        </button>
                                    </form>
                                    <form action="{{ route('admin.persetujuan.reject', $approval->id) }}" method="POST" class="m-0 inline">
                                        @csrf
                                        <button type="submit" class="px-3.5 py-1.5 rounded-xl bg-[#ff5757] text-white font-black text-xs sm:text-sm border-2 border-black shadow-[2px_2px_0px_#000] comic-btn-hover flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[18px]">cancel</span> Tolak
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="p-8 text-center text-black bg-white border-[2.5px] border-black shadow-[3px_3px_0px_#000] font-black text-lg">
                                <div class="flex flex-col items-center justify-center gap-3">
                                    <span class="material-symbols-outlined text-[54px] text-green-600">task_alt</span>
                                    <p>SEMUA BERES! TIDAK ADA PERMINTAAN TERTUNDA.</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- TAB 2: DECISION HISTORY (AUDIT TRAIL) -->
        <div id="tabHistoryContent" class="hidden flex flex-col rounded-3xl bg-white border-[3.5px] border-black shadow-[8px_8px_0px_#000] overflow-hidden relative">
            <div class="p-5 border-b-[3.5px] border-black flex items-center justify-between bg-[#38bdf8]">
                <h3 class="text-black font-black drop-shadow-[1px_1px_0px_#fff] flex items-center gap-3 text-2xl sm:text-3xl tracking-tight">
                    <div class="w-11 h-11 rounded-xl bg-white border-[2.5px] border-black flex items-center justify-center text-black shadow-[3px_3px_0px_#000]">
                        <span class="material-symbols-outlined text-[26px]">manage_history</span>
                    </div>
                    LOG & RIWAYAT KEPUTUSAN TERDAHULU
                </h3>
            </div>
            
            <div class="overflow-x-auto p-4 bg-[#fcf9f2] bg-[radial-gradient(#00000015_2px,transparent_2px)] [background-size:16px_16px] min-h-[300px]">
                <table class="w-full text-left border-collapse border-spacing-y-2">
                    <thead>
                        <tr class="text-black uppercase tracking-wider bg-white border-[2.5px] border-black shadow-[2px_2px_0px_#000]">
                            <th class="p-3.5 font-black text-xs sm:text-sm">ID Resi</th>
                            <th class="p-3.5 font-black text-xs sm:text-sm">Peminjam / User</th>
                            <th class="p-3.5 font-black text-xs sm:text-sm">Judul Buku</th>
                            <th class="p-3.5 font-black text-xs sm:text-sm">Waktu Transaksi</th>
                            <th class="p-3.5 font-black text-xs sm:text-sm text-center">Status Keputusan</th>
                        </tr>
                    </thead>
                    <tbody class="text-black space-y-4">
                        @forelse($decisionHistory as $item)
                        <tr class="bg-white border-[2.5px] border-black hover:bg-[#ffde59]/50 transition-colors shadow-[3px_3px_0px_#000] rounded-xl group/row">
                            <td class="p-3.5 font-black text-xs">
                                <span class="bg-white px-2.5 py-1 rounded-lg border-2 border-black shadow-[2px_2px_0px_#000]">#{{ $item->id }}</span>
                            </td>
                            <td class="p-3.5 font-bold">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-full bg-[#5f15e8] border-2 border-black flex items-center justify-center text-white font-black text-xs shadow-[2px_2px_0px_#000]">
                                        {{ strtoupper(substr($item->user->name ?? 'User', 0, 2)) }}
                                    </div>
                                    <span class="font-black text-sm">{{ $item->user->name ?? 'User Siswa' }}</span>
                                </div>
                            </td>
                            <td class="p-3.5 font-bold text-sm">{{ $item->book->title ?? 'Buku Dihapus' }}</td>
                            <td class="p-3.5 font-bold text-xs text-gray-700">
                                <div>{{ $item->updated_at ? $item->updated_at->timezone('Asia/Jakarta')->translatedFormat('d M Y, H:i') : '-' }} WIB</div>
                                <div class="text-[10px] text-gray-500 font-semibold">{{ $item->updated_at ? $item->updated_at->diffForHumans() : '' }}</div>
                            </td>
                            <td class="p-3.5 text-center">
                                @if($item->status == 'approved' || $item->status == 'borrowed')
                                    <span class="inline-flex items-center gap-1 bg-[#8ce934] text-black font-black text-xs px-3 py-1 rounded-xl border-2 border-black shadow-[2px_2px_0px_#000]">
                                        <span class="material-symbols-outlined text-[16px]">check_circle</span> Disetujui
                                    </span>
                                @elseif($item->status == 'rejected')
                                    <span class="inline-flex items-center gap-1 bg-[#ff5757] text-white font-black text-xs px-3 py-1 rounded-xl border-2 border-black shadow-[2px_2px_0px_#000]">
                                        <span class="material-symbols-outlined text-[16px]">cancel</span> Ditolak
                                    </span>
                                @elseif($item->status == 'returned')
                                    <span class="inline-flex items-center gap-1 bg-[#00b4d8] text-white font-black text-xs px-3 py-1 rounded-xl border-2 border-black shadow-[2px_2px_0px_#000]">
                                        <span class="material-symbols-outlined text-[16px]">task_alt</span> Dikembalikan
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 bg-gray-200 text-black font-black text-xs px-3 py-1 rounded-xl border-2 border-black shadow-[2px_2px_0px_#000]">
                                        {{ strtoupper($item->status) }}
                                    </span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="p-8 text-center text-black bg-white border-[2.5px] border-black shadow-[3px_3px_0px_#000] font-black text-lg">
                                <div class="flex flex-col items-center justify-center gap-3">
                                    <span class="material-symbols-outlined text-[54px] text-gray-400">history_toggle_off</span>
                                    <p>BELUM ADA LOG RIWAYAT KEPUTUSAN.</p>
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

<script>
function switchApprovalTab(tab) {
    const btnPending = document.getElementById('tabBtnPending');
    const btnHistory = document.getElementById('tabBtnHistory');
    const contentPending = document.getElementById('tabPendingContent');
    const contentHistory = document.getElementById('tabHistoryContent');

    if (tab === 'pending') {
        contentPending.classList.remove('hidden');
        contentHistory.classList.add('hidden');

        btnPending.className = "px-5 py-2.5 rounded-2xl bg-[#ff5757] text-white font-black border-[3px] border-black shadow-[4px_4px_0px_#000] text-sm uppercase flex items-center gap-2 transition-all";
        btnHistory.className = "px-5 py-2.5 rounded-2xl bg-white text-black font-black border-[3px] border-black shadow-[4px_4px_0px_#000] text-sm uppercase flex items-center gap-2 hover:bg-gray-100 transition-all";
    } else {
        contentPending.classList.add('hidden');
        contentHistory.classList.remove('hidden');

        btnHistory.className = "px-5 py-2.5 rounded-2xl bg-[#38bdf8] text-black font-black border-[3px] border-black shadow-[4px_4px_0px_#000] text-sm uppercase flex items-center gap-2 transition-all";
        btnPending.className = "px-5 py-2.5 rounded-2xl bg-white text-black font-black border-[3px] border-black shadow-[4px_4px_0px_#000] text-sm uppercase flex items-center gap-2 hover:bg-gray-100 transition-all";
    }
}
</script>
</body>
</html>
