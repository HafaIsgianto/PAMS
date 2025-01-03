<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Donasi Uang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                                    <h3 class="text-center font-weight-light my-4">
                                        <?= isset($donasi) ? 'Edit Donasi Uang' : 'Tambah Donasi Uang'; ?>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url() ?>/donasi/saveDonasiUang" method="post">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?= isset($donasi) ? $donasi['id'] : ''; ?>">
                                        
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="id_donatur" name="id_donatur" placeholder="ID Donatur" value="<?= isset($donasi) ? $donasi['id_donatur'] : ''; ?>" required>
                                            <label for="id_donatur">ID Donatur</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" value="<?= isset($donasi) ? $donasi['jumlah'] : ''; ?>" required>
                                            <label for="jumlah">Jumlah</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal" value="<?= isset($donasi) ? $donasi['tanggal'] : ''; ?>" required>
                                            <label for="tanggal">Tanggal</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" style="height: 100px;" required><?= isset($donasi) ? $donasi['keterangan'] : ''; ?></textarea>
                                            <label for="keterangan">Keterangan</label>
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
                                        <a href="<?= base_url('donasi_uang') ?>">Kembali ke Daftar  Uang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
