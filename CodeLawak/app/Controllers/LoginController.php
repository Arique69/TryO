<?php

namespace App\Controllers;

use App\Models\Admin;
use App\Models\Guru;
use App\Models\Siswa;

class LoginController extends BaseController
{
    //ini fungsi buat inisiasi object supaya tiap fungsi tidak usah menginisiasi object lagi
    public function __construct()
    {
        $this->siswa = new Siswa(); // inisisasi siswa sebagai model dari Siswa
        $this->guru = new Guru(); // inisiasi guru sebagai model dari Guru
        $this->admin = new Admin(); // inisiasi admin sebagai model dari Admin
    }

    //disini digunakan untuk mengoutput view awal kelola guru yang akan menampilkan tabel guru dan fitur crud yang telah dibuat
    public function index()
    {
        return view('Login');
    }

    public function auth()
    {
        $session = session(); // load library session
        $username = $this->request->getPost('username'); // mengambil username dari form login
        $password = $this->request->getPost('password'); // mengambil password dari form login
        $role = $this->request->getPost('role');
        if ($role == "Admin") {
            $log = $this->admin->where('username', $username)->first();
            if ($log) {
                $pass = $log['password'];
                if ($pass == $password) {
                    $session_data = [
                        'id_admin' => $log['id_admin'],
                        'username' => $log['username'],
                        'role' => 0,
                        'isLogin' => TRUE
                    ];
                    $session->set($session_data);
                    $session->setFlashdata('');
                    return redirect()->to(base_url('Home/menuAdmin'));
                } else {
                    $session->setFlashdata('msg', 'Wrong Password');
                    // menampilkan halaman login
                    return redirect()->to(base_url('pages/login'));
                }
            } else {
                $session->setFlashdata('msg', 'Wrong username');
                // menampilkan halaman login
                return redirect()->to(base_url('pages/login'));
            }
        } else if ($role == "Guru") {
            $log = $this->guru->where('username', $username)->first();
            if ($log) {
                $pass = $log['password'];
                if ($pass == $password) {
                    $session_data = [
                        'id_guru' => $log['id_guru'],
                        'username' => $log['username'],
                        'role' => 1,
                        'isLogin' => TRUE
                    ];
                    // $log = $this->update();
                    $session->set($session_data);
                    $session->setFlashdata('');
                    return redirect()->to(base_url('Home/menuGuru'));
                } else {
                    $session->setFlashdata('msg', 'Wrong Password');
                    // menampilkan halaman login
                    return redirect()->to(base_url('pages/login'));
                }
            } else {
                $session->setFlashdata('msg', 'Wrong username');
                // menampilkan halaman login
                return redirect()->to(base_url('pages/login'));
            }
        } else if ($role == "Siswa") {
            $log = $this->siswa->where('username', $username)->first();
            if ($log) {
                $pass = $log['password'];
                if ($pass == $password) {
                    $session_data = [
                        'id_siswa' => $log['id_siswa'],
                        'username' => $log['username'],
                        'password' => $log['password'],
                        'role' => 2,
                        'isLogin' => TRUE
                    ];
                    $session->set($session_data);
                    $session->setFlashdata('');
                    return redirect()->to(base_url('Home/menuSiswa'));
                } else {
                    $session->setFlashdata('msg', 'Wrong Password');
                    // menampilkan halaman login
                    return redirect()->to(base_url('pages/login'));
                }
            } else {
                $session->setFlashdata('msg', 'Wrong username');
                // menampilkan halaman login
                return redirect()->to(base_url('pages/login'));
            }
        } else {
            $session->setFlashdata('msg', 'Wrong username');
            // menampilkan halaman login
            return redirect()->to(base_url('pages/login'));
        }
    }
    //untuk mengecek view header navbarnya
    public function header()
    {
        return view('template/header');
    }

    public function logout()
    {
        $session = session(); // load library session
        $session->destroy(); // menghancurkan session
        return redirect()->to(base_url('LoginController')); // kembali ke halaman login
    }
}
