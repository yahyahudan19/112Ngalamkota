<?php namespace App\Controllers;

use App\Models\authModel;

class Auth extends BaseController
{
	public function index()
	{
		return view('auth/login');
	}
	
	public function register()
	{
		return view('auth/register');
	}
	//--------------------------------------------------------------------

}
