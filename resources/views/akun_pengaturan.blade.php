<!DOCTYPE html>

<html lang="id"><head><meta charset="utf-8"/><meta name="csrf-token" content="{{ csrf_token() }}"/><meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/><link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;family=Space+Grotesk:wght@700&amp;display=swap" rel="stylesheet"/><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/><style>@layer base{html,body{width:100vw;margin:0;padding:0;}body{overscroll-behavior:none;}.pb-safe{padding-bottom:env(safe-area-inset-bottom,0px);}.pt-safe{padding-top:env(safe-area-inset-top,0px);}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com"></script><script id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { "colors": { "on-primary-fixed": "#1e0060", "on-primary-fixed-variant": "#4c00d3", "surface-container-highest": "#e5e1e8", "on-error": "#ffffff", "on-error-container": "#93000a", "surface-container": "#f1ecf4", "surface-container-high": "#ebe6ee", "on-tertiary-fixed": "#40000f", "on-secondary-fixed": "#002112", "secondary-fixed": "#4dffb2", "on-tertiary": "#ffffff", "on-surface": "#1c1b20", "surface-variant": "#e5e1e8", "surface-container-low": "#f7f2f9", "on-primary-container": "#cfc1ff", "on-surface-variant": "#484456", "background": "#fdf8ff", "inverse-primary": "#ccbeff", "inverse-on-surface": "#f4eff6", "tertiary-container": "#ac0036", "error-container": "#ffdad6", "primary": "#4300bb", "on-secondary-container": "#007149", "surface-tint": "#6531f0", "secondary-fixed-dim": "#00e296", "secondary": "#006c46", "surface-dim": "#ddd8e0", "tertiary-fixed-dim": "#ffb2b8", "tertiary-fixed": "#ffdadb", "on-background": "#1c1b20", "secondary-container": "#43fcae", "tertiary": "#800026", "inverse-surface": "#313035", "primary-fixed-dim": "#ccbeff", "primary-fixed": "#e7deff", "on-secondary": "#ffffff", "error": "#ba1a1a", "surface-container-lowest": "#ffffff", "primary-container": "#5b21e6", "surface": "#fdf8ff", "outline": "#797488", "surface-bright": "#fdf8ff", "on-secondary-fixed-variant": "#005234", "on-primary": "#ffffff", "on-tertiary-fixed-variant": "#91002c", "outline-variant": "#cac3d9", "on-tertiary-container": "#ffb7bc" }, "borderRadius": { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" }, "spacing": { "space-xs": "0.25rem", "gutter-sm": "0.75rem", "space-lg": "1.25rem", "margin": "1.25rem", "gutter": "1rem", "margin-desktop": "2.5rem", "space-md": "0.875rem", "space-sm": "0.5rem", "space-xl": "2rem" }, "fontFamily": { "title-md": ["Plus Jakarta Sans"], "headline-lg-mobile": ["Plus Jakarta Sans"], "headline-md": ["Plus Jakarta Sans"], "display-lg": ["Plus Jakarta Sans"], "body-sm": ["Plus Jakarta Sans"], "label-sm": ["Space Grotesk"], "headline-sm": ["Plus Jakarta Sans"], "headline-lg": ["Plus Jakarta Sans"], "label-lg": ["Space Grotesk"], "body-lg": ["Plus Jakarta Sans"], "body-md": ["Plus Jakarta Sans"], "label-md": ["Space Grotesk"] }, "fontSize": { "title-md": ["16px", {"lineHeight": "22px", "fontWeight": "700"}], "headline-lg-mobile": ["26px", {"lineHeight": "32px", "fontWeight": "800"}], "headline-md": ["22px", {"lineHeight": "28px", "fontWeight": "700"}], "display-lg": ["38px", {"lineHeight": "44px", "fontWeight": "800"}], "body-sm": ["12px", {"lineHeight": "18px", "fontWeight": "400"}], "label-sm": ["10px", {"lineHeight": "12px", "fontWeight": "700"}], "headline-sm": ["18px", {"lineHeight": "24px", "fontWeight": "700"}], "headline-lg": ["30px", {"lineHeight": "36px", "fontWeight": "800"}], "label-lg": ["13px", {"lineHeight": "16px", "fontWeight": "700"}], "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "500"}], "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "500"}], "label-md": ["11px", {"lineHeight": "14px", "fontWeight": "700"}] } } } }</script>
  </head><body class="bg-surface font-body-md text-body-md text-on-surface flex flex-col min-h-screen relative overflow-x-hidden">
  <!-- Aesthetic Blurred Blobs Background (Gen Z Vibe) -->
  <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
    <div class="absolute -top-20 -left-20 w-72 h-72 bg-primary/20 rounded-full blur-[100px]"></div>
    <div class="absolute top-40 -right-20 w-80 h-80 bg-secondary-fixed/20 rounded-full blur-[100px]"></div>
  </div>
  <header class="fixed top-0 w-full z-50 pt-safe bg-surface/70 backdrop-blur-2xl shadow-[0_4px_30px_rgba(0,0,0,0.03)] border-b border-surface-container-lowest/50"><div class="h-16 px-margin flex items-center justify-between gap-space-sm max-w-2xl mx-auto"><div class="flex items-center gap-space-sm min-w-0"><a aria-label="Kembali ke Akun" class="w-11 h-11 -ml-space-xs rounded-full flex items-center justify-center text-on-surface hover:text-primary hover:bg-surface-container-lowest transition-all focus:outline-none flex-shrink-0 active:scale-90" data-path="akun" href="{{ route('akun') }}"><span class="material-symbols-outlined text-[24px]">arrow_back</span></a><div class="flex flex-col min-w-0"><span class="font-label-sm text-label-sm bg-gradient-to-r from-primary to-surface-tint bg-clip-text text-transparent tracking-wider uppercase truncate font-extrabold">Akun &amp; Pengaturan</span><span class="font-title-md text-title-md text-on-surface truncate">Edit Profil Kamu ✨</span></div></div><div class="flex items-center gap-space-xs flex-shrink-0"><button aria-label="Bantuan" class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors focus:outline-none"><span class="material-symbols-outlined text-[22px]">help_outline</span></button></div></div></header><main class="flex flex-col relative w-full pt-16 pb-24 min-h-screen z-10"><div class="flex flex-col w-full max-w-2xl mx-auto px-margin space-y-space-lg pb-space-xl">


<div id="first-login-alert" class="hidden rounded-xl p-space-md bg-error-container text-on-error-container shadow-sm flex items-start gap-space-sm mb-space-sm mt-4">
    <span class="material-symbols-outlined text-[20px] mt-0.5">warning</span>
    <div class="flex flex-col min-w-0">
        <span class="font-title-md text-title-md text-on-error-container">Wajib Lengkapi Profil</span>
        <span class="font-body-sm text-body-sm mt-0.5 text-on-error-container">Mohon lengkapi email, asal sekolah, bio, dan nomor WhatsApp Anda untuk melanjutkan penggunaan aplikasi perpustakaan.</span>
    </div>
</div>

<!-- Tab Navigation -->
<div class="flex p-1 bg-surface-container-low rounded-xl mb-space-sm shadow-sm relative">
<div id="tab-slider" class="absolute top-1 bottom-1 left-1 w-[calc(50%-4px)] bg-surface-container-lowest rounded-lg shadow-[0_1px_3px_rgba(0,0,0,0.1)] transition-transform duration-300 ease-in-out"></div>
<button id="tab-profil" class="flex-1 py-2.5 font-title-md text-title-md text-primary relative z-10 transition-colors" type="button">Edit Profil</button>
<button id="tab-pengaturan" class="flex-1 py-2.5 font-title-md text-title-md text-on-surface-variant hover:text-on-surface relative z-10 transition-colors" type="button">Pengaturan</button>
</div>

<!-- SECTION: PROFIL -->
<div id="section-profil" class="flex flex-col space-y-space-lg w-full">
<!-- Avatar Management Section -->
<div class="rounded-[32px] p-space-lg bg-surface-container-lowest/80 backdrop-blur-xl border border-surface-container-lowest shadow-[0_8px_30px_rgba(0,0,0,0.04)] flex flex-col items-center text-center relative mt-4">
<div class="relative group cursor-pointer mb-space-sm hover:scale-105 transition-transform duration-300">
<!-- Animated Gradient Ring -->
<div class="absolute -inset-1 bg-gradient-to-r from-primary via-secondary to-surface-tint rounded-full blur opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-pulse"></div>
<div class="relative w-28 h-28 rounded-full p-1 bg-surface-container-lowest shadow-lg">
<img id="profileImage" alt="Nadia Amanda Putri Avatar" class="w-full h-full rounded-full object-cover" src="https://lh3.googleusercontent.com/aida/AEtjO1W_HPwkc87OKpwQaeF0eeJubnlWQPhTSPnD1rZZPK41OSTbmjD3DCj9VMaFv5iI89642M9ArfJhXsP-j8xnT1QK6eEIXp1wgW97HuOAIfaZlXq7y637TAJRgOjJp7-Ifi3zFqL_Z_0iWsU5b5MFhMfCSTEuLUZKyNd0_UcyXG9_kfHDRBFNjfY1iTOWa-Vf5FOWxjuuElrYWWYbCQmiKIMk_6Yrghz0-cjordSutrRV49P_tnGnc18p4YQ"/>
</div>
<button id="btnCamera" aria-label="Ganti Foto Profil" class="absolute bottom-0 right-1 w-9 h-9 rounded-full bg-primary text-on-primary flex items-center justify-center shadow-lg active:scale-90 transition-transform hover:bg-surface-tint border-2 border-surface-container-lowest" type="button">
<span class="material-symbols-outlined text-[18px]">photo_camera</span>
</button>
</div>
<div class="flex flex-wrap items-center justify-center gap-space-xs mb-space-md mt-2">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary/10 text-primary font-label-md text-label-md shadow-sm border border-primary/20">
<span class="text-base">⚡</span> Master Reader
      </span>
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary/10 text-secondary font-label-md text-label-md shadow-sm border border-secondary/20">
<span class="text-base">🏆</span> Top 2%
      </span>
</div>
<!-- Quick Action Pill Buttons -->
<div class="flex items-center justify-center gap-space-sm w-full pt-space-xs">
<button id="btnGaleri" class="flex items-center justify-center gap-2 py-2.5 px-4 rounded-2xl bg-surface-container-low hover:bg-surface-container active:scale-95 transition-all text-on-surface shadow-sm font-label-md text-label-md" type="button">
<span class="material-symbols-outlined text-primary text-[18px]">image</span>
<span>Pilih Galeri</span>
</button>
<button id="btnAvatar" class="flex items-center justify-center gap-2 py-2.5 px-4 rounded-2xl bg-surface-container-low hover:bg-surface-container active:scale-95 transition-all text-on-surface shadow-sm font-label-md text-label-md" type="button">
<span class="material-symbols-outlined text-secondary text-[18px]">sentiment_very_satisfied</span>
<span>Avatar 3D</span>
</button>
<button id="btnHapus" class="flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-2xl bg-error-container/30 hover:bg-error-container active:scale-95 transition-all text-error shadow-sm" type="button" aria-label="Hapus Foto">
<span class="material-symbols-outlined text-[18px]">delete</span>
</button>
</div>
</div>
<!-- Form Edit: Informasi Pribadi & Sekolah -->
<div class="rounded-[32px] p-space-lg bg-surface-container-lowest/80 backdrop-blur-xl shadow-[0_8px_30px_rgba(0,0,0,0.04)] border border-surface-container-lowest flex flex-col space-y-space-md">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-space-xs">
<span class="text-2xl">👩‍🎓</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Data Diri &amp; Sekolah</h2>
</div>
<span class="px-3 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-extrabold shadow-sm">Dapodik Aktif 🟢</span>
</div>
<!-- Field: Nama Lengkap -->
<div class="flex flex-col space-y-1.5">
<label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider ml-2" for="student-name">Nama Lengkap Siswa</label>
<div class="relative flex items-center">
<input class="w-full bg-surface-container-lowest border-2 border-surface-container-high rounded-[20px] px-space-lg py-3.5 font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all" id="student-name" type="text" value="Nama Siswa"/>
<span class="material-symbols-outlined text-primary absolute right-space-md text-[20px]">edit</span>
</div>
</div>
<!-- Field: Asal Sekolah -->
<div class="flex flex-col space-y-1.5">
<label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider ml-2" for="student-school">Asal Sekolah</label>
<div class="relative flex items-center">
<input class="w-full bg-surface-container-lowest border-2 border-surface-container-high rounded-[20px] px-space-lg py-3.5 font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all" id="student-school" type="text" value="SMAN 1 Garudapura"/>
<span class="material-symbols-outlined text-primary absolute right-space-md text-[20px]">edit</span>
</div>
</div>
<!-- Field: NISN & Kelas (Locked) -->
<div class="flex flex-col space-y-1.5">
<div class="flex items-center justify-between ml-2">
<label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider" for="student-nisn">NISN &amp; Rombel Kelas</label>
<span class="flex items-center gap-0.5 text-secondary font-label-sm text-label-sm font-bold">
<span class="material-symbols-outlined text-[16px]">verified</span> Terverifikasi
        </span>
</div>
<div class="relative flex items-center opacity-80 cursor-not-allowed">
<input class="w-full bg-surface-container-low border-2 border-surface-container-high rounded-[20px] px-space-lg py-3.5 font-body-md text-body-md text-on-surface cursor-not-allowed" disabled="" id="student-nisn" type="text" value="1238712073 XII MIPA 2"/>
<span class="material-symbols-outlined text-on-surface-variant absolute right-space-md text-[20px]">lock</span>
</div>
<span class="font-body-sm text-body-sm text-outline flex items-center gap-1 mt-1 ml-2">
<span class="material-symbols-outlined text-[14px]">info</span> Terkunci via NISN Pusat
      </span>
</div>
<!-- Field: Bio Siswa -->
<div class="flex flex-col space-y-1.5">
<label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider ml-2" for="student-bio">Bio &amp; Vibe 🌟</label>
<textarea class="w-full bg-surface-container-lowest border-2 border-surface-container-high rounded-[20px] px-space-lg py-3.5 font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all resize-none" id="student-bio" rows="2">Curious reader 🌌 Fisika, Sci-Fi &amp; Filosofi enthusiast ✨</textarea>
</div>
<!-- Field: Email Siswa -->
<div class="flex flex-col space-y-1.5">
<label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider ml-2" for="student-email">Email Sekolah</label>
<div class="relative flex items-center">
<input class="w-full bg-surface-container-lowest border-2 border-surface-container-high rounded-[20px] px-space-lg py-3.5 font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all" id="student-email" type="email" value=""/>
<span class="material-symbols-outlined text-primary absolute right-space-md text-[20px]">alternate_email</span>
</div>
</div>
<!-- Field: WhatsApp / Kontak -->
<div class="flex flex-col space-y-1.5">
<label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider ml-2" for="student-wa">No. WhatsApp (Pengingat) 📱</label>
<div class="relative flex items-center">
<div class="absolute left-space-md flex items-center gap-1 pointer-events-none">
<span class="font-label-md text-label-md text-on-surface-variant font-bold">+62</span>
</div>
<input class="w-full bg-surface-container-lowest border-2 border-surface-container-high rounded-[20px] pl-[52px] pr-space-lg py-3.5 font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all" id="student-wa" type="tel" value="81288904421"/>
<span class="material-symbols-outlined text-secondary absolute right-space-md text-[20px]">mark_chat_unread</span>
</div>
</div>
</div>
<!-- Kategori Minat Baca & Feed AI -->
<div class="rounded-[32px] p-space-lg bg-surface-container-lowest/80 backdrop-blur-xl shadow-[0_8px_30px_rgba(0,0,0,0.04)] border border-surface-container-lowest flex flex-col space-y-space-md">
<div>
<div class="flex items-center gap-space-xs mb-1">
<span class="text-2xl">🧠</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Minat Baca &amp; FYP</h2>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">Pilih genre favorit untuk kurasi FYP (For Your Page) dan rekomendasi pintar AI.</p>
</div>
<!-- Selected Tags -->
<div class="flex flex-col space-y-space-sm">
<span class="font-label-sm text-label-sm uppercase text-primary font-extrabold tracking-wider ml-1">Genre Favorit Kamu 💖</span>
<div class="flex flex-wrap gap-2">
<button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-gradient-to-r from-primary to-surface-tint text-on-primary font-label-md text-label-md active:scale-95 transition-all shadow-md shadow-primary/30" type="button">
<span class="text-base">🚀</span> Sains &amp; Astronomi
          <span class="material-symbols-outlined text-[16px] font-bold">check</span>
</button>
<button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-gradient-to-r from-primary to-surface-tint text-on-primary font-label-md text-label-md active:scale-95 transition-all shadow-md shadow-primary/30" type="button">
<span class="text-base">💡</span> Filosofi &amp; Mindset
          <span class="material-symbols-outlined text-[16px] font-bold">check</span>
</button>
<button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-gradient-to-r from-primary to-surface-tint text-on-primary font-label-md text-label-md active:scale-95 transition-all shadow-md shadow-primary/30" type="button">
<span class="text-base">📖</span> Sastra &amp; Fiksi
          <span class="material-symbols-outlined text-[16px] font-bold">check</span>
</button>
</div>
</div>
<!-- Unselected Tags -->
<div class="flex flex-col space-y-space-sm pt-space-xs">
<span class="font-label-sm text-label-sm uppercase text-on-surface-variant font-bold tracking-wider ml-1">Eksplor Genre Lain 👀</span>
<div class="flex flex-wrap gap-2">
<button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-surface-container text-on-surface font-label-md text-label-md hover:bg-surface-container-high active:scale-95 transition-all border border-surface-container-highest" type="button">
<span class="text-base">🤖</span> Teknologi &amp; AI
          <span class="material-symbols-outlined text-[16px] text-outline">add</span>
</button>
<button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-surface-container text-on-surface font-label-md text-label-md hover:bg-surface-container-high active:scale-95 transition-all border border-surface-container-highest" type="button">
<span class="text-base">🏛️</span> Sejarah Dunia
          <span class="material-symbols-outlined text-[16px] text-outline">add</span>
</button>
<button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-surface-container text-on-surface font-label-md text-label-md hover:bg-surface-container-high active:scale-95 transition-all border border-surface-container-highest" type="button">
<span class="text-base">🎨</span> Komik &amp; Webtoon
          <span class="material-symbols-outlined text-[16px] text-outline">add</span>
</button>
<button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-surface-container text-on-surface font-label-md text-label-md hover:bg-surface-container-high active:scale-95 transition-all border border-surface-container-highest" type="button">
<span class="text-base">📈</span> Bisnis &amp; Cuang
          <span class="material-symbols-outlined text-[16px] text-outline">add</span>
</button>
</div>
</div>
</div>

<!-- Primary CTA & Action Section -->
<div class="flex flex-col space-y-space-sm pt-space-xs sticky bottom-24 z-40 px-2">
<button id="btnSimpan" class="w-full h-[60px] rounded-[30px] bg-gradient-to-r from-primary via-surface-tint to-primary text-on-primary font-headline-sm text-headline-sm shadow-[0_8px_30px_rgba(67,0,187,0.4)] flex items-center justify-center gap-space-sm hover:scale-[1.02] active:scale-95 transition-all duration-300" type="button">
<span>Simpan Perubahan ✨</span>
</button>
</div>
</div>

<!-- SECTION: PENGATURAN -->
<div id="section-pengaturan" class="hidden flex flex-col space-y-space-lg w-full">
<!-- Pengaturan Notifikasi & Pengingat Sirkulasi -->
<div class="rounded-2xl p-space-lg bg-surface-container-lowest shadow-sm flex flex-col space-y-space-md">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-[20px]">notifications_active</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Notifikasi &amp; Sirkulasi</h2>
</div>
<!-- Toggle 1 -->
<div class="flex items-center justify-between py-1">
<div class="flex flex-col pr-space-sm">
<span class="font-title-md text-title-md text-on-surface">Pengingat H-2 Tenggat Kembali</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Kirim peringatan via Push Notif &amp; WhatsApp</span>
</div>
<button aria-checked="true" class="w-12 h-7 rounded-full bg-primary flex items-center p-0.5 cursor-pointer transition-colors justify-end" role="switch" type="button">
<span class="w-6 h-6 rounded-full bg-on-primary shadow-md transform transition-transform"></span>
</button>
</div>
<!-- Toggle 2 -->
<div class="flex items-center justify-between py-1">
<div class="flex flex-col pr-space-sm">
<span class="font-title-md text-title-md text-on-surface">Auto-Hold Buku Incaran</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Saat antrean reservasi siap di Loker Smart</span>
</div>
<button aria-checked="true" class="w-12 h-7 rounded-full bg-primary flex items-center p-0.5 cursor-pointer transition-colors justify-end" role="switch" type="button">
<span class="w-6 h-6 rounded-full bg-on-primary shadow-md transform transition-transform"></span>
</button>
</div>
<!-- Toggle 3 -->
<div class="flex items-center justify-between py-1">
<div class="flex flex-col pr-space-sm">
<span class="font-title-md text-title-md text-on-surface">Daily Reading Streak</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Pengingat baca harian pukul 19:30 WIB</span>
</div>
<button aria-checked="true" class="w-12 h-7 rounded-full bg-primary flex items-center p-0.5 cursor-pointer transition-colors justify-end" role="switch" type="button">
<span class="w-6 h-6 rounded-full bg-on-primary shadow-md transform transition-transform"></span>
</button>
</div>
<!-- Toggle 4 -->
<div class="flex items-center justify-between py-1">
<div class="flex flex-col pr-space-sm">
<span class="font-title-md text-title-md text-on-surface">Katalog Baru &amp; Rekomendasi</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Buletin berkala kurasi buku mingguan</span>
</div>
<button aria-checked="false" class="w-12 h-7 rounded-full bg-surface-container-high flex items-center p-0.5 cursor-pointer transition-colors justify-start" role="switch" type="button">
<span class="w-6 h-6 rounded-full bg-on-primary shadow-md transform transition-transform"></span>
</button>
</div>
</div>
<!-- Keamanan, Integrasi & Preferensi -->
<div class="rounded-2xl p-space-lg bg-surface-container-lowest shadow-sm flex flex-col space-y-space-md">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-[20px]">security</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Keamanan &amp; Tampilan</h2>
</div>
<!-- Ubah PIN -->
<button class="w-full flex items-center justify-between py-space-xs text-left active:bg-surface-container-low rounded-xl px-1 transition-colors" type="button">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-xl bg-surface-container flex items-center justify-center text-on-surface">
<span class="material-symbols-outlined text-[20px]">password</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface">Ubah PIN Masuk / Sandi</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Terakhir diperbarui 24 hari lalu</span>
</div>
</div>
<span class="material-symbols-outlined text-outline text-[20px]">chevron_right</span>
</button>
<!-- Biometric Toggle -->
<div class="flex items-center justify-between py-1">
<div class="flex items-center gap-space-sm pr-space-sm">
<div class="w-10 h-10 rounded-xl bg-surface-container flex items-center justify-center text-on-surface">
<span class="material-symbols-outlined text-[20px]">fingerprint</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface">Biometrik &amp; Face Unlock</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Akses instan peminjaman buku</span>
</div>
</div>
<button aria-checked="true" class="w-12 h-7 rounded-full bg-primary flex items-center p-0.5 cursor-pointer transition-colors justify-end" role="switch" type="button">
<span class="w-6 h-6 rounded-full bg-on-primary shadow-md transform transition-transform"></span>
</button>
</div>
<!-- Dapodik Sync Row -->
<div class="flex items-center justify-between py-1">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-xl bg-surface-container flex items-center justify-center text-on-surface">
<span class="material-symbols-outlined text-[20px]">sync</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface">Sinkronisasi Absensi</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Portal Satu Data Garudapura</span>
</div>
</div>
<span class="px-space-sm py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-bold flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Terhubung
      </span>
</div>
<!-- Theme Segmented Control -->
<div class="flex flex-col space-y-1.5 pt-space-xs">
<span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Tema Aplikasi</span>
<div class="grid grid-cols-3 gap-1 bg-surface-container p-1 rounded-xl">
<button class="py-2 rounded-lg bg-surface-container-lowest text-primary font-label-md text-label-md shadow-sm flex items-center justify-center gap-1 transition-all" type="button">
<span>☀️</span> Terang
        </button>
<button class="py-2 rounded-lg text-on-surface-variant font-label-md text-label-md flex items-center justify-center gap-1 hover:text-on-surface transition-all" type="button">
<span>🌙</span> Gelap
        </button>
<button class="py-2 rounded-lg text-on-surface-variant font-label-md text-label-md flex items-center justify-center gap-1 hover:text-on-surface transition-all" type="button">
<span>⚙️</span> Otomatis
        </button>
</div>
</div>
</div>

<div class="flex flex-col space-y-space-sm pt-space-xs">
<button id="btnLogout" class="w-full h-12 rounded-2xl bg-surface-container-low hover:bg-error-container/20 text-error font-title-md text-title-md flex items-center justify-center gap-space-xs active:scale-98 transition-colors" type="button">
<span class="material-symbols-outlined text-[20px]">logout</span>
<span>Keluar dari Akun (Logout)</span>
</button>
<!-- Version & Identity Footer -->
<div class="pt-space-md text-center">
<p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
        BiblioZ v2.4 • Platform Perpustakaan SMAN 1 Garudapura
      </p>
<p class="font-body-sm text-body-sm text-outline mt-0.5">
        Terhubung ke Sistem Informasi Literasi Nasional &amp; Kemendikdasmen
      </p>
</div>
</div>
</div>
</div></main><nav class="fixed bottom-0 w-full z-50 pb-safe bg-surface/85 backdrop-blur-xl shadow-[0_-2px_12px_rgba(0,0,0,0.05)]" data-active-classes="bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]"><div class="flex items-center justify-around h-16 px-space-xs max-w-md mx-auto"><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="katalog-buku" href="{{ route('katalog') }}"><span class="material-symbols-outlined text-[22px]">menu_book</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Katalog</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="sirkulasi-peminjaman" href="{{ route('sirkulasi') }}"><span class="material-symbols-outlined text-[22px]">sync_alt</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Sirkulasi</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="petugas-statistik" href="{{ route('statistik') }}"><span class="material-symbols-outlined text-[22px]">analytics</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Statistik</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="akun" href="{{ route('akun') }}"><span class="material-symbols-outlined text-[22px]">person</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Akun</span></a></div></nav>

<input type="file" id="fileUpload" style="opacity: 0; position: absolute; z-index: -1;" accept="image/*" />
<script>
  // Fetch User Data from API & Initialize Profile Actions
  document.addEventListener('DOMContentLoaded', async () => {
    const profileImage = document.getElementById('profileImage');
    const btnGaleri = document.getElementById('btnGaleri');
    const btnAvatar = document.getElementById('btnAvatar');
    const btnHapus = document.getElementById('btnHapus');
    const btnCamera = document.getElementById('btnCamera');
    const fileUpload = document.getElementById('fileUpload');
    
    let defaultAvatar = 'https://ui-avatars.com/api/?name=' + encodeURIComponent('Nama Siswa') + '&background=random&color=fff&size=150';

    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('first_login') === '1') {
      const alertBox = document.getElementById('first-login-alert');
      if (alertBox) alertBox.classList.remove('hidden');
    }

    // 1. Fetch data dari API
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
      
      if (response.ok) {
        const user = await response.json();
        
        const elName = document.getElementById('student-name');
        const elNis = document.getElementById('student-nisn');
        const elEmail = document.getElementById('student-email');
        const elSchool = document.getElementById('student-school');
        const elBio = document.getElementById('student-bio');
        const elWa = document.getElementById('student-wa');

        if (elName) elName.value = user.name;
        if (elNis) elNis.value = `${user.nis} XII MIPA 2`;
        if (elSchool) elSchool.value = user.school_name || 'SMAN 1 Garudapura';
        if (elBio) elBio.value = user.bio || '';
        if (elWa) elWa.value = user.whatsapp_number || '';
        if (elEmail) elEmail.value = user.email || '';

        defaultAvatar = 'https://ui-avatars.com/api/?name=' + encodeURIComponent(user.name) + '&background=random&color=fff&size=150';
        
        const profileImage = document.getElementById('profileImage');
        if (profileImage) {
            if (user.avatar) {
                profileImage.src = user.avatar.startsWith('http') ? user.avatar : '/' + user.avatar;
            } else {
                profileImage.src = defaultAvatar;
            }
        }
      } else {
        localStorage.removeItem('auth_token');
        window.location.href = '/login';
      }
    } catch (e) {
      console.error('Gagal mengambil data user:', e);
    }

    // 2. Event Listeners untuk Tombol Profil
    if (btnGaleri) {
      btnGaleri.addEventListener('click', () => {
        fileUpload.click();
      });
    }

    if (btnCamera) {
      btnCamera.addEventListener('click', () => {
        fileUpload.click();
      });
    }

    if (fileUpload) {
      fileUpload.addEventListener('change', (e) => {
        if (e.target.files && e.target.files[0]) {
          const reader = new FileReader();
          reader.onload = function(evt) {
            profileImage.src = evt.target.result;
          }
          reader.readAsDataURL(e.target.files[0]);
        }
      });
    }

    if (btnAvatar) {
      btnAvatar.addEventListener('click', () => {
        profileImage.src = 'https://api.dicebear.com/7.x/bottts/svg?seed=' + Math.random() + '&backgroundColor=c0aede,b6e3f4,ffdfbf';
      });
    }

    if (btnHapus) {
      btnHapus.addEventListener('click', () => {
        profileImage.src = defaultAvatar;
        fileUpload.value = '';
      });
    }

    // 3. Tombol Simpan Perubahan
    const btnSimpan = document.getElementById('btnSimpan');
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
    
    if (btnSimpan) {
      btnSimpan.addEventListener('click', async () => {
        const newName = document.getElementById('student-name').value;
        const newEmail = document.getElementById('student-email').value;
        const newSchool = document.getElementById('student-school').value;
        const newBio = document.getElementById('student-bio').value;
        const newWa = document.getElementById('student-wa').value;
        
        const btnText = btnSimpan.querySelector('span:last-child');
        const originalText = btnText.textContent;
        
        btnText.textContent = 'Menyimpan...';
        
        let avatarData = null;
        const profileImage = document.getElementById('profileImage');
        if (profileImage && (profileImage.src.startsWith('data:image') || profileImage.src.includes('dicebear'))) {
            avatarData = profileImage.src;
        }

        try {
          const response = await fetch('/api/user', {
            method: 'PUT',
            headers: {
              'Authorization': 'Bearer ' + token,
              'Content-Type': 'application/json',
              'Accept': 'application/json',
              'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({ 
                name: newName,
                email: newEmail,
                school_name: newSchool,
                bio: newBio,
                whatsapp_number: newWa,
                avatar: avatarData
            })
          });
          if (response.ok) {
            btnText.textContent = 'Berhasil Disimpan!';
            
            // Perbarui UI secara langsung
            if (profileImage && !avatarData) {
               profileImage.src = 'https://ui-avatars.com/api/?name=' + encodeURIComponent(newName) + '&background=random&color=fff&size=150';
            }

            setTimeout(() => { btnText.textContent = originalText; }, 2000);
          } else {
            btnText.textContent = 'Gagal Menyimpan';
            setTimeout(() => { btnText.textContent = originalText; }, 2000);
          }
        } catch (e) {
          console.error(e);
          btnText.textContent = originalText;
        }
      });
    }

    // 4. Tombol Logout
    const btnLogout = document.getElementById('btnLogout');
    if (btnLogout) {
      btnLogout.addEventListener('click', async () => {
        try {
          await fetch('/api/logout', {
            method: 'POST',
            headers: { 'Authorization': 'Bearer ' + token }
          });
        } catch (e) {} // Abaikan error, tetap paksa logout di frontend
        
        localStorage.removeItem('auth_token');
        window.location.href = '/login';
      });
    }

    // 5. Tab Navigation Logic
    const tabProfil = document.getElementById('tab-profil');
    const tabPengaturan = document.getElementById('tab-pengaturan');
    const sectionProfil = document.getElementById('section-profil');
    const sectionPengaturan = document.getElementById('section-pengaturan');
    const tabSlider = document.getElementById('tab-slider');

    if (tabProfil && tabPengaturan) {
      tabProfil.addEventListener('click', () => {
        // UI Tab
        tabProfil.classList.replace('text-on-surface-variant', 'text-primary');
        tabProfil.classList.remove('hover:text-on-surface');
        tabPengaturan.classList.replace('text-primary', 'text-on-surface-variant');
        tabPengaturan.classList.add('hover:text-on-surface');
        
        // Slider animation
        tabSlider.style.transform = 'translateX(0)';

        // Show/Hide section
        sectionProfil.classList.remove('hidden');
        sectionPengaturan.classList.add('hidden');
      });

      tabPengaturan.addEventListener('click', () => {
        // UI Tab
        tabPengaturan.classList.replace('text-on-surface-variant', 'text-primary');
        tabPengaturan.classList.remove('hover:text-on-surface');
        tabProfil.classList.replace('text-primary', 'text-on-surface-variant');
        tabProfil.classList.add('hover:text-on-surface');
        
        // Slider animation
        tabSlider.style.transform = 'translateX(100%)';

        // Show/Hide section
        sectionPengaturan.classList.remove('hidden');
        sectionProfil.classList.add('hidden');
      });

      // Buka tab berdasarkan parameter URL
      const urlParams = new URLSearchParams(window.location.search);
      const activeTab = urlParams.get('tab');
      if (activeTab === 'pengaturan') {
        tabPengaturan.click();
      } else {
        tabProfil.click();
      }
    }
  });
</script>

</body></html>
