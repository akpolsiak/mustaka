<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('index_message');
    }

    public function input()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('rating', 'Rating', 'required');
        $this->form_validation->set_rules('comment', 'Comment', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('index_message');
        } else {
            $data = array(
                'name' => $this->input->post('name', true),
                'rating' => $this->input->post('rating', true),
                'comment' => $this->input->post('comment', true)
            );

            $this->load->model('user_model');
            $this->user_model->input_data($data);
            redirect('Home/index');
        }
    }
}
