<?php

class notificationmodel extends CI_Model{
	function notificationmodel() {
		parent::__construct();
	}
	
	/**
	 * 
	 *
	 * @return	
	 * @author	Yuchen Liang
	 * @version 1.0 08-08-13
	 *
	 */
	public function getNotification($cuid){
		$result = selectSql('Notification',array('NotifiToID'=>$cuid));
		if ($result->num_rows() != 0){
			$result_array = $result->result_array();
			return $result_array;
		}
		return null;
	}
	
}