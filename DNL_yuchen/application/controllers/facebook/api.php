<?php

class api extends CI_Controller {

    function __construct() {
        parent::__construct();
        session_start();
    }

    public function index() {
    	$this->load->model('f');
    }
    
}
