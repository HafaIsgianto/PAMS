<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login -  PAMS</title>
    <link href="<?= base_url() ?>template/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header text-center">
                                <h3 class="text-center font-weight-bold my-2">PAMS</h3>
                                <p class="text-muted">Panti Asuhan Manajemen Sistem</p>
                                <p class="text-center">Silahkan login!</p>
                            </div>
                            <div class="card-body">
                                <?php if (session()->getFlashdata('msg')): ?>
                                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                                <?php endif; ?>
                                <form action="<?= base_url()?>/cek" method="post">
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        <input name="username" class="form-control" id="InputForUsername" value="<?= set_value('username') ?>" placeholder="Email atau Username">
                                    </div>
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        <input type="password" name="password" class="form-control" id="InputForPassword" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Login</button>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small">
                                    <p>Belum Punya Akun? <a href="<?= base_url('/register') ?>">Daftarkan Akun</a></p>
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