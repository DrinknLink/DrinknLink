<?php

class map extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
    	$this->load->view ('snippets/common');
    	$this->load->view ('map');
    	$this->load->view ('snippets/footer');
    }
}
