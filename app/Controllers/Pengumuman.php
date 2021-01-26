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
        if (!(session()->username)) {
            return redirect()->to(base_url('/auth'));
        }
        $pengumuman = $this->pengumumanModel->findAll();
        $data = [
            'pengumuman' => $pengumuman
        ];
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('admin/pengumuman', $data);
        echo view('layout/footer');
    }

    public function addPengumuman()
    {
        if (!(session()->username)) {
            return redirect()->to(base_url('/auth'));
        }
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
        if (!(session()->username)) {
            return redirect()->to(base_url('/auth'));
        }
        $pengumuman = $this->pengumumanModel->where('id_pengumuman', $id)->first();
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('admin/pengumuman/detail', ['pengumuman' => $pengumuman]);
        echo view('layout/footer');
    }

    public function editPengumuman($id)
    {
        if (!(session()->username)) {
            return redirect()->to(base_url('/auth'));
        }
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
        if (!(session()->username)) {
            return redirect()->to(base_url('/auth'));
        }
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

    public function delete($id_pengumuman)
    {
        if (!(session()->username)) {
            return redirect()->to(base_url('/auth'));
        }
        $this->pengumumanModel->delete_data($id_pengumuman);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus.');
        return redirect()->to(base_url('superadmin/pengumuman'));
    }

    public function change_visible($id_pengumuman)
    {
        if (!(session()->username)) {
            return redirect()->to(base_url('/auth'));
        }
        $pengumumanData = $this->pengumumanModel->where('id_pengumuman', $id_pengumuman)->first();
        $visible = $pengumumanData['visible_pengumuman'];
        $newVisible = $visible == "1" ? "0" : "1";
        $this->pengumumanModel->update_data([
            'visible_pengumuman' => $newVisible
        ], $id_pengumuman);
        return redirect()->to(base_url('superadmin/pengumuman'));
    }
}
