<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Penerima Donasi</h1>
            <div class="navigation" style="position: absolute; top: 0; right: 0; margin: 10px;">
                </div>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard-admin') ?>">Home</a></li>
                <li class="breadcrumb-item active">Data Penerima Donasi</li>
            </ol>

            <!-- Tombol Tambah Data -->
            <div class="mb-3">
                <a href="<?= base_url('penghuni/create') ?>" class="btn btn-primary">Tambah Penerima</a>
            </div>

            <!-- Tabel Data Penghuni -->
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Daftar Penghuni
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('message')) : ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
                    <?php endif; ?>
                    <table id="datatablesSimple" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Tanggal Masuk</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($penghuni)) : ?>
                                <?php foreach ($penghuni as $row) : ?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['tanggal_lahir'] ?></td>
                                        <td><?= $row['jenis_kelamin'] === 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
                                        <td><?= $row['alamat'] ?></td>
                                        <td><?= $row['tanggal_masuk'] ?></td>
                                        <td><?= $row['keterangan'] ?></td>
                                        <td>
                                            <a href="<?= base_url('penghuni/edit/' . $row['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="<?= base_url('penghuni/delete/' . $row['id']) ?>" method="post" style="display:inline;">
                                                <?= csrf_field() ?>
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="8" class="text-center">Tidak ada data</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

