<?php

namespace App\Controllers;

use App\Models\newsModel;

class News extends BaseController
{
    protected $newsModel;

    public function __construct()
    {
        $this->newsModel = new newsModel();
    }
    public function index()
    {
        if (!(session()->username)) {
            return redirect()->to(base_url('/login'));
        }
        $news = $this->newsModel->findAll();
        $data = [
            'title' => 'Berita',
            'news' => $news
        ];
        echo view('layout/header', $data);
        echo view('layout/sidebar');
        echo view('admin/news', $data);
        echo view('layout/footer');
    }

    public function addNews()
    {
        if (!(session()->username)) {
            return redirect()->to(base_url('/login'));
        }
        $file = $this->request->getFile('dokumentasiNews');

        if ($file) {
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
            session()->setFlashdata('pesan', 'Data Berhasil ditambahkan.');
            return redirect()->to(base_url('superadmin/news'));
        }
    }
    public function detailNews($id)
    {
        if (!(session()->username)) {
            return redirect()->to(base_url('/login'));
        }
        $news = $this->newsModel->where('id_news', $id)->first();
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('admin/news/detail', ['news' => $news]);
        echo view('layout/footer');
    }

    public function edit()
    {
        if (!(session()->username)) {
            return redirect()->to(base_url('/login'));
        }
        $file = $this->request->getFile('dokumentasiNews');
        $id_news = $this->request->getVar('id');
        if (filesize($file) > 0) {
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
            session()->setFlashdata('pesan', 'Data Berhasil diedit.');
            return redirect()->to(base_url('superadmin/news'));
        } else {
            $data_uploads = [
                'tagline_news' => $this->request->getVar('tagline_news'),
                'judul_news' => $this->request->getVar('judul_news'),
                'isi_news' => $this->request->getVar('isi_news'),
                'link_news' => $this->request->getVar('link_news'),
                'date_news' => $this->request->getVar('date_news'),
            ];
            $this->newsModel->update_data($data_uploads, $id_news);
            session()->setFlashdata('pesan', 'Data Berhasil diedit.');
            return redirect()->to(base_url('superadmin/news'));
        }

        // $id_news = $this->request->getVar('id');
        // $data_uploads = [
        //     'tagline_news' => $this->request->getVar('tagline_news'),
        //     'judul_news' => $this->request->getVar('judul_news'),
        //     'isi_news' => $this->request->getVar('isi_news'),
        //     'link_news' => $this->request->getVar('link_news'),
        //     'date_news' => $this->request->getVar('date_news'),
        // ];
        // $this->newsModel->update_data($data_uploads, $id_news);
        // $files = $this->request->getFiles();
        // if (!empty($files['dokumentasi_news'])) {

        //     $this->pengumumanModel->delete_data($id_news);

        //     foreach ($files['dokumentasi_news'] as $img) {
        //         if ($img->isValid()) {
        //             $imagename = $img->getRandomName();
        //             $data_galery = [
        //                 'id_news' => $id_news,
        //                 'dokumentasi_news' => $imagename
        //             ];
        //             $this->newsModel->insertDetail($data_galery);
        //             // upload dengan random name
        //             $img->move(ROOTPATH . 'public/uploads', $imagename);
        //         }
        //     }
        // }
        // session()->setFlashdata('pesan', 'Laporan Berhasil diupdate.');
        // return redirect()->to(base_url('/admin/reportLaporan'));
    }
    public function editNews($id)
    {
        if (!(session()->username)) {
            return redirect()->to(base_url('/login'));
        }
        $NewsData = $this->newsModel->where('id_news', $id)->findAll();
        $data = [
            'title' => 'Edit News',
            'newsdata' => $NewsData
        ];
        echo view('layout/header', $data);
        echo view('layout/sidebar');
        echo view('admin/news/edit', $data);
        echo view('layout/footer');
    }

    public function delete($id_news)
    {
        if (!(session()->username)) {
            return redirect()->to(base_url('/login'));
        }
        $this->newsModel->delete_data($id_news);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus.');
        return redirect()->to(base_url('superadmin/news'));
    }

    public function change_visible($id_news)
    {
        if (!(session()->username)) {
            return redirect()->to(base_url('/login'));
        }
        $NewsData = $this->newsModel->where('id_news', $id_news)->first();
        $visible = $NewsData['visible_news'];
        $newVisible = $visible == "1" ? "0" : "1";
        $this->newsModel->update_data([
            'visible_news' => $newVisible
        ], $id_news);
        return redirect()->to(base_url('superadmin/news'));
    }
}
