<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta name="theme-color" content="#FAF8F5">
    <meta name="description" content="LIBRAZ! - Platform perpustakaan digital seru dan cepat bergaya modern webtoon komik. Pinjam komik, novel, buku pelajaran, dan sains tanpa antre!">
    <title>LIBRAZ! — Perpustakaan Digital Seru & Cepat</title>

    <!-- Google Fonts: Fredoka & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">

    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        warmPaper: '#FAF8F5',
                        sageGreen: '#5F8A75',
                        sageDark: '#4a6e5d',
                        mustardYellow: '#E5A93B',
                        mustardLight: '#f3bf5b',
                        punchyCoral: '#f43f5e',
                        punchyMagenta: '#d946ef',
                        comicPurple: '#7c3aed',
                        comicGreenLight: '#8ce934',
                        comicCream: '#fffbf0'
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        comic: ['"Fredoka"', '"Plus Jakarta Sans"', 'sans-serif']
                    }
                }
            }
        };
    </script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body {
            background-color: #FAF8F5;
            color: #000;
        }

        /* Retro Ben-Day Halftone Dots */
        .ben-day-dots {
            background-image: radial-gradient(rgba(0, 0, 0, 0.08) 1.5px, transparent 1.5px);
            background-size: 14px 14px;
        }

        /* Subtle Manga Speedlines on the edges */
        .edge-speedlines {
            background-image: 
                repeating-conic-gradient(
                    from 0deg at 50% 50%,
                    rgba(0, 0, 0, 0.025) 0deg 1.8deg,
                    transparent 1.8deg 8deg
                );
        }

        /* Massive Slanted 3D Comic Headline with Double Outline */
        .comic-headline-3d {
            font-family: 'Fredoka', sans-serif;
            color: #ffffff;
            -webkit-text-stroke: 3.8px #000;
            paint-order: stroke fill;
            text-shadow: 
                5px 5px 0px #000,
                -2px -2px 0px #000,  
                2px -2px 0px #000,
                -2px 2px 0px #000,
                2px 2px 0px #000;
        }

        /* Layered Purple & Coral 3D Text for "Libraz!" */
        .comic-title-libraz-glow {
            font-family: 'Fredoka', sans-serif;
            color: #d946ef;
            -webkit-text-stroke: 3.5px #000;
            paint-order: stroke fill;
            text-shadow: 
                4px 4px 0px #000,
                -2px -2px 0px #000,
                2px -2px 0px #000,
                -2px 2px 0px #000;
            display: inline-block;
            position: relative;
        }

        /* Heavy Offset Shadows & Inked Borders */
        .comic-card {
            border: 3.5px solid #000;
            box-shadow: 6px 6px 0px #000;
        }

        .comic-card-lg {
            border: 4px solid #000;
            box-shadow: 9px 9px 0px #000;
        }

        .comic-card-sm {
            border: 2.8px solid #000;
            box-shadow: 4px 4px 0px #000;
        }

        /* Button Click Physics */
        .comic-btn-hover {
            transition: transform 0.12s ease, box-shadow 0.12s ease;
        }
        .comic-btn-hover:hover {
            transform: translate(3px, 3px);
            box-shadow: 2px 2px 0px #000 !important;
        }
        .comic-btn-hover:active {
            transform: translate(6px, 6px);
            box-shadow: 0px 0px 0px #000 !important;
        }

        /* Wavy Underline SVG Accent */
        .wavy-underline {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 4'%3E%3Cpath fill='none' stroke='%23f43f5e' stroke-width='3' d='M0 3.5 Q 5 0, 10 3.5 T 20 3.5'/%3E%3C/svg%3E");
            background-repeat: repeat-x;
            background-position: bottom;
            background-size: 24px 8px;
            padding-bottom: 6px;
        }

        /* Speech Bubbles */
        .bubble-tail-bottom::after {
            content: '';
            position: absolute;
            bottom: -9px;
            left: 24px;
            width: 0;
            height: 0;
            border-left: 9px solid transparent;
            border-right: 9px solid transparent;
            border-top: 10px solid #fff;
        }
        .bubble-tail-bottom::before {
            content: '';
            position: absolute;
            bottom: -13px;
            left: 22px;
            width: 0;
            height: 0;
            border-left: 11px solid transparent;
            border-right: 11px solid transparent;
            border-top: 13px solid #000;
        }
    </style>
</head>
<body class="font-sans text-black antialiased selection:bg-[#E5A93B] selection:text-black min-h-screen relative overflow-x-hidden">

    <!-- Ambient Manga Speedlines & Halftone Texture -->
    <div class="edge-speedlines fixed inset-0 pointer-events-none z-0"></div>
    <div class="ben-day-dots fixed inset-0 pointer-events-none z-0"></div>

    <!-- Hand-drawn Star & Sparkle Accents (Floating Background) -->
    <div class="fixed top-24 left-10 text-2xl font-black text-amber-500 pointer-events-none select-none z-0 animate-bounce">✦</div>
    <div class="fixed top-1/3 right-8 text-3xl font-black text-rose-500 pointer-events-none select-none z-0">★</div>
    <div class="fixed bottom-28 left-16 text-2xl font-black text-purple-600 pointer-events-none select-none z-0">✦</div>

    <!-- ================= TOP NAVBAR ================= -->
    <header class="sticky top-0 z-50 bg-[#FAF8F5]/95 backdrop-blur-md border-b-[3.5px] border-black shadow-[0_4px_0px_#000]">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between" aria-label="Navigasi Utama">
            
            <!-- Brand Logo with Cute Hand-Drawn Open Book -->
            <a href="{{ url('/') }}" class="flex items-center gap-3 group focus:outline-none">
                <div class="relative flex-shrink-0">
                    <svg class="w-11 h-11 filter drop-shadow-[2.5px_2.5px_0px_#000] transition-transform group-hover:-rotate-6" viewBox="0 0 50 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Left Page (Sage Green) -->
                        <path d="M25 10 C16 7 7 8 3 10 L3 34 C7 32 16 31 25 33 Z" fill="#5F8A75" stroke="#000" stroke-width="3" stroke-linejoin="round"/>
                        <path d="M6 14 C12 12 18 12 25 13 L25 33 C18 31 12 31 6 33 Z" fill="#7ba691" stroke="#000" stroke-width="2.5"/>
                        <!-- Right Page (Mustard Yellow) -->
                        <path d="M25 10 C34 7 43 8 47 10 L47 34 C43 32 34 31 25 33 Z" fill="#E5A93B" stroke="#000" stroke-width="3" stroke-linejoin="round"/>
                        <path d="M44 14 C38 12 32 12 25 13 L25 33 C32 31 38 31 44 33 Z" fill="#f3bf5b" stroke="#000" stroke-width="2.5"/>
                        <!-- Center Spine -->
                        <line x1="25" y1="9" x2="25" y2="34" stroke="#000" stroke-width="3"/>
                        <!-- Hand-drawn sparkles -->
                        <circle cx="21" cy="6" r="1.5" fill="#f43f5e"/>
                        <circle cx="29" cy="6" r="1.5" fill="#f43f5e"/>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="font-comic font-black text-3xl tracking-tight text-black leading-none flex items-center gap-1">
                        LIBRAZ<span class="text-[#f43f5e] font-black text-4xl leading-none">!</span>
                    </span>
                    <span class="text-[9.5px] font-comic font-bold tracking-[0.25em] text-black/70 uppercase leading-tight mt-0.5">
                        DIGITAL LIBRARY
                    </span>
                </div>
            </a>

            <!-- Navigation Links -->
            <div class="hidden md:flex items-center gap-7 font-comic font-bold text-sm tracking-wide text-black uppercase">
                <a href="#fitur" class="hover:text-[#5F8A75] hover:-translate-y-0.5 transition-all">FITUR</a>
                <a href="#katalog" class="hover:text-[#5F8A75] hover:-translate-y-0.5 transition-all">KOLEKSI BUKU</a>
                <a href="#tentang" class="hover:text-[#5F8A75] hover:-translate-y-0.5 transition-all">TENTANG KAMI</a>
                <a href="#testimoni" class="hover:text-[#5F8A75] hover:-translate-y-0.5 transition-all">ULASAN</a>
                <a href="#faq" class="hover:text-[#5F8A75] hover:-translate-y-0.5 transition-all">FAQ</a>
            </div>

            <!-- Playful Action Button: "MASUK KE LIBRAZ GO!" -->
            <div class="hidden sm:flex items-center gap-3">
                <a href="{{ route('login') }}" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-2xl font-comic font-black text-sm text-black bg-[#E5A93B] hover:bg-[#f3bf5b] border-[3px] border-black shadow-[4px_4px_0px_#000] comic-btn-hover uppercase tracking-wider">
                    <span class="material-symbols-outlined text-[20px] font-black">rocket_launch</span>
                    <span>MASUK KE LIBRAZ</span>
                    <span class="bg-black text-[#E5A93B] px-2 py-0.5 rounded-lg text-xs font-black">GO!</span>
                </a>
            </div>

            <!-- Mobile Hamburger Toggle -->
            <button id="mobile-toggle-btn" class="sm:hidden p-2 rounded-xl border-[2.8px] border-black bg-white shadow-[3px_3px_0px_#000] text-black focus:outline-none comic-btn-hover" aria-label="Buka Menu" aria-expanded="false">
                <i data-lucide="menu" id="hamburger-icon" class="w-6 h-6"></i>
                <i data-lucide="x" id="close-icon" class="w-6 h-6 hidden"></i>
            </button>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden sm:hidden border-t-[3px] border-black bg-[#FAF8F5] px-5 pt-4 pb-6">
            <div class="flex flex-col space-y-3 font-comic font-bold text-sm uppercase">
                <a href="#fitur" class="mobile-nav-link py-2 border-b-2 border-black/10">FITUR</a>
                <a href="#katalog" class="mobile-nav-link py-2 border-b-2 border-black/10">KOLEKSI BUKU</a>
                <a href="#tentang" class="mobile-nav-link py-2 border-b-2 border-black/10">TENTANG KAMI</a>
                <a href="#testimoni" class="mobile-nav-link py-2 border-b-2 border-black/10">ULASAN</a>
                <a href="#faq" class="mobile-nav-link py-2">FAQ</a>
            </div>
            <div class="mt-4 pt-4 border-t-[2.8px] border-black">
                <a href="{{ route('login') }}" class="w-full block py-3 text-center rounded-2xl font-comic font-black text-sm text-black bg-[#E5A93B] border-[2.8px] border-black shadow-[3px_3px_0px_#000]">
                    MASUK KE LIBRAZ GO!
                </a>
            </div>
        </div>
    </header>

    <!-- ================= HERO & PLAYFUL USER EXPERIENCE (NO ADMIN PANELS) ================= -->
    <section class="relative pt-10 pb-16 md:pt-14 md:pb-24 overflow-hidden z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-8 items-center">
                
                <!-- ================= LEFT HERO & TITLE AREA ================= -->
                <div class="lg:col-span-6 space-y-6 text-center lg:text-left relative">
                    
                    <!-- Tilted Bright Green Tag -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-2xl bg-[#8ce934] border-[3px] border-black shadow-[4px_4px_0px_#000] font-comic font-black text-xs text-black uppercase tracking-wider -rotate-2">
                        <span>📚</span>
                        <span>PERPUSTAKAAN DIGITAL SERU & CEPAT!</span>
                    </div>

                    <!-- Massive Slanted 3D Comic Headline with Double Outline -->
                    <div class="relative">
                        <!-- Pop-Art Sparkle Sticker (Top Right) -->
                        <div class="absolute -top-7 right-4 sm:right-10 hidden sm:block rotate-12">
                            <svg class="w-14 h-14" viewBox="0 0 60 60" fill="none">
                                <path d="M30 4 L35 22 L53 17 L39 30 L53 43 L35 38 L30 56 L25 38 L7 43 L21 30 L7 17 L25 22 Z" fill="#E5A93B" stroke="#000" stroke-width="3" stroke-linejoin="round"/>
                            </svg>
                        </div>

                        <h1 class="text-4xl sm:text-5xl lg:text-[3.5rem] font-comic font-black leading-[1.08] tracking-tight">
                            <span class="comic-headline-3d block">Baca Ribuan Buku</span>
                            <span class="comic-headline-3d block mt-1">Tanpa Antre, Semua</span>
                            <span class="comic-headline-3d block mt-1">
                                Ada di <span class="comic-title-libraz-glow wavy-underline">Libraz!</span>
                            </span>
                        </h1>
                    </div>

                    <!-- Friendly, Casual Indonesian Body Text -->
                    <p class="text-base sm:text-lg font-comic font-bold text-black/85 leading-relaxed max-w-xl mx-auto lg:mx-0">
                        Platform perpustakaan digital terpadu dengan katalog kilat, peminjaman mandiri via QR, dan sistem bebas denda. Pinjam komik, novel, buku pelajaran, dan sains cuma dalam hitungan detik!
                    </p>

                    <!-- Big Angled Yellow CTA Button -->
                    <div class="pt-2 flex justify-center lg:justify-start">
                        <a href="{{ route('login') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-8 py-4.5 rounded-3xl font-comic font-black text-base sm:text-lg text-black bg-[#E5A93B] hover:bg-[#f3bf5b] border-[3.8px] border-black shadow-[6px_6px_0px_#000] -rotate-1 comic-btn-hover uppercase tracking-wider">
                            <span class="text-2xl animate-bounce">🚀</span>
                            <span>MASUK KE LIBRAZ SEKARANG!</span>
                            <span class="bg-black text-[#E5A93B] px-2.5 py-1 rounded-xl text-xs font-black shadow-[2px_2px_0px_#E5A93B]">
                                GRATIS
                            </span>
                        </a>
                    </div>

                    <!-- Three Playful Stats Boxes with Hand-Drawn Borders (White, Yellow, Green) -->
                    <div class="pt-6 grid grid-cols-3 gap-3.5 max-w-lg mx-auto lg:mx-0">
                        <div class="comic-card-sm p-3.5 rounded-2xl bg-white -rotate-1 comic-btn-hover">
                            <div class="text-xl sm:text-2xl font-comic font-black text-black">15.000+</div>
                            <div class="text-xs font-comic font-black text-black/80 mt-0.5 uppercase">Judul Buku</div>
                        </div>
                        <div class="comic-card-sm p-3.5 rounded-2xl bg-[#E5A93B] rotate-1 comic-btn-hover">
                            <div class="text-xl sm:text-2xl font-comic font-black text-black">0 DETIK</div>
                            <div class="text-xs font-comic font-black text-black/80 mt-0.5 uppercase">Scan QR Instan</div>
                        </div>
                        <div class="comic-card-sm p-3.5 rounded-2xl bg-[#8ce934] -rotate-1 comic-btn-hover">
                            <div class="text-xl sm:text-2xl font-comic font-black text-black">100%</div>
                            <div class="text-xs font-comic font-black text-black/80 mt-0.5 uppercase">Bebas Antre</div>
                        </div>
                    </div>

                </div>

                <!-- ================= RIGHT VISUAL AREA (PLAYFUL USER EXPERIENCE - ZERO ADMIN PANELS) ================= -->
                <div class="lg:col-span-6 relative">
                    
                    <!-- Sound Effect Onomatopoeia: "BOOM!" and "KLIK!" -->
                    <div class="absolute -top-7 -left-6 z-30 hidden sm:block -rotate-12">
                        <span class="font-comic font-black text-2xl text-black drop-shadow-[2.5px_2.5px_0px_#f43f5e] tracking-wider">
                            BOOM! 💥
                        </span>
                    </div>
                    <div class="absolute -bottom-6 -right-3 z-30 hidden sm:block rotate-6">
                        <span class="font-comic font-black text-2xl text-black drop-shadow-[2.5px_2.5px_0px_#E5A93B] tracking-wider">
                            KLIK! ⚡
                        </span>
                    </div>

                    <!-- Massive Manga-Style Comic Frame: "Preview of Digital Library in Action" -->
                    <div class="comic-card-lg rounded-[2.5rem] bg-white p-5 sm:p-7 relative overflow-hidden space-y-4">
                        
                        <!-- Top Floating Speech Bubble: "GOKIL, SECEPAT ITU?! ⚡" -->
                        <div class="flex items-center justify-between">
                            <div class="relative bg-[#fff] border-[2.8px] border-black rounded-2xl px-4 py-2 shadow-[3px_3px_0px_#000] -rotate-2 bubble-tail-bottom">
                                <span class="font-comic font-black text-xs sm:text-sm text-black flex items-center gap-1.5">
                                    GOKIL, SECEPAT ITU?! ⚡
                                </span>
                            </div>
                            <!-- Thought Bubble: "SERU BANGET! 📖" -->
                            <div class="bg-[#ffe8a3] border-[2.5px] border-black rounded-full px-3.5 py-1.5 shadow-[3px_3px_0px_#000] rotate-3">
                                <span class="font-comic font-black text-xs text-black">
                                    SERU BANGET! 📖
                                </span>
                            </div>
                        </div>

                        <!-- 2D Comic Illustration of Joyful Reader with Smartphone & Floating Books -->
                        <div class="rounded-3xl bg-[#fef7ea] border-[3.2px] border-black p-5 relative overflow-hidden flex flex-col sm:flex-row items-center gap-5">
                            
                            <!-- Detailed SVG Cartoon Character: Joyful young person holding smartphone -->
                            <div class="relative w-40 h-40 flex-shrink-0">
                                <svg viewBox="0 0 170 170" class="w-full h-full" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <!-- Dynamic Manga Action Lines -->
                                    <path d="M10 40 L35 55" stroke="#000" stroke-width="2.5" stroke-linecap="round"/>
                                    <path d="M5 60 L28 68" stroke="#000" stroke-width="2.5" stroke-linecap="round"/>
                                    <path d="M140 30 L120 45" stroke="#000" stroke-width="2.5" stroke-linecap="round"/>
                                    <path d="M155 50 L130 60" stroke="#000" stroke-width="2.5" stroke-linecap="round"/>

                                    <!-- Head & Hair -->
                                    <circle cx="85" cy="55" r="28" fill="#ffe5cb" stroke="#000" stroke-width="3.5"/>
                                    <!-- Cool Modern Anime Haircut -->
                                    <path d="M56 50 C58 24 76 18 96 22 C110 25 116 38 114 50 C108 44 100 42 90 44 C80 46 74 42 68 46 C62 48 58 48 56 50 Z" fill="#1c281e" stroke="#000" stroke-width="3"/>
                                    
                                    <!-- Happy Expressive Face -->
                                    <path d="M76 52 Q82 48 88 52" stroke="#000" stroke-width="3" stroke-linecap="round"/> <!-- Eye L -->
                                    <path d="M98 52 Q104 48 110 52" stroke="#000" stroke-width="3" stroke-linecap="round"/> <!-- Eye R -->
                                    <circle cx="82" cy="56" r="3" fill="#000"/>
                                    <circle cx="104" cy="56" r="3" fill="#000"/>
                                    <circle cx="83.5" cy="54.5" r="1" fill="#fff"/>
                                    <circle cx="105.5" cy="54.5" r="1" fill="#fff"/>
                                    
                                    <!-- Wide Joyful Smile -->
                                    <path d="M84 66 Q93 75 102 66 Z" fill="#f43f5e" stroke="#000" stroke-width="3" stroke-linejoin="round"/>
                                    
                                    <!-- Cute Anime Blushing Cheeks -->
                                    <ellipse cx="74" cy="64" rx="4.5" ry="2.5" fill="#ffb4a2"/>
                                    <ellipse cx="112" cy="64" rx="4.5" ry="2.5" fill="#ffb4a2"/>

                                    <!-- Torso: Stylish Sage Green Jacket over White T-Shirt -->
                                    <path d="M80 82 L80 92 L96 92 L96 82 Z" fill="#ffe5cb" stroke="#000" stroke-width="3"/>
                                    <path d="M48 95 C58 88 78 90 88 95 C98 90 118 88 128 95 L135 165 L40 165 Z" fill="#5F8A75" stroke="#000" stroke-width="3.8" stroke-linejoin="round"/>
                                    <path d="M78 93 L88 125 L98 93 Z" fill="#ffffff" stroke="#000" stroke-width="2.5"/>

                                    <!-- Arms Holding Smartphone -->
                                    <path d="M48 105 C46 125 55 142 78 148" stroke="#000" stroke-width="8" stroke-linecap="round"/>
                                    <path d="M48 105 C46 125 55 142 78 148" stroke="#5F8A75" stroke-width="5" stroke-linecap="round"/>
                                    
                                    <path d="M128 105 C128 125 120 140 102 148" stroke="#000" stroke-width="8" stroke-linecap="round"/>
                                    <path d="M128 105 C128 125 120 140 102 148" stroke="#5F8A75" stroke-width="5" stroke-linecap="round"/>

                                    <!-- Smartphone with Glowing Screen -->
                                    <rect x="85" y="112" width="24" height="42" rx="5" transform="rotate(-10 85 112)" fill="#1e293b" stroke="#000" stroke-width="3"/>
                                    <rect x="87" y="115" width="20" height="36" rx="3" transform="rotate(-10 85 112)" fill="#38bdf8"/>
                                    
                                    <!-- Hands -->
                                    <circle cx="85" cy="138" r="6" fill="#ffe5cb" stroke="#000" stroke-width="2.5"/>
                                    <circle cx="108" cy="140" r="6" fill="#ffe5cb" stroke="#000" stroke-width="2.5"/>
                                </svg>

                                <!-- Floating Glowing Book Covers Orbiting the Phone -->
                                <div class="absolute -top-1 -right-3 w-8 h-11 rounded-lg bg-[#E5A93B] border-2 border-black shadow-[2px_2px_0px_#000] rotate-12 flex items-center justify-center text-xs">
                                    📕
                                </div>
                                <div class="absolute bottom-2 -left-3 w-8 h-11 rounded-lg bg-[#d946ef] border-2 border-black shadow-[2px_2px_0px_#000] -rotate-12 flex items-center justify-center text-xs">
                                    📘
                                </div>
                            </div>

                            <!-- User Identity Badge in Webtoon Card -->
                            <div class="space-y-2">
                                <div class="inline-block bg-[#8ce934] border-[2.2px] border-black rounded-xl px-3 py-1 shadow-[2px_2px_0px_#000]">
                                    <span class="font-comic font-black text-xs text-black uppercase">
                                        SOBAT LIBRAZ AKTIF
                                    </span>
                                </div>
                                <h3 class="font-comic font-black text-xl sm:text-2xl text-black leading-tight">
                                    Halo, Pembaca Hebat! 🌟
                                </h3>
                                <p class="font-comic font-bold text-xs sm:text-sm text-black/80">
                                    Kartu Anggota: <span class="bg-white px-2 py-0.5 rounded border border-black font-black">LIB-2026-99</span>
                                </p>
                            </div>
                        </div>

                        <!-- Stacked Overlapping Comic Panels: Friendly Digital Library App View -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 relative">
                            
                            <!-- Card 1: Reading Challenge Progress Bar -->
                            <div class="comic-card-sm p-4 rounded-2xl bg-[#FAF8F5] flex flex-col justify-between space-y-2">
                                <div class="flex items-center justify-between">
                                    <span class="font-comic font-black text-xs uppercase text-black flex items-center gap-1">
                                        🔥 Target Baca Bulan Ini
                                    </span>
                                    <span class="bg-black text-[#E5A93B] text-[10px] font-comic font-black px-1.5 py-0.5 rounded">
                                        80%
                                    </span>
                                </div>
                                <p class="text-xs font-comic font-black text-black">
                                    4 dari 5 Buku Selesai!
                                </p>
                                <div class="w-full bg-white rounded-full h-3.5 border-2 border-black overflow-hidden p-[1px]">
                                    <div class="bg-[#5F8A75] h-full rounded-full w-4/5 border-r border-black"></div>
                                </div>
                            </div>

                            <!-- Card 2: Colorful Fantasy Book Cover with "PINJAM 🟢" & "Bebas Denda!" -->
                            <div class="comic-card-sm p-3.5 rounded-2xl bg-[#FAF8F5] flex items-center gap-3">
                                <!-- Colorful Fantasy Book Cover -->
                                <div class="w-12 h-16 rounded-xl bg-gradient-to-br from-[#d946ef] to-[#f43f5e] border-2 border-black shadow-[2px_2px_0px_#000] flex flex-col justify-between p-1 text-center shrink-0">
                                    <span class="text-[8px] font-comic font-black text-white">NOVEL</span>
                                    <span class="text-base">✨</span>
                                    <span class="text-[7px] font-comic font-black text-white">#BEST</span>
                                </div>
                                <div class="min-w-0 flex-1">
                                    <h5 class="text-xs font-comic font-black text-black truncate uppercase">
                                        Misteri Negeri Awan
                                    </h5>
                                    <p class="text-[10px] font-comic font-bold text-black/60 truncate">
                                        Fantasi • Sisa 5 Hari
                                    </p>
                                    <div class="mt-1 flex items-center gap-1.5 flex-wrap">
                                        <span class="text-[9.5px] font-comic font-black bg-[#8ce934] text-black px-2 py-0.5 rounded-md border border-black">
                                            PINJAM 🟢
                                        </span>
                                        <span class="text-[9.5px] font-comic font-black bg-[#E5A93B] text-black px-2 py-0.5 rounded-md border border-black">
                                            Bebas Denda!
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Bottom Playful Full-width CTA Button inside preview -->
                        <a href="{{ route('login') }}" class="w-full flex items-center justify-center gap-2 py-3.5 px-4 rounded-2xl font-comic font-black text-sm sm:text-base text-black bg-[#E5A93B] hover:bg-[#f3bf5b] border-[3px] border-black shadow-[4px_4px_0px_#000] comic-btn-hover uppercase tracking-wider">
                            <span class="material-symbols-outlined text-[20px] font-black">menu_book</span>
                            <span>Mulai Jelajahi Perpustakaan</span>
                            <span>➔</span>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= FITUR UNGGULAN ================= -->
    <section id="fitur" class="py-20 relative border-t-[3.5px] border-black bg-white z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
                <span class="inline-block px-4 py-1.5 rounded-2xl bg-[#8ce934] border-[2.8px] border-black shadow-[3px_3px_0px_#000] font-comic font-black text-xs uppercase text-black">
                    FITUR PINTAR & SERU
                </span>
                <h2 class="text-3xl sm:text-5xl font-comic font-black text-black tracking-tight">
                    Segala Kemudahan Membaca Tanpa Hambatan!
                </h2>
                <p class="text-base font-comic font-bold text-black/80">
                    Sistem peminjaman mandiri cerdas yang santai, bersahabat, dan dirancang khusus untuk kenyamanan kamu.
                </p>
            </div>

            <!-- 6 Kartu Fitur Komik Modern -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                
                <div class="comic-card p-6 rounded-3xl bg-[#FAF8F5] comic-btn-hover flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-[#E5A93B] border-[2.5px] border-black shadow-[3px_3px_0px_#000] flex items-center justify-center text-2xl mb-4 font-black">
                            🔍
                        </div>
                        <h3 class="font-comic font-black text-lg text-black mb-2 uppercase">Pencarian Kilat & Presisi</h3>
                        <p class="font-comic font-bold text-sm text-black/85 leading-relaxed">
                            Cari judul buku, komik webtoon, materi sekolah, atau pengarang favorit dalam sekejap dengan filter kategori instan.
                        </p>
                    </div>
                </div>

                <div class="comic-card p-6 rounded-3xl bg-[#FAF8F5] comic-btn-hover flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-[#8ce934] border-[2.5px] border-black shadow-[3px_3px_0px_#000] flex items-center justify-center text-2xl mb-4 font-black">
                            📱
                        </div>
                        <h3 class="font-comic font-black text-lg text-black mb-2 uppercase">Peminjaman Mandiri QR</h3>
                        <p class="font-comic font-bold text-sm text-black/85 leading-relaxed">
                            Arahkan kamera smartphone ke kode QR buku di perpustakaan. Peminjaman terkonfirmasi otomatis tanpa antre di meja sirkulasi.
                        </p>
                    </div>
                </div>

                <div class="comic-card p-6 rounded-3xl bg-[#FAF8F5] comic-btn-hover flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-[#5F8A75] text-white border-[2.5px] border-black shadow-[3px_3px_0px_#000] flex items-center justify-center text-2xl mb-4 font-black">
                            🛡️
                        </div>
                        <h3 class="font-comic font-black text-lg text-black mb-2 uppercase">Pengingat Bebas Denda</h3>
                        <p class="font-comic font-bold text-sm text-black/85 leading-relaxed">
                            Notifikasi ramah H-2 langsung mengingatkan tanggal pengembalian sebelum jatuh tempo, memastikan kamu selalu aman dan santai.
                        </p>
                    </div>
                </div>

                <div class="comic-card p-6 rounded-3xl bg-[#FAF8F5] comic-btn-hover flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-[#d946ef] text-white border-[2.5px] border-black shadow-[3px_3px_0px_#000] flex items-center justify-center text-2xl mb-4 font-black">
                            💻
                        </div>
                        <h3 class="font-comic font-black text-lg text-black mb-2 uppercase">Sinkronisasi Lintas Gadget</h3>
                        <p class="font-comic font-bold text-sm text-black/85 leading-relaxed">
                            Buka akun dari laptop, tablet, atau smartphone. Progres membaca dan riwayat koleksi buku tersinkron otomatis secara real-time.
                        </p>
                    </div>
                </div>

                <div class="comic-card p-6 rounded-3xl bg-[#FAF8F5] comic-btn-hover flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-[#f43f5e] text-white border-[2.5px] border-black shadow-[3px_3px_0px_#000] flex items-center justify-center text-2xl mb-4 font-black">
                            💬
                        </div>
                        <h3 class="font-comic font-black text-lg text-black mb-2 uppercase">Ulasan & Rating Komunitas</h3>
                        <p class="font-comic font-bold text-sm text-black/85 leading-relaxed">
                            Dapatkan intisari rekomendasi buku terbaik dari teman-teman pembaca dan bagikan ulasan seru untuk setiap buku yang selesai dibaca.
                        </p>
                    </div>
                </div>

                <div class="comic-card p-6 rounded-3xl bg-[#FAF8F5] comic-btn-hover flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-[#E5A93B] border-[2.5px] border-black shadow-[3px_3px_0px_#000] flex items-center justify-center text-2xl mb-4 font-black">
                            📊
                        </div>
                        <h3 class="font-comic font-black text-lg text-black mb-2 uppercase">Statistik Minat Baca</h3>
                        <p class="font-comic font-bold text-sm text-black/85 leading-relaxed">
                            Pantau jumlah halaman yang selesai kamu baca per bulan dan genre terfavoritmu lewat grafik pencapaian yang memotivasi!
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= KOLEKSI BUKU ================= -->
    <section id="katalog" class="py-20 relative border-t-[3.5px] border-black bg-[#FAF8F5] z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                <div>
                    <span class="inline-block px-4 py-1.5 rounded-xl bg-[#E5A93B] border-[2.5px] border-black shadow-[3px_3px_0px_#000] font-comic font-black text-xs uppercase text-black">
                        KOLEKSI PILIHAN
                    </span>
                    <h2 class="text-3xl sm:text-5xl font-comic font-black text-black tracking-tight mt-3">
                        Koleksi Populer Minggu Ini
                    </h2>
                    <p class="font-comic font-bold text-black/80 text-sm mt-1">Cek sampel buku terpopuler dan ketersediaan stok fisik di rak perpustakaan.</p>
                </div>

                <a href="{{ route('katalog') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-2xl font-comic font-black text-sm text-black bg-white hover:bg-slate-50 border-[3px] border-black shadow-[4px_4px_0px_#000] comic-btn-hover uppercase tracking-wider">
                    <span>Jelajahi Seluruh Katalog</span>
                    <span>➔</span>
                </a>
            </div>

            <!-- Grid Kartu Sampel Buku -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Buku 1: Teknologi -->
                <div class="comic-card rounded-3xl bg-white overflow-hidden flex flex-col justify-between comic-btn-hover">
                    <div>
                        <div class="h-44 bg-[#e5eee6] p-4 flex flex-col justify-between border-b-[3px] border-black">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-0.5 rounded-lg text-[10px] font-comic font-black uppercase bg-white border-2 border-black">
                                    Teknologi
                                </span>
                                <span class="bg-black text-[#8ce934] px-2 py-0.5 rounded font-black text-xs">★ 4.9</span>
                            </div>
                            <div>
                                <span class="text-3xl">💻</span>
                                <h4 class="font-comic font-black text-sm text-black leading-snug mt-1">Mastering AI & Machine Learning</h4>
                            </div>
                        </div>
                        <div class="p-4 space-y-1 text-xs font-comic font-bold text-black/80">
                            <p>Penulis: <span class="text-black font-black">Dr. Andrew Wijaya</span></p>
                            <p>Lokasi: <span class="text-black font-black">Rak IT-01</span></p>
                        </div>
                    </div>
                    <div class="p-3.5 border-t-[2.5px] border-black bg-[#FAF8F5] flex items-center justify-between">
                        <span class="text-[11px] font-comic font-black text-black bg-[#8ce934] px-2.5 py-1 rounded-lg border-2 border-black">
                            Tersedia (8 Eks)
                        </span>
                        <a href="{{ route('login') }}" class="text-xs font-comic font-black text-[#5F8A75] hover:underline uppercase">
                            Pinjam ➔
                        </a>
                    </div>
                </div>

                <!-- Buku 2: Sains -->
                <div class="comic-card rounded-3xl bg-white overflow-hidden flex flex-col justify-between comic-btn-hover">
                    <div>
                        <div class="h-44 bg-[#fef7ea] p-4 flex flex-col justify-between border-b-[3px] border-black">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-0.5 rounded-lg text-[10px] font-comic font-black uppercase bg-white border-2 border-black">
                                    Sains
                                </span>
                                <span class="bg-black text-white px-2 py-0.5 rounded font-black text-xs">★ 4.8</span>
                            </div>
                            <div>
                                <span class="text-3xl">🪐</span>
                                <h4 class="font-comic font-black text-sm text-black leading-snug mt-1">Kosmos: Menembus Alam Semesta</h4>
                            </div>
                        </div>
                        <div class="p-4 space-y-1 text-xs font-comic font-bold text-black/80">
                            <p>Penulis: <span class="text-black font-black">Prof. Farhan Dirgantara</span></p>
                            <p>Lokasi: <span class="text-black font-black">Rak SN-04</span></p>
                        </div>
                    </div>
                    <div class="p-3.5 border-t-[2.5px] border-black bg-[#FAF8F5] flex items-center justify-between">
                        <span class="text-[11px] font-comic font-black text-black bg-[#8ce934] px-2.5 py-1 rounded-lg border-2 border-black">
                            Tersedia (4 Eks)
                        </span>
                        <a href="{{ route('login') }}" class="text-xs font-comic font-black text-[#5F8A75] hover:underline uppercase">
                            Pinjam ➔
                        </a>
                    </div>
                </div>

                <!-- Buku 3: Sastra / Komik -->
                <div class="comic-card rounded-3xl bg-white overflow-hidden flex flex-col justify-between comic-btn-hover">
                    <div>
                        <div class="h-44 bg-[#ffe8a3] p-4 flex flex-col justify-between border-b-[3px] border-black">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-0.5 rounded-lg text-[10px] font-comic font-black uppercase bg-white border-2 border-black">
                                    Komik
                                </span>
                                <span class="bg-black text-white px-2 py-0.5 rounded font-black text-xs">★ 5.0</span>
                            </div>
                            <div>
                                <span class="text-3xl">🎨</span>
                                <h4 class="font-comic font-black text-sm text-black leading-snug mt-1">Kumpulan Cerita Klasik Nusantara</h4>
                            </div>
                        </div>
                        <div class="p-4 space-y-1 text-xs font-comic font-bold text-black/80">
                            <p>Penulis: <span class="text-black font-black">Kinanthi Kirana</span></p>
                            <p>Lokasi: <span class="text-black font-black">Rak SA-02</span></p>
                        </div>
                    </div>
                    <div class="p-3.5 border-t-[2.5px] border-black bg-[#FAF8F5] flex items-center justify-between">
                        <span class="text-[11px] font-comic font-black text-white bg-[#f43f5e] px-2.5 py-1 rounded-lg border-2 border-black">
                            Dipinjam Habis
                        </span>
                        <a href="{{ route('login') }}" class="text-xs font-comic font-black text-black hover:underline uppercase">
                            Reservasi ➔
                        </a>
                    </div>
                </div>

                <!-- Buku 4: Psikologi -->
                <div class="comic-card rounded-3xl bg-white overflow-hidden flex flex-col justify-between comic-btn-hover">
                    <div>
                        <div class="h-44 bg-[#e5eee6] p-4 flex flex-col justify-between border-b-[3px] border-black">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-0.5 rounded-lg text-[10px] font-comic font-black uppercase bg-white border-2 border-black">
                                    Psikologi
                                </span>
                                <span class="bg-black text-white px-2 py-0.5 rounded font-black text-xs">★ 4.9</span>
                            </div>
                            <div>
                                <span class="text-3xl">🧠</span>
                                <h4 class="font-comic font-black text-sm text-black leading-snug mt-1">Fokus Mendalam di Era Digital</h4>
                            </div>
                        </div>
                        <div class="p-4 space-y-1 text-xs font-comic font-bold text-black/80">
                            <p>Penulis: <span class="text-black font-black">Calvin Alamsyah</span></p>
                            <p>Lokasi: <span class="text-black font-black">Rak PS-03</span></p>
                        </div>
                    </div>
                    <div class="p-3.5 border-t-[2.5px] border-black bg-[#FAF8F5] flex items-center justify-between">
                        <span class="text-[11px] font-comic font-black text-black bg-[#8ce934] px-2.5 py-1 rounded-lg border-2 border-black">
                            Tersedia (12 Eks)
                        </span>
                        <a href="{{ route('login') }}" class="text-xs font-comic font-black text-[#5F8A75] hover:underline uppercase">
                            Pinjam ➔
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= TENTANG KAMI ================= -->
    <section id="tentang" class="py-20 relative border-t-[3.5px] border-black bg-white z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-10 items-center">
                
                <div class="lg:col-span-6 space-y-5">
                    <span class="inline-block px-4 py-1.5 rounded-xl bg-[#E5A93B] border-[2.5px] border-black shadow-[3px_3px_0px_#000] font-comic font-black text-xs uppercase text-black">
                        TENTANG LIBRAZ
                    </span>
                    <h2 class="text-3xl sm:text-5xl font-comic font-black text-black leading-tight">
                        Menghubungkan Kamu dengan Gudang Ilmu yang Seru!
                    </h2>
                    <p class="font-comic font-bold text-base text-black/80 leading-relaxed">
                        Libraz memadukan kehangatan estetika komik webtoon kasual dengan sistem perpustakaan digital modern. Tidak ada antrean membosankan—semuanya cepat, transparan, dan ramah untuk semua generasi pembaca.
                    </p>

                    <div class="space-y-3 pt-2">
                        <div class="p-4 rounded-2xl bg-[#FAF8F5] border-[3px] border-black shadow-[4px_4px_0px_#000] flex items-start gap-3.5">
                            <span class="text-2xl">🎯</span>
                            <div>
                                <h4 class="font-comic font-black text-base text-black uppercase">Visi Kami</h4>
                                <p class="font-comic font-bold text-xs text-black/70 mt-0.5">Mewujudkan budaya membaca yang menyenangkan, bebas sekat birokrasi, dan terintegrasi secara cerdas.</p>
                            </div>
                        </div>

                        <div class="p-4 rounded-2xl bg-[#fef7ea] border-[3px] border-black shadow-[4px_4px_0px_#000] flex items-start gap-3.5">
                            <span class="text-2xl">⚡</span>
                            <div>
                                <h4 class="font-comic font-black text-base text-black uppercase">Misi Kami</h4>
                                <p class="font-comic font-bold text-xs text-black/80 mt-0.5">Mengotomatisasi inventaris buku, peminjaman instan via kode QR, dan pelacakan sirkulasi real-time.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="comic-card p-6 rounded-3xl bg-[#5F8A75] text-white">
                            <div class="text-4xl font-comic font-black">100%</div>
                            <h5 class="font-comic font-black text-sm uppercase mt-1">Digital Paperless</h5>
                            <p class="font-comic font-bold text-xs text-white/90 mt-1">Nol pemborosan kartu kertas!</p>
                        </div>
                        <div class="comic-card p-6 rounded-3xl bg-[#E5A93B]">
                            <div class="text-4xl font-comic font-black text-black">24/7</div>
                            <h5 class="font-comic font-black text-sm text-black uppercase mt-1">Akses Portal</h5>
                            <p class="font-comic font-bold text-xs text-black/80 mt-1">Cek koleksi kapan saja.</p>
                        </div>
                        <div class="comic-card p-6 rounded-3xl bg-[#fef7ea]">
                            <div class="text-4xl font-comic font-black text-black">50+</div>
                            <h5 class="font-comic font-black text-sm text-black uppercase mt-1">Kategori Buku</h5>
                            <p class="font-comic font-bold text-xs text-black/80 mt-1">Sains, IT, sastra & komik.</p>
                        </div>
                        <div class="comic-card p-6 rounded-3xl bg-[#8ce934]">
                            <div class="text-4xl font-comic font-black text-black">INSTAN</div>
                            <h5 class="font-comic font-black text-sm text-black uppercase mt-1">Peminjaman QR</h5>
                            <p class="font-comic font-bold text-xs text-black/80 mt-1">Scan langsung beres.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= TESTIMONI PENGGUNA ================= -->
    <section id="testimoni" class="py-20 relative border-t-[3.5px] border-black bg-[#FAF8F5] z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-2">
                <span class="inline-block px-4 py-1.5 rounded-xl bg-[#8ce934] border-[2.5px] border-black shadow-[3px_3px_0px_#000] font-comic font-black text-xs uppercase text-black">
                    ULASAN ANGGOTA
                </span>
                <h2 class="text-3xl sm:text-5xl font-comic font-black text-black tracking-tight">
                    Kata Mereka Tentang Libraz!
                </h2>
                <p class="font-comic font-bold text-sm text-black/80">Pengalaman nyata para pembaca, pelajar, dan pustakawan.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                
                <div class="comic-card p-6 rounded-3xl bg-white flex flex-col justify-between comic-btn-hover">
                    <div class="space-y-3">
                        <div class="text-amber-500 font-black text-xl">★★★★★</div>
                        <p class="font-comic font-bold text-sm text-black leading-relaxed">
                            "Sebelum ada Libraz, saya sering lupa tanggal pengembalian buku dan kena denda. Notifikasi H-2 dan fitur scan QR-nya benar-benar menyelamatkan!"
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t-2 border-black/20 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-[#E5A93B] border-2 border-black flex items-center justify-center font-comic font-black text-sm">
                            DH
                        </div>
                        <div>
                            <h4 class="font-comic font-black text-sm text-black">Dimas Haryanto</h4>
                            <p class="text-xs font-bold text-black/60">Mahasiswa Ilmu Komputer</p>
                        </div>
                    </div>
                </div>

                <div class="comic-card p-6 rounded-3xl bg-[#fef7ea] flex flex-col justify-between comic-btn-hover">
                    <div class="space-y-3">
                        <div class="text-amber-600 font-black text-xl">★★★★★</div>
                        <p class="font-comic font-bold text-sm text-black leading-relaxed">
                            "Pekerjaan inventaris buku jadi 10x lebih gampang. Tidak ada lagi buku hilang tanpa data jelas. Semua sirkulasi tercatat rapi di sistem."
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t-2 border-black/20 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-white border-2 border-black flex items-center justify-center font-comic font-black text-sm">
                            SR
                        </div>
                        <div>
                            <h4 class="font-comic font-black text-sm text-black">Siti Rahmawati, S.Ptk</h4>
                            <p class="text-xs font-bold text-black/70">Kepala Bagian Sirkulasi</p>
                        </div>
                    </div>
                </div>

                <div class="comic-card p-6 rounded-3xl bg-white flex flex-col justify-between comic-btn-hover">
                    <div class="space-y-3">
                        <div class="text-amber-500 font-black text-xl">★★★★★</div>
                        <p class="font-comic font-bold text-sm text-black leading-relaxed">
                            "Desain webtoon kartunnya seru banget dan gak ngebosenin! Cari buku pelajaran jadi lebih semangat tiap hari di sekolah."
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t-2 border-black/20 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-[#8ce934] border-2 border-black flex items-center justify-center font-comic font-black text-sm">
                            AN
                        </div>
                        <div>
                            <h4 class="font-comic font-black text-sm text-black">Alya Nadira</h4>
                            <p class="text-xs font-bold text-black/60">Pelajar SMA</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= FAQ ================= -->
    <section id="faq" class="py-20 relative border-t-[3.5px] border-black bg-white z-10">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center space-y-2 mb-14">
                <span class="inline-block px-4 py-1.5 rounded-xl bg-[#E5A93B] border-[2.5px] border-black shadow-[3px_3px_0px_#000] font-comic font-black text-xs uppercase text-black">
                    TANYA JAWAB
                </span>
                <h2 class="text-3xl sm:text-5xl font-comic font-black text-black tracking-tight">
                    Frequently Asked Questions
                </h2>
                <p class="font-comic font-bold text-sm text-black/80">Jawaban cepat seputar keanggotaan dan peminjaman buku.</p>
            </div>

            <div class="space-y-4" id="faq-accordion">
                
                <div class="comic-card rounded-2xl bg-[#FAF8F5] overflow-hidden">
                    <button class="faq-toggle w-full px-5 py-4 text-left flex items-center justify-between gap-4 focus:outline-none" aria-expanded="false">
                        <span class="font-comic font-black text-base text-black">Bagaimana cara meminjam buku lewat Libraz?</span>
                        <div class="w-8 h-8 rounded-xl bg-white border-2 border-black flex items-center justify-center shrink-0 faq-icon shadow-[1.5px_1.5px_0px_#000]">
                            <span class="material-symbols-outlined text-[20px] text-black">expand_more</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 px-5">
                        <p class="font-comic font-bold text-sm text-black/80 pb-4 leading-relaxed">
                            Pilih buku dari katalog, lalu tekan tombol "Pinjam Mandiri". Saat di perpustakaan, arahkan kamera ke barcode/QR buku fisik untuk verifikasi instan.
                        </p>
                    </div>
                </div>

                <div class="comic-card rounded-2xl bg-[#FAF8F5] overflow-hidden">
                    <button class="faq-toggle w-full px-5 py-4 text-left flex items-center justify-between gap-4 focus:outline-none" aria-expanded="false">
                        <span class="font-comic font-black text-base text-black">Berapa biaya pendaftaran keanggotaan?</span>
                        <div class="w-8 h-8 rounded-xl bg-white border-2 border-black flex items-center justify-center shrink-0 faq-icon shadow-[1.5px_1.5px_0px_#000]">
                            <span class="material-symbols-outlined text-[20px] text-black">expand_more</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 px-5">
                        <p class="font-comic font-bold text-sm text-black/80 pb-4 leading-relaxed">
                            Gratis 100%! Seluruh siswa, mahasiswa, dan staf terafiliasi dapat mendaftar dan meminjam buku tanpa biaya sepeser pun.
                        </p>
                    </div>
                </div>

                <div class="comic-card rounded-2xl bg-[#FAF8F5] overflow-hidden">
                    <button class="faq-toggle w-full px-5 py-4 text-left flex items-center justify-between gap-4 focus:outline-none" aria-expanded="false">
                        <span class="font-comic font-black text-base text-black">Berapa lama batas waktu peminjaman?</span>
                        <div class="w-8 h-8 rounded-xl bg-white border-2 border-black flex items-center justify-center shrink-0 faq-icon shadow-[1.5px_1.5px_0px_#000]">
                            <span class="material-symbols-outlined text-[20px] text-black">expand_more</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 px-5">
                        <p class="font-comic font-bold text-sm text-black/80 pb-4 leading-relaxed">
                            Masa pinjam standar adalah 7 hari. Anda bisa memperpanjang masa pinjam 1 kali lewat dashboard sebelum tanggal pengembalian tiba.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= BANNER PENUTUP (CALL TO ACTION) ================= -->
    <section class="py-20 relative overflow-hidden bg-[#FAF8F5] border-t-[3.5px] border-black z-10">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="comic-card-lg rounded-3xl p-8 sm:p-14 bg-[#E5A93B] text-center relative">
                
                <div class="space-y-6 max-w-2xl mx-auto">
                    <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-xl text-xs font-comic font-black uppercase text-black bg-white border-2 border-black shadow-[3px_3px_0px_#000]">
                        🚀 MULAI SEKARANG JUGA
                    </span>
                    <h2 class="text-3xl sm:text-5xl font-comic font-black text-black tracking-tight leading-tight">
                        Siap Membuka Pintu ke Ribuan Buku Terbaik?
                    </h2>
                    <p class="font-comic font-bold text-black text-sm sm:text-base leading-relaxed">
                        Masuk ke akun Libraz sekarang, temukan buku idamanmu, dan rasakan kemudahan perpustakaan masa kini!
                    </p>

                    <div class="pt-4 flex items-center justify-center">
                        <a href="{{ route('login') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-10 py-4.5 rounded-2xl font-comic font-black text-base text-white bg-[#5F8A75] hover:bg-[#4a6e5d] border-[3.5px] border-black shadow-[6px_6px_0px_#000] comic-btn-hover uppercase tracking-wider">
                            <span class="material-symbols-outlined text-[24px]">login</span>
                            <span>MASUK KE LIBRAZ SEKARANG</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= FOOTER ================= -->
    <footer class="border-t-[3.5px] border-black bg-white py-12 text-sm z-10 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-6">
                
                <div class="flex items-center gap-3">
                    <span class="font-comic font-black text-2xl text-black">LIBRAZ!</span>
                    <span class="font-comic font-bold text-xs text-black/60">© 2026 Digital Library. Seluruh hak cipta dilindungi.</span>
                </div>

                <div class="flex items-center gap-6 font-comic font-black text-xs uppercase text-black">
                    <a href="#fitur" class="hover:text-[#5F8A75]">FITUR</a>
                    <a href="#katalog" class="hover:text-[#5F8A75]">KOLEKSI</a>
                    <a href="#tentang" class="hover:text-[#5F8A75]">TENTANG</a>
                    <a href="#faq" class="hover:text-[#5F8A75]">FAQ</a>
                    <a href="{{ route('login') }}" class="text-[#5F8A75] underline">MASUK</a>
                </div>

            </div>
        </div>
    </footer>

    <!-- ================= JAVASCRIPT ================= -->
    <script>
        lucide.createIcons();

        // Mobile Menu Toggle
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
                } else {
                    mobileMenu.classList.remove('hidden');
                    hamburgerIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                }
            });

            document.querySelectorAll('.mobile-nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                });
            });
        }

        // Accordion FAQ
        const faqToggles = document.querySelectorAll('.faq-toggle');
        faqToggles.forEach(toggle => {
            toggle.addEventListener('click', () => {
                const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
                const content = toggle.nextElementSibling;
                const icon = toggle.querySelector('.faq-icon span');

                faqToggles.forEach(otherToggle => {
                    if (otherToggle !== toggle) {
                        otherToggle.setAttribute('aria-expanded', 'false');
                        otherToggle.nextElementSibling.style.maxHeight = null;
                        const otherIcon = otherToggle.querySelector('.faq-icon span');
                        if (otherIcon) otherIcon.textContent = 'expand_more';
                    }
                });

                if (isExpanded) {
                    toggle.setAttribute('aria-expanded', 'false');
                    content.style.maxHeight = null;
                    if (icon) icon.textContent = 'expand_more';
                } else {
                    toggle.setAttribute('aria-expanded', 'true');
                    content.style.maxHeight = content.scrollHeight + 'px';
                    if (icon) icon.textContent = 'expand_less';
                }
            });
        });
    </script>
</body>
</html>
