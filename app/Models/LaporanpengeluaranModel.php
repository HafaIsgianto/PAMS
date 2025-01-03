<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanpengeluaranModel extends Model
{
    protected $table = 'Laporanpengeluaran'; // Nama view di database
    protected $allowedFields = ['Id_Donasi_Uang', 'Jenis_Pengeluaran', 'Deskripsi', 'Jumlah', 'Tanggal_Pengeluaran'];
}
