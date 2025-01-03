<?php


namespace App\Models;

use CodeIgniter\Model;

class PengeluaranModel extends Model
{
    protected $table = 'pengeluaran';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_donasi_uang', 'jenis_pengeluaran', 'deskripsi', 'jumlah', 'tanggal', 'created_at'];
    protected $useTimestamps = false;
}
