<?php

namespace App\Controllers;

use App\Models\reportlaporanModel;
use App\Models\authModel;
use App\Models\newsModel;
use App\Models\feedbackModel;
use App\Models\userModel;

class Admin extends BaseController
{
	protected $reportlaporanModel;
	protected $authModel;
	protected $feedbackModel;

	public function __construct()
	{
		$this->reportlaporanModel = new reportlaporanModel();
		$this->authModel = new authModel();
		$this->newsModel = new newsModel();
		$this->feedbackModel = new feedbackModel();
		$this->userModel = new userModel();
	}
	public function index()
	{
		if (!(session()->username)) {
			return redirect()->to(base_url('/login'));
		}
		$data = [
			'title' => 'Dashboard',
			"total_kejadian" => $this->reportlaporanModel->get_report_count()
		];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('admin/dashboard', $data);
		echo view('layout/footer');
	}
	public function reportlaporan()
	{
		if (!(session()->username)) {
			return redirect()->to(base_url('/login'));
		}
		if(session()->get('level') == "Super Admin"){
            $reportL = $this->reportlaporanModel->orderBy('id_pelapor', 'desc')->findAll();
        }else{
            $reportL = $this->reportlaporanModel->where('id_admin', session()->get('id_user'))->orderBy('id_pelapor', 'desc')->findAll();
        }
		$dtPetugas = $this->userModel->findAll();
		$data = [
			'reportL' => $reportL,
			'dtPetugas' => $dtPetugas
		];
		echo view('layout/header');
		echo view('layout/sidebar');
		echo view('admin/reportlaporan', $data);
		echo view('layout/footer');
	}
}
