<?php

class bar extends CI_Controller {

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
    	$bid = @$_GET['bid'] ? $_GET['bid'] : 1;
    	$this->load->model('barmodel');
    	$barInfo = $this->barmodel->getBarInfo($bid);    	
    	
    	$isFavourite = $this->barmodel->isFavourite($cuid,$bid);
    	$tabContent = $this->barmodel->getTabContent($bid);
    	
    	
    	$basic = Array(
    			'css'=>array('bar'),
    			'js'=>array('bar')
    			);
    	$data = Array(
    			'barInfo'=>$barInfo,
    			'isFavourite'=>$isFavourite,
    			'tabContent'=>$tabContent
    			);
    	$this->lang->load('demo');
    	$this->load->view ('basic/common_basic.php',$basic);
    	$this->load->view ('Yuchen/bar',$data);
    	$this->load->view ('snippets/footer');
    }
    
    /**
     * Functions
     */
    public function isFavourite(){
    	$cuid = $_SESSION['userinfo']['userID'];
    	$bid = $_POST['bid'];
    	 
    	$this->load->model('barmodel');
    	$barInfo = $this->barmodel->addFavourite($cuid,$bid);
    }
    
    public function addFavourite(){
    	$cuid = $_SESSION['userinfo']['userID'];
    	$bid = $_POST['bid'];
    	 
    	$this->load->model('barmodel');
    	$result = $this->barmodel->addFavourite($cuid,$bid);
    	if($result){
    		echo json_encode( array('code' => '100000', 'msg'=>'add success'));
    	}
    	exit;    	
    }
    
    public function cancelFavourite(){
    	$cuid = $_SESSION['userinfo']['userID'];
    	$bid = $_POST['bid'];
    	 
    	$this->load->model('barmodel');
    	$result = $this->barmodel->cancelFavourite($cuid,$bid);
    	if($result){
    		echo json_encode( array('code' => '100000', 'msg'=>'cancel success'));
    	}
    	exit;
    }
    
    
    /**
     * Tabs AJAX in barpage
     */
    public function getSideTab(){
    	$type = @$_POST['type'] ? $_POST['type'] : 'general'; 
   		$data = Array();
    	$html = $this->load->view('barView/'.$type,$data,true);
    	echo json_encode( array('code' => '100000', 'msg'=>'success', 'html'=>$html));
    }
    
    
    /**
     * GetBarInfoByBid
     * 
     * @author Yuchen
     * @version 1.0 19-08-2013
     * 
     */
    public function getBarinfoByID(){
    	$isApp = !!@$_POST['isApp'];
    	$bid = @$_POST['bid'];
   	
//    		$isApp = 1;$bid=1;
   		if(!$bid){
   			echo json_encode( array('code' => '100001', 'msg'=>'miss bid'));
   			exit;
    	}
    	
    	$this->load->model('barmodel');
   		$barinfo = $this->barmodel->getBarInfo($bid);
   	
   		if($isApp){
    		echo json_encode( array('code' => '100000', 'msg'=>'success', 'data'=>$barinfo));
    	}else{
//     		$data = Array(
//    					'eventList'=>$eventList,
//    			);
//    		$html = $this->load->view ('snippets/notification',$data,true);
//     		echo json_encode( array('code' => '100000', 'msg'=>'success', 'data'=>$eventList));
    	}
   		exit;
   	}    	
}
