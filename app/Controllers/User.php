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
        $data_uploads = [
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'level' => $this->request->getVar('level'),
        ];
        $this->userModel->save_data($data_uploads);
        return redirect()->to(base_url('superadmin/user'));
    }
    public function delete($id_user)
    {
        $this->userModel->delete_data($id_user);
        return redirect()->to(base_url('superadmin/user'));
    }
}
