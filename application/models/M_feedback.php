<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_feedback extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('ratings')->result_array();
    }

    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('ratings');
    }
}
