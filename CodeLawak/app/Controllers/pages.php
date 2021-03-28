<?php

namespace App\Controllers;

use App\Models\Guru;

class pages extends BaseController
{
    public function __construct()
    {

        // Mendeklarasikan class ProductModel menggunakan $this->product
        $this->Guru = new Guru();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
        */
    }
    public function index()
    {
        // echo view('template/header');
        echo view('landingpage');
    }

    public function lihatnilai()
    {
        echo view('template/header');
        echo view('lihatnilai');
    }

    public function kelolaguru()
    {
        echo view('template/header');
        echo view('kelolaguru');
    }
    public function output_guru()
    {
        $guru = new Guru();
        $data = $guru->ambil_guru();
        echo view('template/header');
        echo view('Output_guru', compact('data'));
    }
    public function input_siswa()
    {
        echo view('template/header');
        echo view('input_siswa');
    }
    public function kerjakan_soal()
    {
        # code...
        echo view('template/header');
        echo view('kerjakan_soal');
    }
    public function ganti_pass()
    {
        # code...
        echo view('template/header');
        echo view('test');
    }
    public function login()
    {
        # code...
        echo view('Login');
    }
    public function insert_guru()
    {
        # code...
        $nama = $this->request->getPost('nama');
        // $id = $this->request->getPost('id');
        $email = $this->request->getPost('email');
        $nip = $this->request->getPost('nip');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = [
            // 'id' => $id,
            'email' => $email,
            'nip' => $nip,
            'username' => $username,
            'password' => $password,
            'nama_guru' => $nama
        ];
        $this->Guru->input_guru($data);
        return redirect()->to(base_url('/pages/Output_guru'));
    }
}
