@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Lowongan Pekerjaan</h1>
    <a href="{{ route('lowongan.create') }}" class="btn btn-primary">Tambah Lowongan</a>
    <a href="{{ route('lowongan.cetak') }}" class="btn btn-primary">Cetak Pdf</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pekerjaan</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lowongans as $lowongan)
            <tr>
                <td>{{ $lowongan->id }}</td>
                <td>{{ $lowongan->nama_pekerjaan }}</td>
                <td>{{ $lowongan->deskripsi }}</td>
                <td>
                    <a href="{{ route('lowongan.show', $lowongan->id) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('lowongan.edit', $lowongan->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('lowongan.destroy', $lowongan->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
