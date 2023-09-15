<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AnggotaController,
    BukuController,
    PetugasController,
    RakController,
    PeminjamanController,
    PengembalianController
};

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
})->name('dashboard');

Route::resource('/anggota', AnggotaController::class);
Route::resource('/petugas', PetugasController::class);
Route::resource('/rak', RakController::class);
// Route::get('/perpustakaan/buku', [BukuController::class, 'buku'])->name('get_buku');
// Route::get('/perpustakaan/petugas', [PetugasController::class, 'petugas'])->name('get_petugas');
// Route::get('/perpustakaan/rak', [RakController::class, 'rak'])->name('get_rak');
// Route::get('/perpustakaan/peminjaman', [PeminjamanController::class, 'peminjaman'])->name('get_peminjaman');
// Route::get('/perpustakaan/pengembalian', [PengembalianController::class, 'pengembalian'])->name('get_pengembalian');