<?php

class main extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('domain');
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

    public function getLanguageBar(){
    	$data = Array();
    	$languageBar = $this->load->view('snippets/languageBar',$data,true);
    	echo json_encode( array('code' => '100000', 'msg'=>'success', 'html'=>$languageBar));
    }
    
    public function getNavBar(){
    	if(@$_POST['isAdmin']){
    		$data = Array();
    		$data['isAdmin'] = true;
    		$data['ownerName'] = $_SESSION['ownerinfo']['ownerName'];
    	}else{
    		//check session login status and infos
    		$data = Array();
    		if(empty($_SESSION['userinfo']))
    			$data['isLogin'] = 0;
    		else{
    			$data['isLogin'] = 1;
    			$data['userName'] = $_SESSION['userinfo']['userName'];
    		}
    	}
    	$navBar = $this->load->view('snippets/navBar',$data,true);
    	echo json_encode( array('code' => '100000', 'msg'=>'success', 'html'=>$navBar));
    }
    
    public function getSocialBar(){
    	$data = Array();
    	$socialBar = $this->load->view('snippets/socialBar',$data,true);
    	echo json_encode( array('code' => '100000', 'msg'=>'success', 'html'=>$socialBar));
    }

}
