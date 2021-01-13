<?php

namespace App\Models;

use CodeIgniter\Model;

class reportlaporanModel extends Model{

    protected $table = 'report';
    protected $id = 'id_pelapor';

    public function insertLaporan($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function delete_data($id_pelapor)
    {
        $query= $this->db->table("report")->delete(array('id_pelapor' => $id_pelapor));
        return $query;
    }
}