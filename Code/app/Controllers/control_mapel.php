<?php

namespace App\Controllers;

use App\Models\Mata_pelajaran;
use Config\Services;

class control_mapel extends BaseController
{
    //mendeklarasikan tabel yang dipakai
    protected $mata_pelajaran;

    //construct object
    public function __construct()
    {
        $this->mata_pelajaran = new Mata_pelajaran();
    }

    #menampilkan semua data mata pelajaran dari database
    public function index()
    {
        if (!session()->get('isLogin')){
            return redirect()->to(base_url('LoginController'));
        }
        $data['mata_pelajaran'] = $this->mata_pelajaran->ambil_mapel();
        echo view('template/header'); 
        echo view('output_mapel', $data);
    }

    #menampilkan halaman tambah mata pelajaran
    public function kelola_mapel()
    {
        if (!session()->get('isLogin')){
            return redirect()->to(base_url('LoginController'));
        }
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        echo view('template/header');
        echo view('kelola_mapel', $data);
    }

    //menambahkan matapelajaran ke database
    public function insert_mapel()
    {
        //validasi input
        if (!$this->validate([
            'mata_pelajaran' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'mata pelajaran harus diisi.'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('control_mapel/kelola_mapel'))->withInput()->with('validation', $validation);
        }


        $mata_pelajaran = $this->request->getPost('mata_pelajaran');

        $data = [
            'nama_mata_pelajaran' => $mata_pelajaran,
        ];

        $this->mata_pelajaran->input_mapel($data);
        session()->setFlashdata('pesan', 'data berhasil ditambahkan');
        return redirect()->to(base_url('control_mapel'));
    }

    //menghapus matapelajaran dari database
    public function delete_mapel($id)
    {
        $this->mata_pelajaran->delete_mapel($id);
        session()->setFlashdata('pesan', 'data berhasil dihapus');
        return redirect()->to(base_url('control_mapel'));
    }

    #menampilkan halaman update matapelajaran berdasarkan id
    public function update_mapel($id)
    {
        $data['mata_pelajaran'] = $this->mata_pelajaran->get_mapel($id);
        echo view('template/header');
        echo view('update_mapel', $data);
    }

    #mengupdate matapelajaran di database
    public function updatemapel()
    {
        $id =  $this->request->getPost('id_mata_pelajaran');
        $mata_pelajaran = $this->request->getPost('mata_pelajaran');

        $data = [
            'nama_mata_pelajaran' => $mata_pelajaran,
        ];

        $this->mata_pelajaran->update_mata_pelajaran($data, $id);
        session()->setFlashdata('pesan', 'data berhasil diubah');
        return redirect()->to(base_url('control_mapel'));
    }
}
