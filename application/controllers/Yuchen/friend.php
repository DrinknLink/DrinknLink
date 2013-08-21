<?php

class friend extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('domain');
        $this->load->helper('dbsql');
        session_start();
    }

    public function index() {
    	checkTopDomain();
    	checkLogin();

    	$basic = Array(
    			'css'=>array('friend'),
    			'js'=>array('friend')
    	);
    	$data = Array();
    	$this->lang->load('demo');
    	$this->load->view ('basic/common_basic.php',$basic);
    	$this->load->view ('Yuchen/friend',$data);
    	$this->load->view ('snippets/footer');
    }
    
    /**
     * Friend actions 
     */
    public function sendRequest(){
    	$cuid = $_SESSION['userinfo']['userID'];
    	$uid = $_POST['uid'];
    	
    	$this->load->model('friendmodel');
    	$barInfo = $this->friendmodel->sendRequest($cuid,$uid);
   		echo json_encode( array('code' => '100000', 'msg'=>'success'));
    }
    
    public function confirmRequest(){
    	$cuid = $_SESSION['userinfo']['userID'];
    	$notifiID = $_POST['notifiID'];
    	 
    	$this->load->model('friendmodel');
    	$barInfo = $this->friendmodel->confirmRequest($cuid,$notifiID);
    	echo json_encode( array('code' => '100000', 'msg'=>'success'));
    }
    
    public function ignoreRequest(){
    	$cuid = $_SESSION['userinfo']['userID'];
    	$uid = $_POST['uid'];
    	
    	$this->load->model('friendmodel');
    	$barInfo = $this->friendmodel->ignoreRequest($cuid,$uid);
    	echo json_encode( array('code' => '100000', 'msg'=>'success'));
    }
    
    public function deleteFriend(){
    	$cuid = $_SESSION['userinfo']['userID'];
    	$uid = $_POST['uid'];
    	 
    	$this->load->model('friendmodel');
    	$barInfo = $this->friendmodel->deleteFriend($cuid,$uid);
    	echo json_encode( array('code' => '100000', 'msg'=>'success'));
    }


    /**
     * 	getFriendByUid
     *	@author Yuchen
     *	@version 1.0 16-08-2013
     */
    public function getFriendByUid(){
    	$cuid = @$_POST['uid'] ? $_POST['uid'] : $_SESSION['userinfo']['userID'];
    	
    	$this->load->model('friendmodel');
    	$friendList = $this->friendmodel->getFriendByUid($cuid);
    	$data = Array(
    			'friendList'=>$friendList,
    	);
    	echo json_encode( array('code' => '100000', 'msg'=>'success', 'data'=>$friendList));
    	exit;
    }
}
    