<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="theme-color" content="#667eea">
    <title>Kelurahan Sambuli - Permata Wakatobi</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
        }

        html {
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
            width: 100%;
            position: relative;
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

        /* Progress Bar */
        .progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            z-index: 9999;
            transition: width 0.1s;
        }

        /* Navbar */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            padding: 12px 0;
            z-index: 1000;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        nav.scrolled {
            padding: 8px 0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 15px;
        }

        .logo {
            font-size: 1.3rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            z-index: 1001;
        }

        .nav-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 4px;
            z-index: 1001;
            padding: 5px;
        }

        .nav-toggle span {
            width: 25px;
            height: 3px;
            background: #667eea;
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        .nav-toggle.active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .nav-toggle.active span:nth-child(2) {
            opacity: 0;
        }

        .nav-toggle.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -6px);
        }

        .nav-links {
            display: flex;
            gap: 20px;
            list-style: none;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            font-size: 0.95rem;
            padding: 8px 12px;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after,
        .nav-links a.active::after {
            width: 80%;
        }

        /* Hero Section */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            overflow: hidden;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 100px 20px 60px;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            width: 100%;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease-out;
            font-weight: 700;
            text-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease-out 0.2s backwards;
            font-weight: 300;
            line-height: 1.5;
        }

        .hero-btn {
            background: white;
            color: #667eea;
            padding: 14px 35px;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.3);
            animation: fadeInUp 1s ease-out 0.4s backwards;
        }

        .hero-btn:active {
            transform: scale(0.95);
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

        .floating-element {
            position: absolute;
            animation: floating 6s ease-in-out infinite;
            opacity: 0.15;
            font-size: 2rem;
            pointer-events: none;
        }

        .floating-element:nth-child(1) {
            top: 15%;
            left: 8%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            top: 50%;
            right: 10%;
            animation-delay: 2s;
        }

        .floating-element:nth-child(3) {
            bottom: 15%;
            left: 15%;
            animation-delay: 4s;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-25px) rotate(180deg); }
        }

        /* Stats Section */
        .stats-section {
            background: white;
            padding: 50px 15px;
            position: relative;
        }

        .stats-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .stat-card {
            text-align: center;
            padding: 25px 15px;
            background: linear-gradient(135deg, #667eea15, #764ba215);
            border-radius: 15px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .stat-card:active {
            transform: scale(0.95);
            border-color: #667eea;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 8px;
        }

        .stat-label {
            font-size: 0.85rem;
            color: #666;
            font-weight: 500;
            line-height: 1.4;
        }

        /* Profile Section */
        .profile-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 60px 15px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .section-title {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 10px;
            font-weight: 700;
            position: relative;
            padding-bottom: 15px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: white;
            border-radius: 10px;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1rem;
            margin-bottom: 40px;
            opacity: 0.9;
            font-weight: 300;
        }

        .profile-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 25px;
            margin-top: 30px;
        }

        .profile-text {
            background: rgba(255, 255, 255, 0.15);
            padding: 25px 20px;
            border-radius: 18px;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .profile-text h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .profile-text p {
            line-height: 1.7;
            margin-bottom: 12px;
            text-align: justify;
            font-size: 0.95rem;
            opacity: 0.95;
        }

        .profile-image-wrapper {
            position: relative;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
        }

        .profile-image-wrapper img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            display: block;
        }

        /* History Section */
        .history-section {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px 20px;
            border-radius: 18px;
            margin-top: 30px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .history-section h3 {
            font-size: 1.6rem;
            margin-bottom: 20px;
            font-weight: 600;
            text-align: center;
        }

        .history-content {
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .history-item {
            background: rgba(255, 255, 255, 0.1);
            padding: 18px;
            border-radius: 12px;
            border-left: 4px solid white;
        }

        .history-item p {
            line-height: 1.7;
            text-align: justify;
            font-size: 0.9rem;
            opacity: 0.95;
        }

        /* Vision Mission Section */
        .vision-mission {
            padding: 60px 15px;
            background: white;
            position: relative;
        }

        .vm-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 25px;
            margin-top: 40px;
        }

        .vm-card {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 30px 20px;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .vm-card:active {
            transform: scale(0.98);
        }

        .vm-card h3 {
            color: #667eea;
            font-size: 1.6rem;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .vm-card p {
            color: #555;
            line-height: 1.7;
            font-size: 0.95rem;
            text-align: justify;
        }

        .vm-icon {
            font-size: 2.5rem;
            margin-bottom: 12px;
            display: block;
        }

        /* Documentation Section */
        .documentation {
            padding: 60px 15px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .doc-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin-top: 40px;
        }

        .doc-card {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
            cursor: pointer;
            height: 220px;
        }

        .doc-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease;
        }

        .doc-card:active img {
            transform: scale(1.1);
        }

        .doc-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.85));
            padding: 15px;
        }

        .doc-overlay p {
            font-size: 1rem;
            font-weight: 500;
        }

        /* Map Section */
        .map-section {
            padding: 50px 15px;
            background: white;
        }

        .map-card {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .map-header {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .map-card iframe {
            width: 100%;
            height: 300px;
            border: none;
            display: block;
        }

        /* Footer */
        footer {
            background: #1a1a2e;
            color: white;
            padding: 40px 15px 20px;
            text-align: center;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 25px;
            margin-bottom: 25px;
        }

        .footer-section h3 {
            margin-bottom: 12px;
            font-size: 1.3rem;
        }

        .footer-section p {
            line-height: 1.7;
            opacity: 0.8;
            font-size: 0.9rem;
        }

        .social-links {
            display: flex;
            gap: 12px;
            justify-content: center;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .social-links a {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            text-decoration: none;
            color: white;
            font-size: 1.3rem;
        }

        .social-links a:active {
            background: #667eea;
            transform: scale(0.9);
        }

        .copyright {
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            opacity: 0.7;
            font-size: 0.85rem;
        }

        /* Tablet & Desktop */
        @media (min-width: 600px) {
            .stats-container {
                grid-template-columns: repeat(4, 1fr);
            }

            .doc-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero h1 {
                font-size: 3rem;
            }

            .hero p {
                font-size: 1.3rem;
            }

            .section-title {
                font-size: 2.5rem;
            }
        }

        @media (min-width: 768px) {
            .profile-grid {
                grid-template-columns: 1fr 1fr;
                align-items: center;
            }

            .history-content {
                grid-template-columns: repeat(2, 1fr);
            }

            .vm-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .doc-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .footer-grid {
                grid-template-columns: repeat(3, 1fr);
                text-align: left;
            }

            .profile-image-wrapper img {
                height: 380px;
            }

            .map-card iframe {
                height: 400px;
            }

            .doc-card {
                height: 280px;
            }

            .hero h1 {
                font-size: 3.5rem;
            }

            .hero p {
                font-size: 1.4rem;
            }

            .vm-card:hover {
                transform: translateY(-10px);
            }

            .stat-card:hover {
                transform: translateY(-10px);
                border-color: #667eea;
            }

            .doc-card:hover img {
                transform: scale(1.15);
            }

            .doc-overlay {
                transform: translateY(100%);
                transition: transform 0.3s ease;
            }

            .doc-card:hover .doc-overlay {
                transform: translateY(0);
            }

            .social-links a:hover {
                background: #667eea;
                transform: translateY(-5px) rotate(360deg);
            }
        }

        @media (max-width: 767px) {
            .nav-toggle {
                display: flex;
            }

            .nav-links {
                position: fixed;
                top: 0;
                left: -100%;
                width: 70%;
                height: 100vh;
                background: white;
                flex-direction: column;
                padding: 80px 30px 30px;
                gap: 0;
                box-shadow: 5px 0 20px rgba(0, 0, 0, 0.1);
                transition: left 0.3s ease;
                align-items: flex-start;
            }

            .nav-links.active {
                left: 0;
            }

            .nav-links li {
                width: 100%;
                border-bottom: 1px solid #f0f0f0;
            }

            .nav-links a {
                display: block;
                padding: 15px 0;
                width: 100%;
            }

            .nav-links a::after {
                display: none;
            }
        }

        /* Prevent zoom on input focus iOS */
        @media (max-width: 767px) {
            select, textarea, input {
                font-size: 16px !important;
            }
        }

        /* Smooth animations */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="progress-bar" id="progressBar"></div>
    <div class="animated-bg"></div>

    <!-- Navbar -->
    <nav id="navbar">
        <div class="nav-container">
            <div class="logo">🏝️ Sambuli</div>
            <div class="nav-toggle" id="navToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-links" id="navLinks">
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
           <a href="{{ route('home') }}" class="hero-btn">Jelajahi Potensi Sambuli</a>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="stats-container">
            <div class="stat-card fade-in">
                <div class="stat-number">347</div>
                <div class="stat-label">Hektar Luas Wilayah</div>
            </div>
            <div class="stat-card fade-in">
                <div class="stat-number">1.962</div>
                <div class="stat-label">Jumlah Penduduk</div>
            </div>
            <div class="stat-card fade-in">
                <div class="stat-number">1982</div>
                <div class="stat-label">Tahun Berdiri</div>
            </div>
            <div class="stat-card fade-in">
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
                <div class="profile-text fade-in">
                    <h3>Tentang Sambuli</h3>
                    <p>Kelurahan Sambuli adalah salah satu kelurahan yang terletak di Kecamatan Nambo, Kota Kendari, Provinsi Sulawesi Tenggara, Indonesia. Luas wilayah Kelurahan Sambuli sekitar 374 hektar. Kelurahan ini memiliki topografi yang khas dan merupakan bagian dari Kecamatan Nambo yang memiliki enam kelurahan dengan berbagai potensi dan fasilitas publik yang memadai. Kelurahan Sambuli juga dikenal memiliki jumlah usia produktif yang cukup tinggi yakni sekitar 81,15%, serta nilai-nilai modal sosial yang kuat seperti gotong royong dan kepedulian sosial antar warga masih berjalan dengan baik..</p>
                    <p>Secara administratif, Kecamatan Nambo memiliki 6 kelurahan dan terbagi dalam beberapa RW dan RT, di mana Kelurahan Sambuli memiliki 2 RW. Kelurahan ini juga dilengkapi dengan aparatur desa dan berbagai fasilitas seperti balai desa dan pos keamanan lingkungan. Selain itu, Kelurahan Sambuli aktif dalam berbagai program sosial, seperti Kampung Keluarga Berkualitas (Kampung KB) yang melibatkan penyuluh keluarga berencana dan berbagai kelompok kegiatan masyarakat..</p>
                </div>
                
                <div class="profile-image-wrapper fade-in">
                    <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=800" alt="Kelurahan Sambuli">
                </div>
            </div>

            <!-- History Section -->
            <div class="history-section fade-in">
                <h3> Sejarah Kelurahan Sambuli</h3>
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
    </section>

    <!-- Vision Mission Section -->
    <section class="vision-mission" id="visi-misi">
        <div class="container">
            <h2 class="section-title" style="color: #333;">Visi dan Misi</h2>
            <p class="section-subtitle" style="color: #666;">Komitmen Kami Untuk Masa Depan</p>
            
            <div class="vm-grid">
                <div class="vm-card fade-in">
                    <h3>Visi Kelurahan</h3>
                    <p>Mewujudkan Kelurahan Sambuli yang maju, sejahtera, dan lestari berbasis potensi lokal dan pemberdayaan masyarakat menuju kehidupan yang lebih baik dengan tetap menjaga kelestarian lingkungan dan nilai-nilai kearifan lokal.</p>
                </div>
                
                <div class="vm-card fade-in">
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
                <div class="doc-card fade-in">
                    <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=600" alt="Dokumentasi 1">
                    <div class="doc-overlay">
                        <p>🌅 Pemandangan Kelurahan Sambuli</p>
                    </div>
                </div>
                <div class="doc-card fade-in">
                    <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=600" alt="Dokumentasi 2">
                    <div class="doc-overlay">
                        <p>⚓ Aktivitas Nelayan Tradisional</p>
                    </div>
                </div>
                <div class="doc-card fade-in">
                    <img src="https://images.unsplash.com/photo-1505142468610-359e7d316be0?w=600" alt="Dokumentasi 3">
                    <div class="doc-overlay">
                        <p>🏖️ Keindahan Pesisir Sambuli</p>
                    </div>
                </div>
                <div class="doc-card fade-in">
                    <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=600" alt="Dokumentasi 4">
                    <div class="doc-overlay">
                        <p>⛵ Perahu Tradisional</p>
                    </div>
                </div>
                <div class="doc-card fade-in">
                    <img src="https://images.unsplash.com/photo-1540202404-d0c7fe46a087?w=600" alt="Dokumentasi 5">
                    <div class="doc-overlay">
                        <p>🌺 Kehidupan Masyarakat</p>
                    </div>
                </div>
                <div class="doc-card fade-in">
                    <img src="https://images.unsplash.com/photo-1473496169904-658ba7c44d8a?w=600" alt="Dokumentasi 6">
                    <div class="doc-overlay">
                        <p>🌇 Sunset di Sambuli</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="map-card">
            <div class="map-header">
                📍 Lokasi Kelurahan Sambuli
            </div>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1992.4309706422698!2d122.547048!3d-3.973294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d983f1e6c3c4a6b%3A0x4f1b0b2b6213c!2sSambuli!5e0!3m2!1sid!2sid!4v1696062500000!5m2!1sid!2sid" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
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
                <a href="#" title="Facebook"></a>
                <a href="#" title="Instagram"></a>
                <a href="#" title="Twitter"></a>
                <a href="#" title="YouTube"></a>
            </div>
            
            <div class="copyright">
                <p>&copy; 2025 Kelurahan Sambuli. Semua Hak Dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // Navbar scroll and toggle
        const navbar = document.getElementById('navbar');
        const progressBar = document.getElementById('progressBar');
        const navToggle = document.getElementById('navToggle');
        const navLinks = document.getElementById('navLinks');

        // Mobile menu toggle
        navToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            navLinks.classList.toggle('active');
            navToggle.classList.toggle('active');
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!navLinks.contains(e.target) && !navToggle.contains(e.target)) {
                navLinks.classList.remove('active');
                navToggle.classList.remove('active');
            }
        });

        // Close menu when clicking a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', function() {
                navLinks.classList.remove('active');
                navToggle.classList.remove('active');
            });
        });

        // Scroll effects
        let lastScroll = 0;
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            // Navbar scroll effect
            if (currentScroll > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

            // Progress bar
            const scrollTotal = document.documentElement.scrollHeight - window.innerHeight;
            const scrollProgress = (currentScroll / scrollTotal) * 100;
            progressBar.style.width = scrollProgress + '%';

            lastScroll = currentScroll;
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 60;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Intersection Observer for fade-in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all fade-in elements
        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Active nav link on scroll
        const sections = document.querySelectorAll('section[id]');
        const navLinksItems = document.querySelectorAll('.nav-links a');

        window.addEventListener('scroll', function() {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            navLinksItems.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });

        // Prevent body scroll when mobile menu is open
        navToggle.addEventListener('click', function() {
            if (navLinks.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });

        // Restore scroll when menu closes
        document.addEventListener('click', function(e) {
            if (!navLinks.contains(e.target) && !navToggle.contains(e.target)) {
                document.body.style.overflow = '';
            }
        });

        // Performance optimization - debounce scroll
        let scrollTimeout;
        window.addEventListener('scroll', function() {
            if (scrollTimeout) {
                window.cancelAnimationFrame(scrollTimeout);
            }
            scrollTimeout = window.requestAnimationFrame(function() {
                // Scroll handling code here
            });
        }, { passive: true });

        // Touch handling for better mobile experience
        let touchStartX = 0;
        let touchEndX = 0;

        navLinks.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        navLinks.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, { passive: true });

        function handleSwipe() {
            if (touchStartX - touchEndX > 50) {
                // Swipe left - close menu
                navLinks.classList.remove('active');
                navToggle.classList.remove('active');
                document.body.style.overflow = '';
            }
        }

        // Prevent zoom on double tap
        let lastTouchEnd = 0;
        document.addEventListener('touchend', function(e) {
            const now = Date.now();
            if (now - lastTouchEnd <= 300) {
                e.preventDefault();
            }
            lastTouchEnd = now;
        }, false);

        // Image lazy loading fallback
        if ('loading' in HTMLImageElement.prototype) {
            const images = document.querySelectorAll('img[loading="lazy"]');
            images.forEach(img => {
                img.src = img.dataset.src || img.src;
            });
        } else {
            // Fallback for browsers that don't support lazy loading
            const script = document.createElement('script');
            script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js';
            document.body.appendChild(script);
        }
    </script>
</body>
</html>