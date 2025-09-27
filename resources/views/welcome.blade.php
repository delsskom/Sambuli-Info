@extends('layout')

@section('content')
    <!-- Hero Section -->
    <div class="container text-center py-5">
        <h1 class="fw-bold mb-3">Sistem Informasi Kelurahan Sambuli</h1>
        <p class="lead text-muted mb-5">
            Digitalisasi data & potensi alam kelurahan untuk masyarakat dan pemerintah.
        </p>

        <div class="d-flex flex-wrap justify-content-center gap-3">
            @guest
                <!-- Belum login -->
                <a href="{{ route('home') }}" class="btn btn-primary btn-lg px-4">
                    Lanjutkan sebagai Pengunjung
                </a>
                <a href="{{ route('login') }}" class="btn btn-outline-dark btn-lg px-4">
                    Masuk sebagai Admin
                </a>
            @else
                @if(auth()->user()->role === 'admin')
                    <!-- Login sebagai admin -->
                    <a href="{{ route('dashboard') }}" class="btn btn-success btn-lg px-4">
                        Dashboard Admin
                    </a>
                @else
                    <!-- Login sebagai user biasa -->
                    <a href="{{ route('home') }}" class="btn btn-primary btn-lg px-4">
                        Halaman Utama
                    </a>
                @endif

                <!-- Tombol logout -->
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-lg px-4">
                        Logout
                    </button>
                </form>
            @endguest
        </div>
    </div>
@endsection
