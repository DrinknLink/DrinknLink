<?php

class admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('domain');
    }

    public function index() {
        checkTopDomain();
        checkLogin();
    	$this->load->view("Yuchen/admin");
    }
    
    // AJAX left side nav (with switch)
    public function algemene() {
    	$data = Array();
        $d = $this->load->view("Yuchen/leftsideNav/algemenePage", $data, TRUE);
        echo json_encode( array('code' => '100001', 'msg'=>'success', 'html'=>$d));
    }
    
    public function helpImage() {
        $data = Array();
        $d = $this->load->view("Yuchen/leftsideNav/helpImagePage", $data, TRUE);
        echo json_encode( array('code' => '100001', 'msg'=>'success', 'html'=>$d));
    }
    
    public function openingstijden() {
    	$data = Array();
        $d = $this->load->view("Yuchen/leftsideNav/openingstijdenPage", $data, TRUE);
        echo json_encode( array('code' => '100001', 'msg'=>'success', 'html'=>$d));
    }
    
    public function about() {
        $data = Array();
        $d = $this->load->view("Yuchen/leftsideNav/aboutPage", $data, TRUE);
        echo json_encode( array('code' => '100001', 'msg'=>'success', 'html'=>$d));
    }
    
    public function crew() {
    	$data = Array();
        $d = $this->load->view("Yuchen/leftsideNav/crewPage", $data, TRUE);
        echo json_encode( array('code' => '100001', 'msg'=>'success', 'html'=>$d));
    }
    
    public function news() {
        $data = Array();
        $d = $this->load->view("Yuchen/leftsideNav/newsPage", $data, TRUE);
        echo json_encode( array('code' => '100001', 'msg'=>'success', 'html'=>$d));
    }
    
    public function history() {
    	$data = Array();
        $d = $this->load->view("Yuchen/leftsideNav/historyPage", $data, TRUE);
        echo json_encode( array('code' => '100001', 'msg'=>'success', 'html'=>$d));
    }
    
    public function beers() {
        $data = Array();
        $d = $this->load->view("Yuchen/leftsideNav/beersPage", $data, TRUE);
        echo json_encode( array('code' => '100001', 'msg'=>'success', 'html'=>$d));
    }
    // END OF AJAX left side nav (with switch)
    
    // AJAX mini navbar
    public function pageLayout() {
        $data = Array();
        $d = $this->load->view("Yuchen/miniNavbar/pageLayoutPage", $data, TRUE);
        echo json_encode( array('code' => '100001', 'msg'=>'success', 'html'=>$d));
    }
    
    public function generalInfo() {
        $data = Array();
        $d = $this->load->view("Yuchen/miniNavbar/generalInfoPage", $data, TRUE);
        echo json_encode( array('code' => '100001', 'msg'=>'success', 'html'=>$d));
    }
    
    public function eventsPromotions() {
        $data = Array();
        $d = $this->load->view("Yuchen/miniNavbar/eventsPromotionsPage", $data, TRUE);
        echo json_encode( array('code' => '100001', 'msg'=>'success', 'html'=>$d));
    }
    
    public function interactionSM() {
        $data = Array();
        $d = $this->load->view("Yuchen/miniNavbar/interactionSMPage", $data, TRUE);
        echo json_encode( array('code' => '100001', 'msg'=>'success', 'html'=>$d));
    }
    
    public function reviews() {
        $data = Array();
        $d = $this->load->view("Yuchen/miniNavbar/reviewsPage", $data, TRUE);
        echo json_encode( array('code' => '100001', 'msg'=>'success', 'html'=>$d));
    }
    
    public function menuReservations() {
        $data = Array();
        $d = $this->load->view("Yuchen/miniNavbar/menuReservationsPage", $data, TRUE);
        echo json_encode( array('code' => '100001', 'msg'=>'success', 'html'=>$d));
    }
    
    public function media() {
        $data = Array();
        $d = $this->load->view("Yuchen/miniNavbar/mediaPage", $data, TRUE);
        echo json_encode( array('code' => '100001', 'msg'=>'success', 'html'=>$d));
    }
    // END OF AJAX mini navbar
    
}
