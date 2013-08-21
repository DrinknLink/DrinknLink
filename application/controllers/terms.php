<?php

class terms extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('domain');
//         ini_set("session.cookie_domain", DOMAIN);
        session_start();
    }

    public function index() {
    	checkTopDomain();
    	$data = Array();
    	$this->lang->load('demo');
    	$this->load->view ('basic/common_basic.php');
    	$this->load->view ('inBuilding',$data);
    	$this->load->view ('snippets/footer');
    }

}
