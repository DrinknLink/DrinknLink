<?php

class home extends CI_Controller {

    function __construct() {
        parent::__construct();
        session_start();
        $this->load->helper('login');
        checkLogin($this->session->userdata('dnl_user'));
    }

    public function index() {
    	$this->load->view ('snippets/common');
    	$this->load->view ('home');
    	$this->load->view ('snippets/footer');
    }
    
}
