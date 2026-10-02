<!DOCTYPE html>

<html lang="id"><head><meta charset="utf-8"/><meta name="csrf-token" content="{{ csrf_token() }}"/><meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/><link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;family=Space+Grotesk:wght@700&amp;display=swap" rel="stylesheet"/><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/><style>@layer base{html,body{width:100vw;margin:0;padding:0;}body{overscroll-behavior:none;}.pb-safe{padding-bottom:env(safe-area-inset-bottom,0px);}.pt-safe{padding-top:env(safe-area-inset-top,0px);}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com"></script>
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

</div>
</div></main><nav class="fixed bottom-0 w-full z-50 pb-safe bg-surface/85 backdrop-blur-xl shadow-[0_-2px_12px_rgba(0,0,0,0.05)] md:hidden" data-active-classes="bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]"><div class="flex items-center justify-around h-16 px-space-xs max-w-md mx-auto"><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="katalog-buku" href="{{ route('katalog') }}"><span class="material-symbols-outlined text-[22px]">menu_book</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Katalog</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="sirkulasi-peminjaman" href="{{ route('sirkulasi') }}"><span class="material-symbols-outlined text-[22px]">sync_alt</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Sirkulasi</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="petugas-statistik" href="{{ route('statistik') }}"><span class="material-symbols-outlined text-[22px]">analytics</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Statistik</span></a><a class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl text-on-surface-variant transition-all hover:text-primary" data-path="akun" href="{{ route('akun') }}"><span class="material-symbols-outlined text-[22px]">account_circle</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Akun</span></a><a aria-current="page" class="flex flex-col items-center justify-center min-w-[64px] min-h-[44px] px-space-sm py-space-xs rounded-xl transition-all bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20]" data-path="akun-pengaturan" href="{{ route('akun.pengaturan') }}"><span class="material-symbols-outlined text-[22px]">settings</span><span class="font-label-sm text-label-sm tracking-tight mt-0.5">Pengaturan</span></a></div></nav>

<input type="file" id="fileUpload" style="opacity: 0; position: absolute; z-index: -1;" accept="image/*" />

<!-- Logout Confirmation Modal -->
<div id="logoutModal" class="fixed inset-0 z-[100] flex items-center justify-center hidden opacity-0 transition-opacity duration-300">
  <div id="logoutBackdrop" class="absolute inset-0 bg-on-surface/40 backdrop-blur-sm cursor-pointer"></div>
  <div class="relative bg-surface-container-lowest rounded-[32px] w-[90%] max-w-sm p-space-lg shadow-[0_8px_30px_rgba(0,0,0,0.12)] border border-surface-container-highest transform scale-95 transition-transform duration-300">
    <div class="flex flex-col items-center text-center space-y-4">
      <div class="w-16 h-16 rounded-full bg-error/10 flex items-center justify-center text-error border border-error/20">
        <span class="material-symbols-outlined text-[32px]">logout</span>
      </div>
      <div>
        <h3 class="font-headline-sm text-headline-sm text-on-surface mb-1">Yakin mau keluar? 🥺</h3>
        <p class="font-body-sm text-body-sm text-on-surface-variant">Sesi kamu akan berakhir dan kamu harus login kembali untuk mengakses perpustakaan.</p>
      </div>
      <div class="flex items-center gap-space-sm w-full pt-2">
        <button id="btnCancelLogout" class="flex-1 py-3 rounded-2xl bg-surface-container-low hover:bg-surface-container text-on-surface font-label-md text-label-md transition-colors border border-surface-container-highest" type="button">Batal</button>
        <button id="btnConfirmLogout" class="flex-1 py-3 rounded-2xl bg-error hover:bg-error/90 text-on-error font-label-md text-label-md transition-colors shadow-md shadow-error/20" type="button">Ya, Keluar</button>
      </div>
    </div>
  </div>
</div>

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
    const logoutModal = document.getElementById('logoutModal');
    const logoutBackdrop = document.getElementById('logoutBackdrop');
    const btnCancelLogout = document.getElementById('btnCancelLogout');
    const btnConfirmLogout = document.getElementById('btnConfirmLogout');

    const toggleLogoutModal = (show) => {
        if (show) {
            logoutModal.classList.remove('hidden');
            requestAnimationFrame(() => {
                logoutModal.classList.remove('opacity-0');
                logoutModal.querySelector('.relative').classList.remove('scale-95');
                logoutModal.querySelector('.relative').classList.add('scale-100');
            });
        } else {
            logoutModal.classList.add('opacity-0');
            logoutModal.querySelector('.relative').classList.remove('scale-100');
            logoutModal.querySelector('.relative').classList.add('scale-95');
            setTimeout(() => {
                logoutModal.classList.add('hidden');
            }, 300);
        }
    };

    if (btnLogout) {
      btnLogout.addEventListener('click', () => {
         toggleLogoutModal(true);
      });
    }

    if (btnCancelLogout) {
        btnCancelLogout.addEventListener('click', () => toggleLogoutModal(false));
    }
    
    if (logoutBackdrop) {
        logoutBackdrop.addEventListener('click', () => toggleLogoutModal(false));
    }

    if (btnConfirmLogout) {
      btnConfirmLogout.addEventListener('click', async () => {
        btnConfirmLogout.textContent = 'Keluar...';
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
    
    // 6. Tema Aplikasi Logic
    const themeBtns = document.querySelectorAll('.theme-btn');
    
    const updateThemeUI = (theme) => {
        themeBtns.forEach(btn => {
            if (btn.dataset.theme === theme) {
                btn.classList.add('bg-surface-container-lowest', 'text-primary', 'shadow-sm', 'border', 'border-surface-container-highest');
                btn.classList.remove('text-on-surface-variant', 'hover:text-on-surface');
            } else {
                btn.classList.remove('bg-surface-container-lowest', 'text-primary', 'shadow-sm', 'border', 'border-surface-container-highest');
                btn.classList.add('text-on-surface-variant', 'hover:text-on-surface');
            }
        });
    };

    const applyTheme = (theme) => {
        if (theme === 'dark') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        } else if (theme === 'light') {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        } else {
            localStorage.setItem('theme', 'auto');
            if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }
        updateThemeUI(theme);
    };

    const savedTheme = localStorage.getItem('theme') || 'auto';
    updateThemeUI(savedTheme);

    themeBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            applyTheme(btn.dataset.theme);
        });
    });

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
        if (localStorage.getItem('theme') === 'auto' || !localStorage.getItem('theme')) {
            if (e.matches) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }
    });
  });
</script>
</body></html>
