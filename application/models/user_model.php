<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function input_data($data)
    {
        $this->db->insert('ratings', $data);
    }

    public function insert($table = null, $data = null)
    {
        if ($table == null && $data == null) {
            return 0;
        }
        $this->db->insert($table, $data);
        return $this->db->affected_rows();
    }
}
