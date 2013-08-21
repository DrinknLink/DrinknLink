<?php

class notification extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('domain');
        $this->load->helper('dbsql');
        session_start();
    }

    public function index(){
    	checkTopDomain();
    	checkLogin();
    }
    
    /**
     * getNotification
     * for web and app
     *
     * @author Yuchen
     * @version 1.1 19-08-2013
     */
    public function getNotification(){
    	$fromApp = !!$_POST['uid'];
    	$cuid = $fromApp ? $_POST['uid'] : $_SESSION['userinfo']['userID'];
    	 
    	$this->load->model('notificationmodel');
    	$notifications = $this->notificationmodel->getNotification($cuid);
    	
    	if(!$fromApp){
    		$data = Array(
    				'notifications'=>$notifications,
    		);
	    	$html = $this->load->view ('snippets/notification',$data,true);
	    	echo json_encode( array('code' => '100000', 'msg'=>'success', 'html'=>$html));
    	}else{
    		echo json_encode( array('code' => '100000', 'msg'=>'success', 'data'=>$notifications));
    	}
    	exit;
    }
    
    /**
     * Test for app
     * 
     * @author Yuchen
     * @version 1.0 14-08-2013 
     */
    public function getStatic(){
    	echo json_encode( array('code' => '100000', 'msg'=>'success', 'data'=>array('uid'=>'riz')));
    	exit;
    }
    
}
