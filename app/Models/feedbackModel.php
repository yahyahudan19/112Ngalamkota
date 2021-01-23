<?php

namespace App\Models;

use CodeIgniter\Model;

class feedbackModel extends Model
{

    protected $table = 'feedback';
    protected $id = 'id_feedback';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_feedback', 'nama_feedback', 'alamat_feedback', 'noHp_feedback', 'penyebab_feedback', 'q1_feedback', 'q2_feedback', 'q3_feedback', 'q4_feedback', 'q5_feedback'];

    public function data_feedback($id_feedback)
    {
        return $this->find($id_feedback);
    }
    public function save_data($data)
    {
        $query = $this->db->table('feedback')->insert($data);
        return $query;

    }
    public function delete_data($id_feedback)
    {
        $query = $this->db->table("feedback")->delete(array('id_feedback' => $id_feedback));
        return $query;
    }
}
