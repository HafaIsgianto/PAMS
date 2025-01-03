<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Edit User - User PAMS</title>
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
                                    <h3 class="text-center font-weight-light my-4">Edit User</h3>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url() ?>/users/update/<?= $user['id'] ?>" method="post">
                                        <?= csrf_field() ?>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="username" name="username" type="text" value="<?= $user['username'] ?>" required />
                                            <label for="username">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="email" name="email" type="email" value="<?= $user['email'] ?>" required />
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="no_hp" name="no_hp" type="text" value="<?= $user['no_hp'] ?>" required />
                                            <label for="no_hp">No HP</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-control" id="role" name="role" required>
                                                <option value="owner" <?= $user['role'] === 'owner' ? 'selected' : '' ?>>Owner</option>
                                                <option value="user" <?= $user['role'] === 'user' ? 'selected' : '' ?>>User</option>
                                            </select>
                                            <label for="role">Role</label>
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
                                        <a href="<?= base_url('users') ?>">Kembali ke Daftar Users</a>
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
