<?php

class login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('dbsql');
        $this->load->helper('login');
        checkLogin();
    }

    public function index() {
    	$this->load->view ('login');
    }
}
