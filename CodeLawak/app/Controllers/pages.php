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
