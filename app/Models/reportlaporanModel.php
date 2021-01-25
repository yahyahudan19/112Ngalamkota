<?php

namespace App\Models;

use CodeIgniter\Model;

class reportlaporanModel extends Model
{

    protected $table = 'report';
    protected $id = 'id_pelapor';
    protected $useTimestamps = true;

    public function insertLaporan($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function delete_data($id_pelapor)
    {
        $query = $this->db->table("report")->delete(array('id_pelapor' => $id_pelapor));
        return $query;
    }
    public function get_report_count(){
        $query = $this->db->table('report')->countAll();
        return $query;
    }
    public function update_data($data, $id)
    {
        $query = $this->db->table('report')->update($data, array('id_pelapor' => $id));
        return $query;
    }
}
