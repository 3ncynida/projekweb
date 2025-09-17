<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Daftar Produk</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Dibuat</th>
            </tr>
        </thead>
        <tbody>
        @foreach($produk as $p)
            <tr>
                <td>{{ $p->ProdukID }}</td>
                <td>{{ $p->NamaProduk }}</td>
                <td>{{ number_format($p->Harga, 2) }}</td>
                <td>{{ $p->Stok }}</td>
                <td>{{ $p->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
