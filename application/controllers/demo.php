<?php

class demo extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('domain');
//         ini_set("session.cookie_domain", DOMAIN);
        session_start();
    }

    public function index() {
    	checkTopDomain();
    	if(@$_GET['oauth_verifier'] == true){
			self::access_tokenTW();
			header('Location: '.base_url());
    		exit;
    	}
    	$basic = Array(
    			'css'=>array('demo'),
    			'js'=>array('demo')
    	);
    	$data = Array();
    	$this->lang->load('demo');
    	$this->load->view ('basic/common_basic.php',$basic);
    	$this->load->view ('demo',$data);
    	$this->load->view ('snippets/footer');
    }
    
    private function access_tokenTW(){
    	$this->load->model('t');
    	$access_token = $this->t->access_token($_GET);
    	
    	$result = explode('&',$access_token);
    	foreach($result as $key => $value){
    		$result[$key] = explode('=',$value);
    		$result_array[$result[$key][0]] = $result[$key][1];
    	}
    	
    	$_SESSION['tw']['oauth_access_token'] = $result_array['oauth_token'];
    	$_SESSION['tw']['oauth_access_token_secret'] = $result_array['oauth_token_secret'];
    	
    	$this->t->setAccessTokenTW($_SESSION['tw']);
    	
    	$twID = $access_token['user_id'];
    	$screen_name = $access_token['screen_name'];
    	
    	$tw_info = json_decode($this->t->verify_credentials(),true);
    	
    	$this->load->model('account');
    	$this->account->registerTW(array('twID'=>$tw_info['id'],'twName'=>$tw_info['name']));
    }

}
