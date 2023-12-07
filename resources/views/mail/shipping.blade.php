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
    <p>Pesanan Anda sedang dalam perjalanan. Mohon menunggu</p>

    <h3>Berikut detail pesanan Anda:</h3>
    <p>Preorder ID: {{ $data['preorder_id'] }}</p>
    <p>Alamat Tujuan: {{ $data['alamat'] }}</p>
    <p>Tanggal Kirim: {{ $data['tanggal'] }}</p>
    <p>Jumlah Pesanan: {{ $data['quantity'] }}</p>

    <h3>Berikut detail kurir Anda:</h3>
    <p>Layanan: {{ $data['shippingData']['service_provider'] }}</p>
    @if ($data['shippingData']['driver'])
        <p>Driver: {{ $data['shippingData']['driver'] }}</p>
    @endif
    @if ($data['shippingData']['plat'])
        <p>Nomor Polisi: {{ $data['shippingData']['plat'] }}</p>
    @endif
    @if ($data['shippingData']['no_hp'])
        <p>Nomor HP: {{ $data['shippingData']['no_hp'] }}</p>
    @endif
    @if ($data['shippingData']['link'])
        <p>Link Lacak: {{ $data['shippingData']['link'] }}</p>
    @endif
    @if ($data['shippingData']['keterangan'])
        <p>Keterangan: {{ $data['shippingData']['keterangan'] }}</p>
    @endif

    <p>Untuk informasi lebih lanjut silahkan menghubungi kami melalui email maupun melalui nomor Whatsapp berikut ...
    </p>

    <p>Regards, </p>
    <p>Mamappang</p>
</body>

</html>
