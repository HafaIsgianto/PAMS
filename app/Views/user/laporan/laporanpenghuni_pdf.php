<!DOCTYPE html>
<html>
<head>
    <title>Laporan Penghuni</title>
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
    <h2 style="text-align: center;">Laporan Penghuni</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Tanggal Masuk</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($penghuni as $row): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['tanggal_lahir'] ?? '-'; ?></td>
                    <td><?= $row['jenis_kelamin'] == 'L' ? 'Laki-Laki' : 'Perempuan'; ?></td>
                    <td><?= $row['alamat'] ?? '-'; ?></td>
                    <td><?= $row['tanggal_masuk']; ?></td>
                    <td><?= $row['keterangan'] ?? '-'; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
