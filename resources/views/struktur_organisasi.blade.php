<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#2C1A47" />
  <title>Struktur Organisasi - Sambuli</title>

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
    /* Reset singkat */
    * { box-sizing: border-box; margin: 0; padding: 0; -webkit-tap-highlight-color: transparent; }
    html,body { height: 100%; }

    body{
      font-family: 'Poppins', sans-serif;
      color: #222;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background: linear-gradient(135deg, #1E3A5F 0%, #2C1A47 100%);
    }

    /* NAVBAR */
    nav {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      width: 100%;
      background: rgba(255,255,255,0.96);
      backdrop-filter: blur(6px);
      box-shadow: 0 2px 12px rgba(12,18,35,0.06);
      z-index: 1200;
    }
    .nav-container{
      max-width: 1200px;
      margin: 0 auto;
      padding: 12px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .logo {
            font-size: 1.3rem;
            font-weight: 700;
            background: linear-gradient(135deg, #1E3A5F 0%, #2C1A47 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            z-index: 1001;
        }

    .nav-links{
      display:flex;
      gap:26px;
      align-items:center;
      list-style:none;
    }
    .nav-links a{
      text-decoration:none;
      color:#2c1a47;
      font-weight:500;
      padding:8px 6px;
      position:relative;
    }
    .nav-links a::after{
      content:'';
      position:absolute;
      left:50%;
      bottom:-6px;
      transform:translateX(-50%);
      height:2px;
      width:0;
      background:linear-gradient(90deg,#1E3A5F,#2C1A47);
      transition: width .25s ease;
    }
    .nav-links a:hover::after,
    .nav-links a.active::after { width:70%; }

    @media (max-width:768px){
      .nav-links{ display:none; }
    }

    /* CONTENT */
    main.content{
      flex:1;
      margin-top:78px;
      padding:40px 20px;
      max-width:1200px;
      margin-left:auto;
      margin-right:auto;
      width:100%;
    }

    .page-title{
      text-align:center;
      margin-bottom:28px;
      font-size:1.9rem;
      font-weight:700;
      /* warna gradient judul */
      background: linear-gradient(135deg, #1E3A5F 0%, #2C1A47 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .hero-img{
      display:block;
      margin:0 auto;
      width:100%;
      max-width:900px;
      border-radius:10px;
      box-shadow:0 10px 30px rgba(10,15,30,0.08);
    }

    /* FOOTER */
    footer{
      width:100%;
      left:0;
      right:0;
      background: linear-gradient(180deg,#0a0710 0%, #12120bff 100%);
      color:#e8e8ee;
      padding:48px 20px;
      margin-top:20px;
    }

    .footer-inner{
      max-width:1200px;
      margin:0 auto;
      display:flex;
      gap:36px;
      align-items:flex-start;
      justify-content:space-between;
      flex-wrap:wrap;
      padding: 12px 0;
    }
    .footer-col{ min-width:220px; flex:1 1 220px; }
    .footer-col h4{ color:#fff; font-size:1.05rem; margin-bottom:12px; font-weight:700; }
    .footer-col p, .footer-col a{ color:#bfc1c9; font-size:0.95rem; line-height:1.6; text-decoration:none; }

    .footer-bottom{
      border-top:1px solid rgba(220, 192, 114, 0.04);
      margin-top:22px;
      padding-top:18px;
      text-align:center;
      color:#9fa1ab;
      font-size:0.9rem;
    }

    @media (max-width:820px){
      .footer-inner{ gap:18px; }
      .footer-col{ flex:1 1 100%; }
      .page-title{ font-size:1.4rem; }
      .hero-img{ max-width:100%; }
    }
  </style>
</head>

<body>
  <!-- NAVBAR -->
  <nav>
    <div class="nav-container">
      <a class="logo" href="{{ url('/') }}">
        <img src="{{ asset('images/logo.png') }}" alt="Sambuli logo" onerror="this.style.display='none'">
        <span>🏝️ Sambuli</span>
      </a>
      <ul class="nav-links">
        <li><a href="{{ url('/') }}#home">Beranda</a></li>
        <li><a href="{{ url('/') }}#profil">Profil</a></li>
        <li><a href="{{ url('/') }}#visi-misi">Visi &amp; Misi</a></li>
        <li><a href="{{ url('/') }}#dokumentasi">Dokumentasi</a></li>
        <li><a href="{{ url('/struktur_organisasi') }}" class="active">Struktur Organisasi</a></li>
      </ul>
    </div>
  </nav>

  <!-- MAIN -->
  <main class="content" role="main">
    <h1 class="page-title">Struktur Organisasi Kelurahan Sambuli</h1>
    <img class="hero-img" src="{{ asset('images/strukturorganisasi.png') }}" alt="Struktur Organisasi">
  </main>

  <!-- FOOTER -->
  <footer>
    <div class="footer-inner">
      <div class="footer-col">
        <h4>Kelurahan Sambuli</h4>
        <p>Kecamatan Nambo<br />Sulawesi Tenggara</p>
      </div>
      <div class="footer-col">
        <h4>Kontak Kami</h4>
        <p>Email: kelurahansambuli3@gmail.com<br/>WhatsApp: +62 852-4182-7228</p>
      </div>
      <div class="footer-col">
        <h4>Jam Pelayanan</h4>
        <p>Senin - Jumat<br/>08:00 - 16:00 WITA<br/>(Libur Hari Sabtu &amp; Minggu)</p>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; 2025 Kelurahan Sambuli. Semua Hak Dilindungi.
    </div>
  </footer>
</body>
</html>
