<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// return view('');
		echo '';
	}
	//untuk menampilkan menu admin sehabis login
	public function menuAdmin()
	{
		if (!session()->get('isLogin')){
            return redirect()->to(base_url('LoginController'));
        }
		echo view('template/header');
		if (session()->get('role') != 0) {
			if (session()->get('role') == 1) {
				echo view('menuguru');
			} else {
				echo view('menusiswa');
			}
		}
		echo view('menuadmin');
	}
	//untuk menampilkan menu guru sehabis login
	public function menuGuru()
	{
		if (!session()->get('isLogin')){
            return redirect()->to(base_url('LoginController'));
        }
		echo view('template/header');
		if (session()->get('role') != 1) {
			if (session()->get('role') == 0) {
				echo view('menuadmin');
			} else {
				echo view('menusiswa');
			}
		}
		echo view('menuguru');
	}
	//untuk menampilkan menu siswa sehabis login
	public function menuSiswa()
	{
		if (!session()->get('isLogin')){
            return redirect()->to(base_url('LoginController'));
        }
		echo view('template/header');
		if (session()->get('role') != 2) {
			if (session()->get('role') == 0) {
				echo view('menuadmin');
			} else {
				echo view('menuguru');
			}
		}
		echo view('menusiswa');
	}
}
