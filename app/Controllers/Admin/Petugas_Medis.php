<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Petugas_Medis extends BaseController
{
    public function index()
    {
        return view('petugas_medis/index');
    }

    public function tambah()
    {
        return view('petugas_medis/tambah');
    }

    public function ubah()
    {
        return view('petugas_medis/ubah');
    }

    public function hapus()
    {
        return view('petugas_medis/hapus');
    }
}
