<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Login - Libraz</title>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;family=Space+Grotesk:wght@700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com"></script>

<style>
@layer base{html,body{width:100vw;margin:0;padding:0;}body{overscroll-behavior:none;}.pb-safe{padding-bottom:env(safe-area-inset-bottom,0px);}.pt-safe{padding-top:env(safe-area-inset-top,0px);}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}
body { min-height: max(884px, 100dvh); }
/* Scanner Modal CSS */
.scanner-modal-backdrop { position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(15, 23, 42, 0.75); backdrop-filter: blur(8px); display: flex; align-items: center; justify-content: center; z-index: 9999; padding: 16px; }
.scanner-modal-card { background: #ffffff; width: 100%; max-width: 400px; border-radius: 24px; padding: 20px; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35); display: flex; flex-direction: column; gap: 14px; animation: modalPop 0.25s cubic-bezier(0.16, 1, 0.3, 1); position: relative; }
@keyframes modalPop { from { opacity: 0; transform: scale(0.92) translateY(10px); } to { opacity: 1; transform: scale(1) translateY(0); } }
.scanner-modal-header { display: flex; justify-content: space-between; align-items: center; }
.modal-icon-badge { width: 36px; height: 36px; border-radius: 10px; background: #e0e7ff; color: #4f46e5; display: flex; align-items: center; justify-content: center; font-size: 1.1rem; }
.modal-close-btn { background: #f1f5f9; border: none; width: 34px; height: 34px; border-radius: 50%; font-size: 1.2rem; display: flex; align-items: center; justify-content: center; cursor: pointer; color: #64748b; transition: all 0.15s; }
.modal-close-btn:hover { background: #e2e8f0; color: #0f172a; }
.scanner-viewport-wrapper { position: relative; width: 100%; aspect-ratio: 1 / 1; max-height: 270px; background: #090d16; border-radius: 18px; overflow: hidden; display: flex; align-items: center; justify-content: center; }
.qr-reader-box { width: 100% !important; height: 100% !important; border: none !important; }
.qr-reader-box video { width: 100% !important; height: 100% !important; object-fit: cover !important; }
#qr-reader__scan_region { background: transparent !important; }
#qr-reader__dashboard { display: none !important; }
.scanner-target-frame { position: absolute; top: 15%; left: 15%; right: 15%; bottom: 15%; pointer-events: none; box-shadow: 0 0 0 9999px rgba(0, 0, 0, 0.4); border-radius: 12px; }
.target-corner { position: absolute; width: 20px; height: 20px; border-color: #22d3a3; border-style: solid; }
.target-tl { top: -2px; left: -2px; border-width: 3px 0 0 3px; border-top-left-radius: 8px; }
.target-tr { top: -2px; right: -2px; border-width: 3px 3px 0 0; border-top-right-radius: 8px; }
.target-bl { bottom: -2px; left: -2px; border-width: 0 0 3px 3px; border-bottom-left-radius: 8px; }
.target-br { bottom: -2px; right: -2px; border-width: 0 3px 3px 0; border-bottom-right-radius: 8px; }
.laser-scanner { position: absolute; left: 5%; right: 5%; height: 3px; background: linear-gradient(90deg, transparent, #22d3a3, #38bdf8, #22d3a3, transparent); box-shadow: 0 0 12px #22d3a3, 0 0 6px #38bdf8; animation: laserPulse 1.8s infinite ease-in-out alternate; }
@keyframes laserPulse { 0% { top: 5%; opacity: 0.2; } 50% { opacity: 1; } 100% { top: 95%; opacity: 0.2; } }
.scanner-status-text { font-size: 0.78rem; color: #64748b; text-align: center; font-weight: 600; min-height: 20px; display: flex; align-items: center; justify-content: center; gap: 6px; }
.scanner-alert-box { font-size: 0.8rem; font-weight: 600; padding: 10px 14px; border-radius: 10px; text-align: center; }
.scanner-alert-danger { background: #fee2e2; color: #991b1b; border: 1px solid #fecaca; }
.scanner-alert-success { background: #dcfce7; color: #166534; border: 1px solid #bbf7d0; }
.scanner-modal-actions { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 8px; }
.scanner-action-btn { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 8px 6px; font-size: 0.72rem; font-weight: 600; color: #334155; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 4px; cursor: pointer; transition: all 0.15s; }
.scanner-action-btn:hover { background: #f1f5f9; border-color: #cbd5e1; }
.scanner-action-btn.demo-btn { background: #f5f3ff; border-color: #ddd6fe; color: #6d28d9; }
.scanner-action-btn.demo-btn:hover { background: #ede9fe; }

/* Custom New Login Layout Styles */
.bg-grid-pattern {
    background-size: 40px 40px;
    background-image: linear-gradient(to right, rgba(255, 255, 255, 0.05) 1px, transparent 1px),
                      linear-gradient(to bottom, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
}
.brand-purple { background-color: #2a1a5e; }
.brand-purple-dark { background-color: #150935; }
.brand-accent { background-color: #6d48e5; }
.brand-success { background-color: #22c55e; }
.text-brand-purple { color: #2a1a5e; }
.text-brand-accent { color: #6d48e5; }
.bg-brand-accent { background-color: #6d48e5; }
.ring-brand-accent:focus { --tw-ring-color: #6d48e5; }
.mask-image-gradient {
    -webkit-mask-image: radial-gradient(circle, black 50%, transparent 80%);
    mask-image: radial-gradient(circle, black 50%, transparent 80%);
}
@keyframes shimmer_btn { 100% { transform: translateX(100%); } }
</style>
<script id="tailwind-config">tailwind.config = {"darkMode":"class","theme":{"extend":{"colors":{"on-primary-fixed":"rgb(var(--color-on-primary-fixed) \/ <alpha-value>)","on-primary-fixed-variant":"rgb(var(--color-on-primary-fixed-variant) \/ <alpha-value>)","surface-container-highest":"rgb(var(--color-surface-container-highest) \/ <alpha-value>)","on-error":"rgb(var(--color-on-error) \/ <alpha-value>)","on-error-container":"rgb(var(--color-on-error-container) \/ <alpha-value>)","surface-container":"rgb(var(--color-surface-container) \/ <alpha-value>)","surface-container-high":"rgb(var(--color-surface-container-high) \/ <alpha-value>)","on-tertiary-fixed":"rgb(var(--color-on-tertiary-fixed) \/ <alpha-value>)","on-secondary-fixed":"rgb(var(--color-on-secondary-fixed) \/ <alpha-value>)","secondary-fixed":"rgb(var(--color-secondary-fixed) \/ <alpha-value>)","on-tertiary":"rgb(var(--color-on-tertiary) \/ <alpha-value>)","on-surface":"rgb(var(--color-on-surface) \/ <alpha-value>)","surface-variant":"rgb(var(--color-surface-variant) \/ <alpha-value>)","surface-container-low":"rgb(var(--color-surface-container-low) \/ <alpha-value>)","on-primary-container":"rgb(var(--color-on-primary-container) \/ <alpha-value>)","on-surface-variant":"rgb(var(--color-on-surface-variant) \/ <alpha-value>)","background":"rgb(var(--color-background) \/ <alpha-value>)","inverse-primary":"rgb(var(--color-inverse-primary) \/ <alpha-value>)","inverse-on-surface":"rgb(var(--color-inverse-on-surface) \/ <alpha-value>)","tertiary-container":"rgb(var(--color-tertiary-container) \/ <alpha-value>)","error-container":"rgb(var(--color-error-container) \/ <alpha-value>)","primary":"rgb(var(--color-primary) \/ <alpha-value>)","on-secondary-container":"rgb(var(--color-on-secondary-container) \/ <alpha-value>)","surface-tint":"rgb(var(--color-surface-tint) \/ <alpha-value>)","secondary-fixed-dim":"rgb(var(--color-secondary-fixed-dim) \/ <alpha-value>)","secondary":"rgb(var(--color-secondary) \/ <alpha-value>)","surface-dim":"rgb(var(--color-surface-dim) \/ <alpha-value>)","tertiary-fixed-dim":"rgb(var(--color-tertiary-fixed-dim) \/ <alpha-value>)","tertiary-fixed":"rgb(var(--color-tertiary-fixed) \/ <alpha-value>)","on-background":"rgb(var(--color-on-background) \/ <alpha-value>)","secondary-container":"rgb(var(--color-secondary-container) \/ <alpha-value>)","tertiary":"rgb(var(--color-tertiary) \/ <alpha-value>)","inverse-surface":"rgb(var(--color-inverse-surface) \/ <alpha-value>)","primary-fixed-dim":"rgb(var(--color-primary-fixed-dim) \/ <alpha-value>)","primary-fixed":"rgb(var(--color-primary-fixed) \/ <alpha-value>)","on-secondary":"rgb(var(--color-on-secondary) \/ <alpha-value>)","error":"rgb(var(--color-error) \/ <alpha-value>)","surface-container-lowest":"rgb(var(--color-surface-container-lowest) \/ <alpha-value>)","primary-container":"rgb(var(--color-primary-container) \/ <alpha-value>)","surface":"rgb(var(--color-surface) \/ <alpha-value>)","outline":"rgb(var(--color-outline) \/ <alpha-value>)","surface-bright":"rgb(var(--color-surface-bright) \/ <alpha-value>)","on-secondary-fixed-variant":"rgb(var(--color-on-secondary-fixed-variant) \/ <alpha-value>)","on-primary":"rgb(var(--color-on-primary) \/ <alpha-value>)","on-tertiary-fixed-variant":"rgb(var(--color-on-tertiary-fixed-variant) \/ <alpha-value>)","outline-variant":"rgb(var(--color-outline-variant) \/ <alpha-value>)","on-tertiary-container":"rgb(var(--color-on-tertiary-container) \/ <alpha-value>)"},"borderRadius":{"DEFAULT":"0.25rem","lg":"0.5rem","xl":"0.75rem","full":"9999px"},"spacing":{"space-xs":"0.25rem","gutter-sm":"0.75rem","space-lg":"1.25rem","margin":"1.25rem","gutter":"1rem","margin-desktop":"2.5rem","space-md":"0.875rem","space-sm":"0.5rem","space-xl":"2rem"},"fontFamily":{"title-md":["Plus Jakarta Sans"],"headline-lg-mobile":["Plus Jakarta Sans"],"headline-md":["Plus Jakarta Sans"],"display-lg":["Plus Jakarta Sans"],"body-sm":["Plus Jakarta Sans"],"label-sm":["Space Grotesk"],"headline-sm":["Plus Jakarta Sans"],"headline-lg":["Plus Jakarta Sans"],"label-lg":["Space Grotesk"],"body-lg":["Plus Jakarta Sans"],"body-md":["Plus Jakarta Sans"],"label-md":["Space Grotesk"]},"fontSize":{"title-md":["16px",{"lineHeight":"22px","fontWeight":"700"}],"headline-lg-mobile":["26px",{"lineHeight":"32px","fontWeight":"800"}],"headline-md":["22px",{"lineHeight":"28px","fontWeight":"700"}],"display-lg":["38px",{"lineHeight":"44px","fontWeight":"800"}],"body-sm":["12px",{"lineHeight":"18px","fontWeight":"400"}],"label-sm":["10px",{"lineHeight":"12px","fontWeight":"700"}],"headline-sm":["18px",{"lineHeight":"24px","fontWeight":"700"}],"headline-lg":["30px",{"lineHeight":"36px","fontWeight":"800"}],"label-lg":["13px",{"lineHeight":"16px","fontWeight":"700"}],"body-lg":["16px",{"lineHeight":"24px","fontWeight":"500"}],"body-md":["14px",{"lineHeight":"20px","fontWeight":"500"}],"label-md":["11px",{"lineHeight":"14px","fontWeight":"700"}]}}}};</script>
<script>
  if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) || localStorage.theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    document.documentElement.classList.add('dark')
  } else {
    document.documentElement.classList.remove('dark')
  }
</script>

<script src="https://unpkg.com/html5-qrcode@2.3.8/html5-qrcode.min.js"></script>
<style>
@layer base{html,body{width:100vw;margin:0;padding:0;}body{overscroll-behavior:none;}.pb-safe{padding-bottom:env(safe-area-inset-bottom,0px);}.pt-safe{padding-top:env(safe-area-inset-top,0px);}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}
body { min-height: max(884px, 100dvh); }
/* Scanner Modal CSS */
.scanner-modal-backdrop { position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(15, 23, 42, 0.75); backdrop-filter: blur(8px); display: flex; align-items: center; justify-content: center; z-index: 9999; padding: 16px; }
.scanner-modal-card { background: #ffffff; width: 100%; max-width: 400px; border-radius: 24px; padding: 20px; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35); display: flex; flex-direction: column; gap: 14px; animation: modalPop 0.25s cubic-bezier(0.16, 1, 0.3, 1); position: relative; }
@keyframes modalPop { from { opacity: 0; transform: scale(0.92) translateY(10px); } to { opacity: 1; transform: scale(1) translateY(0); } }
.scanner-modal-header { display: flex; justify-content: space-between; align-items: center; }
.modal-icon-badge { width: 36px; height: 36px; border-radius: 10px; background: #e0e7ff; color: #4f46e5; display: flex; align-items: center; justify-content: center; font-size: 1.1rem; }
.modal-close-btn { background: #f1f5f9; border: none; width: 34px; height: 34px; border-radius: 50%; font-size: 1.2rem; display: flex; align-items: center; justify-content: center; cursor: pointer; color: #64748b; transition: all 0.15s; }
.modal-close-btn:hover { background: #e2e8f0; color: #0f172a; }
.scanner-viewport-wrapper { position: relative; width: 100%; aspect-ratio: 1 / 1; max-height: 270px; background: #090d16; border-radius: 18px; overflow: hidden; display: flex; align-items: center; justify-content: center; }
.qr-reader-box { width: 100% !important; height: 100% !important; border: none !important; }
.qr-reader-box video { width: 100% !important; height: 100% !important; object-fit: cover !important; }
#qr-reader__scan_region { background: transparent !important; }
#qr-reader__dashboard { display: none !important; }
.scanner-target-frame { position: absolute; top: 15%; left: 15%; right: 15%; bottom: 15%; pointer-events: none; box-shadow: 0 0 0 9999px rgba(0, 0, 0, 0.4); border-radius: 12px; }
.target-corner { position: absolute; width: 20px; height: 20px; border-color: #22d3a3; border-style: solid; }
.target-tl { top: -2px; left: -2px; border-width: 3px 0 0 3px; border-top-left-radius: 8px; }
.target-tr { top: -2px; right: -2px; border-width: 3px 3px 0 0; border-top-right-radius: 8px; }
.target-bl { bottom: -2px; left: -2px; border-width: 0 0 3px 3px; border-bottom-left-radius: 8px; }
.target-br { bottom: -2px; right: -2px; border-width: 0 3px 3px 0; border-bottom-right-radius: 8px; }
.laser-scanner { position: absolute; left: 5%; right: 5%; height: 3px; background: linear-gradient(90deg, transparent, #22d3a3, #38bdf8, #22d3a3, transparent); box-shadow: 0 0 12px #22d3a3, 0 0 6px #38bdf8; animation: laserPulse 1.8s infinite ease-in-out alternate; }
@keyframes laserPulse { 0% { top: 5%; opacity: 0.2; } 50% { opacity: 1; } 100% { top: 95%; opacity: 0.2; } }
.scanner-status-text { font-size: 0.78rem; color: #64748b; text-align: center; font-weight: 600; min-height: 20px; display: flex; align-items: center; justify-content: center; gap: 6px; }
.scanner-alert-box { font-size: 0.8rem; font-weight: 600; padding: 10px 14px; border-radius: 10px; text-align: center; }
.scanner-alert-danger { background: #fee2e2; color: #991b1b; border: 1px solid #fecaca; }
.scanner-alert-success { background: #dcfce7; color: #166534; border: 1px solid #bbf7d0; }
.scanner-modal-actions { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 8px; }
.scanner-action-btn { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 8px 6px; font-size: 0.72rem; font-weight: 600; color: #334155; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 4px; cursor: pointer; transition: all 0.15s; }
.scanner-action-btn:hover { background: #f1f5f9; border-color: #cbd5e1; }
.scanner-action-btn.demo-btn { background: #f5f3ff; border-color: #ddd6fe; color: #6d28d9; }
.scanner-action-btn.demo-btn:hover { background: #ede9fe; }
</style>
</head>
<body class="bg-background font-body-md text-body-md text-on-surface pt-safe pb-safe flex flex-col min-h-screen">
<main class="flex flex-col lg:flex-row relative w-full min-h-screen items-stretch bg-slate-50 text-slate-800">
    
    <!-- LEFT SIDE: Illustration & Info -->
    <div class="relative hidden lg:flex lg:w-1/2 flex-col justify-between bg-gradient-to-br from-[#2a1a5e] to-[#150935] p-12 text-white overflow-hidden bg-grid-pattern">
        
        <!-- Logo -->
        <div class="flex items-center gap-3 z-10">
            <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center backdrop-blur-sm border border-white/20">
                <img src="/assets/images/libraz_logo.jpg" alt="Logo" class="w-10 h-10 rounded-lg object-cover mix-blend-screen" onerror="this.src='https://ui-avatars.com/api/?name=LIBRAZ&background=random&color=fff'">
            </div>
            <div>
                <h1 class="text-2xl font-bold tracking-tight">LIBRAZ</h1>
                <div class="flex items-center gap-1.5 text-green-500 text-xs font-medium">
                    <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                    Live Library System
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="z-10 mt-12 max-w-lg">
            <h2 class="text-5xl font-extrabold leading-tight mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                Level up your reading<br>game ⚡ 📚
            </h2>
            <p class="text-lg text-indigo-100/80 leading-relaxed mb-6">
                Bergabunglah dengan ribuan siswa yang telah beralih ke perpustakaan digital masa depan. Cepat, pintar, dan terintegrasi langsung dengan ekosistem sekolah.
            </p>
            
            <div class="flex flex-col gap-3 mt-8 w-max relative z-20">
                <div class="flex items-center gap-4 bg-white/5 backdrop-blur-md border border-white/10 p-3 pr-8 rounded-2xl hover:bg-white/10 transition-colors">
                    <div class="w-10 h-10 rounded-xl bg-purple-500/20 flex items-center justify-center text-purple-300">
                        <span class="material-symbols-outlined text-[20px]">library_books</span>
                    </div>
                    <div>
                        <div class="text-sm font-bold text-white tracking-wide">Akses Ribuan Koleksi</div>
                        <div class="text-[11px] text-indigo-200">E-Book & Buku Fisik Terlengkap</div>
                    </div>
                </div>
                
                <div class="flex items-center gap-4 bg-white/5 backdrop-blur-md border border-white/10 p-3 pr-8 rounded-2xl hover:bg-white/10 transition-colors">
                    <div class="w-10 h-10 rounded-xl bg-emerald-500/20 flex items-center justify-center text-emerald-300">
                        <span class="material-symbols-outlined text-[20px]">bolt</span>
                    </div>
                    <div>
                        <div class="text-sm font-bold text-white tracking-wide">Fast Pass Scanner</div>
                        <div class="text-[11px] text-indigo-200">Pinjam buku dalam 3 detik</div>
                    </div>
                </div>

                <div class="flex items-center gap-4 bg-white/5 backdrop-blur-md border border-white/10 p-3 pr-8 rounded-2xl hover:bg-white/10 transition-colors">
                    <div class="w-10 h-10 rounded-xl bg-amber-500/20 flex items-center justify-center text-amber-300">
                        <span class="material-symbols-outlined text-[20px]">social_leaderboard</span>
                    </div>
                    <div>
                        <div class="text-sm font-bold text-white tracking-wide">Gamifikasi Belajar</div>
                        <div class="text-[11px] text-indigo-200">Naik level dengan membaca</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Illustration -->
        <div class="absolute right-0 top-1/2 -translate-y-1/2 w-[500px] h-[500px] opacity-90 z-0 pointer-events-none transform translate-x-12">
            <img src="/assets/images/girl_reading_books.jpg" alt="Illustration" class="w-full h-full object-contain mix-blend-screen mask-image-gradient" onerror="this.style.display='none'">
        </div>

        <!-- Bottom Stats -->
        <div class="z-10 mt-auto w-fit">
            <div class="flex items-center gap-4 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-4">
                <div class="flex -space-x-3">
                    <img class="w-10 h-10 rounded-full border-2 border-[#2a1a5e] object-cover" src="https://i.pravatar.cc/100?img=1" alt="">
                    <img class="w-10 h-10 rounded-full border-2 border-[#2a1a5e] object-cover" src="https://i.pravatar.cc/100?img=2" alt="">
                    <img class="w-10 h-10 rounded-full border-2 border-[#2a1a5e] object-cover" src="https://i.pravatar.cc/100?img=3" alt="">
                </div>
                <div>
                    <div class="font-bold text-lg">1,240+ Siswa</div>
                    <div class="text-xs text-indigo-200">Aktif membaca hari ini</div>
                </div>
                <div class="ml-4 w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-green-500">
                    <span class="material-symbols-outlined">trending_up</span>
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT SIDE: Login Form -->
    <div class="flex flex-1 flex-col justify-center px-6 py-12 lg:px-24 xl:px-32 relative bg-white">
        
        <div class="mx-auto w-full max-w-[420px]">
            
            <!-- Mobile Logo -->
            <div class="lg:hidden flex items-center justify-center gap-3 mb-10">
                <div class="w-10 h-10 bg-[#2a1a5e] rounded-xl flex items-center justify-center text-white">
                    <span class="material-symbols-outlined">menu_book</span>
                </div>
                <h1 class="text-2xl font-bold tracking-tight text-[#2a1a5e]">LIBRAZ</h1>
            </div>

            <!-- Segmented Tab Navigation: Masuk vs Daftar -->
            <div class="w-full bg-slate-100 rounded-xl p-1.5 flex gap-1 mb-8 shadow-inner">
                <button class="flex-1 py-3 rounded-lg font-bold text-sm bg-white text-[#6d48e5] shadow-sm flex items-center justify-center gap-1.5 transition-all" id="tab-login" type="button">
                    <span class="material-symbols-outlined text-[20px]">login</span>
                    <span>Masuk Akun</span>
                </button>
                <button class="flex-1 py-3 rounded-lg font-bold text-sm text-slate-500 hover:text-slate-800 hover:bg-slate-200/50 flex items-center justify-center gap-1.5 transition-all" id="tab-register" type="button">
                    <span class="material-symbols-outlined text-[20px]">person_add</span>
                    <span>Daftar Baru</span>
                </button>
            </div>

            <!-- Role Toggle -->
            <div class="bg-slate-100 p-1.5 rounded-xl flex items-center justify-between mb-8 shadow-inner">
                <span class="flex items-center gap-2 pl-3 text-sm font-semibold text-slate-500">
                    <span class="material-symbols-outlined text-[20px]">badge</span> Sebagai:
                </span>
                <div class="flex bg-white rounded-lg p-1 shadow-sm border border-slate-200">
                    <button class="px-4 py-1.5 rounded-md bg-[#6d48e5] text-white text-sm font-semibold shadow-sm transition-colors" id="role-student" type="button">Siswa / Siswi</button>
                    <button class="px-4 py-1.5 rounded-md text-slate-500 text-sm font-medium hover:text-slate-800 transition-colors" id="role-teacher" type="button">Pendidik</button>
                </div>
            </div>

            <!-- Fast Pass Scan Card -->
            <div class="bg-gradient-to-br from-[#1e293b] to-[#0f172a] rounded-2xl p-6 text-white mb-8 shadow-xl relative overflow-hidden group cursor-pointer hover:shadow-2xl transition-all border border-slate-700" onclick="openScanner()">
                <div class="flex justify-between items-start mb-4 relative z-10">
                    <div>
                        <div class="inline-flex items-center gap-1.5 bg-emerald-400/20 text-emerald-400 text-[10px] font-bold px-2 py-0.5 rounded-full mb-2 border border-emerald-400/30">
                            <span class="material-symbols-outlined text-[12px]">bolt</span> FAST PASS
                        </div>
                        <h3 class="text-lg font-bold text-white">Scan Kartu Pelajar</h3>
                        <p class="text-xs text-slate-400 mt-1">Otomatis deteksi QR ID Perpustakaan.</p>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center border border-white/10 group-hover:bg-[#6d48e5] transition-colors">
                        <span class="material-symbols-outlined">qr_code_scanner</span>
                    </div>
                </div>
                
                <div class="mt-4 border border-slate-600 rounded-xl p-4 bg-slate-900/50 flex flex-col items-center justify-center gap-3 relative h-[120px] relative z-10">
                    <div class="absolute inset-2 border-2 border-dashed border-slate-600 rounded-lg opacity-50"></div>
                    <span class="material-symbols-outlined text-4xl text-slate-400">qr_code_2</span>
                    <span class="text-[10px] font-bold tracking-widest text-emerald-400 uppercase relative z-10">Ketuk untuk buka kamera</span>
                    
                    <!-- decorative scan corners -->
                    <div class="absolute top-2 left-2 w-4 h-4 border-t-2 border-l-2 border-emerald-500 rounded-tl-sm"></div>
                    <div class="absolute top-2 right-2 w-4 h-4 border-t-2 border-r-2 border-emerald-500 rounded-tr-sm"></div>
                    <div class="absolute bottom-2 left-2 w-4 h-4 border-b-2 border-l-2 border-emerald-500 rounded-bl-sm"></div>
                    <div class="absolute bottom-2 right-2 w-4 h-4 border-b-2 border-r-2 border-emerald-500 rounded-br-sm"></div>
                </div>
            </div>

            <!-- Divider -->
            <div class="relative flex py-5 items-center mb-4">
                <div class="flex-grow border-t border-slate-200"></div>
                <span class="flex-shrink-0 mx-4 text-slate-400 text-[10px] font-bold tracking-widest uppercase">Atau Manual ID</span>
                <div class="flex-grow border-t border-slate-200"></div>
            </div>

            <!-- Authenticaton Form -->
            <form id="auth-form" method="POST" action="#" class="space-y-5">
                @csrf
                <input type="hidden" name="is_register" id="is-register" value="0">
                <input type="hidden" name="school_name" value="Asal Sekolah Default">

                <!-- JS Custom Alert Container -->
                <div id="js-alert-container" class="hidden p-3 text-sm rounded-xl flex items-center gap-2 mb-3"></div>

                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label for="input-identifier" id="label-identifier" class="block text-sm font-semibold text-slate-700">Nomor Induk Siswa (NIS)</label>
                        <a href="#" class="text-xs font-semibold text-[#6d48e5] flex items-center gap-1 hover:underline">
                            <span class="material-symbols-outlined text-[14px]">help</span> Cek NIS Online
                        </a>
                    </div>
                    <div class="relative group">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400 group-focus-within:text-[#6d48e5] transition-colors">
                            <span class="material-symbols-outlined text-[20px]">badge</span>
                        </div>
                        <input type="text" name="nis" id="input-identifier" inputmode="numeric" class="block w-full rounded-xl border-0 py-3.5 pl-11 pr-10 text-slate-900 shadow-sm ring-1 ring-inset ring-slate-300 placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-[#6d48e5] focus:outline-none sm:text-sm sm:leading-6 font-medium bg-white transition-all hover:ring-slate-400" placeholder="Contoh: 2024108827" value="{{ old('nis') }}" required>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-2">
                             <button type="button" onclick="openScanner()" class="p-1.5 rounded-lg text-slate-400 hover:text-[#6d48e5] hover:bg-indigo-50 transition-colors">
                                 <span class="material-symbols-outlined text-[20px]">qr_code</span>
                             </button>
                        </div>
                    </div>
                </div>

                <!-- Hidden fullname field for registration logic compatibility -->
                <div class="hidden flex-col gap-1.5" id="register-field-name">
                    <label class="block text-sm font-semibold text-slate-700" for="input-fullname">Nama Lengkap Siswa</label>
                    <div class="relative group">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400 group-focus-within:text-[#6d48e5] transition-colors">
                            <span class="material-symbols-outlined text-[20px]">person</span>
                        </div>
                        <input class="block w-full rounded-xl border-0 py-3.5 pl-11 pr-10 text-slate-900 shadow-sm ring-1 ring-inset ring-slate-300 placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-[#6d48e5] focus:outline-none sm:text-sm sm:leading-6 font-medium bg-white transition-all hover:ring-slate-400" id="input-fullname" name="name" placeholder="Sesuai Akun Dapodik Sekolah" type="text" value="{{ old('name') }}"/>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label for="input-password" class="block text-sm font-semibold text-slate-700">Kata Sandi / PIN</label>
                        <button type="button" onclick="openForgotPinModal()" class="text-xs font-semibold text-slate-500 hover:text-slate-800 transition-colors bg-transparent border-0 p-0 cursor-pointer">Lupa PIN?</button>
                    </div>
                    <div class="relative group">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400 group-focus-within:text-[#6d48e5] transition-colors">
                            <span class="material-symbols-outlined text-[20px]">lock</span>
                        </div>
                        <input type="password" name="password" id="input-password" class="block w-full rounded-xl border-0 py-3.5 pl-11 pr-10 text-slate-900 shadow-sm ring-1 ring-inset ring-slate-300 placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-[#6d48e5] focus:outline-none sm:text-sm sm:leading-6 font-medium bg-white transition-all hover:ring-slate-400" placeholder="••••••••" required>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-2">
                             <button type="button" id="toggle-password" class="p-1.5 rounded-lg text-slate-400 hover:text-slate-600 hover:bg-slate-100 transition-colors">
                                 <span class="material-symbols-outlined text-[20px]" id="pwd-icon">visibility_off</span>
                             </button>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between pt-2">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox" checked class="h-4 w-4 rounded border-slate-300 text-[#6d48e5] focus:ring-[#6d48e5] cursor-pointer transition-colors accent-[#6d48e5]">
                        <label for="remember" class="ml-2 block text-sm font-medium text-slate-700 cursor-pointer">Ingat perangkat ini di perpustakaan</label>
                    </div>
                    <div class="flex items-center gap-1 text-emerald-600 text-[10px] font-bold bg-emerald-50 px-2 py-1 rounded-md border border-emerald-100">
                        <span class="material-symbols-outlined text-[12px]">shield</span> AMAN
                    </div>
                </div>

                <div class="pt-2 flex flex-col gap-3">
                    <button id="submit-button" type="submit" class="group relative flex w-full justify-center items-center rounded-xl bg-[#6d48e5] px-3 py-4 text-sm font-bold text-white hover:bg-[#5a3bc2] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#6d48e5] transition-all shadow-lg shadow-[#6d48e5]/30 overflow-hidden cursor-pointer">
                        <span class="absolute inset-0 w-full h-full bg-white/20 -translate-x-full group-hover:animate-[shimmer_btn_1s_forwards]"></span>
                        <span class="relative flex items-center gap-2">
                            <span>Masuk ke Perpustakaan</span> 
                            <span class="material-symbols-outlined text-[18px] transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </span>
                    </button>
                </div>
            </form>
            
        </div>
        
    </div>
</main><!-- Scanner Modal -->
<div id="qr-modal" class="scanner-modal-backdrop" style="display: none;">
    <div class="scanner-modal-card">
        <div class="scanner-modal-header">
            <div style="display: flex; align-items: center; gap: 10px;">
                <div class="modal-icon-badge"><span class="material-symbols-outlined">qr_code_scanner</span></div>
                <div>
                    <h3 style="font-size: 1rem; font-weight: 700; margin: 0; color: #1e1b4b;">Fast Pass Scanner</h3>
                    <p style="font-size: 0.72rem; color: #6b7280; margin: 0;">Arahkan kamera ke QR / Barcode kartu</p>
                </div>
            </div>
            <button type="button" id="btn-close-scanner" class="modal-close-btn">&times;</button>
        </div>

        <div class="scanner-viewport-wrapper">
            <div id="qr-reader" class="qr-reader-box"></div>
            <div class="scanner-target-frame">
                <div class="target-corner target-tl"></div>
                <div class="target-corner target-tr"></div>
                <div class="target-corner target-bl"></div>
                <div class="target-corner target-br"></div>
                <div class="laser-scanner"></div>
            </div>
        </div>

        <div id="scanner-status" class="scanner-status-text">
            <span class="material-symbols-outlined animate-spin text-[16px]">autorenew</span> Menyiapkan kamera...
        </div>

        <div id="scanner-alert" class="scanner-alert-box" style="display: none;"></div>

        <div class="scanner-modal-actions">
            <button type="button" id="btn-switch-camera" class="scanner-action-btn">
                <span class="material-symbols-outlined text-[18px]">flip_camera_ios</span> Ganti Kamera
            </button>
            <label class="scanner-action-btn" style="cursor: pointer; margin: 0;">
                <span class="material-symbols-outlined text-[18px]">image</span> Unggah Gambar
                <input type="file" id="qr-file-input" accept="image/*" style="display: none;">
            </label>
            <button type="button" id="btn-demo-scan" class="scanner-action-btn demo-btn" title="Uji coba Fast Pass tanpa kamera">
                <span class="material-symbols-outlined text-[18px]">bolt</span> Coba Demo (Nadia)
            </button>
        </div>
    </div>
</div>

<!-- Forgot PIN Modal -->
<div id="forgot-pin-modal" class="scanner-modal-backdrop" style="display: none;">
    <div class="scanner-modal-card" style="text-align: center; padding: 32px 24px;">
        <div style="width: 64px; height: 64px; border-radius: 50%; background: #fff1f2; color: #e11d48; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
            <span class="material-symbols-outlined text-[32px]">lock_reset</span>
        </div>
        <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 8px; font-family: 'Plus Jakarta Sans', sans-serif;">Lupa PIN Anda?</h3>
        <p style="font-size: 0.875rem; color: #64748b; margin: 0 0 24px; line-height: 1.5; font-family: 'Plus Jakarta Sans', sans-serif;">
            Untuk alasan keamanan, reset PIN hanya dapat dilakukan oleh Admin Perpustakaan (Tech Support).
        </p>
        <div style="display: flex; flex-direction: column; gap: 12px;">
            <a href="{{ route('bantuan') }}" style="width: 100%; padding: 12px; border-radius: 12px; background: #4300bb; color: white; font-weight: 700; text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 8px; font-size: 0.875rem; transition: all 0.2s; box-shadow: 0 4px 6px -1px rgba(67, 0, 187, 0.2);">
                <span>Hubungi Tech Support</span>
                <span class="material-symbols-outlined text-[18px]">support_agent</span>
            </a>
            <button type="button" onclick="closeForgotPinModal()" style="width: 100%; padding: 12px; border-radius: 12px; background: #f1f5f9; color: #64748b; border: none; font-weight: 700; cursor: pointer; font-size: 0.875rem; transition: all 0.2s;">
                Kembali ke Login
            </button>
        </div>
    </div>
</div>

<script>
    function openForgotPinModal() {
        document.getElementById('forgot-pin-modal').style.display = 'flex';
    }
    
    function closeForgotPinModal() {
        document.getElementById('forgot-pin-modal').style.display = 'none';
    }
    
    // Close modal when clicking outside
    document.getElementById('forgot-pin-modal').addEventListener('click', function(e) {
        if (e.target === this) closeForgotPinModal();
    });
</script>

<script>
  (function() {
    const tabLogin = document.getElementById('tab-login');
    const tabRegister = document.getElementById('tab-register');
    const registerField = document.getElementById('register-field-name');
    const submitBtn = document.getElementById('submit-button');
    const roleStudent = document.getElementById('role-student');
    const roleTeacher = document.getElementById('role-teacher');
    const labelIdentifier = document.getElementById('label-identifier');
    const inputIdentifier = document.getElementById('input-identifier');
    const togglePwd = document.getElementById('toggle-password');
    const inputPwd = document.getElementById('input-password');
    const pwdIcon = document.getElementById('pwd-icon');
    const authForm = document.getElementById('auth-form');
    const isRegisterInput = document.getElementById('is-register');
    const inputFullname = document.getElementById('input-fullname');

    let currentMode = 'login';
    let currentRole = 'student';

    // Route URLs removed (using api explicitly)

    // Auto switch if there was an error in register mode
    const oldIsRegister = "{{ old('is_register') }}";
    if (oldIsRegister === "1") {
      switchToRegister();
    }

    // Custom Alert Helper
    const alertContainer = document.getElementById('js-alert-container');
    function showCustomAlert(message, type = 'error') {
      alertContainer.classList.remove('hidden');
      if (type === 'success') {
        alertContainer.style.backgroundColor = '#dcfce7';
        alertContainer.style.color = '#166534';
        alertContainer.innerHTML = `<span class="material-symbols-outlined text-[18px]">check_circle</span> <span>${message}</span>`;
      } else {
        alertContainer.style.backgroundColor = '#fee2e2';
        alertContainer.style.color = '#991b1b';
        alertContainer.innerHTML = `<span class="material-symbols-outlined text-[18px]">error</span> <span>${message}</span>`;
      }
      
      // Auto hide after 5 seconds
      setTimeout(() => {
        alertContainer.classList.add('hidden');
      }, 5000);
    }

    function switchToLogin() {
      if (currentMode === 'login') return;
      currentMode = 'login';
      tabLogin.className = 'flex-1 py-2.5 rounded-lg font-title-md text-title-md bg-surface-container-lowest text-primary shadow-sm flex items-center justify-center gap-1.5 transition-all';
      tabRegister.className = 'flex-1 py-2.5 rounded-lg font-title-md text-title-md text-on-surface-variant hover:text-on-surface flex items-center justify-center gap-1.5 transition-all';
      registerField.classList.add('hidden');
      inputFullname.removeAttribute('required');
      submitBtn.querySelector('span:first-child').textContent = 'Masuk ke Perpustakaan';
      isRegisterInput.value = "0";
    }

    function switchToRegister() {
      if (currentMode === 'register') return;
      currentMode = 'register';
      tabRegister.className = 'flex-1 py-2.5 rounded-lg font-title-md text-title-md bg-surface-container-lowest text-primary shadow-sm flex items-center justify-center gap-1.5 transition-all';
      tabLogin.className = 'flex-1 py-2.5 rounded-lg font-title-md text-title-md text-on-surface-variant hover:text-on-surface flex items-center justify-center gap-1.5 transition-all';
      registerField.classList.remove('hidden');
      inputFullname.setAttribute('required', 'required');
      submitBtn.querySelector('span:first-child').textContent = 'Aktivasi Akun Baru';
      isRegisterInput.value = "1";
    }

    // Tab Switcher
    tabLogin.addEventListener('click', switchToLogin);
    tabRegister.addEventListener('click', switchToRegister);

    // Role Switcher
    roleStudent.addEventListener('click', () => {
      if (currentRole === 'student') return;
      currentRole = 'student';
      roleStudent.className = 'px-3.5 py-1 rounded-full font-label-md text-label-md bg-primary-container text-surface-container-lowest shadow-sm transition-all';
      roleTeacher.className = 'px-3.5 py-1 rounded-full font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-all';
      labelIdentifier.textContent = 'Nomor Induk Siswa (NIS)';
      inputIdentifier.placeholder = 'Contoh: 2024108827';
    });

    roleTeacher.addEventListener('click', () => {
      if (currentRole === 'teacher') return;
      currentRole = 'teacher';
      roleTeacher.className = 'px-3.5 py-1 rounded-full font-label-md text-label-md bg-primary-container text-surface-container-lowest shadow-sm transition-all';
      roleStudent.className = 'px-3.5 py-1 rounded-full font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-all';
      labelIdentifier.textContent = 'Nomor Induk Pegawai (NIP / NUPTK)';
      inputIdentifier.placeholder = 'Contoh: 198503152010011002';
    });

    // Password Toggle
    togglePwd.addEventListener('click', () => {
      const isPassword = inputPwd.type === 'password';
      inputPwd.type = isPassword ? 'text' : 'password';
      pwdIcon.textContent = isPassword ? 'visibility_off' : 'visibility';
    });

    // Handle Form Submit via Fetch API
    authForm.addEventListener('submit', async function(e) {
      e.preventDefault();
      
      const isRegister = isRegisterInput.value === "1";
      const apiUrl = isRegister ? '/api/register' : '/api/login';
      
      const payload = {
        nis: inputIdentifier.value,
        password: inputPwd.value,
      };

      if (isRegister) {
        payload.name = inputFullname.value;
        payload.password_confirmation = inputPwd.value; // Assuming no confirm field in UI yet
        const schoolNameInput = document.querySelector('input[name="school_name"]');
        payload.school_name = schoolNameInput ? schoolNameInput.value : 'Asal Sekolah Default';
      }

      submitBtn.disabled = true;
      submitBtn.querySelector('span:first-child').textContent = 'Memproses...';
      alertContainer.classList.add('hidden'); // Hide any previous alert

      const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

      try {
        const response = await fetch(apiUrl, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': csrfToken
          },
          body: JSON.stringify(payload)
        });

        const data = await response.json();

        if (response.ok) {
          if (isRegister) {
            showCustomAlert('Akun Berhasil Dibuat. Silakan masuk.', 'success');
            setTimeout(() => {
              inputIdentifier.value = '';
              inputPwd.value = '';
              inputFullname.value = '';
              switchToLogin();
            }, 1500);
          } else {
            // Save token for SPA
            localStorage.setItem('auth_token', data.token || data.access_token);
            showCustomAlert('Login berhasil!', 'success');
            // Redirect to /katalog page
            setTimeout(() => {
              window.location.href = '/katalog';
            }, 800);
          }
        } else {
          let errorMessage = data.message || 'Terjadi kesalahan.';
          if (data.errors) {
            errorMessage = Object.values(data.errors).flat().join('<br>');
          }
          showCustomAlert('Gagal: ' + errorMessage, 'error');
        }
      } catch (error) {
        showCustomAlert('Kesalahan jaringan. Pastikan koneksi internet aktif.', 'error');
      } finally {
        submitBtn.disabled = false;
        submitBtn.querySelector('span:first-child').textContent = isRegister ? 'Aktivasi Akun Baru' : 'Masuk ke Perpustakaan';
      }
    });

    // ================= QR SCANNER FAST PASS LOGIC =================
    const qrModal = document.getElementById('qr-modal');
    const btnCloseScanner = document.getElementById('btn-close-scanner');
    const scannerStatus = document.getElementById('scanner-status');
    const scannerAlert = document.getElementById('scanner-alert');
    const btnSwitchCamera = document.getElementById('btn-switch-camera');
    const qrFileInput = document.getElementById('qr-file-input');
    const btnDemoScan = document.getElementById('btn-demo-scan');

    let html5QrCode = null;
    let isScannerRunning = false;
    let currentFacingMode = "environment";
    let isProcessingScan = false;

    function playSuccessSound() {
        try {
            const ctx = new (window.AudioContext || window.webkitAudioContext)();
            const osc = ctx.createOscillator();
            const gain = ctx.createGain();
            osc.connect(gain);
            gain.connect(ctx.destination);
            osc.type = 'sine';
            osc.frequency.setValueAtTime(750, ctx.currentTime);
            osc.frequency.exponentialRampToValueAtTime(1200, ctx.currentTime + 0.12);
            gain.gain.setValueAtTime(0.2, ctx.currentTime);
            gain.gain.exponentialRampToValueAtTime(0.01, ctx.currentTime + 0.15);
            osc.start();
            osc.stop(ctx.currentTime + 0.15);
        } catch (e) { }
    }

    window.openScanner = function() {
        qrModal.style.display = 'flex';
        scannerAlert.style.display = 'none';
        scannerStatus.innerHTML = '<span class="material-symbols-outlined animate-spin text-[16px]">autorenew</span> Menghubungkan ke kamera...';
        isProcessingScan = false;

        if (typeof Html5Qrcode === 'undefined') {
            scannerStatus.innerHTML = '<span style="color:#ef4444;"><span class="material-symbols-outlined text-[16px]">warning</span> Library QR Scanner sedang dimuat...</span>';
            return;
        }

        if (!html5QrCode) {
            html5QrCode = new Html5Qrcode("qr-reader");
        }
        startCamera(currentFacingMode);
    }

    function startCamera(facingMode) {
        html5QrCode.start(
            { facingMode: facingMode },
            { fps: 10, qrbox: { width: 220, height: 220 }, aspectRatio: 1.0 },
            onScanSuccess,
            onScanFailure
        ).then(() => {
            isScannerRunning = true;
            scannerStatus.innerHTML = '<span class="material-symbols-outlined text-[16px] text-green-500">videocam</span> Kamera aktif. Arahkan ke barcode / QR ID.';
        }).catch(err => {
            isScannerRunning = false;
            scannerStatus.innerHTML = '<span style="color:#f59e0b;"><span class="material-symbols-outlined text-[16px]">videocam_off</span> Kamera tidak aktif. Coba ganti kamera.</span>';
        });
    }

    function stopCamera() {
        if (html5QrCode && isScannerRunning) {
            html5QrCode.stop().then(() => { isScannerRunning = false; }).catch(err => {});
        }
    }

    function closeScannerModal() {
        stopCamera();
        qrModal.style.display = 'none';
        isProcessingScan = false;
    }

    btnCloseScanner.addEventListener('click', closeScannerModal);
    qrModal.addEventListener('click', function(e) { if (e.target === qrModal) closeScannerModal(); });

    btnSwitchCamera.addEventListener('click', function() {
        if (html5QrCode && isScannerRunning) {
            currentFacingMode = (currentFacingMode === "environment") ? "user" : "environment";
            html5QrCode.stop().then(() => {
                isScannerRunning = false;
                scannerStatus.innerHTML = '<span class="material-symbols-outlined animate-spin text-[16px]">autorenew</span> Berganti kamera...';
                startCamera(currentFacingMode);
            }).catch(err => {});
        }
    });

    qrFileInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (!file) return;
        if (!html5QrCode) html5QrCode = new Html5Qrcode("qr-reader");
        scannerStatus.innerHTML = '<span class="material-symbols-outlined animate-spin text-[16px]">autorenew</span> Memindai file gambar...';
        html5QrCode.scanFile(file, true)
            .then(decodedText => onScanSuccess(decodedText))
            .catch(err => {
                scannerStatus.innerHTML = '<span style="color:#ef4444;"><span class="material-symbols-outlined text-[16px]">cancel</span> Barcode tidak terbaca di gambar.</span>';
            });
    });

    btnDemoScan.addEventListener('click', function() {
        scannerStatus.innerHTML = '<span class="material-symbols-outlined text-[16px] text-indigo-500">bolt</span> Mensimulasikan scan kartu Nadia...';
        onScanSuccess("2024108827");
    });

    function onScanSuccess(decodedText) {
        if (isProcessingScan) return;
        isProcessingScan = true;
        playSuccessSound();
        stopCamera();

        scannerStatus.innerHTML = '<span class="material-symbols-outlined text-[16px] text-green-500">check_circle</span> Berhasil terbaca: <b>' + decodedText + '</b>';
        
        let cleanNis = decodedText;
        if(decodedText.includes('BZ-')) {
            const parts = decodedText.split('-');
            if(parts.length >= 3) cleanNis = parts[1] + parts[2];
        }
        inputIdentifier.value = cleanNis;

        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

        fetch("/api/qr-login", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({ qr_data: decodedText })
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                if (data.token) {
                    localStorage.setItem('auth_token', data.token);
                }
                window.location.href = data.redirect;
            } else {
                scannerAlert.className = 'scanner-alert-box scanner-alert-danger';
                scannerAlert.innerHTML = '<span class="material-symbols-outlined text-[16px]">error</span> ' + (data.message || 'QR tidak valid.');
                scannerAlert.style.display = 'block';
                isProcessingScan = false;
            }
        })
        .catch(err => {
            scannerAlert.className = 'scanner-alert-box scanner-alert-danger';
            scannerAlert.innerHTML = '<span class="material-symbols-outlined text-[16px]">wifi_off</span> Koneksi ke server terputus.';
            scannerAlert.style.display = 'block';
            isProcessingScan = false;
        });
    }

    function onScanFailure(error) {
        // Handle scan failure silently
    }
  })();
</script>
</main>
</body>
</html>
