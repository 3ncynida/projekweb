@extends('layout.app')

@section('card_title', 'Edit Produk')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Edit Data Produk</h3>
      </div>
      <form method="POST" action="{{ route('produk.update', $produk->ProdukID) }}">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="NamaProduk">Nama Produk</label>
            <input type="text" class="form-control" id="NamaProduk" name="NamaProduk" value="{{ $produk->NamaProduk }}" required>
          </div>
          <div class="form-group">
            <label for="Harga">Harga</label>
            <input type="number" class="form-control" id="Harga" name="Harga" min="0" value="{{ $produk->Harga }}" required>
          </div>
          <div class="form-group">
            <label for="Stok">Stok</label>
            <input type="number" class="form-control" id="Stok" name="Stok" min="0" value="{{ $produk->Stok }}" required>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-warning">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
