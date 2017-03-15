<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller{

    public function index(){
        $this->load->model('apps');
        $data['query'] = $this->apps->read();
        $this->load->view('apps', $data);
    }
    
    public function edit(){
        // Todo: Edit
    }
    
    public function create(){
        $this->load->helper('form');
    $this->load->library('form_validation');

     

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('description', 'Description', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('parts/header');
        $this->load->view('apps/create');
        $this->load->view('parts/footer');
    }
    else
    {
         $this->load->view('parts/header');
        $this->apps_model->create();
        $this->load->view('apps/success');
    }
    }
}

?>