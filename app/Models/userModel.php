<?php

namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model{

    protected $table = 'user';
    protected $id = 'id_user';
    protected $useTimestamps = true;
    protected $allowedFields = ['tagline_news','isi_news','link_news','date_news','dokumentasi_news'];
}