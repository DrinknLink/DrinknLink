<?php

class search extends CI_Controller {

    function __construct() {
        parent::__construct();
        session_start();
    }

    public function index() {
    	$this->load->view ('snippets/common');
    	$this->load->view ('snippets/top');
    	$this->load->view ('LoggedInSearchResults');
    	$this->load->view ('snippets/footer');
    }
    
}
