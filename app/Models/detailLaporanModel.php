<?php

namespace App\Models;

use CodeIgniter\Model;

class detailLaporanModel extends Model
{
    protected $table = "detail_report";

    public function insertDetail($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function getData($id)
    {
        $detail = $this->detailLaporanModel->where('report_id', $id)->findAll();
        return $this->db->table($this->table)->get($detail);
    }
    public function delete_data($id)
    {
        $this->db->table('detail_report')->delete(array('report_id' => $id));
        session()->setFlashdata('pesan', 'Data Berhasil dihapus.');
        return redirect()->to(base_url('superadmin/report'));
    }
}
