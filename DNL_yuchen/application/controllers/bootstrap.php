<?php

class bootstrap extends CI_Controller {

    function __construct() {
        parent::__construct();
        session_start();
    }

    public function index() {
    	$plugin = $_GET['plugin'];
    	switch ($plugin) {
    		case 'modal':
    			$this->load->view ('test/testModal');
    		default:
    			;
    	}
    }
    
}
