<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table      = 'pelanggan';
    protected $allowedFields = ['nama', 'berat', 'idPaket', 'tglMasuk', 'tglKeluar', 'status'];
}
