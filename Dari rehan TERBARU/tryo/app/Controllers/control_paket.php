<?php

namespace App\Controllers;
use App\Models\Mata_pelajaran;
use App\Models\Paket;
use Config\Services;

class control_paket extends BaseController
{
    protected $paket;
    public function __construct()
    {
        $this->paket = new Paket();
    }

    public function index()
	{
        $data['paket'] = $this->paket->ambil_paket();
        echo view('template/header');
        echo view('output_paket',$data);
	}

    public function kelola_paket()
    {
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        echo view('template/header');
        echo view('kelola_paket',$data);
    }

    // function yang melakukan CRUD
    public function insert_paket()
    {
        //validasi input
        if(!$this->validate([
            'paket' => [
                'rules' =>'required',
                'errors' =>[
                    'required' => 'paket harus diisi.'
                ]
            ],
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('control_paket/kelola_paket'))->withInput()->with('validation', $validation);
        }


        $paket = $this->request->getPost('paket');

        $data = [
            'nama_paket' => $paket,
        ];

        $this->paket->input_paket($data);
        session()->setFlashdata('pesan','data berhasil ditambahkan');
        return redirect()->to(base_url('control_paket'));
    }

    public function delete_paket($id){
        $this->paket->delete_paket($id);
        session()->setFlashdata('pesan','data berhasil dihapus');
        return redirect()->to(base_url('control_paket'));
    }

    public function update_paket($id){
        $data['paket'] = $this->paket->get_paket($id);
        echo view('template/header');
        echo view('update_paket',$data);
    }

    public function updatepaket(){
        $id =  $this->request->getPost('id_paket');
        $paket = $this->request->getPost('paket');

        $data = [
            'nama_paket' => $paket,
        ];

        $this->paket->update_paket($data,$id);
        session()->setFlashdata('pesan','data berhasil diubah');
        return redirect()->to(base_url('control_paket'));
    }
    
	
}
