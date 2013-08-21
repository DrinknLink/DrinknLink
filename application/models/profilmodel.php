<?php

class profilmodel extends CI_Model{

	function profilmodel() {
		parent::__construct();
	}
	
	public function getUserInfo($uid){
		$result = selectSql('User',array('UserID'=>$uid));
		if ($result->num_rows() != 0){
			$row = $result->row_array();
			return $row;
		}
		return;
	}
	
}