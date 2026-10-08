<?php
$file = __DIR__ . '/resources/views/sirkulasi.blade.php';
$content = file_get_contents($file);

// 1. Replace the entire JS script tags section starting from `// --- Custom Modal Logic ---` to `</script>`
$oldModalLogicRegex = '/\/\/ --- Custom Modal Logic ---.*?<\/script>/s';

$newModalLogic = <<<JAVASCRIPT
// --- Custom Modal Logic ---
    function showConfirmModal(title, text, onConfirm) {
      const modalHTML = `
        <div id="custom-modal" class="fixed inset-0 z-[100] flex items-center justify-center p-4">
          <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-md transition-opacity opacity-0 duration-300" id="modal-backdrop"></div>
          <div class="relative bg-white/80 backdrop-blur-2xl border border-white/60 rounded-[32px] w-full max-w-sm p-8 shadow-[0_20px_60px_rgba(31,38,135,0.15)] transform scale-95 opacity-0 transition-all duration-300 overflow-hidden" id="modal-card">
            
            <!-- Ambient modal glow -->
            <div class="absolute -top-10 -right-10 w-32 h-32 bg-indigo-400/20 rounded-full blur-2xl"></div>
            <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-purple-400/20 rounded-full blur-2xl"></div>

            <div class="w-20 h-20 rounded-[24px] bg-gradient-to-br from-indigo-100 to-white shadow-inner flex items-center justify-center mx-auto mb-6 relative z-10 border border-white">
              <span class="material-symbols-outlined text-[36px] text-indigo-600">help</span>
            </div>
            
            <h3 class="text-2xl font-extrabold text-center text-slate-800 mb-3 relative z-10">\${title}</h3>
            <p class="font-body-md text-base text-center text-slate-500 leading-relaxed mb-8 relative z-10">\${text}</p>
            
            <div class="flex gap-3 relative z-10">
              <button id="modal-cancel" class="flex-1 py-3.5 rounded-full bg-slate-100 text-slate-600 font-bold text-sm hover:bg-slate-200 transition-colors">Batal</button>
              <button id="modal-confirm" class="flex-1 py-3.5 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-bold text-sm shadow-md shadow-indigo-200 hover:-translate-y-0.5 transition-all">Ya, Lanjutkan</button>
            </div>
          </div>
        </div>
      `;
      document.body.insertAdjacentHTML('beforeend', modalHTML);
      
      setTimeout(() => {
        document.getElementById('modal-backdrop').classList.remove('opacity-0');
        document.getElementById('modal-card').classList.remove('scale-95', 'opacity-0');
      }, 10);

      const close = () => {
        document.getElementById('modal-backdrop').classList.add('opacity-0');
        document.getElementById('modal-card').classList.add('scale-95', 'opacity-0');
        setTimeout(() => document.getElementById('custom-modal').remove(), 300);
      };

      document.getElementById('modal-cancel').onclick = close;
      document.getElementById('modal-backdrop').onclick = close;
      document.getElementById('modal-confirm').onclick = () => {
        close();
        onConfirm();
      };
    }

    function showSuccessModal(title, message, onClosed) {
      const modalHTML = `
        <div id="custom-modal" class="fixed inset-0 z-[100] flex items-center justify-center p-4">
          <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-md transition-opacity opacity-0 duration-300" id="modal-backdrop"></div>
          <div class="relative bg-white/80 backdrop-blur-2xl border border-white/60 rounded-[32px] w-full max-w-sm p-8 shadow-[0_20px_60px_rgba(31,38,135,0.15)] transform scale-95 opacity-0 transition-all duration-300 overflow-hidden" id="modal-card">
            
            <!-- Ambient modal glow -->
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-emerald-100/40 to-teal-100/40 opacity-50"></div>
            <div class="absolute -top-10 -right-10 w-40 h-40 bg-emerald-400/20 rounded-full blur-3xl animate-pulse"></div>

            <div class="w-24 h-24 rounded-[32px] bg-gradient-to-br from-emerald-400 to-teal-500 shadow-lg shadow-emerald-200 flex items-center justify-center mx-auto mb-6 relative z-10 animate-bounce">
              <span class="material-symbols-outlined text-[48px] text-white">check_circle</span>
              <span class="material-symbols-outlined absolute -top-2 -right-2 text-yellow-400 text-2xl animate-spin">sparkles</span>
            </div>
            
            <h3 class="text-2xl font-extrabold text-center text-slate-800 mb-3 relative z-10">\${title}</h3>
            <p class="font-body-md text-base text-center text-slate-600 leading-relaxed mb-8 relative z-10">\${message}</p>
            
            <button id="modal-ok" class="w-full py-4 rounded-full bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-bold text-base shadow-lg shadow-emerald-200 hover:-translate-y-1 transition-all relative z-10">Luar Biasa!</button>
          </div>
        </div>
      `;
      document.body.insertAdjacentHTML('beforeend', modalHTML);
      
      setTimeout(() => {
        document.getElementById('modal-backdrop').classList.remove('opacity-0');
        document.getElementById('modal-card').classList.remove('scale-95', 'opacity-0');
      }, 10);

      const close = () => {
        document.getElementById('modal-backdrop').classList.add('opacity-0');
        document.getElementById('modal-card').classList.add('scale-95', 'opacity-0');
        setTimeout(() => {
          document.getElementById('custom-modal').remove();
          if(onClosed) onClosed();
        }, 300);
      };

      document.getElementById('modal-ok').onclick = close;
    }
    // -------------------------

    window.selesaiBaca = function(id) {
        showConfirmModal(
          'Kembalikan Buku?', 
          'Yakin ingin menyelesaikan bacaan dan mengembalikan buku ini sekarang?', 
          async () => {
            try {
                const response = await fetch('/selesai-baca/' + id, {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('auth_token'),
                        'Accept': 'application/json'
                    }
                });
                const data = await response.json();
                if(data.success) {
                    showSuccessModal('Buku Dikembalikan!', data.message, () => {
                        window.location.reload();
                    });
                } else {
                    alert('Gagal: ' + data.message);
                }
            } catch(e) {
                console.error(e);
                alert('Terjadi kesalahan jaringan.');
            }
          }
        );
    }

    window.perpanjangWaktu = function(id) {
        showConfirmModal(
          'Perpanjang Waktu?', 
          'Ingin memperpanjang waktu peminjaman buku ini selama 7 hari ke depan?', 
          async () => {
            try {
                const response = await fetch('/perpanjang/' + id, {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('auth_token'),
                        'Accept': 'application/json'
                    }
                });
                const data = await response.json();
                if(data.success) {
                    showSuccessModal('Berhasil Diperpanjang!', data.message, () => {
                        window.location.reload();
                    });
                } else {
                    alert('Gagal: ' + data.message);
                }
            } catch(e) {
                console.error(e);
                alert('Terjadi kesalahan jaringan.');
            }
          }
        );
    }
  </script>
JAVASCRIPT;

$content = preg_replace($oldModalLogicRegex, $newModalLogic, $content);

file_put_contents($file, $content);
echo "Premium Modal Applied.";
