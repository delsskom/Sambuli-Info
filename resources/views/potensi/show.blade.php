@extends('layout')

@section('content')
<div class="container py-5">
    <h2 class="fw-bold text-center mb-4">Detail Potensi RT {{ $rt->id }}</h2>
    <p class="text-center text-muted mb-5">
        Berikut adalah daftar potensi yang ada di RT {{ $rt->id }} Kelurahan Sambuli
    </p>

    <div class="card shadow-lg border-0 p-4">
        <div class="card-body">
            <h4 class="fw-bold">Daftar Potensi</h4>
            <ul class="list-group list-group-flush">
                @forelse($rt->potensi as $potensi)
                    <li class="list-group-item">
                        <strong>{{ $potensi->nama_potensi }}</strong>
                        <br>
                        <small class="text-muted">ID: {{ $potensi->id }}</small>
                    </li>
                @empty
                    <li class="list-group-item text-muted">
                        Belum ada potensi yang tercatat untuk RT ini.
                    </li>
                @endforelse
            </ul>
        </div>
    </div>

    <div class="mt-4 text-center">
        <a href="{{ route('potensi.index') }}" class="btn btn-outline-primary">
            ← Kembali ke Semua RT
        </a>
    </div>
</div>
@endsection
