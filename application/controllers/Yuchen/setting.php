<?php

class setting extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('domain');
        session_start();
    }

    public function index() {
    	checkTopDomain();
    	checkLogin();
    	
    	$basic = Array(
    			'css'=>array('setting'),
    			'js'=>array('setting')
    	);
    	$data = Array();
    	$this->lang->load('demo');
    	$this->load->view ('basic/common_basic.php',$basic);
    	$this->load->view ('Yuchen/setting',$data);
    	$this->load->view ('snippets/footer');
    	
    }

}
