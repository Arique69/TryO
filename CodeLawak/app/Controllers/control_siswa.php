<?php

namespace App\Controllers;

use App\Models\Siswa;
use Config\Services;

class control_siswa extends BaseController
{
    protected $siswa;
    public function __construct()
    {
        $this->siswa = new Siswa();
    }

    public function index()
    {
        $data['siswa'] = $this->siswa->ambil_siswa();
        //$data = $guru->ambil_guru();
        // dd($data);
        echo view('template/header');
        echo view('output_siswa', $data);
    }

    public function kelolasiswa()
    {
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        echo view('template/header');
        echo view('kelolasiswa', $data);
    }

    // function yang melakukan CRUD
    public function insert_siswa()
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

            'nisn' => [
                'rules' => 'required|is_unique[siswa.NISN]',
                'errors' => [
                    'required' => 'NISN harus diisi.',
                    'is_unique' => 'NISN telah terdaftar, masukan NISN yang berbeda'
                ]
            ],

            'username' => [
                'rules' => 'required|is_unique[siswa.username]',
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

            'password' => [
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Password harus diisi.',
                    'min_length' => 'masukan minimal 5 karakter Password'
                ]
            ],

            'TTL' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanngal lahir harus diisi.'
                ]
            ],




        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('control_siswa/kelolasiswa'))->withInput()->with('validation', $validation);
        }


        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $nisn = $this->request->getPost('nisn');
        $kelas = $this->request->getPost('kelas');
        $jenis_kelamin = $this->request->getPost('jenis_kelamin');
        $TTL = $this->request->getPost('TTL');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = [
            'email' => $email,
            'NISN' => $nisn,
            'kelas' => $kelas,
            'jenis_kelamin' => $jenis_kelamin,
            'TTL' => $TTL,
            'username' => $username,
            'password' => $password,
            'nama_siswa' => $nama,
            'status_login' => 0
        ];

        $this->siswa->input_siswa($data);
        session()->setFlashdata('pesan', 'data berhasil ditambahkan');
        return redirect()->to(base_url('control_siswa'));
    }

    public function delete_siswa($id)
    {
        $this->siswa->deletesiswa($id);
        session()->setFlashdata('pesan', 'data berhasil dihapus');
        return redirect()->to(base_url('control_siswa'));
    }

    public function update_siswa($id)
    {
        // $data['guru'] = $this->guru->where(['id_guru', $id]);
        // dd($data);
        $data['siswa'] = $this->siswa->getSiswa($id);
        // $data['guru'] = $this->guru->getGuru($id);
        // $data['guru'] = $this->guru->where('id_guru', $id);
        echo view('template/header');
        echo view('update_siswa', $data);
    }

    public function updatesiswa()
    {
        $id =  $this->request->getPost('id_siswa');
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $nisn = $this->request->getPost('nisn');
        $kelas = $this->request->getPost('kelas');
        $jenis_kelamin = $this->request->getPost('jenis_kelamin');
        $TTL = $this->request->getPost('TTL');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = [
            'email' => $email,
            'NISN' => $nisn,
            'kelas' => $kelas,
            'jenis_kelamin' => $jenis_kelamin,
            'TTL' => $TTL,
            'username' => $username,
            'password' => $password,
            'nama_siswa' => $nama,
            'status_login' => 0
        ];

        $this->siswa->updatesiswayaha($data, $id);
        session()->setFlashdata('pesan', 'data berhasil diubah');
        return redirect()->to(base_url('control_siswa'));
    }

    public function ubahPass()
    {
        # code...
        if (!$this->validate([
            'oldp' => [
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Password harus diisi.',
                    'min_length' => 'masukan minimal 5 karakter Password'
                ]
            ],

            'newp' => [
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Password harus diisi.',
                    'min_length' => 'masukan minimal 5 karakter Password'
                ]
            ],

            'rep' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Konfirmasi password harus diisi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
        }
        $id = $this->request->getPost('id');
        $username = $this->request->getPost('uname');
        $oldpass = $this->request->getPost('oldp');
        $newpass = $this->request->getPost('newp');
        $user_p = $this->request->getPost('user_p');
        // dd($user_p);
        if ($user_p == $oldpass) {
            $data = [
                'password' => $newpass
            ];
            $this->siswa->updatesiswayaha($data, $id);
            $session = session(); // load library session
            $session_data = [
                'id_siswa' => $id,
                'username' => $username,
                'password' => $newpass,
                'role' => 2
            ];
            $session->set($session_data);
            $session('msg', 'data berhasil diubah');
            // echo view('template/header');
            // echo view('menusiswa');
            // return redirect()->to(base_url('pages/menu_siswa'));
            return redirect()->to(base_url('pages/menu_siswa'));
        } else {
            session()->setFlashdata('pesan', 'konfirmasi password tidak sama');
            return redirect()->to(base_url('pages/menu_siswa'));
        }
    }

    public function menu_pass()
    {
        echo view('template/header');
        echo view('ganti_password');
    }
}
