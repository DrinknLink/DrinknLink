<?php
/**
 * First page of Administration
 * 
 * @author Yuchen
 * @version 1.0 11-08-2013
 */

class help extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('domain');
        $this->load->helper('dbsql');
        session_start();
    }

    public function help() {
        checkTopDomain();
		checkAdminLogin();
		
        $cuid = $_SESSION['ownerinfo']['ownerID'] ? 1 : 1;
        
        $this->load->model('ownermodel');
        $currentOwnerinfo = $this->ownermodel->getInfoByID($cuid);
        
        $this->load->model('barmodel');
        $myBarinfoList = $this->barmodel->getBarinfoListByOwner($cuid);
        
        $basic = Array(
        		'css'=>array('admin/index'),
        		'js'=>array('admin/index')
        );
        $data = array(
        		'currentOwnerinfo'=>$currentOwnerinfo,
        		'myBarinfoList'=>$myBarinfoList
        );
        $this->lang->load('demo');
        $this->load->view ('basic/common_basic.php',$basic);
        $this->load->view("admin/index",$data);
    	$this->load->view("snippets/footer");
    }
    
    function editOwnerinfo(){
    	$cuid = $_SESSION['userinfo']['userID'];
    	$bid = $_POST['bid'];
    	
    	$this->load->model('barmodel');
    	$result = $this->barmodel->addFavourite($cuid,$bid);
    	if($result){
    		echo json_encode( array('code' => '100000', 'msg'=>'add success'));
    	}
    	exit;
    }
    
    function createBar(){
    	
    }
    
    function editBarinfo(){
    	
    }
    
    function deleteBar(){
    	
    }
    
    
}
