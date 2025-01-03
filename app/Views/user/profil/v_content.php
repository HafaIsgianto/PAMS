<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Profil</h1>
            
            <!-- Breadcrumb Navigation -->
            <nav aria-label="breadcrumb" style="margin-bottom: 20px;">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('home/user') ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Profil</li>
                </ol>
            </nav>
            
            <!-- Profile Card -->
            <div class="card" style="max-width: 400px; border: 1px solid #e3e6f0;">
                <div class="card-header text-center" style="background-color: #f8f9fc; border-bottom: 2px solid #4e73df;">
                    <h5 class="font-weight-bold">
                        <?= session('role') ?>
                    </h5>
                    <span class="text-muted">PAMS</span>
                </div>
                
                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <h3>Selamat Datang, <?= session('username') ?>!</h3>
                                </td>
                            </tr>
                            <tr>
                                <td>Email Anda:</td>
                                <td><?= session('email') ?></td>
                            </tr>
                            <tr>
                                <td>Role Anda:</td>
                                <td><?= session('role') ?> (Role ID: <?= session('role_id') ?>)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
