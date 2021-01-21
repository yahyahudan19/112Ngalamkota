<?php

namespace App\Controllers;

use App\Models\detailLaporanModel;
use App\Models\reportlaporanModel;
use App\Models\editLaporanModel;

class Report extends BaseController
{
    protected $reportlaporanModel;

    public function __construct()
    {
        $this->reportlaporanModel = new reportlaporanModel();
        $this->detailLaporanModel = new detailLaporanModel();
    }
    public function index()
    {
        $reportL = $this->reportlaporanModel->findAll();
        $data = [
            'reportL' => $reportL
        ];
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('admin/reportlaporan', $data);
        echo view('layout/footer');
    }
    public function addReportL()
    {
        // dapatkan input file berupa array
        $files = $this->request->getFiles();

        if ($files) {

            // buat value id random di table uploads
            $data_uploads = [
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

                $imagename = $img->getRandomName();
                $data_galery = [
                    'report_id' => $builder,
                    'gambar' => $imagename
                ];

                $this->detailLaporanModel->insertDetail($data_galery);
                // upload dengan random name
                $img->move(ROOTPATH . 'public/uploads', $imagename);
            }

            session()->setFlashdata('pesan', 'Laporan Berhasil ditambahkan.');            
            return redirect()->to(base_url('/admin/reportLaporan'));
        }
    }
    public function detailReport($id)
    {
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
        $this->reportlaporanModel->delete_data($id_pelapor);
        session()->setFlashdata('pesan', 'Laporan Berhasil dihapus.');
        return redirect()->to(base_url('admin/reportlaporan'));
    }
    public function edit()
    {
        $id_pelapor = $this->request->getVar('id');
        $data_uploads = [
            'tanggal' => $this->request->getVar('tanggal_report'),
            'kejadian' => $this->request->getVar('kejadian_report'),
            'lokasi_kejadian' => $this->request->getVar('lokasi_report'),
            'nama_pelapor' => $this->request->getVar('nama_pelapor'),
            'tindak_lanjut' => $this->request->getVar('tindak_lanjut'),
        ];
        $this->reportlaporanModel->update_data($data_uploads, $id_pelapor);
        return redirect()->to(base_url('superadmin/reportlaporan'));
    }
    public function editReport($id)
    {
        $ReportData = $this->reportlaporanModel->where('id_pelapor', $id)->findAll();
        $data = [
            'reportdata' => $ReportData
        ];
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('admin/laporan/edit', $data);
        echo view('layout/footer');
    }
}
