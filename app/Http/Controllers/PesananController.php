<?php

// app/Http/Controllers/BookController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\PesananDetail;

class PesananController extends Controller
{
    public function index()
    {
        $pesanans = Pesanan::with('detail')->get();
        return view('pesanans.index', compact('pesanans'));
    }

    public function create()
    {
        return view('pesanans.create');
    }

    public function store(Request $request)
    {
        $pesanan = pesanan::create($request->only('nama_pesanan'));
        $pesanan->detail()->create($request->only('nama_pembeli', 'tanggal_ubah'));
        return redirect()->route('pesanans.index')->with('success', 'Pesanan created successfully.');
    }

    public function show($id)
    {
        $pesanan = Pesanan::with('detail')->findOrFail($id);
        return view('pesanans.show', compact('pesanan'));
    }

    public function edit($id)
    {
        $pesanan = Pesanan::with('detail')->findOrFail($id);
        return view('pesanans.edit', compact('pesanan'));
    }

    public function update(Request $request, $id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->update($request->only('nama_pesanan'));
        $pesanan->detail()->update($request->only('nama_pembeli', 'tanggal_ubah'));
        return redirect()->route('pesanans.index')->with('success', 'Pesanan updated successfully.');
    }

    public function destroy($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->detail()->delete();
        $pesanan->delete();
        return redirect()->route('pesanans.index')->with('success', 'Pesanan deleted successfully.');
    }
}
