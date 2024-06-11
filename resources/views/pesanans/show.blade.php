<!-- resources/views/books/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ $pesanan->title }}</h2>
        <p><strong>Nama Pembeli:</strong> {{ $pesanan->detail->nama_pembeli }}</p>
        <p><strong>Tanggal:</strong> {{ $pesanan->detail->tanggal_ubah }}</p>
        <a href="{{ route('pesanans.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
