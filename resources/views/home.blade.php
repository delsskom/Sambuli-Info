@extends('layout')

@section('content')
<div class="text-center mb-5">
    <h1 class="fw-bold">Selamat Datang di Sistem Informasi Kelurahan Sambuli</h1>
    <p class="text-muted">Informasi Profil & Potensi Daerah</p>
</div>

<div class="row">
    <!-- Profil Kelurahan -->
    <div class="col-md-6 mb-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="card-title">Profil Kelurahan</h4>
                <p class="card-text">
                    Kelurahan Sambuli merupakan salah satu kelurahan yang memiliki beragam potensi
                    di bidang ekonomi, sosial, budaya, dan pariwisata.
                </p>
                <a href="{{ route('kelurahan.index') }}" class="btn btn-primary">Lihat Profil</a>
            </div>
        </div>
    </div>

    <!-- Potensi Kelurahan -->
    <div class="col-md-6 mb-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="card-title">Potensi Kelurahan</h4>
                <p class="card-text">
                    Temukan berbagai potensi unggulan seperti UMKM, wisata, budaya, dan sumber daya alam
                    yang ada di Kelurahan Sambuli.
                </p>
                <a href="{{ route('potensi.index') }}" class="btn btn-success">Lihat Potensi</a>
            </div>
        </div>
    </div>
</div>
@endsection
