
@extends('layout.app')

@section('content')
<div class="content-header">
    <h2>Selamat Datang</h2>
    <p>Ini adalah halaman utama dengan sidebar navigasi yang elegan dan modern. Layout ini responsif dan akan menyesuaikan dengan ukuran layar perangkat Anda.</p>
</div>

<div class="content-section">
    <h3 style="margin-bottom: 20px; font-size: 24px;">Tabel Contoh</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle" style="background: rgba(255,255,255,0.7); color: #333; border-radius: 12px; overflow: hidden;">
            <thead class="table-light">
                <tr>
                    <th>Kolom 1</th>
                    <th>Kolom 2</th>
                    <th>Kolom 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Data 1</td>
                    <td>Data 2</td>
                    <td>Data 3</td>
                </tr>
                <tr>
                    <td>Data 4</td>
                    <td>Data 5</td>
                    <td>Data 6</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection