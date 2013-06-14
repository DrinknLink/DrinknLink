<?php

class login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('dbsql');
        $this->load->helper('login');
        session_start();
		checkLogin(@$_SESSION['userinfo']);
    }

    public function index() {
    	$this->load->view ('login');
    }
    
}
