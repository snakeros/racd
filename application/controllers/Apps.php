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

    $data['title'] = 'Create a new application';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('apps/create');
    }
    else
    {
        $this->news_model->set_news();
        $this->load->view('apps/success');
    }
    }
}

?>