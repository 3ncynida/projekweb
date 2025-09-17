<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PelangganController;

Route::get('/pelanggan', [PelangganController::class, 'index']);

use App\Http\Controllers\PenjualanController;
Route::get('/penjualan', [PenjualanController::class, 'index']);

use App\Http\Controllers\ProdukController;
Route::get('/produk', [ProdukController::class, 'index']);

use App\Http\Controllers\DetailPenjualanController;
Route::get('/detail-penjualan', [DetailPenjualanController::class, 'index']);