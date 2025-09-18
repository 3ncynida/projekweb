
@extends('layout.app')

@section('content')
<div class="main-content">
    <h2>Detail Penjualan</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-custom align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pelanggan</th>
                    <th>Produk</th>
                    <th>Jumlah Produk</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
            @foreach($detail as $d)
                <tr>
                    <td>{{ $d->DetailID }}</td>
                    <td>{{ $d->penjualan && $d->penjualan->pelanggan ? $d->penjualan->pelanggan->NamaPelanggan : '-' }}</td>
                    <td>{{ $d->produk ? $d->produk->NamaProduk : '-' }}</td>
                    <td>{{ $d->JumlahProduk }}</td>
                    <td>{{ number_format($d->Subtotal, decimals: 2) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
