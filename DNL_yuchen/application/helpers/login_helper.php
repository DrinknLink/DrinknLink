<?php

function checkLogin($username){
	if($username == null){
		return false;
	}else{
		return true;
	}
}