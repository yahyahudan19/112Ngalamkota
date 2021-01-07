<?php namespace App\Controllers;

use App\Models\newsModel;

class News extends BaseController
{
    protected $newsModel;

    public function __construct(){
        $this->newsModel = new newsModel();
    }
    public function index(){
        $news = $this->newsModel->findAll();
		$data = [
			'news' => $news 
		];
		echo view('layout/header');
		echo view('layout/sidebar');
		echo view('admin/news',$data);
		echo view('layout/footer');
    }
    public function addNews(){
        // dd($this->request->getPost());
        $this->newsModel->save([
            'tagline_news' => $this->request->getVar('tagline_news'),
            'isi_news' => $this->request->getVar('isi_news'),
            'link_news' => $this->request->getVar('link_news'),
            'date_news' => $this->request->getVar('date_news'),
            'dokumentasi_news' => $this->request->getVar('dokumentasi_news'),
        ]);

        
        return redirect()->to('/admin/news');
        
    }

}