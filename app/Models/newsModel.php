<?php

namespace App\Models;

use CodeIgniter\Model;

class newsModel extends Model{

    protected $table = 'news';
    protected $id = 'id_news';
    protected $useTimestamps = true;
    protected $allowedFields = ['tagline_news', 'date_news', 'judul_news','isi_news','isi2_news', 'isi3_news', 'visible_news', 'dokumentasi_news'];

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
        $query = $this->db->table("news")->update($data, array('id_news' => $id_news));
        return $query;
    }

    public function delete_data($id_news)
    {
        $query= $this->db->table("news")->delete(array('id_news' => $id_news));
        return $query;
    }

    public function get_news_count(){
        $query = $this->db->table('news')->countAll();
        return $query;
    }
}