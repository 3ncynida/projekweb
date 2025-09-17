<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penjualan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Detail Penjualan</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Penjualan</th>
                <th>Produk</th>
                <th>Jumlah Produk</th>
                <th>Subtotal</th>
                <th>Dibuat</th>
            </tr>
        </thead>
        <tbody>
        @foreach($detail as $d)
            <tr>
                <td>{{ $d->DetailID }}</td>
                <td>{{ $d->penjualan ? $d->penjualan->PenjualanID : '-' }}</td>
                <td>{{ $d->produk ? $d->produk->NamaProduk : '-' }}</td>
                <td>{{ $d->JumlahProduk }}</td>
                <td>{{ number_format($d->Subtotal, 2) }}</td>
                <td>{{ $d->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
