<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';

    public function ambil_siswa()
    {
        return $this->findAll();
    }

    public function input_siswa($data)
    {
        # code...
        return $this->db->table('siswa')->insert($data);
    }

    public function deletesiswa($primaryKey){
        return $this->db->table($this->table)->delete(['id_siswa' => $primaryKey]);
    }

    public function updatesiswayaha($data, $primaryKey){
        return $this->db->table($this->table)->update($data, ['id_siswa' => $primaryKey]);
    }

    public function getSiswa($primaryKey){
        // return $this->db->table($this->table)->getWhere(['id_guru' => $primarykey], 1, 1);
        // return $this->find($primarykey);
        return $this->find($primaryKey);
    }

}