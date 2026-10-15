<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Login - Libraz</title>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<script src="https://unpkg.com/html5-qrcode@2.3.8/html5-qrcode.min.js"></script>

<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  ::-webkit-scrollbar { display: none; }

  body {
    font-family: 'Plus Jakarta Sans', sans-serif;
    min-height: 100dvh;
    display: flex;
    background: #f8fafc;
    overscroll-behavior: none;
  }

  /* â”€â”€ LEFT PANEL â”€â”€ */
  .left-panel {
    width: 48%;
    background-color: #1a0f37;
    background-image: 
      linear-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
    background-size: 32px 32px;
    position: relative;
    display: flex;
    flex-direction: column;
    padding: 36px 44px;
    overflow: hidden;
    flex-shrink: 0;
  }
  .left-panel::after {
    content: '';
    position: absolute;
    bottom: -80px;
    right: -60px;
    width: 380px;
    height: 380px;
    background: radial-gradient(circle, rgba(109,72,229,0.25) 0%, transparent 70%);
    pointer-events: none;
  }

  .lp-logo { display: flex; align-items: center; gap: 12px; position: relative; z-index: 2; }
  .lp-logo-icon {
    width: 44px; height: 44px;
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.18);
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    backdrop-filter: blur(8px);
    overflow: hidden;
  }
  .lp-logo-icon img { width: 36px; height: 36px; border-radius: 8px; object-fit: cover; }
  .lp-logo-text h1 { font-size: 22px; font-weight: 800; color: #fff; letter-spacing: 1px; }
  .lp-live-badge { display: flex; align-items: center; gap: 5px; font-size: 11px; font-weight: 600; color: #22c55e; margin-top: 1px; }
  .lp-live-dot { width: 7px; height: 7px; border-radius: 50%; background: #22c55e; animation: pulse-dot 1.5s infinite; }
  @keyframes pulse-dot { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:0.5;transform:scale(0.85)} }

  .lp-hero { position: relative; z-index: 2; margin-top: 36px; }
  .lp-headline { font-size: clamp(26px, 2.6vw, 38px); font-weight: 800; color: #fff; line-height: 1.22; margin-bottom: 12px; }
  .lp-subtext { font-size: 13.5px; color: rgba(199,190,255,0.82); line-height: 1.65; margin-bottom: 24px; max-width: 380px; }

  .lp-bottom-row { position: relative; display: flex; align-items: flex-end; }
  .lp-features { display: flex; flex-direction: column; gap: 10px; width: 235px; flex-shrink: 0; position: relative; z-index: 2; }
  .lp-feature-card {
    display: flex; align-items: center; gap: 12px;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 14px; padding: 10px 14px;
    backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px);
    transition: background 0.2s;
  }
  .lp-feature-card:hover { background: rgba(255,255,255,0.1); }
  .lp-feature-icon { width: 38px; height: 38px; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
  .fi-purple { background: rgba(109,72,229,0.3); color: #c4b5fd; }
  .fi-green  { background: rgba(34,197,94,0.25);  color: #86efac; }
  .fi-amber  { background: rgba(245,158,11,0.25); color: #fcd34d; }
  .lp-feature-title { font-size: 12.5px; font-weight: 700; color: #fff; }
  .lp-feature-sub   { font-size: 10.5px; color: rgba(199,190,255,0.7); margin-top: 1px; }

  .lp-illustration {
    position: absolute; right: -16px; bottom: -8px;
    width: 290px; pointer-events: none; z-index: 1;
  }
  .lp-illustration img {
    width: 100%; height: auto; display: block; object-fit: contain;
    filter: drop-shadow(0 15px 30px rgba(0,0,0,0.45));
  }

  /* LP FOOTER */
  .lp-footer {
    margin-top: auto;
    padding-top: 24px;
    position: relative;
    z-index: 2;
    display: flex;
    flex-direction: column;
    gap: 12px;
  }
  .lp-stat-card {
    display: flex; align-items: center; gap: 14px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 16px; padding: 12px 18px;
    backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);
    transition: all 0.2s ease;
  }
  .lp-stat-card:hover {
    background: rgba(255, 255, 255, 0.08);
    border-color: rgba(255, 255, 255, 0.18);
  }
  .lp-avatars { display: flex; align-items: center; }
  .lp-avatars img {
    width: 34px; height: 34px; border-radius: 50%;
    border: 2px solid #1a0f37; object-fit: cover;
    margin-left: -10px;
  }
  .lp-avatars img:first-child { margin-left: 0; }
  .lp-stat-info { flex: 1; }
  .lp-stat-title { font-size: 14px; font-weight: 800; color: #fff; letter-spacing: 0.3px; }
  .lp-stat-desc { font-size: 11px; color: rgba(199, 190, 255, 0.7); margin-top: 1px; }
  .lp-trend-tag {
    display: inline-flex; align-items: center; gap: 4px;
    background: rgba(34, 197, 94, 0.18); color: #4ade80;
    border: 1px solid rgba(34, 197, 94, 0.3);
    padding: 4px 10px; border-radius: 999px;
    font-size: 11px; font-weight: 800;
  }
  .lp-trend-tag .ms { font-size: 15px; }

  .lp-metrics-row {
    display: flex; align-items: center; justify-content: space-between;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.06);
    border-radius: 14px; padding: 10px 16px;
  }
  .lp-metric-item { display: flex; flex-direction: column; align-items: center; flex: 1; text-align: center; }
  .lp-metric-num { font-size: 13px; font-weight: 800; color: #fff; }
  .lp-metric-label { font-size: 10px; color: rgba(199, 190, 255, 0.65); margin-top: 1px; }
  .lp-metric-divider { width: 1px; height: 22px; background: rgba(255, 255, 255, 0.1); }

  /* â”€â”€ RIGHT PANEL â”€â”€ */
  .right-panel {
    flex: 1; display: flex; align-items: center; justify-content: center;
    padding: 32px 24px; background: #f8faff; overflow-y: auto;
  }
  .rp-inner { width: 100%; max-width: 440px; display: flex; flex-direction: column; }
  .mobile-logo { display: none; align-items: center; justify-content: center; gap: 10px; margin-bottom: 28px; }

  /* TAB */
  .tab-row {
    display: flex; background: #e8ecf0; border-radius: 14px;
    padding: 5px; gap: 4px; margin-bottom: 22px;
    box-shadow: inset 0 1px 3px rgba(0,0,0,0.08);
  }
  .tab-btn {
    flex: 1; display: flex; align-items: center; justify-content: center; gap: 7px;
    padding: 12px 8px; border-radius: 10px; border: none;
    font-family: inherit; font-size: 13px; font-weight: 700; cursor: pointer;
    transition: all 0.22s ease; background: transparent; color: #64748b;
  }
  .tab-btn.active { background: #6d48e5; color: #fff; box-shadow: 0 4px 12px rgba(109,72,229,0.35); }
  .tab-btn:not(.active):hover { background: rgba(109,72,229,0.08); color: #4b4b6b; }

  /* ROLE */
  .role-row {
    display: flex; align-items: center; justify-content: space-between;
    background: #e8ecf0; border-radius: 14px; padding: 6px 6px 6px 16px;
    margin-bottom: 20px; box-shadow: inset 0 1px 3px rgba(0,0,0,0.07);
  }
  .role-label { display: flex; align-items: center; gap: 7px; font-size: 13px; font-weight: 600; color: #64748b; }
  .role-pills { display: flex; background: #fff; border-radius: 10px; padding: 4px; gap: 2px; border: 1px solid #e2e8f0; box-shadow: 0 1px 3px rgba(0,0,0,0.06); }
  .role-pill {
    padding: 7px 16px; border-radius: 8px; border: none;
    font-family: inherit; font-size: 12px; font-weight: 700; cursor: pointer;
    transition: all 0.2s; background: transparent; color: #64748b;
  }
  .role-pill.active { background: #6d48e5; color: #fff; box-shadow: 0 3px 8px rgba(109,72,229,0.3); }
  .role-pill:not(.active):hover { color: #334155; background: #f1f5f9; }

  /* QR CARD */
  .qr-card {
    background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
    border-radius: 20px; padding: 22px; color: #fff;
    margin-bottom: 20px; cursor: pointer;
    border: 1px solid rgba(255,255,255,0.08);
    position: relative; overflow: hidden;
    transition: box-shadow 0.25s, transform 0.2s;
  }
  .qr-card:hover { box-shadow: 0 20px 45px rgba(15,23,42,0.4); transform: translateY(-2px); }
  .qr-card::before {
    content: ''; position: absolute; top: -60px; right: -60px;
    width: 180px; height: 180px;
    background: radial-gradient(circle, rgba(34,211,163,0.12) 0%, transparent 70%);
    pointer-events: none;
  }
  .qr-card-top { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px; position: relative; z-index: 1; }
  .fast-pass-badge {
    display: inline-flex; align-items: center; gap: 5px;
    background: rgba(34,211,163,0.15); color: #34d399;
    border: 1px solid rgba(34,211,163,0.3); border-radius: 999px;
    font-size: 10px; font-weight: 800; padding: 3px 10px; letter-spacing: 0.5px; margin-bottom: 8px;
  }
  .qr-card h3 { font-size: 17px; font-weight: 800; color: #fff; }
  .qr-card p  { font-size: 12px; color: #94a3b8; margin-top: 3px; }
  .qr-icon-btn {
    width: 40px; height: 40px; border-radius: 12px;
    background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.1);
    display: flex; align-items: center; justify-content: center; color: #fff;
    transition: background 0.2s; flex-shrink: 0;
  }
  .qr-card:hover .qr-icon-btn { background: #6d48e5; }
  .qr-viewport {
    border: 1px solid rgba(255,255,255,0.12); border-radius: 14px; padding: 16px;
    background: rgba(0,0,0,0.3); height: 110px;
    display: flex; flex-direction: column; align-items: center; justify-content: center;
    gap: 8px; position: relative; z-index: 1;
  }
  .qr-viewport .qr-big-icon { font-size: 40px; color: #475569; }
  .qr-viewport .tap-text { font-size: 10px; font-weight: 800; letter-spacing: 1.5px; color: #34d399; text-transform: uppercase; }
  .qr-corner { position: absolute; width: 14px; height: 14px; border-color: #34d399; border-style: solid; }
  .qr-corner.tl { top:6px;left:6px;border-width:2px 0 0 2px;border-radius:3px 0 0 0; }
  .qr-corner.tr { top:6px;right:6px;border-width:2px 2px 0 0;border-radius:0 3px 0 0; }
  .qr-corner.bl { bottom:6px;left:6px;border-width:0 0 2px 2px;border-radius:0 0 0 3px; }
  .qr-corner.br { bottom:6px;right:6px;border-width:0 2px 2px 0;border-radius:0 0 3px 0; }

  /* DIVIDER */
  .or-divider { display: flex; align-items: center; gap: 12px; margin: 4px 0 20px; }
  .or-divider::before,.or-divider::after { content:''; flex:1; height:1px; background:#e2e8f0; }
  .or-divider span { font-size: 10px; font-weight: 700; letter-spacing: 1.5px; color: #94a3b8; text-transform: uppercase; white-space: nowrap; }

  /* FIELDS */
  .field-group { margin-bottom: 16px; }
  .field-label-row { display: flex; justify-content: space-between; align-items: center; margin-bottom: 7px; }
  .field-label { font-size: 13px; font-weight: 700; color: #334155; }
  .field-link { font-size: 11px; font-weight: 700; color: #6d48e5; text-decoration: none; display: flex; align-items: center; gap: 3px; }
  .field-link:hover { text-decoration: underline; }
  .field-input-wrap { position: relative; }
  .field-icon-left { position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: #94a3b8; pointer-events: none; display: flex; transition: color 0.2s; font-size: 20px; }
  .field-input-wrap:focus-within .field-icon-left { color: #6d48e5; }
  .field-input {
    width: 100%; border: 1.5px solid #e2e8f0; border-radius: 13px;
    padding: 13px 44px 13px 46px; font-family: inherit; font-size: 14px; font-weight: 500;
    color: #1e293b; background: #fff; outline: none;
    transition: border-color 0.2s, box-shadow 0.2s; box-shadow: 0 1px 3px rgba(0,0,0,0.04);
  }
  .field-input::placeholder { color: #b0bec8; font-weight: 400; }
  .field-input:hover { border-color: #c7d0d8; }
  .field-input:focus { border-color: #6d48e5; box-shadow: 0 0 0 3px rgba(109,72,229,0.12); }
  .field-icon-right { position: absolute; right: 10px; top: 50%; transform: translateY(-50%); }
  .icon-btn { background: none; border: none; cursor: pointer; padding: 6px; border-radius: 8px; color: #94a3b8; display: flex; align-items: center; transition: background 0.15s, color 0.15s; }
  .icon-btn:hover { background: #f1f5f9; color: #6d48e5; }

  /* REMEMBER */
  .remember-row { display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px; margin-top: 4px; }
  .remember-left { display: flex; align-items: center; gap: 8px; cursor: pointer; }
  .remember-left input[type="checkbox"] { width: 16px; height: 16px; accent-color: #6d48e5; cursor: pointer; }
  .remember-left label { font-size: 12px; font-weight: 500; color: #475569; cursor: pointer; }
  .secure-badge { display: flex; align-items: center; gap: 4px; font-size: 10px; font-weight: 800; color: #16a34a; background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 6px; padding: 4px 8px; letter-spacing: 0.5px; }

  /* SUBMIT */
  .submit-btn {
    width: 100%; padding: 15px; background: #6d48e5; color: #fff; border: none;
    border-radius: 14px; font-family: inherit; font-size: 14px; font-weight: 800; cursor: pointer;
    display: flex; align-items: center; justify-content: center; gap: 8px;
    position: relative; overflow: hidden;
    transition: background 0.2s, box-shadow 0.2s, transform 0.15s;
    box-shadow: 0 6px 20px rgba(109,72,229,0.4); letter-spacing: 0.2px;
  }
  .submit-btn:hover { background: #5a3bc2; box-shadow: 0 8px 24px rgba(109,72,229,0.5); transform: translateY(-1px); }
  .submit-btn:active { transform: translateY(0); }
  .submit-btn::after {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(90deg, transparent 0%, rgba(255,255,255,0.18) 50%, transparent 100%);
    transform: translateX(-100%); transition: transform 0.5s;
  }
  .submit-btn:hover::after { transform: translateX(100%); }
  .submit-btn .ms-icon { font-size: 18px; transition: transform 0.2s; }
  .submit-btn:hover .ms-icon { transform: translateX(4px); }

  /* ALERT */
  #js-alert-container { display: none; padding: 11px 14px; border-radius: 12px; font-size: 13px; font-weight: 600; align-items: center; gap: 8px; margin-bottom: 14px; }

  /* SCANNER MODAL */
  .scanner-backdrop { position: fixed; inset: 0; background: rgba(15,23,42,0.75); backdrop-filter: blur(8px); display: flex; align-items: center; justify-content: center; z-index: 9999; padding: 16px; }
  .scanner-card { background: #fff; width: 100%; max-width: 400px; border-radius: 24px; padding: 22px; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.35); display: flex; flex-direction: column; gap: 14px; animation: modalPop 0.25s cubic-bezier(0.16,1,0.3,1); position: relative; }
  @keyframes modalPop { from{opacity:0;transform:scale(0.92) translateY(10px)} to{opacity:1;transform:scale(1) translateY(0)} }
  .scanner-header { display: flex; justify-content: space-between; align-items: center; }
  .scanner-icon-badge { width:36px;height:36px;border-radius:10px;background:#e0e7ff;color:#4f46e5;display:flex;align-items:center;justify-content:center; }
  .scanner-close-btn { background:#f1f5f9;border:none;width:34px;height:34px;border-radius:50%;font-size:20px;display:flex;align-items:center;justify-content:center;cursor:pointer;color:#64748b;transition:all 0.15s;line-height:1; }
  .scanner-close-btn:hover { background:#e2e8f0;color:#0f172a; }
  .scanner-viewport { position:relative;width:100%;aspect-ratio:1/1;max-height:270px;background:#090d16;border-radius:18px;overflow:hidden;display:flex;align-items:center;justify-content:center; }
  #qr-reader{width:100%!important;height:100%!important;border:none!important}
  #qr-reader video{width:100%!important;height:100%!important;object-fit:cover!important}
  #qr-reader__scan_region{background:transparent!important}
  #qr-reader__dashboard{display:none!important}
  .scan-frame{position:absolute;top:15%;left:15%;right:15%;bottom:15%;pointer-events:none;box-shadow:0 0 0 9999px rgba(0,0,0,0.4);border-radius:12px}
  .sc{position:absolute;width:20px;height:20px;border-color:#22d3a3;border-style:solid}
  .sc.tl{top:-2px;left:-2px;border-width:3px 0 0 3px;border-top-left-radius:8px}
  .sc.tr{top:-2px;right:-2px;border-width:3px 3px 0 0;border-top-right-radius:8px}
  .sc.bl{bottom:-2px;left:-2px;border-width:0 0 3px 3px;border-bottom-left-radius:8px}
  .sc.br{bottom:-2px;right:-2px;border-width:0 3px 3px 0;border-bottom-right-radius:8px}
  .laser{position:absolute;left:5%;right:5%;height:3px;background:linear-gradient(90deg,transparent,#22d3a3,#38bdf8,#22d3a3,transparent);box-shadow:0 0 12px #22d3a3,0 0 6px #38bdf8;animation:laserPulse 1.8s infinite ease-in-out alternate}
  @keyframes laserPulse{0%{top:5%;opacity:0.2}50%{opacity:1}100%{top:95%;opacity:0.2}}
  .scanner-status{font-size:12px;color:#64748b;text-align:center;font-weight:600;min-height:20px;display:flex;align-items:center;justify-content:center;gap:6px}
  .scanner-alert-box{font-size:13px;font-weight:600;padding:10px 14px;border-radius:10px;text-align:center;display:none}
  .alert-danger{background:#fee2e2;color:#991b1b;border:1px solid #fecaca}
  .alert-success{background:#dcfce7;color:#166534;border:1px solid #bbf7d0}
  .scanner-actions{display:grid;grid-template-columns:1fr 1fr 1fr;gap:8px}
  .scan-action-btn{background:#f8fafc;border:1px solid #e2e8f0;border-radius:10px;padding:8px 6px;font-size:11px;font-weight:700;color:#334155;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:4px;cursor:pointer;transition:all 0.15s;font-family:inherit}
  .scan-action-btn:hover{background:#f1f5f9;border-color:#cbd5e1}
  .scan-action-btn.demo{background:#f5f3ff;border-color:#ddd6fe;color:#6d28d9}
  .scan-action-btn.demo:hover{background:#ede9fe}

  /* FORGOT MODAL */
  .forgot-card{background:#fff;width:100%;max-width:380px;border-radius:24px;padding:36px 28px;box-shadow:0 25px 50px -12px rgba(0,0,0,0.3);text-align:center;animation:modalPop 0.25s cubic-bezier(0.16,1,0.3,1)}
  .forgot-icon{width:64px;height:64px;border-radius:50%;background:#fff1f2;color:#e11d48;display:flex;align-items:center;justify-content:center;margin:0 auto 16px}

  /* RESPONSIVE */
  @media(max-width:900px){.left-panel{display:none}.mobile-logo{display:flex}}
  .hidden{display:none!important}
  .ms{font-family:'Material Symbols Outlined';font-size:20px;font-style:normal;display:inline-flex;line-height:1;vertical-align:middle}
  @keyframes spin{to{transform:rotate(360deg)}}
  .spin{animation:spin 1s linear infinite}
</style>
</head>
<body>

<!-- LEFT PANEL -->
<div class="left-panel">
  <div class="lp-logo">
    <div class="lp-logo-icon">
      <img src="/assets/images/libraz_logo.jpg" alt="Logo"
           onerror="this.style.display='none';this.parentElement.innerHTML='<span class=\'ms\' style=\'color:#c4b5fd;font-size:24px\'>menu_book</span>'">
    </div>
    <div class="lp-logo-text">
      <h1>LIBRAZ</h1>
      <div class="lp-live-badge"><span class="lp-live-dot"></span>Live Library System</div>
    </div>
  </div>

  <div class="lp-hero">
    <h2 class="lp-headline">Level up your reading<br>game &#9889; &#128218;</h2>
    <p class="lp-subtext">Bergabunglah dengan ribuan siswa yang telah beralih ke perpustakaan digital masa depan. Cepat, pintar, dan terintegrasi langsung dengan ekosistem sekolah.</p>

    <div class="lp-bottom-row">
      <div class="lp-features">
        <div class="lp-feature-card">
          <div class="lp-feature-icon fi-purple"><span class="ms">library_books</span></div>
          <div>
            <div class="lp-feature-title">Akses Ribuan Koleksi</div>
            <div class="lp-feature-sub">E-Book &amp; Buku Fisik Terlengkap</div>
          </div>
        </div>
        <div class="lp-feature-card">
          <div class="lp-feature-icon fi-green"><span class="ms">bolt</span></div>
          <div>
            <div class="lp-feature-title">Fast Pass Scanner</div>
            <div class="lp-feature-sub">Pinjam buku dalam 3 detik</div>
          </div>
        </div>
        <div class="lp-feature-card">
          <div class="lp-feature-icon fi-amber"><span class="ms">social_leaderboard</span></div>
          <div>
            <div class="lp-feature-title">Gamifikasi Belajar</div>
            <div class="lp-feature-sub">Naik level dengan membaca</div>
          </div>
        </div>
      </div>

      <div class="lp-illustration">
        <img src="/assets/images/students_illustration.png" alt="Illustration" onerror="this.style.display='none'">
      </div>
    </div>
  </div>

  <!-- BOTTOM STATS / SOCIAL PROOF WIDGET -->
  <div class="lp-footer">
    <div class="lp-stat-card">
      <div class="lp-avatars">
        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80" alt="Avatar">
        <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?w=100&auto=format&fit=crop&q=80" alt="Avatar">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&auto=format&fit=crop&q=80" alt="Avatar">
      </div>
      <div class="lp-stat-info">
        <div class="lp-stat-title">1,240+ Siswa</div>
        <div class="lp-stat-desc">Aktif membaca &amp; berkunjung hari ini</div>
      </div>
      <div class="lp-trend-tag">
        <span class="ms">trending_up</span> +24%
      </div>
    </div>

    <div class="lp-metrics-row">
      <div class="lp-metric-item">
        <span class="lp-metric-num">15K+</span>
        <span class="lp-metric-label">Koleksi Buku</span>
      </div>
      <div class="lp-metric-divider"></div>
      <div class="lp-metric-item">
        <span class="lp-metric-num">3 Detik</span>
        <span class="lp-metric-label">Fast Pass QR</span>
      </div>
      <div class="lp-metric-divider"></div>
      <div class="lp-metric-item">
        <span class="lp-metric-num">&#9733; 4.9</span>
        <span class="lp-metric-label">Rating Siswa</span>
      </div>
    </div>
  </div>
</div>

<!-- RIGHT PANEL -->
<div class="right-panel">
  <div class="rp-inner">

    <div class="mobile-logo">
      <div style="width:40px;height:40px;background:#2a1a5e;border-radius:12px;display:flex;align-items:center;justify-content:center;">
        <span class="ms" style="color:#fff;font-size:22px">menu_book</span>
      </div>
      <span style="font-size:20px;font-weight:800;color:#2a1a5e;">LIBRAZ</span>
    </div>

    <!-- Tabs -->
    <div class="tab-row">
      <button class="tab-btn active" id="tab-login" type="button">
        <span class="ms">login</span><span>Masuk Akun</span>
      </button>
      <button class="tab-btn" id="tab-register" type="button">
        <span class="ms">person_add</span><span>Daftar Baru</span>
      </button>
    </div>

    <!-- Role -->
    <div class="role-row">
      <div class="role-label">
        <span class="ms" style="font-size:18px;color:#94a3b8">badge</span>Sebagai:
      </div>
      <div class="role-pills">
        <button class="role-pill active" id="role-student" type="button">Siswa / Siswi</button>
        <button class="role-pill" id="role-teacher" type="button">Pendidik</button>
      </div>
    </div>

    <!-- QR Card -->
    <div class="qr-card" onclick="openScanner()">
      <div class="qr-card-top">
        <div>
          <div class="fast-pass-badge"><span class="ms" style="font-size:12px">bolt</span>FAST PASS</div>
          <h3>Scan Kartu Pelajar</h3>
          <p>Otomatis deteksi QR ID Perpustakaan.</p>
        </div>
        <div class="qr-icon-btn"><span class="ms">qr_code_scanner</span></div>
      </div>
      <div class="qr-viewport">
        <span class="ms qr-big-icon">qr_code_2</span>
        <span class="tap-text">Ketuk untuk buka kamera</span>
        <div class="qr-corner tl"></div><div class="qr-corner tr"></div>
        <div class="qr-corner bl"></div><div class="qr-corner br"></div>
      </div>
    </div>

    <!-- Divider -->
    <div class="or-divider"><span>Atau Manual ID</span></div>

    <!-- Form -->
    <form id="auth-form" method="POST" action="#" style="display:flex;flex-direction:column;">
      @csrf
      <input type="hidden" name="is_register" id="is-register" value="0">
      <input type="hidden" name="school_name" value="Asal Sekolah Default">

      <div id="js-alert-container"></div>

      <!-- NIS -->
      <div class="field-group">
        <div class="field-label-row">
          <label class="field-label" for="input-identifier" id="label-identifier">Nomor Induk Siswa (NIS)</label>
          <a href="#" class="field-link"><span class="ms" style="font-size:14px">help</span>Cek NIS Online</a>
        </div>
        <div class="field-input-wrap">
          <span class="ms field-icon-left">badge</span>
          <input type="text" name="nis" id="input-identifier" inputmode="numeric" class="field-input" placeholder="Contoh: 2024108827" value="{{ old('nis') }}" required>
          <div class="field-icon-right">
            <button type="button" onclick="openScanner()" class="icon-btn"><span class="ms">qr_code</span></button>
          </div>
        </div>
      </div>

      <!-- Full Name (register) -->
      <div class="field-group hidden" id="register-field-name">
        <div class="field-label-row">
          <label class="field-label" for="input-fullname">Nama Lengkap Siswa</label>
        </div>
        <div class="field-input-wrap">
          <span class="ms field-icon-left">person</span>
          <input type="text" name="name" id="input-fullname" class="field-input" placeholder="Sesuai Akun Dapodik Sekolah" value="{{ old('name') }}">
        </div>
      </div>

      <!-- Password -->
      <div class="field-group">
        <div class="field-label-row">
          <label class="field-label" for="input-password">Kata Sandi / PIN</label>
          <button type="button" onclick="openForgotPinModal()" style="background:none;border:none;cursor:pointer;font-family:inherit;color:#94a3b8;font-size:11px;font-weight:600;">Lupa PIN?</button>
        </div>
        <div class="field-input-wrap">
          <span class="ms field-icon-left">lock</span>
          <input type="password" name="password" id="input-password" class="field-input" placeholder="&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;" required>
          <div class="field-icon-right">
            <button type="button" id="toggle-password" class="icon-btn"><span class="ms" id="pwd-icon">visibility_off</span></button>
          </div>
        </div>
      </div>

      <!-- Remember -->
      <div class="remember-row">
        <div class="remember-left">
          <input type="checkbox" id="remember" name="remember" checked>
          <label for="remember">Ingat perangkat ini di perpustakaan</label>
        </div>
        <div class="secure-badge"><span class="ms" style="font-size:12px">shield</span>AMAN</div>
      </div>

      <!-- Submit -->
      <button id="submit-button" type="submit" class="submit-btn">
        <span id="submit-label">Masuk ke Perpustakaan</span>
        <span class="ms ms-icon">arrow_forward</span>
      </button>
    </form>

  </div>
</div>

<!-- SCANNER MODAL -->
<div id="qr-modal" class="scanner-backdrop" style="display:none;">
  <div class="scanner-card">
    <div class="scanner-header">
      <div style="display:flex;align-items:center;gap:10px;">
        <div class="scanner-icon-badge"><span class="ms">qr_code_scanner</span></div>
        <div>
          <div style="font-size:15px;font-weight:700;color:#1e1b4b;">Fast Pass Scanner</div>
          <div style="font-size:11px;color:#6b7280;">Arahkan kamera ke QR / Barcode kartu</div>
        </div>
      </div>
      <button type="button" id="btn-close-scanner" class="scanner-close-btn">&times;</button>
    </div>
    <div class="scanner-viewport">
      <div id="qr-reader"></div>
      <div class="scan-frame">
        <div class="sc tl"></div><div class="sc tr"></div>
        <div class="sc bl"></div><div class="sc br"></div>
        <div class="laser"></div>
      </div>
    </div>
    <div id="scanner-status" class="scanner-status">
      <span class="ms spin" style="font-size:16px;">autorenew</span> Menyiapkan kamera...
    </div>
    <div id="scanner-alert" class="scanner-alert-box"></div>
    <div class="scanner-actions">
      <button type="button" id="btn-switch-camera" class="scan-action-btn">
        <span class="ms" style="font-size:18px;">flip_camera_ios</span>Ganti Kamera
      </button>
      <label class="scan-action-btn" style="cursor:pointer;margin:0;">
        <span class="ms" style="font-size:18px;">image</span>Unggah Gambar
        <input type="file" id="qr-file-input" accept="image/*" style="display:none;">
      </label>
      <button type="button" id="btn-demo-scan" class="scan-action-btn demo">
        <span class="ms" style="font-size:18px;">bolt</span>Coba Demo
      </button>
    </div>
  </div>
</div>

<!-- FORGOT PIN MODAL -->
<div id="forgot-pin-modal" class="scanner-backdrop" style="display:none;">
  <div class="forgot-card">
    <div class="forgot-icon"><span class="ms" style="font-size:32px;">lock_reset</span></div>
    <h3 style="font-size:20px;font-weight:800;color:#0f172a;margin-bottom:8px;">Lupa PIN Anda?</h3>
    <p style="font-size:14px;color:#64748b;line-height:1.6;margin-bottom:24px;">Untuk alasan keamanan, reset PIN hanya dapat dilakukan oleh Admin Perpustakaan (Tech Support).</p>
    <div style="display:flex;flex-direction:column;gap:10px;">
      <a href="{{ route('bantuan') }}" style="display:flex;align-items:center;justify-content:center;gap:8px;padding:13px;background:#6d48e5;color:#fff;border-radius:12px;font-weight:700;font-size:14px;text-decoration:none;">
        <span>Hubungi Tech Support</span><span class="ms" style="font-size:18px;">support_agent</span>
      </a>
      <button type="button" onclick="closeForgotPinModal()" style="padding:13px;background:#f1f5f9;color:#64748b;border:none;border-radius:12px;font-weight:700;font-size:14px;cursor:pointer;font-family:inherit;">
        Kembali ke Login
      </button>
    </div>
  </div>
</div>

<script>
function openForgotPinModal()  { document.getElementById('forgot-pin-modal').style.display='flex'; }
function closeForgotPinModal() { document.getElementById('forgot-pin-modal').style.display='none'; }
document.getElementById('forgot-pin-modal').addEventListener('click',function(e){if(e.target===this)closeForgotPinModal();});
</script>

<script>
(function(){
  const tabLogin=document.getElementById('tab-login');
  const tabReg=document.getElementById('tab-register');
  const regField=document.getElementById('register-field-name');
  const submitBtn=document.getElementById('submit-button');
  const submitLabel=document.getElementById('submit-label');
  const roleStudent=document.getElementById('role-student');
  const roleTeacher=document.getElementById('role-teacher');
  const labelId=document.getElementById('label-identifier');
  const inputId=document.getElementById('input-identifier');
  const togglePwd=document.getElementById('toggle-password');
  const inputPwd=document.getElementById('input-password');
  const pwdIcon=document.getElementById('pwd-icon');
  const authForm=document.getElementById('auth-form');
  const isRegIn=document.getElementById('is-register');
  const inputName=document.getElementById('input-fullname');
  const alertBox=document.getElementById('js-alert-container');

  let mode='login', role='student';

  const oldIsReg="{{ old('is_register') }}";
  if(oldIsReg==="1") switchToReg();

  function showAlert(msg,type='error'){
    alertBox.style.display='flex';
    if(type==='success'){
      alertBox.style.background='#dcfce7';alertBox.style.color='#166534';
      alertBox.innerHTML=`<span class="ms" style="font-size:18px;color:#16a34a">check_circle</span><span>${msg}</span>`;
    }else{
      alertBox.style.background='#fee2e2';alertBox.style.color='#991b1b';
      alertBox.innerHTML=`<span class="ms" style="font-size:18px;color:#dc2626">error</span><span>${msg}</span>`;
    }
    setTimeout(()=>{alertBox.style.display='none';},5000);
  }

  function switchToLogin(){
    if(mode==='login')return;mode='login';
    tabLogin.classList.add('active');tabReg.classList.remove('active');
    regField.classList.add('hidden');inputName.removeAttribute('required');
    submitLabel.textContent='Masuk ke Perpustakaan';isRegIn.value="0";
  }
  function switchToReg(){
    if(mode==='register')return;mode='register';
    tabReg.classList.add('active');tabLogin.classList.remove('active');
    regField.classList.remove('hidden');inputName.setAttribute('required','required');
    submitLabel.textContent='Aktivasi Akun Baru';isRegIn.value="1";
  }

  tabLogin.addEventListener('click',switchToLogin);
  tabReg.addEventListener('click',switchToReg);

  roleStudent.addEventListener('click',()=>{
    if(role==='student')return;role='student';
    roleStudent.classList.add('active');roleTeacher.classList.remove('active');
    labelId.textContent='Nomor Induk Siswa (NIS)';inputId.placeholder='Contoh: 2024108827';
  });
  roleTeacher.addEventListener('click',()=>{
    if(role==='teacher')return;role='teacher';
    roleTeacher.classList.add('active');roleStudent.classList.remove('active');
    labelId.textContent='Nomor Induk Pegawai (NIP / NUPTK)';inputId.placeholder='Contoh: 198503152010011002';
  });

  togglePwd.addEventListener('click',()=>{
    const isPass=inputPwd.type==='password';
    inputPwd.type=isPass?'text':'password';
    pwdIcon.textContent=isPass?'visibility':'visibility_off';
  });

  authForm.addEventListener('submit',async function(e){
    e.preventDefault();
    const isReg=isRegIn.value==="1";
    const apiUrl=isReg?'/api/register':'/api/login';
    const payload={nis:inputId.value,password:inputPwd.value};
    if(isReg){
      payload.name=inputName.value;payload.password_confirmation=inputPwd.value;
      const sn=document.querySelector('input[name="school_name"]');
      payload.school_name=sn?sn.value:'Asal Sekolah Default';
    }
    submitBtn.disabled=true;submitLabel.textContent='Memproses...';alertBox.style.display='none';
    const csrf=document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
    try{
      const res=await fetch(apiUrl,{method:'POST',headers:{'Content-Type':'application/json','Accept':'application/json','X-CSRF-TOKEN':csrf},body:JSON.stringify(payload)});
      const data=await res.json();
      if(res.ok){
        if(isReg){
          showAlert('Akun Berhasil Dibuat. Silakan masuk.','success');
          setTimeout(()=>{inputId.value='';inputPwd.value='';inputName.value='';switchToLogin();},1500);
        }else{
          localStorage.setItem('auth_token',data.token||data.access_token);
          showAlert('Login berhasil!','success');
          setTimeout(()=>{window.location.href='/katalog';},800);
        }
      }else{
        let msg=data.message||'Terjadi kesalahan.';
        if(data.errors)msg=Object.values(data.errors).flat().join('<br>');
        showAlert('Gagal: '+msg,'error');
      }
    }catch(err){showAlert('Kesalahan jaringan. Pastikan koneksi internet aktif.','error');}
    finally{submitBtn.disabled=false;submitLabel.textContent=isReg?'Aktivasi Akun Baru':'Masuk ke Perpustakaan';}
  });

  // QR SCANNER
  const qrModal=document.getElementById('qr-modal');
  const btnClose=document.getElementById('btn-close-scanner');
  const scanStat=document.getElementById('scanner-status');
  const scanAlert=document.getElementById('scanner-alert');
  const btnSwitch=document.getElementById('btn-switch-camera');
  const fileInput=document.getElementById('qr-file-input');
  const btnDemo=document.getElementById('btn-demo-scan');

  let qr=null,scanning=false,facingMode="environment",processing=false;

  function playBeep(){try{const c=new(window.AudioContext||window.webkitAudioContext)();const o=c.createOscillator();const g=c.createGain();o.connect(g);g.connect(c.destination);o.type='sine';o.frequency.setValueAtTime(750,c.currentTime);o.frequency.exponentialRampToValueAtTime(1200,c.currentTime+0.12);g.gain.setValueAtTime(0.2,c.currentTime);g.gain.exponentialRampToValueAtTime(0.01,c.currentTime+0.15);o.start();o.stop(c.currentTime+0.15);}catch(e){}}

  window.openScanner=function(){
    qrModal.style.display='flex';scanAlert.style.display='none';scanAlert.className='scanner-alert-box';
    scanStat.innerHTML='<span class="ms spin" style="font-size:16px;">autorenew</span> Menghubungkan ke kamera...';
    processing=false;
    if(typeof Html5Qrcode==='undefined'){scanStat.innerHTML='<span style="color:#ef4444"><span class="ms" style="font-size:16px">warning</span> Library QR Scanner sedang dimuat...</span>';return;}
    if(!qr)qr=new Html5Qrcode("qr-reader");
    startCam(facingMode);
  };

  function startCam(fm){
    qr.start({facingMode:fm},{fps:10,qrbox:{width:220,height:220},aspectRatio:1.0},onSuccess,()=>{}).then(()=>{scanning=true;scanStat.innerHTML='<span class="ms" style="font-size:16px;color:#22c55e">videocam</span> Kamera aktif. Arahkan ke barcode / QR ID.';}).catch(()=>{scanning=false;scanStat.innerHTML='<span style="color:#f59e0b"><span class="ms" style="font-size:16px">videocam_off</span> Kamera tidak aktif. Coba ganti kamera.</span>';});
  }

  function stopCam(){if(qr&&scanning)qr.stop().then(()=>{scanning=false;}).catch(()=>{});}

  function closeModal(){stopCam();qrModal.style.display='none';processing=false;}

  btnClose.addEventListener('click',closeModal);
  qrModal.addEventListener('click',e=>{if(e.target===qrModal)closeModal();});

  btnSwitch.addEventListener('click',()=>{
    if(qr&&scanning){facingMode=facingMode==="environment"?"user":"environment";qr.stop().then(()=>{scanning=false;scanStat.innerHTML='<span class="ms spin" style="font-size:16px">autorenew</span> Berganti kamera...';startCam(facingMode);}).catch(()=>{});}
  });

  fileInput.addEventListener('change',function(e){
    const f=e.target.files[0];if(!f)return;
    if(!qr)qr=new Html5Qrcode("qr-reader");
    scanStat.innerHTML='<span class="ms spin" style="font-size:16px">autorenew</span> Memindai file gambar...';
    qr.scanFile(f,true).then(t=>onSuccess(t)).catch(()=>{scanStat.innerHTML='<span style="color:#ef4444"><span class="ms" style="font-size:16px">cancel</span> Barcode tidak terbaca di gambar.</span>';});
  });

  btnDemo.addEventListener('click',()=>{scanStat.innerHTML='<span class="ms" style="font-size:16px;color:#6d48e5">bolt</span> Mensimulasikan scan kartu Nadia...';onSuccess("2024108827");});

  function onSuccess(text){
    if(processing)return;processing=true;playBeep();stopCam();
    scanStat.innerHTML='<span class="ms" style="font-size:16px;color:#22c55e">check_circle</span> Berhasil terbaca: <b>'+text+'</b>';
    let nis=text;
    if(text.includes('BZ-')){const p=text.split('-');if(p.length>=3)nis=p[1]+p[2];}
    inputId.value=nis;
    const csrf=document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
    fetch("/api/qr-login",{method:'POST',headers:{'Content-Type':'application/json','Accept':'application/json','X-CSRF-TOKEN':csrf},body:JSON.stringify({qr_data:text})})
    .then(r=>r.json()).then(d=>{
      if(d.success){if(d.token)localStorage.setItem('auth_token',d.token);window.location.href=d.redirect;}
      else{scanAlert.className='scanner-alert-box alert-danger';scanAlert.innerHTML='<span class="ms" style="font-size:16px">error</span> '+(d.message||'QR tidak valid.');scanAlert.style.display='block';processing=false;}
    }).catch(()=>{scanAlert.className='scanner-alert-box alert-danger';scanAlert.innerHTML='<span class="ms" style="font-size:16px">wifi_off</span> Koneksi ke server terputus.';scanAlert.style.display='block';processing=false;});
  }
})();
</script>
</body>
</html>
