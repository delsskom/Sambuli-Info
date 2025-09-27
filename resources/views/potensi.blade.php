@extends('layout')

@section('content')
<div class="container py-5">
    <h2 class="fw-bold text-center mb-4">Potensi Kelurahan Sambuli</h2>
    <p class="text-center text-muted mb-5">
        Menampilkan potensi alam dari masing-masing RT di Kelurahan Sambuli
    </p>

    <div class="row g-4">
        <!-- RT 1 -->
        <div class="col-md-4">
            <a href="{{ url('potensi/rt1') }}" class="text-decoration-none text-dark">
                <div class="card shadow-lg border-0 h-100 card-hover">
                    <img src="https://source.unsplash.com/600x400/?vegetables,farm" 
                         class="card-img-top" alt="RT 1 Potensi"
                         onerror="this.style.display='none';">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">RT 1</h5>
                        <p class="card-text text-muted">kandang kambing, karamba (ikan, lobster),dan sumur bor</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- RT 2 -->
        <div class="col-md-4">
            <a href="{{ url('potensi/rt2') }}" class="text-decoration-none text-dark">
                <div class="card shadow-lg border-0 h-100 card-hover">
                    <img src="https://source.unsplash.com/600x400/?fish,pond" 
                         class="card-img-top" alt="RT 2 Potensi"
                         onerror="this.style.display='none';">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">RT 2</h5>
                        <p class="card-text text-muted">Pisang,kelapa,sumur bor, sumur gali, dan air PAM</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- RT 3 -->
        <div class="col-md-4">
            <a href="{{ url('potensi/rt3') }}" class="text-decoration-none text-dark">
                <div class="card shadow-lg border-0 h-100 card-hover">
                    <img src="https://source.unsplash.com/600x400/?coconut,plantation" 
                         class="card-img-top" alt="RT 3 Potensi"
                         onerror="this.style.display='none';">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">RT 3</h5>
                        <p class="card-text text-muted">Jambu, pala, pohom jati,sumur bor,sumur gali, air dari hulu, ayam, sapi,kambing, dan kandang bebek</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- RT 4 -->
        <div class="col-md-4">
            <a href="{{ url('potensi/rt4') }}" class="text-decoration-none text-dark">
                <div class="card shadow-lg border-0 h-100 card-hover">
                    <img src="https://source.unsplash.com/600x400/?craft,batik" 
                         class="card-img-top" alt="RT 4 Potensi"
                         onerror="this.style.display='none';">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">RT 4</h5>
                        <p class="card-text text-muted"></p>
                    </div>
                </div>
            </a>
        </div>

        <!-- RT 5 -->
        <div class="col-md-4">
            <a href="{{ url('potensi/rt5') }}" class="text-decoration-none text-dark">
                <div class="card shadow-lg border-0 h-100 card-hover">
                    <img src="https://source.unsplash.com/600x400/?tourism,beach" 
                         class="card-img-top" alt="RT 5 Potensi"
                         onerror="this.style.display='none';">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">RT 5</h5>
                        <p class="card-text text-muted"></p>
                    </div>
                </div>
            </a>
        </div>

        <!-- RT 6 -->
        <div class="col-md-4">
            <a href="{{ url('potensi/rt6') }}" class="text-decoration-none text-dark">
                <div class="card shadow-lg border-0 h-100 card-hover">
                    <img src="https://source.unsplash.com/600x400/?corn,farm" 
                         class="card-img-top" alt="RT 6 Potensi"
                         onerror="this.style.display='none';">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">RT 6</h5>
                        <p class="card-text text-muted"></p>
                    </div>
                </div>
            </a>
        </div>

        <!-- RT 7 -->
        <div class="col-md-4">
            <a href="{{ url('potensi/rt7') }}" class="text-decoration-none text-dark">
                <div class="card shadow-lg border-0 h-100 card-hover">
                    <img src="https://source.unsplash.com/600x400/?culture,dance" 
                         class="card-img-top" alt="RT 7 Potensi"
                         onerror="this.style.display='none';">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">RT 7</h5>
                        <p class="card-text text-muted"></p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

{{-- Custom CSS --}}
<style>
.card-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card-hover:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 12px 24px rgba(0,0,0,0.2);
}
</style>
@endsection
