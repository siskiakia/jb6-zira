<!-- resources/views/books/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Pesanan Baru</h2>
        <form action="{{ route('pesanans.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_pesanan">Nama Pesanan</label>
                <input type="text" name="nama_pesanan" id="nama_pesanan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama pembeli">Nama Pembeli</label>
                <input type="text" name="nama_pembeli" id="nama_pembeli" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tanggal_ubah">Tanggal</label>
                <input type="number" name="tanggal_ubah" id="tanggal_ubah" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Pesanan</button>
        </form>
    </div>
@endsection
