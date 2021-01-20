<?php namespace App\Controllers;

use App\Models\authModel;

class Auth extends BaseController
{
	protected $authModel;

	public function __construct(){
		$this->authModel = new authModel();
	}
	public function index()
	{
		return view('auth/login');
		
	}
	
	public function cekLogin(){
		
		$username = $this->request->getVar('username');
		$password = $this->request->getVar('password');

		$auth = $this->authModel->cekLogin($username,$password);
		// dd($username);

		if (($auth['username'] == $username) && ($auth['password'] == $password)) {
			session()->set('username',$auth['username']);
			// session()->set('role', $auth['role_id']);
			session()->set('level', $auth['level']);
			if($auth["level"] == "Super Admin"){
				return redirect()->to(base_url('/superadmin'));
			}else if($auth["level"] == "Admin"){
				return redirect()->to(base_url('/admin'));
			}else{
				return view('auth/login');
			}
		}else{
			return view('auth/login');
		}
	}
}