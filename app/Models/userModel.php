<?php

namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model{

    protected $table = 'user';
    protected $id = 'id_user';
    protected $useTimestamps = true;

    public function data_user ($id_user)
    {
        return $this->find($id_user);
    }
    public function save_data($data){
        return $this->db->table($this->table)->insert($data);
    }

    public function update_data($data, $id)
    {
        $query = $this->db->table('user')->update($data, array('id_user' => $id));
        return $query;
    }

    public function delete_data($id_user)
    {
        $query= $this->db->table("user")->delete(array('id_user' => $id_user));
        return $query; 
    }
    // public function profil_data() {
    //     $query = $this->db->query("SELECT * FROM user where username='".$this->session->username."'")->row_array();
    //     return $query;
    // }
    public function get_user_count(){
        $query = $this->db->table('user')->countAll();
        return $query;
    }
}