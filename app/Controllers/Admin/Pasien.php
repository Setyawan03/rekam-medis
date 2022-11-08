<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PasienModel;

class Pasien extends BaseController
{
    public function __construct()
    {
        $this->pasien = new PasienModel();
    }
    public function index()
    {
        $data['pasiens'] = $this->pasien->findAll();
        return view('pasien/index', $data);
    }

    public function tambah()
    {
        $data = $this->request->getPost();
        if (count($data) > 0) {
            $this->pasien->insert($data);
            return redirect()->to('pasien');
        } else {
            return view('pasien/tambah');
        }
    }

    public function ubah()
    {
        return view('pasien/ubah');
    }

    public function hapus($id = null)
    {
        $this->pasien->delete($id);
        return redirect()->to('pasien');
    }
}
