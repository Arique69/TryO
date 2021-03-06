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
    //untuk menampilkan view landing page   
    public function index()
    {
        // echo view('template/header');
        echo view('landingpage');
    }
    //untuk menampilkan view lihat nilai  
    public function lihatnilai()
    {
        echo view('template/header');
        echo view('lihatnilai');
    }
    //untuk menampilkan view kelola guru   
    public function kelolaguru()
    {
        echo view('template/header');
        echo view('kelolaguru');
    }
    //untuk menampilkan view output guru
    public function output_guru()
    {
        $guru = new Guru();
        $data = $guru->ambil_guru();
        echo view('template/header');
        echo view('Output_guru', compact('data'));
    }
    //untuk menampilkan view input siswa
    public function input_siswa()
    {
        echo view('template/header');
        echo view('input_siswa');
    }
    //untuk menampilkan view kerjakan soal
    public function kerjakan_soal()
    {
        # code...
        echo view('template/header');
        echo view('kerjakansoal');
    }
    //untuk menampilkan view ganti pass
    public function ganti_pass()
    {
        # code...
        echo view('template/header');
        echo view('ganti_password');
    }
    //untuk menampilkan view login
    public function login()
    {
        # code...
        echo view('Login');
    }
    //untuk menampilkan view input guru
    public function insert_guru()
    {
        # code...
        $nama = $this->request->getPost('nama');
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
    //untuk menampilkan view page siswa
    public function menu_siswa()
    {
        echo view('template/header');
        echo view('menusiswa');
    }
    //untuk menampilkan view page admin
    public function menu_admin()
    {
        echo view('template/header');
        echo view('menuadmin');
    }
    //untuk menampilkan view page guru
    public function menu_guru()
    {
        echo view('template/header');
        echo view('menuguru');
    }
}
