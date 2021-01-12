<?php namespace App\Controllers;

use App\Models\feedbackModel;

class Feedback extends BaseController
{
    protected $feedbackModel;

    public function __construct(){
        $this->feedbackModel = new feedbackModel();
    }
    public function index()
	{
		$feedback = $this->feedbackModel->findAll();
		$data = [
			'feedback' => $feedback 
		];
		echo view('layout/header');
		echo view('layout/sidebar');
		echo view('admin/feedback',$data);
		echo view('layout/footer');
    }
    public function addFeedback()
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
    public function detailFeedback(){
        echo view('layout/header');
		echo view('layout/sidebar');
		echo view('admin/feedback/detail');
		echo view('layout/footer');
    }
    public function delete($id_feedback)
   {
      $this->feedbackModel->delete_data($id_feedback);
      return redirect()->to(base_url('superadmin/reportfeedback'));
   }
}