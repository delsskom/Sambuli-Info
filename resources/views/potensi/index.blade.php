@extends('layout')

@section('content')
<div class="container py-5">
    <h2 class="fw-bold text-center mb-4">Potensi Kelurahan Sambuli</h2>
    <p class="text-center text-muted mb-5">
        Menampilkan potensi alam dari masing-masing RT di Kelurahan Sambuli
    </p>

    <div class="text-center mb-4">
        <a href="{{ route('potensi.create') }}" class="btn btn-primary">
            + Tambah Potensi
        </a>
    </div>

    <div class="row g-4">
        @foreach($rts as $rt)
            <div class="col-md-4">
                <a href="{{ route('potensi.show', $rt->id) }}" class="text-decoration-none text-dark">
                    <div class="card shadow-lg border-0 h-100 card-hover">
                        <img src="https://source.unsplash.com/600x400/?village,{{ $rt->id }}" 
                             class="card-img-top" alt="RT {{ $rt->id }} Potensi"
                             onerror="this.style.display='none';">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">RT {{ $rt->id }}</h5>
                            <ul class="text-muted list-unstyled">
                                @forelse($rt->potensi as $p)
                                    <li>{{ $p->nama_potensi }}</li>
                                @empty
                                    <li><em>Belum ada data potensi</em></li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
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
