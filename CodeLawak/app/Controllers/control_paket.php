<?php

namespace App\Controllers;

use App\Models\Paket;

class control_paket extends BaseController
{
    // variable tampung dari database
    protected $soalpaket;

    // __construct
    public function __construct()
    {
        $this->paket = new Paket();
    }

    // halaman awal pada saat kelola soal
    public function index()
    {
        $data['paket'] = $this->soal->ambil_paket();
        //$data = $guru->ambil_guru();
        echo view('template/header');
        echo view('kelolapaket', $data);
    }


    //untuk mengecek view header navbarnya
    public function header()
    {
        return view('template/header');
    }

    #untuk menampilkan fitur kelola guru
    public function kelolapaket()
    {
        //mengambil session
        session();
        //validasi data untuk memenuhi beberapa aturan
        $data = [
            'validation' => \Config\Services::validation()
        ];
        echo view('template/header');
        echo view('kelolaguru', $data);
    }

    public function insert_paket()
    {
        //validasi input berupa aturan dan error messagenya
        if (!$this->validate([
            'id_mata_pelajaran' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Mata Pelajaran harus diisi.'
                ]
            ],
            'isi_soal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isi soal harus diisi.'
                ]
            ],
            'opsi_a' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Opsi A harus diisi.'
                ]
            ],
            'opsi_b' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Opsi B harus diisi.'
                ]
            ],
            'opsi_c' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Opsi C harus diisi.'
                ]
            ],
            'opsi_d' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Opsi D harus diisi.'
                ]
            ],
            'kunci_jawaban' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kunci Jawaban harus diisi.'
                ]
            ]
        ])) {
            //mengirimkan validasi ke view
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('control_soal/kelolasoal'))->withInput()->with('validation', $validation);
        }

        //mengambil data dari view
        $isi_soal = $this->request->getPost('isi_soal');
        $opsi_a = $this->request->getPost('opsi_a');
        $opsi_b = $this->request->getPost('opsi_b');
        $opsi_c = $this->request->getPost('opsi_c');
        $opsi_d = $this->request->getPost('opsi_d');
        $kunci_jawaban = $this->request->getPost('kunci_jawaban');

        //memasukan ke array data
        $data = [
            'isi_soal' => $isi_soal,
            'opsi_a' => $opsi_a,
            'opsi_b' => $opsi_b,
            'opsi_c' => $opsi_c,
            'opsi_d' => $opsi_d,
            'kunci_jawaban' => $kunci_jawaban
        ];

        //melakukan proses input data soal baru ke database 'soal' 
        $this->soal->input_soal($data);
        //jika ada flash data maka tampilkan
        session()->setFlashdata('pesan', 'data berhasil ditambahkan');
        //redirect ke view main menu soal
        return redirect()->to(base_url('control_soal'));
    }
}
