<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }
    public function form()
    {
        return view('produk.form');
    }

    public function store(Request $request)
    {
        \App\Models\Produk::create([
            'NamaProduk' => $request->NamaProduk,
            'Harga' => $request->Harga,
            'Stok' => $request->Stok,
        ]);
        return redirect()->route('produk.form')->with('success', 'Produk berhasil disimpan!');
    }
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->NamaProduk = $request->NamaProduk;
        $produk->Harga = $request->Harga;
        $produk->Stok = $request->Stok;
        $produk->save();
        return redirect()->route('produk.index')->with('success', 'Produk berhasil diupdate!');
    }
}
