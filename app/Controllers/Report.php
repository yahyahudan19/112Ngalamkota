<?php namespace App\Controllers;

use App\Models\reportlaporanModel;

class Report extends BaseController
{
    protected $reportlaporanModel;

    public function __construct(){
        $this->reportlaporanModel = new reportlaporanModel();
    }
    public function index()
	{
		$reportL = $this->reportlaporanModel->findAll();
		$data = [
			'reportL' => $reportL 
		];
		echo view('layout/header');
		echo view('layout/sidebar');
		echo view('admin/reportlaporan',$data);
		echo view('layout/footer');
    }
    public function addReportL()
	{
		$this->feedbackModel->save([
            'id_feedback' => $this->request->getVar('id_feedback'),
            'nama_feedback' => $this->request->getVar('nama_feedback'),
            'alamat_feedback' => $this->request->getVar('alamat_feedback'),
            'noHp_feedback' => $this->request->getVar('noHp_feedback'),
            'penyebab_feedback' => $this->request->getVar('penyebab_feedback'),
            'q1_feedback' => $this->request->getVar('q1_feedback'),
            'q2_feedback' => $this->request->getVar('q2_feedback'),
            'q3_feedback' => $this->request->getVar('q3_feedback'),
            'q4_feedback' => $this->request->getVar('q4_feedback'),
            'q5_feedback' => $this->request->getVar('q5_feedback'),
        ]);

        
        return redirect()->to('/home');
    }
    public function detailReport(){
        echo view('layout/header');
		echo view('layout/sidebar');
		echo view('admin/laporan/detail');
		echo view('layout/footer');
    }
}