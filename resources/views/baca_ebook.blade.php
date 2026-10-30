<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>{{ $book->title }} — Penampil E-Book Libraz</title>

    <!-- Google Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>

    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#6354d4',
                        'primary-dark': '#4f40b5',
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- PDF.js via Cloudflare CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            user-select: none;
            -webkit-user-select: none;
        }
        /* Custom Reader Scrollbar */
        #viewer-container::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        #viewer-container::-webkit-scrollbar-track {
            background: #1e293b;
        }
        #viewer-container::-webkit-scrollbar-thumb {
            background: #475569;
            border-radius: 4px;
        }
        #viewer-container::-webkit-scrollbar-thumb:hover {
            background: #64748b;
        }
        /* Anti screenshot / direct save styling */
        @media print {
            body { display: none !important; }
        }
        .canvas-shadow {
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(255, 255, 255, 0.05);
        }
    </style>
</head>
<body class="h-full bg-slate-950 text-slate-100 flex flex-col overflow-hidden select-none" oncontextmenu="return false;">

    <!-- ================= TOP TOOLBAR ================= -->
    <header class="h-16 bg-slate-900 border-b border-slate-800 px-3 sm:px-6 flex items-center justify-between shrink-0 z-30 shadow-md">
        
        <!-- Left: Back button & Book Info -->
        <div class="flex items-center gap-3 min-w-0">
            <button onclick="window.history.length > 1 ? window.history.back() : window.location.href='{{ route('katalog') }}'" 
                    class="h-9 w-9 sm:h-10 sm:w-10 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white flex items-center justify-center transition-all shrink-0" 
                    title="Kembali">
                <span class="material-symbols-outlined text-[20px]">arrow_back</span>
            </button>
            <div class="min-w-0">
                <div class="flex items-center gap-2">
                    <span class="px-2 py-0.5 rounded text-[10px] font-black uppercase tracking-wider bg-primary/20 text-purple-300 border border-primary/30">
                        E-Book Reader
                    </span>
                    <span class="hidden sm:inline text-xs text-slate-400 truncate">{{ $book->category }}</span>
                </div>
                <h1 class="text-sm sm:text-base font-bold text-white truncate max-w-[200px] sm:max-w-md md:max-w-lg" title="{{ $book->title }}">
                    {{ $book->title }}
                </h1>
            </div>
        </div>

        <!-- Center: Page Navigation Controls -->
        <div class="flex items-center gap-1 sm:gap-2 bg-slate-950/80 px-2 py-1 rounded-xl border border-slate-800 shrink-0">
            <button id="btn-prev" class="h-8 w-8 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 flex items-center justify-center transition-all disabled:opacity-30 disabled:cursor-not-allowed" title="Halaman Sebelumnya (Panah Kiri)">
                <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </button>
            
            <div class="flex items-center gap-1 text-xs font-semibold px-1">
                <input type="number" id="page-num-input" value="1" min="1" class="w-10 sm:w-12 h-7 bg-slate-800 text-center text-white rounded border border-slate-700 focus:outline-none focus:border-primary text-xs font-bold [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"/>
                <span class="text-slate-400">/</span>
                <span id="page-count" class="text-slate-400">--</span>
            </div>

            <button id="btn-next" class="h-8 w-8 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 flex items-center justify-center transition-all disabled:opacity-30 disabled:cursor-not-allowed" title="Halaman Berikutnya (Panah Kanan)">
                <span class="material-symbols-outlined text-[18px]">chevron_right</span>
            </button>
        </div>

        <!-- Right: Zoom, Fullscreen & Action -->
        <div class="flex items-center gap-1 sm:gap-2 shrink-0">
            
            <!-- Zoom Controls -->
            <div class="hidden md:flex items-center gap-1 bg-slate-950/80 px-2 py-1 rounded-xl border border-slate-800">
                <button id="btn-zoom-out" class="h-8 w-8 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 flex items-center justify-center transition-all" title="Perkecil (-)">
                    <span class="material-symbols-outlined text-[18px]">remove</span>
                </button>
                <span id="zoom-level" class="text-xs font-bold text-slate-300 w-12 text-center">100%</span>
                <button id="btn-zoom-in" class="h-8 w-8 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 flex items-center justify-center transition-all" title="Perbesar (+)">
                    <span class="material-symbols-outlined text-[18px]">add</span>
                </button>
                <button id="btn-zoom-fit" class="h-8 w-8 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 flex items-center justify-center transition-all" title="Sesuaikan Lebar">
                    <span class="material-symbols-outlined text-[18px]">fit_screen</span>
                </button>
            </div>

            <!-- Fullscreen Button -->
            <button id="btn-fullscreen" class="h-9 w-9 sm:h-10 sm:w-10 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white flex items-center justify-center transition-all" title="Layar Penuh (F11)">
                <span id="fullscreen-icon" class="material-symbols-outlined text-[20px]">fullscreen</span>
            </button>

            <!-- XP Gamification Badge -->
            <div class="hidden lg:flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-purple-500/10 border border-purple-500/20 text-purple-300 text-xs font-bold" title="XP Membaca Otomatis Aktif">
                <span class="material-symbols-outlined text-amber-400 text-[16px]" style="font-variation-settings: 'FILL' 1;">bolt</span>
                <span>+15 XP</span>
            </div>

            @if($activeBorrowing)
            <button onclick="tandaiSelesaiBaca('{{ $activeBorrowing->id }}')" 
                    id="btn-selesai-baca" 
                    class="hidden sm:flex items-center gap-1.5 px-3.5 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs shadow-md transition-all">
                <span class="material-symbols-outlined text-[16px]">check_circle</span>
                <span>Selesai Baca</span>
            </button>
            @endif
        </div>
    </header>

    <!-- ================= READER CANVAS CONTAINER ================= -->
    <main id="viewer-container" class="flex-1 overflow-auto bg-slate-900/90 flex flex-col items-center justify-start p-3 sm:p-6 relative">
        
        <!-- Loading State -->
        <div id="loading-spinner" class="absolute inset-0 flex flex-col items-center justify-center bg-slate-950/90 z-20 transition-opacity duration-300">
            <div class="w-14 h-14 border-4 border-primary/30 border-t-primary rounded-full animate-spin mb-4"></div>
            <p class="text-sm font-bold text-white tracking-wide">Memuat Halaman E-Book...</p>
            <p class="text-xs text-slate-400 mt-1 max-w-xs text-center">Buku dibuka langsung dari web tanpa perlu diunduh.</p>
        </div>

        <!-- Error State (Fallback to Native Embed) -->
        <div id="error-box" class="hidden absolute inset-0 flex flex-col items-center justify-center bg-slate-950 p-6 z-20 text-center">
            <span class="material-symbols-outlined text-[48px] text-amber-400 mb-2">warning</span>
            <h3 class="text-base font-bold text-white">Viewer PDF.js Memerlukan Mode Kompatibilitas</h3>
            <p class="text-xs text-slate-400 mt-1 mb-4 max-w-md">Mengalihkan penampil ke mode peramban bawaan yang aman...</p>
            <div class="w-full h-[80vh] max-w-4xl rounded-2xl overflow-hidden border border-slate-800">
                <iframe src="{{ asset($book->pdf_path) }}#toolbar=0&navpanes=0&scrollbar=1" class="w-full h-full border-0"></iframe>
            </div>
        </div>

        <!-- Single Page Canvas Renderer -->
        <div id="canvas-wrapper" class="transition-transform duration-200 ease-out origin-top flex flex-col items-center">
            <canvas id="the-canvas" class="canvas-shadow rounded-lg bg-white"></canvas>
        </div>

    </main>

    <!-- ================= BOTTOM FLOATING QUICK CONTROLS (MOBILE) ================= -->
    <div class="sm:hidden h-12 bg-slate-900 border-t border-slate-800 px-4 flex items-center justify-between shrink-0 z-30">
        <button id="mobile-btn-prev" class="flex items-center gap-1 text-xs font-bold text-slate-300">
            <span class="material-symbols-outlined text-[18px]">arrow_back_ios</span>
            <span>Prev</span>
        </button>
        <span id="mobile-page-indicator" class="text-xs font-bold text-slate-400">Hal 1</span>
        <button id="mobile-btn-next" class="flex items-center gap-1 text-xs font-bold text-slate-300">
            <span>Next</span>
            <span class="material-symbols-outlined text-[18px]">arrow_forward_ios</span>
        </button>
    </div>

    <!-- ================= JAVASCRIPT LOGIC ================= -->
    <script>
        // Set worker PDF.js
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

        const pdfUrl = "{{ asset($book->pdf_path) }}";
        let pdfDoc = null;
        let pageNum = 1;
        let pageRendering = false;
        let pageNumPending = null;
        let scale = 1.25;
        const minScale = 0.5;
        const maxScale = 3.0;

        const canvas = document.getElementById('the-canvas');
        const ctx = canvas.getContext('2d');
        const viewerContainer = document.getElementById('viewer-container');
        const pageNumInput = document.getElementById('page-num-input');
        const pageCountSpan = document.getElementById('page-count');
        const zoomLevelSpan = document.getElementById('zoom-level');
        const loadingSpinner = document.getElementById('loading-spinner');
        const errorBox = document.getElementById('error-box');

        // Initial setup for devicePixelRatio
        const outputScale = window.devicePixelRatio || 1;

        // Auto calculate optimal initial scale based on container width
        function calculateInitialScale(page) {
            const viewport = page.getViewport({ scale: 1.0 });
            const containerWidth = viewerContainer.clientWidth - 48; // padding
            if (containerWidth > 0 && viewport.width > 0) {
                let initial = containerWidth / viewport.width;
                if (initial > 1.5) initial = 1.35;
                if (initial < 0.6) initial = 0.6;
                return Math.round(initial * 10) / 10;
            }
            return 1.25;
        }

        // Render Page
        function renderPage(num) {
            pageRendering = true;
            pdfDoc.getPage(num).then(function(page) {
                // If first render and scale not calibrated
                if (scale === 1.25 && num === 1) {
                    scale = calculateInitialScale(page);
                }

                const viewport = page.getViewport({ scale: scale });
                canvas.width = Math.floor(viewport.width * outputScale);
                canvas.height = Math.floor(viewport.height * outputScale);
                canvas.style.width = Math.floor(viewport.width) + "px";
                canvas.style.height = Math.floor(viewport.height) + "px";

                const transform = outputScale !== 1
                    ? [outputScale, 0, 0, outputScale, 0, 0]
                    : null;

                const renderContext = {
                    canvasContext: ctx,
                    transform: transform,
                    viewport: viewport
                };

                const renderTask = page.render(renderContext);

                renderTask.promise.then(function() {
                    pageRendering = false;
                    loadingSpinner.style.opacity = '0';
                    setTimeout(() => { loadingSpinner.style.display = 'none'; }, 200);

                    if (pageNumPending !== null) {
                        renderPage(pageNumPending);
                        pageNumPending = null;
                    }
                });
            }).catch(function(err) {
                console.error("Gagal merender halaman: ", err);
                pageRendering = false;
            });

            // Update UI elements
            pageNumInput.value = num;
            zoomLevelSpan.textContent = Math.round(scale * 100) + '%';
            document.getElementById('btn-prev').disabled = (num <= 1);
            document.getElementById('btn-next').disabled = (num >= (pdfDoc ? pdfDoc.numPages : 1));
            
            const mobileIndicator = document.getElementById('mobile-page-indicator');
            if (mobileIndicator && pdfDoc) {
                mobileIndicator.textContent = 'Hal ' + num + ' / ' + pdfDoc.numPages;
            }

            // Scroll viewer to top on page flip
            viewerContainer.scrollTop = 0;
        }

        function queueRenderPage(num) {
            if (pageRendering) {
                pageNumPending = num;
            } else {
                renderPage(num);
            }
        }

        function onPrevPage() {
            if (pageNum <= 1) return;
            pageNum--;
            queueRenderPage(pageNum);
        }

        function onNextPage() {
            if (!pdfDoc || pageNum >= pdfDoc.numPages) return;
            pageNum++;
            queueRenderPage(pageNum);
        }

        function zoomIn() {
            if (scale >= maxScale) return;
            scale = Math.min(maxScale, Math.round((scale + 0.15) * 100) / 100);
            queueRenderPage(pageNum);
        }

        function zoomOut() {
            if (scale <= minScale) return;
            scale = Math.max(minScale, Math.round((scale - 0.15) * 100) / 100);
            queueRenderPage(pageNum);
        }

        function zoomFitWidth() {
            if (!pdfDoc) return;
            pdfDoc.getPage(pageNum).then(function(page) {
                const viewport = page.getViewport({ scale: 1.0 });
                const containerWidth = viewerContainer.clientWidth - 48;
                scale = Math.round((containerWidth / viewport.width) * 100) / 100;
                queueRenderPage(pageNum);
            });
        }

        // Fullscreen Toggle
        function toggleFullscreen() {
            const fsIcon = document.getElementById('fullscreen-icon');
            if (!document.fullscreenElement) {
                document.documentElement.requestFullscreen().then(() => {
                    fsIcon.textContent = 'fullscreen_exit';
                }).catch(err => console.log(err));
            } else {
                if (document.exitFullscreen) {
                    document.exitFullscreen().then(() => {
                        fsIcon.textContent = 'fullscreen';
                    });
                }
            }
        }

        // Load PDF Document
        pdfjsLib.getDocument({
            url: pdfUrl,
            cMapUrl: 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/cmaps/',
            cMapPacked: true,
        }).promise.then(function(pdfDoc_) {
            pdfDoc = pdfDoc_;
            pageCountSpan.textContent = pdfDoc.numPages;
            pageNumInput.max = pdfDoc.numPages;
            renderPage(pageNum);
        }).catch(function(error) {
            console.error('Error loading PDF: ', error);
            loadingSpinner.style.display = 'none';
            errorBox.classList.remove('hidden');
        });

        // Event Listeners
        document.getElementById('btn-prev').addEventListener('click', onPrevPage);
        document.getElementById('btn-next').addEventListener('click', onNextPage);
        document.getElementById('mobile-btn-prev').addEventListener('click', onPrevPage);
        document.getElementById('mobile-btn-next').addEventListener('click', onNextPage);
        document.getElementById('btn-zoom-in').addEventListener('click', zoomIn);
        document.getElementById('btn-zoom-out').addEventListener('click', zoomOut);
        document.getElementById('btn-zoom-fit').addEventListener('click', zoomFitWidth);
        document.getElementById('btn-fullscreen').addEventListener('click', toggleFullscreen);

        // Page Number Input Jump
        pageNumInput.addEventListener('change', function() {
            let val = parseInt(this.value);
            if (pdfDoc && val >= 1 && val <= pdfDoc.numPages) {
                pageNum = val;
                queueRenderPage(pageNum);
            } else {
                this.value = pageNum;
            }
        });

        // Keyboard Shortcuts (Arrow Left / Right, +, -)
        window.addEventListener('keydown', function(e) {
            if (e.target.tagName === 'INPUT') return;
            if (e.key === 'ArrowRight' || e.key === 'PageDown') {
                onNextPage();
            } else if (e.key === 'ArrowLeft' || e.key === 'PageUp') {
                onPrevPage();
            } else if (e.key === '+' || e.key === '=') {
                zoomIn();
            } else if (e.key === '-') {
                zoomOut();
            }
        });

        // Selesai Baca AJAX
        function tandaiSelesaiBaca(borrowId) {
            const btn = document.getElementById('btn-selesai-baca');
            if (btn) btn.disabled = true;

            fetch(`/selesai-baca/${borrowId}`, {
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    alert('🎉 Selamat! ' + data.message);
                    if (btn) {
                        btn.classList.remove('bg-emerald-600', 'hover:bg-emerald-500');
                        btn.classList.add('bg-slate-700', 'text-slate-400', 'cursor-not-allowed');
                        btn.innerHTML = '<span class="material-symbols-outlined text-[16px]">done_all</span><span>Telah Selesai</span>';
                    }
                } else {
                    alert(data.message || 'Terjadi kesalahan.');
                    if (btn) btn.disabled = false;
                }
            })
            .catch(err => {
                console.error(err);
                if (btn) btn.disabled = false;
            });
        }
    </script>
</body>
</html>
