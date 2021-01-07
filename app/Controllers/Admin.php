<?php namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		echo view('layout/header');
		echo view('layout/sidebar');
		echo view('admin/dashboard');
		echo view('layout/footer');
	}
	public function user(){
		echo view('layout/header');
		echo view('layout/sidebar');
		echo view('admin/user');
		echo view('layout/footer');
	}
	public function news(){
		echo view('layout/header');
		echo view('layout/sidebar');
		echo view('admin/news');
		echo view('layout/footer');
	}
	public function report(){
		echo view('layout/header');
		echo view('layout/sidebar');
		echo view('admin/report');
		echo view('layout/footer');
	}

}
