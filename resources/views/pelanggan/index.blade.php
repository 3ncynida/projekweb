<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Daftar Pelanggan</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Dibuat</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pelanggan as $p)
            <tr>
                <td>{{ $p->PelangganID }}</td>
                <td>{{ $p->NamaPelanggan }}</td>
                <td>{{ $p->Alamat }}</td>
                <td>{{ $p->NomorTelepon }}</td>
                <td>{{ $p->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
