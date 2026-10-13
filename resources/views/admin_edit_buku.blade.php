<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
<title>Edit Buku - Admin BiblioZ</title>
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

    <!-- Active Tambah Buku / Edit Buku Item -->
    <a href="{{ route('admin.books.create') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl bg-[#5f15e8] text-white font-black border-[2.5px] border-black shadow-[4px_4px_0px_#000] transition-all">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
        <circle cx="12" cy="12" r="9"/>
        <line x1="12" y1="8" x2="12" y2="16"/>
        <line x1="8" y1="12" x2="16" y2="12"/>
      </svg>
      <span class="text-base tracking-wide">Kelola Buku</span>
    </a>

    <!-- Persetujuan -->
    <a href="{{ route('admin.persetujuan') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-black font-extrabold hover:bg-black/5 hover:translate-x-1 transition-all">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
        <rect x="8" y="2" width="8" height="4" rx="1"/>
        <path d="m9 14 2 2 4-4"/>
      </svg>
      <span class="text-base">Persetujuan</span>
    </a>

    <!-- Laporan -->
    <a href="{{ route('admin.laporan') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-black font-extrabold hover:bg-black/5 hover:translate-x-1 transition-all">
      <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <line x1="18" y1="20" x2="18" y2="10"/>
        <line x1="12" y1="20" x2="12" y2="4"/>
        <line x1="6" y1="20" x2="6" y2="14"/>
      </svg>
      <span class="text-base">Laporan</span>
    </a>

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
                    Edit Data Buku ✏️
                </span>
                <span class="bg-[#facc15] text-black font-black text-xs px-2.5 py-0.5 rounded-lg border-2 border-black shadow-[3px_3px_0px_#000] uppercase tracking-wide">
                    {{ strtoupper(session('admin_role', 'ADMIN IT')) }}
                </span>
            </div>
            <span class="text-xs sm:text-sm font-semibold text-gray-800 mt-0.5">Perbarui detail, informasi stok, atau berkas buku.</span>
        </div>

        <div class="flex items-center gap-4 flex-shrink-0">
            <a href="{{ route('admin.books.create') }}" class="bg-white text-black font-black text-sm px-4 py-2.5 rounded-xl border-[2.5px] border-black shadow-[3px_3px_0px_#000] comic-btn-hover flex items-center gap-2">
                <span class="material-symbols-outlined text-[20px]">arrow_back</span>
                <span>Kembali</span>
            </a>
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
    <div class="max-w-4xl w-full mx-auto px-6 sm:px-8">
        
        <div class="bg-white rounded-3xl border-[3.5px] border-black shadow-[8px_8px_0px_#000] p-6 sm:p-8">
            <div class="flex items-center justify-between mb-6 pb-4 border-b-[3px] border-black">
                <h2 class="text-2xl font-black text-black flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-[#ffde59] border-2 border-black flex items-center justify-center text-black shadow-[2px_2px_0px_#000]">
                        <span class="material-symbols-outlined text-[24px]">edit_document</span>
                    </div>
                    Perbarui Buku: <span class="text-[#5f15e8] underline">{{ $book->title }}</span>
                </h2>
            </div>
            
            <form action="{{ route('admin.books.update', $book->id) }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-5">
                @csrf
                @method('PUT')
                <div class="flex flex-col gap-1.5">
                    <label class="font-black text-black uppercase tracking-wide text-xs">Judul Buku</label>
                    <input type="text" name="title" value="{{ $book->title }}" required placeholder="Masukkan judul buku..." class="w-full bg-[#fcf9f2] border-[2.5px] border-black rounded-xl px-4 py-3 shadow-[3px_3px_0px_#000] font-bold text-black focus:outline-none focus:bg-white">
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="flex flex-col gap-1.5">
                        <label class="font-black text-black uppercase tracking-wide text-xs">Penulis</label>
                        <input type="text" name="author" value="{{ $book->author }}" required placeholder="Nama penulis..." class="w-full bg-[#fcf9f2] border-[2.5px] border-black rounded-xl px-4 py-3 shadow-[3px_3px_0px_#000] font-bold text-black focus:outline-none focus:bg-white">
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <label class="font-black text-black uppercase tracking-wide text-xs">Kategori</label>
                        <select name="category" required class="w-full bg-[#fcf9f2] border-[2.5px] border-black rounded-xl px-4 py-3 shadow-[3px_3px_0px_#000] font-bold text-black focus:outline-none focus:bg-white cursor-pointer">
                            <option value="Sastra & Novel" {{ $book->category == 'Sastra & Novel' ? 'selected' : '' }}>Sastra & Novel</option>
                            <option value="Sains & Teknologi" {{ $book->category == 'Sains & Teknologi' ? 'selected' : '' }}>Sains & Teknologi</option>
                            <option value="Filosofi & Mindset" {{ $book->category == 'Filosofi & Mindset' ? 'selected' : '' }}>Filosofi & Mindset</option>
                            <option value="Sejarah" {{ $book->category == 'Sejarah' ? 'selected' : '' }}>Sejarah</option>
                            <option value="Pelajaran" {{ $book->category == 'Pelajaran' ? 'selected' : '' }}>Pelajaran</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <div class="flex flex-col gap-1.5">
                        <label class="font-black text-black uppercase tracking-wide text-xs">Tipe Buku</label>
                        <select name="type" required class="w-full bg-[#fcf9f2] border-[2.5px] border-black rounded-xl px-4 py-3 shadow-[3px_3px_0px_#000] font-bold text-black focus:outline-none cursor-pointer">
                            <option value="physical" {{ $book->type == 'physical' ? 'selected' : '' }}>Fisik</option>
                            <option value="ebook" {{ $book->type == 'ebook' ? 'selected' : '' }}>E-Book (PDF)</option>
                            <option value="both" {{ $book->type == 'both' ? 'selected' : '' }}>Keduanya (Fisik & PDF)</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <label class="font-black text-black uppercase tracking-wide text-xs">ISBN</label>
                        <input type="text" name="isbn" value="{{ $book->isbn }}" placeholder="Contoh: 978-623-..." class="w-full bg-[#fcf9f2] border-[2.5px] border-black rounded-xl px-4 py-3 shadow-[3px_3px_0px_#000] font-bold text-black focus:outline-none">
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <label class="font-black text-black uppercase tracking-wide text-xs">Stok Tersedia</label>
                        <input type="number" name="stock" min="0" value="{{ $book->stock }}" class="w-full bg-[#fcf9f2] border-[2.5px] border-black rounded-xl px-4 py-3 shadow-[3px_3px_0px_#000] font-bold text-black focus:outline-none">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-1">
                    <div class="flex flex-col gap-1.5">
                        <label class="font-black text-black uppercase tracking-wide text-xs">
                            Update Cover Buku <span class="text-gray-500 font-bold lowercase">(opsional)</span>
                        </label>
                        <input type="file" name="cover_image" accept="image/png, image/jpeg, image/jpg" class="w-full bg-[#fcf9f2] border-[2.5px] border-black rounded-xl p-2.5 shadow-[3px_3px_0px_#000] font-bold text-xs file:mr-4 file:py-1.5 file:px-3 file:rounded-lg file:border-2 file:border-black file:text-xs file:font-black file:bg-[#ffde59] file:text-black hover:file:bg-[#facc15] cursor-pointer">
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <label class="font-black text-black uppercase tracking-wide text-xs">
                            Update PDF E-Book <span class="text-gray-500 font-bold lowercase">(opsional)</span>
                        </label>
                        <input type="file" name="pdf_file" accept="application/pdf" class="w-full bg-[#fcf9f2] border-[2.5px] border-black rounded-xl p-2.5 shadow-[3px_3px_0px_#000] font-bold text-xs file:mr-4 file:py-1.5 file:px-3 file:rounded-lg file:border-2 file:border-black file:text-xs file:font-black file:bg-[#38b6ff] file:text-black hover:file:bg-[#00b4d8] cursor-pointer">
                    </div>
                </div>
                
                <div class="pt-5 mt-3 border-t-[3px] border-black flex justify-end gap-3">
                    <a href="{{ route('admin.books.create') }}" class="px-5 py-2.5 rounded-xl bg-white text-black font-black border-2 border-black shadow-[3px_3px_0px_#000] comic-btn-hover">Batal</a>
                    <button type="submit" class="px-6 py-2.5 rounded-xl bg-[#5f15e8] text-white font-black border-2 border-black shadow-[3px_3px_0px_#000] comic-btn-hover">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</main>
</body>
</html>
