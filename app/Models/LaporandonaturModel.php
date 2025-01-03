<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporandonaturModel extends Model
{
    protected $table = 'Laporandonatur'; // Nama view di database
    protected $primaryKey = 'id'; // Ganti dengan primary key view jika ada
    protected $allowedFields = ['Nama', 'Alamat', 'Telephone', 'Email', 'Username', 'Pasword'];
}
