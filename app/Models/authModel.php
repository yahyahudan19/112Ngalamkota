<?php

namespace App\Models;

use CodeIgniter\Model;

class authModel extends Model{

    protected $table = 'user';
    protected $id = 'id_user';
    // protected $allowedFields = ['username','password'];

    public function cekLogin($username,$password){
        return $this->db->table('user')
        ->where(array('username' => $username, 'password' =>$password))
        ->get()->getRowArray();
    }
}