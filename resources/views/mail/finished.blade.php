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
    <p>Pesanan Anda sudah selesai.</p>

    <h3>Berikut detail pesanan Anda:</h3>
    <p>Preorder ID: {{$data['preorder_id']}}</p>
    <p>Alamat Tujuan: {{$data['alamat']}}</p>
    <p>Tanggal Kirim: {{$data['tanggal']}}</p>

    <h4>Kami tunggu pesanan Anda berikutnya.</h4>

    <p>Untuk informasi lebih lanjut silahkan menghubungi kami melalui email maupun melalui nomor Whatsapp berikut ...
    </p>

    <p>Regards, </p>
    <p>Mamappang</p>
</body>

</html>