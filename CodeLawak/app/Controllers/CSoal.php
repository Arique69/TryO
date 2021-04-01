<?php 
    class Soal
    {
        function __construct($id,$isi,$a,$b,$c,$d,$gambar,$kunjaw)
        {
            $this->id_soal = $id;
            $this->isi = $isi;
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
            $this->d = $d;
            $this->gambar = $gambar;
            $this->kunjaw = $kunjaw;
        }

        function lihatsoal(){
            $soal = new Soa1l();
            $data = $soal->ambil_soal();
            echo view('template/header');
            echo view('Output_soal', compact('data'));
        }

        function createsoal(){
            $id = $this->request->getPost('id');
            $isi = $this->request->getPost('isi');
            $a = $this->request->getPost('a');
            $b = $this->request->getPost('b');
            $c = $this->request->getPost('c');
            $d = $this->request->getPost('d');
            $gambar = $this->request->getPost('gambar');
            $kunjaw = $this->request->getPost('kunjaw');

            $data = [
                // 'id' => $id,
                'a' => $a,
                'b' => $b,
                'c' => $c,
                'd' => $d,
                'isi' => $isi,
                'gambar' => $gambar,
                'kunjaw' => $kunjaw
            ];
            $this->Guru->input_soal($data);
            return redirect()->to(base_url('/pages/Output_soal'));
        }
        function ambilsoal(){
            return 0 
        }
        function hapussoal(){
            return 0 
        }
        function updatesoal(){
            return 0 
        }
    }

namespace App\Controllers;

use App\Models\Soal;
    
class CSoal extends BaseController
{
    public function __construct()
    {
        $this->Soal = new Soal();
    }
}
?>