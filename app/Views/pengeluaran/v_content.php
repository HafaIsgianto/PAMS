<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Pengeluaran</h1>
            <div class="navigation" style="position: absolute; top: 0; right: 0; margin: 10px;">
                 </div>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard-admin') ?>">Home</a></li>
                <li class="breadcrumb-item active">Data Pengeluaran</li>
            </ol>

            <!-- Tombol Tambah Data -->
            <div class="mb-3">
                <a href="<?= base_url('pengeluaran/create') ?>" class="btn btn-primary">Tambah Data</a>
            </div>

            <!-- Tabel Data Pengeluaran -->
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Daftar Pengeluaran
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('message')) : ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
                    <?php endif; ?>
                    <table id="datatablesSimple" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ID Donasi Uang</th>
                                <th>Jenis Pengeluaran</th>
                                <th>Deskripsi</th>
                                <th>Jumlah</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($pengeluaran)) : ?>
                                <?php foreach ($pengeluaran as $row) : ?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= $row['id_donasi_uang'] ?></td>
                                        <td><?= $row['jenis_pengeluaran'] ?></td>
                                        <td><?= $row['deskripsi'] ?></td>
                                        <td><?= $row['jumlah'] ?></td>
                                        <td><?= $row['tanggal'] ?></td>
                                        <td>
                                            <a href="<?= base_url('pengeluaran/edit/' . $row['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="<?= base_url('pengeluaran/delete/' . $row['id']) ?>" method="post" style="display:inline;">
                                                <?= csrf_field() ?>
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                            </form>
                                        </td>
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

