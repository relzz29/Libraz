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
    
<style>
:root {
  --color-on-primary-fixed: 30 0 96;
  --color-on-primary-fixed-variant: 76 0 211;
  --color-surface-container-highest: 229 225 232;
  --color-on-error: 255 255 255;
  --color-on-error-container: 147 0 10;
  --color-surface-container: 241 236 244;
  --color-surface-container-high: 235 230 238;
  --color-on-tertiary-fixed: 64 0 15;
  --color-on-secondary-fixed: 0 33 18;
  --color-secondary-fixed: 77 255 178;
  --color-on-tertiary: 255 255 255;
  --color-on-surface: 28 27 32;
  --color-surface-variant: 229 225 232;
  --color-surface-container-low: 247 242 249;
  --color-on-primary-container: 207 193 255;
  --color-on-surface-variant: 72 68 86;
  --color-background: 253 248 255;
  --color-inverse-primary: 204 190 255;
  --color-inverse-on-surface: 244 239 246;
  --color-tertiary-container: 172 0 54;
  --color-error-container: 255 218 214;
  --color-primary: 67 0 187;
  --color-on-secondary-container: 0 113 73;
  --color-surface-tint: 101 49 240;
  --color-secondary-fixed-dim: 0 226 150;
  --color-secondary: 0 108 70;
  --color-surface-dim: 221 216 224;
  --color-tertiary-fixed-dim: 255 178 184;
  --color-tertiary-fixed: 255 218 219;
  --color-on-background: 28 27 32;
  --color-secondary-container: 67 252 174;
  --color-tertiary: 128 0 38;
  --color-inverse-surface: 49 48 53;
  --color-primary-fixed-dim: 204 190 255;
  --color-primary-fixed: 231 222 255;
  --color-on-secondary: 255 255 255;
  --color-error: 186 26 26;
  --color-surface-container-lowest: 255 255 255;
  --color-primary-container: 91 33 230;
  --color-surface: 253 248 255;
  --color-outline: 121 116 136;
  --color-surface-bright: 253 248 255;
  --color-on-secondary-fixed-variant: 0 82 52;
  --color-on-primary: 255 255 255;
  --color-on-tertiary-fixed-variant: 145 0 44;
  --color-outline-variant: 202 195 217;
  --color-on-tertiary-container: 255 183 188;
}
html.dark {
  --color-on-primary-fixed: 30 0 96;
  --color-on-primary-fixed-variant: 76 0 211;
  --color-surface-container-highest: 33 28 58;
  --color-on-error: 105 0 5;
  --color-on-error-container: 255 218 214;
  --color-surface-container: 21 17 36;
  --color-surface-container-high: 26 21 46;
  --color-on-tertiary-fixed: 64 0 15;
  --color-on-secondary-fixed: 0 33 18;
  --color-secondary-fixed: 77 255 178;
  --color-on-tertiary: 104 0 28;
  --color-on-surface: 229 225 232;
  --color-surface-variant: 229 225 232;
  --color-surface-container-low: 15 12 27;
  --color-on-primary-container: 231 222 255;
  --color-on-surface-variant: 196 192 206;
  --color-background: 11 9 20;
  --color-inverse-primary: 67 0 187;
  --color-inverse-on-surface: 244 239 246;
  --color-tertiary-container: 145 0 44;
  --color-error-container: 147 0 10;
  --color-primary: 178 140 255;
  --color-on-secondary-container: 67 252 174;
  --color-surface-tint: 101 49 240;
  --color-secondary-fixed-dim: 0 226 150;
  --color-secondary: 0 226 150;
  --color-surface-dim: 5 4 10;
  --color-tertiary-fixed-dim: 255 178 184;
  --color-tertiary-fixed: 255 218 219;
  --color-on-background: 229 225 232;
  --color-secondary-container: 0 82 52;
  --color-tertiary: 255 178 184;
  --color-inverse-surface: 49 48 53;
  --color-primary-fixed-dim: 204 190 255;
  --color-primary-fixed: 231 222 255;
  --color-on-secondary: 0 56 35;
  --color-error: 255 180 171;
  --color-surface-container-lowest: 6 5 12;
  --color-primary-container: 69 0 205;
  --color-surface: 11 9 20;
  --color-outline: 141 135 156;
  --color-surface-bright: 31 26 47;
  --color-on-secondary-fixed-variant: 0 82 52;
  --color-on-primary: 45 0 135;
  --color-on-tertiary-fixed-variant: 145 0 44;
  --color-outline-variant: 64 58 82;
  --color-on-tertiary-container: 255 218 219;
}
</style>
<script id="tailwind-config">tailwind.config = {"darkMode":"class","theme":{"extend":{"colors":{"on-primary-fixed":"rgb(var(--color-on-primary-fixed) \/ <alpha-value>)","on-primary-fixed-variant":"rgb(var(--color-on-primary-fixed-variant) \/ <alpha-value>)","surface-container-highest":"rgb(var(--color-surface-container-highest) \/ <alpha-value>)","on-error":"rgb(var(--color-on-error) \/ <alpha-value>)","on-error-container":"rgb(var(--color-on-error-container) \/ <alpha-value>)","surface-container":"rgb(var(--color-surface-container) \/ <alpha-value>)","surface-container-high":"rgb(var(--color-surface-container-high) \/ <alpha-value>)","on-tertiary-fixed":"rgb(var(--color-on-tertiary-fixed) \/ <alpha-value>)","on-secondary-fixed":"rgb(var(--color-on-secondary-fixed) \/ <alpha-value>)","secondary-fixed":"rgb(var(--color-secondary-fixed) \/ <alpha-value>)","on-tertiary":"rgb(var(--color-on-tertiary) \/ <alpha-value>)","on-surface":"rgb(var(--color-on-surface) \/ <alpha-value>)","surface-variant":"rgb(var(--color-surface-variant) \/ <alpha-value>)","surface-container-low":"rgb(var(--color-surface-container-low) \/ <alpha-value>)","on-primary-container":"rgb(var(--color-on-primary-container) \/ <alpha-value>)","on-surface-variant":"rgb(var(--color-on-surface-variant) \/ <alpha-value>)","background":"rgb(var(--color-background) \/ <alpha-value>)","inverse-primary":"rgb(var(--color-inverse-primary) \/ <alpha-value>)","inverse-on-surface":"rgb(var(--color-inverse-on-surface) \/ <alpha-value>)","tertiary-container":"rgb(var(--color-tertiary-container) \/ <alpha-value>)","error-container":"rgb(var(--color-error-container) \/ <alpha-value>)","primary":"rgb(var(--color-primary) \/ <alpha-value>)","on-secondary-container":"rgb(var(--color-on-secondary-container) \/ <alpha-value>)","surface-tint":"rgb(var(--color-surface-tint) \/ <alpha-value>)","secondary-fixed-dim":"rgb(var(--color-secondary-fixed-dim) \/ <alpha-value>)","secondary":"rgb(var(--color-secondary) \/ <alpha-value>)","surface-dim":"rgb(var(--color-surface-dim) \/ <alpha-value>)","tertiary-fixed-dim":"rgb(var(--color-tertiary-fixed-dim) \/ <alpha-value>)","tertiary-fixed":"rgb(var(--color-tertiary-fixed) \/ <alpha-value>)","on-background":"rgb(var(--color-on-background) \/ <alpha-value>)","secondary-container":"rgb(var(--color-secondary-container) \/ <alpha-value>)","tertiary":"rgb(var(--color-tertiary) \/ <alpha-value>)","inverse-surface":"rgb(var(--color-inverse-surface) \/ <alpha-value>)","primary-fixed-dim":"rgb(var(--color-primary-fixed-dim) \/ <alpha-value>)","primary-fixed":"rgb(var(--color-primary-fixed) \/ <alpha-value>)","on-secondary":"rgb(var(--color-on-secondary) \/ <alpha-value>)","error":"rgb(var(--color-error) \/ <alpha-value>)","surface-container-lowest":"rgb(var(--color-surface-container-lowest) \/ <alpha-value>)","primary-container":"rgb(var(--color-primary-container) \/ <alpha-value>)","surface":"rgb(var(--color-surface) \/ <alpha-value>)","outline":"rgb(var(--color-outline) \/ <alpha-value>)","surface-bright":"rgb(var(--color-surface-bright) \/ <alpha-value>)","on-secondary-fixed-variant":"rgb(var(--color-on-secondary-fixed-variant) \/ <alpha-value>)","on-primary":"rgb(var(--color-on-primary) \/ <alpha-value>)","on-tertiary-fixed-variant":"rgb(var(--color-on-tertiary-fixed-variant) \/ <alpha-value>)","outline-variant":"rgb(var(--color-outline-variant) \/ <alpha-value>)","on-tertiary-container":"rgb(var(--color-on-tertiary-container) \/ <alpha-value>)"},"borderRadius":{"DEFAULT":"0.25rem","lg":"0.5rem","xl":"0.75rem","full":"9999px"},"spacing":{"space-xs":"0.25rem","gutter-sm":"0.75rem","space-lg":"1.25rem","margin":"1.25rem","gutter":"1rem","margin-desktop":"2.5rem","space-md":"0.875rem","space-sm":"0.5rem","space-xl":"2rem"},"fontFamily":{"title-md":["Plus Jakarta Sans"],"headline-lg-mobile":["Plus Jakarta Sans"],"headline-md":["Plus Jakarta Sans"],"display-lg":["Plus Jakarta Sans"],"body-sm":["Plus Jakarta Sans"],"label-sm":["Space Grotesk"],"headline-sm":["Plus Jakarta Sans"],"headline-lg":["Plus Jakarta Sans"],"label-lg":["Space Grotesk"],"body-lg":["Plus Jakarta Sans"],"body-md":["Plus Jakarta Sans"],"label-md":["Space Grotesk"]},"fontSize":{"title-md":["16px",{"lineHeight":"22px","fontWeight":"700"}],"headline-lg-mobile":["26px",{"lineHeight":"32px","fontWeight":"800"}],"headline-md":["22px",{"lineHeight":"28px","fontWeight":"700"}],"display-lg":["38px",{"lineHeight":"44px","fontWeight":"800"}],"body-sm":["12px",{"lineHeight":"18px","fontWeight":"400"}],"label-sm":["10px",{"lineHeight":"12px","fontWeight":"700"}],"headline-sm":["18px",{"lineHeight":"24px","fontWeight":"700"}],"headline-lg":["30px",{"lineHeight":"36px","fontWeight":"800"}],"label-lg":["13px",{"lineHeight":"16px","fontWeight":"700"}],"body-lg":["16px",{"lineHeight":"24px","fontWeight":"500"}],"body-md":["14px",{"lineHeight":"20px","fontWeight":"500"}],"label-md":["11px",{"lineHeight":"14px","fontWeight":"700"}]}}}};</script>
<script>
  if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) || localStorage.theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    document.documentElement.classList.add('dark')
  } else {
    document.documentElement.classList.remove('dark')
  }
</script>

</head>
<body class="bg-background font-body-md text-body-md text-on-surface flex flex-col min-h-screen">
    <header class="fixed top-0 w-full z-50 pt-safe bg-surface/80 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
        <div class="h-16 px-margin flex items-center justify-between gap-space-sm">
            <div class="flex items-center gap-space-sm min-w-0">
                <a aria-label="Kembali ke Katalog" class="w-11 h-11 -ml-space-xs rounded-full flex items-center justify-center text-on-surface hover:text-primary transition-colors focus:outline-none flex-shrink-0" href="/katalog">
                    <span class="material-symbols-outlined text-[24px]">arrow_back</span>
                </a>
                <div class="flex flex-col min-w-0">
                    <span class="font-label-sm text-label-sm text-primary tracking-wider uppercase truncate">PEMBERITAHUAN</span>
                    <span class="font-title-md text-title-md text-on-surface truncate">Notifikasi</span>
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

    <nav class="fixed bottom-0 w-full z-50 pb-safe bg-surface/85 backdrop-blur-xl shadow-[0_-2px_12px_rgba(0,0,0,0.05)] md:hidden" data-active-classes="bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]">
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
<script>
  document.addEventListener('DOMContentLoaded', async () => {
    const token = localStorage.getItem('auth_token');
    if (!token) {
      window.location.href = '/login';
      return;
    }
    
    try {
      const response = await fetch('/api/user', {
        headers: {
          'Authorization': 'Bearer ' + token,
          'Accept': 'application/json'
        }
      });
      
      if (!response.ok) {
        localStorage.removeItem('auth_token');
        window.location.href = '/login';
      } else {
        const user = await response.json();
        if (!user.email || !user.school_name || user.school_name === 'Asal Sekolah Default' || !user.whatsapp_number || !user.bio) {
          window.location.href = '/akun-pengaturan?tab=profil&first_login=1';
          return;
        }
      }
    } catch (e) {
      console.error(e);
    }
  });
</script>
</body>
</html>
