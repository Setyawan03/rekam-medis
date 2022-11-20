<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DokterModel;

class Dokter extends BaseController
{
    public function __construct()
    {
        $this->dokter = new DokterModel();
    }
    public function index()
    {
        $data['dokters'] = $this->dokter->findAll();
        return view('dokter/index', $data);
    }

    public function tambah()
    {
        $data = $this->request->getPost();
        if (count($data) > 0) {
            $this->dokter->insert($data);
            return redirect()->to('dokter');
        } else {
            return view('dokter/tambah');
        }
    }

    public function ubah()
    {
        return view('dokter/ubah');
    }

    public function hapus($id = null)
    {
        $this->dokter->delete($id);
        return redirect()->to('dokter');
    }
}
