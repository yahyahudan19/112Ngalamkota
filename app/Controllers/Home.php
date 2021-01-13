<?php namespace App\Controllers;

use App\Models\newsModel;

class Home extends BaseController
{
	public function __construct(){
        $this->newsModel = new newsModel();
    }
	public function index()
	{
		
		$news = $this->newsModel->findAll();
		$data = [
			'news' => $news 
		];
		return view('home/index',$data);
	}
	
	public function login()
	{
		return view('auth/login');
	}

	public function feedback()
	{
		return view('home/feedback');
	}
	//--------------------------------------------------------------------

}
