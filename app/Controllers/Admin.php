<?php namespace App\Controllers;

use App\Models\reportlaporanModel;
use App\Models\authModel;
use App\Models\newsModel;
use App\Models\feedbackModel;

class Admin extends BaseController
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
	public function reportlaporan(){
		$reportL = $this->reportlaporanModel->findAll();
		$data = [
			'reportL' => $reportL 
		];
		echo view('layout/header');
		echo view('layout/sidebar');
		echo view('admin/reportlaporan', $data);
		echo view('layout/footer');
	}

}
