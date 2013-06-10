<?php

class login extends CI_Controller {

    function __construct() {
        parent::__construct();
        session_start();
    }

    public function index() {
    	$this->load->view ('snippets/common');
    	$this->load->view ('snippets/top');
    	$this->load->view ('login');
    	$this->load->view ('snippets/footer');
    }
    
}
