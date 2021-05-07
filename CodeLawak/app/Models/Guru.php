<?php

namespace App\Models;

use CodeIgniter\Model;

class Guru extends Model
{
    //deklarasi variabel tabel yang dituju
    protected $table = 'guru';
    //deklarasi variabel primary key di tabel guru
    protected $primarykey = 'id_guru';

    //untuk mengambil semua data yang berada ditabel guru
    public function ambil_guru()
    {
        return $this->db->table($this->table)->get()->getResultArray();
    }

    //melakukan insert ke tabel guru di database
    public function input_guru($data)
    {
        # code...
        return $this->db->table('guru')->insert($data);
    }

    //melakukan delete data di guru di database
    public function deleteguru($primarykey){
        return $this->db->table($this->table)->delete(['id_guru' => $primarykey]);
    }

    //melakukan udapte data guru di tabel guru di database
    public function updateguru($data, $primarykey){
        return $this->db->table($this->table)->update($data, ['id_guru' => $primarykey]);
    }
}