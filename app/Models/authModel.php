<?php

namespace App\Models;

use CodeIgniter\Model;

class authModel extends Model{

    protected $table = 'user';
    protected $id = 'id_user';
    protected $allowedFields = ['username','password', 'role_id', 'image', 'is_active'];

    public function cekLogin($username,$password){
        return $this->db->table('user')
        ->where(array('username' => $username, 'password' => $password))
        ->get()->getRowArray();
    }

    public function delete_data($id_user)
    {
        $query= $this->db->table("user")->delete(array('id_user' => $id_user));
        return $query; 
    }
}