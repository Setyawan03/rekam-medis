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
        $datapasien = new \App\Models\PasienModel;

        $data['listpasien'] = $datapasien->select('id,nama_pasien')->orderBy('nama_pasien')->findAll();
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
    public function hapus($id = null)
    {
        $this->pasien->delete($id);
        return redirect()->to('pasien');
    }

    // edit
    public function ubah($id)
    {
        $data = [
            'pasiens' => $this->pasien->find($id)
        ];
        return view('pasien/ubah', $data);
    }
    public function update($id)
    {
        $data = [
            'id' => $id,
            'no_pasien' => $this->request->getPost('no_pasien'),
            'nama_pasien' => $this->request->getPost('nama_pasien'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tmpt_lahir' => $this->request->getPost('tmpt_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'no_hp' => $this->request->getPost('no_hp'),
            'alamat' => $this->request->getPost('alamat'),
        ];
        $this->pasien->save($data);
        return redirect()->to('/pasien');
    }
}
