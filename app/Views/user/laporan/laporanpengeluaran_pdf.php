<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pengeluaran</title>
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
    <h2 style="text-align: center;">Laporan Pengeluaran</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Donasi Uang</th>
                <th>Jenis Pengeluaran</th>
                <th>Deskripsi</th>
                <th>Jumlah</th>
                <th>Tanggal Pengeluaran</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($laporanpengeluaran as $pengeluaran): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $pengeluaran['Id_Donasi_Uang']; ?></td>
                    <td><?= $pengeluaran['Jenis_Pengeluaran']; ?></td>
                    <td><?= $pengeluaran['Deskripsi']; ?></td>
                    <td><?= number_format($pengeluaran['Jumlah'], 2, ',', '.'); ?></td>
                    <td><?= $pengeluaran['Tanggal_Pengeluaran']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
