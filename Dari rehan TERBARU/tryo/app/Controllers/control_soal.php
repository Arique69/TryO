<?php

namespace App\Controllers;
use App\Models\Soal;
use Config\Services;

class control_soal extends BaseController
{
    protected $soal;
    public function __construct()
    {
        $this->soal = new Soal();
    }

    public function index()
	{
        $data['soal'] = $this->soal->ambil_soal();
        echo view('template/header');
        echo view('output_soal',$data);
	}


    
}
