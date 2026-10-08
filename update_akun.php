<?php
$content = file_get_contents("c:/xampp/htdocs/perpustakaan29/resources/views/akun.blade.php");

$start = strpos($content, "<main ");
$end = strpos($content, "<script>", $start);

$before = substr($content, 0, $start);
$after = substr($content, $end);

$newMain = <<<HTML
<main class="flex flex-col relative w-full md:w-[calc(100%-16rem)] md:ml-64 pt-16 pb-24 md:pb-8 bg-surface min-h-screen">
  <div class="flex flex-col w-full max-w-7xl mx-auto px-4 md:px-8 py-8 gap-8">
    
    <!-- HEADER HERO SECTION -->
    <section class="flex flex-col md:flex-row items-center bg-surface-container-lowest p-6 rounded-3xl shadow-sm gap-8 relative overflow-hidden">
      <!-- Decorative BG -->
      <div class="absolute -right-20 -top-20 w-64 h-64 bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>
      
      <!-- Profile Info -->
      <div class="flex items-center gap-5 z-10 w-full md:w-auto">
        <div class="relative flex-shrink-0">
          <img id="profile-avatar-large" class="w-20 h-20 rounded-full object-cover shadow-md border-4 border-surface" alt="Avatar" src="https://ui-avatars.com/api/?name=User&background=random&color=fff"/>
          <div class="absolute -bottom-1 -right-1 w-7 h-7 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container shadow-sm">
            <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">verified</span>
          </div>
        </div>
        <div class="flex flex-col min-w-0">
          <h2 id="profile-name" class="font-display-lg text-3xl font-extrabold text-on-surface truncate">{{ \$user->name ?? 'Nama Siswa' }}</h2>
          <p id="profile-nis" class="font-body-lg text-on-surface-variant mt-1">NIS: {{ \$user->nis ?? '1234567890' }} • {{ \$user->role ?? 'Siswa' }}</p>
          <p id="profile-school-name" class="font-label-md text-primary tracking-widest uppercase mt-2 bg-primary/10 inline-block px-3 py-1 rounded-full w-max">{{ \$user->school_name ?? 'SMAN 1 Garudapura' }}</p>
        </div>
      </div>

      <!-- XP & Gamification Mini Widget -->
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
      <div class="flex-1 w-full md:max-w-md ml-auto bg-surface-container p-5 rounded-2xl z-10 flex flex-col gap-3">
        <div class="flex items-center justify-between">
          <div class="flex flex-col">
            <span class="text-xs text-on-surface-variant font-bold uppercase tracking-wider">Peringkat Literasi</span>
            <span class="font-bold text-lg text-on-surface" id="profile-level-title">Level {{ \$user->level }} • {{ \$levelTitle }}</span>
          </div>
          <span class="text-xs font-bold px-3 py-1.5 rounded-full bg-primary text-on-primary shadow-sm" id="profile-top-percent">
            Top {{ max(1, 100 - (\$user->level * 10)) }}%
          </span>
        </div>
        <div class="flex flex-col gap-1.5">
          <div class="flex items-center justify-between text-xs font-bold text-on-surface-variant">
            <span id="profile-xp-text">{{ \$user->xp }} / {{ \$nextLevelXp }} XP</span>
            <span id="profile-xp-next">+{{ \$nextLevelXp - \$user->xp }} XP ke Level {{ \$user->level + 1 }}</span>
          </div>
          <div class="w-full h-2.5 rounded-full bg-surface-container-highest overflow-hidden">
            <div id="profile-xp-bar" class="h-full rounded-full bg-gradient-to-r from-primary to-secondary-fixed transition-all duration-700" style="width: {{ \$xpPercent }}%;"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- MAIN GRID DASHBOARD -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
      
      <!-- LEFT COLUMN (Main Content) -->
      <div class="lg:col-span-8 flex flex-col gap-8">
        
        <!-- COMPACT STATS (Bento 4-Grid) -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
          <div class="rounded-2xl bg-surface-container-lowest p-5 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow gap-3 border border-surface-container-low">
            <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
              <span class="material-symbols-outlined text-[22px]">auto_stories</span>
            </div>
            <div>
              <div class="font-bold text-2xl text-on-surface">{{ \$user->read_count }}</div>
              <div class="text-xs text-on-surface-variant font-medium uppercase tracking-wide">Buku Selesai</div>
            </div>
          </div>
          <div class="rounded-2xl bg-surface-container-lowest p-5 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow gap-3 border border-surface-container-low">
            <div class="w-10 h-10 rounded-xl bg-secondary-container/40 text-secondary flex items-center justify-center">
              <span class="material-symbols-outlined text-[22px]">schedule</span>
            </div>
            <div>
              <div class="font-bold text-2xl text-on-surface">{{ \$user->reading_hours }}<span class="text-lg">j</span></div>
              <div class="text-xs text-on-surface-variant font-medium uppercase tracking-wide">Total Baca</div>
            </div>
          </div>
          <div class="rounded-2xl bg-surface-container-lowest p-5 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow gap-3 border border-surface-container-low">
            <div class="w-10 h-10 rounded-xl bg-tertiary-container/30 text-tertiary flex items-center justify-center">
              <span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' {{ \$user->reviews_count > 0 ? '1' : '0' }};">star</span>
            </div>
            <div>
              <div class="font-bold text-2xl text-on-surface">{{ \$user->reviews_count }}</div>
              <div class="text-xs text-on-surface-variant font-medium uppercase tracking-wide">Rating Ulasan</div>
            </div>
          </div>
          <div class="rounded-2xl bg-surface-container-lowest p-5 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow gap-3 border border-surface-container-low">
            <div class="w-10 h-10 rounded-xl bg-error/10 text-error flex items-center justify-center">
              <span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' {{ \$user->favorites_count > 0 ? '1' : '0' }};">favorite</span>
            </div>
            <div>
              <div class="font-bold text-2xl text-on-surface">{{ \$user->favorites_count }}</div>
              <div class="text-xs text-on-surface-variant font-medium uppercase tracking-wide">Favorit</div>
            </div>
          </div>
        </div>

        <!-- DIGITAL PASS CARD (Redesigned) -->
        <div class="relative w-full rounded-3xl bg-gradient-to-br from-primary via-[#5a189a] to-primary-container p-8 text-on-primary shadow-xl overflow-hidden group">
          <div class="absolute -right-20 -top-20 w-64 h-64 bg-secondary-fixed/30 rounded-full blur-3xl pointer-events-none group-hover:bg-secondary-fixed/40 transition-colors duration-500"></div>
          <div class="absolute right-0 bottom-0 opacity-[0.07] pointer-events-none transform translate-x-8 translate-y-8">
            <span class="material-symbols-outlined text-[180px]">local_library</span>
          </div>
          <div class="relative z-10 flex flex-col gap-6">
            <div class="flex items-center justify-between">
              <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-secondary-fixed text-[24px]">bolt</span>
                <span class="font-bold tracking-[0.2em] uppercase text-secondary-fixed text-sm">BiblioZ Pass • 26/27</span>
              </div>
              <span class="px-3 py-1.5 rounded-full bg-white/20 backdrop-blur-md text-xs font-bold text-white shadow-inner">
                Master Reader ?
              </span>
            </div>
            
            <div class="flex items-end justify-between pt-4">
              <div>
                <p class="text-xs text-primary-fixed uppercase tracking-widest font-bold mb-1">Nomor Anggota Digital</p>
                <p class="text-3xl font-black tracking-wider text-white drop-shadow-sm">BZ-9921-4882-01</p>
                <p class="text-sm text-primary-fixed mt-2 opacity-90">Berlaku s/d Juni 2027 • Gerbang RFID Aktif</p>
              </div>
              <div class="w-12 h-10 rounded-xl bg-white/25 flex items-center justify-center backdrop-blur-sm shadow-inner">
                <span class="material-symbols-outlined text-white text-[28px]">contactless</span>
              </div>
            </div>

            <div class="pt-4 border-t border-white/10 mt-2">
              <button class="w-full py-3.5 px-4 rounded-xl bg-white text-primary font-bold text-sm flex items-center justify-center gap-2 shadow-lg hover:bg-surface-container-lowest transition-transform active:scale-[0.98]" id="toggleQrBtn">
                <span class="material-symbols-outlined text-[22px]">qr_code_scanner</span>
                <span>Tampilkan Barcode & QR Masuk Kilat</span>
              </button>
            </div>
            
            <div class="hidden flex-col items-center justify-center bg-white text-on-surface rounded-xl p-5 mt-2 gap-3 shadow-inner" id="qrCodeContainer">
              <div class="flex flex-col items-center w-full max-w-sm">
                <!-- Barcode dummy -->
                <div class="w-full h-14 flex items-center justify-between py-1 bg-surface-container-lowest border border-outline-variant px-4 rounded-lg">
                  <span class="w-1.5 h-full bg-on-surface"></span><span class="w-1 h-full bg-on-surface"></span><span class="w-2.5 h-full bg-on-surface"></span><span class="w-2 h-full bg-on-surface"></span><span class="w-1 h-full bg-on-surface"></span><span class="w-3 h-full bg-on-surface"></span><span class="w-1.5 h-full bg-on-surface"></span><span class="w-2 h-full bg-on-surface"></span><span class="w-1 h-full bg-on-surface"></span><span class="w-2.5 h-full bg-on-surface"></span><span class="w-1.5 h-full bg-on-surface"></span><span class="w-1 h-full bg-on-surface"></span><span class="w-2 h-full bg-on-surface"></span><span class="w-3 h-full bg-on-surface"></span><span class="w-1 h-full bg-on-surface"></span><span class="w-1.5 h-full bg-on-surface"></span><span class="w-2 h-full bg-on-surface"></span>
                </div>
                <span id="profile-gate-id" class="font-bold tracking-[0.15em] text-on-surface-variant mt-2 text-sm">1234567890-BIBLIOZ-GATE</span>
              </div>
              <p class="text-xs text-center text-on-surface-variant max-w-[250px]">Arahkan ke scanner turnstile gerbang perpustakaan atau meja sirkulasi mandiri</p>
            </div>
          </div>
        </div>

        <!-- RIWAYAT SIRKULASI -->
        <section class="flex flex-col w-full gap-5 bg-surface-container-lowest p-6 rounded-3xl shadow-sm border border-surface-container-low">
          <div class="flex items-center justify-between">
            <h3 class="text-xl font-bold text-on-surface">Riwayat Sirkulasi</h3>
            <span class="text-xs font-bold text-primary bg-primary/10 px-3 py-1 rounded-full uppercase tracking-wider">Semester Ganjil</span>
          </div>
          
          <div class="flex items-center gap-2 overflow-x-auto pb-2 no-scrollbar">
            <button class="px-4 py-2 rounded-xl bg-primary text-on-primary font-bold text-sm whitespace-nowrap shadow-md">
              Selesai Dibaca ({{ \$borrowings->count() }})
            </button>
            <button class="px-4 py-2 rounded-xl bg-surface-container text-on-surface-variant font-bold text-sm whitespace-nowrap hover:bg-surface-container-high transition-colors">
              Sedang Berjalan (0)
            </button>
            <button class="px-4 py-2 rounded-xl bg-surface-container text-on-surface-variant font-bold text-sm whitespace-nowrap hover:bg-surface-container-high transition-colors">
              Reservasi (0)
            </button>
          </div>
          
          <div class="flex flex-col gap-4 mt-2">
            @forelse (\$borrowings as \$borrow)
            <div class="flex gap-5 p-4 rounded-2xl bg-surface hover:bg-surface-container-lowest hover:shadow-md transition-all border border-surface-container">
              <div class="w-20 h-28 rounded-xl overflow-hidden flex-shrink-0 bg-surface-container shadow-sm border border-surface-container-highest">
                <img class="w-full h-full object-cover" alt="{{ \$borrow->book->title ?? 'Buku' }}" src="{{ asset(\$borrow->book->cover_image_url ?? '') }}"/>
              </div>
              <div class="flex flex-col justify-between flex-1 min-w-0 py-0.5">
                <div class="flex flex-col">
                  <div class="flex items-center justify-between gap-2 mb-1">
                    <span class="px-2 py-0.5 rounded-md {{ \$borrow->book->type == 'physical' ? 'bg-surface-container-high text-primary' : 'bg-secondary-container/60 text-on-secondary-container' }} text-[10px] font-bold uppercase tracking-wider">{{ \$borrow->book->type == 'physical' ? 'Fisik' : 'E-Book' }}</span>
                    <span class="text-xs text-on-surface-variant font-medium">{{ \Carbon\Carbon::parse(\$borrow->borrowed_at)->format('d M Y') }}</span>
                  </div>
                  <h4 class="text-base font-bold text-on-surface truncate">{{ \$borrow->book->title ?? 'Judul Buku' }}</h4>
                  <p class="text-sm text-on-surface-variant truncate">{{ \$borrow->book->author ?? 'Penulis' }}</p>
                </div>
                <div class="flex items-center justify-between pt-3">
                  <div class="flex items-center text-amber-500 gap-0.5">
                    @if(\$borrow->book->rating)
                      <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                      <span class="text-xs font-bold text-on-surface ml-1">{{ number_format(\$borrow->book->rating, 1) }}</span>
                    @else
                      <span class="text-xs text-on-surface-variant">Belum ada rating</span>
                    @endif
                  </div>
                  @if(\$borrow->book->type == 'physical')
                  <button class="px-4 py-1.5 rounded-lg bg-surface-container-high text-primary font-bold text-xs hover:bg-primary/10 transition-colors">
                    Pinjam Lagi
                  </button>
                  @else
                  <a href="{{ route('baca.ebook', \$borrow->book->id) }}" class="px-4 py-1.5 rounded-lg bg-primary-container text-on-primary-container font-bold text-xs hover:bg-primary hover:text-white transition-colors">
                    Buka File
                  </a>
                  @endif
                </div>
              </div>
            </div>
            @empty
            <div class="p-8 text-center flex flex-col items-center gap-3 bg-surface rounded-2xl border border-dashed border-outline-variant">
              <span class="material-symbols-outlined text-[40px] text-outline">history</span>
              <p class="text-on-surface-variant font-medium">Belum ada riwayat membaca.</p>
            </div>
            @endforelse
          </div>
        </section>

      </div>

      <!-- RIGHT COLUMN (Sidebar) -->
      <div class="lg:col-span-4 flex flex-col gap-8">
        
        <!-- DAILY STREAK WIDGET -->
        <div class="flex flex-col p-6 rounded-3xl {{ \$isStreakActive ? 'bg-gradient-to-br from-[#fff7ed] to-[#ffedd5] border border-[#fed7aa]' : 'bg-surface-container border border-surface-container-high' }} shadow-sm gap-4">
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-2xl flex items-center justify-center {{ \$isStreakActive ? 'bg-orange-500 text-white shadow-lg shadow-orange-500/30' : 'bg-surface-container-highest text-outline grayscale' }}">
              <span class="text-3xl">??</span>
            </div>
            <div class="flex flex-col">
              <span class="text-xl font-black {{ \$isStreakActive ? 'text-orange-600' : 'text-on-surface' }}">{{ \$displayStreak }} Hari Streak</span>
              <span class="text-sm {{ \$isStreakActive ? 'text-orange-500 font-medium' : 'text-on-surface-variant' }}">{{ \$isStreakActive ? 'Luar biasa! Pertahankan!' : 'Ayo mulai baca hari ini!' }}</span>
            </div>
          </div>
          <div class="flex items-center justify-between mt-2 px-1">
            @foreach(['S','S','R','K','J','S','M'] as \$index => \$day)
            <div class="flex flex-col items-center gap-1.5">
              <span class="w-8 h-8 rounded-full {{ (\$isStreakActive && \$index < min(7, \$displayStreak)) ? 'bg-orange-500 text-white shadow-md' : 'bg-surface-container-highest text-on-surface-variant' }} flex items-center justify-center text-xs font-bold">{{ \$day }}</span>
            </div>
            @endforeach
          </div>
        </div>

        <!-- BADGE REWARDS & PRESTASI -->
        <section class="flex flex-col w-full gap-5 bg-surface-container-lowest p-6 rounded-3xl shadow-sm border border-surface-container-low">
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
              <h3 class="text-lg font-bold text-on-surface">Lencana Prestasi</h3>
              <span class="text-xl">??</span>
            </div>
          </div>
          
          <div class="flex items-center bg-surface-container rounded-xl p-1 text-sm font-bold w-full">
            <button class="flex-1 py-1.5 rounded-lg text-on-surface-variant hover:text-on-surface transition-all" id="badgeTabUnlocked">Tercapai (0)</button>
            <button class="flex-1 py-1.5 rounded-lg bg-surface-container-lowest text-primary shadow-sm transition-all" id="badgeTabLocked">Terkunci (6)</button>
          </div>
          
          <div class="flex flex-col gap-3 max-h-[400px] overflow-y-auto pr-2 custom-scrollbar" id="badgeContainer">
            <!-- Badge 1 -->
            <div class="badge-item locked flex items-center p-4 rounded-2xl bg-surface border border-surface-container gap-4 opacity-80 hover:opacity-100 transition-opacity">
              <div class="w-12 h-12 rounded-xl bg-surface-container-highest text-outline flex items-center justify-center flex-shrink-0">
                <span class="material-symbols-outlined text-[24px]">lock</span>
              </div>
              <div class="flex flex-col flex-1">
                <div class="flex items-center justify-between mb-1">
                  <h4 class="font-bold text-on-surface text-sm">Speed Reader</h4>
                  <span class="text-[10px] font-bold text-on-surface-variant bg-surface-container px-2 py-0.5 rounded-full">0/1</span>
                </div>
                <p class="text-xs text-on-surface-variant line-clamp-1">Selesaikan baca buku < 48 jam</p>
                <div class="w-full h-1.5 rounded-full bg-surface-container mt-2"><div class="h-full bg-primary rounded-full w-0"></div></div>
              </div>
            </div>
            <!-- Badge 2 -->
            <div class="badge-item locked flex items-center p-4 rounded-2xl bg-surface border border-surface-container gap-4 opacity-80 hover:opacity-100 transition-opacity">
              <div class="w-12 h-12 rounded-xl bg-surface-container-highest text-outline flex items-center justify-center flex-shrink-0">
                <span class="material-symbols-outlined text-[24px]">lock</span>
              </div>
              <div class="flex flex-col flex-1">
                <div class="flex items-center justify-between mb-1">
                  <h4 class="font-bold text-on-surface text-sm">Marathon Kurikulum</h4>
                  <span class="text-[10px] font-bold text-on-surface-variant bg-surface-container px-2 py-0.5 rounded-full">0/10</span>
                </div>
                <p class="text-xs text-on-surface-variant line-clamp-1">Baca 10 modul pelajaran resmi</p>
                <div class="w-full h-1.5 rounded-full bg-surface-container mt-2"><div class="h-full bg-primary rounded-full w-0"></div></div>
              </div>
            </div>
            <!-- Badge 3 -->
            <div class="badge-item locked flex items-center p-4 rounded-2xl bg-surface border border-surface-container gap-4 opacity-80 hover:opacity-100 transition-opacity">
              <div class="w-12 h-12 rounded-xl bg-surface-container-highest text-outline flex items-center justify-center flex-shrink-0">
                <span class="material-symbols-outlined text-[24px]">lock</span>
              </div>
              <div class="flex flex-col flex-1">
                <div class="flex items-center justify-between mb-1">
                  <h4 class="font-bold text-on-surface text-sm">Reviewer Teladan</h4>
                  <span class="text-[10px] font-bold text-on-surface-variant bg-surface-container px-2 py-0.5 rounded-full">0/5</span>
                </div>
                <p class="text-xs text-on-surface-variant line-clamp-1">5 ulasan bermutu di katalog</p>
                <div class="w-full h-1.5 rounded-full bg-surface-container mt-2"><div class="h-full bg-primary rounded-full w-0"></div></div>
              </div>
            </div>
          </div>
        </section>

        <!-- QUICK SHORTCUTS & SUPPORT -->
        <section class="flex flex-col w-full gap-4 bg-surface-container-lowest p-6 rounded-3xl shadow-sm border border-surface-container-low">
          <h3 class="text-lg font-bold text-on-surface">Layanan & Integrasi</h3>
          <div class="flex flex-col gap-3">
            <a class="flex items-center justify-between p-3 rounded-2xl bg-surface hover:bg-surface-container border border-surface-container transition-colors group" href="#">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-secondary-container/30 text-secondary flex items-center justify-center">
                  <span class="material-symbols-outlined text-[20px]">verified_user</span>
                </div>
                <div class="flex flex-col">
                  <span class="font-bold text-sm text-on-surface group-hover:text-primary transition-colors">Status Denda</span>
                  <span class="text-xs text-secondary font-medium">Bebas Tunggakan</span>
                </div>
              </div>
              <span class="material-symbols-outlined text-outline text-[20px]">chevron_right</span>
            </a>
            
            <a class="flex items-center justify-between p-3 rounded-2xl bg-surface hover:bg-surface-container border border-surface-container transition-colors group" href="#">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                  <span class="material-symbols-outlined text-[20px]">sync</span>
                </div>
                <div class="flex flex-col">
                  <span class="font-bold text-sm text-on-surface group-hover:text-primary transition-colors">Rapor Literasi</span>
                  <span class="text-xs text-on-surface-variant">Tersinkron Dapodik</span>
                </div>
              </div>
              <span class="material-symbols-outlined text-outline text-[20px]">chevron_right</span>
            </a>
            
            <a class="flex items-center justify-between p-3 rounded-2xl bg-surface hover:bg-surface-container border border-surface-container transition-colors group" href="/bantuan">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-tertiary-container/40 text-tertiary flex items-center justify-center">
                  <span class="material-symbols-outlined text-[20px]">support_agent</span>
                </div>
                <div class="flex flex-col">
                  <span class="font-bold text-sm text-on-surface group-hover:text-primary transition-colors">Tanya Pustakawan</span>
                  <span class="text-xs text-on-surface-variant">Bantuan 24/7</span>
                </div>
              </div>
              <span class="material-symbols-outlined text-outline text-[20px]">chevron_right</span>
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
