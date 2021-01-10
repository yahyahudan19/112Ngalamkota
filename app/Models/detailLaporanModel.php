<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class detailLaporanModel extends Model
{
    protected $table = "detail_report";
 
    public function insertDetail($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}