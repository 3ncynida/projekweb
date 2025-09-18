@extends('layout.app')

@section('card_title', 'Form Penjualan')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Input Penjualan</h3>
      </div>
      <form method="POST" action="{{ route('penjualan.store') }}">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="TanggalPenjualan">Tanggal Penjualan</label>
            <input type="date" class="form-control" id="TanggalPenjualan" name="TanggalPenjualan" required>
          </div>
          <div class="form-group">
            <label for="PelangganID">Pelanggan</label>
            <select class="form-control" id="PelangganID" name="PelangganID" required>
              <option value="">Pilih Pelanggan</option>
              @foreach($pelanggan as $p)
                <option value="{{ $p->PelangganID }}">{{ $p->NamaPelanggan }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="ProdukID">Produk</label>
            <select class="form-control" id="ProdukID" name="ProdukID" required>
              <option value="">Pilih Produk</option>
              @foreach($produk as $pr)
                <option value="{{ $pr->ProdukID }}">{{ $pr->NamaProduk }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="JumlahProduk">Jumlah Produk</label>
            <input type="number" class="form-control" id="JumlahProduk" name="JumlahProduk" min="1" required>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
