<?php

class admin extends CI_Controller {

    public static $barID = 1;

    function __construct() {
        parent::__construct();
        $this->load->helper('domain');
        $this->load->helper('dbsql');
    }

    public function index() {
        checkTopDomain();
//         $cuid = @$_SESSION['ownerinfo']['ownerID'];
//         //basic info
//         $this->load->model('profilmodel');
//         $profilInfo = $this->profilmodel->getUserInfo($uid);
//         $data = Array(
//         		'profilInfo'=>$profilInfo,
//         		'friendRelationship'=>$friendRelationship
//         );
//         $this->load->view("Dario/admin",$data);


        $data = array();
        $data['generalInfo'] = self::loadGeneralInfoFromModel();

        // load views
        $this->load->view("Dario/admin");
        $this->load->view("Dario/miniNavbar/generalInfoPage", $data);
        $this->load->view("snippets/footer");
    }

    // load generalInfo from model
    private function loadGeneralInfoFromModel() {
        $this->load->model('generalmodel');
        return $this->generalmodel->getGeneralInfoOnLoad(self::$barID);
    }

    // AJAX left side nav (with switch)
    public function algemene() {
        $data = array();
        $data['generalInfo'] = self::loadGeneralInfoFromModel();
        $d = $this->load->view("Dario/leftsideNav/algemenePage", $data, TRUE);
        echo json_encode(array('code' => '100001', 'msg' => 'success', 'html' => $d));
    }

    public function helpImage() {
        $data = Array();
        $d = $this->load->view("Dario/leftsideNav/helpImagePage", $data, TRUE);
        echo json_encode(array('code' => '100001', 'msg' => 'success', 'html' => $d));
    }

    public function openingstijden() {
        $data = Array();
        $d = $this->load->view("Dario/leftsideNav/openingstijdenPage", $data, TRUE);
        echo json_encode(array('code' => '100001', 'msg' => 'success', 'html' => $d));
    }

    public function about() {
        $data = array();
        $data['generalInfo'] = self::loadGeneralInfoFromModel();
        $d = $this->load->view("Dario/leftsideNav/aboutPage", $data, TRUE);
        echo json_encode(array('code' => '100001', 'msg' => 'success', 'html' => $d));
    }

    public function crew() {
        $data = Array();
        $d = $this->load->view("Dario/leftsideNav/crewPage", $data, TRUE);
        echo json_encode(array('code' => '100001', 'msg' => 'success', 'html' => $d));
    }

    public function news() {
        $data = Array();
        $d = $this->load->view("Dario/leftsideNav/newsPage", $data, TRUE);
        echo json_encode(array('code' => '100001', 'msg' => 'success', 'html' => $d));
    }

    public function history() {
        $data = array();
        $data['generalInfo'] = self::loadGeneralInfoFromModel();
        $d = $this->load->view("Dario/leftsideNav/historyPage", $data, TRUE);
        echo json_encode(array('code' => '100001', 'msg' => 'success', 'html' => $d));
    }

    public function beers() {
        $data = Array();
        $d = $this->load->view("Dario/leftsideNav/beersPage", $data, TRUE);
        echo json_encode(array('code' => '100001', 'msg' => 'success', 'html' => $d));
    }

    // END OF AJAX left side nav (with switch)
    // AJAX mini navbar
    public function pageLayout() {
        $data = Array();
        $d = $this->load->view("Dario/miniNavbar/pageLayoutPage", $data, TRUE);
        echo json_encode(array('code' => '100001', 'msg' => 'success', 'html' => $d));
    }

    public function generalInfo() {
        // load generalInfo from model
        $data = array();
        $data['generalInfo'] = self::loadGeneralInfoFromModel();
        $d = $this->load->view("Dario/miniNavbar/generalInfoPage", $data, TRUE);
        echo json_encode(array('code' => '100001', 'msg' => 'success', 'html' => $d));
    }

    public function eventsPromotions() {
        $data = Array();
        $d = $this->load->view("Dario/miniNavbar/eventsPromotionsPage", $data, TRUE);
        echo json_encode(array('code' => '100001', 'msg' => 'success', 'html' => $d));
    }

    public function interactionSM() {
        $data = Array();
        $d = $this->load->view("Dario/miniNavbar/interactionSMPage", $data, TRUE);
        echo json_encode(array('code' => '100001', 'msg' => 'success', 'html' => $d));
    }

    public function reviews() {
        $data = Array();
        $d = $this->load->view("Dario/miniNavbar/reviewsPage", $data, TRUE);
        echo json_encode(array('code' => '100001', 'msg' => 'success', 'html' => $d));
    }

    public function menuReservations() {
        $data = Array();
        $d = $this->load->view("Dario/miniNavbar/menuReservationsPage", $data, TRUE);
        echo json_encode(array('code' => '100001', 'msg' => 'success', 'html' => $d));
    }

    public function media() {
        $data = Array();
        $d = $this->load->view("Dario/miniNavbar/mediaPage", $data, TRUE);
        echo json_encode(array('code' => '100001', 'msg' => 'success', 'html' => $d));
    }

    // END OF AJAX mini navbar
}
