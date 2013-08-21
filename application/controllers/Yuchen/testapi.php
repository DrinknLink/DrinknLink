<?php

class testapi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('domain');
        session_start();
    }

    public function index() {
    	checkTopDomain();
    	checkLogin();
    	
    	$this->load->model('t');
    	
    	$request_token = $this->t->request_token();

    	$result = explode('&',$request_token);
    	foreach($result as $key => $value){
    		$result[$key] = explode('=',$value);
    		$result_array[$result[$key][0]] = $result[$key][1];
    	}
    	
		$this->t->authorize($result_array);
		
    }

}
