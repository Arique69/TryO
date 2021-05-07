<?php

namespace App\Models;

use CodeIgniter\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $primarykey = 'id_guru';

    public function ambil_guru()
    {
        return $this->db->table($this->table)->get()->getResultArray();
    }

    public function input_guru($data)
    {
        # code...
        return $this->db->table('guru')->insert($data);
    }

    public function deleteguru($primarykey){
        return $this->db->table($this->table)->delete(['id_guru' => $primarykey]);
    }

    public function updateguru($data, $primarykey){
        return $this->db->table($this->table)->update($data, ['id_guru' => $primarykey]);
    }
}