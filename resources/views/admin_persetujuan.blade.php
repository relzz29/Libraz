<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
<title>Persetujuan Peminjaman - Admin Libraz</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&family=Space+Grotesk:wght@600;700;800&display=swap" rel="stylesheet"/>
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

    <!-- Active Persetujuan Item (Soft Brutalism) -->
    @if($canApprove)
    <a href="{{ route('admin.persetujuan') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl bg-indigo-600 text-white font-extrabold border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] transition-all">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
        <rect x="8" y="2" width="8" height="4" rx="1"/>
        <path d="m9 14 2 2 4-4"/>
      </svg>
      <span class="text-sm tracking-wide">Persetujuan</span>
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
        <div class="flex flex-col min-w-0">
            <div class="flex items-center gap-2.5 flex-wrap">
                <span class="text-xl sm:text-2xl font-extrabold text-slate-900 truncate tracking-tight font-['Space_Grotesk',sans-serif]">
                    Persetujuan Peminjaman ⏳
                </span>
                <span class="bg-amber-100 text-amber-950 font-black text-xs px-2.5 py-0.5 rounded-lg border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] uppercase tracking-wide">
                    {{ strtoupper(session('admin_role', 'ADMIN IT')) }}
                </span>
            </div>
            <span class="text-xs sm:text-sm font-medium text-slate-600 mt-0.5">Tinjau dan setujui permintaan peminjaman buku oleh siswa.</span>
        </div>

        <div class="flex items-center gap-4 flex-shrink-0">
            <div class="relative flex items-center justify-center" title="{{ auth()->user()->name ?? 'Aryandi Ramadhani' }}">
                <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-indigo-600 border-2 border-slate-900 flex items-center justify-center text-white font-extrabold text-sm shadow-[2px_2px_0px_#0f172a]">
                    {{ strtoupper(substr(auth()->user()->name ?? 'Aryandi Ramadhani', 0, 2)) }}
                </div>
                <div class="absolute bottom-0 right-0 w-3 h-3 sm:w-3.5 sm:h-3.5 bg-emerald-500 rounded-full border-2 border-slate-900"></div>
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
                <button type="button" onclick="switchApprovalTab('pending')" id="tabBtnPending" class="px-5 py-2.5 rounded-xl bg-rose-100 text-rose-950 font-extrabold border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] text-xs sm:text-sm uppercase flex items-center gap-2 soft-btn-hover transition-all">
                    <span class="material-symbols-outlined text-[18px]">pending_actions</span>
                    <span>Menunggu Tinjauan</span>
                    <span class="bg-rose-600 text-white px-2 py-0.5 rounded-lg text-xs font-black shadow-[1px_1px_0px_#0f172a]">{{ count($pendingApprovals) }}</span>
                </button>
                <button type="button" onclick="switchApprovalTab('history')" id="tabBtnHistory" class="px-5 py-2.5 rounded-xl bg-white hover:bg-slate-50 text-slate-700 font-extrabold border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] text-xs sm:text-sm uppercase flex items-center gap-2 soft-btn-hover transition-all">
                    <span class="material-symbols-outlined text-[18px]">history</span>
                    <span>Riwayat Keputusan</span>
                    <span class="bg-slate-900 text-white px-2 py-0.5 rounded-lg text-xs font-black shadow-[1px_1px_0px_#0f172a]">{{ count($decisionHistory) }}</span>
                </button>
            </div>
        </div>

        @if(session('success'))
        <div class="w-full bg-emerald-100 border-2 border-slate-900 rounded-xl p-3.5 px-4 shadow-[3px_3px_0px_#0f172a] flex items-center gap-3">
            <div class="w-6 h-6 rounded-full border-2 border-slate-900 flex items-center justify-center flex-shrink-0 bg-white">
                <svg class="w-3.5 h-3.5 text-emerald-700 stroke-[3]" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <span class="text-slate-900 font-bold text-sm">{{ session('success') }}</span>
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

        <!-- TAB 1: PENDING APPROVALS -->
        <div id="tabPendingContent" class="flex flex-col rounded-2xl bg-white border-2 border-slate-900 shadow-[4px_4px_0px_#0f172a] overflow-hidden">
            <div class="p-4 sm:p-5 border-b-2 border-slate-900 flex items-center justify-between bg-rose-100">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-white border-2 border-slate-900 flex items-center justify-center text-slate-900 shadow-[2px_2px_0px_#0f172a]">
                        <span class="material-symbols-outlined text-[22px] text-rose-700">pending_actions</span>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="text-slate-900 font-extrabold text-lg sm:text-xl tracking-tight font-['Space_Grotesk',sans-serif]">
                            Permintaan Menunggu Persetujuan
                        </h3>
                        <span class="text-xs font-semibold text-rose-950">Validasi peminjaman buku sebelum diserahkan ke siswa.</span>
                    </div>
                </div>
                <span class="px-3 py-1 rounded-xl bg-white text-slate-900 font-extrabold text-xs border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a]">
                    {{ count($pendingApprovals) }} Antrean
                </span>
            </div>
            
            <div class="overflow-x-auto p-4 bg-slate-50/50 min-h-[300px]">
                <table class="w-full text-left border-separate border-spacing-y-2">
                    <thead>
                        <tr class="text-slate-700 uppercase tracking-wider text-xs font-extrabold">
                            <th class="p-3.5 pl-4">ID Resi</th>
                            <th class="p-3.5">Peminjam / Siswa</th>
                            <th class="p-3.5">Judul Buku</th>
                            <th class="p-3.5">Tgl Pinjam</th>
                            <th class="p-3.5">Tgl Kembali</th>
                            <th class="p-3.5 text-center pr-4">Aksi Keputusan</th>
                        </tr>
                    </thead>
                    <tbody class="text-slate-900">
                        @forelse($pendingApprovals as $approval)
                        <tr class="bg-white border-2 border-slate-900 hover:bg-rose-50/40 transition-colors shadow-[2px_2px_0px_#0f172a] rounded-xl group/row">
                            <td class="p-3.5 pl-4 rounded-l-xl border-y-2 border-l-2 border-slate-900 font-mono font-bold text-xs">
                                <span class="bg-amber-100 text-amber-950 px-2.5 py-1 rounded-lg border border-slate-900 shadow-[1.5px_1.5px_0px_#0f172a]">#{{ $approval->id }}</span>
                            </td>
                            <td class="p-3.5 font-bold border-y-2 border-slate-900">
                                <div class="flex items-center gap-2.5">
                                    <div class="w-8 h-8 rounded-full bg-indigo-600 text-white border border-slate-900 flex items-center justify-center font-extrabold text-xs shadow-[1.5px_1.5px_0px_#0f172a]">
                                        {{ strtoupper(substr($approval->user->name ?? 'User', 0, 2)) }}
                                    </div>
                                    <div class="flex flex-col min-w-0">
                                        <span class="font-extrabold text-sm text-slate-900">{{ $approval->user->name ?? 'User Siswa' }}</span>
                                        <span class="text-[10px] font-semibold text-slate-500">{{ $approval->user->nis ? 'NIS: ' . $approval->user->nis : ($approval->user->email ?? '') }}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="p-3.5 font-extrabold text-sm border-y-2 border-slate-900 text-slate-900">{{ $approval->book->title ?? 'Buku Tidak Diketahui' }}</td>
                            <td class="p-3.5 font-semibold text-xs border-y-2 border-slate-900 text-slate-700">{{ $approval->borrowed_at ? $approval->borrowed_at->format('d M Y') : '-' }}</td>
                            <td class="p-3.5 font-semibold text-xs border-y-2 border-slate-900 text-slate-700">{{ $approval->due_date ? $approval->due_date->format('d M Y') : '-' }}</td>
                            <td class="p-3.5 text-center pr-4 rounded-r-xl border-y-2 border-r-2 border-slate-900">
                                <div class="flex items-center justify-center gap-2">
                                    <form action="{{ route('admin.persetujuan.approve', $approval->id) }}" method="POST" class="m-0 inline">
                                        @csrf
                                        <button type="submit" class="px-3.5 py-1.5 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white font-extrabold text-xs border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] soft-btn-hover flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[16px]">check_circle</span> Setujui
                                        </button>
                                    </form>
                                    <form action="{{ route('admin.persetujuan.reject', $approval->id) }}" method="POST" class="m-0 inline">
                                        @csrf
                                        <button type="submit" class="px-3.5 py-1.5 rounded-xl bg-white hover:bg-rose-50 text-rose-600 font-extrabold text-xs border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] soft-btn-hover flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[16px]">cancel</span> Tolak
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="p-8 text-center text-slate-900 bg-white border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] rounded-xl font-extrabold text-base">
                                <div class="flex flex-col items-center justify-center gap-2 py-4">
                                    <span class="material-symbols-outlined text-[48px] text-emerald-600">task_alt</span>
                                    <p class="text-slate-800">Semua beres! Tidak ada permintaan peminjaman yang tertunda saat ini.</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- TAB 2: DECISION HISTORY (AUDIT TRAIL) -->
        <div id="tabHistoryContent" class="hidden flex flex-col rounded-2xl bg-white border-2 border-slate-900 shadow-[4px_4px_0px_#0f172a] overflow-hidden">
            <div class="p-4 sm:p-5 border-b-2 border-slate-900 flex items-center justify-between bg-sky-100">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-white border-2 border-slate-900 flex items-center justify-center text-slate-900 shadow-[2px_2px_0px_#0f172a]">
                        <span class="material-symbols-outlined text-[22px] text-sky-700">manage_history</span>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="text-slate-900 font-extrabold text-lg sm:text-xl tracking-tight font-['Space_Grotesk',sans-serif]">
                            Log & Riwayat Keputusan Terdahulu
                        </h3>
                        <span class="text-xs font-semibold text-sky-950">Rekam jejak persetujuan, penolakan, dan pengembalian sirkulasi.</span>
                    </div>
                </div>
                <span class="px-3 py-1 rounded-xl bg-white text-slate-900 font-extrabold text-xs border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a]">
                    {{ count($decisionHistory) }} Riwayat
                </span>
            </div>
            
            <div class="overflow-x-auto p-4 bg-slate-50/50 min-h-[300px]">
                <table class="w-full text-left border-separate border-spacing-y-2">
                    <thead>
                        <tr class="text-slate-700 uppercase tracking-wider text-xs font-extrabold">
                            <th class="p-3.5 pl-4">ID Resi</th>
                            <th class="p-3.5">Peminjam / User</th>
                            <th class="p-3.5">Judul Buku</th>
                            <th class="p-3.5">Waktu Transaksi</th>
                            <th class="p-3.5 text-center pr-4">Status Keputusan</th>
                        </tr>
                    </thead>
                    <tbody class="text-slate-900">
                        @forelse($decisionHistory as $item)
                        <tr class="bg-white border-2 border-slate-900 hover:bg-slate-50 transition-colors shadow-[2px_2px_0px_#0f172a] rounded-xl group/row">
                            <td class="p-3.5 pl-4 rounded-l-xl border-y-2 border-l-2 border-slate-900 font-mono font-bold text-xs">
                                <span class="bg-slate-100 text-slate-800 px-2.5 py-1 rounded-lg border border-slate-900 shadow-[1.5px_1.5px_0px_#0f172a]">#{{ $item->id }}</span>
                            </td>
                            <td class="p-3.5 font-bold border-y-2 border-slate-900">
                                <div class="flex items-center gap-2.5">
                                    <div class="w-8 h-8 rounded-full bg-indigo-600 text-white border border-slate-900 flex items-center justify-center font-extrabold text-xs shadow-[1.5px_1.5px_0px_#0f172a]">
                                        {{ strtoupper(substr($item->user->name ?? 'User', 0, 2)) }}
                                    </div>
                                    <span class="font-extrabold text-sm text-slate-900">{{ $item->user->name ?? 'User Siswa' }}</span>
                                </div>
                            </td>
                            <td class="p-3.5 font-semibold text-sm border-y-2 border-slate-900 text-slate-800">{{ $item->book->title ?? 'Buku Dihapus' }}</td>
                            <td class="p-3.5 font-medium text-xs border-y-2 border-slate-900 text-slate-600">
                                <div>{{ $item->updated_at ? $item->updated_at->timezone('Asia/Jakarta')->translatedFormat('d M Y, H:i') : '-' }} WIB</div>
                                <div class="text-[10px] text-slate-400 font-semibold">{{ $item->updated_at ? $item->updated_at->diffForHumans() : '' }}</div>
                            </td>
                            <td class="p-3.5 text-center pr-4 rounded-r-xl border-y-2 border-r-2 border-slate-900">
                                @if($item->status == 'approved' || $item->status == 'borrowed')
                                    <span class="inline-flex items-center gap-1 bg-emerald-100 text-emerald-950 font-extrabold text-xs px-3 py-1 rounded-xl border border-slate-900 shadow-[1.5px_1.5px_0px_#0f172a]">
                                        <span class="material-symbols-outlined text-[15px] text-emerald-700">check_circle</span> Disetujui
                                    </span>
                                @elseif($item->status == 'rejected')
                                    <span class="inline-flex items-center gap-1 bg-rose-100 text-rose-950 font-extrabold text-xs px-3 py-1 rounded-xl border border-slate-900 shadow-[1.5px_1.5px_0px_#0f172a]">
                                        <span class="material-symbols-outlined text-[15px] text-rose-700">cancel</span> Ditolak
                                    </span>
                                @elseif($item->status == 'returned')
                                    <span class="inline-flex items-center gap-1 bg-sky-100 text-sky-950 font-extrabold text-xs px-3 py-1 rounded-xl border border-slate-900 shadow-[1.5px_1.5px_0px_#0f172a]">
                                        <span class="material-symbols-outlined text-[15px] text-sky-700">task_alt</span> Dikembalikan
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 bg-slate-100 text-slate-800 font-bold text-xs px-3 py-1 rounded-xl border border-slate-900 shadow-[1.5px_1.5px_0px_#0f172a]">
                                        {{ strtoupper($item->status) }}
                                    </span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="p-8 text-center text-slate-900 bg-white border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] rounded-xl font-extrabold text-base">
                                <div class="flex flex-col items-center justify-center gap-2 py-4">
                                    <span class="material-symbols-outlined text-[48px] text-slate-400">history_toggle_off</span>
                                    <p class="text-slate-800">Belum ada log riwayat keputusan persetujuan peminjaman.</p>
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

        btnPending.className = "px-5 py-2.5 rounded-xl bg-rose-100 text-rose-950 font-extrabold border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] text-xs sm:text-sm uppercase flex items-center gap-2 soft-btn-hover transition-all";
        btnHistory.className = "px-5 py-2.5 rounded-xl bg-white hover:bg-slate-50 text-slate-700 font-extrabold border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] text-xs sm:text-sm uppercase flex items-center gap-2 soft-btn-hover transition-all";
    } else {
        contentPending.classList.add('hidden');
        contentHistory.classList.remove('hidden');

        btnHistory.className = "px-5 py-2.5 rounded-xl bg-sky-100 text-sky-950 font-extrabold border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] text-xs sm:text-sm uppercase flex items-center gap-2 soft-btn-hover transition-all";
        btnPending.className = "px-5 py-2.5 rounded-xl bg-white hover:bg-slate-50 text-slate-700 font-extrabold border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] text-xs sm:text-sm uppercase flex items-center gap-2 soft-btn-hover transition-all";
    }
}
</script>
</body>
</html>
