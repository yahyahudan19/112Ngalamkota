<?php

namespace App\Controllers;

use App\Models\reportlaporanModel;
use App\Models\authModel;
use App\Models\newsModel;
use App\Models\feedbackModel;
use App\Models\pengumumanModel;
use App\Models\userModel;

class SuperAdmin extends BaseController
{
	protected $reportlaporanModel;
	protected $authModel;
	protected $feedbackModel;
	protected $pengumumanModel;
	protected $userModel;

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
			"total_kejadian" => $this->reportlaporanModel->get_report_count(),
			"total_feedback" => $this->feedbackModel->get_feedback_count(),
			"total_news" => $this->newsModel->get_news_count(),
			"total_user" => $this->userModel->get_user_count()
			// "profil_data" => $this->userModel->profil_data()
		];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('admin/dashboard', $data);
		echo view('layout/footer');
	}

	public function user()
	{
		if (!(session()->username)) {
			return redirect()->to(base_url('/login'));
		}
		$user = $this->userModel->orderBy('id_user', 'desc')->findAll();
		$data = [
			'title' => 'User',
			'user' => $user
		];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('admin/user', $data);
		echo view('layout/footer');
	}

	public function news()
	{
		if (!(session()->username)) {
			return redirect()->to(base_url('/login'));
		}
		$news = $this->newsModel->orderBy('id_news', 'desc')->findAll();
		$data = [
			'news' => $news
		];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('admin/news', $data);
		echo view('layout/footer');
	}

	public function reportlaporan()
	{
		if (!(session()->username)) {
			return redirect()->to(base_url('/login'));
		}
		// if (session()->get('level') == "Super Admin") {
			$reportL = $this->reportlaporanModel->orderBy('id_pelapor', 'desc')->findAll();
		// } else {
		// 	$reportL = $this->reportlaporanModel->where('id_admin', session()->get('id_user'))->orderBy('id_pelapor', 'desc')->findAll();
		// }
		$dtPetugas = $this->userModel->findAll();
		$data = [
			'title' => 'Laporan',
			'reportL' => $reportL,
			'dtPetugas' => $dtPetugas
		];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('admin/reportlaporan', $data);
		echo view('layout/footer');
	}

	public function reportfeedback()
	{
		if (!(session()->username)) {
			return redirect()->to(base_url('/login'));
		}
		$feedback = $this->feedbackModel->orderBy('id_feedback', 'desc')->findAll();
		$data = [
			'title' => 'Feedback',
			'feedback' => $feedback
		];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('admin/reportfeedback', $data);
		echo view('layout/footer');
	}
}
