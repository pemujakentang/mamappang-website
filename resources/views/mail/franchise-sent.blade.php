<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mamappang</title>
</head>

<body>
    <h3>Halo {{ $data['receiver'] }},</h3>
    <p>Permintaan pembukaan franchise sudah terkirim, silahkan menunggu balasan dari tim Mamappang untuk kelanjutannya.</p>

    <h3>Berikut detail permintaan Anda:</h3>
    <p>Franchise ID: {{$data['franchise_id']}}</p>
    <p>Domisili: {{$data['domisili']}}</p>
    <p>Nama Bisnis: {{$data['nama_bisnis']}}</p>
    <p>Address: {{$data['address']}}</p>
    <p>Keterangan: {{$data['keterangan']}}</p>


    <p>Untuk informasi lebih lanjut silahkan menghubungi kami melalui email maupun melalui nomor Whatsapp berikut ...
    </p>

    <p>Regards, </p>
    <p>Mamappang</p>
</body>

</html>