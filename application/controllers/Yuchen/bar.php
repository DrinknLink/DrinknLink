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
     * Actions of favourite
     * 
     * @author Yuchen
     * @version 1.0 08-08-2013
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
     * 
     * @author Yuchen
     * @version 1.0 16-08-2013
     */
    public function getSideTab(){
    	$type = @$_POST['type'] ? $_POST['type'] : 'general'; 
   		$data = Array();
    	$html = $this->load->view('barView/'.$type,$data,true);
    	echo json_encode( array('code' => '100000', 'msg'=>'success', 'html'=>$html));
    }
    
}
