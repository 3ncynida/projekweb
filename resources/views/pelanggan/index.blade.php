
@extends('layout.app')

@section('content')
<div class="main-content">
    <div class="mb-3">
        <a href="{{ route('pelanggan.form') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Pelanggan
        </a>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Pelanggan</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($pelanggan as $p)
                    <tr>
                        <td>{{ $p->PelangganID }}</td>
                        <td>{{ $p->NamaPelanggan }}</td>
                        <td>{{ $p->Alamat }}</td>
                        <td>{{ $p->NomorTelepon }}</td>
                        <td>
                            <a href="{{ route('pelanggan.edit', $p->PelangganID) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
