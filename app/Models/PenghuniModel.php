<?php

namespace App\Models;

use CodeIgniter\Model;

class PenghuniModel extends Model
{
    protected $table = 'penghuni';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'tanggal_masuk',
        'keterangan',
        'created_at',
    ];
}
