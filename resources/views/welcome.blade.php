@extends('layout')

@section('content')
    <!-- Hero Section -->
    <section class="hero d-flex align-items-center justify-content-center text-center">
        <div class="container">
            <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                Selamat Datang di <span class="highlight">Sistem Informasi Kelurahan Sambuli</span>
            </h1>
            <p class="lead mb-5 typing-text">
                Digitalisasi data & potensi alam Kelurahan Sambuli untuk masyarakat dan pemerintah.
            </p>
            <a href="{{ route('home') }}" 
               class="btn btn-lg btn-light px-5 shadow-lg animate__animated animate__fadeInUp animate__delay-2s pulse-btn">
                🌍 Lanjutkan
            </a> 
        </div>

        <!-- Wave effect -->
        <div class="custom-shape-divider-bottom-hero">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                 preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,
                         743.25,14.19c-82.26-17.33-168.06-15.88
                         -250.45,1.54-57.84,12.29-114,31.17-172,41.63
                         -82.38,14.92-168.18,13.48-250.45-1.54V120H1200V95.8
                         C1135.59,118.54,1060.91,113.63,985.66,92.83Z"
                      class="shape-fill"></path>
            </svg>
        </div>
    </section>
@endsection

@push('styles')
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
     
    <style>
        /* Hero Section */
        .hero {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        /* Background Zoom Animation */
        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: url("{{ asset('images/sambuli.png') }}") no-repeat center center / cover;
            transform: scale(1);
            animation: zoomBg 20s ease-in-out infinite alternate;
            z-index: -2;
        }

        @keyframes zoomBg {
            from { transform: scale(1); }
            to { transform: scale(1.1); }
        }

        /* Overlay hitam */
        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.4);
            z-index: -1;
        }

        .hero .container {
            position: relative;
            z-index: 1;
        }

        .hero h1,
        .hero p {
            color: #fff !important;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.8);
        }

        .hero .highlight {
            color: #ffda77;
        }

        /* Tombol berdenyut */
        .pulse-btn {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(255,255,255,0.6); }
            70% { transform: scale(1.05); box-shadow: 0 0 20px 10px rgba(255,255,255,0); }
            100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(255,255,255,0); }
        }

        /* Wave effect */
        .custom-shape-divider-bottom-hero {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            line-height: 0;
        }

        .custom-shape-divider-bottom-hero svg {
            display: block;
            width: 100%;
            height: 100px;
        }

        .custom-shape-divider-bottom-hero .shape-fill {
            fill: #ffffff;
        }

        /* Efek typing pada teks */
        .typing-text {
            display: inline-block;
            border-right: 3px solid #fff;
            white-space: nowrap;
            overflow: hidden;
            width: 0;
            animation: typing 5s steps(50, end) forwards, blink .75s step-end infinite;
        }

        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }

        @keyframes blink {
            50% { border-color: transparent }
        }
    </style>
@endpush
