<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tambah Penerima Donasi</title>
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
                                    <h3 class="text-center font-weight-light my-4">Tambah Data Penerima Donasi</h3>
                                </div>
                                <div class="card-body">
                                    <?php if (isset($validation)): ?>
                                        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                                    <?php endif; ?>
                                    <form action="<?= base_url('penghuni/store') ?>" method="post">
                                        <?= csrf_field() ?>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="nama" type="text" placeholder="Masukkan Nama" required />
                                            <label for="nama">Nama</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="tanggal_lahir" type="date" required />
                                            <label for="tanggalLahir">Tanggal Lahir</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select class="form-control" name="jenis_kelamin" required>
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                            <label for="jenisKelamin">Jenis Kelamin</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" style="height: 100px;" required></textarea>
                                            <label for="alamat">Alamat</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="tanggal_masuk" type="date" required />
                                            <label for="tanggalMasuk">Tanggal Masuk</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" name="keterangan" placeholder="Masukkan Keterangan (Opsional)" style="height: 100px;"></textarea>
                                            <label for="keterangan">Keterangan</label>
                                        </div>

                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary btn-block">Simpan Penerima Donasi</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small">
                                        <p><a href="<?= base_url('penghuni') ?>">Kembali ke Daftar Penerima Donasi</a></p>
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
