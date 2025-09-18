
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\DetailPenjualanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

// Pelanggan Routes
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
Route::get('/pelanggan/form', [PelangganController::class, 'form'])->name('pelanggan.form');
Route::post('/pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store');
Route::get('/pelanggan/{id}/edit', [PelangganController::class, 'edit'])->name('pelanggan.edit');
Route::post('/pelanggan/{id}/update', [PelangganController::class, 'update'])->name('pelanggan.update');

// Penjualan Routes
Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan.index');
Route::get('/penjualan/form', [PenjualanController::class, 'form'])->name('penjualan.form');
Route::post('/penjualan/store', [PenjualanController::class, 'store'])->name('penjualan.store');
Route::get('/penjualan/{id}/edit', [PenjualanController::class, 'edit'])->name('penjualan.edit');
Route::post('/penjualan/{id}/update', [PenjualanController::class, 'update'])->name('penjualan.update');

// Produk Routes
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/form', [ProdukController::class, 'form'])->name('produk.form');
Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/produk/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
Route::post('/produk/{id}/update', [ProdukController::class, 'update'])->name('produk.update');

// Detail Penjualan Routes
Route::get('/detail-penjualan', [DetailPenjualanController::class, 'index'])->name('detail-penjualan.index');
Route::get('/detail-penjualan/{id}/edit', [DetailPenjualanController::class, 'edit'])->name('detail-penjualan.edit');
Route::post('/detail-penjualan/{id}/update', [DetailPenjualanController::class, 'update'])->name('detail-penjualan.update');