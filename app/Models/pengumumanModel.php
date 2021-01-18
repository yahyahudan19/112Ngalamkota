<?php

namespace App\Models;

use CodeIgniter\Model;

class pengumumanModel extends Model{

    protected $table = 'pengumuman';
    protected $id = 'id_pengumuman';
    protected $useTimestamps = true;
    protected $allowedFields = ['tagline_pengumuman', 'date_pengumuman', 'judul_pengumuman','isi_pengumuman','dokumentasi_pengumuman'];

    public function data_pengumuman ($id_pengumuman)
    {
        return $this->find($id_pengumuman);
    }
    public function save_data($data){
        $query = $this->db->table('pengumuman')->insert($data);
        return $query;
    }

    public function update_data($data, $id_pengumuman)
    {
        $query = $this->db->table("pengumuman")->update(array('id_pengumuman' => $id_pengumuman));
        return $query;
    }

    public function delete_data($id_pengumuman)
    {
        $query= $this->db->table("pengumuman")->delete(array('id_pengumuman' => $id_pengumuman));
        return $query;
    }
}