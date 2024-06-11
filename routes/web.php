<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk menampilkan semua buku
Route::get('/pesanans', [PesananController::class, 'index'])->name('pesanans.index');

// Rute untuk menampilkan form penambahan buku
Route::get('/pesanans/create', [PesananController::class, 'create'])->name('pesanans.create');

// Rute untuk menyimpan buku baru
Route::post('/pesanans', [PesananController::class, 'store'])->name('pesanans.store');

// Rute untuk menampilkan detail buku
Route::get('/pesanans/{pesanan}', [PesananController::class, 'show'])->name('pesanans.show');

// Rute untuk menampilkan form edit buku
Route::get('/pesanans/{pesanan}/edit', [PesananController::class, 'edit'])->name('pesanans.edit');

// Rute untuk menyimpan perubahan pada buku yang diedit
Route::put('/pesanans/{pesanan}', [PesananController::class, 'update'])->name('pesanans.update');

// Rute untuk menghapus buku
Route::delete('/pesanans/{pesanan}', [PesananController::class, 'destroy'])->name('pesanans.destroy');

