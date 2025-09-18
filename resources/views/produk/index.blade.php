
@extends('layout.app')

@section('content')
<div class="mb-3">
    <a href="{{ route('produk.form') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Tambah Produk
    </a>
</div>
<div class="main-content">
    <h2>Daftar Produk</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
                @foreach($produk as $pr)
                        <tr>
                                <td>{{ $pr->ProdukID }}</td>
                                <td>{{ $pr->NamaProduk }}</td>
                                <td>{{ number_format($pr->Harga, 2) }}</td>
                                <td>{{ $pr->Stok }}</td>
                                <td>
                                    <a href="{{ route('produk.edit', $pr->ProdukID) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                </td>
                        </tr>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
