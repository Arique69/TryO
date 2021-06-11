<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class Soal extends Model
{
    protected $table = 'soal';
    protected $primaryKey = 'id_soal';

    public function ambil_soal_join(){
        return $this->db->table($this->table)
            ->select('*')
            ->join('mata_pelajaran', 'soal.id_mata_pelajaran = mata_pelajaran.id_mata_pelajaran')
            ->join('paket', 'soal.id_paket = paket.id_paket')
            ->get()->getResultArray();
    }

    public function input_soal($data)
    {
        # code...
        return $this->db->table('soal')->insert($data);
    }

    public function deletesoal($primaryKey)
    {
        return $this->db->table($this->table)->delete(['id_soal' => $primaryKey]);
    }

    public function get_soal($primaryKey)
    {
        return $this->find($primaryKey);
    }

    public function update_soal($data, $primaryKey)
    {
        return $this->db->table($this->table)->update($data, ['id_soal' => $primaryKey]);
    }

    public function acq_soal($mapel, $paket)
    {
        # code...
        // return $this->db->table($this->table)->where('id_mata_pelajaran', $mapel)->where('id_paket', $paket)->get()->getResultArray();
        return $this->db->table($this->table)
            ->select('*')
            ->join('mata_pelajaran', 'soal.id_mata_pelajaran = mata_pelajaran.id_mata_pelajaran')
            ->join('paket', 'soal.id_paket = paket.id_paket')
            ->where('soal.id_paket', $paket)
            ->where('soal.id_mata_pelajaran', $mapel)
            ->get()->getResultArray();
    }

    public function acq_soal_count($mapel, $paket)
    {
        # code...
        // return $this->db->table($this->table)->where('id_mata_pelajaran', $mapel)->where('id_paket', $paket)->get()->getResultArray();
        return $this->db->table($this->table)
            ->select('*')
            ->join('mata_pelajaran', 'soal.id_mata_pelajaran = mata_pelajaran.id_mata_pelajaran')
            ->join('paket', 'soal.id_paket = paket.id_paket')
            ->where('soal.id_paket', $paket)
            ->where('soal.id_mata_pelajaran', $mapel)
            ->countAllResults();
    }
}
