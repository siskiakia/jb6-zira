@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('pesanans.update', $pesanan->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nama_pesanan">Nama Pesanan</label>
                                <input type="text" class="form-control" id="nama_pesanan" name="nama_pesanan" value="{{ $pesanan->nama_pesanan }}">
                            </div>

                            <div class="form-group">
                                <label for="nama_pembeli">Nama Pembeli</label>
                                <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" value="{{ $pesanan->detail->nama_pembeli }}">
                            </div>

                            <div class="form-group">
                                <label for="tanggal_ubah">Ubah Tanggal</label>
                                <input type="text" class="form-control" id="tanggal_ubah" name="tanggal_ubah" value="{{ $pesanan->detail->tanggal_ubah }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
