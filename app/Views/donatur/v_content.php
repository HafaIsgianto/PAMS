<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Donatur</h1>
            <div class="navigation" style="position: absolute; top: 0; right: 0; margin: 10px;">
                </div>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard-admin') ?>">Home</a></li>
                <li class="breadcrumb-item active">Donatur</li>
            </ol>

            <!-- Tombol Tambah Data -->
            <div class="mb-3">
                <a href="<?= base_url('donatur/tambah') ?>" class="btn btn-primary">Tambah Data</a>
            </div>

            <!-- Tabel Data Donatur -->
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Daftar Donatur
                </div>
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No. Telepon</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($donatur)) : ?>
                                <?php $no = 1;
                                foreach ($donatur as $row) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['alamat'] ?></td>
                                        <td><?= $row['no_telepon'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['created_at'] ?></td>
                                        <td>
                                            <a href="<?= base_url('donatur/edit/' . $row['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="<?= site_url('donatur/hapus/' . $row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>

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