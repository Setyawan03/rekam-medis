<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PoliModel;

class Poli extends BaseController
{
    public function __construct()
    {
        $this->poli = new PoliModel();
    }
    public function index()
    {
        $data['polis'] = $this->poli->findAll();
        return view('poli/index', $data);
    }


    public function tambah()
    {
        $data = $this->request->getPost();
        if (count($data) > 0) {
            $this->poli->insert($data);
            return redirect()->to('poli');
        } else {
            return view('poli/tambah');
        }
    }

    public function ubah()
    {
        # code...
    }

    public function hapus($id)
    {
        $this->poli->delete($id);
        return redirect()->to('rekam_medis');
    }
}
