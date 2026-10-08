<?php
$file = __DIR__ . '/resources/views/sirkulasi.blade.php';
$content = file_get_contents($file);

// 1. Redesign the Main container and ambient background
$mainSearch = '<main class="flex flex-col relative w-full md:w-[calc(100%-16rem)] md:ml-64 pt-20 pb-24 md:pb-8 bg-gradient-to-br from-indigo-50/50 via-white to-purple-50/50 min-h-screen px-margin relative overflow-hidden">';
$mainReplace = <<<HTML
  <main class="flex flex-col w-full md:w-[calc(100%-16rem)] md:ml-64 pt-20 pb-24 md:pb-8 min-h-screen px-margin relative overflow-hidden bg-slate-50">
    <!-- Super Vibrant Ambient Background -->
    <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden">
        <div class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] rounded-full bg-gradient-to-br from-purple-400 to-indigo-500 mix-blend-multiply filter blur-[100px] opacity-40 animate-[spin_15s_linear_infinite]"></div>
        <div class="absolute top-[20%] right-[-10%] w-[60%] h-[60%] rounded-full bg-gradient-to-br from-cyan-300 to-blue-500 mix-blend-multiply filter blur-[120px] opacity-40 animate-[spin_20s_reverse_infinite]"></div>
        <div class="absolute bottom-[-20%] left-[20%] w-[70%] h-[70%] rounded-full bg-gradient-to-br from-fuchsia-400 to-pink-500 mix-blend-multiply filter blur-[130px] opacity-30 animate-[spin_25s_linear_infinite]"></div>
        <div class="absolute inset-0 bg-white/40 backdrop-blur-[2px]"></div>
    </div>
HTML;
$content = str_replace($mainSearch, $mainReplace, $content);
// Also fallback if the previous script didn't apply perfectly
$content = preg_replace('/<main class="flex flex-col relative w-full md:w-\[calc\(100\%-16rem\)\] md:ml-64 pt-20 pb-24 md:pb-8[^"]*"[^>]*>/', $mainReplace, $content);

// Remove the old ambient blobs if they exist
$content = preg_replace('/<!-- Ambient glowing blobs -->.*?<div class="fixed bottom-0 left-64.*?<\/div>/s', '', $content);

// 2. Add a Hero Header inside the main content
$heroHeader = <<<HTML
    <div class="relative z-10 w-full mb-8 mt-4">
        <h1 class="text-4xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-700 via-purple-600 to-pink-600 drop-shadow-sm tracking-tight mb-2">Pusat Sirkulasi</h1>
        <p class="text-slate-600 text-base md:text-lg max-w-xl">Kelola aktivitas peminjaman, perpanjang tenggat waktu, dan jelajahi buku dengan mudah.</p>
    </div>
HTML;

// Insert hero header before the Summary Cards
$content = preg_replace('/<!-- Summary Cards -->/', $heroHeader . "\n    <!-- Summary Cards -->", $content);

// 3. Ultra Premium Quota Card
$oldQuotaRegex = '/<!-- Quota Card -->.*?<!-- Scan Card -->/s';
$newQuota = <<<HTML
<!-- Quota Card -->
      <div class="group relative bg-white/50 backdrop-blur-2xl rounded-[32px] p-8 border border-white/80 shadow-[0_8px_32px_rgba(31,38,135,0.07)] flex flex-col justify-between overflow-hidden transition-all duration-500 hover:shadow-[0_15px_40px_rgba(99,102,241,0.15)] hover:-translate-y-2 z-10">
        <!-- Shine effect -->
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-white/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none z-0"></div>
        
        <div class="flex justify-between items-start mb-8 relative z-10">
          <div class="flex items-center gap-5">
            <div class="w-16 h-16 rounded-[20px] bg-gradient-to-br from-white to-indigo-50 border border-white flex items-center justify-center text-indigo-600 shadow-[0_4px_15px_rgba(0,0,0,0.05)] transform group-hover:rotate-12 transition-transform duration-500">
              <span class="material-symbols-outlined text-[32px]">auto_stories</span>
            </div>
            <div>
              <div class="font-label-sm text-xs text-indigo-500 font-bold uppercase tracking-[0.2em] mb-1">Status Akun</div>
              <div class="font-title-md text-2xl font-extrabold text-slate-800">Kuota Peminjaman</div>
            </div>
          </div>
          <div class="bg-indigo-600 text-white px-5 py-2 rounded-full font-label-md text-sm font-bold shadow-lg shadow-indigo-200/50" id="quota-text">
            0/5 Buku
          </div>
        </div>
        
        <div class="w-full bg-indigo-900/5 h-4 rounded-full overflow-hidden mb-4 relative z-10 shadow-inner p-0.5 border border-white/50">
          <div class="h-full bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-full transition-all duration-1000 relative overflow-hidden w-0 shadow-[0_0_10px_rgba(99,102,241,0.5)]" id="quota-bar">
            <!-- Animated shine inside progress bar -->
            <div class="absolute inset-0 bg-[linear-gradient(90deg,transparent,rgba(255,255,255,0.5),transparent)] -translate-x-full animate-[shimmer_2s_infinite]"></div>
          </div>
        </div>
        
        <div class="flex justify-between font-body-sm text-sm text-slate-600 font-medium relative z-10">
          <span id="quota-left" class="bg-white/60 px-3 py-1 rounded-lg">Sisa: 5 buku lagi</span>
          <span class="bg-white/60 px-3 py-1 rounded-lg">Maks 14 hari/pinjam</span>
        </div>
        
        <!-- Ambient shapes -->
        <div class="absolute -right-10 -bottom-10 w-48 h-48 bg-gradient-to-br from-indigo-300 to-purple-300 rounded-full blur-[40px] opacity-30 z-0 pointer-events-none group-hover:opacity-50 transition-opacity"></div>
      </div>

      <!-- Scan Card -->
HTML;
$content = preg_replace($oldQuotaRegex, $newQuota, $content);

// 4. Ultra Premium Scan Card
$oldScanRegex = '/<!-- Scan Card -->.*?<\/div>\s*<\/div>\s*<!-- Active Borrowings Section -->/s';
$newScan = <<<HTML
<!-- Scan Card -->
      <div class="group relative rounded-[32px] p-8 flex items-center gap-6 cursor-pointer transition-all duration-500 hover:-translate-y-2 z-10 overflow-hidden" onclick="window.location.href='{{ route('scanner') }}'">
        <!-- Animated vibrant background -->
        <div class="absolute inset-0 bg-gradient-to-r from-violet-600 via-fuchsia-600 to-indigo-600 background-animate z-0"></div>
        <div class="absolute inset-0 bg-black/10 z-0 group-hover:bg-black/0 transition-colors duration-500"></div>
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-20 z-0 mix-blend-overlay"></div>
        
        <div class="w-20 h-20 bg-white/20 backdrop-blur-xl border border-white/30 rounded-[24px] flex items-center justify-center flex-shrink-0 shadow-[0_8px_32px_rgba(0,0,0,0.1)] group-hover:scale-110 transition-transform duration-500 z-10">
          <span class="material-symbols-outlined text-[40px] text-white drop-shadow-[0_2px_4px_rgba(0,0,0,0.3)]">document_scanner</span>
        </div>
        
        <div class="flex flex-col min-w-0 relative z-10 flex-1">
          <div class="inline-block px-3 py-1 bg-white/20 backdrop-blur-md rounded-lg text-white text-xs font-bold uppercase tracking-widest mb-3 w-max border border-white/20">Fitur Baru</div>
          <h3 class="text-2xl md:text-3xl font-extrabold text-white drop-shadow-md mb-2 truncate group-hover:text-fuchsia-100 transition-colors">Scan Barcode</h3>
          <p class="font-body-sm text-sm text-indigo-50 line-clamp-2 opacity-90 group-hover:opacity-100">Pinjam buku instan tanpa harus antri ke pustakawan.</p>
        </div>
        
        <div class="w-12 h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center border border-white/30 z-10 group-hover:bg-white group-hover:text-indigo-600 text-white transition-all duration-300 group-hover:shadow-[0_0_20px_rgba(255,255,255,0.5)]">
            <span class="material-symbols-outlined text-[28px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
        </div>
        
        <!-- Decorative light flares -->
        <div class="absolute -left-10 -top-10 w-40 h-40 bg-white/30 rounded-full blur-3xl z-0 pointer-events-none group-hover:bg-white/40 transition-colors"></div>
        <div class="absolute -right-10 -bottom-10 w-56 h-56 bg-fuchsia-400/40 rounded-full blur-3xl z-0 pointer-events-none"></div>
      </div>

    </div>

    <!-- Active Borrowings Section -->
HTML;
$content = preg_replace($oldScanRegex, $newScan, $content);

// 5. Active Borrowings Header
$content = preg_replace('/<h2 class="font-headline-sm text-headline-sm text-slate-800 flex items-center gap-2">/', '<h2 class="text-2xl font-extrabold text-slate-800 flex items-center gap-3 relative z-10">', $content);

// 6. Ultra Premium Empty State
$oldEmptyRegex = '/<div id="empty-state".*?<\/div>\s*<\/div>/s';
$newEmpty = <<<HTML
<div id="empty-state" class="hidden flex-col items-center justify-center mt-4 w-full bg-white/50 backdrop-blur-2xl border border-white/80 rounded-[40px] p-12 md:p-20 shadow-[0_8px_32px_rgba(31,38,135,0.05)] relative z-10 overflow-hidden">
      <!-- Background floating shapes -->
      <div class="absolute top-10 left-10 w-32 h-32 bg-indigo-200/50 rounded-full blur-2xl animate-[pulse_4s_infinite]"></div>
      <div class="absolute bottom-10 right-10 w-40 h-40 bg-purple-200/50 rounded-full blur-2xl animate-[pulse_5s_infinite]"></div>
      
      <div class="w-32 h-32 mb-8 rounded-[32px] bg-gradient-to-tr from-white to-indigo-50 border border-white shadow-[0_10px_30px_rgba(99,102,241,0.15)] flex items-center justify-center relative transform rotate-3 hover:rotate-0 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-br from-indigo-100/50 to-purple-100/50 rounded-[32px] blur-md -z-10"></div>
          <span class="material-symbols-outlined text-[64px] text-transparent bg-clip-text bg-gradient-to-br from-indigo-500 to-purple-500">book_4</span>
          
          <!-- Sparkles -->
          <span class="material-symbols-outlined absolute -top-4 -right-4 text-yellow-400 text-2xl animate-bounce">sparkles</span>
      </div>
      <h3 class="text-2xl md:text-3xl text-slate-800 font-extrabold mb-4 text-center">Ruang Baca Anda Masih Kosong</h3>
      <p class="font-body-md text-base md:text-lg text-slate-500 text-center max-w-md leading-relaxed mb-10">
          Dunia pengetahuan menanti Anda. Jelajahi ribuan koleksi buku menarik kami dan mulailah petualangan baru hari ini.
      </p>
      <a href="{{ route('katalog') }}" class="group relative px-10 py-4 rounded-full bg-slate-900 text-white font-bold text-base shadow-[0_10px_30px_rgba(0,0,0,0.2)] hover:-translate-y-1 transition-all flex items-center gap-3 overflow-hidden">
          <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 via-purple-600 to-indigo-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500 background-animate"></div>
          <span class="material-symbols-outlined text-[24px] relative z-10 group-hover:rotate-12 transition-transform">travel_explore</span>
          <span class="relative z-10">Jelajahi Katalog</span>
      </a>
    </div>
HTML;
$content = preg_replace($oldEmptyRegex, $newEmpty, $content);

// 7. Add CSS animations in the head for background-animate and shimmer
$cssAnimations = <<<HTML
<style>
  @keyframes shimmer {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
  }
  .background-animate {
    background-size: 200% 200%;
    animation: gradient-flow 5s ease infinite;
  }
  @keyframes gradient-flow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }
</style>
</head>
HTML;
$content = str_replace('</head>', $cssAnimations, $content);

file_put_contents($file, $content);
echo "Ultra Premium Redesign Applied.";
