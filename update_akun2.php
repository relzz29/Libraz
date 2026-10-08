<?php
$content = file_get_contents("c:/xampp/htdocs/perpustakaan29/resources/views/akun.blade.php");

$start = strpos($content, "<main ");
$end = strpos($content, "</main>") + 7;

$before = substr($content, 0, $start);
$after = substr($content, $end);

$newMain = <<<HTML
<main class="flex flex-col relative w-full md:w-[calc(100%-16rem)] md:ml-64 pt-16 pb-24 md:pb-8 bg-surface min-h-screen overflow-hidden">
  
  <!-- Animated Background Orbs -->
  <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
    <div class="absolute -top-[20%] -left-[10%] w-[50%] h-[50%] rounded-full bg-primary/20 blur-[120px] animate-pulse" style="animation-duration: 8s;"></div>
    <div class="absolute top-[40%] -right-[10%] w-[40%] h-[60%] rounded-full bg-secondary-fixed/20 blur-[100px] animate-pulse" style="animation-duration: 12s; animation-delay: 2s;"></div>
    <div class="absolute -bottom-[20%] left-[20%] w-[60%] h-[40%] rounded-full bg-tertiary-container/10 blur-[100px] animate-pulse" style="animation-duration: 10s; animation-delay: 4s;"></div>
  </div>

  <div class="flex flex-col w-full max-w-7xl mx-auto px-4 md:px-8 py-8 gap-8 relative z-10">
    
    <!-- HEADER HERO SECTION (Glassmorphism & Glow) -->
    <section class="flex flex-col md:flex-row items-center bg-white/40 dark:bg-black/40 backdrop-blur-2xl p-8 rounded-[2rem] shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white/50 dark:border-white/10 gap-8 relative overflow-hidden group hover:shadow-[0_8px_40px_rgba(100,50,255,0.1)] transition-shadow duration-500">
      <div class="absolute inset-0 bg-gradient-to-r from-primary/5 to-transparent pointer-events-none"></div>
      
      <!-- Profile Info -->
      <div class="flex items-center gap-6 z-10 w-full md:w-auto">
        <div class="relative flex-shrink-0 group-hover:scale-105 transition-transform duration-500">
          <div class="absolute inset-0 rounded-full bg-gradient-to-tr from-primary to-secondary blur-md opacity-60 group-hover:opacity-100 transition-opacity duration-500"></div>
          <img id="profile-avatar-large" class="relative w-24 h-24 rounded-full object-cover shadow-xl border-4 border-surface" alt="Avatar" src="https://ui-avatars.com/api/?name=User&background=random&color=fff"/>
          <div class="absolute -bottom-2 -right-2 w-9 h-9 rounded-full bg-gradient-to-br from-secondary to-[#00d084] flex items-center justify-center text-white shadow-lg border-2 border-surface">
            <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">verified</span>
          </div>
        </div>
        <div class="flex flex-col min-w-0">
          <h2 id="profile-name" class="font-display-lg text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-on-surface to-primary truncate tracking-tight">{{ \$user->name ?? 'Nama Siswa' }}</h2>
          <p id="profile-nis" class="font-body-lg text-on-surface-variant mt-1.5">NIS: {{ \$user->nis ?? '1234567890' }} • <span class="font-bold text-on-surface">{{ \$user->role ?? 'Siswa' }}</span></p>
          <div class="mt-3 flex items-center">
            <span id="profile-school-name" class="text-xs font-black text-primary tracking-widest uppercase bg-primary/10 px-4 py-1.5 rounded-full ring-1 ring-primary/20 shadow-sm">{{ \$user->school_name ?? 'SMAN 1 Garudapura' }}</span>
          </div>
        </div>
      </div>

      <!-- XP & Gamification Widget -->
      @php
          \$nextLevelXp = \$user->level * 100;
          \$xpPercent = min(100, (\$user->xp / \$nextLevelXp) * 100);
          \$titles = [1 => 'Pembaca Baru', 2 => 'Pembaca Aktif', 3 => 'Penggemar Buku', 4 => 'Kutu Buku', 5 => 'Master Literasi'];
          \$levelTitle = \$titles[\$user->level] ?? 'Legendary Reader';
          \$todayStr = now()->format('Y-m-d');
          \$yesterdayStr = now()->subDay()->format('Y-m-d');
          \$isStreakActive = \$user->current_streak > 0 && in_array(\$user->last_read_date, [\$todayStr, \$yesterdayStr]);
          \$displayStreak = \$isStreakActive ? \$user->current_streak : 0;
      @endphp
      <div class="flex-1 w-full md:max-w-[420px] ml-auto bg-white/50 dark:bg-black/50 backdrop-blur-md p-6 rounded-3xl z-10 flex flex-col gap-4 border border-white/60 dark:border-white/10 shadow-sm relative overflow-hidden">
        <div class="absolute -right-10 -bottom-10 opacity-5 pointer-events-none">
          <span class="material-symbols-outlined text-[120px]">stars</span>
        </div>
        <div class="flex items-center justify-between">
          <div class="flex flex-col">
            <span class="text-xs text-primary font-black uppercase tracking-[0.2em] mb-1">Peringkat Literasi</span>
            <span class="font-extrabold text-xl text-on-surface flex items-center gap-2" id="profile-level-title">
              <span class="bg-surface-container-high w-8 h-8 rounded-lg flex items-center justify-center text-sm shadow-inner">L{{ \$user->level }}</span>
              {{ \$levelTitle }}
            </span>
          </div>
          <span class="text-xs font-black px-4 py-2 rounded-xl bg-gradient-to-r from-primary to-primary-container text-white shadow-lg shadow-primary/30" id="profile-top-percent">
            Top {{ max(1, 100 - (\$user->level * 10)) }}%
          </span>
        </div>
        <div class="flex flex-col gap-2 mt-2">
          <div class="flex items-center justify-between text-xs font-bold text-on-surface-variant">
            <span id="profile-xp-text" class="text-on-surface">{{ \$user->xp }} / {{ \$nextLevelXp }} XP</span>
            <span id="profile-xp-next" class="text-primary">+{{ \$nextLevelXp - \$user->xp }} XP ke Lvl {{ \$user->level + 1 }}</span>
          </div>
          <div class="w-full h-3.5 rounded-full bg-surface-container-highest overflow-hidden shadow-inner p-0.5">
            <div id="profile-xp-bar" class="h-full rounded-full bg-gradient-to-r from-primary via-[#9d4edd] to-secondary-fixed transition-all duration-1000 ease-out shadow-[0_0_10px_rgba(100,50,255,0.5)] relative overflow-hidden" style="width: {{ \$xpPercent }}%;">
              <div class="absolute inset-0 bg-white/20 w-full h-full" style="background-image: linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent); background-size: 1rem 1rem; animation: progress-stripes 1s linear infinite;"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- MAIN GRID DASHBOARD -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
      
      <!-- LEFT COLUMN (Main Content) -->
      <div class="lg:col-span-8 flex flex-col gap-8">
        
        <!-- COMPACT STATS (Bento 4-Grid with Hover Effects) -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
          <div class="rounded-3xl bg-white/60 dark:bg-black/40 backdrop-blur-xl p-6 shadow-sm flex flex-col justify-between hover:-translate-y-2 hover:shadow-[0_15px_30px_-5px_rgba(0,0,0,0.1)] transition-all duration-300 gap-4 border border-white/50 dark:border-white/10 group cursor-default">
            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-primary/20 to-primary/5 text-primary flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
              <span class="material-symbols-outlined text-[26px]">auto_stories</span>
            </div>
            <div>
              <div class="font-black text-3xl text-on-surface group-hover:text-primary transition-colors">{{ \$user->read_count }}</div>
              <div class="text-[11px] text-on-surface-variant font-black uppercase tracking-widest mt-1">Buku Selesai</div>
            </div>
          </div>
          <div class="rounded-3xl bg-white/60 dark:bg-black/40 backdrop-blur-xl p-6 shadow-sm flex flex-col justify-between hover:-translate-y-2 hover:shadow-[0_15px_30px_-5px_rgba(0,0,0,0.1)] transition-all duration-300 gap-4 border border-white/50 dark:border-white/10 group cursor-default">
            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-secondary/20 to-secondary/5 text-secondary flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
              <span class="material-symbols-outlined text-[26px]">schedule</span>
            </div>
            <div>
              <div class="font-black text-3xl text-on-surface group-hover:text-secondary transition-colors">{{ \$user->reading_hours }}<span class="text-xl text-on-surface-variant">j</span></div>
              <div class="text-[11px] text-on-surface-variant font-black uppercase tracking-widest mt-1">Total Baca</div>
            </div>
          </div>
          <div class="rounded-3xl bg-white/60 dark:bg-black/40 backdrop-blur-xl p-6 shadow-sm flex flex-col justify-between hover:-translate-y-2 hover:shadow-[0_15px_30px_-5px_rgba(0,0,0,0.1)] transition-all duration-300 gap-4 border border-white/50 dark:border-white/10 group cursor-default">
            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-amber-500/20 to-amber-500/5 text-amber-500 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
              <span class="material-symbols-outlined text-[26px]" style="font-variation-settings: 'FILL' {{ \$user->reviews_count > 0 ? '1' : '0' }};">star</span>
            </div>
            <div>
              <div class="font-black text-3xl text-on-surface group-hover:text-amber-500 transition-colors">{{ \$user->reviews_count }}</div>
              <div class="text-[11px] text-on-surface-variant font-black uppercase tracking-widest mt-1">Rating Ulasan</div>
            </div>
          </div>
          <div class="rounded-3xl bg-white/60 dark:bg-black/40 backdrop-blur-xl p-6 shadow-sm flex flex-col justify-between hover:-translate-y-2 hover:shadow-[0_15px_30px_-5px_rgba(0,0,0,0.1)] transition-all duration-300 gap-4 border border-white/50 dark:border-white/10 group cursor-default">
            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-error/20 to-error/5 text-error flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
              <span class="material-symbols-outlined text-[26px]" style="font-variation-settings: 'FILL' {{ \$user->favorites_count > 0 ? '1' : '0' }};">favorite</span>
            </div>
            <div>
              <div class="font-black text-3xl text-on-surface group-hover:text-error transition-colors">{{ \$user->favorites_count }}</div>
              <div class="text-[11px] text-on-surface-variant font-black uppercase tracking-widest mt-1">Favorit</div>
            </div>
          </div>
        </div>

        <!-- DIGITAL PASS CARD (Holographic Redesign) -->
        <div class="relative w-full rounded-[2rem] p-8 text-white shadow-2xl overflow-hidden group hover:scale-[1.01] transition-transform duration-500" style="background: linear-gradient(135deg, #1e1b4b 0%, #4338ca 50%, #818cf8 100%);">
          <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4IiBoZWlnaHQ9IjgiPgo8cmVjdCB3aWR0aD0iOCIgaGVpZ2h0PSI4IiBmaWxsPSIjZmZmIiBmaWxsLW9wYWNpdHk9IjAuMDUiLz4KPC9zdmc+')] opacity-30 mix-blend-overlay pointer-events-none"></div>
          <div class="absolute -right-20 -top-20 w-80 h-80 bg-[#c084fc] rounded-full blur-[80px] pointer-events-none opacity-40 group-hover:opacity-60 group-hover:translate-x-10 transition-all duration-700"></div>
          <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-[#38bdf8] rounded-full blur-[80px] pointer-events-none opacity-40 group-hover:opacity-60 group-hover:-translate-x-10 transition-all duration-700"></div>
          <div class="absolute right-0 bottom-0 opacity-[0.05] pointer-events-none transform translate-x-8 translate-y-8">
            <span class="material-symbols-outlined text-[220px]">local_library</span>
          </div>
          
          <div class="relative z-10 flex flex-col gap-8 h-full justify-between">
            <div class="flex items-center justify-between">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center shadow-inner border border-white/30">
                  <span class="material-symbols-outlined text-white text-[24px]">bolt</span>
                </div>
                <span class="font-black tracking-[0.25em] uppercase text-white/90 text-sm drop-shadow-md">BiblioZ Pass • 26/27</span>
              </div>
              <span class="px-4 py-2 rounded-full bg-white/10 backdrop-blur-xl text-xs font-black text-white shadow-[0_4px_12px_rgba(0,0,0,0.1)] border border-white/20">
                Master Reader
              </span>
            </div>
            
            <div class="flex items-end justify-between pt-6 pb-2">
              <div class="flex flex-col gap-1">
                <p class="text-xs text-white/70 uppercase tracking-[0.2em] font-bold">Nomor Anggota Digital</p>
                <p class="text-4xl md:text-5xl font-black tracking-wider text-white drop-shadow-lg" style="font-family: 'Space Grotesk', sans-serif;">BZ-9921-4882</p>
                <p class="text-sm text-white/80 mt-2 font-medium flex items-center gap-2">
                  <span class="w-2 h-2 rounded-full bg-[#38bdf8] shadow-[0_0_10px_#38bdf8] animate-pulse"></span>
                  Gerbang RFID Aktif • Berlaku s/d Juni 2027
                </p>
              </div>
              <div class="w-14 h-12 rounded-xl bg-white/20 flex items-center justify-center backdrop-blur-md shadow-inner border border-white/30 hover:bg-white/30 transition-colors cursor-pointer" title="NFC Ready">
                <span class="material-symbols-outlined text-white text-[32px]">contactless</span>
              </div>
            </div>

            <div class="pt-4 border-t border-white/20 mt-2">
              <button class="w-full py-4 px-6 rounded-2xl bg-white/10 hover:bg-white/20 backdrop-blur-xl border border-white/30 text-white font-black text-sm flex items-center justify-center gap-3 shadow-lg transition-all active:scale-[0.98]" id="toggleQrBtn">
                <span class="material-symbols-outlined text-[24px]">qr_code_scanner</span>
                <span>TAMPILKAN QR MASUK KILAT</span>
              </button>
            </div>
            
            <div class="hidden flex-col items-center justify-center bg-white text-on-surface rounded-2xl p-6 mt-2 gap-4 shadow-2xl" id="qrCodeContainer">
              <div class="flex flex-col items-center w-full max-w-sm">
                <!-- Barcode dummy aesthetic -->
                <div class="w-full h-16 flex items-center justify-between py-1 px-4 rounded-xl">
                  <span class="w-2 h-full bg-black rounded-sm"></span><span class="w-1 h-full bg-black rounded-sm"></span><span class="w-3 h-full bg-black rounded-sm"></span><span class="w-1.5 h-full bg-black rounded-sm"></span><span class="w-1 h-full bg-black rounded-sm"></span><span class="w-4 h-full bg-black rounded-sm"></span><span class="w-2 h-full bg-black rounded-sm"></span><span class="w-2.5 h-full bg-black rounded-sm"></span><span class="w-1 h-full bg-black rounded-sm"></span><span class="w-3.5 h-full bg-black rounded-sm"></span><span class="w-1.5 h-full bg-black rounded-sm"></span><span class="w-1 h-full bg-black rounded-sm"></span><span class="w-2.5 h-full bg-black rounded-sm"></span><span class="w-3 h-full bg-black rounded-sm"></span><span class="w-1 h-full bg-black rounded-sm"></span><span class="w-2 h-full bg-black rounded-sm"></span>
                </div>
                <span id="profile-gate-id" class="font-black tracking-[0.25em] text-on-surface-variant mt-3 text-sm">1234567890-BIBLIOZ-GATE</span>
              </div>
              <p class="text-xs text-center text-on-surface-variant/80 max-w-[250px] font-medium">Arahkan barcode ke scanner turnstile gerbang perpustakaan</p>
            </div>
          </div>
        </div>

        <!-- RIWAYAT SIRKULASI -->
        <section class="flex flex-col w-full gap-5 bg-white/60 dark:bg-black/40 backdrop-blur-xl p-8 rounded-[2rem] shadow-sm border border-white/50 dark:border-white/10">
          <div class="flex items-center justify-between">
            <h3 class="text-2xl font-extrabold text-on-surface">Riwayat Sirkulasi</h3>
            <span class="text-[10px] font-black text-primary bg-primary/10 px-4 py-2 rounded-full uppercase tracking-widest ring-1 ring-primary/20">Semester Ganjil</span>
          </div>
          
          <div class="flex items-center gap-3 overflow-x-auto pb-2 no-scrollbar mt-2">
            <button class="px-5 py-2.5 rounded-xl bg-on-surface text-surface font-bold text-sm whitespace-nowrap shadow-md hover:scale-105 transition-transform">
              Selesai Dibaca ({{ \$borrowings->count() }})
            </button>
            <button class="px-5 py-2.5 rounded-xl bg-surface-container-highest text-on-surface-variant font-bold text-sm whitespace-nowrap hover:bg-surface-container transition-colors">
              Sedang Berjalan (0)
            </button>
            <button class="px-5 py-2.5 rounded-xl bg-surface-container-highest text-on-surface-variant font-bold text-sm whitespace-nowrap hover:bg-surface-container transition-colors">
              Reservasi (0)
            </button>
          </div>
          
          <div class="flex flex-col gap-4 mt-4">
            @forelse (\$borrowings as \$borrow)
            <div class="flex gap-6 p-5 rounded-3xl bg-white dark:bg-surface-container hover:bg-surface-container-lowest hover:shadow-[0_8px_30px_rgb(0,0,0,0.06)] transition-all duration-300 border border-transparent hover:border-outline-variant group">
              <div class="w-24 h-32 rounded-2xl overflow-hidden flex-shrink-0 bg-surface-container shadow-md group-hover:scale-105 transition-transform duration-500">
                <img class="w-full h-full object-cover" alt="{{ \$borrow->book->title ?? 'Buku' }}" src="{{ asset(\$borrow->book->cover_image_url ?? '') }}"/>
              </div>
              <div class="flex flex-col justify-between flex-1 min-w-0 py-1">
                <div class="flex flex-col">
                  <div class="flex items-center justify-between gap-2 mb-2">
                    <span class="px-3 py-1 rounded-lg {{ \$borrow->book->type == 'physical' ? 'bg-primary/10 text-primary' : 'bg-secondary/10 text-secondary' }} text-[10px] font-black uppercase tracking-widest">{{ \$borrow->book->type == 'physical' ? 'Fisik' : 'E-Book' }}</span>
                    <span class="text-xs text-on-surface-variant font-bold bg-surface-container-highest px-3 py-1 rounded-lg">{{ \Carbon\Carbon::parse(\$borrow->borrowed_at)->format('d M Y') }}</span>
                  </div>
                  <h4 class="text-lg font-black text-on-surface truncate group-hover:text-primary transition-colors">{{ \$borrow->book->title ?? 'Judul Buku' }}</h4>
                  <p class="text-sm text-on-surface-variant truncate mt-0.5 font-medium">{{ \$borrow->book->author ?? 'Penulis' }}</p>
                </div>
                <div class="flex items-center justify-between pt-3 border-t border-surface-container-highest mt-3">
                  <div class="flex items-center text-amber-500 gap-1 bg-amber-500/10 px-3 py-1.5 rounded-lg">
                    @if(\$borrow->book->rating)
                      <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                      <span class="text-xs font-black text-amber-600 ml-1">{{ number_format(\$borrow->book->rating, 1) }}</span>
                    @else
                      <span class="text-[11px] font-bold text-amber-600/70 uppercase">No Rating</span>
                    @endif
                  </div>
                  @if(\$borrow->book->type == 'physical')
                  <button class="px-5 py-2 rounded-xl bg-surface-container-highest text-on-surface font-bold text-xs hover:bg-primary hover:text-white transition-colors shadow-sm">
                    Pinjam Lagi
                  </button>
                  @else
                  <a href="{{ route('baca.ebook', \$borrow->book->id) }}" class="px-5 py-2 rounded-xl bg-primary-container text-on-primary-container font-bold text-xs hover:bg-primary hover:text-white transition-colors shadow-sm">
                    Buka File
                  </a>
                  @endif
                </div>
              </div>
            </div>
            @empty
            <div class="p-12 text-center flex flex-col items-center gap-4 bg-white/50 dark:bg-black/20 rounded-[2rem] border-2 border-dashed border-outline-variant">
              <div class="w-20 h-20 rounded-full bg-surface-container flex items-center justify-center text-outline">
                <span class="material-symbols-outlined text-[40px]">history</span>
              </div>
              <div class="flex flex-col gap-1">
                <h4 class="text-lg font-bold text-on-surface">Belum ada riwayat</h4>
                <p class="text-on-surface-variant font-medium text-sm max-w-xs mx-auto">Pinjam dan selesaikan buku pertamamu untuk melihat riwayat di sini.</p>
              </div>
            </div>
            @endforelse
          </div>
        </section>

      </div>

      <!-- RIGHT COLUMN (Sidebar) -->
      <div class="lg:col-span-4 flex flex-col gap-8">
        
        <!-- DAILY STREAK WIDGET (Sleek Redesigned) -->
        <div class="flex flex-col p-8 rounded-[2rem] {{ \$isStreakActive ? 'bg-gradient-to-br from-[#ec4899] to-[#8b5cf6] shadow-[0_10px_30px_rgba(236,72,153,0.3)] border border-[#f472b6]' : 'bg-white/60 dark:bg-black/40 border border-white/50 dark:border-white/10' }} gap-5 relative overflow-hidden group hover:scale-[1.02] transition-transform duration-500">
          @if(\$isStreakActive)
            <div class="absolute -right-10 -top-10 w-40 h-40 bg-white/20 rounded-full blur-[40px] pointer-events-none"></div>
            <div class="absolute -left-10 -bottom-10 w-32 h-32 bg-white/10 rounded-full blur-[30px] pointer-events-none"></div>
          @endif
          
          <div class="flex items-center gap-5 z-10">
            <div class="w-16 h-16 rounded-[1.25rem] flex items-center justify-center {{ \$isStreakActive ? 'bg-white text-[#ec4899] shadow-inner shadow-[#ec4899]/20' : 'bg-surface-container-highest text-outline grayscale' }}">
              <span class="material-symbols-outlined text-4xl drop-shadow-sm">local_fire_department</span>
            </div>
            <div class="flex flex-col">
              <span class="text-3xl font-black {{ \$isStreakActive ? 'text-white drop-shadow-sm' : 'text-on-surface' }}">{{ \$displayStreak }} Hari</span>
              <span class="text-[11px] uppercase tracking-widest font-black {{ \$isStreakActive ? 'text-white/90' : 'text-on-surface-variant' }} mt-1">{{ \$isStreakActive ? 'Runtunan Menyala!' : 'Mulai Runtunanmu' }}</span>
            </div>
          </div>
          <div class="flex items-center justify-between mt-3 px-1 z-10 bg-black/10 p-3 rounded-2xl backdrop-blur-sm">
            @foreach(['S','S','R','K','J','S','M'] as \$index => \$day)
            <div class="flex flex-col items-center gap-1.5">
              <span class="w-9 h-9 rounded-xl {{ (\$isStreakActive && \$index < min(7, \$displayStreak)) ? 'bg-white text-[#ec4899] shadow-md shadow-black/10' : (\$isStreakActive ? 'bg-white/20 text-white' : 'bg-surface-container-highest text-on-surface-variant') }} flex items-center justify-center text-sm font-black transition-all hover:-translate-y-1">{{ \$day }}</span>
            </div>
            @endforeach
          </div>
        </div>

        <!-- BADGE REWARDS & PRESTASI -->
        <section class="flex flex-col w-full gap-5 bg-white/60 dark:bg-black/40 backdrop-blur-xl p-8 rounded-[2rem] shadow-sm border border-white/50 dark:border-white/10">
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-xl bg-[#eab308]/10 text-[#eab308] flex items-center justify-center">
                <span class="material-symbols-outlined text-xl" style="font-variation-settings: 'FILL' 1;">emoji_events</span>
              </div>
              <h3 class="text-xl font-extrabold text-on-surface">Prestasi</h3>
            </div>
          </div>
          
          <div class="flex items-center bg-surface-container-highest/50 p-1.5 rounded-xl text-sm font-bold w-full">
            <button class="flex-1 py-2 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all" id="badgeTabUnlocked">Tercapai (0)</button>
            <button class="flex-1 py-2 rounded-lg bg-surface text-primary shadow-md transition-all" id="badgeTabLocked">Terkunci (6)</button>
          </div>
          
          <div class="flex flex-col gap-4 max-h-[420px] overflow-y-auto pr-3 custom-scrollbar mt-2" id="badgeContainer">
            <!-- Badge 1 -->
            <div class="badge-item locked flex items-center p-4 rounded-2xl bg-white dark:bg-surface-container hover:shadow-md transition-shadow border border-transparent hover:border-outline-variant gap-4 group">
              <div class="w-14 h-14 rounded-2xl bg-surface-container-highest text-outline flex items-center justify-center flex-shrink-0 group-hover:scale-110 group-hover:bg-primary/10 group-hover:text-primary transition-all duration-300">
                <span class="material-symbols-outlined text-[28px]">lock</span>
              </div>
              <div class="flex flex-col flex-1">
                <div class="flex items-center justify-between mb-1.5">
                  <h4 class="font-bold text-on-surface text-sm">Speed Reader</h4>
                  <span class="text-[10px] font-black text-on-surface-variant bg-surface-container-highest px-2.5 py-1 rounded-lg">0/1</span>
                </div>
                <p class="text-[11px] font-medium text-on-surface-variant line-clamp-1">Selesaikan baca buku < 48 jam</p>
                <div class="w-full h-1.5 rounded-full bg-surface-container-highest mt-2.5"><div class="h-full bg-primary rounded-full w-0"></div></div>
              </div>
            </div>
            <!-- Badge 2 -->
            <div class="badge-item locked flex items-center p-4 rounded-2xl bg-white dark:bg-surface-container hover:shadow-md transition-shadow border border-transparent hover:border-outline-variant gap-4 group">
              <div class="w-14 h-14 rounded-2xl bg-surface-container-highest text-outline flex items-center justify-center flex-shrink-0 group-hover:scale-110 group-hover:bg-primary/10 group-hover:text-primary transition-all duration-300">
                <span class="material-symbols-outlined text-[28px]">lock</span>
              </div>
              <div class="flex flex-col flex-1">
                <div class="flex items-center justify-between mb-1.5">
                  <h4 class="font-bold text-on-surface text-sm">Marathon Kurikulum</h4>
                  <span class="text-[10px] font-black text-on-surface-variant bg-surface-container-highest px-2.5 py-1 rounded-lg">0/10</span>
                </div>
                <p class="text-[11px] font-medium text-on-surface-variant line-clamp-1">Baca 10 modul pelajaran resmi</p>
                <div class="w-full h-1.5 rounded-full bg-surface-container-highest mt-2.5"><div class="h-full bg-primary rounded-full w-0"></div></div>
              </div>
            </div>
            <!-- Badge 3 -->
            <div class="badge-item locked flex items-center p-4 rounded-2xl bg-white dark:bg-surface-container hover:shadow-md transition-shadow border border-transparent hover:border-outline-variant gap-4 group">
              <div class="w-14 h-14 rounded-2xl bg-surface-container-highest text-outline flex items-center justify-center flex-shrink-0 group-hover:scale-110 group-hover:bg-primary/10 group-hover:text-primary transition-all duration-300">
                <span class="material-symbols-outlined text-[28px]">lock</span>
              </div>
              <div class="flex flex-col flex-1">
                <div class="flex items-center justify-between mb-1.5">
                  <h4 class="font-bold text-on-surface text-sm">Reviewer Teladan</h4>
                  <span class="text-[10px] font-black text-on-surface-variant bg-surface-container-highest px-2.5 py-1 rounded-lg">0/5</span>
                </div>
                <p class="text-[11px] font-medium text-on-surface-variant line-clamp-1">5 ulasan bermutu di katalog</p>
                <div class="w-full h-1.5 rounded-full bg-surface-container-highest mt-2.5"><div class="h-full bg-primary rounded-full w-0"></div></div>
              </div>
            </div>
          </div>
        </section>

        <!-- QUICK SHORTCUTS & SUPPORT -->
        <section class="flex flex-col w-full gap-5 bg-white/60 dark:bg-black/40 backdrop-blur-xl p-8 rounded-[2rem] shadow-sm border border-white/50 dark:border-white/10">
          <h3 class="text-xl font-extrabold text-on-surface">Layanan & Integrasi</h3>
          <div class="flex flex-col gap-3">
            <a class="flex items-center justify-between p-4 rounded-2xl bg-white dark:bg-surface-container hover:shadow-md border border-transparent hover:border-outline-variant transition-all group" href="#">
              <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-secondary-container/30 text-secondary flex items-center justify-center group-hover:scale-110 transition-transform">
                  <span class="material-symbols-outlined text-[24px]">verified_user</span>
                </div>
                <div class="flex flex-col gap-0.5">
                  <span class="font-bold text-[15px] text-on-surface group-hover:text-primary transition-colors">Status Denda</span>
                  <span class="text-xs text-secondary font-black tracking-wide uppercase">Bebas Tunggakan</span>
                </div>
              </div>
              <span class="material-symbols-outlined text-outline text-[24px] group-hover:translate-x-1 transition-transform">chevron_right</span>
            </a>
            
            <a class="flex items-center justify-between p-4 rounded-2xl bg-white dark:bg-surface-container hover:shadow-md border border-transparent hover:border-outline-variant transition-all group" href="#">
              <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-primary/10 text-primary flex items-center justify-center group-hover:scale-110 transition-transform">
                  <span class="material-symbols-outlined text-[24px]">sync</span>
                </div>
                <div class="flex flex-col gap-0.5">
                  <span class="font-bold text-[15px] text-on-surface group-hover:text-primary transition-colors">Rapor Literasi</span>
                  <span class="text-xs text-on-surface-variant font-bold">Tersinkron Dapodik</span>
                </div>
              </div>
              <span class="material-symbols-outlined text-outline text-[24px] group-hover:translate-x-1 transition-transform">chevron_right</span>
            </a>
            
            <a class="flex items-center justify-between p-4 rounded-2xl bg-white dark:bg-surface-container hover:shadow-md border border-transparent hover:border-outline-variant transition-all group" href="/bantuan">
              <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-[#ec4899]/10 text-[#ec4899] flex items-center justify-center group-hover:scale-110 transition-transform">
                  <span class="material-symbols-outlined text-[24px]">support_agent</span>
                </div>
                <div class="flex flex-col gap-0.5">
                  <span class="font-bold text-[15px] text-on-surface group-hover:text-primary transition-colors">Tanya Pustakawan</span>
                  <span class="text-xs text-on-surface-variant font-bold">Bantuan Online 24/7</span>
                </div>
              </div>
              <span class="material-symbols-outlined text-outline text-[24px] group-hover:translate-x-1 transition-transform">chevron_right</span>
            </a>
          </div>
        </section>

      </div>
    </div>
  </div>
</main>
HTML;

$final = $before . $newMain . $after;
file_put_contents("c:/xampp/htdocs/perpustakaan29/resources/views/akun.blade.php", $final);
echo "Replaced successfully!";
?>
