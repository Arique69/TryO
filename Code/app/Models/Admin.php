<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin extends Model
{
    //deklarasi variabel tabel yang dituju
    protected $table = 'admin';
    //deklarasi variabel primary key di tabel guru
    protected $primarykey = 'id_admin';

    //untuk mengambil semua data yang berada ditabel guru
    public function ambil_admin()
    {
        return $this->db->table($this->table)->get()->getResultArray();
    }
}
