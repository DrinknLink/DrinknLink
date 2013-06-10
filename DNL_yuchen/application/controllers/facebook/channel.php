<?php

class channel extends CI_Controller {

    function __construct() {
        parent::__construct();
        session_start();
    }

    public function index() {
    	$this->load->view ('facebook/channel');
    }
    
}
