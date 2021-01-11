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

        
        return redirect()->to(base_url('superadmin/news'));
        
    }
    public function detailNews(){
        echo view('layout/header');
		echo view('layout/sidebar');
		echo view('admin/news/detail');
		echo view('layout/footer');
    }

    public function edit($id_news)
    {
        $news = $this->newsModel->data_news($id_news);
        $data = [
         'title'    => 'Tambah Data News',
         'tagline_news' => $tagline_news,
         'isi_news' => $isi_news,
         'link_news' => $link_news,
         'date_news' => $date_news,
         'dokumentasi_news' => $dokumentasi_news
        ];

        return redirect()->to(base_url('superadmin/news'));
    }
    public function editNews(){
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('admin/news/edit');
        echo view('layout/footer');
    }
    public function update()
   {
     $this->newsModel->save([
         'tagline_news'          => $this->request->getVar('tagline_news'),
         'isi_news' => $this->request->getVar('isi_news'),
         'link_news'       => $this->request->getVar('link_news'),
         'date_news'       => $this->request->getVar('date_news'),
         'dokumentasi_news'       => $this->request->getVar('dokumentasi_news')
        ]);
      
      $this->newsModel->update_data($data, $id_news);
      return redirect()->to(base_url('superadmin/news'));
    }
   public function updateNews(){
    echo view('layout/header');
    echo view('layout/sidebar');
    echo view('superadmin/news/update');
    echo view('layout/footer');
    }

    public function delete($id_news)
   {
      $this->newsModel->delete_data($id_news);
      return redirect()->to(base_url('superadmin/news'));
   }
}