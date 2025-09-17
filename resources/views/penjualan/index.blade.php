<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penjualan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Daftar Penjualan</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal</th>
                <th>Total Harga</th>
                <th>Pelanggan</th>
                <th>Dibuat</th>
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
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
