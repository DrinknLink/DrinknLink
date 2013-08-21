<?php

class search extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('domain');
        session_start();
    }

    public function index() {
    	checkTopDomain();
    	checkLogin();
    	
    	$basic = Array(
    			'css'=>array('search'),
    			'js'=>array('search')
    	);
    	$data = Array();
    	$this->lang->load('demo');
    	$this->load->view ('basic/common_basic.php',$basic);
    	$this->load->view ('Yuchen/search',$data);
    	$this->load->view ('snippets/footer');
    	
    }

}
