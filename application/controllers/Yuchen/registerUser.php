<?php

class registerUser extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('domain');
        session_start();
    }

    public function index() {
    	checkTopDomain();
    	checkLogin();
    	
    	$form = array(
    				array('title'=>'Name','type'=>'text','name'=>'name','id'=>'reg-name','placeholder'=>'Name'),
    				array('title'=>'Email','type'=>'text','name'=>'userEmail','id'=>'reg-email','placeholder'=>'Email Address'),
    				array('title'=>'Password','type'=>'password','name'=>'password','id'=>'reg-password','placeholder'=>'Set a password'),
    				array('title'=>'Confirm Password','type'=>'password','name'=>'confirmPassword','id'=>'reg-confirmPassword','placeholder'=>'Password again')
    				);
    	$basic = Array(
    			'css'=>array('register'),
    			'js'=>array('register')
    	);
    	$data = Array();
    	$data['type'] = 'User';
    	$data['form'] = $form;
    	$this->lang->load('demo');
    	$this->lang->load('registerUser');
    	$this->load->view ('basic/common_basic.php',$basic);
    	$this->load->view ('Yuchen/register',$data);
    	$this->load->view ('snippets/footer');
    }

}
