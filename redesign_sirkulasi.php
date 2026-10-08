<?php
$file = __DIR__ . '/resources/views/sirkulasi.blade.php';
$content = file_get_contents($file);

// 1. Update Main Background
$content = str_replace(
    '<main class="flex flex-col relative w-full md:w-[calc(100%-16rem)] md:ml-64 pt-20 pb-24 md:pb-8 bg-surface min-h-screen px-margin">',
    '<main class="flex flex-col relative w-full md:w-[calc(100%-16rem)] md:ml-64 pt-20 pb-24 md:pb-8 bg-gradient-to-br from-indigo-50/50 via-white to-purple-50/50 min-h-screen px-margin relative overflow-hidden">
    <!-- Ambient glowing blobs -->
    <div class="fixed top-20 right-0 w-96 h-96 bg-purple-300/20 rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="fixed bottom-0 left-64 w-96 h-96 bg-indigo-300/20 rounded-full blur-3xl pointer-events-none -z-10"></div>',
    $content
);

// 2. Update Quota Card
$oldQuota = <<<'HTML'
      <div class="bg-surface-container-lowest rounded-2xl p-space-md shadow-[3px_3px_0px_#1c1b20] border border-surface-container-high flex flex-col justify-between relative overflow-hidden transition-transform hover:-translate-y-0.5">
        <div class="flex justify-between items-start mb-4 relative z-10">
          <div class="flex items-center gap-3">
            <div class="w-12 h-12 rounded-xl bg-primary-fixed flex items-center justify-center text-primary shadow-[2px_2px_0px_#1c1b20]">
              <span class="material-symbols-outlined">auto_stories</span>
            </div>
            <div>
              <div class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Status Akun</div>
              <div class="font-title-md text-title-md text-on-surface">Kuota Peminjaman</div>
            </div>
          </div>
          <div class="bg-primary-fixed px-3 py-1 rounded-full text-primary font-label-md text-label-md shadow-sm" id="quota-text">
            0/5 Buku
          </div>
        </div>
        <div class="w-full bg-surface-container h-2 rounded-full overflow-hidden mb-3 relative z-10">
          <div class="h-full bg-primary rounded-full transition-all duration-500" id="quota-bar" style="width: 0%"></div>
        </div>
        <div class="flex justify-between font-body-sm text-body-sm text-on-surface-variant font-medium relative z-10">
          <span id="quota-left">Sisa kapasitas: 5 buku lagi</span>
          <span>Maks 14 hari/pinjam</span>
        </div>
        <!-- Decorative bg pattern -->
        <span class="material-symbols-outlined absolute -right-6 -bottom-6 text-[120px] text-surface-container opacity-50 z-0 pointer-events-none">book_4</span>
      </div>
HTML;
$newQuota = <<<'HTML'
      <div class="bg-white/70 backdrop-blur-xl rounded-[32px] p-8 border border-white/60 shadow-xl shadow-indigo-100/40 flex flex-col justify-between relative overflow-hidden transition-transform hover:-translate-y-1">
        <div class="flex justify-between items-start mb-6 relative z-10">
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-indigo-100 to-purple-100 flex items-center justify-center text-indigo-600 shadow-inner">
              <span class="material-symbols-outlined text-[28px]">auto_stories</span>
            </div>
            <div>
              <div class="font-label-sm text-label-sm text-slate-500 uppercase tracking-widest mb-0.5">Status Akun</div>
              <div class="font-title-md text-title-md text-slate-800">Kuota Peminjaman</div>
            </div>
          </div>
          <div class="bg-indigo-600/10 px-4 py-1.5 rounded-full text-indigo-700 font-label-md text-label-md font-bold" id="quota-text">
            0/5 Buku
          </div>
        </div>
        <div class="w-full bg-indigo-50 h-3 rounded-full overflow-hidden mb-4 relative z-10 shadow-inner">
          <div class="h-full bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full transition-all duration-700 relative overflow-hidden" id="quota-bar" style="width: 0%">
            <!-- subtle shine -->
            <div class="absolute inset-0 bg-gradient-to-b from-white/30 to-transparent"></div>
          </div>
        </div>
        <div class="flex justify-between font-body-sm text-body-sm text-slate-500 font-medium relative z-10">
          <span id="quota-left">Sisa kapasitas: 5 buku lagi</span>
          <span>Maks 14 hari/pinjam</span>
        </div>
        <!-- Ambient shapes -->
        <div class="absolute -right-6 -bottom-6 w-32 h-32 bg-indigo-200/40 rounded-full blur-3xl z-0 pointer-events-none"></div>
      </div>
HTML;
$content = str_replace($oldQuota, $newQuota, $content);

// 3. Update Scan Card
$oldScan = <<<'HTML'
      <div class="bg-primary text-on-primary rounded-2xl p-space-md shadow-[3px_3px_0px_#1c1b20] flex items-center gap-space-md cursor-pointer transition-transform hover:-translate-y-0.5 active:translate-y-0" onclick="window.location.href='{{ route('scanner') }}'">
        <div class="w-14 h-14 bg-on-primary/20 rounded-xl flex items-center justify-center flex-shrink-0">
          <span class="material-symbols-outlined text-[32px]">document_scanner</span>
        </div>
        <div class="flex flex-col min-w-0">
          <h3 class="font-title-md text-title-md mb-1 truncate">Scan Barcode Buku</h3>
          <p class="font-body-sm text-body-sm text-on-primary/80 line-clamp-2">Self-checkout untuk pinjam mandiri di perpustakaan tanpa antri</p>
        </div>
        <span class="material-symbols-outlined ml-auto text-[24px] flex-shrink-0">chevron_right</span>
      </div>
HTML;
$newScan = <<<'HTML'
      <div class="bg-gradient-to-br from-indigo-600 to-violet-700 text-white rounded-[32px] p-8 shadow-xl shadow-indigo-200/50 border border-indigo-400/30 flex items-center gap-6 cursor-pointer transition-transform hover:-translate-y-1 relative overflow-hidden group" onclick="window.location.href='{{ route('scanner') }}'">
        <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center flex-shrink-0 shadow-inner group-hover:scale-110 transition-transform duration-300">
          <span class="material-symbols-outlined text-[32px] text-white drop-shadow-md">document_scanner</span>
        </div>
        <div class="flex flex-col min-w-0 relative z-10">
          <h3 class="font-headline-sm text-headline-sm md:text-xl mb-1.5 truncate font-bold text-white drop-shadow-sm">Scan Barcode Buku</h3>
          <p class="font-body-sm text-sm text-indigo-100 line-clamp-2 drop-shadow-sm">Self-checkout instan untuk pinjam mandiri tanpa antri</p>
        </div>
        <span class="material-symbols-outlined ml-auto text-[32px] flex-shrink-0 text-white/80 group-hover:translate-x-1 transition-transform relative z-10">chevron_right</span>
        <!-- Ambient shapes -->
        <div class="absolute -right-10 -top-10 w-40 h-40 bg-white/10 rounded-full blur-2xl z-0 pointer-events-none"></div>
        <div class="absolute -left-10 -bottom-10 w-40 h-40 bg-purple-500/20 rounded-full blur-2xl z-0 pointer-events-none"></div>
      </div>
HTML;
$content = str_replace($oldScan, $newScan, $content);

// 4. Update Header "Peminjaman Aktif"
$content = str_replace(
    '<h2 class="font-headline-sm text-headline-sm text-on-surface flex items-center gap-2">',
    '<h2 class="font-headline-sm text-headline-sm text-slate-800 flex items-center gap-2">',
    $content
);
$content = str_replace(
    '<span class="bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm px-2 py-0.5 rounded-full" id="active-count">0</span>',
    '<span class="bg-indigo-100 text-indigo-700 font-label-sm text-label-sm px-2.5 py-1 rounded-full shadow-sm" id="active-count">0</span>',
    $content
);

// 5. Update Loading & Empty State
$oldEmpty = <<<'HTML'
    <div id="loading-indicator" class="flex flex-col items-center justify-center p-12 text-on-surface-variant mt-8 bg-surface-container-lowest rounded-2xl shadow-sm border border-surface-container-high">
      <span class="material-symbols-outlined text-4xl animate-spin mb-3">refresh</span>
      <p class="font-body-sm text-body-sm">Memuat data peminjaman...</p>
    </div>

    <div id="empty-state" class="hidden bg-surface-container-lowest rounded-2xl p-8 text-center border border-surface-container-high shadow-sm flex-col items-center justify-center mt-4">
      <div class="w-16 h-16 bg-surface-container flex items-center justify-center rounded-full mb-4">
        <span class="material-symbols-outlined text-[32px] text-on-surface-variant">book</span>
      </div>
      <h3 class="font-title-md text-title-md text-on-surface mb-2">Belum ada peminjaman aktif</h3>
      <p class="font-body-sm text-body-sm text-on-surface-variant mb-6">Jelajahi katalog kami dan temukan buku menarik untuk dibaca hari ini.</p>
      <a href="{{ route('katalog') }}" class="bg-primary text-on-primary px-6 py-2.5 rounded-xl font-label-md text-label-md shadow-[2px_2px_0px_#1c1b20] hover:bg-primary-container hover:text-on-primary-container active:translate-y-0.5 transition-all w-full flex items-center justify-center gap-2">
        <span class="material-symbols-outlined text-[20px]">search</span>
        Cari Buku
      </a>
    </div>
HTML;
$newEmpty = <<<'HTML'
    <div id="loading-indicator" class="flex flex-col items-center justify-center p-12 text-slate-400 mt-6 bg-white/40 backdrop-blur-md rounded-[32px] border border-white/60 shadow-sm">
      <span class="material-symbols-outlined text-4xl animate-spin mb-4 text-indigo-400">refresh</span>
      <p class="font-body-sm text-sm font-medium">Memuat data peminjaman...</p>
    </div>

    <div id="empty-state" class="hidden flex-col items-center justify-center mt-6 w-full bg-white/40 backdrop-blur-xl border border-white/60 rounded-[32px] p-10 md:p-16 shadow-lg shadow-indigo-100/30">
      <div class="w-24 h-24 mb-6 rounded-full bg-gradient-to-tr from-indigo-100 to-purple-50 flex items-center justify-center shadow-inner relative">
          <div class="absolute inset-0 bg-white/50 rounded-full blur-md"></div>
          <span class="material-symbols-outlined text-[48px] text-indigo-400 relative z-10">book</span>
      </div>
      <h3 class="font-title-md text-xl md:text-2xl text-slate-700 font-bold mb-2">Belum ada peminjaman aktif</h3>
      <p class="font-body-sm text-sm md:text-base text-slate-500 text-center max-w-sm leading-relaxed mb-8">
          Jelajahi katalog kami dan temukan buku menarik untuk dibaca hari ini.
      </p>
      <a href="{{ route('katalog') }}" class="px-8 py-3 rounded-full bg-indigo-600 hover:bg-indigo-700 text-white font-label-md text-sm shadow-md shadow-indigo-200 hover:-translate-y-0.5 transition-all flex items-center gap-2">
          <span class="material-symbols-outlined text-[20px]">search</span>
          Cari Buku
      </a>
    </div>
HTML;
$content = str_replace($oldEmpty, $newEmpty, $content);

// 6. Update JS Card generation
$content = str_replace(
    'card.className = `bg-surface-container-lowest rounded-xl p-space-md shadow-[3px_3px_0px_#1c1b20] flex flex-col gap-space-md ${isLate ? \'border-2 border-error\' : \'\'}`;',
    'card.className = `bg-white/70 backdrop-blur-xl rounded-[24px] p-6 shadow-xl shadow-indigo-100/50 border border-white/60 flex flex-col gap-space-md transition-all hover:shadow-2xl hover:-translate-y-1 ${isLate ? \'border-2 border-red-500 shadow-red-200/50\' : \'\'}`;',
    $content
);

$content = str_replace(
    'shadow-[2px_2px_0px_#1c1b20] bg-surface-container',
    'shadow-md shadow-indigo-200/50 border border-white/50 bg-slate-100',
    $content
);

$content = str_replace(
    '<button class="bg-error text-on-error px-4 py-2 rounded-xl font-label-md text-label-md shadow-[2px_2px_0px_#1c1b20] active:translate-y-0.5 transition-all">',
    '<button class="bg-gradient-to-r from-red-500 to-rose-600 hover:from-red-600 hover:to-rose-700 text-white px-5 py-2.5 rounded-full font-label-md text-label-md shadow-md shadow-red-200 hover:-translate-y-0.5 transition-all">',
    $content
);

$content = str_replace(
    '<button onclick="selesaiBaca(${borrowing.id})" class="flex-1 bg-surface-container text-on-surface px-2 py-2.5 rounded-xl font-label-md text-label-md shadow-sm active:translate-y-0.5 transition-all hover:bg-surface-container-high flex justify-center items-center gap-1 border border-surface-container-high">',
    '<button onclick="selesaiBaca(${borrowing.id})" class="flex-1 bg-white/80 hover:bg-white text-slate-700 px-4 py-2.5 rounded-full font-label-md text-label-md shadow-sm border border-slate-200 hover:border-slate-300 hover:shadow-md transition-all flex justify-center items-center gap-1.5">',
    $content
);

$content = str_replace(
    'class="flex-1 bg-secondary text-on-secondary px-2 py-2.5 rounded-xl font-label-md text-label-md flex items-center justify-center gap-1 shadow-[2px_2px_0px_#1c1b20] active:translate-y-0.5 transition-all ${!isRenewable ? \'opacity-50 cursor-not-allowed\' : \'hover:bg-secondary-fixed-dim\'}"',
    'class="flex-1 bg-gradient-to-r from-teal-500 to-emerald-500 text-white px-4 py-2.5 rounded-full font-label-md text-label-md flex items-center justify-center gap-1.5 shadow-md shadow-teal-200 transition-all ${!isRenewable ? \'opacity-50 cursor-not-allowed\' : \'hover:from-teal-600 hover:to-emerald-600 hover:-translate-y-0.5\'}"',
    $content
);

file_put_contents($file, $content);
echo "Sirkulasi Redesigned.";
