<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Users</h1>
            <div class="navigation" style="position: absolute; top: 0; right: 0; margin: 10px;">
                 </div>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard-admin') ?>">Home</a></li>
                <li class="breadcrumb-item active">Users</li>
            </ol>

            <!-- Tombol Tambah Data -->
            <div class="mb-3">
                <a href="<?= base_url('users/create') ?>" class="btn btn-primary">Tambah User</a>
            </div>

            <!-- Tabel Data Users -->
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Daftar Users
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('message')) : ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
                    <?php endif; ?>
                    <table id="datatablesSimple" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($users)) : ?>
                                <?php foreach ($users as $user) : ?>
                                    <tr>
                                        <td><?= $user['id'] ?></td>
                                        <td><?= $user['username'] ?></td>
                                        <td><?= $user['email'] ?></td>
                                        <td><?= $user['no_hp'] ?></td>
                                        <td><?= $user['role'] ?></td>
                                        <td>
                                            <a href="<?= base_url('users/edit/' . $user['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="<?= base_url('users/delete/' . $user['id']) ?>" method="post" style="display:inline;">
                                                <?= csrf_field() ?>
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada data</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
