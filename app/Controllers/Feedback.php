<?php

namespace App\Controllers;

use App\Models\feedbackModel;

class Feedback extends BaseController
{
    protected $feedbackModel;

    public function __construct()
    {
        $this->feedbackModel = new feedbackModel();
    }
    public function index()
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
        echo view('admin/feedback', $data);
        echo view('layout/footer');
    }
    public function addFeedback()
    {
        if (!(session()->username)) {
            return redirect()->to(base_url('/login'));
        }
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
        session()->setFlashdata('pesan', 'Data Berhasil ditambahkan.');
        return redirect()->to('/home/feedback');
    }
    public function detailFeedback($id)
    {
        if (!(session()->username)) {
            return redirect()->to(base_url('/login'));
        }
        $feedback = $this->feedbackModel->where('id_feedback', $id)->first();
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('admin/feedback/detail', ['feedback' => $feedback]);
        echo view('layout/footer');
    }
    public function delete($id_feedback)
    {
        if (!(session()->username)) {
            return redirect()->to(base_url('/login'));
        }
        $this->feedbackModel->delete_data($id_feedback);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus.');
        return redirect()->to(base_url('superadmin/reportfeedback'));
    }
}
