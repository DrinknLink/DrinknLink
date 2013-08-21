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
     *
     * @author Yuchen
     * @version 1.0 09-08-2013
     */
    public function getNotification(){
    	$cuid = $_SESSION['userinfo']['userID'];
    	 
    	$this->load->model('notificationmodel');
    	$notifications = $this->notificationmodel->getNotification($cuid);
    	$data = Array(
    			'notifications'=>$notifications,
    	);
    	$html = $this->load->view ('snippets/notification',$data,true);
    	echo json_encode( array('code' => '100000', 'msg'=>'success', 'html'=>$html));
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
