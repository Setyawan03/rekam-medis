<?php

namespace App\Controllers\Petugas;


use App\Controllers\BaseController;
use App\Models\RekamMedisModel;
use App\Models\PasienModel;
use App\Models\PoliModel;

class Rekam_Medis extends BaseController
{
    public function __construct()
    {
        $this->rekam_medis = new RekamMedisModel();
        $this->pasien = new PasienModel();
        $this->poli = new PoliModel();
    }
    public function index()
    {
        if (session()->get('nama') !== NULL) {
            $data = ['rekammedis' => $this->rekam_medis->getRekammedis()];
            return view('rekammedis/index', $data);
        } else {
            return view('login');
        }
    }


    public function tambah()
    {
        $polis = $this->poli->findAll();
        $data = $this->request->getPost();
        if (count($data) > 0) {
            $this->rekam_medis->insert($data);
            return redirect()->to('rekammedis');
        } else {
            $data = ['pasiens' => $this->pasien->findAll()];
            $pasiens = $this->pasien->findAll();
            return view('rekammedis/tambah', compact(['data', 'polis', 'pasiens']));
        }
    }

    public function ubah($id)
    {
        $polis = $this->poli->findAll();
        $pasiens = $this->pasien->findAll();
        $data = $this->rekam_medis->getRekammedisById($id);
        return view('rekammedis/ubah', compact(['data', 'polis', 'pasiens']));
    }
    public function update($id)
    {
        $data = [
            'id' => $id,
            'pasien_id' => $this->request->getPost('pasien'),
            'poli_id' => $this->request->getPost('poli_id'),
            'tanggal' => $this->request->getPost('tanggal'),
            'keluhan' => $this->request->getPost('keluhan'),
            'diagnosa' => $this->request->getPost('diagnosa'),
            'resep' => $this->request->getPost('resep'),
            'alamat' => $this->request->getPost('alamat'),
            'nama_dokter' => $this->request->getPost('nama_dokter'),
        ];
        $this->rekam_medis->updateData($id, $data);

        return redirect()->to('rekammedis');
    }

    public function hapus($id)
    {
        $this->rekam_medis->delete($id);
        return redirect()->to('rekammedis');
    }
}
