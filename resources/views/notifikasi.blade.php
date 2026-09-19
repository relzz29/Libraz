 <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;family=Space+Grotesk:wght@700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <style>@layer base{html,body{width:100vw;margin:0;padding:0;}body{overscroll-behavior:none;}.pb-safe{padding-bottom:env(safe-area-inset-bottom,0px);}.pt-safe{padding-top:env(safe-area-inset-top,0px);}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
    tailwind.config = { darkMode: "class", theme: { extend: { "colors": { "on-primary-fixed": "#1e0060", "on-primary-fixed-variant": "#4c00d3", "surface-container-highest": "#e5e1e8", "on-error": "#ffffff", "on-error-container": "#93000a", "surface-container": "#f1ecf4", "surface-container-high": "#ebe6ee", "on-tertiary-fixed": "#40000f", "on-secondary-fixed": "#002112", "secondary-fixed": "#4dffb2", "on-tertiary": "#ffffff", "on-surface": "#1c1b20", "surface-variant": "#e5e1e8", "surface-container-low": "#f7f2f9", "on-primary-container": "#cfc1ff", "on-surface-variant": "#484456", "background": "#fdf8ff", "inverse-primary": "#ccbeff", "inverse-on-surface": "#f4eff6", "tertiary-container": "#ac0036", "error-container": "#ffdad6", "primary": "#4300bb", "on-secondary-container": "#007149", "surface-tint": "#6531f0", "secondary-fixed-dim": "#00e296", "secondary": "#006c46", "surface-dim": "#ddd8e0", "tertiary-fixed-dim": "#ffb2b8", "tertiary-fixed": "#ffdadb", "on-background": "#1c1b20", "secondary-container": "#43fcae", "tertiary": "#800026", "inverse-surface": "#313035", "primary-fixed-dim": "#ccbeff", "primary-fixed": "#e7deff", "on-secondary": "#ffffff", "error": "#ba1a1a", "surface-container-lowest": "#ffffff", "primary-container": "#5b21e6", "surface": "#fdf8ff", "outline": "#797488", "surface-bright": "#fdf8ff", "on-secondary-fixed-variant": "#005234", "on-primary": "#ffffff", "on-tertiary-fixed-variant": "#91002c", "outline-variant": "#cac3d9", "on-tertiary-container": "#ffb7bc" }, "borderRadius": { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" }, "spacing": { "space-xs": "0.25rem", "gutter-sm": "0.75rem", "space-lg": "1.25rem", "margin": "1.25rem", "gutter": "1rem", "margin-desktop": "2.5rem", "space-md": "0.875rem", "space-sm": "0.5rem", "space-xl": "2rem" }, "fontFamily": { "title-md": ["Plus Jakarta Sans"], "headline-lg-mobile": ["Plus Jakarta Sans"], "headline-md": ["Plus Jakarta Sans"], "display-lg": ["Plus Jakarta Sans"], "body-sm": ["Plus Jakarta Sans"], "label-sm": ["Space Grotesk"], "headline-sm": ["Plus Jakarta Sans"], "headline-lg": ["Plus Jakarta Sans"], "label-lg": ["Space Grotesk"], "body-lg": ["Plus Jakarta Sans"], "body-md": ["Plus Jakarta Sans"], "label-md": ["Space Grotesk"] }, "fontSize": { "title-md": ["16px", {"lineHeight": "22px", "fontWeight": "700"}], "headline-lg-mobile": ["26px", {"lineHeight": "32px", "fontWeight": "800"}], "headline-md": ["22px", {"lineHeight": "28px", "fontWeight": "700"}], "display-lg": ["38px", {"lineHeight": "44px", "fontWeight": "800"}], "body-sm": ["12px", {"lineHeight": "18px", "fontWeight": "400"}], "label-sm": ["10px", {"lineHeight": "12px", "fontWeight": "700"}], "headline-sm": ["18px", {"lineHeight": "24px", "fontWeight": "700"}], "headline-lg": ["30px", {"lineHeight": "36px", "fontWeight": "800"}], "label-lg": ["13px", {"lineHeight": "16px", "fontWeight": "700"}], "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "500"}], "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "500"}], "label-md": ["11px", {"lineHeight": "14px", "fontWeight": "700"}] } } } }
    </script>
</head>
<body class="bg-background font-body-md text-body-md text-on-surface flex flex-col min-h-screen">
    <header class="fixed top-0 w-full z-50 pt-safe bg-surface/80 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
        <div class="h-16 px-margin flex items-center justify-between gap-space-sm">
            <div class="flex items-center gap-space-sm min-w-0">
                <a aria-label="Kembali ke Akun" class="w-11 h-11 -ml-space-xs rounded-full flex items-center justify-center text-on-surface hover:text-primary transition-colors focus:outline-none flex-shrink-0" data-path="akun" href="{{ route('akun') }}">
                    <span class="material-symbols-outlined text-[24px]">arrow_back</span>
                </a>
                <div class="flex flex-col min-w-0">
                    <span class="font-label-sm text-label-sm text-primary tracking-wider uppercase truncate">Akun &amp; Pengaturan</span>
                    <span class="font-title-md text-title-md text-on-surface truncate">Edit Profil &amp; Pengaturan Akun</span>
                </div>
            </div>
            <div class="flex items-center gap-space-xs flex-shrink-0">
                <button aria-label="Bantuan" class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors focus:outline-none">
                    <span class="material-symbols-outlined text-[22px]">help_outline</span>
                </button>
            </div>
        </div>
    </header>

    <main class="flex flex-col relative w-full pt-16 pb-24 bg-surface min-h-screen items-center">
        <div class="flex flex-col w-full max-w-md px-margin space-y-space-md pt-space-md">
            
            <!-- Title & Mark as read -->
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <h1 class="font-headline-md text-headline-md text-on-surface tracking-tight">Pemberitahuan</h1>
                    <span class="px-2 py-0.5 rounded-full bg-primary text-on-primary font-label-sm text-label-sm font-bold">3 Baru</span>
                </div>
                <button class="flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-surface-container-highest text-on-surface-variant hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-[16px]">done_all</span>
                    <span class="font-label-sm text-label-sm">Tandai Dibaca</span>
                </button>
            </div>

            <!-- Filters -->
            <div class="flex items-center gap-2 overflow-x-auto pb-1 no-scrollbar pt-2">
                <button class="px-3.5 py-1.5 rounded-full bg-primary text-on-primary font-label-md text-label-md whitespace-nowrap shadow-sm flex items-center gap-1.5">
                    Semua <span class="w-5 h-5 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center text-[10px]">12</span>
                </button>
                <button class="px-3.5 py-1.5 rounded-full bg-surface-container text-on-surface-variant font-label-md text-label-md whitespace-nowrap hover:bg-surface-container-high transition-colors flex items-center gap-1.5">
                    Tenggat <span class="w-5 h-5 rounded-full bg-surface-container-high text-on-surface flex items-center justify-center text-[10px]">4</span>
                </button>
                <button class="px-3.5 py-1.5 rounded-full bg-surface-container text-on-surface-variant font-label-md text-label-md whitespace-nowrap hover:bg-surface-container-high transition-colors flex items-center gap-1.5">
                    Loker &amp; Booking <span class="w-5 h-5 rounded-full bg-surface-container-high text-on-surface flex items-center justify-center text-[10px]">2</span>
                </button>
            </div>

            <!-- Section HARI INI -->
            <div class="flex flex-col space-y-space-sm pt-space-xs">
                <div class="flex items-center gap-2">
                    <h2 class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">HARI INI</h2>
                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                </div>
                
                <!-- Card 1 -->
                <div class="relative bg-surface-container-lowest rounded-2xl p-space-md shadow-sm border-l-[6px] border-error flex flex-col gap-3">
                    <div class="absolute right-space-md top-space-md font-label-sm text-label-sm text-on-surface-variant">10m lalu</div>
                    <div class="flex items-center gap-2 pr-12">
                        <div class="w-8 h-8 rounded-full bg-error-container text-error flex items-center justify-center">
                            <span class="material-symbols-outlined text-[18px]">local_fire_department</span>
                        </div>
                        <span class="px-2 py-0.5 rounded bg-error-container text-error font-label-sm text-label-sm uppercase tracking-wider font-bold">URGENT • H-1 TENGGAT</span>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h3 class="font-title-md text-title-md text-on-surface">Buku Fisika Modern &amp; Kosmologi Harus Kembali Besok!</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mt-0.5">Tenggat pengembalian: <span class="font-bold text-error">28 Nov 2024, 15:00 WIB</span>. Segera perpanjang pinjaman atau kembalikan ke drop-box untuk menghindari denda Rp 1.000/hari.</p>
                    </div>
                    <div class="flex items-center gap-2 mt-1">
                        <button class="flex-1 py-2 rounded-xl bg-primary text-on-primary font-label-md text-label-md flex items-center justify-center gap-1.5 active:scale-95 transition-transform shadow-sm">
                            <span class="material-symbols-outlined text-[18px]">event_repeat</span>
                            Perpanjang (+7 Hari)
                        </button>
                        <button class="px-4 py-2 rounded-xl bg-surface-container text-on-surface font-label-md text-label-md hover:bg-surface-container-high transition-colors active:scale-95">
                            Detail Buku
                        </button>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative bg-surface-container-lowest rounded-2xl p-space-md shadow-sm border-l-[6px] border-secondary-fixed-dim flex flex-col gap-3">
                    <div class="absolute right-space-md top-space-md font-label-sm text-label-sm text-on-surface-variant">2 jam lalu</div>
                    <div class="flex items-center gap-2 pr-12">
                        <div class="w-8 h-8 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant flex items-center justify-center">
                            <span class="material-symbols-outlined text-[18px]">lock</span>
                        </div>
                        <span class="px-2 py-0.5 rounded bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm uppercase tracking-wider font-bold">SIAP DIAMBIL • LOKER SMART</span>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h3 class="font-title-md text-title-md text-on-surface">Buku Reservasi: Bumi Manusia Siap Diambil!</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mt-0.5">Tersimpan aman di <b>Smart Locker 03 (Lantai 1)</b>. Berlaku selama 24 jam sebelum dialihkan ke antrean berikutnya.</p>
                    </div>
                    <div class="flex items-center justify-between mt-1 px-3 py-2 rounded-xl bg-surface-container-low border border-surface-container-highest">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-secondary text-[20px]">key</span>
                            <div class="flex flex-col">
                                <span class="font-label-sm text-[9px] text-on-surface-variant uppercase tracking-wider">PIN AMBIL</span>
                                <span class="font-title-md text-title-md text-primary tracking-widest font-bold">#BZ-8821</span>
                            </div>
                        </div>
                        <button class="px-3 py-1.5 rounded-lg bg-surface-container text-on-surface font-label-sm text-label-sm flex items-center gap-1 hover:bg-surface-container-high transition-colors">
                            <span class="material-symbols-outlined text-[16px]">content_copy</span>
                            Salin
                        </button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="relative bg-surface-container-lowest rounded-2xl p-space-md shadow-sm border-l-[6px] border-primary flex flex-col gap-3">
                    <div class="absolute right-space-md top-space-md font-label-sm text-label-sm text-on-surface-variant">4 jam lalu</div>
                    <div class="flex items-center gap-2 pr-12">
                        <div class="w-8 h-8 rounded-full bg-primary-fixed text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-[18px]">workspace_premium</span>
                        </div>
                        <span class="px-2 py-0.5 rounded bg-primary-fixed text-primary font-label-sm text-label-sm uppercase tracking-wider font-bold">REWARD UNLOCKED • +150 XP</span>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h3 class="font-title-md text-title-md text-on-surface">Lencana Baru: Speed Reader ⚡</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mt-0.5">Hebat! Kamu menuntaskan <b>Filosofi Teras</b> dalam waktu 48 jam. XP kamu bertambah dan semakin dekat ke level 15 (Grandmaster).</p>
                    </div>
                    <div class="mt-1">
                        <button class="w-full py-2.5 rounded-xl bg-primary text-on-primary font-label-md text-label-md flex items-center justify-center gap-1.5 active:scale-[0.98] transition-transform shadow-sm">
                            <span class="material-symbols-outlined text-[18px]">stars</span>
                            Klaim Badge &amp; Cek Profil
                        </button>
                    </div>
                </div>
            </div>

            <!-- Section KEMARIN & SEBELUMNYA -->
            <div class="flex flex-col space-y-space-sm pt-space-md">
                <h2 class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">KEMARIN &amp; SEBELUMNYA</h2>
                
                <!-- Card 4 -->
                <div class="relative bg-surface-container-low rounded-2xl p-space-md shadow-sm flex flex-col gap-3">
                    <div class="absolute right-space-md top-space-md font-label-sm text-label-sm text-on-surface-variant">Kemarin</div>
                    <div class="flex items-center gap-2 pr-12">
                        <div class="w-8 h-8 rounded-full bg-surface-container-lowest text-on-surface-variant flex items-center justify-center border border-surface-container-high">
                            <span class="material-symbols-outlined text-[18px]">check_circle</span>
                        </div>
                        <span class="px-2 py-0.5 rounded bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider font-bold">PEMBAYARAN SUKSES</span>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h3 class="font-title-md text-title-md text-on-surface">Denda Rp 2.000 Terbayar via QRIS</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mt-0.5">Pengembalian buku <b>Kimia Dasar Jilid 1</b> telah tervalidasi oleh Petugas Citra Prameswari. Akun perpustakaanmu kini bersih tanpa tanggungan.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="relative bg-surface-container-lowest rounded-2xl p-space-md shadow-sm flex flex-col gap-3">
                    <div class="absolute right-space-md top-space-md font-label-sm text-label-sm text-on-surface-variant">2 hari lalu</div>
                    <div class="flex items-center gap-2 pr-12">
                        <div class="w-8 h-8 rounded-full bg-error-container text-error flex items-center justify-center">
                            <span class="material-symbols-outlined text-[18px]">campaign</span>
                        </div>
                        <span class="px-2 py-0.5 rounded bg-error-container text-error font-label-sm text-label-sm uppercase tracking-wider font-bold">PENGUMUMAN PERPUS</span>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h3 class="font-title-md text-title-md text-on-surface">Bedah Buku &amp; Meet the Author: Pekan Literasi</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mt-0.5">Sabtu ini pukul 09.00 WIB di Hall Baca Lantai 2. Kuota spesial 50 siswa terpilih. Dapatkan e-certificate resmi, novel gratis, dan snack box!</p>
                    </div>
                    <div class="flex items-center justify-between mt-1">
                        <div class="flex items-center gap-1.5 text-secondary">
                            <span class="material-symbols-outlined text-[18px]">groups</span>
                            <span class="font-label-sm text-label-sm font-bold">Tersisa 14 Kursi</span>
                        </div>
                        <button class="px-4 py-2 rounded-xl bg-surface-container-low text-primary font-label-md text-label-md hover:bg-surface-container-highest transition-colors active:scale-95 font-bold">
                            Daftar Sekarang
                        </button>
                    </div>
                </div>

                <!-- Bottom Card -->
                <div class="bg-surface-container-low rounded-2xl p-space-md shadow-sm flex items-center justify-between mt-space-sm cursor-pointer hover:bg-surface-container transition-colors">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-full bg-primary-fixed text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-[24px]">notifications_active</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-title-md text-title-md text-on-surface">Pengingat WhatsApp &amp; Push</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Atur jam notifikasi tenggat buku</span>
                        </div>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant shadow-sm">
                        <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                    </div>
                </div>
            </div>
            
        </div>
    </main>

    <nav class="fixed bottom-0 w-full z-50 pb-safe bg-surface/85 backdrop-blur-xl shadow-[0_-2px_12px_rgba(0,0,0,0.05)]" data-active-classes="bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]">
        <div class="flex items-center justify-around h-16 px-space-xs max-w-md mx-auto">
            <a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="katalog-buku" href="{{ route('katalog') }}">
                <span class="material-symbols-outlined text-[22px]">menu_book</span>
                <span class="font-label-sm text-label-sm tracking-tight mt-0.5">Katalog</span>
            </a>
            <a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="sirkulasi-peminjaman" href="{{ route('sirkulasi') }}">
                <span class="material-symbols-outlined text-[22px]">sync_alt</span>
                <span class="font-label-sm text-label-sm tracking-tight mt-0.5">Sirkulasi</span>
            </a>
            <a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="petugas-statistik" href="{{ route('statistik') }}">
                <span class="material-symbols-outlined text-[22px]">analytics</span>
                <span class="font-label-sm text-label-sm tracking-tight mt-0.5">Statistik</span>
            </a>
            <a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl transition-all hover:text-primary text-on-surface-variant" data-path="akun" href="{{ route('akun') }}">
                <span class="material-symbols-outlined text-[22px]">person</span>
                <span class="font-label-sm text-label-sm tracking-tight mt-0.5">Akun</span>
            </a>
        </div>
    </nav>
</body>
</html>
