<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PetugasMedisModel;
use App\Models\PoliModel;
use App\Models\UserModel;

class Petugas_Medis extends BaseController
{
    public function __construct()
    {
        $this->petugas_medis = new PetugasMedisModel();
        $this->poli = new PoliModel();
    }
    public function index()
    {
        $data['petugas_medis'] = $this->petugas_medis
            ->select("petugas_medis.*, poli.nama_poli, user.username, user.role")
            ->join('poli', 'poli.id = petugas_medis.poli_id', 'LEFT')
            ->join('user', 'user.id = petugas_medis.user_id', 'LEFT')
            ->findAll();
        return view('petugas_medis/index', $data);
    }


    public function tambah()
    {
        $data = $this->request->getPost();
        if (count($data) > 0) {
            $user = new UserModel();
            $dataUser = [
                'username' => $data['username'],
                'password' => md5($data['password']),
                'role' => $data['role']
            ];
            $user->insert($dataUser);
            $data['user_id'] = $user->getInsertID();
            // dd($data);
            $this->petugas_medis->insert($data);
            return redirect()->to('petugas_medis');
        } else {
            $poli = new PoliModel();
            $data['polis'] = $poli->findAll();
            return view('petugas_medis/tambah', $data);
        }
    }

    public function ubah($id)
    {
        $data = [
            'petugas' => $this->petugas_medis->select('petugas_medis.*,poli.nama_poli')
                ->join('poli', 'poli.id = petugas_medis.poli_id', 'LEFT')->find($id),
            'polis' => $this->poli->findAll()
        ];
        return view('petugas_medis/ubah', $data);
    }
    public function update($id)
    {
        $data = [
            'id' => $id,
            'poli_id' => $this->request->getPost('poli_id'),
            'jabatan' => $this->request->getPost('jabatan'),
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'no_hp' => $this->request->getPost('no_hp'),
            'alamat' => $this->request->getPost('alamat'),
        ];
        $this->petugas_medis->save($data);
        return redirect()->to('/petugas_medis');
    }

    public function hapus($id = null)
    {
        $this->petugas_medis->delete($id);
        return redirect()->to('petugas_medis');
    }
}
