<?php namespace App\Controllers;

use App\Models\reportlaporanModel;
use App\Models\authModel;
use App\Models\newsModel;
use App\Models\feedbackModel;

class SuperAdmin extends BaseController
{
	protected $reportlaporanModel;
	protected $authModel;
	protected $feedbackModel;

	public function __construct(){
		$this->reportlaporanModel = new reportlaporanModel();
		$this->authModel = new authModel();
		$this->newsModel = new newsModel();
		$this->feedbackModel = new feedbackModel();
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
		$news = $this->newsModel->findAll();
		$data = [
			'news' => $news 
		];
		echo view('layout/header');
		echo view('layout/sidebar');
		echo view('admin/news',$data);
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

		$feedback = $this->feedbackModel->findAll();
		$data = [
			'feedback' => $feedback 
		];
		echo view('layout/header');
		echo view('layout/sidebar');
		echo view('admin/reportfeedback',$data);
		echo view('layout/footer');
	}
	public function editData(){
		
	}

}