<?php

function checkLogin($userinfo){
    if(!isset($userinfo)){
        if(!isset($_COOKIE['email']) || !isset($_COOKIE['password'])){
        	if(strpos($_SERVER['REQUEST_URI'],"login") === false){ 
        		header("location:".base_url()."login?req_url=".$_SERVER['REQUEST_URI']);
        	}
        }else{
            $user = login($_COOKIE['email'],$_COOKIE['password']);
        }
    }else if(strpos($_SERVER['REQUEST_URI'],"login") != false){
//     	header("location:".base_url()."main");
    }
}

function logout(){
	unset($_SESSION['userinfo']);
	if(!empty($_COOKIE['username']) || !empty($_COOKIE['password'])){
		setcookie("username", null, time()-3600*24*7);
		setcookie("password", null, time()-3600*24*7);
	}
}
