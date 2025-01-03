<?php

namespace App\Models;

use CodeIgniter\Model;

class DonaturModel extends Model
{
        protected $table = 'donatur';
        protected $primaryKey = 'id';
        protected $allowedFields = ['nama', 'alamat', 'no_telepon', 'email', 'created_at'];
    
}