<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tambah Donatur</title>
    <link href="<?= base_url() ?>template/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Tambah Data Donatur</h3>
                                </div>
                                <?php if (session()->getFlashdata('message')): ?>
                                    <div class="alert alert-success">
                                        <?= session()->getFlashdata('message') ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (session()->getFlashdata('errors')): ?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                                <li><?= $error ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                <div class="card-body">
                                    <form action="<?= base_url('donatur/tambah') ?>" method="post">
                                        <?= csrf_field() ?>
                                        
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?= old('nama') ?>" required>
                                            <label for="nama">Nama</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat" style="height: 100px;" required><?= old('alamat') ?></textarea>
                                            <label for="alamat">Alamat</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="No. Telepon" value="<?= old('no_telepon') ?>" required>
                                            <label for="no_telepon">No. Telepon</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?= old('email') ?>" required>
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small">
                                        <a href="<?= base_url('donatur/index') ?>">Kembali ke Daftar Donatur</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>template/js/scripts.js"></script>
</body>

</html>
