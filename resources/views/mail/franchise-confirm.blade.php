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
    <p>Kami dari Mamappang menyambut Anda sebagai franchisee terbaru kami!</p>
    <p>Selanjutnya, tim Mamappang akan menghubungi Anda untuk membahas franchise yang Anda buat.</p>
    <p>Apabila ada pertanyaan silahkan membalas email ini maupun menghubungi kami melalui WhatsApp.</p>

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