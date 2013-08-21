<?php

class registerOwner extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('domain');
        session_start();
    }

    public function index() {
    	checkTopDomain();
    	checkLogin();
    	
    	$form = array(
    			//Owner Info
    			array('title'=>'Name','type'=>'text','name'=>'name','id'=>'reg-ownerName','placeholder'=>'Your real name'),
    			array('title'=>'Email Address','type'=>'text','name'=>'ownerEmail','id'=>'reg-email','placeholder'=>'Email Address'),
    			array('title'=>'Password','type'=>'password','name'=>'password','id'=>'reg-password','placeholder'=>'Set a password'),
    			array('title'=>'Confirm Password','type'=>'password','name'=>'confirmPassword','id'=>'reg-confirmPassword','placeholder'=>'Password again'),
    			//First Bar Info
    			array('title'=>'Bar Name','type'=>'text','name'=>'barName','id'=>'reg-barName','placeholder'=>'Your bar\'s name'),
    			array('title'=>'Address','type'=>'text','name'=>'address','id'=>'reg-address','placeholder'=>'Address'),
    			array('title'=>'Postcode','type'=>'text','name'=>'postcode','id'=>'reg-postcode','placeholder'=>'Postcode'),
    			array('title'=>'City','type'=>'text','name'=>'city','id'=>'reg-city','placeholder'=>'City'),
    			array('title'=>'KVK Number','type'=>'text','name'=>'kvkNumber','id'=>'reg-kvkNumber','placeholder'=>'KVK Number'),
    			array('title'=>'Telephone','type'=>'text','name'=>'telephone','id'=>'reg-telephone','placeholder'=>'Telephone'),
    	);
    	$basic = Array(
    			'css'=>array('register'),
    			'js'=>array('register')
    	);
    	$data = Array();
    	$data['type'] = 'Owner';
    	$data['form'] = $form;
    	$this->lang->load('demo');
    	$this->lang->load('registerOwner');
    	$this->load->view ('basic/common_basic.php',$basic);
    	$this->load->view ('Yuchen/register',$data);
    	$this->load->view ('snippets/footer');
    }

}
