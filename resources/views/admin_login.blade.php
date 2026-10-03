<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Admin Login - Libraz</title>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&family=Space+Grotesk:wght@700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com"></script>

<style>
:root {
  --color-primary: 67 0 187;
  --color-primary-container: 91 33 230;
  --color-on-primary: 255 255 255;
  --color-surface: 253 248 255;
  --color-surface-container: 241 236 244;
  --color-surface-container-lowest: 255 255 255;
  --color-on-surface: 28 27 32;
  --color-on-surface-variant: 72 68 86;
  --color-secondary-fixed: 77 255 178;
}
html.dark {
  --color-surface: 49 51 56;
  --color-surface-container: 43 45 49;
  --color-surface-container-lowest: 30 31 34;
  --color-on-surface: 242 243 245;
  --color-on-surface-variant: 181 186 193;
  --color-primary: 99 102 241;
  --color-primary-container: 67 56 202;
}
</style>
<script id="tailwind-config">
tailwind.config = {
    "darkMode": "class",
    "theme": {
        "extend": {
            "colors": {
                "primary": "rgb(var(--color-primary) / <alpha-value>)",
                "primary-container": "rgb(var(--color-primary-container) / <alpha-value>)",
                "on-primary": "rgb(var(--color-on-primary) / <alpha-value>)",
                "surface": "rgb(var(--color-surface) / <alpha-value>)",
                "surface-container": "rgb(var(--color-surface-container) / <alpha-value>)",
                "surface-container-lowest": "rgb(var(--color-surface-container-lowest) / <alpha-value>)",
                "on-surface": "rgb(var(--color-on-surface) / <alpha-value>)",
                "on-surface-variant": "rgb(var(--color-on-surface-variant) / <alpha-value>)",
                "secondary-fixed": "rgb(var(--color-secondary-fixed) / <alpha-value>)"
            },
            "fontFamily": {
                "title-md": ["Plus Jakarta Sans"],
                "headline-sm": ["Plus Jakarta Sans"],
                "display-lg": ["Plus Jakarta Sans"],
                "body-md": ["Plus Jakarta Sans"],
                "label-sm": ["Space Grotesk"],
                "label-md": ["Space Grotesk"]
            }
        }
    }
};
</script>
<script>
  if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
  }
</script>
</head>
<body class="bg-surface font-body-md text-on-surface flex flex-col min-h-screen">
<main class="flex flex-col lg:flex-row w-full min-h-screen items-stretch">
  <!-- Desktop Hero Panel -->
  <div class="hidden lg:flex flex-col flex-1 bg-gradient-to-br from-gray-900 to-black p-12 justify-center relative overflow-hidden text-white">
      <div class="absolute -right-32 -bottom-32 w-[600px] h-[600px] bg-primary/20 rounded-full blur-[120px] pointer-events-none"></div>
      <div class="relative z-10 max-w-xl mx-auto space-y-12">
          <div class="flex items-center gap-4 mb-8">
              <div class="w-16 h-16 rounded-2xl bg-white/10 backdrop-blur-2xl flex items-center justify-center border border-white/20 shadow-2xl">
                  <span class="material-symbols-outlined text-4xl text-secondary-fixed">admin_panel_settings</span>
              </div>
              <div class="flex flex-col">
                  <span class="font-display-lg text-4xl font-black tracking-tight">LIBRAZ ADMIN</span>
                  <span class="font-label-md text-secondary-fixed mt-1">Management Portal</span>
              </div>
          </div>
          <div class="space-y-6">
              <h1 class="font-display-lg text-4xl leading-tight font-extrabold drop-shadow-sm">
                  Kelola Perpustakaan Digital dengan Mudah 🚀
              </h1>
              <p class="font-body-md text-lg text-gray-300 max-w-lg leading-relaxed">
                  Pusat kendali untuk mengelola katalog buku, statistik peminjaman, dan anggota perpustakaan.
              </p>
          </div>
      </div>
  </div>

  <!-- Authentication Form Container -->
  <div class="flex flex-col flex-1 items-center justify-center relative w-full lg:w-1/2 bg-surface min-h-screen p-6">
      <div class="w-full max-w-sm m-auto">
          <div class="lg:hidden text-center mb-8">
              <div class="w-16 h-16 rounded-2xl bg-primary flex items-center justify-center mx-auto mb-4 shadow-xl">
                  <span class="material-symbols-outlined text-4xl text-white">admin_panel_settings</span>
              </div>
              <h2 class="font-display-lg text-2xl font-extrabold text-on-surface">Admin Portal</h2>
          </div>
          
          <div class="hidden lg:block text-center mb-8">
            <h2 class="font-display-lg text-3xl font-extrabold text-on-surface mb-2">Selamat Datang Admin</h2>
            <p class="font-body-md text-on-surface-variant">Silakan masuk untuk mengelola sistem.</p>
          </div>

          <!-- Error Alert -->
          @if(session('error'))
          <div class="bg-red-100 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-4 text-sm" role="alert">
              {{ session('error') }}
          </div>
          @endif

          <form action="{{ route('admin.login.submit') }}" method="POST" class="flex flex-col gap-5">
              @csrf
              <!-- Username/Email -->
              <div class="flex flex-col gap-1.5 group">
                  <label class="font-label-md text-label-md text-on-surface-variant ml-1 group-focus-within:text-primary transition-colors" for="username">
                      Username / Email
                  </label>
                  <div class="relative flex items-center h-14 bg-surface-container-lowest rounded-xl border border-surface-container hover:border-primary/50 focus-within:border-primary focus-within:ring-4 focus-within:ring-primary/10 transition-all shadow-sm">
                      <div class="absolute left-4 flex items-center justify-center text-on-surface-variant group-focus-within:text-primary transition-colors">
                          <span class="material-symbols-outlined text-[22px]">person</span>
                      </div>
                      <input class="w-full h-full bg-transparent pl-12 pr-4 font-body-md text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none rounded-xl" id="username" name="username" placeholder="admin@libraz.com" required="" type="text" value=""/>
                  </div>
              </div>

              <!-- Password -->
              <div class="flex flex-col gap-1.5 group">
                  <div class="flex items-center justify-between ml-1">
                      <label class="font-label-md text-label-md text-on-surface-variant group-focus-within:text-primary transition-colors" for="password">
                          Password
                      </label>
                  </div>
                  <div class="relative flex items-center h-14 bg-surface-container-lowest rounded-xl border border-surface-container hover:border-primary/50 focus-within:border-primary focus-within:ring-4 focus-within:ring-primary/10 transition-all shadow-sm">
                      <div class="absolute left-4 flex items-center justify-center text-on-surface-variant group-focus-within:text-primary transition-colors">
                          <span class="material-symbols-outlined text-[22px]">lock</span>
                      </div>
                      <input class="w-full h-full bg-transparent pl-12 pr-12 font-body-md text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none rounded-xl tracking-wider" id="password" name="password" placeholder="••••••••" required="" type="password"/>
                  </div>
              </div>

              <button class="h-14 w-full mt-4 rounded-xl bg-primary text-white font-title-md text-[15px] flex items-center justify-center gap-2 shadow-lg shadow-primary/30 hover:shadow-primary/50 hover:-translate-y-0.5 active:translate-y-0 transition-all" type="submit">
                  <span>Masuk Portal</span>
                  <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
              </button>
          </form>
      </div>
  </div>
</main>
</body>
</html>
