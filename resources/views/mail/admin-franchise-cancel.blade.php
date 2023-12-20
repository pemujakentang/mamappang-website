<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mamappang</title>
</head>

<body>
    <p>Permintaan pembukaan franchise dibatalkan</p>

    <h3>Berikut detail permintaan:</h3>
    <p>Nama: {{ $data['receiver'] }}</p>
    <p>Franchise ID: {{$data['franchise_id']}}</p>
    <p>Domisili: {{$data['domisili']}}</p>
    <p>Nama Bisnis: {{$data['nama_bisnis']}}</p>
    <p>Address: {{$data['address']}}</p>
    <p>Keterangan: {{$data['keterangan']}}</p>
</body>

</html>