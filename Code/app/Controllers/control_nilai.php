<?php

namespace App\Controllers;

use App\Models\Nilai;
use Config\Services;

class control_nilai extends BaseController
{   
    #mendeklarasikan tabel yang dipakai
    protected $nilai;

    #contruct object
    public function __construct()
    {
        $this->nilai = new Nilai();
    }

    #megambil semua data nilai dari database
    public function getAll(){
        if (!session()->get('isLogin')){
            return redirect()->to(base_url('LoginController'));
        }
        $data['nilai'] = $this->nilai->ambil_nilai();
        echo view('template/header');
        echo view('output_nilai', $data);
    }

    #mengambil data nilai berdasarkan id
    public function getNilai($id){
        if (!session()->get('isLogin')){
            return redirect()->to(base_url('LoginController'));
        }
        $data['nilai'] = $this->nilai->get_nilai($id);
        echo view('template/header');
        echo view('output_nilai_siswa', $data);
    }
}
