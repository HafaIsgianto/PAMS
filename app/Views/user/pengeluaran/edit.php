<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Edit Pengeluaran - PAMS</title>
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
                                    <h3 class="text-center font-weight-light my-4">Edit Data Pengeluaran</h3>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url() ?>pengeluaran/update/<?= $pengeluaran['id'] ?>" method="post">
                                        <?= csrf_field() ?>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="id_donasi_uang" name="id_donasi_uang" type="text" value="<?= $pengeluaran['id_donasi_uang'] ?>" required />
                                            <label for="id_donasi_uang">ID Donasi Uang</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-control" id="jenis_pengeluaran" name="jenis_pengeluaran" required>
                                                <option value="barang" <?= $pengeluaran['jenis_pengeluaran'] == 'barang' ? 'selected' : '' ?>>Barang</option>
                                                <option value="operasional" <?= $pengeluaran['jenis_pengeluaran'] == 'operasional' ? 'selected' : '' ?>>Operasional</option>
                                            </select>
                                            <label for="jenis_pengeluaran">Jenis Pengeluaran</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi Pengeluaran" style="height: 100px;" required><?= $pengeluaran['deskripsi'] ?></textarea>
                                            <label for="deskripsi">Deskripsi</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="jumlah" name="jumlah" type="number" value="<?= $pengeluaran['jumlah'] ?>" required />
                                            <label for="jumlah">Jumlah</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="tanggal" name="tanggal" type="date" value="<?= $pengeluaran['tanggal'] ?>" required />
                                            <label for="tanggal">Tanggal</label>
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
                                        <a href="<?= base_url('pengeluaran') ?>">Kembali ke Daftar Pengeluaran</a>
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
