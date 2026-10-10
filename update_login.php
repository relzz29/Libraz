<?php
$loginFile = __DIR__ . '/resources/views/login.blade.php';
$content = file_get_contents($loginFile);

// 1. Add extra styles for our new layout
$newStyles = <<<HTML
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
HTML;

$content = preg_replace('/<style>(.*?)<\/style>/s', $newStyles, $content, 1);

// Replace the main block
$mainStart = strpos($content, '<main class="flex flex-col lg:flex-row relative w-full min-h-screen items-stretch bg-surface">');
$mainEnd = strpos($content, '<!-- Scanner Modal -->');

$newMainBlock = <<<HTML
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
            <p class="text-lg text-indigo-100/80 leading-relaxed mb-8">
                Bergabunglah dengan ribuan siswa yang telah beralih ke perpustakaan digital masa depan. Cepat, pintar, dan terintegrasi langsung dengan ekosistem sekolah.
            </p>
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
                    
                    <div class="flex gap-2 w-full mt-2 hidden" id="dev-register-tab">
                        <button type="button" id="tab-login" class="hidden"></button>
                        <button type="button" id="tab-register" class="w-full py-2 text-xs font-semibold text-slate-500 hover:text-slate-800 cursor-pointer text-center bg-slate-50 rounded-lg hover:bg-slate-100 transition-colors border border-slate-200">Daftar Akun Baru (Dev)</button>
                    </div>
                </div>
            </form>
            
        </div>
        
    </div>
</main>
HTML;

$finalContent = substr($content, 0, $mainStart) . $newMainBlock . substr($content, $mainEnd);
file_put_contents($loginFile, $finalContent);
echo "Successfully updated login.blade.php\n";
?>
