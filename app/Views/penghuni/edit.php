<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Edit Penerima Donasi - PAMS</title>
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
                                    <h3 class="text-center font-weight-light my-4">Edit Data Penerima Donasi</h3>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url('penghuni/update/' . $penghuni['id']) ?>" method="post">
                                        <?= csrf_field() ?>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="nama" name="nama" type="text" value="<?= $penghuni['nama'] ?>" placeholder="Masukkan Nama" required />
                                            <label for="nama">Nama</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="tanggal_lahir" name="tanggal_lahir" type="date" value="<?= $penghuni['tanggal_lahir'] ?>" required />
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                                <option value="L" <?= $penghuni['jenis_kelamin'] === 'L' ? 'selected' : '' ?>>Laki-laki</option>
                                                <option value="P" <?= $penghuni['jenis_kelamin'] === 'P' ? 'selected' : '' ?>>Perempuan</option>
                                            </select>
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" style="height: 100px;" required><?= $penghuni['alamat'] ?></textarea>
                                            <label for="alamat">Alamat</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="tanggal_masuk" name="tanggal_masuk" type="date" value="<?= $penghuni['tanggal_masuk'] ?>" required />
                                            <label for="tanggal_masuk">Tanggal Masuk</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan (Opsional)" style="height: 100px;"><?= $penghuni['keterangan'] ?></textarea>
                                            <label for="keterangan">Keterangan</label>
                                        </div>

                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary btn-block">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small">
                                        <a href="<?= base_url('penghuni') ?>">Kembali ke Daftar Penerima Donasi</a>
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
