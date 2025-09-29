<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan Sambuli - Permata Wakatobi</title>
    <style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        /* Animated Background */
        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"><path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="%23ffffff" opacity="0.1"/></svg>') repeat-x;
            animation: wave 10s cubic-bezier(0.36, 0.45, 0.63, 0.53) infinite;
        }

        @keyframes wave {
            0% { background-position: 0 0; }
            100% { background-position: 1200px 0; }
        }

        /* Navbar */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 20px 0;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        nav.scrolled {
            padding: 15px 0;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.15);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            overflow: hidden;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.05" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-size: cover;
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease-out;
            font-weight: 700;
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            letter-spacing: 2px;
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease-out 0.2s backwards;
            font-weight: 300;
        }

        .hero-btn {
            background: white;
            color: #667eea;
            padding: 18px 50px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.4s ease;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
            animation: fadeInUp 1s ease-out 0.4s backwards;
        }

        .hero-btn:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 40px rgba(255, 255, 255, 0.4);
            background: #f8f9fa;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Floating Elements */
        .floating-element {
            position: absolute;
            animation: floating 6s ease-in-out infinite;
            opacity: 0.2;
        }

        .floating-element:nth-child(1) {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }

        .floating-element:nth-child(3) {
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        @keyframes floating {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-30px) rotate(180deg);
            }
        }

        /* Stats Section */
        .stats-section {
            background: white;
            padding: 80px 20px;
            position: relative;
        }

        .stats-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .stat-card {
            text-align: center;
            padding: 40px 20px;
            background: linear-gradient(135deg, #667eea15, #764ba215);
            border-radius: 20px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .stat-card:hover {
            transform: translateY(-10px);
            border-color: #667eea;
            box-shadow: 0 20px 40px rgba(102, 126, 234, 0.2);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 1rem;
            color: #666;
            font-weight: 500;
        }

        /* Profile Section */
        .profile-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 100px 20px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .profile-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            border-radius: 50%;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .section-title {
            text-align: center;
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
            position: relative;
            padding-bottom: 20px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 5px;
            background: white;
            border-radius: 10px;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.2rem;
            margin-bottom: 60px;
            opacity: 0.9;
            font-weight: 300;
        }

        .profile-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            margin-top: 50px;
            align-items: center;
        }

        .profile-text {
            background: rgba(255, 255, 255, 0.15);
            padding: 40px;
            border-radius: 25px;
            backdrop-filter: blur(20px);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .profile-text:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .profile-text h3 {
            font-size: 2rem;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .profile-text p {
            line-height: 2;
            margin-bottom: 20px;
            text-align: justify;
            font-size: 1.05rem;
            opacity: 0.95;
        }

        .profile-image-wrapper {
            position: relative;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.4);
            transition: all 0.5s ease;
        }

        .profile-image-wrapper:hover {
            transform: scale(1.05) rotate(2deg);
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.5);
        }

        .profile-image-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.3), rgba(118, 75, 162, 0.3));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .profile-image-wrapper:hover::before {
            opacity: 1;
        }

        .profile-image-wrapper img {
            width: 100%;
            height: 450px;
            object-fit: cover;
            display: block;
        }

        /* History Section */
        .history-section {
            background: rgba(255, 255, 255, 0.1);
            padding: 50px;
            border-radius: 25px;
            margin-top: 50px;
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            grid-column: 1 / -1;
            transition: all 0.3s ease;
        }

        .history-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
        }

        .history-section h3 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            font-weight: 600;
            text-align: center;
        }

        .history-content {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .history-item {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 15px;
            border-left: 4px solid white;
            transition: all 0.3s ease;
        }

        .history-item:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(10px);
        }

        .history-item p {
            line-height: 1.9;
            text-align: justify;
            font-size: 1rem;
            opacity: 0.95;
        }

        /* Vision Mission Section */
        .vision-mission {
            padding: 100px 20px;
            background: white;
            position: relative;
        }

        .vm-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            margin-top: 60px;
        }

        .vm-card {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 50px;
            border-radius: 25px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .vm-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(135deg, transparent 30%, rgba(102, 126, 234, 0.1) 50%, transparent 70%);
            transform: rotate(45deg);
            transition: all 0.6s ease;
        }

        .vm-card:hover::before {
            transform: rotate(45deg) translate(50%, 50%);
        }

        .vm-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 25px 60px rgba(102, 126, 234, 0.3);
        }

        .vm-card h3 {
            color: #667eea;
            font-size: 2.2rem;
            margin-bottom: 25px;
            font-weight: 700;
            position: relative;
            z-index: 1;
        }

        .vm-card p {
            color: #555;
            line-height: 2;
            font-size: 1.1rem;
            position: relative;
            z-index: 1;
        }

        .vm-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            display: block;
        }

        /* Documentation Section */
        .documentation {
            padding: 100px 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .doc-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 60px;
        }

        .doc-card {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
            transition: all 0.4s ease;
            cursor: pointer;
            height: 300px;
        }

        .doc-card:hover {
            transform: translateY(-15px) scale(1.05);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5);
        }

        .doc-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .doc-card:hover img {
            transform: scale(1.2) rotate(5deg);
        }

        .doc-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.9));
            padding: 30px;
            transform: translateY(100%);
            transition: transform 0.4s ease;
        }

        .doc-card:hover .doc-overlay {
            transform: translateY(0);
        }

        .doc-overlay p {
            font-size: 1.1rem;
            font-weight: 500;
        }

        /* Footer */
        footer {
            background: #1a1a2e;
            color: white;
            padding: 60px 20px 30px;
            text-align: center;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-section h3 {
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .footer-section p {
            line-height: 1.8;
            opacity: 0.8;
        }

        .social-links {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 20px;
        }

        .social-links a {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            text-decoration: none;
            color: white;
            font-size: 1.5rem;
        }

        .social-links a:hover {
            background: #667eea;
            transform: translateY(-5px) rotate(360deg);
        }

        .copyright {
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            opacity: 0.7;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .hero h1 { font-size: 3rem; }
            .stats-container { grid-template-columns: repeat(2, 1fr); }
            .profile-grid { grid-template-columns: 1fr; }
            .history-content { grid-template-columns: 1fr; }
        }

        @media (max-width: 768px) {
            .nav-links { display: none; }
            .hero h1 { font-size: 2rem; }
            .hero p { font-size: 1.2rem; }
            .vm-grid { grid-template-columns: 1fr; }
            .doc-grid { grid-template-columns: repeat(2, 1fr); }
            .footer-grid { grid-template-columns: 1fr; }
            .section-title { font-size: 2rem; }
        }

        @media (max-width: 480px) {
            .doc-grid { grid-template-columns: 1fr; }
            .stats-container { grid-template-columns: 1fr; }
        }

        /* Scroll Progress Bar */
        .progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            z-index: 9999;
            transition: width 0.1s;
        }
    </style>
</head>
<body>
    <div class="progress-bar" id="progressBar"></div>
    <div class="animated-bg">
        <div class="wave"></div>
    </div>

    <!-- Navbar -->
    <nav id="navbar">
        <div class="nav-container">
            <div class="logo">🏝️ Sambuli</div>
            <ul class="nav-links">
                <li><a href="#home">Beranda</a></li>
                <li><a href="#profil">Profil</a></li>
                <li><a href="#visi-misi">Visi & Misi</a></li>
                <li><a href="#dokumentasi">Dokumentasi</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="floating-element">🌊</div>
        <div class="floating-element">⛵</div>
        <div class="floating-element">🐚</div>
        <div class="hero-content">
            <h1>Selamat Datang di Kelurahan Sambuli</h1>
            <p>Kelurahan Sambuli Menyimpan Potensi Menatap Masa Depan</p>
            <a href="#profil" class="hero-btn">Jelajahi Potensi Kami</a>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-number">347</div>
                <div class="stat-label">Hektar Luas Wilayah</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">1.962</div>
                <div class="stat-label">Jumlah Penduduk</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">42</div>
                <div class="stat-label">Tahun Berdiri</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">7</div>
                <div class="stat-label">Jumlah RT</div>
            </div>
        </div>
    </section>

    <!-- Profile Section -->
    <section class="profile-section" id="profil">
        <div class="container">
            <h2 class="section-title">Profil Kelurahan</h2>
            <p class="section-subtitle">Mengenal Lebih Dekat Sambuli</p>
            
            <div class="profile-grid">
                <div class="profile-text">
                    <h3>✨ Tentang Sambuli</h3>
                    <p>Kelurahan Sambuli adalah salah satu kelurahan yang terletak di Kecamatan Wangi-Wangi Selatan, Kabupaten Wakatobi. Memiliki potensi wisata bahari dan budaya yang kaya, Sambuli menjadi salah satu destinasi unggulan di Wakatobi.</p>
                    <p>Dengan wilayah seluas 125 hektar dengan jumlah penduduk mencapai 2.500 jiwa, Sambuli terus berkembang sebagai pusat kegiatan ekonomi dan pariwisata berbasis masyarakat dengan mengedepankan kelestarian lingkungan dan kearifan lokal.</p>
                </div>
                
                <div class="profile-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=800" alt="Kelurahan Sambuli">
                </div>

                <!-- History Section -->
                <div class="history-section">
                    <h3>📜 Sejarah Kelurahan Sambuli</h3>
                    <div class="history-content">
                        <div class="history-item">
                            <p>Kelurahan Sambuli memiliki sejarah panjang yang dimulai dari era pra-kemerdekaan. Nama "Sambuli" berasal dari bahasa lokal yang berarti "tempat berkumpul", mencerminkan peran penting wilayah ini sebagai pusat interaksi sosial masyarakat Wakatobi sejak dahulu kala.</p>
                        </div>
                        <div class="history-item">
                            <p>Pada masa kolonial, Sambuli merupakan salah satu pelabuhan kecil yang ramai dikunjungi pedagang dari berbagai pulau di Nusantara. Setelah kemerdekaan Indonesia, Sambuli terus berkembang dan secara resmi ditetapkan sebagai kelurahan pada tahun 1982.</p>
                        </div>
                        <div class="history-item">
                            <p>Masyarakat Sambuli dikenal dengan tradisi bahari yang kuat, dengan mayoritas penduduk bermata pencaharian sebagai nelayan dan pengrajin perahu tradisional. Kearifan lokal dalam menjaga ekosistem laut telah diwariskan turun-temurun.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Mission Section -->
    <section class="vision-mission" id="visi-misi">
        <div class="container">
            <h2 class="section-title" style="color: #333;">Visi dan Misi</h2>
            <p class="section-subtitle" style="color: #666;">Komitmen Kami Untuk Masa Depan</p>
            
            <div class="vm-grid">
                <div class="vm-card">
                    <span class="vm-icon">🎯</span>
                    <h3>Visi Kelurahan</h3>
                    <p>Mewujudkan Kelurahan Sambuli yang maju, sejahtera, dan lestari berbasis potensi lokal dan pemberdayaan masyarakat menuju kehidupan yang lebih baik dengan tetap menjaga kelestarian lingkungan dan nilai-nilai kearifan lokal.</p>
                </div>
                
                <div class="vm-card">
                    <span class="vm-icon">🚀</span>
                    <h3>Misi Kelurahan</h3>
                    <p>Meningkatkan kualitas pelayanan publik, mengembangkan ekonomi berbasis masyarakat, melestarikan budaya dan lingkungan, serta membangun infrastruktur yang mendukung kesejahteraan masyarakat Sambuli secara berkelanjutan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Documentation Section -->
    <section class="documentation" id="dokumentasi">
        <div class="container">
            <h2 class="section-title">Galeri Dokumentasi</h2>
            <p class="section-subtitle">Momen Indah dari Sambuli</p>
            
            <div class="doc-grid">
                <div class="doc-card">
                    <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=600" alt="Dokumentasi 1">
                    <div class="doc-overlay">
                        <p>🌅 Pemandangan Kelurahan Sambuli</p>
                    </div>
                </div>
                <div class="doc-card">
                    <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=600" alt="Dokumentasi 2">
                    <div class="doc-overlay">
                        <p>⚓ Aktivitas Nelayan Tradisional</p>
                    </div>
                </div>
                <div class="doc-card">
                    <img src="https://images.unsplash.com/photo-1505142468610-359e7d316be0?w=600" alt="Dokumentasi 3">
                    <div class="doc-overlay">
                        <p>🏖️ Keindahan Pesisir Sambuli</p>
                    </div>
                </div>
                <div class="doc-card">
                    <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=600" alt="Dokumentasi 4">
                    <div class="doc-overlay">
                        <p>⛵ Perahu Tradisional</p>
                    </div>
                </div>
                <div class="doc-card">
                    <img src="https://images.unsplash.com/photo-1540202404-d0c7fe46a087?w=600" alt="Dokumentasi 5">
                    <div class="doc-overlay">
                        <p>🌺 Kehidupan Masyarakat</p>
                    </div>
                </div>
                <div class="doc-card">
                    <img src="https://images.unsplash.com/photo-1473496169904-658ba7c44d8a?w=600" alt="Dokumentasi 6">
                    <div class="doc-overlay">
                        <p>🌇 Sunset di Sambuli</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-grid">
                <div class="footer-section">
                    <h3>Kelurahan Sambuli</h3>
                    <p>Kecamatan Nambo<br>
                    Sulawesi Tenggara</p>
                </div>
                <div class="footer-section">
                    <h3>Kontak Kami</h3>
                    <p>Email: sambuli@wakatobi.go.id<br>
                    Telepon: (0401) 123456<br>
                    WhatsApp: +62 812-3456-7890</p>
                </div>
                <div class="footer-section">
                    <h3>Jam Pelayanan</h3>
                    <p>Senin - Jumat<br>
                    08:00 - 16:00 WITA<br>
                    (Libur Hari Sabtu & Minggu)</p>
                </div>
            </div>
            
            <div class="social-links">
                <a href="#" title="Facebook">📘</a>
                <a href="#" title="Instagram">📷</a>
                <a href="#" title="Twitter">🐦</a>
                <a href="#" title="YouTube">📺</a>
            </div>
            
            <div class="copyright">
                <p>&copy; 2025 Kelurahan Sambuli. Semua Hak Dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        const progressBar = document.getElementById('progressBar');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

            // Progress bar
            const scrollTotal = document.documentElement.scrollHeight - window.innerHeight;
            const scrollProgress = (window.scrollY / scrollTotal) * 100;
            progressBar.style.width = scrollProgress + '%';
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements
        document.querySelectorAll('.stat-card, .vm-card, .doc-card, .profile-text, .history-item').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });
    </script>
</body>
</html>