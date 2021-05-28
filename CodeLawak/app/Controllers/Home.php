<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// return view('');
		echo '';
	}
	public function menuAdmin()
	{
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
	public function menuGuru()
	{
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
	public function menuSiswa()
	{
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
