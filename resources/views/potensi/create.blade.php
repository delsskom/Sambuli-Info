@extends('layout')

@section('content')
<div class="container py-5">
    <h2 class="fw-bold mb-4 text-center">Tambah Potensi Kelurahan</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('potensi.store') }}" method="POST" class="card shadow p-4">
        @csrf
        <div class="mb-3">
            <label for="nama_potensi" class="form-label">Nama Potensi</label>
            <input type="text" name="nama_potensi" id="nama_potensi" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="rt_id" class="form-label">Pilih RT</label>
            <select name="rt_id" id="rt_id" class="form-select" required>
                <option value="">-- Pilih RT --</option>
                @foreach ($rts as $rt)
                    <option value="{{ $rt->id }}">RT {{ $rt->id }} - {{ $rt->nama ?? 'Tidak ada nama' }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('potensi.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
