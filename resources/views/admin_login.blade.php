<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Masuk Portal Admin - BiblioZ Digital Library</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet"/>
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
<body class="min-h-screen text-slate-900 flex flex-col justify-between selection:bg-[#ffea79] selection:text-black">

  <!-- TOP NAVBAR -->
  <header class="w-full bg-[#fcfbf9]/90 backdrop-blur-md border-b-2 border-black sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between gap-4">
      
      <!-- LOGO -->
      <div class="flex items-center gap-3">
        <div class="w-11 h-11 rounded-xl bg-[#6700bb] text-white border-2 border-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] flex items-center justify-center">
          <span class="material-symbols-outlined text-[24px]">menu_book</span>
        </div>
        <div class="flex flex-col leading-none">
          <div class="flex items-center gap-2">
            <span class="text-2xl font-black tracking-tight text-black font-['Plus_Jakarta_Sans']">BIBLIOZ</span>
            <span class="bg-[#ffea79] text-black border-2 border-black font-black text-[11px] px-2 py-0.5 rounded-lg shadow-[1px_1px_0px_0px_rgba(0,0,0,1)] uppercase">
              ADMIN
            </span>
          </div>
          <span class="text-[9px] font-extrabold text-black/70 tracking-[0.2em] uppercase mt-1">
            DIGITAL LIBRARY CORE
          </span>
        </div>
      </div>

      <!-- RIGHT STATUS & USER LINK -->
      <div class="flex items-center gap-3">
        <!-- SERVER STATUS PILL -->
        <div class="hidden md:flex items-center gap-2 border-2 border-black bg-[#dcfce7] rounded-full px-4 py-1.5 text-xs font-black text-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
          <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 border border-black animate-pulse"></span>
          <span>Server SMKN 1 CIOMAS ONLINE</span>
        </div>

        <!-- KE TAMPILAN SISWA BUTTON -->
        <a href="{{ route('katalog') }}" class="inline-flex items-center gap-1.5 border-2 border-black bg-white rounded-xl px-4 py-2 text-xs font-black text-black hover:bg-gray-50 shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] active:translate-x-0.5 active:translate-y-0.5 transition-all">
          <span>Ke Tampilan Siswa</span>
          <span class="material-symbols-outlined text-[16px]">north_east</span>
        </a>
      </div>

    </div>
  </header>

  <!-- MAIN SECTION -->
  <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6 lg:py-8 flex items-center">
    <div class="w-full grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
      
      <!-- LEFT HERO COLUMN -->
      <div class="lg:col-span-7 flex flex-col gap-5">
        
        <!-- RESTRICTED BADGE -->
        <div class="inline-flex items-center gap-2 border-2 border-black bg-[#ffea79] px-3.5 py-1.5 rounded-full shadow-[3px_3px_0px_0px_rgba(0,0,0,1)] font-black text-xs text-black w-fit">
          <span>⚡ PUSAT KENDALI PUSTAKAWAN & STAF</span>
          <span class="bg-black text-white text-[10px] font-black px-2.5 py-0.5 rounded-full tracking-wider">RESTRICTED</span>
        </div>

        <!-- HERO HEADLINE -->
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-black tracking-tight leading-[1.12]">
          Kelola<br>
          Perpustakaan<br>
          <span class="inline-block bg-[#38bdf8] border-2 border-black px-3.5 py-1 rounded-2xl shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] -rotate-1 text-black font-black my-1">
            Lebih Sat-
          </span><br>
          Set!
        </h1>

        <!-- SUBTITLE -->
        <p class="text-xs sm:text-sm text-gray-700 font-semibold max-w-xl leading-relaxed">
          Sistem otomasi sirkulasi modern, tracking stok buku digital, dan ruang perpustakaan secara otomatis.
        </p>

        <!-- BENTO STATS / INFO CARDS -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-1">
          
          <!-- CARD 1: AGENDA -->
          <div class="border-2 border-black rounded-2xl bg-[#ffea79] p-4 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] flex flex-col justify-between gap-2.5">
            <div class="flex items-center gap-2">
              <div class="w-7 h-7 rounded-lg bg-white border-2 border-black flex items-center justify-center text-black shadow-[1px_1px_0px_0px_rgba(0,0,0,1)]">
                <span class="material-symbols-outlined text-[16px]">calendar_today</span>
              </div>
            </div>
            <div>
              <div class="text-[10px] font-black uppercase tracking-wider text-black/70">AGENDA & PENGUMUMAN</div>
              <div class="text-base font-black text-black mt-0.5">Agenda Hari Ini</div>
            </div>
            <div class="border-2 border-black bg-white rounded-xl px-3 py-1.5 text-xs font-bold text-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] flex items-center gap-2">
              <span>📌</span>
              <span class="truncate">Kunjungan Kelas & Karantina Buku</span>
            </div>
          </div>

          <!-- CARD 2: OPERASIONAL -->
          <div class="border-2 border-black rounded-2xl bg-[#38bdf8] p-4 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] flex flex-col justify-between gap-2.5">
            <div class="flex items-center gap-2">
              <div class="w-7 h-7 rounded-lg bg-white border-2 border-black flex items-center justify-center text-black shadow-[1px_1px_0px_0px_rgba(0,0,0,1)]">
                <span class="material-symbols-outlined text-[16px]">schedule</span>
              </div>
            </div>
            <div>
              <div class="text-[10px] font-black uppercase tracking-wider text-black/70">OPERASIONAL HARI INI</div>
              <div class="text-base font-black text-black mt-0.5" id="shift-title">Shift Pagi</div>
            </div>
            <div class="border-2 border-black bg-white rounded-xl px-3 py-1.5 text-xs font-bold text-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] flex items-center gap-2">
              <span>⚡</span>
              <span class="truncate" id="shift-desc">Pustakawan Siaga (06.30 - 14.50)</span>
            </div>
          </div>

        </div>

        <!-- CARD 3: PROTOKOL KEAMANAN -->
        <div class="border-2 border-black rounded-2xl bg-[#86efac] p-3.5 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] flex items-center justify-between gap-3">
          <div class="flex items-center gap-3 min-w-0">
            <div class="w-9 h-9 rounded-xl bg-white border-2 border-black flex items-center justify-center text-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] flex-shrink-0">
              <span class="material-symbols-outlined text-xl text-black">verified_user</span>
            </div>
            <div class="flex flex-col min-w-0">
              <span class="text-xs font-black uppercase tracking-wider text-black truncate">PROTOKOL KEAMANAN MANDIRI</span>
              <span class="text-[11px] font-bold text-black/80 truncate">Otentikasi Kredensial Terenkripsi & Verifikasi ID Pegawai Resmi</span>
            </div>
          </div>
          <span class="border-2 border-black bg-white rounded-xl px-3 py-1 text-xs font-black text-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] flex-shrink-0">
            256-Bit SSL
          </span>
        </div>

      </div>

      <!-- RIGHT LOGIN FORM CARD -->
      <div class="lg:col-span-5">
        <div class="relative bg-white border-2 border-black rounded-3xl p-5 sm:p-7 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)]">
          
          <!-- FLOATING BADGE -->
          <div class="absolute -top-3.5 right-6 bg-[#ff5252] border-2 border-black text-white text-[11px] sm:text-xs font-black px-3.5 py-1 rounded-xl shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] flex items-center gap-1.5 z-10 select-none">
            <span>🚨 AREA KHUSUS PEGAWAI</span>
          </div>

          <!-- FORM HEADER -->
          <div class="mt-1 mb-3">
            <div class="flex items-center justify-between">
              <h2 class="text-2xl font-black text-black tracking-tight flex items-center gap-2">
                <span>Masuk Portal Admin</span>
                <span class="text-amber-500">⚡</span>
              </h2>
            </div>
            <p class="text-xs text-gray-500 font-semibold mt-0.5">
              Gunakan ID Pegawai yang terdaftar di sistem.
            </p>
          </div>

          <!-- ALERT MESSAGES -->
          <div id="login-alert" class="hidden mb-3 p-2.5 rounded-xl border-2 border-black text-xs font-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] flex items-center gap-2"></div>

          @if(session('error'))
          <div class="mb-3 p-2.5 rounded-xl border-2 border-black bg-rose-100 text-rose-800 text-xs font-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] flex items-center gap-2">
            <span>⚠️</span>
            <span>{{ session('error') }}</span>
          </div>
          @endif

          @if(session('success'))
          <div class="mb-3 p-2.5 rounded-xl border-2 border-black bg-emerald-100 text-emerald-800 text-xs font-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] flex items-center gap-2">
            <span>✅</span>
            <span>{{ session('success') }}</span>
          </div>
          @endif

          <form id="admin-login-form" action="{{ route('admin.login.submit') }}" method="POST" class="flex flex-col gap-3">
            @csrf
            <input type="hidden" name="role" id="role-input" value="Pustakawan">

            <!-- ROLE PICKER -->
            <div class="flex flex-col gap-1.5">
              <div class="flex items-center justify-between">
                <label class="text-[11px] font-black uppercase tracking-wider text-black">
                  PILIH PERAN / PENUGASAN:
                </label>
                <button type="button" onclick="fillDemoCredentials()" class="text-[10px] font-black text-[#6d28d9] hover:underline flex items-center gap-1">
                  <span>⚡ Isi Kredensial Demo</span>
                </button>
              </div>
              <div class="grid grid-cols-3 gap-2">
                <button type="button" onclick="selectRole('Pustakawan')" id="role-btn-Pustakawan" class="role-btn border-2 border-black rounded-xl py-2 px-1 text-center font-black text-xs transition-all bg-[#ffea79] text-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                  📚 Pustakawan
                </button>
                <button type="button" onclick="selectRole('Kepala Perpus')" id="role-btn-Kepala" class="role-btn border-2 border-black rounded-xl py-2 px-1 text-center font-black text-xs transition-all bg-white text-black hover:bg-gray-50">
                  👑 Kepala Perpus
                </button>
                <button type="button" onclick="selectRole('Admin IT')" id="role-btn-IT" class="role-btn border-2 border-black rounded-xl py-2 px-1 text-center font-black text-xs transition-all bg-white text-black hover:bg-gray-50">
                  🛠️ Admin IT
                </button>
              </div>
            </div>

            <!-- ID PEGAWAI -->
            <div class="flex flex-col gap-1">
              <div class="flex items-center justify-between text-[11px] font-black">
                <label class="uppercase tracking-wider text-black" for="username">ID PEGAWAI</label>
                <span class="text-gray-400 font-bold">Wajib</span>
              </div>
              <div class="relative border-2 border-black rounded-xl bg-white px-3.5 py-2.5 flex items-center gap-2.5 shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] focus-within:ring-2 focus-within:ring-black">
                <span class="material-symbols-outlined text-gray-500 text-[20px] select-none">person</span>
                <input type="text" name="username" id="username" required
                  value="{{ old('username', '') }}"
                  placeholder="Contoh: PST-001"
                  class="w-full bg-transparent font-bold text-sm text-black placeholder:text-gray-400 focus:outline-none">
              </div>
            </div>

            <!-- PIN / PASSWORD -->
            <div class="flex flex-col gap-1">
              <div class="flex items-center justify-between text-[11px] font-black">
                <label class="uppercase tracking-wider text-black" for="password">PIN KEAMANAN / KATA SANDI</label>
                <a href="javascript:void(0)" onclick="alert('Silakan hubungi Unit IT Perpustakaan untuk reset PIN kredensial.')" class="text-[#6d28d9] hover:underline font-bold">Lupa PIN?</a>
              </div>
              <div class="relative border-2 border-black rounded-xl bg-white px-3.5 py-2.5 flex items-center gap-2.5 shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] focus-within:ring-2 focus-within:ring-black">
                <span class="material-symbols-outlined text-gray-500 text-[20px] select-none">lock</span>
                <input type="password" name="password" id="password" required
                  value=""
                  placeholder="••••••••••"
                  class="w-full bg-transparent font-bold text-sm text-black placeholder:text-gray-400 focus:outline-none">
                <button type="button" onclick="togglePasswordVisibility()" class="text-gray-500 hover:text-black focus:outline-none">
                  <span class="material-symbols-outlined text-[20px]" id="eye-icon">visibility</span>
                </button>
              </div>
            </div>

            <!-- REMEMBER & MAX SESSION -->
            <div class="flex items-center justify-between pt-0.5">
              <label class="flex items-center gap-2 cursor-pointer select-none">
                <input type="checkbox" name="remember" checked class="w-4 h-4 rounded border-2 border-black text-[#6d28d9] focus:ring-0 cursor-pointer">
                <span class="text-xs font-bold text-gray-800">Ingat sesi di PC perpustakaan ini</span>
              </label>
              <span class="border border-gray-400 rounded-md px-2 py-0.5 text-[10px] font-bold text-gray-600">
                Maks 8 Jam
              </span>
            </div>

            <!-- SUBMIT BUTTON -->
            <button type="submit" id="login-submit-btn" class="w-full mt-1 bg-[#6700bb] hover:bg-[#55009e] text-white font-black text-sm py-3 px-4 rounded-xl border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] active:translate-x-0.5 active:translate-y-0.5 flex items-center justify-center gap-2 cursor-pointer transition-all">
              <span id="login-submit-text">Masuk ke Dashboard Sistem</span>
              <span class="material-symbols-outlined text-[18px]" id="login-submit-icon">arrow_forward</span>
            </button>

            <!-- WARNING BOX -->
            <div class="border-2 border-dashed border-amber-300 bg-amber-50 rounded-xl p-2.5 flex items-start gap-2 text-[11px] text-gray-700 font-medium">
              <span class="text-sm leading-none">⚠️</span>
              <p class="leading-tight">
                Harap selalu klik <strong>Keluar / Logout</strong> setelah selesai bertugas di meja sirkulasi untuk mencegah akses tanpa hak.
              </p>
            </div>

          </form>

        </div>
      </div>

    </div>
  </main>

  <!-- JAVASCRIPT FOR ROLE SELECTION, PASSWORD TOGGLE, CSRF RECOVERY & DEMO FILLER -->
  <script>
    const roleCredentials = {
      'Pustakawan': { id: 'PST-001', pin: 'pustaka123', placeholder: 'Contoh: PST-001' },
      'Kepala Perpus': { id: 'KPL-001', pin: 'kepala123', placeholder: 'Contoh: KPL-001' },
      'Admin IT': { id: 'ADM-001', pin: 'adminit123', placeholder: 'Contoh: ADM-001' }
    };

    function selectRole(role) {
      document.getElementById('role-input').value = role;

      const roles = [
        { key: 'Pustakawan', id: 'role-btn-Pustakawan' },
        { key: 'Kepala Perpus', id: 'role-btn-Kepala' },
        { key: 'Admin IT', id: 'role-btn-IT' }
      ];

      roles.forEach(r => {
        const btn = document.getElementById(r.id);
        if (r.key === role) {
          btn.className = 'role-btn border-2 border-black rounded-xl py-2 px-1 text-center font-black text-xs transition-all bg-[#ffea79] text-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]';
        } else {
          btn.className = 'role-btn border-2 border-black rounded-xl py-2 px-1 text-center font-black text-xs transition-all bg-white text-black hover:bg-gray-50';
        }
      });

      // Update placeholder according to selected role
      const usernameInput = document.getElementById('username');
      if (usernameInput && roleCredentials[role]) {
        usernameInput.placeholder = roleCredentials[role].placeholder;
      }
    }

    function togglePasswordVisibility() {
      const pwdInput = document.getElementById('password');
      const eyeIcon = document.getElementById('eye-icon');

      if (pwdInput.type === 'password') {
        pwdInput.type = 'text';
        eyeIcon.textContent = 'visibility_off';
      } else {
        pwdInput.type = 'password';
        eyeIcon.textContent = 'visibility';
      }
    }

    function fillDemoCredentials() {
      const currentRole = document.getElementById('role-input').value || 'Pustakawan';
      const creds = roleCredentials[currentRole] || roleCredentials['Pustakawan'];
      
      document.getElementById('username').value = creds.id;
      document.getElementById('password').value = creds.pin;
    }

    // Dynamic shift based on client time
    (function updateShift() {
      const hour = new Date().getHours();
      const shiftTitle = document.getElementById('shift-title');
      const shiftDesc = document.getElementById('shift-desc');
      if (shiftTitle && shiftDesc) {
        if (hour >= 6 && hour < 15) {
          shiftTitle.textContent = 'Shift Pagi';
          shiftDesc.textContent = 'Pustakawan Siaga (06.30 - 14.50)';
        } else if (hour >= 15 && hour < 21) {
          shiftTitle.textContent = 'Shift Sore';
          shiftDesc.textContent = 'Pustakawan Siaga (14.50 - 21.00)';
        } else {
          shiftTitle.textContent = 'Layanan Mandiri';
          shiftDesc.textContent = 'Sistem Otomasi Aktif (24 Jam)';
        }
      }
    })();

    // Auto-refresh page on Back/Forward navigation to prevent stale CSRF tokens
    window.addEventListener('pageshow', function (event) {
      if (event.persisted) {
        window.location.reload();
      }
    });

    // Helper to refresh CSRF token in DOM
    async function refreshCsrfToken() {
      try {
        const res = await fetch("{{ route('csrf.token') }}", { headers: { 'Accept': 'application/json' } });
        if (res.ok) {
          const data = await res.json();
          if (data.csrf_token) {
            document.querySelectorAll('input[name="_token"]').forEach(el => el.value = data.csrf_token);
            const meta = document.querySelector('meta[name="csrf-token"]');
            if (meta) meta.setAttribute('content', data.csrf_token);
            return data.csrf_token;
          }
        }
      } catch (e) {}
      return null;
    }

    // Refresh token periodically every 15 minutes
    setInterval(refreshCsrfToken, 15 * 60 * 1000);

    // Smooth AJAX Login Submission with Automatic 419 Recovery
    const loginForm = document.getElementById('admin-login-form');
    const submitBtn = document.getElementById('login-submit-btn');
    const submitBtnText = document.getElementById('login-submit-text');
    const alertBox = document.getElementById('login-alert');

    function showLoginAlert(msg, type = 'error') {
      alertBox.className = type === 'success'
        ? 'mb-3 p-2.5 rounded-xl border-2 border-black bg-emerald-100 text-emerald-900 text-xs font-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] flex items-center gap-2'
        : 'mb-3 p-2.5 rounded-xl border-2 border-black bg-rose-100 text-rose-900 text-xs font-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] flex items-center gap-2';
      alertBox.innerHTML = `<span>${type === 'success' ? '✅' : '⚠️'}</span><span>${msg}</span>`;
      alertBox.classList.remove('hidden');
    }

    if (loginForm) {
      loginForm.addEventListener('submit', async function (e) {
        e.preventDefault();

        const username = document.getElementById('username').value.trim();
        const password = document.getElementById('password').value;
        const role = document.getElementById('role-input').value;
        const remember = document.querySelector('input[name="remember"]')?.checked;
        let token = document.querySelector('input[name="_token"]').value;

        if (!username || !password) {
          showLoginAlert('Mohon lengkapi ID Pegawai dan PIN Keamanan.');
          return;
        }

        submitBtn.disabled = true;
        submitBtn.classList.add('opacity-80', 'cursor-not-allowed');
        submitBtnText.textContent = 'Memverifikasi Kredensial...';
        alertBox.classList.add('hidden');

        try {
          let res = await fetch("{{ route('admin.login.submit') }}", {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'Accept': 'application/json',
              'X-CSRF-TOKEN': token
            },
            body: JSON.stringify({
              _token: token,
              username: username,
              password: password,
              role: role,
              remember: remember
            })
          });

          // If 419 token expired, auto-refresh token and retry once
          if (res.status === 419) {
            const newToken = await refreshCsrfToken();
            if (newToken) {
              token = newToken;
              res = await fetch("{{ route('admin.login.submit') }}", {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/json',
                  'Accept': 'application/json',
                  'X-CSRF-TOKEN': token
                },
                body: JSON.stringify({
                  _token: token,
                  username: username,
                  password: password,
                  role: role,
                  remember: remember
                })
              });
            }
          }

          const data = await res.json();
          if (res.ok && data.success) {
            showLoginAlert(data.message || 'Login berhasil! Mengalihkan ke dashboard...', 'success');
            submitBtnText.textContent = 'Berhasil! Mengalihkan...';
            setTimeout(() => {
              window.location.href = data.redirect || "{{ route('admin') }}";
            }, 600);
          } else {
            showLoginAlert(data.message || 'ID Pegawai atau PIN salah untuk peran ini.');
            submitBtn.disabled = false;
            submitBtn.classList.remove('opacity-80', 'cursor-not-allowed');
            submitBtnText.textContent = 'Masuk ke Dashboard Sistem';
          }
        } catch (err) {
          // If unexpected error or offline, fallback to regular form submit
          loginForm.submit();
        }
      });
    }
  </script>

</body>
</html>
