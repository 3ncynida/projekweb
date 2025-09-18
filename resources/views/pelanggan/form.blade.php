@extends('layout.app')

@section('content')
<div class="main-content">
    <div class="card">
        <div class="card-header">
            <h4>{{ isset($pelanggan) ? 'Edit Pelanggan' : 'Tambah Pelanggan Baru' }}</h4>
        </div>
        <div class="card-body">
            <form action="{{ isset($pelanggan) ? route('pelanggan.update', $pelanggan->PelangganID) : route('pelanggan.store') }}" method="POST">
                @csrf
                @if(isset($pelanggan))
                    @method('PUT')
                @endif

                <div class="form-group">
                    <label for="NamaPelanggan">Nama Pelanggan</label>
                    <input type="text" class="form-control @error('NamaPelanggan') is-invalid @enderror" 
                           id="NamaPelanggan" name="NamaPelanggan" 
                           value="{{ old('NamaPelanggan', isset($pelanggan) ? $pelanggan->NamaPelanggan : '') }}" required>
                    @error('NamaPelanggan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="Alamat">Alamat</label>
                    <textarea class="form-control @error('Alamat') is-invalid @enderror" 
                              id="Alamat" name="Alamat" rows="3" required>{{ old('Alamat', isset($pelanggan) ? $pelanggan->Alamat : '') }}</textarea>
                    @error('Alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="NomorTelepon">Nomor Telepon</label>
                    <input type="text" class="form-control @error('NomorTelepon') is-invalid @enderror" 
                           id="NomorTelepon" name="NomorTelepon" 
                           value="{{ old('NomorTelepon', isset($pelanggan) ? $pelanggan->NomorTelepon : '') }}" required>
                    @error('NomorTelepon')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection