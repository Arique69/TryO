<?php

namespace App\Models;

use CodeIgniter\Model;

class Nilai extends Model
{
    protected $table = 'nilai';
    protected $primaryKey = 'id_nilai';

    public function ambil_nilai()
    {
        return $this->db->table($this->table)
            ->select('*')
            ->join('siswa', 'nilai.id_siswa = siswa.id_siswa')
            ->get()->getResultArray();
    }

    public function input_nilai($data)
    {
        return $this->db->table('nilai')->insert($data);
    }

    public function get_nilai($id)
    {
        return $this->db->table($this->table)->select('*')->where('id_siswa',$id)->get()->getResultArray();
    }
}
