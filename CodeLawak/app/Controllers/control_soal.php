<?php

namespace App\Controllers;

use App\Models\Soal;
use App\Models\Mata_pelajaran;
use App\Models\Paket;
use Config\Services;

class control_soal extends BaseController
{
    protected $soal;
    protected $mapel;
    protected $paket;

    public function __construct()
    {
        $this->soal = new Soal();
        $this->paket = new Paket();
        $this->mapel = new Mata_pelajaran();
    }

    public function index()
    {
        if (!session()->get('isLogin')){
            return redirect()->to(base_url('LoginController'));
        }
        $data['soal'] = $this->soal->ambil_soal();
        echo view('template/header');
        echo view('output_soal', $data);
    }

    public function kelolasoal()
    {
        if (!session()->get('isLogin')){
            return redirect()->to(base_url('LoginController'));
        }
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        $data['paket'] = $this->paket->ambil_paket();
        $data['mapel'] = $this->mapel->ambil_mapel();

        echo view('template/header');
        echo view('kelolasoal', $data);
    }


    // function yang melakukan CRUD
    public function insert_soal()
    {
        //validasi input
        if (!$this->validate([
            'isi_soal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'isi soal harus diisi.'
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
                    'required' => 'Opsi B harus diisi.',
                ]
            ],

            'opsi_c' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Opsi C harus diisi.',
                ]
            ],


        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('control_soal/kelolasoal'))->withInput()->with('validation', $validation);
        }


        $nama_mata_pelajaran = $this->request->getPost('nama_mata_pelajaran');
        $nama_paket = $this->request->getPost('nama_paket');
        $gambar = $this->request->getPost('gambar');
        $isi_soal = $this->request->getPost('isi_soal');
        $opsi_a = $this->request->getPost('opsi_a');
        $opsi_b = $this->request->getPost('opsi_b');
        $opsi_c = $this->request->getPost('opsi_c');
        $kunjaw = $this->request->getPost('kunjaw');

        $data = [
            'nama_mata_pelajaran' => $nama_mata_pelajaran,
            'nama_paket' => $nama_paket,
            'gambar' => $gambar,
            'isi_soal' => $isi_soal,
            'opsi_a' => $opsi_a,
            'opsi_b' => $opsi_b,
            'opsi_c' => $opsi_c,
            'kunci_jawaban' => $kunjaw
        ];

        $this->soal->input_soal($data);
        session()->setFlashdata('pesan', 'data berhasil ditambahkan');
        return redirect()->to(base_url('control_soal'));
    }

    public function delete_soal($id)
    {
        $this->soal->deletesoal($id);
        session()->setFlashdata('pesan', 'data berhasil dihapus');
        return redirect()->to(base_url('control_soal'));
    }

    public function update_soal($id)
    {
        if (!session()->get('isLogin')){
            return redirect()->to(base_url('LoginController'));
        }
        $data['soal'] = $this->soal->get_soal($id);
        $data['paket'] = $this->paket->ambil_paket();
        $data['mapel'] = $this->mapel->ambil_mapel();
        echo view('template/header');
        echo view('update_soal', $data);
    }

    public function updatesoal()
    {
        $id =  $this->request->getPost('id_soal');
        $nama_mata_pelajaran = $this->request->getPost('nama_mata_pelajaran');
        $nama_paket = $this->request->getPost('nama_paket');
        $gambar = $this->request->getPost('gambar');
        $isi_soal = $this->request->getPost('isi_soal');
        $opsi_a = $this->request->getPost('opsi_a');
        $opsi_b = $this->request->getPost('opsi_b');
        $opsi_c = $this->request->getPost('opsi_c');
        $kunjaw = $this->request->getPost('kunjaw');

        $data = [
            'nama_mata_pelajaran' => $nama_mata_pelajaran,
            'nama_paket' => $nama_paket,
            'gambar' => $gambar,
            'isi_soal' => $isi_soal,
            'opsi_a' => $opsi_a,
            'opsi_b' => $opsi_b,
            'opsi_c' => $opsi_c,
            'kunci_jawaban' => $kunjaw
        ];

        $this->soal->update_soal($data, $id);
        session()->setFlashdata('pesan', 'data berhasil diubah');
        return redirect()->to(base_url('control_soal'));
    }
}
