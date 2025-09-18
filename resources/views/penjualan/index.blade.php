
@extends('layout.app')

@section('content')
<div class="mb-3">
    <a href="{{ route('penjualan.form') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Tambah Penjualan
    </a>
</div>
<div class="main-content">
    <h2>Daftar Penjualan</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal</th>
                <th>Total Harga</th>
                <th>Pelanggan</th>
                <th>Dibuat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
                @foreach($penjualan as $p)
                        <tr>
                                <td>{{ $p->PenjualanID }}</td>
                                <td>{{ $p->TanggalPenjualan }}</td>
                                <td>{{ number_format($p->TotalHarga, 2) }}</td>
                                <td>{{ $p->pelanggan ? $p->pelanggan->NamaPelanggan : '-' }}</td>
                                <td>{{ $p->created_at }}</td>
                                <td>
                                    <a href="{{ route('penjualan.edit', $p->PenjualanID) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                </td>
                        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
