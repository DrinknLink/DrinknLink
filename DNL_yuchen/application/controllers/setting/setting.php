<?php

class setting extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('login');
        checkLogin($this->session->userdata());
        session_start();
    }

    public function index() {
    	$this->load->view ('snippets/common');
    	$this->load->view ('setting');
//     	$this->load->view ('snippets/footer');
    }
    
}
