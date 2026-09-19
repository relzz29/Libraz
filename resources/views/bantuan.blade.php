<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
    <title>Hubungi Pustakawan - Libraz</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800;900&amp;family=Space+Grotesk:wght@700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
    <style>
        @layer base{html,body{width:100vw;margin:0;padding:0;}body{overscroll-behavior:none;}.pb-safe{padding-bottom:env(safe-area-inset-bottom,0px);}.pt-safe{padding-top:env(safe-area-inset-top,0px);}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}
        .bg-grid-pattern {
            background-image: radial-gradient(#1c1b20 1px, transparent 1px);
            background-size: 20px 20px;
            opacity: 0.05;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
    tailwind.config = { darkMode: "class", theme: { extend: { "colors": { "on-primary-fixed": "#1e0060", "on-primary-fixed-variant": "#4c00d3", "surface-container-highest": "#e5e1e8", "on-error": "#ffffff", "on-error-container": "#93000a", "surface-container": "#f1ecf4", "surface-container-high": "#ebe6ee", "on-tertiary-fixed": "#40000f", "on-secondary-fixed": "#002112", "secondary-fixed": "#4dffb2", "on-tertiary": "#ffffff", "on-surface": "#1c1b20", "surface-variant": "#e5e1e8", "surface-container-low": "#f7f2f9", "on-primary-container": "#cfc1ff", "on-surface-variant": "#484456", "background": "#fdf8ff", "inverse-primary": "#ccbeff", "inverse-on-surface": "#f4eff6", "tertiary-container": "#ac0036", "error-container": "#ffdad6", "primary": "#4300bb", "on-secondary-container": "#007149", "surface-tint": "#6531f0", "secondary-fixed-dim": "#00e296", "secondary": "#006c46", "surface-dim": "#ddd8e0", "tertiary-fixed-dim": "#ffb2b8", "tertiary-fixed": "#ffdadb", "on-background": "#1c1b20", "secondary-container": "#43fcae", "tertiary": "#800026", "inverse-surface": "#313035", "primary-fixed-dim": "#ccbeff", "primary-fixed": "#e7deff", "on-secondary": "#ffffff", "error": "#ba1a1a", "surface-container-lowest": "#ffffff", "primary-container": "#5b21e6", "surface": "#fdf8ff", "outline": "#797488", "surface-bright": "#fdf8ff", "on-secondary-fixed-variant": "#005234", "on-primary": "#ffffff", "on-tertiary-fixed-variant": "#91002c", "outline-variant": "#cac3d9", "on-tertiary-container": "#ffb7bc" }, "borderRadius": { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" }, "spacing": { "space-xs": "0.25rem", "gutter-sm": "0.75rem", "space-lg": "1.25rem", "margin": "1.25rem", "gutter": "1rem", "margin-desktop": "2.5rem", "space-md": "0.875rem", "space-sm": "0.5rem", "space-xl": "2rem" }, "fontFamily": { "title-md": ["Plus Jakarta Sans"], "headline-lg-mobile": ["Plus Jakarta Sans"], "headline-md": ["Plus Jakarta Sans"], "display-lg": ["Plus Jakarta Sans"], "body-sm": ["Plus Jakarta Sans"], "label-sm": ["Space Grotesk"], "headline-sm": ["Plus Jakarta Sans"], "headline-lg": ["Plus Jakarta Sans"], "label-lg": ["Space Grotesk"], "body-lg": ["Plus Jakarta Sans"], "body-md": ["Plus Jakarta Sans"], "label-md": ["Space Grotesk"] }, "fontSize": { "title-md": ["16px", {"lineHeight": "22px", "fontWeight": "700"}], "headline-lg-mobile": ["26px", {"lineHeight": "32px", "fontWeight": "800"}], "headline-md": ["22px", {"lineHeight": "28px", "fontWeight": "700"}], "display-lg": ["38px", {"lineHeight": "44px", "fontWeight": "800"}], "body-sm": ["12px", {"lineHeight": "18px", "fontWeight": "400"}], "label-sm": ["10px", {"lineHeight": "12px", "fontWeight": "700"}], "headline-sm": ["18px", {"lineHeight": "24px", "fontWeight": "700"}], "headline-lg": ["30px", {"lineHeight": "36px", "fontWeight": "800"}], "label-lg": ["13px", {"lineHeight": "16px", "fontWeight": "700"}], "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "500"}], "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "500"}], "label-md": ["11px", {"lineHeight": "14px", "fontWeight": "700"}] } } } }
    </script>
</head>
<body class="bg-[#fcfcfa] font-body-md text-body-md text-on-surface flex flex-col min-h-screen selection:bg-primary selection:text-white">
    
    <header class="fixed top-0 w-full z-50 pt-safe bg-[#fcfcfa] border-b-4 border-on-surface">
        <div class="h-16 px-margin flex items-center justify-between gap-space-sm">
            <div class="flex items-center gap-space-sm min-w-0">
                <a aria-label="Kembali" class="w-10 h-10 -ml-1 rounded-xl flex items-center justify-center bg-surface-container-lowest border-2 border-on-surface shadow-[2px_2px_0px_#1c1b20] text-on-surface hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none transition-all focus:outline-none flex-shrink-0" href="{{ url()->previous() == url()->current() ? route('home') : url()->previous() }}">
                    <span class="material-symbols-outlined text-[20px]">arrow_back</span>
                </a>
                <div class="flex flex-col min-w-0 pl-1">
                    <span class="font-title-md text-[16px] font-black text-on-surface uppercase tracking-tight truncate">Help Center 🆘</span>
                </div>
            </div>
        </div>
    </header>

    <main class="flex flex-col relative w-full pt-16 pb-24 min-h-screen items-center overflow-hidden">
        <!-- Grid Background -->
        <div class="absolute inset-0 bg-grid-pattern pointer-events-none"></div>
        
        <!-- Decorative blobs -->
        <div class="absolute top-10 -right-10 w-40 h-40 bg-primary/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-40 -left-10 w-40 h-40 bg-secondary-container/40 rounded-full blur-3xl"></div>

        <div class="flex flex-col w-full max-w-md px-margin space-y-space-lg pt-space-lg z-10">
            
            <div class="flex flex-col gap-2 mb-2">
                <div class="inline-flex items-center gap-1.5 px-3 py-1 bg-surface-container-lowest border-2 border-on-surface shadow-[2px_2px_0px_#1c1b20] rounded-full w-fit mb-1 rotate-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-error animate-pulse border border-on-surface"></span>
                    <span class="font-label-sm text-[10px] text-on-surface font-black tracking-widest uppercase">Live Support</span>
                </div>
                <h1 class="font-title-md text-[38px] leading-[42px] text-on-surface tracking-tighter font-black mt-2">
                    Don't Panic! <br>
                    <span class="text-primary underline decoration-4 underline-offset-4">We got you.</span> ✨
                </h1>
                <p class="font-body-md text-[14px] text-on-surface-variant font-medium mt-3 leading-relaxed">
                    Punya kendala akun, denda nyangkut, atau bingung nyari buku? Langsung chat Pustakawan jagoan kita di bawah ini! 👇
                </p>
            </div>

            <div class="flex flex-col gap-5 mt-4">
                <!-- Kontak 1: Farell giekady -->
                <div class="group relative bg-surface-container-lowest rounded-2xl p-4 border-[3px] border-on-surface shadow-[4px_4px_0px_#1c1b20] flex items-center justify-between gap-3 cursor-pointer transition-all hover:translate-x-1 hover:translate-y-1 hover:shadow-none" onclick="window.open('https://wa.me/6287780182422', '_blank')">
                    <div class="absolute -top-3 -right-3 w-8 h-8 rounded-full bg-primary-container flex items-center justify-center text-primary text-[12px] font-black rotate-12 group-hover:rotate-45 transition-transform border-[3px] border-on-surface z-10">
                        1
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 rounded-xl bg-[#e7deff] flex items-center justify-center border-[3px] border-on-surface overflow-hidden flex-shrink-0">
                            <img src="{{ asset('images/farell.jpg') }}" alt="Foto Farell" class="w-full h-full object-cover">
                        </div>
                        <div class="flex flex-col justify-center">
                            <h3 class="font-title-md text-[17px] text-on-surface font-black uppercase tracking-tight leading-tight">Farell Giekady</h3>
                            <span class="font-label-sm text-[10px] text-on-surface font-bold mt-1.5 bg-primary-container px-2 py-0.5 rounded border border-on-surface w-fit shadow-[1px_1px_0px_#1c1b20]">Kepala Pustakawan 👑</span>
                        </div>
                    </div>
                    <div class="w-11 h-11 rounded-full bg-[#25D366] text-white flex items-center justify-center flex-shrink-0 border-[3px] border-on-surface shadow-[2px_2px_0px_#1c1b20] group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">send</span>
                    </div>
                </div>

                <!-- Kontak 2: Aryandi ramadani -->
                <div class="group relative bg-surface-container-lowest rounded-2xl p-4 border-[3px] border-on-surface shadow-[4px_4px_0px_#1c1b20] flex items-center justify-between gap-3 cursor-pointer transition-all hover:translate-x-1 hover:translate-y-1 hover:shadow-none" onclick="window.open('https://wa.me/6283190486249', '_blank')">
                    <div class="absolute -top-3 -right-3 w-8 h-8 rounded-full bg-secondary-container flex items-center justify-center text-secondary text-[12px] font-black -rotate-12 group-hover:-rotate-45 transition-transform border-[3px] border-on-surface z-10">
                        2
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 rounded-xl bg-[#43fcae] flex items-center justify-center border-[3px] border-on-surface overflow-hidden flex-shrink-0">
                            <img src="{{ asset('images/aryandi.jpg') }}" alt="Foto Aryandi" class="w-full h-full object-cover">
                        </div>
                        <div class="flex flex-col justify-center">
                            <h3 class="font-title-md text-[17px] text-on-surface font-black uppercase tracking-tight leading-tight">Aryandi Ramadani</h3>
                            <span class="font-label-sm text-[10px] text-on-surface font-bold mt-1.5 bg-secondary-container px-2 py-0.5 rounded border border-on-surface w-fit shadow-[1px_1px_0px_#1c1b20]">Tech Support 💻</span>
                        </div>
                    </div>
                    <div class="w-11 h-11 rounded-full bg-[#25D366] text-white flex items-center justify-center flex-shrink-0 border-[3px] border-on-surface shadow-[2px_2px_0px_#1c1b20] group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">send</span>
                    </div>
                </div>
            </div>

            <!-- Working Hours Widget (Neo Brutalism) -->
            <div class="mt-4 p-5 bg-tertiary-container rounded-2xl flex flex-col gap-3 border-[3px] border-on-surface shadow-[4px_4px_0px_#1c1b20] relative overflow-hidden">
                <!-- BG Graphic -->
                <span class="material-symbols-outlined absolute -right-4 -bottom-4 text-[100px] text-on-surface opacity-10 rotate-12 pointer-events-none" style="font-variation-settings: 'FILL' 1;">schedule</span>
                
                <div class="flex items-center gap-3 relative z-10">
                    <div class="w-10 h-10 rounded-lg bg-surface-container-lowest text-tertiary flex items-center justify-center flex-shrink-0 border-2 border-on-surface shadow-[2px_2px_0px_#1c1b20] -rotate-3">
                        <span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' 1;">alarm_on</span>
                    </div>
                    <h4 class="font-title-md text-[18px] font-black text-on-surface tracking-tight uppercase">Jam Operasional</h4>
                </div>
                
                <div class="relative z-10 mt-1">
                    <p class="font-body-sm text-[13px] font-bold text-on-tertiary-container leading-relaxed">
                        Layanan responsif / fast response berlaku pada jam kerja:
                    </p>
                    <div class="inline-block mt-3 bg-surface-container-lowest border-[3px] border-on-surface px-3 py-2 rounded-xl shadow-[3px_3px_0px_#1c1b20]">
                        <p class="font-label-sm text-[14px] font-black text-on-surface tracking-wide">
                            SENIN - JUMAT
                        </p>
                        <p class="font-title-md text-[18px] font-black text-tertiary tracking-tight mt-0.5">
                            06.30 - 14.50 WIB
                        </p>
                    </div>
                    <p class="font-label-sm text-[11px] text-on-tertiary-container font-bold mt-4 opacity-80">
                        *Di luar jam tersebut, pesan akan dibalas keesokan harinya.
                    </p>
                </div>
            </div>

        </div>
    </main>
</body>
</html>
