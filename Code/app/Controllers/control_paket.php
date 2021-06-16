<?php

namespace App\Controllers;
use App\Models\Paket;
use Config\Services;

class control_paket extends BaseController
{
    #mendeklarasikan tabel yang dipakai
    protected $paket;

    #construct object
    public function __construct()
    {
        $this->paket = new Paket();
    }

    #mengambil semua data paket dari database
    public function index()
    {
        if (!session()->get('isLogin')){
            return redirect()->to(base_url('LoginController'));
        }
        $data['paket'] = $this->paket->ambil_paket();
        echo view('template/header');
        echo view('output_paket', $data);
    }

    #menampilkan halaman tambah paket
    public function kelola_paket()
    {
        if (!session()->get('isLogin')){
            return redirect()->to(base_url('LoginController'));
        }
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        echo view('template/header');
        echo view('kelola_paket', $data);
    }

    // fmenambahkan paket ke dalama database
    public function insert_paket()
    {
        //validasi input
        if (!$this->validate([
            'paket' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'paket harus diisi.'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('control_paket/kelola_paket'))->withInput()->with('validation', $validation);
        }


        $paket = $this->request->getPost('paket');

        $data = [
            'nama_paket' => $paket,
        ];

        $this->paket->input_paket($data);
        session()->setFlashdata('pesan', 'data berhasil ditambahkan');
        return redirect()->to(base_url('control_paket'));
    }

    //menghapus paket dari database
    public function delete_paket($id)
    {
        $this->paket->delete_paket($id);
        session()->setFlashdata('pesan', 'data berhasil dihapus');
        return redirect()->to(base_url('control_paket'));
    }

    //menampilkan halaman update paket berdasarkan id
    public function update_paket($id)
    {
        if (!session()->get('isLogin')){
            return redirect()->to(base_url('LoginController'));
        }
        $data['paket'] = $this->paket->get_paket($id);
        echo view('template/header');
        echo view('update_paket', $data);
    }

    //mengupdate paket di database
    public function updatepaket()
    {
        $id =  $this->request->getPost('id_paket');
        $paket = $this->request->getPost('paket');

        $data = [
            'nama_paket' => $paket,
        ];

        $this->paket->update_paket($data, $id);
        session()->setFlashdata('pesan', 'data berhasil diubah');
        return redirect()->to(base_url('control_paket'));
    }
}
