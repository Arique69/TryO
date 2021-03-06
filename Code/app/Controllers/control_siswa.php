<?php

namespace App\Controllers;

use App\Models\Mata_pelajaran;
use App\Models\Paket;
use App\Models\Siswa;
use App\Models\Soal;
use App\Models\Nilai;

use Config\Services;

class control_siswa extends BaseController
{
    #mendeklarasikan tabel yang dipakai
    protected $soal;
    protected $mapel;
    protected $paket;
    protected $siswa;

    //contruct object
    public function __construct()
    {
        $this->siswa = new Siswa();
        $this->soal = new Soal();
        $this->paket = new Paket();
        $this->mapel = new Mata_pelajaran();
        $this->nilai = new Nilai();
    }
    
    //mengambil semua data siswa dari database
    public function index()
    {
        if (!session()->get('isLogin')) {
            return redirect()->to(base_url('LoginController'));
        }
        $data['siswa'] = $this->siswa->ambil_siswa();
        echo view('template/header');
        echo view('output_siswa', $data);
    }

    //menampilkan halaman tambah siswa
    public function kelolasiswa()
    {
        if (!session()->get('isLogin')) {
            return redirect()->to(base_url('LoginController'));
        }
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        echo view('template/header');
        echo view('kelolasiswa', $data);
    }

    //menambahkan data siswa ke dalam database
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
        ];

        $this->siswa->input_siswa($data);
        session()->setFlashdata('pesan', 'data berhasil ditambahkan');
        return redirect()->to(base_url('control_siswa'));
    }

    #menghapus data siswa di database
    public function delete_siswa($id)
    {
        $this->siswa->deletesiswa($id);
        session()->setFlashdata('pesan', 'data berhasil dihapus');
        return redirect()->to(base_url('control_siswa'));
    }

    #menampilkan halaman update siswa berdasarkan database
    public function update_siswa($id)
    {
        if (!session()->get('isLogin')) {
            return redirect()->to(base_url('LoginController'));
        }
        $data['siswa'] = $this->siswa->getSiswa($id);
        echo view('template/header');
        echo view('update_siswa', $data);
    }

    #mengupdate siswa di database
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
        ];

        $this->siswa->updateSiswa($data, $id);
        session()->setFlashdata('pesan', 'data berhasil diubah');
        return redirect()->to(base_url('control_siswa'));
    }

    #untuk mengubah password siswa
    public function ubahPass()
    {
        $id = session()->get('id_siswa');
        $username = session()->get('username');
        $oldpass = $this->request->getPost('oldp');
        $newpass = $this->request->getPost('newp');
        $user_p = $this->request->getPost('user_p');
        $confirm = $this->request->getPost('rep');
        if ($user_p == $oldpass) {
            if ($confirm == $newpass) {
                $data = [
                    'password' => $newpass
                ];
                $this->siswa->updateSiswa($data, $id);
                $session = session(); // load library session
                $session_data = [
                    'id_siswa' => $id,
                    'username' => $username,
                    'password' => $newpass,
                    'role' => 2
                ];
                $session->set($session_data);
                return redirect()->to(base_url('pages/menu_siswa'));
            } else {
                session()->setFlashdata('pesan', 'konfirmasi password tidak sama');
                return redirect()->to(base_url('control_siswa/menu_pass'));
            }
        } else {
            session()->setFlashdata('pesan', 'Password lama tidak sama');
            return redirect()->to(base_url('control_siswa/menu_pass'));
        }
    }

    #menampilkan menu ubah password
    public function menu_pass()
    {
        if (!session()->get('isLogin')) {
            return redirect()->to(base_url('LoginController'));
        }
        echo view('template/header');
        echo view('ganti_password');
    }

    #menampilkan menu pilih tryout
    public function prep_soal()
    {
        if (!session()->get('isLogin')) {
            return redirect()->to(base_url('LoginController'));
        }
        $data['paket'] = $this->paket->ambil_paket();
        $data['mapel'] = $this->mapel->ambil_mapel();
        echo view('template/header');
        echo view('prep_soal', $data);
    }

    //menampilkan soal berdasarkan paket dan mata pelajaran yang dipilih
    public function kerja_soal()
    {
        if (!session()->get('isLogin')) {
            return redirect()->to(base_url('LoginController'));
        }
        // kodingan buat ambil soal
        $p_mapel = $this->request->getPost('id_mata_pelajaran');
        $p_paket = $this->request->getPost('id_paket');
        $count = $this->soal->acq_soal_count($p_mapel, $p_paket);
        if ($count >= 5) {
            $data = [
                'soal' => $this->soal->acq_soal($p_mapel, $p_paket),
                'count' => $count
            ];
            echo view('template/header');
            echo view('kerjakan_soal', $data);
        } else {
            session()->setFlashdata('pesan', 'Paket soal sedang dalam pengerjaan silakan pilih yang lain ! ');
            return redirect()->to(base_url('control_siswa/prep_soal'));
        }
    }

    #melakukan scoring terhadap tryout yang dikerjakan
    public function scoring()
    {
        $benar = 0;
        $salah = 0;
        $totalsoal = 0;
        $nilai = 0;
        for ($i = 1; $i <= $this->request->getPost('count'); $i++) {
            $jawaban = $this->request->getPost($i);
            $kunjaw = $this->request->getPost('kunjaw' . $i);
            if ($jawaban == $kunjaw) {
                $benar += 1;
            } else {
                $salah += 1;
            }
            $totalsoal++;
        }
        $nilai = ($benar / $totalsoal) * 100;
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('d-m-Y H:i:s');
        $data = [
            'id_siswa' => session()->get('id_siswa'),
            'nilai' => $nilai,
            'tanggal_pengerjaan' => $tgl,
            'mata_pelajaran' => $this->request->getPost('mapel'),
            'paket' => $this->request->getPost('paket'),
        ];
        $this->nilai->input_nilai($data);
        $data = [
            'data' => $data,
            'benar' => $benar,
            'totalsoal' => $totalsoal,
            'salah' => $salah,
        ];
        echo view('template/header');
        echo view('rekap', $data);
    }
}
