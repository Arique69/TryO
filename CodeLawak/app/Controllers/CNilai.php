<?php
class Nilai
{
    function __construct($id, $tgl, $nilai)
    {
        $this->id_nilai = $id;
        $this->tgl_pengerjaan = $tgl;
        $this->nilai = $nilai;
    }

    function lihatnilai()
    {
        $Nilai = new Nilai();
        $data = $Nilai->ambil_nilai();
        echo view('template/header');
        echo view('Output_nilai', compact('data'));
    }
}

namespace App\Controllers;

use App\Models\Nilai;

class CNilai extends BaseController
{
    public function __construct()
    {
        $this->Nilai = new Nilai();
    }
}
