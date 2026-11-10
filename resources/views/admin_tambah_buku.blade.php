<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
<title>Tambah Buku - Admin Libraz</title>
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

    <!-- Active Tambah Buku Item (Soft Brutalism) -->
    @if($canManageBooks)
    <a href="{{ route('admin.books.create') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl bg-indigo-600 text-white font-extrabold border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] transition-all">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
        <circle cx="12" cy="12" r="9"/>
        <line x1="12" y1="8" x2="12" y2="16"/>
        <line x1="8" y1="12" x2="16" y2="12"/>
      </svg>
      <span class="text-sm tracking-wide">Tambah Buku</span>
    </a>
    @endif

    <!-- Persetujuan (Pustakawan, Kepala Perpus & Admin IT) -->
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
                    Koleksi Buku 📚
                </span>
                <span class="bg-amber-100 text-amber-950 font-black text-xs px-2.5 py-0.5 rounded-lg border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] uppercase tracking-wide">
                    {{ strtoupper(session('admin_role', 'ADMIN IT')) }}
                </span>
            </div>
            <span class="text-xs sm:text-sm font-medium text-slate-600 mt-0.5">Kelola dan input koleksi buku perpustakaan.</span>
        </div>

        <div class="flex items-center gap-3 flex-shrink-0">
            <button type="button" onclick="toggleForm()" class="bg-emerald-500 hover:bg-emerald-600 text-white font-extrabold text-xs sm:text-sm px-4 py-2 rounded-xl border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] soft-btn-hover flex items-center gap-1.5 uppercase">
                <span class="material-symbols-outlined text-[18px]">add_box</span>
                <span>Buku Baru</span>
            </button>
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
        
        <!-- Header Section Title -->
        <div class="flex items-center justify-between gap-3 mt-1 flex-wrap">
            <h1 class="soft-title text-2xl sm:text-3xl font-extrabold text-slate-900">
                Daftar Koleksi Buku
            </h1>
            <div class="flex items-center gap-2">
                <a href="{{ route('admin.books.import') }}" class="px-4 py-2 rounded-xl bg-white hover:bg-slate-50 text-slate-800 font-extrabold border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] soft-btn-hover uppercase text-xs flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px] text-indigo-600">upload_file</span>
                    <span>Import Massal</span>
                </a>
                <button type="button" onclick="toggleForm()" class="px-4 py-2 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white font-extrabold border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] soft-btn-hover uppercase text-xs sm:text-sm flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">add</span>
                    <span>Tambah Buku Baru</span>
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

        <!-- Form Modal (Soft Brutalism Popup) -->
        <div id="formModal" class="fixed inset-0 z-[100] hidden flex items-center justify-center p-4 sm:p-6">
            <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity" onclick="toggleForm()"></div>
            
            <div class="relative w-full max-w-3xl bg-white rounded-2xl border-2 border-slate-900 shadow-[6px_6px_0px_#0f172a] p-6 sm:p-8 overflow-y-auto max-h-[90vh] z-10">
                <div class="flex items-center justify-between mb-6 pb-4 border-b-2 border-slate-900">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-indigo-100 border-2 border-slate-900 flex items-center justify-center text-indigo-700 shadow-[2px_2px_0px_#0f172a]">
                            <span class="material-symbols-outlined text-[22px]">book</span>
                        </div>
                        <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900 font-['Space_Grotesk',sans-serif]">
                            Form Tambah Buku Baru
                        </h2>
                    </div>
                    <button type="button" onclick="toggleForm()" class="w-9 h-9 rounded-xl bg-white hover:bg-rose-50 text-slate-700 hover:text-rose-600 border-2 border-slate-900 flex items-center justify-center shadow-[2px_2px_0px_#0f172a] soft-btn-hover transition-colors">
                        <span class="material-symbols-outlined text-[20px]">close</span>
                    </button>
                </div>
                
                <form action="{{ route('admin.books.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
                    @csrf
                    <div class="flex flex-col gap-1">
                        <label class="font-extrabold text-slate-800 uppercase tracking-wide text-xs">Judul Buku</label>
                        <input type="text" name="title" required placeholder="Masukkan judul buku..." class="w-full bg-white border-2 border-slate-900 rounded-xl px-4 py-2.5 shadow-[2px_2px_0px_#0f172a] font-bold text-slate-900 focus:outline-none focus:bg-amber-50/40 text-sm">
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex flex-col gap-1">
                            <label class="font-extrabold text-slate-800 uppercase tracking-wide text-xs">Penulis</label>
                            <input type="text" name="author" required placeholder="Nama penulis..." class="w-full bg-white border-2 border-slate-900 rounded-xl px-4 py-2.5 shadow-[2px_2px_0px_#0f172a] font-bold text-slate-900 focus:outline-none focus:bg-amber-50/40 text-sm">
                        </div>
                        <div class="flex flex-col gap-1">
                            <label class="font-extrabold text-slate-800 uppercase tracking-wide text-xs">Kategori</label>
                            <select name="category" required class="w-full bg-white border-2 border-slate-900 rounded-xl px-4 py-2.5 shadow-[2px_2px_0px_#0f172a] font-bold text-slate-900 focus:outline-none focus:bg-amber-50/40 text-sm cursor-pointer">
                                <option value="Sastra & Novel">Sastra & Novel</option>
                                <option value="Sains & Teknologi">Sains & Teknologi</option>
                                <option value="Filosofi & Mindset">Filosofi & Mindset</option>
                                <option value="Sejarah">Sejarah</option>
                                <option value="Pelajaran">Pelajaran</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div class="flex flex-col gap-1">
                            <label class="font-extrabold text-slate-800 uppercase tracking-wide text-xs">Format Buku</label>
                            <select name="type" required class="w-full bg-white border-2 border-slate-900 rounded-xl px-3 py-2.5 shadow-[2px_2px_0px_#0f172a] font-bold text-slate-900 focus:outline-none text-sm cursor-pointer">
                                <option value="physical">Fisik</option>
                                <option value="ebook">E-Book (PDF)</option>
                                <option value="both">Keduanya (Fisik & PDF)</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label class="font-extrabold text-slate-800 uppercase tracking-wide text-xs">Lokasi Rak</label>
                            <input type="text" name="rack" placeholder="Contoh: Rak A-1" class="w-full bg-white border-2 border-slate-900 rounded-xl px-4 py-2.5 shadow-[2px_2px_0px_#0f172a] font-bold text-slate-900 focus:outline-none text-sm">
                        </div>
                        <div class="flex flex-col gap-1">
                            <label class="font-extrabold text-slate-800 uppercase tracking-wide text-xs">ISBN</label>
                            <input type="text" name="isbn" placeholder="Contoh: 978-623-..." class="w-full bg-white border-2 border-slate-900 rounded-xl px-4 py-2.5 shadow-[2px_2px_0px_#0f172a] font-bold text-slate-900 focus:outline-none text-sm">
                        </div>
                        <div class="flex flex-col gap-1">
                            <label class="font-extrabold text-slate-800 uppercase tracking-wide text-xs">Stok Awal</label>
                            <input type="number" name="stock" min="0" value="1" class="w-full bg-white border-2 border-slate-900 rounded-xl px-4 py-2.5 shadow-[2px_2px_0px_#0f172a] font-bold text-slate-900 focus:outline-none text-sm">
                        </div>
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="font-extrabold text-slate-800 uppercase tracking-wide text-xs">Sinopsis / Ringkasan Buku <span class="text-slate-400 font-semibold lowercase">(opsional)</span></label>
                        <textarea name="description" rows="3" placeholder="Tulis sinopsis atau informasi singkat mengenai buku ini..." class="w-full bg-white border-2 border-slate-900 rounded-xl p-3 shadow-[2px_2px_0px_#0f172a] font-medium text-sm text-slate-900 focus:outline-none focus:bg-amber-50/40"></textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex flex-col gap-1">
                            <label class="font-extrabold text-slate-800 uppercase tracking-wide text-xs">Upload Cover Buku</label>
                            <input type="file" name="cover_image" accept="image/png, image/jpeg, image/jpg" class="w-full bg-white border-2 border-slate-900 rounded-xl p-2 shadow-[2px_2px_0px_#0f172a] font-bold text-xs file:mr-3 file:py-1.5 file:px-3 file:rounded-lg file:border file:border-slate-900 file:text-xs file:font-extrabold file:bg-amber-100 file:text-amber-950 hover:file:bg-amber-200 cursor-pointer">
                        </div>
                        <div class="flex flex-col gap-1">
                            <label class="font-extrabold text-slate-800 uppercase tracking-wide text-xs">Upload PDF (E-Book)</label>
                            <input type="file" name="pdf_file" accept="application/pdf" class="w-full bg-white border-2 border-slate-900 rounded-xl p-2 shadow-[2px_2px_0px_#0f172a] font-bold text-xs file:mr-3 file:py-1.5 file:px-3 file:rounded-lg file:border file:border-slate-900 file:text-xs file:font-extrabold file:bg-sky-100 file:text-sky-950 hover:file:bg-sky-200 cursor-pointer">
                        </div>
                    </div>
                    
                    <div class="pt-4 mt-2 border-t-2 border-slate-900 flex justify-end gap-3">
                        <button type="button" onclick="toggleForm()" class="px-5 py-2.5 rounded-xl bg-white hover:bg-slate-50 text-slate-800 font-extrabold border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] soft-btn-hover text-sm">
                            Batal
                        </button>
                        <button type="submit" class="px-6 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-extrabold border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] soft-btn-hover text-sm">
                            Simpan Buku
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Table Card: DAFTAR BUKU TERSEDIA -->
        <div class="flex flex-col rounded-2xl bg-white border-2 border-slate-900 shadow-[4px_4px_0px_#0f172a] overflow-hidden">
            <div class="p-4 sm:p-5 border-b-2 border-slate-900 flex items-center justify-between bg-emerald-100 flex-wrap gap-3">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-white border-2 border-slate-900 flex items-center justify-center text-slate-900 shadow-[2px_2px_0px_#0f172a]">
                        <span class="material-symbols-outlined text-[22px] text-emerald-700">menu_book</span>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="text-slate-900 font-extrabold text-xl sm:text-2xl tracking-tight font-['Space_Grotesk',sans-serif]">
                            Daftar Koleksi Tersedia
                        </h3>
                        <span class="text-xs font-semibold text-emerald-950">Kelola buku perpustakaan yang aktif dalam katalog.</span>
                    </div>
                </div>
                <span class="px-3 py-1.5 rounded-xl bg-white text-slate-900 font-extrabold border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] text-xs uppercase">
                    Total: {{ $books->total() }} Judul
                </span>
            </div>
            
            <div class="overflow-x-auto p-4 bg-slate-50/50">
                <table class="w-full text-left border-separate border-spacing-y-2">
                    <thead>
                        <tr class="text-slate-700 uppercase tracking-wider text-xs font-extrabold">
                            <th class="p-3.5 pl-4">Judul Buku</th>
                            <th class="p-3.5">Format</th>
                            <th class="p-3.5">Kategori</th>
                            <th class="p-3.5">Lokasi Rak</th>
                            <th class="p-3.5">Stok</th>
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
                            <td class="p-3.5 text-center pr-4 rounded-r-xl border-y-2 border-r-2 border-slate-900">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('admin.books.edit', $book->id) }}" class="w-8 h-8 rounded-lg bg-white hover:bg-slate-100 text-slate-800 border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] inline-flex items-center justify-center soft-btn-hover" title="Edit Buku">
                                        <span class="material-symbols-outlined text-[17px]">edit</span>
                                    </a>
                                    <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?');" class="inline m-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-8 h-8 rounded-lg bg-white hover:bg-rose-50 text-rose-600 border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] inline-flex items-center justify-center soft-btn-hover" title="Hapus Buku">
                                            <span class="material-symbols-outlined text-[17px]">delete</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="p-8 text-center text-slate-900 bg-white border-2 border-slate-900 shadow-[3px_3px_0px_#0f172a] rounded-xl font-extrabold text-base">
                                <div class="flex flex-col items-center justify-center gap-2 py-4">
                                    <span class="material-symbols-outlined text-[48px] text-slate-400">auto_stories</span>
                                    <p class="text-slate-800">Belum ada data buku di perpustakaan.</p>
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
                    @if ($books->onFirstPage())
                        <span class="px-3 py-1.5 rounded-xl bg-slate-100 text-slate-400 font-bold text-xs border-2 border-slate-300 cursor-not-allowed flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">chevron_left</span> Prev
                        </span>
                    @else
                        <a href="{{ $books->previousPageUrl() }}" class="px-3 py-1.5 rounded-xl bg-white hover:bg-slate-50 text-slate-800 font-extrabold text-xs border-2 border-slate-900 shadow-[2px_2px_0px_#0f172a] soft-btn-hover flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">chevron_left</span> Prev
                        </a>
                    @endif

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

<script>
    function toggleForm() {
        const formModal = document.getElementById('formModal');
        if (formModal.classList.contains('hidden')) {
            formModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        } else {
            formModal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    }
</script>
</body>
</html>
