<?php

namespace App\Controllers;

use App\Models\detailLaporanModel;
use App\Models\reportlaporanModel;
use App\Models\userModel;

class Report extends BaseController
{
    protected $reportlaporanModel;

    public function __construct()
    {
        $this->reportlaporanModel = new reportlaporanModel();
        $this->detailLaporanModel = new detailLaporanModel();
        $this->userModel = new userModel();
    }
    public function index()
    {
        if (!(session()->username)) {
			return redirect()->to(base_url('/login'));
        }
        if(session()->get('level') == "Super Admin"){
            $reportL = $this->reportlaporanModel->orderBy('id_pelapor', 'desc')->findAll();
        }else{
            $reportL = $this->reportlaporanModel->where('id_admin', session()->get('id_user'))->orderBy('id_pelapor', 'desc')->findAll();
        }
        $dtPetugas = $this->userModel->findAll();
        $data = [
            'title' => 'report',
            'reportL' => $reportL,
            'dtPetugas' => $dtPetugas,
        ];
        echo view('layout/header', $data);
        echo view('layout/sidebar');
        echo view('admin/reportlaporan', $data);
        echo view('layout/footer');
    }

    public function addReportL()
    {
        if (!(session()->username)) {
			return redirect()->to(base_url('/login'));
		}
        // dapatkan input file berupa array
        $files = $this->request->getFiles();
        if ($files) {

            // buat value id random di table uploads
            $data_uploads = [
                'nama_petugas' => $this->request->getVar('petugas'),
                'no_tiket' => $this->request->getVar('no_tiket'),
                'kejadian' => $this->request->getVar('kejadian'),
                'tanggal' => $this->request->getVar('tanggal'),
                'nama_pelapor' => $this->request->getVar('nama_pelapor'),
                'lokasi_kejadian' => $this->request->getVar('lokasi_kejadian'),
                'tindak_lanjut' => $this->request->getVar('tindak_lanjut'),
            ];
            $this->reportlaporanModel->insertLaporan($data_uploads);

            // ulangi insert gambar ke table galery menggunakan foreach

            $db      = \Config\Database::connect();
            $builder = $db->insertID();

            foreach ($files['dokumentasi'] as $img) {
                if ($img->isValid()) {
                    $imagename = $img->getRandomName();
                    $data_galery = [
                        'report_id' => $builder,
                        'gambar' => $imagename
                    ];

                    $this->detailLaporanModel->insertDetail($data_galery);
                    // upload dengan random name
                    $img->move(ROOTPATH . 'public/uploads', $imagename);
                }
            }

            session()->setFlashdata('pesan', 'Laporan Berhasil ditambahkan.');
            return redirect()->to(base_url('/admin/reportLaporan'));
        }
    }

    public function detailReport($id)
    {
        if (!(session()->username)) {
			return redirect()->to(base_url('/login'));
		}
        $reportL = $this->reportlaporanModel->where('id_pelapor', $id)->findAll();
        $detail = $this->detailLaporanModel->where('report_id', $id)->findAll();
        $data = [
            'reportL' => $reportL[0],
            'detail' => $detail
        ];
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('admin/laporan/detail', $data);
        echo view('layout/footer');
    }

    public function delete($id_pelapor)
    {
        if (!(session()->username)) {
			return redirect()->to(base_url('/login'));
		}
        $this->reportlaporanModel->delete_data($id_pelapor);
        session()->setFlashdata('pesan', 'Laporan Berhasil dihapus.');
        return redirect()->to(base_url('admin/reportlaporan'));
    }

    public function edit()
    {
        if (!(session()->username)) {
			return redirect()->to(base_url('/login'));
		}
        $id_pelapor = $this->request->getVar('id');
        $data_uploads = [
            'kejadian' => $this->request->getVar('kejadian'),
            'tanggal' => $this->request->getVar('tanggal_report'),
            'nama_pelapor' => $this->request->getVar('nama_pelapor'),
            'lokasi_kejadian' => $this->request->getVar('lokasi_report'),
            'tindak_lanjut' => $this->request->getVar('tindak_lanjut'),
        ];
        $this->reportlaporanModel->update_data($data_uploads, $id_pelapor);

        $files = $this->request->getFiles();
        if (!empty($files['dokumentasi'])) {

            $this->detailLaporanModel->delete_data($id_pelapor);

            foreach ($files['dokumentasi'] as $img) {
                if ($img->isValid()) {
                    $imagename = $img->getRandomName();
                    $data_galery = [
                        'report_id' => $id_pelapor,
                        'gambar' => $imagename
                    ];
                    $this->detailLaporanModel->insertDetail($data_galery);
                    // upload dengan random name
                    $img->move(ROOTPATH . 'public/uploads', $imagename);
                }
            }
        }
        session()->setFlashdata('pesan', 'Laporan Berhasil diupdate.');
        return redirect()->to(base_url('/admin/reportLaporan'));
    }

    public function editReport($id)
    {
        if (!(session()->username)) {
			return redirect()->to(base_url('/login'));
		}
        $ReportData = $this->reportlaporanModel->where('id_pelapor', $id)->findAll();
        $detail = $this->detailLaporanModel->where('report_id', $id)->findAll();
        $data = [
            'reportdata' => $ReportData,
            'detail' => $detail
        ];
        // dd($data);
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('admin/laporan/edit', $data);
        echo view('layout/footer');
    }
}
