<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Donasi Barang</h1>
            <div class="navigation" style="position: absolute; top: 0; right: 0; margin: 10px;">
                <a href="<?= base_url('home/user') ?>">Home</a> | <a href="<?= base_url('profil/user') ?>">Profil</a>
            </div>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('home/user') ?>">Home</a></li>
                <li class="breadcrumb-item active">Data Donasi Barang</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Donasi Barang
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ID Donatur</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($donasi_barang)) : ?>
                                <?php foreach ($donasi_barang as $donasi) : ?>
                                    <tr>
                                        <td><?= $donasi['id']; ?></td>
                                        <td><?= $donasi['id_donatur']; ?></td>
                                        <td><?= $donasi['nama_barang']; ?></td>
                                        <td><?= $donasi['jumlah']; ?></td>
                                        <td><?= $donasi['tanggal']; ?></td>
                                        <td><?= $donasi['keterangan']; ?></td>
                                        
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="7" class="text-center">Tidak ada data</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

