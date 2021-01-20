<?php

namespace App\Controllers;

use App\Models\newsModel;
use App\Models\pengumumanModel;

class Home extends BaseController
{
	public function __construct()
	{
		$this->newsModel = new newsModel();
		$this->pengumumanModel = new pengumumanModel();
	}
	public function index()
	{

		$news = $this->newsModel->findAll();
		$pengumuman = $this->pengumumanModel->findAll();
		$data = [
			'news' => $news,
			'pengumuman' => $pengumuman
		];
		return view('home/index', $data);
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
