<?php

class profil extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('domain');
        $this->load->helper('dbsql');
        session_start();
    }

    public function index() {
    	checkTopDomain();
    	checkLogin();
    	
    	$cuid = @$_SESSION['userinfo']['userID'];
    	$uid = @$_GET['uid'] ? $_GET['uid'] : $cuid;
    	
    	//profil info
    	$this->load->model('profilmodel');
    	$profilInfo = $this->profilmodel->getUserInfo($uid);
    	 
    	//friend relationship with current user(cuid)
    	$this->load->model('friendmodel');
    	$friendRelationship = $this->friendmodel->getRelationship($cuid,$uid);
    	
    	//favourite list
    	
    	
    	$basic = Array(
    			'css'=>array('profil'),
    			'js'=>array('profil')
    	);
    	$data = Array(
    		'profilInfo'=>$profilInfo,
    		'friendRelationship'=>$friendRelationship
    	);
    	$this->lang->load('demo');
    	$this->load->view ('basic/common_basic.php',$basic);
    	$this->load->view ('Yuchen/profil',$data);
    	$this->load->view ('snippets/footer');
    	
    }
}
