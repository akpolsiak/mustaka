<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    public function ambillogin($username, $password)
    {
        $query = $this->db->get_where('user', array('username' => $username));
        $row = $query->row();
        if ($query->num_rows() > 0 && $row->password == $password) {
            $sess = array(
                'username'  => $row->username,
                '_login'    => true
            );
            $this->session->set_userdata($sess);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('info', 'Username dan Password anda salah!');
            // echo "<script type='text/javascript'>alert('Username dan Password anda salah!');</script>";
            redirect('login');
        }
    }
}
