<?php

class accountmodel extends CI_Model{
	function accountmodel() {
		parent::__construct();
		$this->load->helper('dbsql');
	}
	
	/**
	 * 
	 *
	 * @return	
	 * @author	Yuchen Liang
	 * @version 1.0 31-07-13
	 *
	 */
	public function registerTW($twInfo){
		insertSql('Account',
	    	array(
	    	'AccountTWID'=>$twInfo['twID'],
	    	'AccountType'=>1
	    	)
    	);
    	insertSql('User',
	    	array(
	    	'AccountID'=>lastInsertID(),
	    	'UserName'=>$twInfo['twName']
	    	)
    	);
	}
	
	/**
	 * Account Login Model
	 *
	 * @return	
	 * @author	Yuchen Liang
	 * @version 1.0 09-08-13
	 *
	 */
	public function login(){
		
	}
	
	/**
	 * signupUser Model
	 *
	 * @return	json
	 * @author	Yuchen Liang
	 * @version 1.0 09-08-13
	 *
	 */
	public function signupUser(){
	
	}
	
	/**
	 * signupOwner Model
	 *
	 * @return	new OwnerID
	 * @author	Yuchen Liang
	 * @version 1.1 20-08-13
	 *
	 */
	public function signupOwner($post){
		$ownerName = $post['ownerName'];
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
			'OwnerName'=>$ownerName,
			'OwnerEmail'=>$email
			)
		);
		return lastInsertID();//ownerID
	}
}