<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dokter extends BaseController
{
    public function index()
    {
        return view('dokter/index');
    }

    public function tambah()
    {
        return view('dokter/tambah');
    }

    public function ubah()
    {
        return view('dokter/ubah');
    }

    public function hapus()
    {
        return view('dokter/hapus');
    }
}
