<?php

class home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('domain');
        session_start();
    }

    public function index() {
    	checkTopDomain();
    	checkLogin();
    	
    	$this->load->model('barmodel');
    	$barinfoList = $this->barmodel->getAllBarinfo();
    	
    	$basic = Array(
    			'css'=>array('home'),
    			'js'=>array('home')
    	);
    	$data = Array('barinfoList'=>$barinfoList);
    	$this->lang->load('demo');
    	$this->load->view ('basic/common_basic.php',$basic);
    	$this->load->view ('Yuchen/home',$data);
    	$this->load->view ('snippets/footer');
    	
    }

}
