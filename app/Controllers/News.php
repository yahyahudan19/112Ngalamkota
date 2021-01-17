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
        $file = $this->request->getFile('dokumentasiNews');

        if($file){
            // buat value id random di table uploads
            $imagename = $file->getRandomName();
            $data_uploads = [
                'tagline_news' => $this->request->getVar('tagline_news'),
                'judul_news' => $this->request->getVar('judul_news'),
                'isi_news' => $this->request->getVar('isi_news'),
                'link_news' => $this->request->getVar('link_news'),
                'date_news' => $this->request->getVar('date_news'),
                'dokumentasi_news' => $imagename,
            ];
            $this->newsModel->save($data_uploads);

            // ulangi insert gambar ke table galery menggunakan foreach
            $file->move(ROOTPATH . 'public/uploads', $imagename);
            return redirect()->to(base_url('superadmin/news'));
        }
       
        
    }
    public function detailNews($id){
        $news = $this->newsModel->where('id_news', $id)->first();
        echo view('layout/header');
		echo view('layout/sidebar');
		echo view('admin/news/detail', ['news' => $news]);
		echo view('layout/footer');
    }

    public function edit()
    {
        $file = $this->request->getFile('dokumentasiNews');
        $id_news = $this->request->getVar('id');
        if(!empty($file)){
            // buat value id random di table uploads
            $imagename = $file->getRandomName();
            $data_uploads = [
                'tagline_news' => $this->request->getVar('tagline_news'),
                'judul_news' => $this->request->getVar('judul_news'),
                'isi_news' => $this->request->getVar('isi_news'),
                'link_news' => $this->request->getVar('link_news'),
                'date_news' => $this->request->getVar('date_news'),
                'dokumentasi_news' => $imagename,
            ];
            $this->newsModel->update_data($data_uploads, $id_news);

            // ulangi insert gambar ke table galery menggunakan foreach
            $file->move(ROOTPATH . 'public/uploads', $imagename);
            return redirect()->to(base_url('superadmin/news'));
        }else{
            $data_uploads = [
                'tagline_news' => $this->request->getVar('tagline_news'),
                'judul_news' => $this->request->getVar('judul_news'),
                'isi_news' => $this->request->getVar('isi_news'),
                'link_news' => $this->request->getVar('link_news'),
                'date_news' => $this->request->getVar('date_news'),
            ];
            $this->newsModel->update_data($data_uploads, $id_news);
            return redirect()->to(base_url('superadmin/news'));
        }
    }

    public function editNews($id){
        $NewsData = $this->newsModel->where('id_news', $id)->findAll();
        $data = [
            'newsdata' => $NewsData
        ];
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('admin/news/edit', $data);
        echo view('layout/footer');
    }
//     public function update()
//    {
//      $this->newsModel->save([
//          'tagline_news'          => $this->request->getVar('tagline_news'),
//          'isi_news' => $this->request->getVar('isi_news'),
//          'link_news'       => $this->request->getVar('link_news'),
//          'date_news'       => $this->request->getVar('date_news'),
//          'dokumentasi_news'       => $this->request->getVar('dokumentasi_news')
//         ]);
      
//       $this->newsModel->update_data($data, $id_news);
//       return redirect()->to(base_url('superadmin/news'));
//     }
//    public function updateNews(){
//     echo view('layout/header');
//     echo view('layout/sidebar');
//     echo view('superadmin/news/update');
//     echo view('layout/footer');
//     }

    public function delete($id_news)
   {
      $this->newsModel->delete_data($id_news);
      return redirect()->to(base_url('superadmin/news'));
   }
}