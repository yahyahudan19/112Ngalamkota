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
	
	public function addUser()
	{
		// $this->userModel->save([
        //     'email' => $this->request->getVar('tagline_news'),
        //     'username' => $this->request->getVar('isi_news'),
        //     'password' => $this->request->getVar('link_news'),
        //     'image' => $this->request->getVar('date_news'),
        //     'role_id' => $this->request->getVar('dokumentasi_news'),
        //     'is_active' => $this->request->getVar('dokumentasi_news')
        // ]);

        
        // return redirect()->to('/admin/user');

	}

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
