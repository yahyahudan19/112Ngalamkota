<?php

namespace App\Models;

use CodeIgniter\Model;

class authModel extends Model{

    protected $table = 'user';
    protected $id = 'id_user';
    protected $allowedFields = ['username','password'];

    public function login(){

    }
}