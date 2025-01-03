<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDonasiUang extends Model
{

    protected $table = 'donasi_uang';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_donatur', 'jumlah', 'tanggal', 'keterangan', 'created_at'];
}
