<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi - Sambuli</title>
    <style>
       <!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="theme-color" content="#2C1A47">
    <title>Struktur Organisasi - Sambuli</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

```
    <!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="theme-color" content="#2C1A47">
    <title>Struktur Organisasi - Sambuli</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

```
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        -webkit-tap-highlight-color: transparent;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #1E3A5F 0%, #2C1A47 100%);
        color: #333;
        line-height: 1.6;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    /* Navbar */
    nav {
        position: fixed;
        top: 0;
        width: 100%;
        background: rgba(255,255,255,0.95);
        backdrop-filter: blur(8px);
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        padding: 12px 0;
        z-index: 1000;
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
        background: linear-gradient(135deg, #1E3A5F 0%, #2C1A47 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .nav-links {
        list-style: none;
        display: flex;
        gap: 20px;
    }

    .nav-links a {
        text-decoration: none;
        color: #2C1A47;
        font-weight: 500;
        position: relative;
        transition: all 0.3s ease;
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
        background: linear-gradient(135deg, #1E3A5F 0%, #2C1A47 100%);
        transition: width 0.3s ease;
    }

    .nav-links a:hover::after,
    .nav-links a.active::after {
        width: 80%;
    }

    /* Content */
    .content {
        flex: 1;
        margin-top: 90px;
        text-align: center;
        padding: 40px 20px;
    }

    .content h1 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 30px;
        background: linear-gradient(135deg, #ffffff 0%, #FFD700 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .content img {
        width: 800px;
        max-width: 95%;
        height: auto;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        transition: transform 0.3s ease;
    }

    .content img:hover {
        transform: scale(1.02);
    }

    /* Footer */
    footer {
        background: #010111;
        color: white;
        text-align: center;
        padding: 50px 20px 20px;
        font-size: 0.10rem;
    }

    footer .copyright {
        margin-top: 20px;
        font-size: 0.8rem;
        color: #aaa;
    }

    /* Responsive */
    @media (max-width: 767px) {
        .nav-links {
            display: none;
        }
        .content h1 {
            font-size: 1.5rem;
        }
    }
</style>
```

</head>
<body>
    <nav>
        <div class="nav-container">
            <div class="logo">🏝️ Sambuli</div>
            <ul class="nav-links">
                <li><a href="{{ url('/') }}#home">Beranda</a></li>
                <li><a href="{{ url('/') }}#profil">Profil</a></li>
                <li><a href="{{ url('/') }}#visi-misi">Visi & Misi</a></li>
                <li><a href="{{ url('/') }}#dokumentasi">Dokumentasi</a></li>
                <li><a href="{{ url('/struktur_organisasi') }}" class="active">Struktur Organisasi</a></li>
            </ul>
        </div>
    </nav>

```
<div class="content">
    <h1>Struktur Organisasi Kelurahan Sambuli</h1>
    <img src="{{ asset('images/strukturorganisasi.png') }}" alt="Struktur Organisasi">
</div>

<footer>
    
    <div class="copyright">
        <p>&copy; 2025 Kelurahan Sambuli. Semua Hak Dilindungi.</p>
    </div>
</footer>
```

</body>
</html>
