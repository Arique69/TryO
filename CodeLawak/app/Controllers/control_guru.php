<?php

namespace App\Controllers;

use App\Models\Guru;
use App\Models\Nilai;
use Config\Services;

class control_guru extends BaseController
{
    protected $guru;
    public function __construct()
    {
        $this->guru = new Guru();
    }

    public function index()
    {
        if (!session()->get('isLogin')){
            return redirect()->to(base_url('LoginController'));
        }
        $data['guru'] = $this->guru->ambil_guru();
        echo view('template/header');
        echo view('Output_guru', $data);
    }

    public function header()
    {
        return view('template/header');
    }

    public function kelolaguru()
    {
        if (!session()->get('isLogin')){
            return redirect()->to(base_url('LoginController'));
        }
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];

        echo view('template/header');
        echo view('kelolaguru', $data);
    }

    // function yang melakukan CRUD
    public function insert_guru()
    {
        //validasi input
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama harus diisi.'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'email harus diisi.'
                ]
            ],

            'nip' => [
                'rules' => 'required|is_unique[guru.NIP]',
                'errors' => [
                    'required' => 'NIP harus diisi.',
                    'is_unique' => 'NIP telah terdaftar, masukan NIP yang berbeda'
                ]
            ],

            'username' => [
                'rules' => 'required|is_unique[guru.username]',
                'errors' => [
                    'required' => 'Username harus diisi.',
                    'is_unique' => 'Username telah terdaftar, masukan Username yang berbeda'
                ]
            ],

            'password' => [
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Password harus diisi.',
                    'min_length' => 'masukan minimal 5 karakter Password'
                ]
            ],

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('control_guru/kelolaguru'))->withInput()->with('validation', $validation);
        }


        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $nip = $this->request->getPost('nip');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = [
            'email' => $email,
            'nip' => $nip,
            'username' => $username,
            'password' => $password,
            'nama_guru' => $nama,
        ];


        $this->guru->input_guru($data);
        session()->setFlashdata('pesan', 'data berhasil ditambahkan');
        return redirect()->to(base_url('control_guru'));
    }
    public function delete_guru($id)
    {
        $this->guru->deleteguru($id);
        session()->setFlashdata('pesan', 'data berhasil dihapus');
        return redirect()->to(base_url('control_guru'));
    }

    public function update_guru($id)
    {
        if (!session()->get('isLogin')){
            return redirect()->to(base_url('LoginController'));
        }
        $data['guru'] = $this->guru->getGuru($id);
        echo view('template/header');
        echo view('update_guru', $data);
    }

    public function updateguru()
    {
        $id =  $this->request->getPost('id_guru');
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $nip = $this->request->getPost('nip');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = [
            'email' => $email,
            'nip' => $nip,
            'username' => $username,
            'password' => $password,
            'nama_guru' => $nama,
        ];

        $this->guru->updateGuru($data, $id);
        session()->setFlashdata('pesan', 'data berhasil diubah');
        return redirect()->to(base_url('control_guru'));
    }

    public function lihat_nilai_siswa(){
        if (!session()->get('isLogin')){
            return redirect()->to(base_url('LoginController'));
        }
        $data['nilai'] = $this->guru->ambil_nilai();
        echo view('template/header');
        echo view('output_nilai', $data);
    }
}
