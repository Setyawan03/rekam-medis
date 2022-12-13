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
        $data['rekammedis'] = $this->rekam_medis->findAll();
        return view('rekammedis/index', $data);
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
        $data = [
            'rekammedis' => $this->rekam_medis->find($id)
        ];
        return view('rekammedis/ubah', $data);
    }
    public function update($id)
    {
        $data = [
            'id' => $id,
            'pasien_id' => $this->request->getPost('pasien_id'),
            'poli_id' => $this->request->getPost('poli_id'),
            'nama' => $this->request->getPost('nama'),
            'tanggal' => $this->request->getPost('tanggal'),
            'keluhan' => $this->request->getPost('keluhan'),
            'no_hp' => $this->request->getPost('no_hp'),
            'diagnosa' => $this->request->getPost('diagnosa'),
            'resep' => $this->request->getPost('resep'),
            'alamat' => $this->request->getPost('alamat'),
            'nama_dokter' => $this->request->getPost('nama_dokter'),
        ];
        $this->rekam_medis->save($data);
        return redirect()->to('/rekammedis');
    }

    public function hapus($id)
    {
        $this->rekam_medis->delete($id);
        return redirect()->to('rekammedis');
    }
}
