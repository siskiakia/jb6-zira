@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">List Pesanan</div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <a href="{{ route('pesanans.create') }}" class="btn btn-success mb-3">Tambah Pesanan Baru</a>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Pesanan</th>
                                        <th>Nama Pembeli</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pesanans as $pesanan)
                                        <tr>
                                            <td>{{ $pesanan->nama_pesanan }}</td>
                                            <td>{{ optional($pesanan->detail)->nama_pembeli }}</td>
                                            <td>{{ optional($pesanan->detail)->tanggal_ubah }}</td>
                                            <td>
                                                <a href="{{ route('pesanans.show', $pesanan->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                                <a href="{{ route('pesanans.edit', $pesanan->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('pesanans.destroy', $pesanan->id) }}" method="POST" style="display:inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah kamu yakin menghapus Pesanan ini?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Tidak ada pesanan di list.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
