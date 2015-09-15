<?php

class Controller_1 extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $data['content'] = 'This text comes from controller\'s index function';
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('content',$data);
        $this->load->view('footer');
    }
}

