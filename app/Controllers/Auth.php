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
	
	public function register()
	{
		return view('auth/register');
	}
	//--------------------------------------------------------------------
	public function cekLogin(){
		
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');

		$auth = $this->authModel->cekLogin($username,$password);

		if (($auth['username']==$username) && ($auth['password']==$password)) {
			session()->set('username',$auth['username']);
			
			redirect()->to(base_url('/admin'));
			
		}else{
			return view('auth/login');
		}
		
	}
}
