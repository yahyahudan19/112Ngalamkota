<?php

namespace App\Models;

use CodeIgniter\Model;

class newsModel extends Model{

    protected $table = 'news';
    protected $id = 'id_news';
    protected $useTimestamps = true;
    protected $allowedFields = ['tagline_news','isi_news','link_news','date_news','dokumentasi_news'];

    public function data_news ($id_news)
    {
        return $this->find($id_news);
    }
    public function save_data($data){
        $query = $this->db->table('news')->insert($data);
        return $query;
    }

    public function update_data($data, $id_news)
    {
        $query = $this->db->table("news")->update(array('id_news' => $id_news));
        return $query;
    }

    public function delete_data($id_news)
    {
        $query= $this->db->table("news")->delete(array('id_news' => $id_news));
        return $query;
    }
}