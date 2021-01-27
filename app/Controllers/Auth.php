<?php

namespace App\Controllers;

use App\Models\authModel;

class Auth extends BaseController
{
	protected $authModel;

	public function __construct()
	{
		$this->authModel = new authModel();
	}
	public function index()
	{
	if(session()->username){
		return redirect()->to(base_url('/superadmin'));
	}
		return view('auth/login');
	}

	public function logout(){
		session()->set('username', null);
		session()->set('level', null);
		return redirect()->to(base_url('/auth'));
	}

	public function cekLogin()
	{

		$username = $this->request->getVar('username');
		$password = $this->request->getVar('password');

		$auth = $this->authModel->cekLogin($username, $password);

		if (($auth['username'] == $username) && ($auth['password'] == $password)) {
			session()->set('username', $auth['username']);
			session()->set('level', $auth['level']);
			if ($auth["level"] == "Super Admin") {
				return redirect()->to(base_url('/superadmin'));
			} else if ($auth["level"] == "Admin") {
				return redirect()->to(base_url('/admin'));
			} else {
				session()->setFlashdata('pesan', 'Username atau Password Salah!.');
				return view('auth/login');
			}
		} else {
			session()->setFlashdata('pesan', 'Username atau Password Salah!');
			return view('auth/login');
		}
	}
}
