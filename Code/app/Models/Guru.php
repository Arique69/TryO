<?php

namespace App\Models;

use CodeIgniter\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $primaryKey = 'id_guru';

    public function ambil_guru()
    {
        return $this->findAll();
    }

    public function input_guru($data)
    {
        return $this->db->table('guru')->insert($data);
    }

    public function deleteguru($primaryKey){
        return $this->db->table($this->table)->delete(['id_guru' => $primaryKey]);
    }

    public function updateGuru($data, $primaryKey){
        return $this->db->table($this->table)->update($data, ['id_guru' => $primaryKey]);
    }

    public function getGuru($primaryKey){
        return $this->find($primaryKey);
    }
}
