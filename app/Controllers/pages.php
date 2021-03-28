<?php

namespace App\Controllers;

class pages extends BaseController
{
	public function index()
	{
		echo view('template/header');
		echo view('test');
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
	
}
