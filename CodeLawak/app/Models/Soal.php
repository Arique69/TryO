<?php

namespace App\Models;

use CodeIgniter\Model;

class Soal extends Model
{
    // variabel tampung tabel dari database 'soal'
    protected $table = 'Soal';

    // fungsi ini mengambil semua atribut pada database TryO pada tabel 'soal'
    public function ambil_soal()
    {
        return $this->findAll();
    }

    // fungsi ini memasukkan data dari view control soal, pada controller kelolasoal dilanjutkan ke dalam database 'soal'
    public function input_soal($data)
    {
        # code...
        return $this->db->table('soal')->insert($data);
    }
}
