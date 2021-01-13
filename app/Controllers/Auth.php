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
		
		$username = $this->request->getVar('username');
		$password = $this->request->getVar('password');

		$auth = $this->authModel->cekLogin($username,$password);
		// dd($username);

		if (($auth['username'] == $username) && ($auth['password'] == $password)) {
			session()->set('username',$auth['username']);
			session()->set('role', $auth['role_id']);
			if($auth["role_id"] == "1"){
				return redirect()->to(base_url('/superadmin'));
			}else if($auth["role_id"] == "2"){
				return redirect()->to(base_url('/admin'));
			}else{
				return view('auth/login');
			}
		}else{
			return view('auth/login');
		}
	
	}
	public function delete($id_user)
		{
			$this->authModel->delete_data($id_user);
		   return redirect()->to(base_url('superadmin/user'));
	}
}
