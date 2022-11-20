<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PetugasMedisModel;
use App\Models\PoliModel;

class Petugas_Medis extends BaseController
{
    public function __construct()
    {
        $this->petugas_medis = new PetugasMedisModel();
    }
    public function index()
    {
        $data['petugas_mediss'] = $this->petugas_medis->findAll();
        return view('petugas_medis/index', $data);
    }


    public function tambah()
    {
        $data = $this->request->getPost();
        if (count($data) > 0) {
            $this->petugas_medis->insert($data);
            return redirect()->to('petugas_medis');
        } else {
            $poli = new PoliModel();
            $data['polis'] = $poli->findAll();
            return view('petugas_medis/tambah', $data);
        }
    }

    public function ubah()
    {
        return view('petugas_medis/ubah');
    }

    public function hapus($id)
    {
        $this->petugas_medis->delete($id);
        return redirect()->to('petugas_medis');
    }
}
