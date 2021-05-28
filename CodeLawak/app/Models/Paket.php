<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class Paket extends Model
{
    protected $table = 'paket';
    protected $primaryKey = 'id_paket';

    public function ambil_paket()
    {
        return $this->findAll();
    }

    public function input_paket($data)
    {
        # code...
        return $this->db->table('paket')->insert($data);
    }

    public function delete_paket($primaryKey){
        return $this->db->table($this->table)->delete(['id_paket' => $primaryKey]);
    }

    public function get_paket($primaryKey){
        return $this->find($primaryKey);
    }

    public function update_paket($data, $primaryKey){
        return $this->db->table($this->table)->update($data, ['id_paket' => $primaryKey]);
    }
}