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
