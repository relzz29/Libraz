<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
    <title>Import Massal Buku - Admin Libraz</title>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&family=Space+Grotesk:wght@700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
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
            box-shadow: 2px 2px 0px #000 !important;
        }
    </style>
</head>
<body class="comic-page-rays font-['Plus_Jakarta_Sans'] text-black min-h-screen flex antialiased selection:bg-[#ffde59] selection:text-black">

    <!-- ================= SIDEBAR ================= -->
    <aside class="w-64 comic-sidebar-rays border-r-[3px] border-black flex flex-col shrink-0 min-h-screen hidden md:flex">
        <!-- Logo -->
        <div class="p-6 border-b-[3px] border-black bg-[#ffde59]">
            <a href="{{ route('admin') }}" class="flex items-center gap-2">
                <span class="text-3xl font-black comic-title">LIBRAZ</span>
                <span class="text-[10px] font-black bg-black text-white px-2 py-0.5 rounded-full border border-black uppercase tracking-wider">ADMIN</span>
            </a>
            <p class="text-[11px] font-black tracking-wider text-black/70 mt-1 uppercase">Sistem Perpustakaan Cerdas</p>
        </div>

        <!-- Navigation Links -->
        <nav class="p-4 space-y-2 flex-1">
            <a href="{{ route('admin') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl border-2 border-transparent hover:border-black hover:bg-white hover:shadow-[3px_3px_0px_#000] font-bold text-sm transition-all">
                <span class="material-symbols-outlined text-[20px]">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a href="{{ route('admin.books.create') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl border-2 border-transparent hover:border-black hover:bg-white hover:shadow-[3px_3px_0px_#000] font-bold text-sm transition-all">
                <span class="material-symbols-outlined text-[20px]">add_circle</span>
                <span>Tambah Buku Manual</span>
            </a>
            <a href="{{ route('admin.books.import') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl border-2 border-black bg-[#38b6ff] text-black shadow-[3px_3px_0px_#000] font-black text-sm">
                <span class="material-symbols-outlined text-[20px]">upload_file</span>
                <span>Bulk Import (Excel/CSV)</span>
            </a>
            <a href="{{ route('admin.persetujuan') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl border-2 border-transparent hover:border-black hover:bg-white hover:shadow-[3px_3px_0px_#000] font-bold text-sm transition-all">
                <span class="material-symbols-outlined text-[20px]">verified</span>
                <span>Persetujuan Pinjam</span>
            </a>
            <a href="{{ route('admin.laporan') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl border-2 border-transparent hover:border-black hover:bg-white hover:shadow-[3px_3px_0px_#000] font-bold text-sm transition-all">
                <span class="material-symbols-outlined text-[20px]">description</span>
                <span>Laporan Sirkulasi</span>
            </a>
            <a href="{{ route('katalog') }}" target="_blank" class="flex items-center gap-3 px-4 py-3 rounded-xl border-2 border-transparent hover:border-black hover:bg-[#a78bfa]/20 font-bold text-sm transition-all">
                <span class="material-symbols-outlined text-[20px]">menu_book</span>
                <span>Lihat Katalog Publik</span>
            </a>
        </nav>

        <!-- User Info / Logout -->
        <div class="p-4 border-t-[3px] border-black bg-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-black truncate">{{ session('admin_name', 'Pustakawan Libraz') }}</p>
                    <span class="text-[10px] font-bold bg-[#70e000] px-2 py-0.5 rounded border border-black">ONLINE</span>
                </div>
                <a href="{{ route('admin.logout') }}" class="p-2 bg-[#ff595e] border-2 border-black rounded-lg hover:bg-red-500 shadow-[2px_2px_0px_#000] transition-all" title="Logout">
                    <span class="material-symbols-outlined text-[18px]">logout</span>
                </a>
            </div>
        </div>
    </aside>

    <!-- ================= MAIN CONTENT ================= -->
    <main class="flex-1 flex flex-col min-w-0 pb-12">
        
        <!-- Top Mobile Header -->
        <header class="p-4 bg-white border-b-[3px] border-black flex items-center justify-between md:hidden">
            <a href="{{ route('admin') }}" class="text-2xl font-black comic-title">LIBRAZ</a>
            <div class="flex items-center gap-2">
                <a href="{{ route('admin.books.create') }}" class="p-2 border-2 border-black rounded-lg bg-[#38b6ff] text-xs font-bold shadow-[2px_2px_0px_#000]">
                    Manual
                </a>
                <a href="{{ route('admin') }}" class="p-2 border-2 border-black rounded-lg bg-[#ffde59] text-xs font-bold shadow-[2px_2px_0px_#000]">
                    Dashboard
                </a>
            </div>
        </header>

        <div class="max-w-5xl mx-auto w-full px-4 sm:px-8 py-8 space-y-6">

            <!-- Breadcrumbs & Title Section -->
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <div class="flex items-center gap-2 text-xs font-black text-black/60 uppercase mb-1">
                        <a href="{{ route('admin') }}" class="hover:underline">Admin</a>
                        <span>/</span>
                        <span>Manajemen Buku</span>
                        <span>/</span>
                        <span class="text-black">Bulk Data Import</span>
                    </div>
                    <h1 class="text-2xl sm:text-3xl font-black tracking-tight text-black flex items-center gap-2">
                        <span class="p-2 rounded-xl bg-[#38b6ff] border-2 border-black shadow-[3px_3px_0px_#000] inline-flex">
                            <span class="material-symbols-outlined text-[24px]">cloud_upload</span>
                        </span>
                        <span>Import Massal Koleksi Buku</span>
                    </h1>
                    <p class="text-sm font-semibold text-black/70 mt-1">
                        Unggah berkas Excel (.xlsx) atau CSV untuk memasukkan ratusan koleksi buku sekaligus secara instan dan efisien.
                    </p>
                </div>

                <!-- Template Download Buttons -->
                <div class="flex items-center gap-2 shrink-0">
                    <a href="{{ route('admin.books.import.template', 'xlsx') }}" 
                       class="px-4 py-2.5 rounded-xl bg-[#70e000] border-2 border-black font-black text-xs shadow-[3px_3px_0px_#000] comic-btn-hover flex items-center gap-1.5"
                       title="Download format Excel">
                        <span class="material-symbols-outlined text-[18px]">table_view</span>
                        <span>Download Template .XLSX</span>
                    </a>
                    <a href="{{ route('admin.books.import.template', 'csv') }}" 
                       class="px-3.5 py-2.5 rounded-xl bg-white border-2 border-black font-black text-xs shadow-[3px_3px_0px_#000] comic-btn-hover flex items-center gap-1.5"
                       title="Download format CSV">
                        <span class="material-symbols-outlined text-[18px]">csv</span>
                        <span>.CSV</span>
                    </a>
                </div>
            </div>

            <!-- ================= FLASH FEEDBACK ALERTS ================= -->
            @if(session('success'))
            <div class="p-4 rounded-2xl bg-[#70e000]/25 border-[2.5px] border-black shadow-[4px_4px_0px_#000] flex items-start gap-3">
                <span class="material-symbols-outlined text-emerald-800 text-[24px] mt-0.5">check_circle</span>
                <div>
                    <h3 class="font-black text-sm text-emerald-950">Berhasil!</h3>
                    <p class="text-xs font-bold text-emerald-900 mt-0.5 leading-relaxed">{{ session('success') }}</p>
                </div>
            </div>
            @endif

            @if(session('warning'))
            <div class="p-4 rounded-2xl bg-[#ffde59]/40 border-[2.5px] border-black shadow-[4px_4px_0px_#000] space-y-3">
                <div class="flex items-start gap-3">
                    <span class="material-symbols-outlined text-amber-900 text-[24px] mt-0.5">warning</span>
                    <div>
                        <h3 class="font-black text-sm text-amber-950">Perhatian: Ada Data Gagal Validasi</h3>
                        <p class="text-xs font-bold text-amber-900 mt-0.5 leading-relaxed">{{ session('warning') }}</p>
                    </div>
                </div>

                @if(session('failures') && count(session('failures')) > 0)
                <div class="mt-3 border-2 border-black rounded-xl overflow-hidden bg-white shadow-[2px_2px_0px_#000]">
                    <div class="bg-black text-white px-3 py-1.5 text-xs font-black uppercase tracking-wider flex items-center justify-between">
                        <span>Daftar Baris yang Gagal Diimpor ({{ count(session('failures')) }} Baris)</span>
                        <span class="text-[10px] text-amber-300">Baris valid lainnya tetap berhasil disimpan</span>
                    </div>
                    <div class="max-h-60 overflow-y-auto">
                        <table class="w-full text-left text-xs border-collapse">
                            <thead class="bg-slate-100 border-b border-black text-black font-black uppercase text-[10px]">
                                <tr>
                                    <th class="p-2 border-r border-black w-16 text-center">Baris</th>
                                    <th class="p-2 border-r border-black w-32">Kolom</th>
                                    <th class="p-2 border-r border-black">Pesan Kesalahan</th>
                                    <th class="p-2">Data Terinput</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-black/20 font-semibold">
                                @foreach(session('failures') as $fail)
                                <tr class="hover:bg-red-50/50">
                                    <td class="p-2 border-r border-black font-black text-center bg-slate-50">#{{ $fail['row'] }}</td>
                                    <td class="p-2 border-r border-black font-mono text-[11px] text-purple-700">{{ $fail['attribute'] }}</td>
                                    <td class="p-2 border-r border-black text-red-600 font-bold">
                                        {{ implode(', ', $fail['errors']) }}
                                    </td>
                                    <td class="p-2 text-black/70 truncate max-w-xs font-mono text-[10px]">
                                        {{ json_encode($fail['values']) }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
            </div>
            @endif

            @if(session('error'))
            <div class="p-4 rounded-2xl bg-[#ff595e]/20 border-[2.5px] border-black shadow-[4px_4px_0px_#000] flex items-start gap-3">
                <span class="material-symbols-outlined text-red-800 text-[24px] mt-0.5">error</span>
                <div>
                    <h3 class="font-black text-sm text-red-950">Gagal Mengimpor Berkas</h3>
                    <p class="text-xs font-bold text-red-900 mt-0.5 leading-relaxed">{{ session('error') }}</p>
                </div>
            </div>
            @endif

            @if($errors->any())
            <div class="p-4 rounded-2xl bg-[#ff595e]/20 border-[2.5px] border-black shadow-[4px_4px_0px_#000] flex items-start gap-3">
                <span class="material-symbols-outlined text-red-800 text-[24px] mt-0.5">error</span>
                <div>
                    <h3 class="font-black text-sm text-red-950">Kesalahan Validasi Berkas:</h3>
                    <ul class="list-disc list-inside text-xs font-bold text-red-900 mt-1 space-y-0.5">
                        @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif

            <!-- ================= UPLOAD CARD ================= -->
            <div class="bg-white rounded-2xl border-[3px] border-black shadow-[6px_6px_0px_#000] p-6 sm:p-8">
                
                <form action="{{ route('admin.books.import.submit') }}" method="POST" enctype="multipart/form-data" id="import-form">
                    @csrf

                    <!-- Drag & Drop Zone -->
                    <div id="drop-zone" 
                         class="relative rounded-2xl border-[3px] border-dashed border-black/40 hover:border-black bg-[#faf6ee] p-8 sm:p-12 text-center transition-all cursor-pointer group flex flex-col items-center justify-center">
                        
                        <input type="file" 
                               name="file" 
                               id="file-input" 
                               accept=".xlsx, .xls, .csv" 
                               required 
                               class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10"/>

                        <!-- Default Empty State -->
                        <div id="drop-zone-prompt" class="flex flex-col items-center space-y-3">
                            <div class="w-16 h-16 rounded-2xl bg-[#38b6ff] border-2 border-black shadow-[3px_3px_0px_#000] flex items-center justify-center group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-[36px] text-black">upload_file</span>
                            </div>
                            <div>
                                <p class="text-base font-black text-black">
                                    Tarik & Letakkan file Excel atau CSV ke sini
                                </p>
                                <p class="text-xs font-bold text-black/60 mt-1">
                                    atau <span class="text-purple-600 underline">klik untuk memilih berkas dari komputer</span>
                                </p>
                            </div>
                            <div class="flex items-center gap-2 pt-2">
                                <span class="px-2.5 py-1 rounded-lg bg-emerald-100 text-emerald-800 border border-emerald-400 text-[10px] font-black uppercase">.XLSX</span>
                                <span class="px-2.5 py-1 rounded-lg bg-blue-100 text-blue-800 border border-blue-400 text-[10px] font-black uppercase">.XLS</span>
                                <span class="px-2.5 py-1 rounded-lg bg-amber-100 text-amber-800 border border-amber-400 text-[10px] font-black uppercase">.CSV</span>
                                <span class="text-[11px] font-bold text-black/50 ml-1">Maksimal 10 MB</span>
                            </div>
                        </div>

                        <!-- Selected File Preview State -->
                        <div id="file-preview-card" class="hidden flex items-center gap-3 bg-white px-5 py-3.5 rounded-xl border-2 border-black shadow-[3px_3px_0px_#000] z-20">
                            <span class="material-symbols-outlined text-[28px] text-[#38b6ff]">description</span>
                            <div class="text-left">
                                <p id="file-name" class="text-xs font-black text-black truncate max-w-xs">nama_file.xlsx</p>
                                <p id="file-size" class="text-[10px] font-bold text-black/60">0 KB</p>
                            </div>
                            <button type="button" id="btn-remove-file" class="ml-2 text-black/40 hover:text-red-500 font-black" title="Batalkan pilihan">
                                <span class="material-symbols-outlined text-[20px]">cancel</span>
                            </button>
                        </div>
                    </div>

                    <!-- Submit Actions -->
                    <div class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4 pt-4 border-t-2 border-black/10">
                        <div class="text-xs font-bold text-black/60 flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[16px] text-purple-600">memory</span>
                            <span>Didukung efisiensi memori (Chunk Reading 500 baris per putaran).</span>
                        </div>

                        <button type="submit" 
                                id="btn-submit-import"
                                class="w-full sm:w-auto px-8 py-3 rounded-xl bg-[#ffde59] border-2 border-black font-black text-sm shadow-[4px_4px_0px_#000] comic-btn-hover flex items-center justify-center gap-2 cursor-pointer">
                            <span class="material-symbols-outlined text-[20px]">play_arrow</span>
                            <span>Mulai Proses Import Sekarang</span>
                        </button>
                    </div>

                </form>

            </div>

            <!-- ================= FORMAT SPESIFIKASI KOLOM ================= -->
            <div class="bg-white rounded-2xl border-[3px] border-black shadow-[4px_4px_0px_#000] p-6 space-y-4">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-[22px] text-purple-600">tune</span>
                    <h2 class="text-base font-black text-black">Panduan Format Kolom Spreadsheet</h2>
                </div>
                <p class="text-xs font-bold text-black/70">
                    Pastikan baris pertama (header) spreadsheet Anda memuat nama kolom yang sesuai. Anda dapat menggunakan nama kolom dalam Bahasa Inggris maupun Bahasa Indonesia:
                </p>

                <div class="border-2 border-black rounded-xl overflow-hidden shadow-[2px_2px_0px_#000]">
                    <table class="w-full text-left text-xs border-collapse">
                        <thead class="bg-[#faf6ee] border-b-2 border-black font-black uppercase text-[10px]">
                            <tr>
                                <th class="p-2.5 border-r border-black">Nama Kolom (Header)</th>
                                <th class="p-2.5 border-r border-black w-24 text-center">Status</th>
                                <th class="p-2.5 border-r border-black">Tipe Data</th>
                                <th class="p-2.5">Keterangan & Nilai Bawaan</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-black/20 font-semibold">
                            <tr>
                                <td class="p-2.5 border-r border-black font-mono font-bold text-purple-700">title / judul</td>
                                <td class="p-2.5 border-r border-black text-center"><span class="px-2 py-0.5 rounded bg-red-100 text-red-800 font-black text-[10px] border border-red-300">Wajib</span></td>
                                <td class="p-2.5 border-r border-black text-black/70">Teks (Maks 255)</td>
                                <td class="p-2.5 text-black/80">Judul lengkap buku atau modul ajar.</td>
                            </tr>
                            <tr class="bg-slate-50/50">
                                <td class="p-2.5 border-r border-black font-mono font-bold text-purple-700">author / penulis</td>
                                <td class="p-2.5 border-r border-black text-center"><span class="px-2 py-0.5 rounded bg-red-100 text-red-800 font-black text-[10px] border border-red-300">Wajib</span></td>
                                <td class="p-2.5 border-r border-black text-black/70">Teks (Maks 255)</td>
                                <td class="p-2.5 text-black/80">Nama penulis, penyusun, atau penerbit resmi.</td>
                            </tr>
                            <tr>
                                <td class="p-2.5 border-r border-black font-mono font-bold text-purple-700">category / kategori</td>
                                <td class="p-2.5 border-r border-black text-center"><span class="px-2 py-0.5 rounded bg-slate-100 text-slate-800 font-bold text-[10px] border border-slate-300">Opsional</span></td>
                                <td class="p-2.5 border-r border-black text-black/70">Teks</td>
                                <td class="p-2.5 text-black/80">Contoh: <em>Teknik & Rekayasa</em>, <em>Seni & Animasi</em>. Default: <code>Umum</code></td>
                            </tr>
                            <tr class="bg-slate-50/50">
                                <td class="p-2.5 border-r border-black font-mono font-bold text-purple-700">stock / stok</td>
                                <td class="p-2.5 border-r border-black text-center"><span class="px-2 py-0.5 rounded bg-slate-100 text-slate-800 font-bold text-[10px] border border-slate-300">Opsional</span></td>
                                <td class="p-2.5 border-r border-black text-black/70">Angka Bulat</td>
                                <td class="p-2.5 text-black/80">Jumlah eksemplar buku fisik. Default: <code>50</code></td>
                            </tr>
                            <tr>
                                <td class="p-2.5 border-r border-black font-mono font-bold text-purple-700">rack / rak</td>
                                <td class="p-2.5 border-r border-black text-center"><span class="px-2 py-0.5 rounded bg-slate-100 text-slate-800 font-bold text-[10px] border border-slate-300">Opsional</span></td>
                                <td class="p-2.5 border-r border-black text-black/70">Teks</td>
                                <td class="p-2.5 text-black/80">Posisi rak di perpustakaan. Default: <code>Rak 1</code></td>
                            </tr>
                            <tr class="bg-slate-50/50">
                                <td class="p-2.5 border-r border-black font-mono font-bold text-purple-700">isbn</td>
                                <td class="p-2.5 border-r border-black text-center"><span class="px-2 py-0.5 rounded bg-slate-100 text-slate-800 font-bold text-[10px] border border-slate-300">Opsional</span></td>
                                <td class="p-2.5 border-r border-black text-black/70">Teks</td>
                                <td class="p-2.5 text-black/80">Nomor ISBN resmi berstandar nasional.</td>
                            </tr>
                            <tr>
                                <td class="p-2.5 border-r border-black font-mono font-bold text-purple-700">type / tipe</td>
                                <td class="p-2.5 border-r border-black text-center"><span class="px-2 py-0.5 rounded bg-slate-100 text-slate-800 font-bold text-[10px] border border-slate-300">Opsional</span></td>
                                <td class="p-2.5 border-r border-black text-black/70">physical / ebook / both</td>
                                <td class="p-2.5 text-black/80">Tipe ketersediaan koleksi. Default: <code>physical</code></td>
                            </tr>
                            <tr class="bg-slate-50/50">
                                <td class="p-2.5 border-r border-black font-mono font-bold text-purple-700">description / deskripsi</td>
                                <td class="p-2.5 border-r border-black text-center"><span class="px-2 py-0.5 rounded bg-slate-100 text-slate-800 font-bold text-[10px] border border-slate-300">Opsional</span></td>
                                <td class="p-2.5 border-r border-black text-black/70">Teks Panjang</td>
                                <td class="p-2.5 text-black/80">Sinopsis ringkas isi buku.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>

    <!-- Interactive Drag & Drop Script -->
    <script>
        const fileInput = document.getElementById('file-input');
        const dropZone = document.getElementById('drop-zone');
        const promptState = document.getElementById('drop-zone-prompt');
        const previewCard = document.getElementById('file-preview-card');
        const fileNameEl = document.getElementById('file-name');
        const fileSizeEl = document.getElementById('file-size');
        const removeBtn = document.getElementById('btn-remove-file');
        const importForm = document.getElementById('import-form');
        const submitBtn = document.getElementById('btn-submit-import');

        function formatBytes(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }

        function updateFilePreview(file) {
            if (file) {
                fileNameEl.textContent = file.name;
                fileSizeEl.textContent = formatBytes(file.size);
                promptState.classList.add('hidden');
                previewCard.classList.remove('hidden');
                dropZone.classList.add('bg-purple-50', 'border-purple-500');
            } else {
                fileInput.value = '';
                promptState.classList.remove('hidden');
                previewCard.classList.add('hidden');
                dropZone.classList.remove('bg-purple-50', 'border-purple-500');
            }
        }

        fileInput.addEventListener('change', (e) => {
            if (e.target.files.length > 0) {
                updateFilePreview(e.target.files[0]);
            }
        });

        // Drag and drop UI highlights
        ['dragenter', 'dragover'].forEach(eventName => {
            dropZone.addEventListener(eventName, (e) => {
                e.preventDefault();
                e.stopPropagation();
                dropZone.classList.add('bg-amber-100', 'border-black', 'scale-[1.01]');
            }, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, (e) => {
                e.preventDefault();
                e.stopPropagation();
                dropZone.classList.remove('bg-amber-100', 'scale-[1.01]');
            }, false);
        });

        dropZone.addEventListener('drop', (e) => {
            const dt = e.dataTransfer;
            const files = dt.files;
            if (files.length > 0) {
                fileInput.files = files;
                updateFilePreview(files[0]);
            }
        });

        removeBtn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            updateFilePreview(null);
        });

        // Submit loading indicator
        importForm.addEventListener('submit', () => {
            submitBtn.disabled = true;
            submitBtn.classList.add('opacity-70', 'cursor-not-allowed');
            submitBtn.innerHTML = `
                <div class="w-4 h-4 border-2 border-black border-t-transparent rounded-full animate-spin"></div>
                <span>Sedang Memproses Data (Chunk Reading)...</span>
            `;
        });
    </script>
</body>
</html>

