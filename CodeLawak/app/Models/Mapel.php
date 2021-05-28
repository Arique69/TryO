<?php

namespace App\Models;

use CodeIgniter\Model;

class Mapel extends Model
{
    protected $table = 'mapel';
    protected $primarykey = 'id_mapel';

    public function ambil_mapel()
    {
        # code...
        return $this->table($this->table)->get()->getResultArray();
    }

    public function input_mapel($data)
    {
        # code...
        return $this->db->table('mapel')->insert($data);
    }

    public function delete_mapel($pk)
    {
        # code...
        return $this->db->table($this->table)->delete(['id_mapel' => $pk]);
    }

    public function update_mapel($data, $pk)
    {
        # code...
        return $this->db->table($this->table)->update($data, ['id_mapel' => $pk]);
    }
}
