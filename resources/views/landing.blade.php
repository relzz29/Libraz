<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta name="theme-color" content="#faf6ee">
    <meta name="description" content="Libraz - Ekosistem perpustakaan digital pintar generasi baru. Peminjaman mandiri berbasis QR, pelacakan bacaan real-time, dan akses ribuan koleksi buku berkualitas tanpa antre.">
    <title>Libraz — Perpustakaan Digital Cerdas & Komik Modern</title>

    <!-- Google Fonts: Fredoka, Space Grotesk & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&family=Space+Grotesk:wght@700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">

    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        comic: {
                            bg: '#faf6ee',
                            yellow: '#facc15',
                            gold: '#fbb03b',
                            purple: '#7c3aed',
                            purpleDark: '#5f15e8',
                            pink: '#ec4899',
                            magenta: '#cb6ce6',
                            green: '#8ce934',
                            orange: '#ff914d',
                            red: '#ff5757'
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        comic: ['"Fredoka"', '"Plus Jakarta Sans"', 'sans-serif'],
                        grotesk: ['"Space Grotesk"', 'sans-serif']
                    }
                }
            }
        };
    </script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        /* Manga & Comic Neo-Brutalist Styles */
        .comic-page-rays {
            background-color: #faf6ee;
            background-image: repeating-conic-gradient(
                from 0deg at 50% -12%,
                rgba(0, 0, 0, 0.038) 0deg 2.2deg,
                transparent 2.2deg 8.5deg
            );
        }

        .comic-halftone {
            background-image: radial-gradient(#000000 1.2px, transparent 1.2px);
            background-size: 16px 16px;
            opacity: 0.08;
        }

        .comic-title {
            font-family: 'Fredoka', 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(135deg, #7c3aed 0%, #c026d3 50%, #ec4899 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-text-stroke: 2px #000;
            filter: drop-shadow(4px 4px 0px #000);
            letter-spacing: -0.01em;
        }

        .comic-btn-hover {
            transition: transform 0.12s ease, box-shadow 0.12s ease;
        }
        .comic-btn-hover:hover {
            transform: translate(3px, 3px);
            box-shadow: 2px 2px 0px #000 !important;
        }
        .comic-btn-hover:active {
            transform: translate(5px, 5px);
            box-shadow: 0px 0px 0px #000 !important;
        }

        /* Speed burst cards */
        .comic-burst-yellow {
            background-color: #fbb03b;
            background-image: repeating-conic-gradient(
                from 0deg at 80% 25%,
                rgba(255, 255, 255, 0.28) 0deg 3.5deg,
                transparent 3.5deg 12deg
            );
        }

        .comic-burst-purple {
            background-color: #a855f7;
            background-image: repeating-conic-gradient(
                from 45deg at 80% 25%,
                rgba(255, 255, 255, 0.2) 0deg 3deg,
                transparent 3deg 10deg
            );
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #faf6ee;
        }
        ::-webkit-scrollbar-thumb {
            background: #000;
            border-radius: 4px;
        }
    </style>
</head>
<body class="comic-page-rays font-sans text-black antialiased selection:bg-[#fbbf24] selection:text-black min-h-screen overflow-x-hidden">

    <!-- ================= NAVBAR ================= -->
    <header class="sticky top-0 z-50 bg-[#faf6ee]/95 backdrop-blur-md border-b-[3.5px] border-black">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between" aria-label="Navigasi Utama">
            
            <!-- Brand Logo (Comic Style) -->
            <a href="{{ url('/') }}" class="flex items-center gap-3 group focus:outline-none">
                <div class="relative flex-shrink-0">
                    <svg class="w-11 h-11 filter drop-shadow-[2.5px_2.5px_0px_#000] transition-transform group-hover:-rotate-3" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Left Page (Lime Green) -->
                        <path d="M22 11 C15 8 8 9 5 11 L5 33 C8 31 15 30 22 32 Z" fill="#8ce934" stroke="#000" stroke-width="2.8" stroke-linejoin="round" />
                        <!-- Right Page (Yellow) -->
                        <path d="M22 11 C29 8 36 9 39 11 L39 33 C36 31 29 30 22 32 Z" fill="#facc15" stroke="#000" stroke-width="2.8" stroke-linejoin="round" />
                        <!-- Center Spine Page (Purple) -->
                        <path d="M22 10 L22 32" stroke="#000" stroke-width="2.8" />
                        <path d="M12 10 C15 8 20 9 22 10 C24 9 29 8 32 10" stroke="#9333ea" stroke-width="2" stroke-linecap="round" fill="none" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="font-grotesk font-black text-2xl tracking-wider text-black leading-none flex items-center">
                        LIBRAZ<span class="text-[#ec4899] font-black text-3xl leading-none">!</span>
                    </span>
                    <span class="text-[9px] font-black tracking-[0.25em] text-black/70 uppercase leading-tight mt-1">DIGITAL LIBRARY</span>
                </div>
            </a>

            <!-- Desktop Menu Links -->
            <div class="hidden md:flex items-center gap-7 font-black text-sm uppercase tracking-wide">
                <a href="#fitur" class="text-black hover:text-[#7c3aed] transition-colors">Fitur Unggulan</a>
                <a href="#katalog" class="text-black hover:text-[#7c3aed] transition-colors">Koleksi Buku</a>
                <a href="#tentang" class="text-black hover:text-[#7c3aed] transition-colors">Tentang Kami</a>
                <a href="#testimoni" class="text-black hover:text-[#7c3aed] transition-colors">Ulasan</a>
                <a href="#faq" class="text-black hover:text-[#7c3aed] transition-colors">FAQ</a>
            </div>

            <!-- SATU TOMBOL SAJA (KOMIK STYLE: KUNING EMAS / LIME BOLD DENGAN SHADOW TEBAL HITAM) -->
            <div class="hidden sm:flex items-center">
                <a href="{{ route('login') }}" class="inline-flex items-center gap-2.5 px-6 py-3 rounded-2xl text-sm font-black text-black bg-[#ffde59] hover:bg-[#ffe57e] border-[3px] border-black shadow-[4px_4px_0px_#000] comic-btn-hover uppercase tracking-wider">
                    <span class="material-symbols-outlined text-[20px] font-black">login</span>
                    <span>Masuk ke Libraz</span>
                    <span class="text-xs bg-black text-[#ffde59] px-1.5 py-0.5 rounded font-black">GO!</span>
                </a>
            </div>

            <!-- Mobile Hamburger Toggle -->
            <button id="mobile-toggle-btn" class="sm:hidden p-2 rounded-xl border-[2.5px] border-black bg-white shadow-[3px_3px_0px_#000] text-black focus:outline-none comic-btn-hover" aria-label="Buka Menu Navigasi" aria-expanded="false">
                <i data-lucide="menu" id="hamburger-icon" class="w-6 h-6"></i>
                <i data-lucide="x" id="close-icon" class="w-6 h-6 hidden"></i>
            </button>
        </nav>

        <!-- Mobile Dropdown Menu -->
        <div id="mobile-menu" class="hidden sm:hidden border-t-[3px] border-black bg-[#faf6ee] px-5 pt-4 pb-6 transition-all duration-300">
            <div class="flex flex-col space-y-3 font-black text-sm uppercase">
                <a href="#fitur" class="mobile-nav-link py-2 border-b-2 border-black/10 hover:text-[#7c3aed]">Fitur Unggulan</a>
                <a href="#katalog" class="mobile-nav-link py-2 border-b-2 border-black/10 hover:text-[#7c3aed]">Koleksi Buku</a>
                <a href="#tentang" class="mobile-nav-link py-2 border-b-2 border-black/10 hover:text-[#7c3aed]">Tentang Kami</a>
                <a href="#testimoni" class="mobile-nav-link py-2 border-b-2 border-black/10 hover:text-[#7c3aed]">Ulasan</a>
                <a href="#faq" class="mobile-nav-link py-2 hover:text-[#7c3aed]">FAQ</a>
            </div>
            <!-- Satu Tombol Saja untuk Mobile -->
            <div class="mt-5 pt-4 border-t-[3px] border-black">
                <a href="{{ route('login') }}" class="w-full flex items-center justify-center gap-2 px-5 py-3.5 rounded-2xl text-sm font-black text-black bg-[#ffde59] border-[3px] border-black shadow-[4px_4px_0px_#000] comic-btn-hover uppercase tracking-wider">
                    <span class="material-symbols-outlined text-[20px] font-black">login</span>
                    <span>Masuk ke Libraz</span>
                </a>
            </div>
        </div>
    </header>

    <!-- ================= HERO SECTION ================= -->
    <section class="relative pt-12 pb-20 md:pt-20 md:pb-28 overflow-hidden">
        <!-- Comic Halftone Pattern in background -->
        <div class="comic-halftone absolute inset-0 pointer-events-none"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                
                <!-- Left Column: Copywriting & SATU TOMBOL SAJA -->
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    
                    <!-- Comic Badge Tag -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-xl border-[2.5px] border-black bg-[#8ce934] text-black font-black text-xs uppercase tracking-wider shadow-[3px_3px_0px_#000] -rotate-1">
                        <span class="w-2.5 h-2.5 rounded-full bg-black animate-ping"></span>
                        ⚡ PERPUSTAKAAN DIGITAL SERU & CEPAT!
                    </div>

                    <!-- Main Comic Title -->
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-comic font-black tracking-tight leading-[1.1] text-black">
                        Baca Ribuan Buku Tanpa Antre, Semua Ada di 
                        <span class="comic-title block sm:inline">Libraz!</span>
                    </h1>

                    <!-- Subheadline -->
                    <p class="text-base sm:text-lg text-black/80 font-bold leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        Platform perpustakaan digital terpadu dengan katalog kilat, peminjaman mandiri via QR, dan sistem bebas denda. Pinjam komik, novel, buku pelajaran, dan sains cuma dalam hitungan detik!
                    </p>

                    <!-- SATU TOMBOL SAJA (HERO ACTION) -->
                    <div class="pt-2 flex justify-center lg:justify-start">
                        <a href="{{ route('login') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-10 py-5 rounded-2xl text-lg font-black text-black bg-[#ffde59] hover:bg-[#ffe57e] border-[3.5px] border-black shadow-[6px_6px_0px_#000] comic-btn-hover uppercase tracking-wider">
                            <span class="material-symbols-outlined text-[28px] font-black">rocket_launch</span>
                            <span>Masuk ke Libraz Sekarang!</span>
                            <span class="bg-black text-[#ffde59] px-2 py-0.5 rounded-lg text-xs font-black">GRATIS</span>
                        </a>
                    </div>

                    <!-- Trust Metric Comic Badges -->
                    <div class="pt-6 grid grid-cols-3 gap-4 border-t-[3px] border-black max-w-lg mx-auto lg:mx-0">
                        <div class="bg-white p-3 rounded-xl border-[2.5px] border-black shadow-[3px_3px_0px_#000]">
                            <div class="text-2xl font-black text-black font-grotesk">15.000+</div>
                            <div class="text-xs font-bold text-black/70 mt-0.5">Judul Buku</div>
                        </div>
                        <div class="bg-[#facc15] p-3 rounded-xl border-[2.5px] border-black shadow-[3px_3px_0px_#000]">
                            <div class="text-2xl font-black text-black font-grotesk">0 DETIK</div>
                            <div class="text-xs font-bold text-black/80 mt-0.5">Scan QR Instan</div>
                        </div>
                        <div class="bg-[#8ce934] p-3 rounded-xl border-[2.5px] border-black shadow-[3px_3px_0px_#000]">
                            <div class="text-2xl font-black text-black font-grotesk">100%</div>
                            <div class="text-xs font-bold text-black/80 mt-0.5">Bebas Antre</div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Comic Style Dashboard Card Preview -->
                <div class="lg:col-span-5 relative">
                    
                    <!-- Comic Floating Speech Bubble 1 -->
                    <div class="absolute -top-6 -left-4 sm:-left-6 z-20 hidden sm:flex items-center gap-2.5 px-4 py-2.5 rounded-2xl bg-[#8ce934] border-[3px] border-black shadow-[4px_4px_0px_#000] -rotate-3">
                        <span class="text-xl">🔔</span>
                        <div>
                            <p class="text-[11px] font-black uppercase text-black">Bebas Denda!</p>
                            <p class="text-[10px] font-bold text-black/80">Pengingat otomatis H-2</p>
                        </div>
                    </div>

                    <!-- Comic Floating Badge 2 -->
                    <div class="absolute -bottom-6 -right-2 sm:-right-4 z-20 hidden sm:flex items-center gap-2.5 px-4 py-2.5 rounded-2xl bg-[#ff914d] border-[3px] border-black shadow-[4px_4px_0px_#000] rotate-2">
                        <span class="text-xl">⚡</span>
                        <div>
                            <p class="text-[11px] font-black uppercase text-black">Peminjaman Cepat</p>
                            <p class="text-[10px] font-bold text-black/80">Scan QR di rak buku</p>
                        </div>
                    </div>

                    <!-- Comic Container Mockup -->
                    <div class="rounded-3xl bg-white border-[4px] border-black shadow-[8px_8px_0px_#000] overflow-hidden">
                        
                        <!-- Header Bar (Comic Pop Header) -->
                        <div class="bg-[#cb6ce6] px-5 py-3.5 border-b-[3.5px] border-black flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="w-3.5 h-3.5 rounded-full bg-[#ff5757] border-[1.5px] border-black inline-block"></span>
                                <span class="w-3.5 h-3.5 rounded-full bg-[#facc15] border-[1.5px] border-black inline-block"></span>
                                <span class="w-3.5 h-3.5 rounded-full bg-[#8ce934] border-[1.5px] border-black inline-block"></span>
                                <span class="ml-2 text-xs font-black text-white font-grotesk uppercase drop-shadow-[1px_1px_0px_#000]">DASHBOARD.LIBRAZ</span>
                            </div>
                            <span class="px-2.5 py-0.5 rounded-lg text-[10px] font-black bg-white text-black border-2 border-black shadow-[2px_2px_0px_#000] uppercase">
                                STATUS: AKTIF
                            </span>
                        </div>

                        <!-- Card Body (Comic Yellow / Paper Palette) -->
                        <div class="p-6 space-y-4 bg-[#faf6ee]">
                            
                            <!-- User Welcome Comic Box -->
                            <div class="p-4 rounded-2xl bg-white border-[3px] border-black shadow-[4px_4px_0px_#000] flex items-center justify-between">
                                <div>
                                    <h4 class="text-base font-black text-black">Halo, Aryandi! 👋</h4>
                                    <p class="text-xs font-bold text-black/60">ID ANGGOTA: <span class="text-[#7c3aed]">LIB-2026-99</span></p>
                                </div>
                                <div class="w-10 h-10 rounded-xl bg-[#facc15] border-[2px] border-black shadow-[2px_2px_0px_#000] flex items-center justify-center font-black text-black font-grotesk text-sm">
                                    AR
                                </div>
                            </div>

                            <!-- Target Baca (Speedburst Yellow) -->
                            <div class="p-4 rounded-2xl comic-burst-yellow border-[3px] border-black shadow-[4px_4px_0px_#000] space-y-2">
                                <div class="flex items-center justify-between text-xs font-black text-black">
                                    <span class="flex items-center gap-1.5 uppercase">
                                        🔥 Target Membaca Bulan Ini
                                    </span>
                                    <span class="bg-black text-[#facc15] px-2 py-0.5 rounded-md">4 / 5 BUKU (80%)</span>
                                </div>
                                <div class="w-full bg-white rounded-full h-3.5 border-2 border-black overflow-hidden p-0.5">
                                    <div class="bg-[#7c3aed] h-full rounded-full w-4/5 border border-black"></div>
                                </div>
                            </div>

                            <!-- Sedang Dipinjam Comic Card -->
                            <div class="p-4 rounded-2xl bg-white border-[3px] border-black shadow-[4px_4px_0px_#000] flex items-center gap-3.5">
                                <div class="w-12 h-16 rounded-xl bg-[#cb6ce6] border-[2px] border-black shadow-[2px_2px_0px_#000] flex flex-col justify-between p-1 text-center shrink-0">
                                    <span class="text-[8px] font-black text-white">IT</span>
                                    <span class="text-sm">💻</span>
                                    <span class="text-[7px] font-black text-white">#01</span>
                                </div>
                                <div class="min-w-0 flex-1">
                                    <h5 class="text-xs font-black text-black truncate uppercase">Clean Code & Algoritma Modern</h5>
                                    <p class="text-[11px] font-bold text-black/60 mt-0.5">Robert C. Martin • Rak IT-04</p>
                                    <div class="mt-1 flex items-center gap-2">
                                        <span class="inline-flex items-center gap-1 text-[10px] font-black text-black bg-[#8ce934] px-2 py-0.5 rounded-md border border-black">
                                            ⏰ Sisa 4 Hari Lagi
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Satu Tombol Pintas Dalam Mockup -->
                            <a href="{{ route('login') }}" class="w-full flex items-center justify-center gap-2 py-3 px-4 rounded-xl text-xs font-black text-black bg-[#ffde59] hover:bg-[#ffe57e] border-[2.5px] border-black shadow-[3px_3px_0px_#000] comic-btn-hover uppercase tracking-wider">
                                <span class="material-symbols-outlined text-[18px] font-black">arrow_forward</span>
                                <span>Buka Dashboard Lengkap</span>
                            </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= FITUR UNGGULAN (COMIC NEO-BRUTALIST CARDS) ================= -->
    <section id="fitur" class="py-20 md:py-28 relative border-t-[3.5px] border-black bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <span class="text-xs uppercase tracking-widest font-black text-black bg-[#8ce934] px-4 py-1.5 rounded-xl border-[2.5px] border-black shadow-[3px_3px_0px_#000]">
                    FITUR PINTAR SERBA CEPAT
                </span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-comic font-black text-black tracking-tight">
                    Segala Kemudahan Membaca, <br>
                    <span class="comic-title">Tanpa Drama Birokrasi!</span>
                </h2>
                <p class="text-black/80 font-bold text-base leading-relaxed">
                    Tinggalkan kertas kartu yang mudah hilang. Libraz membuat urusan meminjam dan mengembalikan buku jadi semenyenangkan membaca komik favoritmu.
                </p>
            </div>

            <!-- Grid 6 Kartu Fitur Comic Style -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                <!-- Fitur 1 (Kuning) -->
                <div class="p-6 rounded-2xl bg-[#ffde59] border-[3.5px] border-black shadow-[5px_5px_0px_#000] comic-btn-hover flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-white border-[2.5px] border-black shadow-[3px_3px_0px_#000] flex items-center justify-center mb-4 text-2xl font-black">
                            🔍
                        </div>
                        <h3 class="text-lg font-black text-black mb-2 uppercase">Pencarian Kilat & Presisi</h3>
                        <p class="text-sm font-bold text-black/80 leading-relaxed">
                            Ketik judul, pengarang, atau topik dan temukan lokasinya di rak buku dalam hitungan detik dengan filter cerdas.
                        </p>
                    </div>
                </div>

                <!-- Fitur 2 (Hijau Lime) -->
                <div class="p-6 rounded-2xl bg-[#8ce934] border-[3.5px] border-black shadow-[5px_5px_0px_#000] comic-btn-hover flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-white border-[2.5px] border-black shadow-[3px_3px_0px_#000] flex items-center justify-center mb-4 text-2xl font-black">
                            📱
                        </div>
                        <h3 class="text-lg font-black text-black mb-2 uppercase">Peminjaman Mandiri QR</h3>
                        <p class="text-sm font-bold text-black/80 leading-relaxed">
                            Tinggal scan kode QR pada buku dari ponselmu di perpustakaan. Verifikasi otomatis beres tanpa perlu antre di meja petugas.
                        </p>
                    </div>
                </div>

                <!-- Fitur 3 (Oranye) -->
                <div class="p-6 rounded-2xl bg-[#ff914d] border-[3.5px] border-black shadow-[5px_5px_0px_#000] comic-btn-hover flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-white border-[2.5px] border-black shadow-[3px_3px_0px_#000] flex items-center justify-center mb-4 text-2xl font-black">
                            🛡️
                        </div>
                        <h3 class="text-lg font-black text-black mb-2 uppercase">Pengingat Bebas Denda</h3>
                        <p class="text-sm font-bold text-black/80 leading-relaxed">
                            Notifikasi pintar langsung mengingatkan masa tenggat sebelum jatuh tempo, memastikan kamu selalu aman dan tenang.
                        </p>
                    </div>
                </div>

                <!-- Fitur 4 (Ungu Lilac) -->
                <div class="p-6 rounded-2xl bg-[#c4b5fd] border-[3.5px] border-black shadow-[5px_5px_0px_#000] comic-btn-hover flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-white border-[2.5px] border-black shadow-[3px_3px_0px_#000] flex items-center justify-center mb-4 text-2xl font-black">
                            💻
                        </div>
                        <h3 class="text-lg font-black text-black mb-2 uppercase">Sinkronisasi Lintas Gadget</h3>
                        <p class="text-sm font-bold text-black/80 leading-relaxed">
                            Buka akun dari laptop kelas, tablet, atau smartphone. Progres membaca dan daftar buku favorit tersimpan rapi secara real-time.
                        </p>
                    </div>
                </div>

                <!-- Fitur 5 (Pink Magenta) -->
                <div class="p-6 rounded-2xl bg-[#f472b6] border-[3.5px] border-black shadow-[5px_5px_0px_#000] comic-btn-hover flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-white border-[2.5px] border-black shadow-[3px_3px_0px_#000] flex items-center justify-center mb-4 text-2xl font-black">
                            💬
                        </div>
                        <h3 class="text-lg font-black text-black mb-2 uppercase">Ulasan & Rating Komunitas</h3>
                        <p class="text-sm font-bold text-black/80 leading-relaxed">
                            Dapatkan rekomendasi bacaan terbaik dari sesama pembaca dan bagikan ulasan menarik untuk buku yang sudah selesai dibaca.
                        </p>
                    </div>
                </div>

                <!-- Fitur 6 (Putih Comic) -->
                <div class="p-6 rounded-2xl bg-white border-[3.5px] border-black shadow-[5px_5px_0px_#000] comic-btn-hover flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-[#ffde59] border-[2.5px] border-black shadow-[3px_3px_0px_#000] flex items-center justify-center mb-4 text-2xl font-black">
                            📊
                        </div>
                        <h3 class="text-lg font-black text-black mb-2 uppercase">Statistik Minat Baca</h3>
                        <p class="text-sm font-bold text-black/80 leading-relaxed">
                            Pantau total halaman yang terbaca per bulan dan koleksi genre terfavoritmu lewat grafik interaktif yang memotivasi.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= PRATINJAU KATALOG KOLEKSI ================= -->
    <section id="katalog" class="py-20 md:py-28 relative border-t-[3.5px] border-black bg-[#faf6ee]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                <div>
                    <span class="text-xs uppercase tracking-widest font-black text-black bg-[#facc15] px-4 py-1.5 rounded-xl border-[2.5px] border-black shadow-[3px_3px_0px_#000]">
                        KATALOG PILIHAN
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-comic font-black text-black tracking-tight mt-3">
                        Koleksi Buku & Komik Terpopuler
                    </h2>
                    <p class="text-black/80 font-bold text-sm mt-1">Cek sampel buku terpopuler dan periksa ketersediaan stok fisik secara langsung.</p>
                </div>

                <!-- Satu Tombol Arah Katalog -->
                <div>
                    <a href="{{ route('login') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-2xl text-sm font-black text-black bg-white hover:bg-slate-50 border-[3px] border-black shadow-[4px_4px_0px_#000] comic-btn-hover uppercase tracking-wider">
                        <span>Jelajahi Seluruh Koleksi</span>
                        <span class="material-symbols-outlined text-[18px] font-black">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Grid Buku Populer (Comic Card Look) -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Buku 1: Komik / Teknologi -->
                <div class="rounded-3xl bg-white border-[3.5px] border-black shadow-[6px_6px_0px_#000] overflow-hidden flex flex-col justify-between comic-btn-hover">
                    <div>
                        <div class="h-48 bg-[#facc15] p-5 flex flex-col justify-between border-b-[3.5px] border-black relative">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-1 rounded-lg text-[10px] font-black uppercase bg-white text-black border-2 border-black shadow-[2px_2px_0px_#000]">
                                    Teknologi
                                </span>
                                <span class="bg-black text-[#facc15] px-2 py-0.5 rounded-md font-black text-xs">
                                    ★ 4.9
                                </span>
                            </div>
                            <div>
                                <span class="text-3xl">🤖</span>
                                <h4 class="text-base font-black text-black font-comic leading-tight mt-1">Mastering AI & Machine Learning</h4>
                            </div>
                        </div>
                        <div class="p-5 space-y-1 text-xs font-bold text-black/80">
                            <p>Penulis: <span class="text-black font-black">Dr. Andrew Wijaya</span></p>
                            <p>Lokasi: <span class="text-black font-black">Rak IT-01</span></p>
                        </div>
                    </div>
                    <div class="p-4 border-t-[2.5px] border-black bg-[#faf6ee] flex items-center justify-between">
                        <span class="text-xs font-black text-black bg-[#8ce934] px-2.5 py-1 rounded-lg border-2 border-black">
                            Tersedia (8 Eks)
                        </span>
                        <a href="{{ route('login') }}" class="text-xs font-black text-black hover:text-[#7c3aed] flex items-center gap-1 uppercase">
                            Pinjam ➔
                        </a>
                    </div>
                </div>

                <!-- Buku 2: Sains -->
                <div class="rounded-3xl bg-white border-[3.5px] border-black shadow-[6px_6px_0px_#000] overflow-hidden flex flex-col justify-between comic-btn-hover">
                    <div>
                        <div class="h-48 bg-[#a855f7] p-5 flex flex-col justify-between border-b-[3.5px] border-black relative">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-1 rounded-lg text-[10px] font-black uppercase bg-white text-black border-2 border-black shadow-[2px_2px_0px_#000]">
                                    Sains
                                </span>
                                <span class="bg-black text-[#a855f7] px-2 py-0.5 rounded-md font-black text-xs text-white">
                                    ★ 4.8
                                </span>
                            </div>
                            <div>
                                <span class="text-3xl">🪐</span>
                                <h4 class="text-base font-black text-white font-comic leading-tight mt-1 drop-shadow-[2px_2px_0px_#000]">Kosmos: Menembus Alam Semesta</h4>
                            </div>
                        </div>
                        <div class="p-5 space-y-1 text-xs font-bold text-black/80">
                            <p>Penulis: <span class="text-black font-black">Prof. Farhan Dirgantara</span></p>
                            <p>Lokasi: <span class="text-black font-black">Rak SN-04</span></p>
                        </div>
                    </div>
                    <div class="p-4 border-t-[2.5px] border-black bg-[#faf6ee] flex items-center justify-between">
                        <span class="text-xs font-black text-black bg-[#8ce934] px-2.5 py-1 rounded-lg border-2 border-black">
                            Tersedia (4 Eks)
                        </span>
                        <a href="{{ route('login') }}" class="text-xs font-black text-black hover:text-[#7c3aed] flex items-center gap-1 uppercase">
                            Pinjam ➔
                        </a>
                    </div>
                </div>

                <!-- Buku 3: Komik & Manga Populer -->
                <div class="rounded-3xl bg-white border-[3.5px] border-black shadow-[6px_6px_0px_#000] overflow-hidden flex flex-col justify-between comic-btn-hover">
                    <div>
                        <div class="h-48 bg-[#ff914d] p-5 flex flex-col justify-between border-b-[3.5px] border-black relative">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-1 rounded-lg text-[10px] font-black uppercase bg-white text-black border-2 border-black shadow-[2px_2px_0px_#000]">
                                    Komik & Manga
                                </span>
                                <span class="bg-black text-[#ff914d] px-2 py-0.5 rounded-md font-black text-xs text-white">
                                    ★ 5.0
                                </span>
                            </div>
                            <div>
                                <span class="text-3xl">🎨</span>
                                <h4 class="text-base font-black text-black font-comic leading-tight mt-1">Petualangan Ninja Legendaris</h4>
                            </div>
                        </div>
                        <div class="p-5 space-y-1 text-xs font-bold text-black/80">
                            <p>Penulis: <span class="text-black font-black">Studio Komik Nusantara</span></p>
                            <p>Lokasi: <span class="text-black font-black">Rak KM-02</span></p>
                        </div>
                    </div>
                    <div class="p-4 border-t-[2.5px] border-black bg-[#faf6ee] flex items-center justify-between">
                        <span class="text-xs font-black text-white bg-[#ff5757] px-2.5 py-1 rounded-lg border-2 border-black">
                            Dipinjam Habis
                        </span>
                        <a href="{{ route('login') }}" class="text-xs font-black text-black hover:text-[#7c3aed] flex items-center gap-1 uppercase">
                            Reservasi ➔
                        </a>
                    </div>
                </div>

                <!-- Buku 4: Psikologi & Pengembangan Diri -->
                <div class="rounded-3xl bg-white border-[3.5px] border-black shadow-[6px_6px_0px_#000] overflow-hidden flex flex-col justify-between comic-btn-hover">
                    <div>
                        <div class="h-48 bg-[#8ce934] p-5 flex flex-col justify-between border-b-[3.5px] border-black relative">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-1 rounded-lg text-[10px] font-black uppercase bg-white text-black border-2 border-black shadow-[2px_2px_0px_#000]">
                                    Psikologi
                                </span>
                                <span class="bg-black text-[#8ce934] px-2 py-0.5 rounded-md font-black text-xs text-white">
                                    ★ 4.9
                                </span>
                            </div>
                            <div>
                                <span class="text-3xl">🧠</span>
                                <h4 class="text-base font-black text-black font-comic leading-tight mt-1">Fokus Mendalam di Era Distraksi</h4>
                            </div>
                        </div>
                        <div class="p-5 space-y-1 text-xs font-bold text-black/80">
                            <p>Penulis: <span class="text-black font-black">Calvin Alamsyah, M.Psi</span></p>
                            <p>Lokasi: <span class="text-black font-black">Rak PS-03</span></p>
                        </div>
                    </div>
                    <div class="p-4 border-t-[2.5px] border-black bg-[#faf6ee] flex items-center justify-between">
                        <span class="text-xs font-black text-black bg-[#8ce934] px-2.5 py-1 rounded-lg border-2 border-black">
                            Tersedia (12 Eks)
                        </span>
                        <a href="{{ route('login') }}" class="text-xs font-black text-black hover:text-[#7c3aed] flex items-center gap-1 uppercase">
                            Pinjam ➔
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ================= TENTANG KAMI ================= -->
    <section id="tentang" class="py-20 md:py-28 relative border-t-[3.5px] border-black bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-6 space-y-6">
                    <span class="text-xs uppercase tracking-widest font-black text-black bg-[#ffde59] px-4 py-1.5 rounded-xl border-[2.5px] border-black shadow-[3px_3px_0px_#000]">
                        TENTANG LIBRAZ
                    </span>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-comic font-black text-black tracking-tight">
                        Membangun Generasi Baru Pembaca yang Keren & Berwawasan!
                    </h2>
                    <p class="text-black/80 font-bold text-base leading-relaxed">
                        Libraz hadir untuk meruntuhkan stereotip bahwa perpustakaan itu kaku dan membosankan. Kami menghadirkan sistem perpustakaan modern dengan nuansa komik yang menyenangkan, alur serba digital, dan kemudahan akses bagi semua kalangan.
                    </p>

                    <div class="space-y-4 pt-2">
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-[#faf6ee] border-[3px] border-black shadow-[4px_4px_0px_#000]">
                            <div class="w-10 h-10 rounded-xl bg-[#8ce934] border-[2px] border-black flex items-center justify-center shrink-0 font-black text-xl">
                                🎯
                            </div>
                            <div>
                                <h4 class="text-base font-black text-black uppercase">Visi Kami</h4>
                                <p class="text-sm font-bold text-black/70 mt-1">Menciptakan budaya literasi yang asik, interaktif, dan mudah diakses tanpa sekat kartu fisik.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-[#faf6ee] border-[3px] border-black shadow-[4px_4px_0px_#000]">
                            <div class="w-10 h-10 rounded-xl bg-[#facc15] border-[2px] border-black flex items-center justify-center shrink-0 font-black text-xl">
                                ⚡
                            </div>
                            <div>
                                <h4 class="text-base font-black text-black uppercase">Misi Kami</h4>
                                <p class="text-sm font-bold text-black/70 mt-1">Digitalisasi total inventaris buku, sistem bebas denda yang adil, serta memberdayakan pustakawan sekolah & kampus.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-4">
                            <div class="p-6 rounded-3xl bg-[#cb6ce6] border-[3.5px] border-black shadow-[6px_6px_0px_#000]">
                                <div class="text-4xl font-black text-white font-grotesk drop-shadow-[2px_2px_0px_#000]">100%</div>
                                <h5 class="text-sm font-black text-white uppercase mt-1 drop-shadow-[1px_1px_0px_#000]">Digital & Paperless</h5>
                                <p class="text-xs font-bold text-white/90 mt-1">Nol pemborosan kertas kartu pinjam!</p>
                            </div>
                            <div class="p-6 rounded-3xl bg-[#facc15] border-[3.5px] border-black shadow-[6px_6px_0px_#000]">
                                <div class="text-4xl font-black text-black font-grotesk">24/7</div>
                                <h5 class="text-sm font-black text-black uppercase mt-1">Akses Portal Online</h5>
                                <p class="text-xs font-bold text-black/80 mt-1">Cek katalog kapan saja dari gadgetmu.</p>
                            </div>
                        </div>
                        <div class="space-y-4 pt-6">
                            <div class="p-6 rounded-3xl bg-[#ff914d] border-[3.5px] border-black shadow-[6px_6px_0px_#000]">
                                <div class="text-4xl font-black text-black font-grotesk">50+</div>
                                <h5 class="text-sm font-black text-black uppercase mt-1">Kategori Buku</h5>
                                <p class="text-xs font-bold text-black/80 mt-1">Komik, sains, IT, novel, dan pelajaran.</p>
                            </div>
                            <div class="p-6 rounded-3xl bg-[#8ce934] border-[3.5px] border-black shadow-[6px_6px_0px_#000]">
                                <div class="text-4xl font-black text-black font-grotesk">INSTAN</div>
                                <h5 class="text-sm font-black text-black uppercase mt-1">Tanpa Antre</h5>
                                <p class="text-xs font-bold text-black/80 mt-1">Scan QR langsung jalan!</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= TESTIMONI PENGGUNA ================= -->
    <section id="testimoni" class="py-20 md:py-28 relative border-t-[3.5px] border-black bg-[#faf6ee]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <span class="text-xs uppercase tracking-widest font-black text-black bg-[#8ce934] px-4 py-1.5 rounded-xl border-[2.5px] border-black shadow-[3px_3px_0px_#000]">
                    KATA MEREKA
                </span>
                <h2 class="text-3xl sm:text-4xl font-comic font-black text-black tracking-tight">
                    Disukai Siswa, Mahasiswa, & Pustakawan
                </h2>
                <p class="text-black/80 font-bold text-sm">Pengalaman langsung mereka yang sudah memakai Libraz.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">

                <!-- Testimoni 1 -->
                <div class="p-7 rounded-3xl bg-white border-[3.5px] border-black shadow-[6px_6px_0px_#000] flex flex-col justify-between comic-btn-hover">
                    <div class="space-y-3">
                        <div class="text-xl">★★★★★</div>
                        <p class="text-sm font-bold text-black leading-relaxed">
                            "Sebelum ada Libraz, saya sering lupa tanggal kembali buku dan kena denda. Notifikasi H-2 dan fitur scan QR-nya benar-benar menyelamatkan!"
                        </p>
                    </div>
                    <div class="pt-5 mt-5 border-t-[2.5px] border-black flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-[#facc15] border-[2px] border-black flex items-center justify-center font-black text-sm">
                            DH
                        </div>
                        <div>
                            <h4 class="text-sm font-black text-black">Dimas Haryanto</h4>
                            <p class="text-xs font-bold text-black/60">Mahasiswa Ilmu Komputer</p>
                        </div>
                    </div>
                </div>

                <!-- Testimoni 2 -->
                <div class="p-7 rounded-3xl bg-[#ffde59] border-[3.5px] border-black shadow-[6px_6px_0px_#000] flex flex-col justify-between comic-btn-hover">
                    <div class="space-y-3">
                        <div class="text-xl">★★★★★</div>
                        <p class="text-sm font-bold text-black leading-relaxed">
                            "Pekerjaan inventaris buku jadi 10x lebih gampang. Tidak ada lagi buku hilang tanpa data jelas. Semua sirkulasi tercatat rapi di dashboard."
                        </p>
                    </div>
                    <div class="pt-5 mt-5 border-t-[2.5px] border-black flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-white border-[2px] border-black flex items-center justify-center font-black text-sm">
                            SR
                        </div>
                        <div>
                            <h4 class="text-sm font-black text-black">Siti Rahmawati, S.Ptk</h4>
                            <p class="text-xs font-bold text-black/70">Kepala Bagian Sirkulasi</p>
                        </div>
                    </div>
                </div>

                <!-- Testimoni 3 -->
                <div class="p-7 rounded-3xl bg-white border-[3.5px] border-black shadow-[6px_6px_0px_#000] flex flex-col justify-between comic-btn-hover">
                    <div class="space-y-3">
                        <div class="text-xl">★★★★★</div>
                        <p class="text-sm font-bold text-black leading-relaxed">
                            "Desain komiknya seru banget dan gak ngebosenin! Cari komik dan buku pelajaran jadi lebih semangat tiap hari di sekolah."
                        </p>
                    </div>
                    <div class="pt-5 mt-5 border-t-[2.5px] border-black flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-[#8ce934] border-[2px] border-black flex items-center justify-center font-black text-sm">
                            AN
                        </div>
                        <div>
                            <h4 class="text-sm font-black text-black">Alya Nadira</h4>
                            <p class="text-xs font-bold text-black/60">Pelajar & Pembaca Komik</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= TANYA JAWAB (FAQ) ================= -->
    <section id="faq" class="py-20 md:py-28 relative border-t-[3.5px] border-black bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center space-y-3 mb-14">
                <span class="text-xs uppercase tracking-widest font-black text-black bg-[#ffde59] px-4 py-1.5 rounded-xl border-[2.5px] border-black shadow-[3px_3px_0px_#000]">
                    BANTUAN & FAQ
                </span>
                <h2 class="text-3xl sm:text-4xl font-comic font-black text-black tracking-tight">
                    Pertanyaan yang Sering Diajukan
                </h2>
                <p class="text-black/80 font-bold text-sm">Jawaban cepat seputar keanggotaan dan peminjaman buku di Libraz.</p>
            </div>

            <!-- Accordion List Comic Style -->
            <div class="space-y-4" id="faq-accordion">

                <!-- FAQ 1 -->
                <div class="faq-item rounded-2xl bg-[#faf6ee] border-[3px] border-black shadow-[4px_4px_0px_#000] overflow-hidden">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 focus:outline-none" aria-expanded="false">
                        <span class="text-base font-black text-black">Bagaimana cara meminjam buku menggunakan aplikasi Libraz?</span>
                        <div class="w-8 h-8 rounded-lg bg-white border-2 border-black flex items-center justify-center shrink-0 faq-icon transition-transform duration-200">
                            <span class="material-symbols-outlined text-black font-black">keyboard_arrow_down</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-6">
                        <p class="text-sm font-bold text-black/80 pb-5 leading-relaxed">
                            Cukup masuk ke akun Libraz Anda, pilih buku yang diinginkan dari katalog, lalu tekan tombol "Pinjam". Saat berada di perpustakaan, arahkan kamera ke barcode/QR buku fisik untuk konfirmasi peminjaman seketika tanpa antre!
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="faq-item rounded-2xl bg-[#faf6ee] border-[3px] border-black shadow-[4px_4px_0px_#000] overflow-hidden">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 focus:outline-none" aria-expanded="false">
                        <span class="text-base font-black text-black">Berapa biaya pendaftaran keanggotaan di Libraz?</span>
                        <div class="w-8 h-8 rounded-lg bg-white border-2 border-black flex items-center justify-center shrink-0 faq-icon transition-transform duration-200">
                            <span class="material-symbols-outlined text-black font-black">keyboard_arrow_down</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-6">
                        <p class="text-sm font-bold text-black/80 pb-5 leading-relaxed">
                            Pendaftaran dan keanggotaan Libraz 100% gratis! Semua anggota langsung dapat meminjam koleksi buku dan komik sesuai kuota aktif tanpa dipungut biaya apa pun.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="faq-item rounded-2xl bg-[#faf6ee] border-[3px] border-black shadow-[4px_4px_0px_#000] overflow-hidden">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 focus:outline-none" aria-expanded="false">
                        <span class="text-base font-black text-black">Berapa batas waktu peminjaman dan bagaimana perpanjangannya?</span>
                        <div class="w-8 h-8 rounded-lg bg-white border-2 border-black flex items-center justify-center shrink-0 faq-icon transition-transform duration-200">
                            <span class="material-symbols-outlined text-black font-black">keyboard_arrow_down</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-6">
                        <p class="text-sm font-bold text-black/80 pb-5 leading-relaxed">
                            Masa pinjam standar adalah 7 hari. Anda bisa memperpanjang pinjaman secara mandiri lewat tombol perpanjang di dashboard sebelum tanggal jatuh tempo tiba.
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="faq-item rounded-2xl bg-[#faf6ee] border-[3px] border-black shadow-[4px_4px_0px_#000] overflow-hidden">
                    <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between gap-4 focus:outline-none" aria-expanded="false">
                        <span class="text-base font-black text-black">Apakah Libraz dapat dibuka langsung dari browser HP?</span>
                        <div class="w-8 h-8 rounded-lg bg-white border-2 border-black flex items-center justify-center shrink-0 faq-icon transition-transform duration-200">
                            <span class="material-symbols-outlined text-black font-black">keyboard_arrow_down</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-6">
                        <p class="text-sm font-bold text-black/80 pb-5 leading-relaxed">
                            Pasti bisa! Tampilan Libraz dioptimasi secara responsif untuk semua layar ponsel, tablet, maupun komputer tanpa perlu install aplikasi berat.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= BANNER PENUTUP (CALL TO ACTION) DENGAN SATU TOMBOL SAJA ================= -->
    <section class="py-20 relative overflow-hidden bg-[#faf6ee] border-t-[3.5px] border-black">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-3xl p-8 sm:p-14 border-[4px] border-black bg-[#ffde59] text-center shadow-[10px_10px_0px_#000] relative">
                
                <div class="space-y-6 max-w-2xl mx-auto">
                    <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-xl text-xs font-black uppercase text-black bg-white border-2 border-black shadow-[3px_3px_0px_#000]">
                        🚀 MULAI SEKARANG JUGA
                    </span>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-comic font-black text-black tracking-tight leading-tight">
                        Siap Membaca Buku & Komik Favoritmu?
                    </h2>
                    <p class="text-black font-bold text-sm sm:text-base leading-relaxed">
                        Masuk ke akun Libraz sekarang, temukan buku idamanmu, dan rasakan kemudahan perpustakaan masa kini!
                    </p>

                    <!-- SATU TOMBOL SAJA (PENUTUP) -->
                    <div class="pt-4 flex justify-center">
                        <a href="{{ route('login') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-12 py-5 rounded-2xl text-lg font-black text-white bg-[#5f15e8] hover:bg-[#7c3aed] border-[3.5px] border-black shadow-[6px_6px_0px_#000] comic-btn-hover uppercase tracking-wider">
                            <span class="material-symbols-outlined text-[26px]">login</span>
                            <span>Masuk ke Akun Libraz</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= FOOTER ================= -->
    <footer class="border-t-[3.5px] border-black bg-white py-14 text-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-8 mb-12">
                
                <!-- Col 1: Brand Info -->
                <div class="col-span-2 space-y-4">
                    <a href="{{ url('/') }}" class="flex items-center gap-2.5">
                        <span class="font-grotesk font-black text-2xl tracking-wider text-black leading-none">LIBRAZ!</span>
                    </a>
                    <p class="text-black/80 font-bold text-xs sm:text-sm leading-relaxed max-w-sm">
                        Platform perpustakaan digital bergaya komik modern. Memudahkan sirkulasi buku, katalog cerdas, dan menumbuhkan minat baca generasi muda.
                    </p>
                </div>

                <!-- Col 2: Pintasan Utama -->
                <div class="space-y-3">
                    <h5 class="text-xs font-black uppercase tracking-wider text-black font-grotesk">Pintasan</h5>
                    <ul class="space-y-2 text-xs font-bold text-black/80">
                        <li><a href="{{ route('login') }}" class="hover:text-[#7c3aed] transition">Masuk ke Akun</a></li>
                        <li><a href="{{ route('katalog') }}" class="hover:text-[#7c3aed] transition">Katalog Koleksi</a></li>
                        <li><a href="{{ route('statistik') }}" class="hover:text-[#7c3aed] transition">Statistik Membaca</a></li>
                    </ul>
                </div>

                <!-- Col 3: Fitur & Informasi -->
                <div class="space-y-3">
                    <h5 class="text-xs font-black uppercase tracking-wider text-black font-grotesk">Informasi</h5>
                    <ul class="space-y-2 text-xs font-bold text-black/80">
                        <li><a href="#fitur" class="hover:text-[#7c3aed] transition">Fitur Unggulan</a></li>
                        <li><a href="#katalog" class="hover:text-[#7c3aed] transition">Koleksi Terpopuler</a></li>
                        <li><a href="#tentang" class="hover:text-[#7c3aed] transition">Tentang Libraz</a></li>
                        <li><a href="#faq" class="hover:text-[#7c3aed] transition">FAQ</a></li>
                    </ul>
                </div>

                <!-- Col 4: Kontak & Lokasi -->
                <div class="space-y-3">
                    <h5 class="text-xs font-black uppercase tracking-wider text-black font-grotesk">Hubungi Kami</h5>
                    <ul class="space-y-2 text-xs font-bold text-black/80">
                        <li>bantuan@libraz.sch.id</li>
                        <li>+62 (021) 8892-1200</li>
                        <li>Gedung Perpustakaan Pusat</li>
                    </ul>
                </div>

            </div>

            <!-- Bottom Copyright -->
            <div class="pt-8 border-t-[2.5px] border-black flex flex-col sm:flex-row items-center justify-between text-xs font-black text-black gap-4">
                <p>&copy; 2026 LIBRAZ. Seluruh hak cipta dilindungi undang-undang.</p>
                <div class="flex items-center gap-6">
                    <a href="#" class="hover:underline">Kebijakan Privasi</a>
                    <a href="#" class="hover:underline">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- ================= INTERACTIVE JAVASCRIPT ================= -->
    <script>
        // Lucide Icons init
        lucide.createIcons();

        // Mobile Menu Toggle Logic
        const mobileToggleBtn = document.getElementById('mobile-toggle-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        if (mobileToggleBtn && mobileMenu) {
            mobileToggleBtn.addEventListener('click', () => {
                const isOpen = !mobileMenu.classList.contains('hidden');
                if (isOpen) {
                    mobileMenu.classList.add('hidden');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                    mobileToggleBtn.setAttribute('aria-expanded', 'false');
                } else {
                    mobileMenu.classList.remove('hidden');
                    hamburgerIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                    mobileToggleBtn.setAttribute('aria-expanded', 'true');
                }
            });

            document.querySelectorAll('.mobile-nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                    mobileToggleBtn.setAttribute('aria-expanded', 'false');
                });
            });
        }

        // Accordion FAQ Logic
        const faqToggles = document.querySelectorAll('.faq-toggle');
        faqToggles.forEach(toggle => {
            toggle.addEventListener('click', () => {
                const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
                const content = toggle.nextElementSibling;
                const icon = toggle.querySelector('.faq-icon');

                faqToggles.forEach(otherToggle => {
                    if (otherToggle !== toggle) {
                        otherToggle.setAttribute('aria-expanded', 'false');
                        otherToggle.nextElementSibling.style.maxHeight = null;
                        const otherIcon = otherToggle.querySelector('.faq-icon');
                        if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
                    }
                });

                if (isExpanded) {
                    toggle.setAttribute('aria-expanded', 'false');
                    content.style.maxHeight = null;
                    if (icon) icon.style.transform = 'rotate(0deg)';
                } else {
                    toggle.setAttribute('aria-expanded', 'true');
                    content.style.maxHeight = content.scrollHeight + 'px';
                    if (icon) icon.style.transform = 'rotate(180deg)';
                }
            });
        });
    </script>
</body>
</html>
