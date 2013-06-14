<?php

class main extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('dbsql');
        $this->load->helper('login');
		session_start();        
        checkLogin(@$_SESSION['userinfo']);
    }

    public function index() {
    	$this->load->view ('snippets/common');
    	$this->load->view ('snippets/footer');
        //$this->getBasicSite(); // run basic site
//         $this->runSite();
    }

    public function runSite() {
        $this->load->view('snippets/common');
        $this->load->view('snippets/footer');
    }

    public function getNaviBar(){
    	$data = Array();
    	$data['userinfo'] = $_SESSION['userinfo'];
    	$naviBar = $this->load->view('snippets/navi',$data,true);
    	echo json_encode( array('code' => '100001', 'msg'=>'success', 'html'=>$naviBar));
    }

    // basic site
    public function getBasicSite() {
        $this->load->view('basic/common_basic');
        $this->load->view('basic/body_basic');
    }

}
