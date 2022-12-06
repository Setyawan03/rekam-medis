<?php

namespace App\Controllers\Dokter;

use App\Controllers\BaseController;
use App\Models\RekamMedisModel;

class Rekam_Medis extends BaseController
{
    public function __construct()
    {
        $this->rekam_medis = new RekamMedisModel();
    }
    public function index()
    {
        $data['rekammedis'] = $this->rekam_medis->findAll();
        return view('rekammedis/index', $data);
    }


    public function tambah()
    {
        $data = $this->request->getPost();
        if (count($data) > 0) {
            $this->rekam_medis->insert($data);
            return redirect()->to('rekammedis');
        } else {
            return view('rekammedis/tambah');
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
