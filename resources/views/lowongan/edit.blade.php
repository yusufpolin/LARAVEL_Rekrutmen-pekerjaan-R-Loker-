@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Lowongan Pekerjaan</h1>
    <form action="{{ route('lowongan.update', $lowongan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_pekerjaan" class="form-label">Nama Pekerjaan</label>
            <input type="text" name="nama_pekerjaan" id="nama_pekerjaan" class="form-control" value="{{ $lowongan->nama_pekerjaan }}" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" required>{{ $lowongan->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('lowongan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
