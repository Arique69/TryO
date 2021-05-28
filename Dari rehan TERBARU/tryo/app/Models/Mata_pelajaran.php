<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class Mata_pelajaran extends Model
{
    protected $table = 'mata_pelajaran';
    protected $primaryKey = 'id_mata_pelajaran';

    public function ambil_mapel()
    {
        return $this->findAll();
    }

    public function input_mapel($data)
    {
        # code...
        return $this->db->table('mata_pelajaran')->insert($data);
    }

    public function delete_mapel($primaryKey){
        return $this->db->table($this->table)->delete(['id_mata_pelajaran' => $primaryKey]);
    }

    public function get_mapel($primaryKey){
        return $this->find($primaryKey);
    }

    public function update_mata_pelajaran($data, $primaryKey){
        return $this->db->table($this->table)->update($data, ['id_mata_pelajaran' => $primaryKey]);
    }
}