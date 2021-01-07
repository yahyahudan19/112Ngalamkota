<?php namespace App\Controllers;

use App\Models\reportlaporanModel;
use App\Models\authModel;

class Admin extends BaseController
{
	protected $reportlaporanModel;
	protected $authModel;

	public function __construct(){
		$this->reportlaporanModel = new reportlaporanModel();
		$this->authModel = new authModel();
	}
	public function index()
	{
		echo view('layout/header');
		echo view('layout/sidebar');
		echo view('admin/dashboard');
		echo view('layout/footer');
	}
	public function user(){
		$auth = $this->authModel->findAll();
		$data = [
			'auth' => $auth 
		];
		echo view('layout/header');
		echo view('layout/sidebar');
		echo view('admin/user',$data);
		echo view('layout/footer');
	}
	public function news(){
		echo view('layout/header');
		echo view('layout/sidebar');
		echo view('admin/news');
		echo view('layout/footer');
	}
	public function reportlaporan(){

		$reportL = $this->reportlaporanModel->findAll();
		$data = [
			'reportL' => $reportL 
		];
		echo view('layout/header');
		echo view('layout/sidebar');
		echo view('admin/reportlaporan',$data);
		echo view('layout/footer');
	}
	public function reportfeedback(){
		echo view('layout/header');
		echo view('layout/sidebar');
		echo view('admin/reportfeedback');
		echo view('layout/footer');
	}

}
