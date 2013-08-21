<?php

function checkTopDomain(){
	//add www to top domain	
	if($_SERVER['HTTP_HOST'] == 'drinknlink.com')
		redirect(base_url().$_SERVER['REQUEST_URI']);
}

function checkLogin(){
	if(@$_SESSION['ownerinfo']){//Owner
		$homepage = 'Dario/admin';
	}else if(@$_SESSION['userinfo']){//User
		$homepage = 'Yuchen/home';
	}else{
		if(isset($_COOKIE['accountEmail'])){
			//relogin
			return array('code'=>'100000','accountEmail'=>$_COOKIE['accountEmail'],'accountkey'=>$_COOKIE['accountKey']);
		}elseif(isset($_COOKIE['fbID'])){
			//check current FB user
			return array('code'=>'100001','fbID'=>$_COOKIE['fbID']);
		}elseif(isset($_COOKIE['twID'])){
			//check current TW user
			return array('code'=>'100002','twID'=>$_COOKIE['twID']);
		}
		return false;
	}
	
	if(strpos($_SERVER['REQUEST_URI'],"register"))
		redirect(base_url().$homepage);
	
	return true;//loginned
}

function checkAdminLogin(){
	if(!isset($_SESSION['ownerinfo'])){
		redirect(base_url().'Yuchen/'.'home');
	}
}

function logout(){
	unset($_SESSION['userinfo']);
}