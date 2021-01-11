<?php

namespace App\Models;

use CodeIgniter\Model;

class editLaporanModel extends Model{

//     protected $table = 'report';

//     public function getReport($id = false)
//     {
//         if($id === false){
//             return $this->findAll();
//         }else{
//             return $this->getWhere(['id_pelapor' => $id]);
//         }
//     }
// }

protected $table = 'report';
    protected $id = 'id_pelapor';

    public function editLaporan($data)
    {
        return $this->db->table($this->table)->edit($data);
    }
}