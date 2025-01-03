<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporandonasiModel extends Model
{
    protected $table = 'Laporandonasi'; // Nama view di database
    protected $allowedFields = ['Id', 'Nama_Donatur', 'Nama_Barang', 'Tanggal_Donasi_Barang', 'Jumlah_Donasi_Uang', 'Tanggal_Donasi_Uang', 'Total_Donasi'];
}
