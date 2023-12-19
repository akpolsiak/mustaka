<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('login_message');
    }

    public function ceklogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('Auth_model');
        $this->Auth_model->ambillogin($username, md5('$$' . $password));
        // echo md5('$$' . $password, false);
    }

    public function logout()
    {
        // $this->session->set_userdata('username', false);
        $this->session->sess_destroy();
        redirect('login');
    }

    public function add_admin()
    {
        $username = "mustaka";
        $password = 'adminmustaka';
        $data = array(
            'username' => $username,
            'password' => md5('$$' . $password, false),
        );
        $this->load->model('user_model');
        $insert = $this->user_model->insert('user', $data);
        echo $insert;
        // echo "who'r you?";
    }
}
