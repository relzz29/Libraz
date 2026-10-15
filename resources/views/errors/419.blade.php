<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
  <title>419 - Sesi Kedaluwarsa | Libraz</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800;900&family=Space+Grotesk:wght@700;800&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: #fcfbf9;
      background-image: radial-gradient(#d4d4d8 1.5px, transparent 1.5px);
      background-size: 20px 20px;
    }
  </style>
</head>
<body class="min-h-screen text-slate-900 flex items-center justify-center p-4">

  <div class="max-w-md w-full bg-white border-4 border-black rounded-3xl p-6 sm:p-8 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] text-center relative overflow-hidden">
    
    <!-- TOP ACCENT BADGE -->
    <div class="inline-flex items-center gap-2 border-2 border-black bg-[#ffea79] px-3.5 py-1.5 rounded-full shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] font-black text-xs text-black mb-5">
      <span>⏱️ TOKEN EXPIRED</span>
      <span class="bg-black text-white text-[10px] font-black px-2 py-0.5 rounded-full">KODE 419</span>
    </div>

    <!-- ICON -->
    <div class="w-20 h-20 mx-auto rounded-2xl bg-[#ff5252] border-4 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] flex items-center justify-center text-white mb-5 rotate-[-3deg]">
      <span class="material-symbols-outlined text-[42px]">history</span>
    </div>

    <!-- TITLE -->
    <h1 class="text-2xl sm:text-3xl font-black text-black tracking-tight leading-tight mb-2">
      Sesi Halaman Kedaluwarsa
    </h1>

    <p class="text-xs sm:text-sm text-gray-600 font-semibold mb-6 leading-relaxed">
      Halaman ini sudah terlalu lama tidak aktif demi menjaga keamanan data perpustakaan. Token keamanan telah disiapkan ulang, silakan klik tombol di bawah untuk melanjutkan.
    </p>

    <!-- AUTO RELOAD NOTICE -->
    <div class="border-2 border-black bg-[#e0f2fe] rounded-xl p-3 mb-6 shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] flex items-center justify-between text-xs font-bold text-black">
      <span class="flex items-center gap-2">
        <span class="material-symbols-outlined text-[18px] text-[#0284c7]">autorenew</span>
        <span>Memuat ulang otomatis dalam:</span>
      </span>
      <span id="countdown" class="bg-white border-2 border-black px-2 py-0.5 rounded-lg font-black text-[#0284c7]">5s</span>
    </div>

    <!-- ACTION BUTTONS -->
    <div class="flex flex-col gap-3">
      <button onclick="handleReload()" class="w-full bg-[#6700bb] hover:bg-[#55009e] text-white font-black text-sm py-3 px-4 rounded-xl border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] active:translate-x-0.5 active:translate-y-0.5 flex items-center justify-center gap-2 cursor-pointer transition-all">
        <span class="material-symbols-outlined text-[18px]">refresh</span>
        <span>Segarkan Halaman & Coba Lagi</span>
      </button>

      <a href="{{ route('admin.login') }}" class="w-full bg-white hover:bg-gray-50 text-black font-black text-sm py-2.5 px-4 rounded-xl border-2 border-black shadow-[3px_3px_0px_0px_rgba(0,0,0,1)] active:translate-x-0.5 active:translate-y-0.5 flex items-center justify-center gap-2 transition-all">
        <span class="material-symbols-outlined text-[18px]">lock</span>
        <span>Ke Halaman Login Admin</span>
      </a>

      <a href="{{ route('katalog') }}" class="text-xs font-bold text-gray-500 hover:text-black hover:underline mt-2 flex items-center justify-center gap-1">
        <span>← Kembali ke Tampilan Siswa</span>
      </a>
    </div>

  </div>

  <script>
    let secondsLeft = 5;
    const cdEl = document.getElementById('countdown');

    function handleReload() {
      // If previous page was login, go there with a clean refresh
      if (document.referrer && document.referrer.includes('/admin')) {
        window.location.href = document.referrer;
      } else {
        window.location.href = "{{ route('admin.login') }}";
      }
    }

    const timer = setInterval(() => {
      secondsLeft--;
      if (cdEl) cdEl.textContent = secondsLeft + 's';
      if (secondsLeft <= 0) {
        clearInterval(timer);
        handleReload();
      }
    }, 1000);
  </script>

</body>
</html>
