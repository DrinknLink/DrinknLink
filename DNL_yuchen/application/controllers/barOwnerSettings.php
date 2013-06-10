<?php

class barOwnerSettings extends CI_Controller {

    function __construct() {
        parent::__construct();
        session_start();
    }

    public function index() {
    	$this->load->view ('snippets/top');
    	$this->load->view ('barOwnerSettings');
    	$this->load->view ('snippets/footer');
    }
    
}
