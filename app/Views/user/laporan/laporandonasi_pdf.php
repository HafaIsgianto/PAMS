<!DOCTYPE html>
<html>
<head>
    <title>Laporan Donasi</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Laporan Donasi</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Donatur</th>
                <th>Nama Donatur</th>
                <th>Nama Barang</th>
                <th>Tanggal Donasi Barang</th>
                <th>Jumlah Donasi Uang</th>
                <th>Tanggal Donasi Uang</th>
                <th>Total Donasi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($laporandonasi as $donasi): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $donasi['Id']; ?></td>
                    <td><?= $donasi['Nama_Donatur']; ?></td>
                    <td><?= $donasi['Nama_Barang']; ?></td>
                    <td><?= $donasi['Tanggal_Donasi_Barang']; ?></td>
                    <td><?= number_format($donasi['Jumlah_Donasi_Uang'], 2, ',', '.'); ?></td>
                    <td><?= $donasi['Tanggal_Donasi_Uang']; ?></td>
                    <td><?= number_format($donasi['Total_Donasi'], 2, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
