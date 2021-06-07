<?php

namespace App\Models;

use CodeIgniter\Model;

class Nilai extends Model
{
    protected $table = 'nilai';
    protected $primaryKey = 'id_siswa';
    public function ambil_nilai()
    {
        return $this->findAll();
    }

    public function input_nilai($data)
    {
        # code...
        return $this->db->table('nilai')->insert($data);
    }

    public function get_nilai($primaryKey)
    {
        # code...
        return $this->find($primaryKey);
    }
}
