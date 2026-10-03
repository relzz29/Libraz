<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
<title>Tambah Buku - Admin BiblioZ</title>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&family=Space+Grotesk:wght@700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com"></script>
<style>
:root {
  --color-on-primary-fixed: 30 0 96;
  --color-surface-container-highest: 229 225 232;
  --color-on-error: 255 255 255;
  --color-surface-container: 241 236 244;
  --color-surface-container-high: 235 230 238;
  --color-on-surface: 28 27 32;
  --color-surface-variant: 229 225 232;
  --color-surface-container-low: 247 242 249;
  --color-on-surface-variant: 72 68 86;
  --color-background: 253 248 255;
  --color-primary: 67 0 187;
  --color-surface-tint: 101 49 240;
  --color-secondary: 0 108 70;
  --color-on-background: 28 27 32;
  --color-secondary-container: 67 252 174;
  --color-on-secondary: 255 255 255;
  --color-error: 186 26 26;
  --color-surface-container-lowest: 255 255 255;
  --color-primary-container: 91 33 230;
  --color-surface: 253 248 255;
  --color-outline: 121 116 136;
  --color-on-primary: 255 255 255;
}
html.dark {
  --color-surface-container-highest: 63 65 71;
  --color-surface-container: 43 45 49;
  --color-surface-container-high: 49 51 56;
  --color-on-surface: 242 243 245;
  --color-surface-variant: 43 45 49;
  --color-surface-container-low: 30 31 34;
  --color-on-surface-variant: 181 186 193;
  --color-background: 49 51 56;
  --color-primary: 99 102 241;
  --color-surface-tint: 79 70 229;
  --color-secondary: 13 148 136;
  --color-on-background: 242 243 245;
  --color-secondary-container: 15 118 110;
  --color-on-secondary: 255 255 255;
  --color-error: 218 55 60;
  --color-surface-container-lowest: 30 31 34;
  --color-primary-container: 67 56 202;
  --color-surface: 49 51 56;
  --color-outline: 63 65 71;
  --color-on-primary: 255 255 255;
}
</style>
<script id="tailwind-config">tailwind.config = {"darkMode":"class","theme":{"extend":{"colors":{"surface-container-highest":"rgb(var(--color-surface-container-highest) / <alpha-value>)","surface-container":"rgb(var(--color-surface-container) / <alpha-value>)","surface-container-high":"rgb(var(--color-surface-container-high) / <alpha-value>)","on-surface":"rgb(var(--color-on-surface) / <alpha-value>)","surface-variant":"rgb(var(--color-surface-variant) / <alpha-value>)","surface-container-low":"rgb(var(--color-surface-container-low) / <alpha-value>)","on-surface-variant":"rgb(var(--color-on-surface-variant) / <alpha-value>)","background":"rgb(var(--color-background) / <alpha-value>)","primary":"rgb(var(--color-primary) / <alpha-value>)","surface-tint":"rgb(var(--color-surface-tint) / <alpha-value>)","secondary":"rgb(var(--color-secondary) / <alpha-value>)","on-background":"rgb(var(--color-on-background) / <alpha-value>)","secondary-container":"rgb(var(--color-secondary-container) / <alpha-value>)","on-secondary":"rgb(var(--color-on-secondary) / <alpha-value>)","error":"rgb(var(--color-error) / <alpha-value>)","surface-container-lowest":"rgb(var(--color-surface-container-lowest) / <alpha-value>)","primary-container":"rgb(var(--color-primary-container) / <alpha-value>)","surface":"rgb(var(--color-surface) / <alpha-value>)","outline":"rgb(var(--color-outline) / <alpha-value>)","on-primary":"rgb(var(--color-on-primary) / <alpha-value>)"},"fontFamily":{"title-md":["Plus Jakarta Sans"],"headline-sm":["Plus Jakarta Sans"],"headline-lg":["Plus Jakarta Sans"],"label-lg":["Space Grotesk"],"body-lg":["Plus Jakarta Sans"],"body-md":["Plus Jakarta Sans"],"label-md":["Space Grotesk"]}}}};</script>
<script>
  if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
  } else {
    document.documentElement.classList.remove('dark');
  }
</script>
</head>
<body class="bg-background font-body-md text-on-surface flex flex-col min-h-screen">
  
<!-- Desktop Sidebar -->
<aside class="hidden md:flex fixed left-0 top-0 h-screen w-64 bg-surface-container-lowest border-r border-surface-container-high flex-col z-50">
  <div class="h-16 flex items-center px-6 border-b border-surface-container-high gap-3">
    <img alt="BiblioZ Logo" class="h-8 w-auto object-contain flex-shrink-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAz2hoVQ9wOeungd-4ubStxt3uW2O2agaLbBXWfGvi50WoxUohQpS1yMGEOWVn3E1FfRDlQjUNIjc8U7kCnkRxZRKb_FmsWrxzUds9I4q7uzTH1WwhU3gP9Ixf3B82RgmnN0hKWT1MbmwIFykWAzRz7Rk0zLiqbGMIAh8vPkB5TkkU3q-_iAdQkfqN0k__yeu90O4L1BBAF2jgxjXZziX8XqXajMJjFWTDTlpqIgIs7jbXrN5InJK2I"/>
    <span class="font-title-md text-primary font-bold tracking-wider uppercase">BiblioZ</span>
  </div>
  <nav class="flex-1 p-4 flex flex-col gap-2 overflow-y-auto">
    <div class="px-4 py-2 mt-2 mb-1">
        <span class="font-label-md text-outline tracking-widest uppercase">Admin Panel</span>
    </div>
    <a href="/admin" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">
      <span class="material-symbols-outlined text-[22px]">dashboard</span>
      Dashboard
    </a>
    <a href="/admin/tambah-buku" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary-container text-on-primary font-bold shadow-[3px_3px_0px_#1c1b20] transition-all">
      <span class="material-symbols-outlined text-[22px]">add_circle</span>
      Tambah Buku
    </a>
    <a href="/admin/laporan" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">
      <span class="material-symbols-outlined text-[22px]">analytics</span>
      Laporan
    </a>
    <a href="/katalog" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all">
      <span class="material-symbols-outlined text-[22px]">menu_book</span>
      Ke Tampilan User
    </a>
  </nav>
  <div class="p-4 border-t border-surface-container-high">
    <form action="{{ route('admin.logout') }}" method="POST">
      @csrf
      <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-error hover:bg-error/10 transition-all font-bold">
        <span class="material-symbols-outlined text-[22px]">logout</span>
        Keluar
      </button>
    </form>
  </div>
</aside>

<header class="fixed top-0 w-full md:w-[calc(100%-16rem)] md:left-64 z-40 pt-safe bg-surface/80 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)] border-b border-surface-container-high">
    <div class="h-16 px-6 flex items-center justify-between gap-4">
        <div class="flex items-center gap-4 min-w-0">
            <div class="flex flex-col min-w-0">
                <span class="font-title-md text-on-surface truncate">Tambah Buku</span>
                <span class="font-label-md text-on-surface-variant mt-0.5">Tambah buku fisik atau E-Book baru ke katalog.</span>
            </div>
        </div>
    </div>
</header>

<main class="flex flex-col relative w-full md:w-[calc(100%-16rem)] md:ml-64 pt-24 pb-8 px-6 bg-surface min-h-screen">
    <div class="max-w-6xl w-full mx-auto flex flex-col gap-8">
        
        @if(session('success'))
        <div class="bg-secondary/10 border-l-4 border-secondary text-secondary p-4 rounded-xl">
            <p class="font-body-md">{{ session('success') }}</p>
        </div>
        @endif

        <!-- Form Modal (Hidden by Default) -->
        <div id="formModal" class="fixed inset-0 z-[100] hidden flex items-center justify-center p-4 sm:p-6">
            <!-- Blurred Backdrop -->
            <div class="fixed inset-0 bg-black/40 backdrop-blur-sm transition-opacity" onclick="toggleForm()"></div>
            
            <!-- Modal Content -->
            <div class="relative w-full max-w-4xl bg-surface-container-lowest rounded-3xl shadow-2xl border border-surface-container-high p-6 sm:p-8 overflow-y-auto max-h-[90vh] z-10 animate-in fade-in zoom-in-95 duration-200">
                <div class="flex items-center justify-between mb-6 pb-4 border-b border-surface-container-high">
                    <h2 class="font-headline-sm text-on-surface flex items-center gap-2"><span class="material-symbols-outlined text-primary text-[28px]">book</span> Form Tambah Buku</h2>
                    <button type="button" onclick="toggleForm()" class="w-10 h-10 rounded-full bg-surface-container hover:bg-surface-container-high flex items-center justify-center text-on-surface-variant transition-colors">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                </div>
                
                <form action="{{ route('admin.books.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-6">
                    @csrf
                    <div class="flex flex-col gap-1.5">
                        <label class="font-label-md text-on-surface-variant uppercase tracking-wide">Judul Buku</label>
                        <input type="text" name="title" required placeholder="Masukkan judul buku" class="w-full bg-surface-container-low border border-surface-container-high rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-body-md transition-all">
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-md text-on-surface-variant uppercase tracking-wide">Penulis</label>
                            <input type="text" name="author" required placeholder="Nama penulis" class="w-full bg-surface-container-low border border-surface-container-high rounded-xl px-4 py-3 focus:outline-none focus:border-primary text-body-md transition-all">
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-md text-on-surface-variant uppercase tracking-wide">Kategori</label>
                            <select name="category" required class="w-full bg-surface-container-low border border-surface-container-high rounded-xl px-4 py-3 focus:outline-none focus:border-primary text-body-md transition-all appearance-none">
                                <option value="Sastra & Novel">Sastra & Novel</option>
                                <option value="Sains & Teknologi">Sains & Teknologi</option>
                                <option value="Filosofi & Mindset">Filosofi & Mindset</option>
                                <option value="Sejarah">Sejarah</option>
                                <option value="Pelajaran">Pelajaran</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-md text-on-surface-variant uppercase tracking-wide">Tipe Buku</label>
                            <select name="type" required class="w-full bg-surface-container-low border border-surface-container-high rounded-xl px-4 py-3 focus:outline-none focus:border-primary text-body-md transition-all appearance-none">
                                <option value="physical">Fisik</option>
                                <option value="ebook">E-Book (PDF)</option>
                                <option value="both">Keduanya (Fisik & PDF)</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-md text-on-surface-variant uppercase tracking-wide">ISBN</label>
                            <input type="text" name="isbn" placeholder="Contoh: 978-623-..." class="w-full bg-surface-container-low border border-surface-container-high rounded-xl px-4 py-3 focus:outline-none focus:border-primary text-body-md transition-all">
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-md text-on-surface-variant uppercase tracking-wide">Stok Tersedia</label>
                            <input type="number" name="stock" min="0" value="1" class="w-full bg-surface-container-low border border-surface-container-high rounded-xl px-4 py-3 focus:outline-none focus:border-primary text-body-md transition-all">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-2">
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-md text-on-surface-variant uppercase tracking-wide">Upload Cover Buku</label>
                            <input type="file" name="cover_image" accept="image/png, image/jpeg, image/jpg" class="w-full text-body-md file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-body-sm file:font-semibold file:bg-primary file:text-on-primary hover:file:bg-surface-tint border border-surface-container-high p-2 rounded-xl bg-surface-container-low">
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-md text-on-surface-variant uppercase tracking-wide">Upload PDF (Jika E-Book)</label>
                            <input type="file" name="pdf_file" accept="application/pdf" class="w-full text-body-md file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-body-sm file:font-semibold file:bg-primary file:text-on-primary hover:file:bg-surface-tint border border-surface-container-high p-2 rounded-xl bg-surface-container-low">
                        </div>
                    </div>
                    
                    <div class="pt-6 mt-4 border-t border-surface-container-high flex justify-end gap-4">
                        <button type="submit" class="px-6 py-3 rounded-xl bg-primary text-on-primary font-title-md hover:bg-surface-tint transition-colors shadow-md">Simpan Buku</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="bg-surface-container-lowest rounded-3xl shadow-sm border border-surface-container-high overflow-hidden">
            <div class="p-6 border-b border-surface-container-high flex items-center justify-between">
                <h3 class="font-headline-sm text-on-surface">Daftar Buku Tersedia</h3>
                <button type="button" onclick="toggleForm()" class="px-5 py-2.5 rounded-xl bg-primary text-on-primary font-title-md flex items-center gap-2 hover:bg-surface-tint transition-colors shadow-md">
                    <span class="material-symbols-outlined text-[20px]">add</span>
                    Buku Baru
                </button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-surface-container-low text-on-surface-variant font-label-md uppercase tracking-wider border-b border-surface-container-high">
                            <th class="p-4 font-bold">Judul Buku</th>
                            <th class="p-4 font-bold">Tipe</th>
                            <th class="p-4 font-bold">Kategori</th>
                            <th class="p-4 font-bold">Stok</th>
                            <th class="p-4 font-bold">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-surface-container-high font-body-sm text-on-surface">
                        @forelse($books as $book)
                        <tr class="hover:bg-surface-container-low transition-colors">
                            <td class="p-4 font-title-md">{{ $book->title }}</td>
                            <td class="p-4 font-body-md uppercase text-xs">{{ $book->type }}</td>
                            <td class="p-4 text-on-surface-variant">{{ $book->category }}</td>
                            <td class="p-4 text-on-surface-variant">{{ $book->stock }}</td>
                            <td class="p-4 flex items-center gap-2">
                                <a href="{{ route('admin.books.edit', $book->id) }}" class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-primary transition-colors flex items-center justify-center" title="Edit Buku">
                                    <span class="material-symbols-outlined text-[18px]">edit</span>
                                </a>
                                <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 rounded-lg bg-error/10 hover:bg-error/20 text-error transition-colors flex items-center justify-center" title="Hapus Buku">
                                        <span class="material-symbols-outlined text-[18px]">delete</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="p-4 text-center text-on-surface-variant">Belum ada data buku.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</main>
<script>
    function toggleForm() {
        const formModal = document.getElementById('formModal');
        if (formModal.classList.contains('hidden')) {
            formModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        } else {
            formModal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    }
</script>
</body>
</html>
