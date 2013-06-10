<?php

class registerUser extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('dbsql');
    }

    public function index() {
    	$this->load->view ('snippets/common');
    	$this->load->view ('snippets/top');
    	$this->load->view ('registerUser');
//     	$this->load->view ('snippets/footer');
    }
    
    public function register(){
    	$email = $_POST['email'];
    	$password = $_POST['password'];
    	insertSql('User',array('email'=>$email,'password'=>$password));
    	return;
    }
    
    public function isEmailUsed(){
    	$email = $_POST['email'];
    	$result = selectSql('User',array('email'=>$email));
    	if ($result->num_rows() > 0){
			return true;
    	}else{
            return false;
    	}
    }
    
}
