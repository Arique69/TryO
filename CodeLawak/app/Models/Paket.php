<?php

namespace App\Models;

use CodeIgniter\Model;

class Paket extends Model
{
    // variabel tampung tabel dari database 'soal'
    protected $table = 'Paket';

    // fungsi ini mengambil semua atribut pada database TryO pada tabel 'soal'
    public function ambil_paket()
    {
        return $this->findAll();
    }

    // fungsi ini memasukkan data dari view control soal, pada controller kelolasoal dilanjutkan ke dalam database 'soal'
    public function input_paket($data)
    {
        # code...
        return $this->db->table('paket')->insert($data);
    }
}
