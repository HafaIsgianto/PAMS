<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'AuthController::login');

$routes->get('/dashboard-admin', 'Home::adminDashboard', ['filter' => 'auth:owner']);


$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register', ['filter' => 'auth:owner']);
$routes->post('/save', 'AuthController::save');
$routes->post('/cek', 'AuthController::auth');

$routes->get('/auth', 'AuthController::auth');
$routes->get('/logout', 'AuthController::logout');


$routes->get('/profil', 'Home::profil', ['filter' => 'auth:owner']);

//donatur
$routes->get('donatur/index', 'DonaturController::index', ['filter' => 'auth:owner']);

$routes->get('/donatur/tambah', 'DonaturController::create', ['filter' => 'auth:owner']);
$routes->post('/donatur/tambah', 'DonaturController::store', ['filter' => 'auth:owner']);

$routes->get('donatur/hapus/', 'DonaturController::hapus', ['filter' => 'auth:owner']);
$routes->get('donatur/hapus/(:num)', 'DonaturController::hapus/$1', ['filter' => 'auth:owner']);


$routes->get('/donatur/edit/(:num)', 'DonaturController::edit/$1', ['filter' => 'auth:owner']);
$routes->post('/donatur/update/(:num)', 'DonaturController::update/$1', ['filter' => 'auth:owner']);




//donasi
$routes->get('/donasi_uang', 'DonasiController::donasiuang', ['filter' => 'auth:owner']);
$routes->get('/donasi_barang', 'DonasiController::donasibarang', ['filter' => 'auth:owner']);

$routes->get('/donasi/formDonasiUang/(:num)', 'DonasiController::formDonasiUang/$1', ['filter' => 'auth:owner']);
$routes->post('/donasi/saveDonasiUang', 'DonasiController::saveDonasiUang', ['filter' => 'auth:owner']);
$routes->get('/donasi/deleteDonasiUang/(:num)', 'DonasiController::deleteDonasiUang/$1', ['filter' => 'auth:owner']);

$routes->get('/donasi/formDonasiBarang/(:num)', 'DonasiController::formDonasiBarang/$1', ['filter' => 'auth:owner']);
$routes->post('/donasi/saveDonasiBarang', 'DonasiController::saveDonasiBarang', ['filter' => 'auth:owner']);
$routes->get('/donasi/deleteDonasiBarang/(:num)', 'DonasiController::deleteDonasiBarang/$1', ['filter' => 'auth:owner']);



//user
$routes->get('/users', 'UserController::index', ['filter' => 'auth:owner']);
$routes->get('/users/create', 'UserController::create', ['filter' => 'auth:owner']);
$routes->post('/users/store', 'UserController::store', ['filter' => 'auth:owner']);
$routes->get('/users/edit/(:num)', 'UserController::edit/$1', ['filter' => 'auth:owner']);
$routes->post('/users/update/(:num)', 'UserController::update/$1', ['filter' => 'auth:owner']);
$routes->post('/users/delete/(:num)', 'UserController::delete/$1', ['filter' => 'auth:owner']);


//pengeluaran
$routes->get('/pengeluaran', 'Pengeluaran::index', ['filter' => 'auth:owner']);
$routes->get('/pengeluaran/create', 'Pengeluaran::create', ['filter' => 'auth:owner']);
$routes->post('/pengeluaran/store', 'Pengeluaran::store', ['filter' => 'auth:owner']);
$routes->get('/pengeluaran/edit/(:num)', 'Pengeluaran::edit/$1', ['filter' => 'auth:owner']);
$routes->post('/pengeluaran/update/(:num)', 'Pengeluaran::update/$1', ['filter' => 'auth:owner']);
$routes->post('/pengeluaran/delete/(:num)', 'Pengeluaran::delete/$1', ['filter' => 'auth:owner']);


//penghuni
$routes->get('/penghuni', 'Penghuni::index', ['filter' => 'auth:owner']);
$routes->get('/penghuni/create', 'Penghuni::create', ['filter' => 'auth:owner']);
$routes->post('/penghuni/store', 'Penghuni::store', ['filter' => 'auth:owner']);
$routes->get('/penghuni/edit/(:num)', 'Penghuni::edit/$1', ['filter' => 'auth:owner']);
$routes->post('/penghuni/update/(:num)', 'Penghuni::update/$1', ['filter' => 'auth:owner']);
$routes->post('/penghuni/delete/(:num)', 'Penghuni::delete/$1', ['filter' => 'auth:owner']);


//laporan
$routes->get('/laporan/donatur', 'LaporanController::cetakLaporanDonatur');

$routes->get('/laporan/donasi', 'LaporanController::cetakLaporanDonasi');
$routes->get('/laporan/pengeluaran', 'LaporanController::cetakLaporanPengeluaran');
$routes->get('/laporan/Penerima', 'LaporanController::cetakLaporanPenghuni');
$routes->get('/cetak-kwitansi-barang/(:num)', 'KwitansiController::cetakKwitansiBarang/$1');
$routes->get('/cetak-kwitansi-uang/(:num)', 'KwitansiController::cetakKwitansiUang/$1');

//user

$routes->get('/dashboard-user', 'Home::userDashboard', ['filter' => 'auth:user']);
$routes->get('/home/user', 'Home::userDashboard', ['filter' => 'auth:user']);
$routes->get('/profil/user', 'Home::profiluser', ['filter' => 'auth:user']);
$routes->get('/donasi_uang/user', 'DonasiController::donasiuanguser', ['filter' => 'auth:user']);
$routes->get('/donasi_barang/user', 'DonasiController::donasibaranguser', ['filter' => 'auth:user']);
$routes->get('/donasi/formDonasiUangUser/(:num)', 'DonasiController::formDonasiUang/$1', ['filter' => 'auth:user']);
$routes->get('/donasi/formDonasiBarangUser/(:num)', 'DonasiController::formDonasiBarang/$1', ['filter' => 'auth:user']);
