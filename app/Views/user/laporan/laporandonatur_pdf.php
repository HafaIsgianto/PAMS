<!DOCTYPE html>
<html>
<head>
    <title>Laporan Donatur</title>
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
    <h2 style="text-align: center;">Laporan Donatur</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($laporandonatur as $donatur): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $donatur['Nama']; ?></td>
                    <td><?= $donatur['Alamat']; ?></td>
                    <td><?= $donatur['Telephone']; ?></td>
                    <td><?= $donatur['Email']; ?></td>
                    <td><?= $donatur['Username']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
