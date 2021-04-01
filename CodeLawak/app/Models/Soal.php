<?php

namespace App\Models;

use CodeIgniter\Model;

class Soal extends Model
{
    protected $table = 'Soal';
    public function ambil_soal()
    {
        return $this->findAll();
    }

    public function input_soal($data)
    {
        # code...
        return $this->db->table('soal')->insert($data);
    }
}
