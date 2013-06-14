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
    }
    
    public function login(){
    	$req_url = $_POST['req_url'];
    	$email = $_POST['email'];
    	$password = $_POST['password'];
    	$result = selectSql('User',array('email'=>$email));
    	if ($result->num_rows() == 0){
    		echo json_encode( array('code' => '100001', 'msg'=>'email does not exist'));
    		exit;
    	}
    	$result = selectSql('User',array('email'=>$email,'password'=>$password));
    	if ($result->num_rows() == 0){
    		echo json_encode( array('code' => '100002', 'msg'=>'wrong password'));
    		exit;
    	}else{
    		$row = $result->row_array();
    		$_SESSION['userinfo'] = $row;
    		setcookie("email", $row['email'], time()+3600*24*7);
    		setcookie("password", $row['password'], time()+3600*24*7);
    		
    		if(strpos($req_url,"login") != false || $req_url == null){
    			$req_url = "main";
    		}
    		echo json_encode( array('code' => '100000', 'msg'=>'login success', 'req_url'=>$req_url));
    		exit;
    	}
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
