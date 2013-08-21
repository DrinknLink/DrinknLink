<?php

/**
 * Account 
 *
 * @return	json
 * @author	Dario Sagud
 * @version 1.0 15-08-13
 *
 */
class general extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('dbsql');
    }

    public function index() {
        
    }

    /**
     * 
     * Collecting general information with POST and insert it to the database (table: Bar)
     * 
     */
    public function addGeneralInfo($barId) {
        $naamCafe = $_POST['naamCafe'];
        $adres = $_POST['adres'];
        $postcode = $_POST['postcode'];
        $plaats = $_POST['plaats'];
        $telefoon = $_POST['telefoon'];
        $email = $_POST['email'];
        $website = $_POST['website'];

        updateSql('Bar', array("BarID" => $barId), array(
            'BarName' => $naamCafe,
            'BarAddress' => $adres,
            'BarPostcode' => $postcode,
            'BarTown' => $plaats,
            'BarTelefon' => $telefoon,
            'BarEmail' => $email,
            'BarWebsite' => $website
                )
        );

        echo json_encode(array('code' => '100000', 'msg' => 'bar general info update successfully'));
        exit;
    }

    /**
     * 
     * Collecting aboutBar information with POST and insert it to the database (table: Bar)
     * 
     */
    public function addAboutBar($barId) {
        $aboutBar = $_POST['aboutBar'];

        updateSql('Bar', array("BarID" => $barId), array(
            'BarAbout' => $aboutBar
                )
        );

        echo json_encode(array('code' => '100000', 'msg' => 'bar about update successfully'));
        exit;
    }
    
    /**
     * 
     * Collecting history information with POST and insert it to the database (table: Bar)
     * 
     */
    public function addHistory($barId) {
        $barHistory = $_POST['barHistory'];

        updateSql('Bar', array("BarID" => $barId), array(
            'BarHistory' => $barHistory
                )
        );

        echo json_encode(array('code' => '100000', 'msg' => 'bar about update successfully'));
        exit;
    }

}