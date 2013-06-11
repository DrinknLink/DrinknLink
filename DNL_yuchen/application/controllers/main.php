<?php
class main extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('dbsql');
        $this->load->helper('login');
    }

    public function index() {
//     	$_SESSION['username'] = '';
//     	$logined = checkLogin($_SESSION['username']);
    	$this->load->view ('snippets/common');
    	$this->load->view ('test/testModal');
    	$this->load->view ('snippets/footer');
    }
    
    public function login(){
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
    		echo json_encode( array('code' => '100000', 'msg'=>'login success'));
    		exit;
    	}
    }
    
    public function getNaviBar(){
    	$naviBar = $this->load->view('snippets/navi',null,true);
    	echo json_encode( array('code' => '100001', 'msg'=>'success', 'html'=>$naviBar));
    }
}
