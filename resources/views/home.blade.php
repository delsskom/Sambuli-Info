@extends('layout')

@section('content')
    <!-- Hero Section -->
    <div class="bg-primary text-white text-center py-5 mb-5 rounded shadow">
        <h1 class="fw-bold display-4">Sistem Informasi Kelurahan Sambuli</h1>
        <p class="lead">
            Menyajikan Profil & Potensi Daerah secara digital untuk masyarakat dan pemerintah
        </p>
        <a href="{{ route('kelurahan.index') }}" class="btn btn-light btn-lg mt-3">
            Jelajahi
        </a>
    </div>

    <!-- Cards Section -->
    <div class="row text-center">
        <!-- Profil Kelurahan -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg border-0 h-100">
                <img 
                    src="https://source.unsplash.com/600x400/?village,community" 
                    class="card-img-top" 
                    alt="Profil Kelurahan"
                    onerror="this.style.display='none';"
                >
                <div class="card-body">
                    <h4 class="card-title fw-bold">Profil Kelurahan</h4>
                    <p class="card-text text-muted">
                        Mengenal lebih dekat Kelurahan Sambuli: sejarah, visi & misi, serta struktur organisasi.
                    </p>
                    <a href="{{ route('kelurahan.index') }}" class="btn btn-primary">
                        Lihat Profil
                    </a>
                </div>
            </div>
        </div>

        <!-- Potensi Kelurahan -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg border-0 h-100">
                <img 
                    src="https://source.unsplash.com/600x400/?nature,indonesia" 
                    class="card-img-top" 
                    alt="Potensi Kelurahan"
                    onerror="this.style.display='none';"
                >
                <div class="card-body">
                    <h4 class="card-title fw-bold">Potensi Kelurahan</h4>
                    <p class="card-text text-muted">
                        Menjelajahi potensi sumber daya alam Sambuli.
                    </p>
                    <a href="{{ route('potensi.index') }}" class="btn btn-success">
                        Lihat Potensi
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Extra Info -->
    <div class="mt-5 text-center">
        <h3 class="fw-bold">Kenali Lebih Jauh Kelurahan Sambuli</h3>
        <p class="text-muted">
            Bersama kita membangun daerah dengan potensi yang luar biasa
        </p>
        <a href="{{ route('potensi.index') }}" class="btn btn-outline-primary btn-lg">
            Mulai Eksplorasi
        </a>
    </div>
@endsection
