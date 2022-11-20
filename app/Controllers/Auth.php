<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        if (session()->get('nama') !== NULL) {
            return redirect()->to('home');
        } else {
            return view('login');
        }
    }

    public function login()
    {
        $users = new UserModel();
        $data = $this->request->getPost();
        try {
            $dataUsers = $users->where('username', $data['username'])->first();
            if (count($dataUsers) > 0) {
                if ($dataUsers['password'] == md5($data['password'])) {
                    $dataPetugas = $users->getData($dataUsers['role'], $dataUsers['id']);
                    // dd($dataPetugas);
                    session()->set($dataPetugas);
                    return redirect()->to('home');
                } else {
                    echo "Password Salah";
                }
            } else {
                echo "User tidak ditemukan";
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
