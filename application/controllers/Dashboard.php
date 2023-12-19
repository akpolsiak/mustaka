<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('_login') != true) {
            redirect('/');
        }
    }

    public function index()
    {
        $data['feedback'] = $this->M_feedback->SemuaData();

        $this->load->view('home_message', $data);
    }

    public function hapus($id)
    {
        $this->M_feedback->hapus_data($id);
        redirect('Dashboard');
    }
}
