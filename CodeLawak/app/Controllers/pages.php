<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index()
    {
        return view('');
    }
    public function output_guru()
    {
        echo view('template/header');
        echo view('Output_guru');
    }
    public function Input_mahasiswa()
    {
        echo view('template/header');
        echo view('input_mahasiswa');
    }
}
