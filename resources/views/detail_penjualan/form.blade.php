@extends('layout.app')

@section('content')
<div class="main-content">
    <div class="card">
        <div class="card-header">
            <h4>Edit Detail Penjualan</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('detail-penjualan.update', $detail->DetailID) }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label>Pelanggan</label>
                    <input type="text" class="form-control" value="{{ $detail->penjualan->pelanggan->NamaPelanggan }}" disabled>
                </div>

                <div class="form-group">
                    <label for="ProdukID">Produk</label>
                    <select class="form-control @error('ProdukID') is-invalid @enderror" id="ProdukID" name="ProdukID" required>
                        <option value="">Pilih Produk</option>
                        @foreach($produk as $p)
                            <option value="{{ $p->ProdukID }}" {{ (old('ProdukID', $detail->ProdukID) == $p->ProdukID) ? 'selected' : '' }}>
                                {{ $p->NamaProduk }} - Rp {{ number_format($p->Harga, 2) }}
                            </option>
                        @endforeach
                    </select>
                    @error('ProdukID')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="JumlahProduk">Jumlah Produk</label>
                    <input type="number" class="form-control @error('JumlahProduk') is-invalid @enderror" 
                           id="JumlahProduk" name="JumlahProduk" 
                           value="{{ old('JumlahProduk', $detail->JumlahProduk) }}" required min="1">
                    @error('JumlahProduk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('detail-penjualan.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection