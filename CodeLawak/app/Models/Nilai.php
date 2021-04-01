<?php

namespace App\Models;

use CodeIgniter\Model;

class Nilai extends Model
{
    protected $table = 'nilai';
    public function ambil_guru()
    {
        return $this->findAll();
    }

    public function input_nilai($data)
    {
        # code...
        return $this->db->table('nilai')->insert($data);
    }
}
