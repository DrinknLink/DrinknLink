<?php

class ownermodel extends CI_Model{
	function ownermodel() {
		parent::__construct();
		$this->load->helper('dbsql');
	}
	
	public function getInfoByID($oid){
		$result = selectSql('Owner',array('OwnerID'=>$oid));
		if ($result->num_rows() != 0){
			$row = $result->row_array();
		}
		return $row;
	}
	
	/**
	 * signupOwner Model
	 *
	 * @return	json
	 * @author	Yuchen Liang
	 * @version 1.0 09-08-13
	 *
	 */
	public function signupOwner($post){
		$barName = $post['barName'];
		$city = $post['city'];
		$ownerName = $post['ownerName'];
		$address = $post['address'];
		$phone = $post['phoneNumber'];
		$kvkNumber = $post['kvkNumber'];
		$email = $post['email'];
		$password = $post['password'];
		
		insertSql('Account',
			array(
			'AccountEmail'=>$email,
			'AccountPassword'=>$password,
			'AccountType'=>0
			)
		);
		insertSql('Owner',
			array(
			'AccountID'=>lastInsertID(),
			'OwnerBarName'=>$barName,
			'OwnerCity'=>$city,
			'OwnerAddress'=>$address,
			'OwnerPhone'=>$phone,
			'OwnerKvkNumber'=>$kvkNumber,
			'OwnerEmail'=>$email
			)
		);
	}
}