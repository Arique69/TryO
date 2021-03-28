<?php

namespace App\Models;

use CodeIgniter\Model;

class Guru extends Model
{
    protected $table = 'guru';
    public function ambil_guru()
    {
        return $this->findAll();
    }

    public function input_guru($data)
    {
        # code...
        return $this->db->table('guru')->insert($data);
    }
}
