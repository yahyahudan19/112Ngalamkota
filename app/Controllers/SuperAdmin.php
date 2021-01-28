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
		$this->pengumumanModel = new pengumumanModel();
		$this->userModel = new userModel();
	}
	public function index()
	{
		if (!(session()->username)) {
			return redirect()->to(base_url('/auth'));
		}
		$data = [
			'title' => 'Dashboard',
			"total_kejadian" => $this->reportlaporanModel->get_report_count(),
			"total_feedback" => $this->feedbackModel->get_feedback_count(),
			"total_news" => $this->newsModel->get_news_count(),
			"total_pengumuman" => $this->pengumumanModel->get_pengumuman_count()
			// "profil_data" => $this->userModel->profil_data()
		];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('admin/dashboard', $data);
		echo view('layout/footer');
	}

	public function bar_chart()
	{
		$query =  $this->db->query("SELECT COUNT(id_pelapor) as count,MONTHNAME(created_at) as month_name FROM report WHERE YEAR(created_at) = '" . date('Y') . "'
  
		GROUP BY YEAR(created_at),MONTH(created_at)");

		$record = $query->result();
		$data = [];
		foreach ($record as $row) {

			$data['label'][] = $row->month_name;
			$data['data'][] = (int) $row->count;
		}

		$data['chart_data'] = json_encode($data);

		$this->load->view('pie-chart-laporan', $data);
	}


	public function user()
	{
		if (!(session()->username)) {
			return redirect()->to(base_url('/auth'));
		}
		$user = $this->userModel->findAll();
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
			return redirect()->to(base_url('/auth'));
		}
		$news = $this->newsModel->findAll();
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
			return redirect()->to(base_url('/auth'));
		}
		$reportL = $this->reportlaporanModel->findAll();
		$data = [
			'title' => 'Laporan',
			'reportL' => $reportL
		];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('admin/reportlaporan', $data);
		echo view('layout/footer');
	}

	public function reportfeedback()
	{
		if (!(session()->username)) {
			return redirect()->to(base_url('/auth'));
		}
		$feedback = $this->feedbackModel->findAll();
		$data = [
			'title' => 'Feedback',
			'feedback' => $feedback
		];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('admin/reportfeedback', $data);
		echo view('layout/footer');
	}

	public function pengumuman()
	{
		if (!(session()->username)) {
			return redirect()->to(base_url('/auth'));
		}
		$pengumuman = $this->pengumumanModel->findAll();
		$data = [
			'title' => 'Pengumuman',
			'pengumuman' => $pengumuman
		];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('admin/pengumuman/index', $data);
		echo view('layout/footer');
	}
}
