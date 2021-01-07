<?php

namespace App\Models;

use CodeIgniter\Model;

class newsModel extends Model{

    protected $table = 'news';
    protected $id = 'id_news';
    protected $useTimestamps = true;
    protected $allowedFields = ['tagline_news','isi_news','link_news','date_news','dokumentasi_news'];
}