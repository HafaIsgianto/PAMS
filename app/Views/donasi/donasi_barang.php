<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Donasi Barang</h1>
            <div class="navigation" style="position: absolute; top: 0; right: 0; margin: 10px;">
                </div>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard-admin') ?>">Home</a></li>
                <li class="breadcrumb-item active">Data Donasi Barang</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Donasi Barang
                </div>
                <div class="card-body">
                    <a href="<?= base_url() ?>/donasi/formDonasiBarang" class="btn btn-primary mb-3">Tambah Donasi Barang</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ID Donatur</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Actions</th>
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
                                        <td>
                                            <a href="<?= base_url() ?>donasi/formDonasiBarang/<?= $donasi['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="<?= base_url() ?>/donasi/deleteDonasiBarang/<?= $donasi['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                                        
                                            <a href="<?= base_url() ?>/cetak-kwitansi-barang/<?= $donasi['id']; ?>" class="btn btn-primary btn-sm">Cetak</a></td>
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

