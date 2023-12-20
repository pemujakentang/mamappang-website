<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mamappang</title>
</head>

<body>
    <p>Pengiriman sampai tujuan</p>

    <h3>Berikut detail pesanan:</h3>
    <p>Nama: {{ $data['receiver'] }}</p>
    <p>Preorder ID: {{ $data['preorder_id'] }}</p>
    <p>Alamat Tujuan: {{ $data['alamat'] }}</p>
    <p>Tanggal Kirim: {{ $data['tanggal'] }}</p>
    <p>Jumlah Pesanan: {{ $data['quantity'] }}</p>

</body>

</html>
