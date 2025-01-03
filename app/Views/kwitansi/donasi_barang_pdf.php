<!DOCTYPE html>
<html>
<head>
    <title>Kwitansi Donasi Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            padding: 20px;
            border: 1px solid #000;
            width: 80%;
            margin: 0 auto;
        }
        .title {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
        .info {
            margin: 20px 0;
        }
        .info p {
            margin: 5px 0;
        }
        .signature {
            margin-top: 50px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">KWITANSI DONASI BARANG</div>
        <div class="info">
            <p><strong>Nama Barang:</strong> <?= $donasi['nama_barang']; ?></p>
            <p><strong>Jumlah:</strong> <?= $donasi['jumlah']; ?></p>
            <p><strong>Tanggal Donasi:</strong> <?= date('d-m-Y', strtotime($donasi['tanggal'])); ?></p>
            <p><strong>Keterangan:</strong> <?= $donasi['keterangan']; ?></p>
        </div>
        <div class="signature">
            <p>_______________________</p>
            <p>Admin</p>
        </div>
    </div>
</body>
</html>
