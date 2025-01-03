<div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Owner</div>
                        <a class="nav-link" href="<?php echo base_url() ?>dashboard-admin">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Admin</div>
                        <a class="nav-link" href="<?= base_url()?>profil">
                            <div class="sb-nav-link-icon"><i class="fas fa-user fa-fw"></i></div>
                            My Profile
                        </a>
                        <div class="sb-sidenav-menu-heading"> Manajement</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Menu
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?=base_url()?>users">Manajement User</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            SubMenu
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?=base_url()?>penghuni">Penerima Donasi</a>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Donatur</div>
                        <a class="nav-link" href="<?= base_url()?>donatur/index">
                            <div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
                            Donatur
                        </a>
                        <div class="sb-sidenav-menu-heading">Donasi</div>
                        <a class="nav-link" href="<?=base_url()?>donasi_barang">
                            <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                            Donasi Barang
                        </a>
                        <a class="nav-link" href="<?=base_url()?>donasi_uang">
                            <div class="sb-nav-link-icon"><i class="fas fa-money-bill-wave"></i></div>
                            Donasi Tunai
                        </a>
                        <a class="nav-link" href="<?=base_url()?>pengeluaran">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Pengeluaran
                        </a>
                        <div class="sb-sidenav-menu-heading">Report</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Laporan
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?=base_url()?>/laporan/donatur">Laporan Donatur</a>
                            </nav>
                        </div>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?=base_url()?>/laporan/Penerima">Laporan Penerima Donasi</a>
                            </nav>
                        </div>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?=base_url()?>/laporan/donasi">Laporan Donasi</a>
                            </nav>
                        </div>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?=base_url()?>/laporan/pengeluaran">Laporan Pengeluaran</a>
                            </nav>
                        </div>
                    </div>
                </div>

            </nav>
        </div>