<?php
class Guru{
    function __construc($id,$uname,$pass,$email,$stat,$nama,$nip){
        $this->id_guru = $id;
        $this->username = $uname;
        $this->password = $pass;
        $this->email = $email;
        $this->status_login = $stat;
        $this->nama_guru = $nama;
        $this->nip = $nip;
    }

    function lihatdaftarguru(){
        $guru = new Guru();
        $data = $guru->ambil_guru();
        echo view('template/header');
        echo view('Output_guru', compact('data'));
    }

    function createguru(){
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

    function updateguru(){
        return 0
    }

    function deleteguru(){
        return 0
    }
    
}

namespace App\Controllers;

use App\Models\Guru;

class CGuru extends BaseController
{

    public function __construct()
    {
        $this->Guru = new Guru();
    }
    public function index()
    {
        echo view('template/header');
        echo view('kelolaguru')
    }

    public function output_guru()
    {
        $guru = new Guru();
        $data = $guru->ambil_guru();
        echo view('template/header');
        echo view('Output_guru', compact('data'));
    }

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
}
