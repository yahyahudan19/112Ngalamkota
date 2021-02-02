<?php

namespace App\Controllers;

use App\Models\userModel;

class User extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new userModel();
    }

    public function index()
    {
        if (!(session()->username)) {
            return redirect()->to(base_url('/login'));
        }
        $user = $this->userModel->findAll();
        $data = [
            'user' => $user
        ];
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('admin/user', $data);
        echo view('layout/footer');
    }
    public function addUser()
    {
        if (!(session()->username)) {
            return redirect()->to(base_url('/login'));
        }
        $data_uploads = [
            'nama_petugas' => $this->request->getVar('nama_petugas'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'level' => $this->request->getVar('level'),
        ];
        $this->userModel->save_data($data_uploads);
        session()->setFlashdata('pesan', 'User Berhasil ditambahkan.');
        return redirect()->to(base_url('superadmin/user'));
    }

    public function edit()
    {
        if (!(session()->username)) {
            return redirect()->to(base_url('/login'));
        }
        $id_user = $this->request->getVar('id');
        $data_uploads = [
            'nama_petugas' => $this->request->getVar('nama_petugas'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'level' => $this->request->getVar('level'),
        ];
        $this->userModel->update_data($data_uploads, $id_user);
        session()->setFlashdata('pesan', 'User Berhasil diupdate.');
        return redirect()->to(base_url('superadmin/user'));
    }

    public function editUser($id)
    {
        if (!(session()->username)) {
            return redirect()->to(base_url('/login'));
        }
        $userData = $this->userModel->where('id_user', $id)->findAll();
        $data = [
            'userdata' => $userData
        ];
        // dd($data);
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('admin/user/edit', $data);
        echo view('layout/footer');
    }

    public function delete($id_user)
    {
        if (!(session()->username)) {
            return redirect()->to(base_url('/login'));
        }
        $this->userModel->delete_data($id_user);
        session()->setFlashdata('pesan', 'User Berhasil dihapus.');
        return redirect()->to(base_url('superadmin/user'));
    }
}
