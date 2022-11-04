<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Pasien extends BaseController
{
    public function index()
    {
        return view('pasien/index');
    }

    public function tambah()
    {
        return view('pasien/tambah');
    }

    public function ubah()
    {
        return view('pasien/ubah');
    }

    public function hapus()
    {
        return view('pasien/hapus');
    }
}
