<?php

class F extends CI_Model{
	function F() {
		parent::__construct();
		
		require_once("facebook/facebook.php");
		
		$config = array();
		$config['appId'] = FACEBOOK_APP_ID;
		$config['secret'] = FACEBOOK_APP_SECRET;
		
		$facebook = new  Facebook($config);
		echo $facebook->getUser();
	}
	
}