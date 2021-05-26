<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class Soal extends Model
{
    protected $table = 'soal';
    protected $primaryKey = 'id_soal';

    public function ambil_soal()
    {
        return $this->findAll();
    }

    public function input_soal($data)
    {
        # code...
        return $this->db->table('soal')->insert($data);
    }

    public function deletesoal($primaryKey){
        return $this->db->table($this->table)->delete(['id_soal' => $primaryKey]);
    }

    public function get_soal($primaryKey){
        return $this->find($primaryKey);
    }

    public function update_soal($data, $primaryKey){
        return $this->db->table($this->table)->update($data, ['id_soal' => $primaryKey]);
    }


}