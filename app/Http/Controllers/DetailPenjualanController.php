<?php

namespace App\Http\Controllers;

use App\Models\DetailPenjualan;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{
    public function index()
    {
        $detail = DetailPenjualan::with(['penjualan', 'produk'])->get();
        return view('detail_penjualan.index', compact('detail'));
    }
}
