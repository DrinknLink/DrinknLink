<?php

/**
 * Account 
 *
 * @return	json
 * @author	Dario Sagud
 * @version 1.0 13-08-13
 *
 */
class event extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('dbsql');
    }

    public function index() {
        
    }

    /* EVENTS */
    /**
     * 
     * Collecting data information with POST and insert it to the database (table: Event)
     * 
     */
    public function addEvent() {
        $eventName = $_POST['eventName'];
        $eventDesc = $_POST['eventDesc'];
        $eventBeginDate = $_POST['eventBeginDate'];
        $eventEndDate = $_POST['eventEndDate'];
        $eventStart = $_POST['eventStart'];
        $eventStop = $_POST['eventStop'];
        $eventRepeatNumber = $_POST['eventRepeatNumber'];
        $eventWebsite = $_POST['eventWebsite'];
        $eventFacebookPage = $_POST['eventFacebookPage'];
        $eventFlickr = $_POST['eventFlickr'];
        $eventYouTube = $_POST['eventYouTube'];
        $eventConnectFriends = $_POST['eventConnectFriends'];
        $eventVoucher = $_POST['eventVoucher'];
                

        insertSql('Event', array(
            'EventName' => $eventName,
            'EventDescription' => $eventDesc,
            'EventBeginDate' => $eventBeginDate,
            'EventEndDate' => $eventEndDate,
            'EventStartTime' => $eventStart,
            'EventEndTime' => $eventStop,
            'EventRepetition' => $eventRepeatNumber,
            'EventConnectFriends' => $eventConnectFriends,
            'EventVoucher' => $eventVoucher,
            'EventWebsite' => $eventWebsite,
            'EventFacebookPage' => $eventFacebookPage,
            'EventFlickr' => $eventFlickr,
            'EventYouTube' => $eventYouTube
                )
        );

        echo json_encode(array('code' => '100000', 'msg' => 'event success'));
        $this->notifyFavorites($eventName, $eventDesc);
        exit;
    }
    
    public function notifyFavorites($eventName, $eventDesc) {
        insertSql('Notification', array(
            'NotifiType' => 1,
            'NotifiTitle' => $eventName,
            'NotifiContent' => $eventDesc,
            'NotifiFromType' => 1,
            'NotifiFromID' => 1,
            'NotifiToID' => 26,
            'NotifiStatus' => 1
                )
        );
    }
    
    public function viewedEvent(){
    	$notifiID = $_POST['notifiID'];
    	 
    	updateSql('Notification', array('NotifiID' => $notifiID), array('NotifiStatus' => 2));
    	echo json_encode( array('code' => '100000', 'msg'=>'success'));
        exit;
    }
    /* END OF EVENTS */
    

}