<?php

class account extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('dbsql');
        $this->load->helper('login');
        session_start();
    }

    public function index() {
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
    		$_SESSION['userinfo'] = array('email'=>$row['email']);
    		setcookie("email", $row['email'], time()+3600*24*7);
    		setcookie("password", $row['password'], time()+3600*24*7);
    
    		if(strpos($req_url,"login") != false || $req_url == null){
    			$req_url = "/main";
    		}
    		echo json_encode( array('code' => '100000', 'msg'=>'login success', 'req_url'=>$req_url));
    		exit;
    	}
    }
    
    public function logout(){
    	unset($_SESSION['userinfo']);
    	setcookie("email", '', time()-3600);
    	setcookie("password", '', time()-3600);
    	echo json_encode( array('code' => '100000', 'msg'=>'logout success'));
    	exit;
    }
    
    public function register(){
    	$req_url = $_POST['req_url'];
    	$email = $_POST['email'];
    	$password = $_POST['password'];
    	insertSql('User',array('email'=>$email,'password'=>$password));
    	$_SESSION['userinfo'] = array('email'=>$email);
    	
    	if(strpos($req_url,"login") != false || $req_url == null){
    		$req_url = "main";
    	}
    	echo json_encode( array('code' => '100000', 'msg'=>'register success', 'req_url'=>$req_url));
    	exit;
    }
    
    public function checkEmailUsed(){
    	$email = $_POST['email'];
    	$result = selectSql('User',array('email'=>$email));
    	if ($result->num_rows() > 0){
    		echo json_encode(false);
    		exit;
    	}else{
    		echo json_encode(true);
    		exit;
    	}
    }
}
