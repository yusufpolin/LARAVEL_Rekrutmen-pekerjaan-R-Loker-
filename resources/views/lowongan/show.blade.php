@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Lowongan Pekerjaan</h1>
    <div class="mb-3">
        <strong>Nama Pekerjaan:</strong>
        <p>{{ $lowongan->nama_pekerjaan }}</p>
    </div>
    <div class="mb-3">
        <strong>Deskripsi:</strong>
        <p>{{ $lowongan->deskripsi }}</p>
    </div>
    <a href="{{ route('lowongan.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
