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
    <p>Kami sudah menerima pesanan Anda, selanjutnya silahkan melakukan pembayaran paling lambat 48 jam setelah email ini dikirim.</p>
    <p>Pembayaran dapat dilakukan melalui form yang bisa diakses di mamappang.com/my-dashboard.</p>

    <h3>Berikut detail pesanan Anda:</h3>
    <p>Preorder ID: {{$data['preorder_id']}}</p>
    <p>Alamat Tujuan: {{$data['alamat']}}</p>
    <p>Tanggal Kirim: {{$data['tanggal']}}</p>
    <p>Jumlah Pesanan: {{$data['quantity']}}</p>
    <p>Ongkir: {{$data['shipping']}}</p>
    <p>Harga Pesanan: Rp. {{ number_format($data['price'], 0, ',', '.') }}</p>
    <p>Grand Total: Rp. {{ number_format($data['total_price'], 0, ',', '.') }}</p>


    <h4>Harap melakukan pembayaran sebesar Rp. {{ number_format($data['total_price'], 0, ',', '.') }} ke rekening BCA ... a/n ... paling lambat 48 jam setelah email ini diterima.</h4>

    <p>Untuk informasi lebih lanjut silahkan menghubungi kami melalui email maupun melalui nomor Whatsapp berikut ...
    </p>

    <p>Regards, </p>
    <p>Mamappang</p>
</body>

</html>