<?php
/**
 * Administration with PJAX
 * Optimized Header
 * Optimized loading animation
 * 
 * @author Dario
 * @author Yuchen
 * @version 1.0 11-08-2013
 */

class admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('domain');
        session_start();
    }

    public function index() {
        checkTopDomain();
        checkAdminLogin();

        $basic = Array(
        		'css'=>array('_admin'),
        		'js'=>array('admin')
        );
        $data = array();
        $data['tab_content'] = array(
        	'content'=>array(
        			array('content'=>'General info','ajax'=>'generalInfo'),
        			array('content'=>'Events & Promotions','ajax'=>'eventsPromotions'),
        			array('content'=>'Interaction & Social Media','ajax'=>'interactionSM'),
        			array('content'=>'Reviews','ajax'=>'reviews'),
        			array('content'=>'Menu & Reservations','ajax'=>'menuReservations'),
        			array('content'=>'Media','ajax'=>'media')
        			),
        	'design'=>array(),
        	'category'=>array(),
        	'payment'=>array()
        );
        $this->lang->load('demo');
        $this->load->view ('basic/common_basic.php',$basic);
        $this->load->view("admin/bar",$data);
    	$this->load->view("snippets/footer");
    }

    public function sideTab(){
    	$type = array(
    			'Layout',
    			'generalInfo',
    			'eventsPromotions',
    			'interactionSM',
    			'reviews',
    			'menuReservations',
    			'media'
    			);
    	$data = Array();
    	$html = $this->load->view("Dario/miniNavbar/".$type[$_POST['type']], $data, TRUE);
    	echo json_encode( array('code' => '100000', 'msg'=>'success', 'html'=>$html));
    }
    
}
