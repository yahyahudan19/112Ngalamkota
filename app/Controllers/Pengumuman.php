<?php

namespace App\Controllers;

use App\Models\pengumumanModel;

class Pengumuman extends BaseController
{
    protected $pengumumanModel;

    public function __construct()
    {
        $this->pengumumanModel = new pengumumanModel();
    }

    public function index()
    {
        $pengumuman = $this->pengumumanModel->findAll();
        $data = [
            'pengumuman' => $pengumuman
        ];
        // dd($data);
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('admin/pengumuman', $data);
        echo view('layout/footer');
    }
    public function addPengumuman()
    {
        $data_uploads = [
            'tagline_pengumuman' => $this->request->getVar('tagline_pengumuman'),
            'date_pengumuman' => $this->request->getVar('date_pengumuman'),
            'judul_pengumuman' => $this->request->getVar('judul_pengumuman'),
            'isi_pengumuman' => $this->request->getVar('isi_pengumuman'),
        ];
        $this->pengumumanModel->save($data_uploads);
        session()->setFlashdata('pesan', 'Data Berhasil ditambahkan.');
        return redirect()->to(base_url('superadmin/pengumuman'));
    }
    public function detailPengumuman($id)
    {
        $pengumuman = $this->pengumumanModel->where('id_pengumuman', $id)->first();
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('admin/pengumuman/detail', ['pengumuman' => $pengumuman]);
        echo view('layout/footer');
    }

    // public function edit($id_pengumuman)
    // {
    //     $pengumuman = $this->pengumumanModel->data_pengumuman($id_pengumuman);
    //     $data = [
    //      'title'    => 'Tambah Data pengumuman',
    //      'tagline_pengumuman' => $tagline_pengumuman,
    //      'isi_pengumuman' => $isi_pengumuman,
    //      'link_pengumuman' => $link_pengumuman,
    //      'date_pengumuman' => $date_pengumuman,
    //      'dokumentasi_pengumuman' => $dokumentasi_pengumuman
    //     ];

    //     return redirect()->to(base_url('superadmin/pengumuman'));
    // }
    public function editPengumuman($id)
    {
        $pengumumanData = $this->pengumumanModel->where('id_pengumuman', $id)->findAll();
        $data = [
            'pengumumandata' => $pengumumanData
        ];
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('admin/pengumuman/edit', $data);
        echo view('layout/footer');
    }
    public function edit()
    {
        $id_pengumuman = $this->request->getVar('id');
        $data_uploads = [
            'date_pengumuman' => $this->request->getVar('date_pengumuman'),
            'tagline_pengumuman' => $this->request->getVar('tagline_pengumuman'),
            'judul_pengumuman' => $this->request->getVar('judul_pengumuman'),
            'isi_pengumuman' => $this->request->getVar('isi_pengumuman'),
        ];
        $this->pengumumanModel->update_data($data_uploads, $id_pengumuman);
        session()->setFlashdata('pesan', 'Data Berhasil diedit.');
        return redirect()->to(base_url('superadmin/pengumuman'));
    }

    //     public function update()
    //    {
    //      $this->pengumumanModel->save([
    //          'tagline_pengumuman'          => $this->request->getVar('tagline_pengumuman'),
    //          'isi_pengumuman' => $this->request->getVar('isi_pengumuman'),
    //          'link_pengumuman'       => $this->request->getVar('link_pengumuman'),
    //          'date_pengumuman'       => $this->request->getVar('date_pengumuman'),
    //          'dokumentasi_pengumuman'       => $this->request->getVar('dokumentasi_pengumuman')
    //         ]);

    //       $this->pengumumanModel->update_data($data, $id_pengumuman);
    //       return redirect()->to(base_url('superadmin/pengumuman'));
    //     }
    //    public function updatepengumuman(){
    //     echo view('layout/header');
    //     echo view('layout/sidebar');
    //     echo view('superadmin/pengumuman/update');
    //     echo view('layout/footer');
    //     }

    public function delete($id_pengumuman)
    {
        $this->pengumumanModel->delete_data($id_pengumuman);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus.');
        return redirect()->to(base_url('superadmin/pengumuman'));
    }
}
