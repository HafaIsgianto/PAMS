<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDonasiBarang extends Model
{

    protected $table = 'donasi_barang';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_donatur', 'nama_barang', 'jumlah', 'tanggal', 'keterangan', 'created_at'];

}
