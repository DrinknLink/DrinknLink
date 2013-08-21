<?php

class eventmodel extends CI_Model{
	function notificationmodel() {
		parent::__construct();
	}
	
	/**
	 * getEventsByID
	 *
	 * @return	
	 * @author	Yuchen Liang
	 * @version 1.1 19-08-13
	 *
	 */
	public function getEventByBid($bid){
		$sql = 'SELECT `Event`.*,`Bar`.`BarName` FROM `Event` LEFT JOIN `Bar` ON `Event`.`BarID` = `Bar`.`BarID` WHERE `Event`.`BarID` = '.$bid;
		$result = execSql($sql);
		if ($result->num_rows() != 0){
			$result_array = $result->result_array();
			return $result_array;
		}
		return null;
	}
	
}