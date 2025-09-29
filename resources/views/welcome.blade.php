<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Kelurahan Sambuli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    /* === Container slider horizontal === */
    .image-slider-container {
        max-width: 100%;
        overflow-x: auto;
        overflow-y: hidden;
        white-space: nowrap;
        padding: 15px 0;
        scrollbar-width: thin;
    }

    /* === Kotak gambar diperbesar === */
    .image-slider-container img {
        display: inline-block;
        width: 240px;   /* ukuran lebih besar */
        height: 150px;  
        object-fit: cover;
        margin-right: 10px;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .image-slider-container img:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }

    /* Scrollbar styling */
    .image-slider-container::-webkit-scrollbar {
        height: 6px;
    }
    .image-slider-container::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 4px;
    }
    .image-slider-container::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
</style>

</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Kelurahan Sambuli</a>
        </div>
    </nav>

    <div class="container text-center">
        <h1 class="fw-bold mb-3">Selamat Datang</h1>
        <p class="text-muted mb-4">Sistem Informasi Potensi Kelurahan Sambuli</p>

        <!-- === Slider Gambar === -->
        <div class="image-slider-container">
            <img src="{{ asset('images/sambuli1.png') }}" alt="Sambuli 1">
            <img src="{{ asset('images/sambuli2.png') }}" alt="Sambuli 2">
            <img src="{{ asset('images/sambuli3.png') }}" alt="Sambuli 3">
            <img src="{{ asset('images/sambuli4.png') }}" alt="Sambuli 4">
            <img src="{{ asset('images/sambuli5.png') }}" alt="Sambuli 5">
            <img src="{{ asset('images/sambuli6.png') }}" alt="Sambuli 6">
            <img src="{{ asset('images/sambuli7.png') }}" alt="Sambuli 7">
        </div>
        <!-- === End Slider Gambar === -->

        <!-- Tombol Lanjutkan -->
        <div class="mt-4">
            <a href="{{ route('home') }}" class="btn btn-primary btn-lg px-4">Lanjutkan</a>
        </div>
    </div>

</body>
</html>
