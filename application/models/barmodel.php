<?php

class barmodel extends CI_Model{

	function barmodel() {
		parent::__construct();
	}


	/**
	 * create a new bar
	 * @author Yuchen
	 * @version 1.0 20-08-2013
	 */
	public function createBar($oid,$barinfo){
		insertSql('Bar',
			array(
				'OwnerID'=>$oid,
				'BarName'=>$barinfo['barName'],
				'BarAddress'=>$barinfo['address'],
				'BarPostcode'=>$barinfo['postcode'],
				'BarTown'=>$barinfo['city'],
				'BarTelefon'=>$barinfo['phoneNumber'],
				'BarKvkNumber'=>$barinfo['kvkNumber']
			)
		);
		return true;
	}
	
	
	/**
	 * get Barinfo by ID
	 * 
	 */
	public function getBarInfo($bid){
		$result = selectSql('Bar',array('BarID'=>$bid));
		if ($result->num_rows() != 0){
			$row = $result->row_array();
            return $row;
		}
		return;
	}
	
	/**
	 * getBarinfoListByOwner
	 * @author Yuchen
	 * @version 1.0 12-08-2013
	 */
	public function getBarinfoListByOwner($oid){
		$query = selectSql('Bar',array('OwnerID'=>$oid));
		if ($query->num_rows() != 0){
			$result = $query->result_array();
			return $result;
		}
		return;
	}
	
	/**
	 * get all Barinfo
	 */
	public function getAllBarInfo(){
		return;			
	}
	
	/**
	 * get the exist tab of barpage
	 * 
	 * @author Yuchen
	 * @version 1.0 16-08-2013
	 */
	public function getTabContent(){
		$tabContent = array(
        			array('content'=>'GENERAL INFO','ajax'=>'general'),
        			array('content'=>'EVENTS & PROMOTIONS','ajax'=>'events'),
        			array('content'=>'INTERACTION & SOCIAL MEDIA','ajax'=>'interaction'),
        			array('content'=>'REVIEW','ajax'=>'review'),
        			array('content'=>'MENU & RESERVATIONS','ajax'=>'menu'),
        			array('content'=>'MEDIA','ajax'=>'media')
        			);
		return $tabContent;
		
	}

	/**
	 * Favourite
	 */
	public function isFavourite($cuid,$bid){
		$result = selectSql('FavouriteList',array('UserID'=>$cuid,'BarID'=>$bid));
		if ($result->num_rows() != 0){
			return true;
		}
		return false;
	}
	
	public function addFavourite($cuid,$bid){
		insertSql('FavouriteList',
		   	array(
		    	'BarID'=>$bid,
	    		'UserID'=>$cuid
	   		)
   		);
   		return true;
	}
	
	public function cancelFavourite($cuid,$bid){
		deleteSql('FavouriteList',
		   	array(
		    	'BarID'=>$bid,
	    		'UserID'=>$cuid
	   		)
   		);
   		return true;
	}
	
	/**
	 * Barlist
	 */
	public function isBarlist($cuid,$bid){
		$result = selectSql('BarList',array('UserID'=>$cuid,'BarID'=>$bid));
		if ($result->num_rows() != 0){
			return true;
		}
		return false;
	}
	public function addBarlist($cuid,$bid){
	}
	
	public function deleteBarlist($cuid,$bid){
	}
	
	/**
	 * Admin insert one field
	 * @author Yuchen
	 * @version 1.0 11-08-2013
	 */
	public function saveInfo($bid,$field,$value){
		//check authorite in controller
		updateSql('Bar',
			array(
				'BarID'=>$bid,
			),
			array(
				$field=>$value
			)
		);
		return true;
	}
	
}