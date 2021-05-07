<?php

namespace App\Controllers;
use App\Models\Guru;
use Config\Services;

class control_guru extends BaseController
{
    //tabel namanya guru
    protected $guru;

    //ini fungsi buat inisiasi object supaya tiap fungsi tidak usah menginisiasi object lagi
    public function __construct()
    {
        $this->guru = new Guru();
    }
    
    //disini digunakan untuk mengoutput view awal kelola guru yang akan menampilkan tabel guru dan fitur crud yang telah dibuat
	public function index()
	{
        $data['guru'] = $this->guru->ambil_guru();
        //$data = $guru->ambil_guru();
        echo view('template/header');
        echo view('Output_guru',$data);
	}


    //untuk mengecek view header navbarnya
    public function header(){
        return view('template/header');
    }

    #untuk menampilkan fitur kelola guru
    public function kelolaguru()
    {
        //mengambil session
        session();
        //validasi data untuk memenuhi beberapa aturan
        $data = [
            'validation' => \Config\Services::validation()
        ];
        echo view('template/header');
        echo view('kelolaguru',$data);
    }



    // function yang melakukan CRUD
    public function insert_guru()
    {
        //validasi input berupa aturan dan error messagenya
        if(!$this->validate([
            'nama' => [
                'rules' =>'required',
                'errors' =>[
                    'required' => 'nama harus diisi.'
                ]
            ],
            'email' => [
                'rules' =>'required',
                'errors' =>[
                    'required' => 'email harus diisi.'
                ]
            ],

            'nip' => [
                'rules' =>'required|is_unique[guru.NIP]',
                'errors' =>[
                    'required' => 'NIP harus diisi.',
                    'is_unique' => 'NIP telah terdaftar, masukan NIP yang berbeda'
                ]
            ],

            'username' => [
                'rules' =>'required|is_unique[guru.username]',
                'errors' =>[
                    'required' => 'Username harus diisi.',
                    'is_unique' => 'Username telah terdaftar, masukan Username yang berbeda'
                ]
            ],
            
            'password' => [
                'rules' =>'required|min_length[5]',
                'errors' =>[
                    'required' => 'Password harus diisi.',
                    'min_length' => 'masukan minimal 5 karakter Password'
                ]
            ],

            'password' => 'required|min_length[5]'
        ])){
            //mengirimkan validasi ke view
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('control_guru/kelolaguru'))->withInput()->with('validation', $validation);
        }

        //mengambil data dari view
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $nip = $this->request->getPost('nip');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        //memasukan ke array data
        $data = [
            'email' => $email,
            'nip' => $nip,
            'username' => $username,
            'password' => $password,
            'nama_guru' => $nama,
            'status_login' => 0
        ];

        //melakukan proses input data guru ke data base 
        $this->guru->input_guru($data);
        //jika ada flash data maka tampilkan
        session()->setFlashdata('pesan','data berhasil ditambahkan');
        //redirect ke view output guru
        return redirect()->to(base_url('control_guru'));
    }
    //untuk delete guru
    public function delete_guru($id){
        //ini untuk mendelelete data guru di database
        $this->guru->deleteguru($id);
        //jika ada flash data maka tampilkan
        session()->setFlashdata('pesan','data berhasil dihapus');
        //redirect ke view ouput guru
        return redirect()->to(base_url('control_guru'));
    }

    //untuk udpate guru
    public function update_guru(){
        //mengambil data dari field
        $id= $this->request->getPost('id');
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $nip = $this->request->getPost('nip');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        //memasukan ke array data
        $data = [
            'email' => $email,
            'nip' => $nip,
            'username' => $username,
            'password' => $password,
            'nama_guru' => $nama,
        ];

        //melakukan update di database berdasarkan id guru
        $this->guru->updateguru($data,$id);
        //jika ada flashdata maka tampilkan
        session()->setFlashdata('pesan','data berhasil ditambahkan');
        //redirect ke view output guru
        return redirect()->to(base_url('control_guru'));
    }

}
