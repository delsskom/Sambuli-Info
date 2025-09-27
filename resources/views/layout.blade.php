<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Informasi Kelurahan Sambuli</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                Kelurahan Sambuli
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Beranda</a></li>
                    <li class="nav-item"><a href="{{ route('kelurahan.index') }}" class="nav-link">Profil Kelurahan</a></li>
                    <li class="nav-item"><a href="{{ route('potensi.index') }}" class="nav-link">Potensi</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="container">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <small>&copy; {{ date('Y') }} Sistem Informasi Kelurahan Sambuli</small>
    </footer>
</body>
</html>
