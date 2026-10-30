<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Libraz — Perpustakaan Digital Terpadu & Cerdas</title>

    <!-- Google Fonts: Plus Jakarta Sans & Space Grotesk -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>

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
    </style>

    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Softened Neutral Palette with Gentle Purple, White, and Slate Black -->
    <style>
    :root {
      --color-on-primary-fixed: 34 26 82;
      --color-on-primary-fixed-variant: 82 66 186;
      --color-surface-container-highest: 228 228 235;
      --color-on-error: 255 255 255;
      --color-on-error-container: 147 0 10;
      --color-surface-container: 241 241 246;
      --color-surface-container-high: 235 235 241;
      --color-on-tertiary-fixed: 64 0 15;
      --color-on-secondary-fixed: 0 33 18;
      --color-secondary-fixed: 167 243 208;
      --color-on-tertiary: 255 255 255;
      --color-on-surface: 26 25 32;
      --color-surface-variant: 232 231 238;
      --color-surface-container-low: 246 246 249;
      --color-on-primary-container: 224 219 255;
      --color-on-surface-variant: 85 85 98;
      --color-background: 250 250 252;
      --color-inverse-primary: 209 202 247;
      --color-inverse-on-surface: 245 245 248;
      --color-tertiary-container: 172 0 54;
      --color-error-container: 255 218 214;
      --color-primary: 99 84 212;
      --color-on-secondary-container: 15 118 84;
      --color-surface-tint: 108 92 222;
      --color-secondary-fixed-dim: 52 211 153;
      --color-secondary: 22 138 98;
      --color-surface-dim: 224 223 230;
      --color-tertiary-fixed-dim: 255 178 184;
      --color-tertiary-fixed: 255 218 219;
      --color-on-background: 26 25 32;
      --color-secondary-container: 209 250 229;
      --color-tertiary: 128 0 38;
      --color-inverse-surface: 44 43 49;
      --color-primary-fixed-dim: 209 202 247;
      --color-primary-fixed: 238 235 252;
      --color-on-secondary: 255 255 255;
      --color-error: 186 26 26;
      --color-surface-container-lowest: 255 255 255;
      --color-primary-container: 114 96 220;
      --color-surface: 250 250 252;
      --color-outline: 128 126 142;
      --color-surface-bright: 255 255 255;
      --color-on-secondary-fixed-variant: 6 95 70;
      --color-on-primary: 255 255 255;
      --color-on-tertiary-fixed-variant: 145 0 44;
      --color-outline-variant: 218 217 227;
      --color-on-tertiary-container: 255 183 188;
    }
    html.dark {
      --color-surface-container-highest: 54 54 66;
      --color-on-error: 255 255 255;
      --color-surface-container: 34 34 42;
      --color-surface-container-high: 42 42 52;
      --color-on-surface: 242 242 247;
      --color-surface-variant: 34 34 42;
      --color-surface-container-low: 28 28 36;
      --color-on-surface-variant: 178 178 194;
      --color-background: 24 24 30;
      --color-primary: 140 128 245;
      --color-surface-tint: 114 96 220;
      --color-secondary: 20 184 130;
      --color-on-background: 242 242 247;
      --color-secondary-container: 19 78 74;
      --color-on-secondary: 255 255 255;
      --color-error: 218 55 60;
      --color-surface-container-lowest: 20 20 25;
      --color-primary-container: 78 68 178;
      --color-surface: 24 24 30;
      --color-outline: 64 64 78;
      --color-on-primary: 255 255 255;
      --color-outline-variant: 44 44 56;
    }
    </style>

    <script id="tailwind-config">
    tailwind.config = {
        "darkMode": "class",
        "theme": {
            "extend": {
                "colors": {
                    "primary": "rgb(var(--color-primary) / <alpha-value>)",
                    "primary-container": "rgb(var(--color-primary-container) / <alpha-value>)",
                    "primary-fixed": "rgb(var(--color-primary-fixed) / <alpha-value>)",
                    "secondary": "rgb(var(--color-secondary) / <alpha-value>)",
                    "secondary-container": "rgb(var(--color-secondary-container) / <alpha-value>)",
                    "background": "rgb(var(--color-background) / <alpha-value>)",
                    "surface": "rgb(var(--color-surface) / <alpha-value>)",
                    "surface-container": "rgb(var(--color-surface-container) / <alpha-value>)",
                    "surface-container-low": "rgb(var(--color-surface-container-low) / <alpha-value>)",
                    "surface-container-high": "rgb(var(--color-surface-container-high) / <alpha-value>)",
                    "surface-container-highest": "rgb(var(--color-surface-container-highest) / <alpha-value>)",
                    "surface-container-lowest": "rgb(var(--color-surface-container-lowest) / <alpha-value>)",
                    "on-surface": "rgb(var(--color-on-surface) / <alpha-value>)",
                    "on-surface-variant": "rgb(var(--color-on-surface-variant) / <alpha-value>)",
                    "outline": "rgb(var(--color-outline) / <alpha-value>)",
                    "outline-variant": "rgb(var(--color-outline-variant) / <alpha-value>)",
                    "on-primary": "rgb(var(--color-on-primary) / <alpha-value>)",
                    "on-primary-container": "rgb(var(--color-on-primary-container) / <alpha-value>)"
                },
                "fontFamily": {
                    "sans": ["'Plus Jakarta Sans'", "sans-serif"],
                    "heading": ["'Plus Jakarta Sans'", "sans-serif"],
                    "mono": ["'Space Grotesk'", "sans-serif"]
                }
            }
        }
    };
    </script>

    <script>
      if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) || localStorage.theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.documentElement.classList.add('dark');
      } else {
        document.documentElement.classList.remove('dark');
      }
    </script>
</head>
<body class="bg-background text-on-surface font-sans antialiased selection:bg-primary/20 selection:text-primary min-h-screen relative flex flex-col overflow-x-hidden">

    <!-- Ambient Glowing Soft Orbs (Eye-friendly subtle gradients) -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="absolute -top-[15%] -left-[10%] w-[55%] h-[55%] rounded-full bg-primary/10 blur-[130px] animate-pulse" style="animation-duration: 9s;"></div>
        <div class="absolute top-[35%] -right-[10%] w-[45%] h-[55%] rounded-full bg-secondary/10 blur-[120px] animate-pulse" style="animation-duration: 12s; animation-delay: 2s;"></div>
        <div class="absolute -bottom-[15%] left-[25%] w-[50%] h-[45%] rounded-full bg-primary/8 blur-[140px] animate-pulse" style="animation-duration: 11s; animation-delay: 4s;"></div>
    </div>

    <!-- ================= TOP NAVBAR ================= -->
    <header class="sticky top-0 z-50 w-full pt-safe bg-surface/85 dark:bg-background/85 backdrop-blur-xl border-b border-surface-container-high transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-18 flex items-center justify-between gap-4 py-3">
            
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="flex items-center gap-3 group focus:outline-none shrink-0">
                <img alt="Libraz Logo" class="h-9 w-auto object-contain transition-transform group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAz2hoVQ9wOeungd-4ubStxt3uW2O2agaLbBXWfGvi50WoxUohQpS1yMGEOWVn3E1FfRDlQjUNIjc8U7kCnkRxZRKb_FmsWrxzUds9I4q7uzTH1WwhU3gP9Ixf3B82RgmnN0hKWT1MbmwIFykWAzRz7Rk0zLiqbGMIAh8vPkB5TkkU3q-_iAdQkfqN0k__yeu90O4L1BBAF2jgxjXZziX8XqXajMJjFWTDTlpqIgIs7jbXrN5InJK2I"/>
                <div class="flex flex-col">
                    <span class="font-heading font-extrabold text-xl sm:text-2xl tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-on-surface via-primary to-primary">
                        LIBRAZ
                    </span>
                    <span class="text-[9.5px] font-mono font-bold tracking-[0.2em] text-on-surface-variant uppercase -mt-0.5">
                        DIGITAL LIBRARY
                    </span>
                </div>
            </a>

            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center gap-1 font-medium text-sm text-on-surface-variant">
                <a href="#beranda" class="px-3.5 py-2 rounded-xl text-primary bg-primary/10 font-semibold transition-all flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">home</span>
                    <span>Beranda</span>
                </a>
                <a href="#fitur" class="px-3.5 py-2 rounded-xl hover:text-primary hover:bg-surface-container transition-all flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">auto_awesome</span>
                    <span>Fitur</span>
                </a>
                <a href="#koleksi" class="px-3.5 py-2 rounded-xl hover:text-primary hover:bg-surface-container transition-all flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">menu_book</span>
                    <span>Koleksi</span>
                </a>
                <a href="#rating" class="px-3.5 py-2 rounded-xl hover:text-primary hover:bg-surface-container transition-all flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span>Rating</span>
                </a>
                <a href="#tentang-kami" class="px-3.5 py-2 rounded-xl hover:text-primary hover:bg-surface-container transition-all flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">info</span>
                    <span>Tentang Kami</span>
                </a>
                <a href="#faq" class="px-3.5 py-2 rounded-xl hover:text-primary hover:bg-surface-container transition-all flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">help</span>
                    <span>FAQ</span>
                </a>
            </nav>

            <!-- User Auth & Quick Actions -->
            <div class="hidden sm:flex items-center gap-3">
                <!-- Theme toggle button -->
                <button id="themeToggleBtn" aria-label="Ganti Tema" class="w-10 h-10 rounded-xl bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-primary flex items-center justify-center transition-colors">
                    <span class="material-symbols-outlined text-[20px] dark:hidden">dark_mode</span>
                    <span class="material-symbols-outlined text-[20px] hidden dark:inline">light_mode</span>
                </button>

                <!-- Solid Primary Purple CTA Button: Login / Daftar -->
                <a href="{{ route('login') }}" class="inline-flex items-center justify-center gap-2 px-6 py-2.5 rounded-xl font-bold text-sm text-white bg-primary hover:bg-primary-container shadow-md shadow-primary/25 hover:shadow-lg hover:shadow-primary/30 transition-all active:scale-[0.98]">
                    <span class="material-symbols-outlined text-[18px]">login</span>
                    <span>Login / Daftar</span>
                </a>
            </div>

            <!-- Mobile Hamburger Toggle -->
            <button id="mobile-toggle-btn" class="md:hidden p-2.5 rounded-xl bg-surface-container text-on-surface hover:text-primary focus:outline-none" aria-label="Buka Menu">
                <span class="material-symbols-outlined text-[24px]">menu</span>
            </button>
        </div>

        <!-- Mobile Drawer Menu -->
        <div id="mobile-menu" class="hidden md:hidden border-t border-surface-container-high bg-surface/95 dark:bg-background/95 backdrop-blur-xl px-5 pt-4 pb-6 space-y-3">
            <div class="flex flex-col space-y-2 font-medium text-sm text-on-surface">
                <a href="#beranda" class="py-2.5 px-3 rounded-lg text-primary bg-primary/10 font-semibold flex items-center gap-2">
                    <span class="material-symbols-outlined text-[20px]">home</span>
                    <span>Beranda</span>
                </a>
                <a href="#fitur" class="py-2.5 px-3 rounded-lg hover:bg-surface-container flex items-center gap-2">
                    <span class="material-symbols-outlined text-[20px] text-primary">auto_awesome</span>
                    <span>Fitur</span>
                </a>
                <a href="#koleksi" class="py-2.5 px-3 rounded-lg hover:bg-surface-container flex items-center gap-2">
                    <span class="material-symbols-outlined text-[20px] text-primary">menu_book</span>
                    <span>Koleksi</span>
                </a>
                <a href="#rating" class="py-2.5 px-3 rounded-lg hover:bg-surface-container flex items-center gap-2">
                    <span class="material-symbols-outlined text-[20px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span>Rating</span>
                </a>
                <a href="#tentang-kami" class="py-2.5 px-3 rounded-lg hover:bg-surface-container flex items-center gap-2">
                    <span class="material-symbols-outlined text-[20px] text-primary">info</span>
                    <span>Tentang Kami</span>
                </a>
                <a href="#faq" class="py-2.5 px-3 rounded-lg hover:bg-surface-container flex items-center gap-2">
                    <span class="material-symbols-outlined text-[20px] text-primary">help</span>
                    <span>FAQ</span>
                </a>
            </div>
            <div class="pt-3 border-t border-surface-container-high flex gap-2">
                <a href="{{ route('login') }}" class="flex-1 text-center py-2.5 rounded-xl text-sm font-bold text-white bg-primary hover:bg-primary-container shadow-md transition-all">
                    Login / Daftar
                </a>
                <a href="{{ route('katalog') }}" class="flex-1 text-center py-2.5 rounded-xl text-sm font-semibold border border-surface-container-highest bg-surface-container text-on-surface">
                    Buka Katalog
                </a>
            </div>
        </div>
    </header>

    <!-- ================= HERO & INTERACTIVE USER DASHBOARD PREVIEW ================= -->
    <main class="flex-1 relative z-10">
        <section id="beranda" class="relative pt-8 pb-16 md:pt-14 md:pb-24 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-12 gap-10 lg:gap-8 items-center">
                    
                    <!-- ================= LEFT HERO: VALUE PROP & STATS ================= -->
                    <div class="lg:col-span-6 space-y-6 text-center lg:text-left">
                        
                        <!-- Soft Purple Badge -->
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-bold tracking-wide">
                            <span class="w-2 h-2 rounded-full bg-primary animate-ping"></span>
                            <span>PLATFORM PERPUSTAKAAN DIGITAL TERPADU</span>
                        </div>

                        <!-- Main Heading with Elegant Typography -->
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-on-surface leading-[1.18]">
                            Akses Ribuan Koleksi Buku &amp; E-Book Sekolah <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-primary-container to-secondary">Tanpa Antre</span>
                        </h1>

                        <!-- Subtitle -->
                        <p class="text-base sm:text-lg text-on-surface-variant font-normal leading-relaxed max-w-xl mx-auto lg:mx-0">
                            Temukan literatur kurikulum merdeka, komik animasi, teknik, dan sains terkini. Dilengkapi peminjaman mandiri QR kilat, pembacaan e-book resmi, dan sinkronisasi riwayat sirkulasi secara langsung.
                        </p>

                        <!-- CTA Buttons -->
                        <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3.5">
                            <a href="{{ route('katalog') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-2xl font-bold text-sm sm:text-base text-white bg-primary hover:bg-primary-container shadow-md shadow-primary/20 hover:shadow-lg hover:shadow-primary/30 transition-all active:scale-[0.98]">
                                <span class="material-symbols-outlined text-[20px]">menu_book</span>
                                <span>Jelajahi Katalog Buku</span>
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </a>
                            <a href="{{ route('akun') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-2xl font-semibold text-sm sm:text-base text-on-surface bg-surface-container-lowest dark:bg-surface-container border border-surface-container-highest hover:bg-surface-container hover:border-primary/40 shadow-sm transition-all">
                                <span class="material-symbols-outlined text-[20px] text-primary">account_circle</span>
                                <span>Buka Dashboard Siswa</span>
                            </a>
                        </div>

                        <!-- 4 Real-time Dynamic Stats Badges -->
                        <div class="pt-6 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-xl mx-auto lg:mx-0">
                            <div class="p-3.5 rounded-2xl bg-surface-container-lowest/80 dark:bg-black/30 backdrop-blur-md border border-surface-container-highest dark:border-white/10 shadow-sm flex flex-col justify-between">
                                <div class="text-xl sm:text-2xl font-extrabold text-on-surface" id="stat-books-count">
                                    {{ number_format($stats['total_books'] ?? 14820) }}
                                </div>
                                <div class="text-[11px] font-bold text-on-surface-variant mt-0.5">Eksemplar Buku</div>
                            </div>
                            <div class="p-3.5 rounded-2xl bg-surface-container-lowest/80 dark:bg-black/30 backdrop-blur-md border border-surface-container-highest dark:border-white/10 shadow-sm flex flex-col justify-between">
                                <div class="text-xl sm:text-2xl font-extrabold text-primary" id="stat-titles-count">
                                    {{ number_format($stats['total_titles'] ?? 120) }}+
                                </div>
                                <div class="text-[11px] font-bold text-on-surface-variant mt-0.5">Judul Terdaftar</div>
                            </div>
                            <div class="p-3.5 rounded-2xl bg-surface-container-lowest/80 dark:bg-black/30 backdrop-blur-md border border-surface-container-highest dark:border-white/10 shadow-sm flex flex-col justify-between">
                                <div class="text-xl sm:text-2xl font-extrabold text-secondary" id="stat-members-count">
                                    {{ number_format($stats['total_members'] ?? 1250) }}
                                </div>
                                <div class="text-[11px] font-bold text-on-surface-variant mt-0.5">Siswa Aktif</div>
                            </div>
                            <div class="p-3.5 rounded-2xl bg-surface-container-lowest/80 dark:bg-black/30 backdrop-blur-md border border-surface-container-highest dark:border-white/10 shadow-sm flex flex-col justify-between">
                                <div class="text-xl sm:text-2xl font-extrabold text-on-surface">100%</div>
                                <div class="text-[11px] font-bold text-on-surface-variant mt-0.5">Bebas Antre</div>
                            </div>
                        </div>

                    </div>

                    <!-- ================= RIGHT HERO: ENLARGED SEAMLESS 3D ILLUSTRATION ================= -->
                    <div class="lg:col-span-6 relative flex items-center justify-center self-center w-full bg-transparent shadow-none border-none p-0 overflow-visible">
                        
                        <!-- Soft Ambient Lilac/Purple Radial Glow (Matching Design Mockup) -->
                        <div class="absolute w-[85%] h-[85%] max-w-[540px] max-h-[540px] rounded-full bg-gradient-to-tr from-primary/20 via-purple-300/15 dark:from-primary/30 dark:via-purple-600/15 to-transparent blur-3xl -z-10 pointer-events-none transform -translate-y-2"></div>

                        <!-- Purely Transparent Isolated 3D Illustration Container (No Boxes, No Shadows, No Borders) -->
                        <div class="relative w-full max-w-2xl lg:w-[115%] xl:w-[125%] flex items-center justify-center bg-transparent shadow-none border-none">
                            <img 
                                src="{{ asset('images/hero-students-3d.png') }}?v=5.0" 
                                alt="Ilustrasi 3D Siswa SMA Membaca Digital Libraz" 
                                class="w-full h-auto max-h-[660px] lg:max-h-[740px] object-contain select-none pointer-events-none bg-transparent shadow-none border-none transform lg:scale-105 xl:scale-110 transition-transform duration-500"
                                loading="eager"
                            />
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- ================= FITUR UNGGULAN ================= -->
        <section id="fitur" class="py-20 relative bg-surface-container-lowest/60 dark:bg-black/20 border-t border-b border-surface-container-high">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
                    <span class="inline-block px-3.5 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-bold tracking-wide">
                        FITUR CERDAS &amp; LENGKAP
                    </span>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-on-surface tracking-tight">
                        Kemudahan Membaca dengan Teknologi Terkini
                    </h2>
                    <p class="text-sm sm:text-base text-on-surface-variant font-medium">
                        Dirancang khusus untuk mendukung kegiatan belajar mengajar siswa dan pustakawan secara efektif, cepat, dan transparan.
                    </p>
                </div>

                <!-- 6 Fitur Cards with Neutral Softened Style -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <div class="p-6 rounded-2xl bg-white/70 dark:bg-black/30 backdrop-blur-md border border-surface-container-highest dark:border-white/10 shadow-sm hover:shadow-md hover:border-primary/40 transition-all group">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-4 group-hover:scale-105 transition-transform">
                            <span class="material-symbols-outlined text-[26px]">search</span>
                        </div>
                        <h3 class="font-bold text-lg text-on-surface mb-2">Pencarian &amp; Filter Kilat</h3>
                        <p class="text-sm text-on-surface-variant leading-relaxed">
                            Cari buku pelajaran kurikulum merdeka, novel, sains, atau pengarang favorit dengan filter kategori yang akurat dalam hitungan milidetik.
                        </p>
                    </div>

                    <div class="p-6 rounded-2xl bg-white/70 dark:bg-black/30 backdrop-blur-md border border-surface-container-highest dark:border-white/10 shadow-sm hover:shadow-md hover:border-primary/40 transition-all group">
                        <div class="w-12 h-12 rounded-xl bg-secondary/15 text-secondary flex items-center justify-center mb-4 group-hover:scale-105 transition-transform">
                            <span class="material-symbols-outlined text-[26px]">qr_code_scanner</span>
                        </div>
                        <h3 class="font-bold text-lg text-on-surface mb-2">Peminjaman Mandiri QR</h3>
                        <p class="text-sm text-on-surface-variant leading-relaxed">
                            Cukup scan barcode atau kode QR buku menggunakan kamera gadget. Transaksi peminjaman terverifikasi seketika tanpa antre di meja pustakawan.
                        </p>
                    </div>

                    <div class="p-6 rounded-2xl bg-white/70 dark:bg-black/30 backdrop-blur-md border border-surface-container-highest dark:border-white/10 shadow-sm hover:shadow-md hover:border-primary/40 transition-all group">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-4 group-hover:scale-105 transition-transform">
                            <span class="material-symbols-outlined text-[26px]">picture_as_pdf</span>
                        </div>
                        <h3 class="font-bold text-lg text-on-surface mb-2">Pembaca E-Book Terintegrasi</h3>
                        <p class="text-sm text-on-surface-variant leading-relaxed">
                            Buku elektronik resmi Kemdikbud tersedia dalam format PDF beresolusi tinggi yang dapat langsung dibaca di laptop atau smartphone.
                        </p>
                    </div>

                    <div class="p-6 rounded-2xl bg-white/70 dark:bg-black/30 backdrop-blur-md border border-surface-container-highest dark:border-white/10 shadow-sm hover:shadow-md hover:border-primary/40 transition-all group">
                        <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center mb-4 group-hover:scale-105 transition-transform">
                            <span class="material-symbols-outlined text-[26px]">notifications_active</span>
                        </div>
                        <h3 class="font-bold text-lg text-on-surface mb-2">Pengingat Bebas Denda</h3>
                        <p class="text-sm text-on-surface-variant leading-relaxed">
                            Sistem notifikasi pengingat otomatis sebelum masa peminjaman habis, memberi opsi perpanjangan waktu peminjaman dengan 1 klik.
                        </p>
                    </div>

                    <div class="p-6 rounded-2xl bg-white/70 dark:bg-black/30 backdrop-blur-md border border-surface-container-highest dark:border-white/10 shadow-sm hover:shadow-md hover:border-primary/40 transition-all group">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-4 group-hover:scale-105 transition-transform">
                            <span class="material-symbols-outlined text-[26px]">military_tech</span>
                        </div>
                        <h3 class="font-bold text-lg text-on-surface mb-2">Gamifikasi &amp; Streak Membaca</h3>
                        <p class="text-sm text-on-surface-variant leading-relaxed">
                            Dapatkan XP, capai level pembaca tertinggi, dan jaga rekor harian (reading streak) untuk memotivasi kebiasaan literasi positif setiap hari.
                        </p>
                    </div>

                    <div class="p-6 rounded-2xl bg-white/70 dark:bg-black/30 backdrop-blur-md border border-surface-container-highest dark:border-white/10 shadow-sm hover:shadow-md hover:border-primary/40 transition-all group">
                        <div class="w-12 h-12 rounded-xl bg-secondary/15 text-secondary flex items-center justify-center mb-4 group-hover:scale-105 transition-transform">
                            <span class="material-symbols-outlined text-[26px]">insights</span>
                        </div>
                        <h3 class="font-bold text-lg text-on-surface mb-2">Statistik Sirkulasi Terbuka</h3>
                        <p class="text-sm text-on-surface-variant leading-relaxed">
                            Pantau pergerakan buku terpopuler, rasio keterbacaan, dan analisis minat baca sekolah secara menyeluruh dan akurat.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- ================= KOLEKSI BUKU DINAMIS ================= -->
        <section id="koleksi" class="py-20 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                    <div>
                        <span class="inline-block px-3.5 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-bold tracking-wide">
                            KOLEKSI UNGGULAN
                        </span>
                        <h2 class="text-2xl sm:text-4xl font-extrabold text-on-surface tracking-tight mt-2">
                            Koleksi Populer &amp; Pilihan Siswa
                        </h2>
                        <p class="text-sm sm:text-base text-on-surface-variant font-medium mt-1">
                            Buku fisik di rak perpustakaan dan buku elektronik digital siap pinjam.
                        </p>
                    </div>

                    <a href="{{ route('katalog') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl font-bold text-sm text-on-surface bg-surface-container-lowest dark:bg-surface-container border border-surface-container-highest hover:border-primary/40 shadow-sm transition-all">
                        <span>Jelajahi Seluruh Katalog</span>
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>

                <!-- Grid Kartu Buku (Matching Katalog Style) -->
                <div id="dynamic-popular-books-grid" class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @forelse($popularBooks as $book)
                    <article class="flex flex-col bg-white/70 dark:bg-black/30 backdrop-blur-xl rounded-[2rem] border border-surface-container-highest dark:border-white/10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_12px_40px_rgba(100,50,255,0.08)] transition-all p-4 gap-3 group hover:-translate-y-1">
                        
                        <!-- Thumbnail Cover -->
                        <div class="relative w-full h-52 rounded-xl overflow-hidden bg-surface-container shrink-0 border border-surface-container-high shadow-xs">
                            @if($book->cover_image_url)
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="{{ $book->title }}" src="{{ asset($book->cover_image_url) }}"/>
                            @else
                            <div class="w-full h-full flex items-center justify-center text-on-surface-variant">
                                <span class="material-symbols-outlined text-[36px]">book</span>
                            </div>
                            @endif
                            <div class="absolute top-2 left-2 bg-surface-container-lowest/90 backdrop-blur-md px-2 py-0.5 rounded-lg text-xs font-bold text-on-surface flex items-center gap-1 shadow-xs">
                                <span class="material-symbols-outlined text-[14px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span>
                                <span>{{ number_format($book->rating > 0 ? $book->rating : 4.5, 1) }}</span>
                            </div>
                        </div>

                        <!-- Info Details -->
                        <div class="flex flex-col flex-1 justify-between min-w-0">
                            <div>
                                <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-md bg-surface-container text-on-surface-variant uppercase">
                                    {{ $book->category }}
                                </span>
                                <h3 class="font-bold text-sm sm:text-base text-on-surface mt-1.5 leading-snug line-clamp-2" title="{{ $book->title }}">
                                    {{ $book->title }}
                                </h3>
                                <p class="text-xs text-on-surface-variant mt-1 truncate">
                                    {{ $book->author }}
                                </p>
                            </div>

                            <!-- Footer Card Action -->
                            <div class="pt-3 border-t border-surface-container-high flex items-center justify-between mt-3">
                                <span class="text-[11px] font-bold text-secondary flex items-center gap-1">
                                    <span class="w-2 h-2 rounded-full bg-secondary"></span>
                                    <span>Stok: {{ $book->stock }}</span>
                                </span>
                                <a href="{{ route('katalog') }}" class="text-xs font-bold text-primary hover:underline flex items-center gap-0.5">
                                    <span>Detail</span>
                                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                                </a>
                            </div>
                        </div>

                    </article>
                    @empty
                    <div class="col-span-4 p-8 text-center text-on-surface-variant bg-surface-container-low rounded-2xl">
                        Koleksi buku sedang disinkronkan dari database perpustakaan.
                    </div>
                    @endforelse
                </div>

            </div>
        </section>

        <!-- ================= TESTIMONI & ULASAN REAL SISWA (RATING REAL DATA) ================= -->
        <section id="rating" class="py-20 bg-surface-container-lowest/50 dark:bg-black/20 border-t border-surface-container-high relative">
            <div id="tentang-kami" class="absolute -top-20 left-0 w-full h-1 pointer-events-none"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                    <div>
                        <span class="inline-block px-3.5 py-1 rounded-full bg-secondary/15 text-secondary text-xs font-bold tracking-wide">
                            KOMUNITAS MEMBACA &amp; RATING SISWA
                        </span>
                        <h2 class="text-2xl sm:text-4xl font-extrabold text-on-surface tracking-tight mt-2">
                            Apa Kata Siswa Pengguna Libraz?
                        </h2>
                        <p class="text-sm sm:text-base text-on-surface-variant font-medium mt-1">
                            Ulasan dan penilaian jujur langsung dari pengalaman literasi para siswa di SMKN 1 Ciomas.
                        </p>
                    </div>

                    <!-- Real Overall Rating Badge -->
                    <div class="flex items-center gap-3.5 p-4 rounded-2xl bg-white/80 dark:bg-black/40 backdrop-blur-md border border-surface-container-highest dark:border-white/10 shadow-sm shrink-0">
                        <div class="w-12 h-12 rounded-xl bg-amber-500/15 text-amber-500 flex items-center justify-center font-extrabold">
                            <span class="material-symbols-outlined text-[28px]" style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <div>
                            <div class="flex items-baseline gap-1.5">
                                <span class="text-2xl font-black text-on-surface" id="rating-summary-score">{{ number_format($ratingStats['average'] ?? 4.8, 1) }}</span>
                                <span class="text-xs font-semibold text-on-surface-variant">/ 5.0</span>
                            </div>
                            <div class="text-[11px] text-on-surface-variant font-medium">
                                Dari <strong class="text-on-surface" id="rating-summary-total">{{ number_format($ratingStats['total_reviews'] ?? 128) }}</strong> ulasan siswa terverifikasi
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Grid Review Dinamis (Real Reviews from DB) -->
                <div id="dynamic-reviews-grid" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse($realReviews as $review)
                    <div class="p-6 rounded-2xl bg-white/70 dark:bg-black/30 backdrop-blur-md border border-surface-container-highest dark:border-white/10 shadow-sm hover:shadow-md hover:border-primary/30 transition-all flex flex-col justify-between group">
                        <div class="space-y-3">
                            <!-- Star Rating (Real Data 1-5) -->
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-1 text-amber-500">
                                    @for($i = 1; $i <= 5; $i++)
                                        <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' {{ $i <= ($review->rating ?? 5) ? '1' : '0' }};">star</span>
                                    @endfor
                                </div>
                                <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-md bg-primary/10 text-primary">
                                    {{ number_format($review->rating ?? 5, 1) }} / 5.0
                                </span>
                            </div>

                            <!-- Real Review Comment -->
                            <p class="text-sm text-on-surface-variant italic leading-relaxed">
                                "{{ $review->comment }}"
                            </p>

                            @if($review->book)
                            <div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-surface-container text-[11px] font-medium text-on-surface truncate max-w-full">
                                <span class="material-symbols-outlined text-[14px] text-primary shrink-0">book</span>
                                <span class="truncate">{{ $review->book->title }}</span>
                            </div>
                            @endif
                        </div>

                        <!-- Student Profile Footer -->
                        <div class="flex items-center gap-3 pt-4 border-t border-surface-container-high mt-4">
                            <img class="w-10 h-10 rounded-full object-cover shrink-0 border border-primary/20 shadow-xs" 
                                 src="https://ui-avatars.com/api/?name={{ urlencode($review->user->name ?? 'Siswa') }}&background=6354d4&color=fff" 
                                 alt="{{ $review->user->name ?? 'Siswa' }}"/>
                            <div class="min-w-0 flex-1">
                                <h4 class="text-xs sm:text-sm font-bold text-on-surface truncate">{{ $review->user->name ?? 'Siswa Libraz' }}</h4>
                                <p class="text-[11px] text-on-surface-variant truncate">
                                    {{ $review->user->role && !in_array(strtolower($review->user->role), ['admin', 'pustakawan', 'petugas']) ? $review->user->role : 'Siswa SMKN 1 Ciomas' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-3 p-8 text-center text-on-surface-variant bg-surface-container-low rounded-2xl">
                        Belum ada ulasan siswa yang ditampilkan. Jadilah siswa pertama yang memberikan ulasan di katalog buku!
                    </div>
                    @endforelse
                </div>

            </div>
        </section>

            </div>
        </section>

        <!-- ================= FAQ SECTION ================= -->
        <section id="faq" class="py-20 relative">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center space-y-2 mb-12">
                    <span class="inline-block px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold tracking-wide">
                        BANTUAN &amp; FAQ
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-on-surface tracking-tight">
                        Pertanyaan yang Sering Diajukan
                    </h2>
                </div>

                <div class="space-y-4">
                    <details class="group p-5 rounded-2xl bg-white/70 dark:bg-black/30 border border-surface-container-highest dark:border-white/10 shadow-xs transition-all">
                        <summary class="font-bold text-sm sm:text-base text-on-surface cursor-pointer flex items-center justify-between list-none">
                            <span>Bagaimana cara meminjam buku fisik secara mandiri?</span>
                            <span class="material-symbols-outlined text-[20px] text-on-surface-variant group-open:rotate-180 transition-transform">expand_more</span>
                        </summary>
                        <p class="text-sm text-on-surface-variant mt-3 leading-relaxed">
                            Buka menu <a href="{{ route('scanner') }}" class="text-primary font-semibold underline">Scanner</a> di Libraz, lalu arahkan kamera ponselmu ke barcode yang tertempel di bagian belakang buku atau sampul depan. Konfirmasi peminjaman akan otomatis masuk ke data akunmu.
                        </p>
                    </details>

                    <details class="group p-5 rounded-2xl bg-white/70 dark:bg-black/30 border border-surface-container-highest dark:border-white/10 shadow-xs transition-all">
                        <summary class="font-bold text-sm sm:text-base text-on-surface cursor-pointer flex items-center justify-between list-none">
                            <span>Berapa lama batas waktu peminjaman buku?</span>
                            <span class="material-symbols-outlined text-[20px] text-on-surface-variant group-open:rotate-180 transition-transform">expand_more</span>
                        </summary>
                        <p class="text-sm text-on-surface-variant mt-3 leading-relaxed">
                            Batas waktu peminjaman standar adalah 14 hari kalender. Kamu dapat memperpanjang masa pinjam sebanyak 1 kali (tambahan 7 hari) langsung melalui halaman sirkulasi akun sebelum tanggal jatuh tempo tiba.
                        </p>
                    </details>

                    <details class="group p-5 rounded-2xl bg-white/70 dark:bg-black/30 border border-surface-container-highest dark:border-white/10 shadow-xs transition-all">
                        <summary class="font-bold text-sm sm:text-base text-on-surface cursor-pointer flex items-center justify-between list-none">
                            <span>Apakah membaca E-Book PDF memerlukan kuota khusus?</span>
                            <span class="material-symbols-outlined text-[20px] text-on-surface-variant group-open:rotate-180 transition-transform">expand_more</span>
                        </summary>
                        <p class="text-sm text-on-surface-variant mt-3 leading-relaxed">
                            E-Book di Libraz dapat diakses melalui jaringan lokal Wi-Fi perpustakaan secara gratis tanpa memotong kuota internet pribadi, serta dapat disimpan offline untuk dibaca sewaktu-waktu.
                        </p>
                    </details>
                </div>

            </div>
        </section>

        <!-- ================= BOTTOM CTA BANNER ================= -->
        <section class="py-14 bg-gradient-to-r from-primary/15 via-primary-container/10 to-secondary/15 border-t border-surface-container-high">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-5">
                <h2 class="text-2xl sm:text-4xl font-extrabold text-on-surface tracking-tight">
                    Mulai Petualangan Membacamu di Libraz Hari Ini
                </h2>
                <p class="text-sm sm:text-base text-on-surface-variant font-medium max-w-xl mx-auto">
                    Bergabung dengan ribuan siswa lainnya untuk pengalaman literasi digital sekolah yang seru, mudah, dan bebas hambatan.
                </p>
                <div class="pt-2 flex flex-wrap items-center justify-center gap-3">
                    <a href="{{ route('katalog') }}" class="px-7 py-3 rounded-xl font-bold text-sm text-white bg-primary hover:bg-primary-container shadow-md transition-all">
                        Jelajahi Katalog Buku
                    </a>
                    <a href="{{ route('login') }}" class="px-6 py-3 rounded-xl font-semibold text-sm text-on-surface bg-surface-container-lowest dark:bg-surface-container border border-surface-container-highest hover:bg-surface-container transition-all">
                        Masuk ke Akun Siswa
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- ================= FOOTER ================= -->
    <footer class="bg-surface-container-lowest dark:bg-black/40 border-t border-surface-container-high py-10 relative z-10 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-on-surface-variant">
            <div class="flex items-center gap-2">
                <img alt="BiblioZ Logo" class="h-6 w-auto" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAz2hoVQ9wOeungd-4ubStxt3uW2O2agaLbBXWfGvi50WoxUohQpS1yMGEOWVn3E1FfRDlQjUNIjc8U7kCnkRxZRKb_FmsWrxzUds9I4q7uzTH1WwhU3gP9Ixf3B82RgmnN0hKWT1MbmwIFykWAzRz7Rk0zLiqbGMIAh8vPkB5TkkU3q-_iAdQkfqN0k__yeu90O4L1BBAF2jgxjXZziX8XqXajMJjFWTDTlpqIgIs7jbXrN5InJK2I"/>
                <span class="font-bold text-on-surface">Libraz &copy; {{ date('Y') }}</span>
                <span>• Perpustakaan Digital Sekolah Modern</span>
            </div>
            <div class="flex flex-wrap items-center gap-4 font-medium">
                <a href="#beranda" class="hover:text-primary transition-colors">Beranda</a>
                <a href="#fitur" class="hover:text-primary transition-colors">Fitur</a>
                <a href="#koleksi" class="hover:text-primary transition-colors">Koleksi</a>
                <a href="#rating" class="hover:text-primary transition-colors">Rating</a>
                <a href="#tentang-kami" class="hover:text-primary transition-colors">Tentang Kami</a>
                <a href="#faq" class="hover:text-primary transition-colors">FAQ</a>
                <a href="{{ route('katalog') }}" class="hover:text-primary transition-colors">Katalog</a>
            </div>
        </div>
    </footer>

    <!-- ================= CLIENT-SIDE DYNAMIC DATA FETCHING SCRIPT ================= -->
    <script>
    // Theme toggle handling
    const themeBtn = document.getElementById('themeToggleBtn');
    if (themeBtn) {
        themeBtn.addEventListener('click', () => {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.theme = 'light';
            } else {
                document.documentElement.classList.add('dark');
                localStorage.theme = 'dark';
            }
        });
    }

    // Mobile menu toggle handling
    const mobileBtn = document.getElementById('mobile-toggle-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileBtn && mobileMenu) {
        mobileBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    /**
     * Dynamic Data Fetching Function
     * Asynchronously fetches real user data, active borrowings, and stats
     * from /api/landing-data with Bearer token support.
     */
    async function refreshLandingData() {
        const refreshIcon = document.getElementById('refreshIcon');
        if (refreshIcon) {
            refreshIcon.classList.add('animate-spin');
        }

        try {
            const token = localStorage.getItem('auth_token') || sessionStorage.getItem('auth_token');
            const headers = {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            };
            if (token) {
                headers['Authorization'] = 'Bearer ' + token;
            }

            const response = await fetch('{{ route("api.landing.data") }}', {
                method: 'GET',
                headers: headers
            });

            if (!response.ok) {
                throw new Error('Gagal memuat data dari server');
            }

            const data = await response.json();
            if (data.success) {
                hydrateLandingUI(data);
            }
        } catch (error) {
            console.warn('Dynamic fetch fallback active:', error.message);
        } finally {
            if (refreshIcon) {
                setTimeout(() => {
                    refreshIcon.classList.remove('animate-spin');
                }, 500);
            }
        }
    }

    /**
     * Hydrates DOM elements with live dynamic user data
     */
    function hydrateLandingUI(data) {
        if (!data) return;

        // 1. User Profile data
        if (data.user) {
            const u = data.user;
            
            const liveName = document.getElementById('live-user-name');
            if (liveName) liveName.textContent = u.name;

            const liveNis = document.getElementById('live-user-nis');
            if (liveNis) liveNis.textContent = u.nis;

            const liveSchool = document.getElementById('live-user-school');
            if (liveSchool && u.school_name) liveSchool.textContent = u.school_name;

            const liveRole = document.getElementById('live-user-role-badge');
            if (liveRole) liveRole.textContent = u.role || 'Siswa Aktif';

            const liveAvatar = document.getElementById('live-user-avatar');
            if (liveAvatar && u.avatar_url) liveAvatar.src = u.avatar_url;

            const liveLevel = document.getElementById('live-user-level');
            if (liveLevel) liveLevel.textContent = u.level || 1;

            const liveLevelName = document.getElementById('live-user-levelname');
            if (liveLevelName) liveLevelName.textContent = u.level_name || 'Pembaca Aktif';

            const liveStreak = document.getElementById('live-user-streak');
            if (liveStreak) liveStreak.textContent = u.current_streak || 0;

            const liveXpText = document.getElementById('live-user-xp-text');
            if (liveXpText) liveXpText.textContent = `${u.xp || 0} / ${u.max_xp || 100} XP`;

            const liveXpBar = document.getElementById('live-user-xp-bar');
            if (liveXpBar) {
                const percent = Math.min(100, Math.max(5, Math.round(((u.xp || 0) / (u.max_xp || 100)) * 100)));
                liveXpBar.style.width = percent + '%';
            }


        }

        // 2. Active Loans data
        if (data.active_loans) {
            const countEl = document.getElementById('live-loans-count');
            if (countEl) countEl.textContent = data.active_loans.length;

            const listEl = document.getElementById('live-loans-list');
            if (listEl) {
                if (data.active_loans.length === 0) {
                    listEl.innerHTML = `
                        <div class="p-4 rounded-2xl bg-surface-container-lowest dark:bg-black/30 border border-surface-container-high dark:border-white/5 text-center space-y-1.5">
                            <span class="material-symbols-outlined text-[28px] text-secondary">check_circle</span>
                            <p class="text-xs font-bold text-on-surface">Tidak ada pinjaman buku yang tertunggak</p>
                            <p class="text-[11px] text-on-surface-variant">Pilih buku favoritmu di katalog untuk mulai membaca hari ini!</p>
                        </div>
                    `;
                } else {
                    listEl.innerHTML = data.active_loans.map(loan => `
                        <div class="p-3.5 rounded-2xl bg-surface-container-lowest dark:bg-black/30 border border-surface-container-high dark:border-white/5 shadow-sm flex items-center gap-3.5 hover:border-primary/30 transition-all">
                            <div class="w-12 h-16 rounded-xl overflow-hidden bg-surface-container shrink-0 border border-surface-container-high shadow-xs">
                                ${loan.cover_image_url 
                                    ? `<img src="${loan.cover_image_url}" alt="${loan.title}" class="w-full h-full object-cover"/>` 
                                    : `<div class="w-full h-full flex items-center justify-center text-on-surface-variant"><span class="material-symbols-outlined text-[20px]">book</span></div>`
                                }
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="text-xs sm:text-sm font-bold text-on-surface truncate">${loan.title}</h4>
                                <p class="text-[11px] text-on-surface-variant truncate mt-0.5">
                                    ${loan.category} • Jatuh Tempo: <span class="font-semibold text-on-surface">${loan.due_date || '14 Hari'}</span>
                                </p>
                                <div class="mt-1.5 flex items-center gap-2">
                                    <span class="text-[10px] font-bold px-2 py-0.5 rounded-md bg-secondary/10 text-secondary border border-secondary/20">
                                        Sedang Dipinjam 🟢
                                    </span>
                                    <span class="text-[10px] font-medium text-on-surface-variant">
                                        ${loan.days_remaining !== undefined && loan.days_remaining <= 2 ? 'Segera Kembalikan' : 'Bebas Denda'}
                                    </span>
                                </div>
                            </div>
                        </div>
                    `).join('');
                }
            }
        }

        // 3. Stats Data Counter
        if (data.stats) {
            const booksCount = document.getElementById('stat-books-count');
            if (booksCount && data.stats.total_books) booksCount.textContent = Number(data.stats.total_books).toLocaleString('id-ID');

            const titlesCount = document.getElementById('stat-titles-count');
            if (titlesCount && data.stats.total_titles) titlesCount.textContent = Number(data.stats.total_titles).toLocaleString('id-ID') + '+';

            const membersCount = document.getElementById('stat-members-count');
            if (membersCount && data.stats.total_members) membersCount.textContent = Number(data.stats.total_members).toLocaleString('id-ID');
        }

        // 4. Rating Summary Real Data
        if (data.rating_summary) {
            const scoreEl = document.getElementById('rating-summary-score');
            if (scoreEl && data.rating_summary.average) scoreEl.textContent = Number(data.rating_summary.average).toFixed(1);

            const totalEl = document.getElementById('rating-summary-total');
            if (totalEl && data.rating_summary.total_reviews) totalEl.textContent = Number(data.rating_summary.total_reviews).toLocaleString('id-ID');
        }

        // 5. Dynamic Real Reviews
        if (data.reviews && data.reviews.length > 0) {
            const revGrid = document.getElementById('dynamic-reviews-grid');
            if (revGrid) {
                revGrid.innerHTML = data.reviews.map(r => `
                    <div class="p-6 rounded-2xl bg-white/70 dark:bg-black/30 backdrop-blur-md border border-surface-container-highest dark:border-white/10 shadow-sm hover:shadow-md hover:border-primary/30 transition-all flex flex-col justify-between group">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-1 text-amber-500">
                                    ${[1,2,3,4,5].map(s => `
                                        <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' ${s <= r.rating ? '1' : '0'};">star</span>
                                    `).join('')}
                                </div>
                                <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-md bg-primary/10 text-primary">
                                    ${Number(r.rating || 5).toFixed(1)} / 5.0
                                </span>
                            </div>
                            <p class="text-sm text-on-surface-variant italic leading-relaxed">
                                "${r.comment || ''}"
                            </p>
                            ${r.book_title ? `
                                <div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-surface-container text-[11px] font-medium text-on-surface truncate max-w-full">
                                    <span class="material-symbols-outlined text-[14px] text-primary shrink-0">book</span>
                                    <span class="truncate">${r.book_title}</span>
                                </div>
                            ` : ''}
                        </div>
                        <div class="flex items-center gap-3 pt-4 border-t border-surface-container-high mt-4">
                            <img class="w-10 h-10 rounded-full object-cover shrink-0 border border-primary/20 shadow-xs" src="${r.user_avatar}" alt="${r.user_name}"/>
                            <div class="min-w-0 flex-1">
                                <h4 class="text-xs sm:text-sm font-bold text-on-surface truncate">${r.user_name}</h4>
                                <p class="text-[11px] text-on-surface-variant truncate">${r.user_role || 'Siswa'}</p>
                            </div>
                        </div>
                    </div>
                `).join('');
            }
        }

        // 6. Popular Books Real Rating Refresh
        if (data.popular_books && data.popular_books.length > 0) {
            const booksGrid = document.getElementById('dynamic-popular-books-grid');
            if (booksGrid) {
                booksGrid.innerHTML = data.popular_books.map(book => `
                    <article class="flex flex-col bg-white/70 dark:bg-black/30 backdrop-blur-xl rounded-[2rem] border border-surface-container-highest dark:border-white/10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_12px_40px_rgba(100,50,255,0.08)] transition-all p-4 gap-3 group hover:-translate-y-1">
                        <div class="relative w-full h-52 rounded-xl overflow-hidden bg-surface-container shrink-0 border border-surface-container-high shadow-xs">
                            ${book.cover_image_url 
                                ? `<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="${book.title}" src="${book.cover_image_url}"/>` 
                                : `<div class="w-full h-full flex items-center justify-center text-on-surface-variant"><span class="material-symbols-outlined text-[36px]">book</span></div>`
                            }
                            <div class="absolute top-2 left-2 bg-surface-container-lowest/90 backdrop-blur-md px-2 py-0.5 rounded-lg text-xs font-bold text-on-surface flex items-center gap-1 shadow-xs">
                                <span class="material-symbols-outlined text-[14px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span>
                                <span>${Number(book.rating || 4.5).toFixed(1)}</span>
                            </div>
                        </div>
                        <div class="flex flex-col flex-1 justify-between min-w-0">
                            <div>
                                <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-md bg-surface-container text-on-surface-variant uppercase">
                                    ${book.category || 'Umum'}
                                </span>
                                <h3 class="font-bold text-sm sm:text-base text-on-surface mt-1.5 leading-snug line-clamp-2" title="${book.title}">
                                    ${book.title}
                                </h3>
                                <p class="text-xs text-on-surface-variant mt-1 truncate">
                                    ${book.author || 'Kemdikbud'}
                                </p>
                            </div>
                            <div class="pt-3 border-t border-surface-container-high flex items-center justify-between mt-3">
                                <span class="text-[11px] font-bold text-secondary flex items-center gap-1">
                                    <span class="w-2 h-2 rounded-full bg-secondary"></span>
                                    <span>Stok: ${book.stock || 0}</span>
                                </span>
                                <a href="{{ route('katalog') }}" class="text-xs font-bold text-primary hover:underline flex items-center gap-0.5">
                                    <span>Detail</span>
                                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                                </a>
                            </div>
                        </div>
                    </article>
                `).join('');
            }
        }
    }

    // Automatically trigger dynamic data fetching on initial page load
    document.addEventListener('DOMContentLoaded', () => {
        refreshLandingData();
    });
    </script>
</body>
</html>
