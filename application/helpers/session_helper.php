<?php
/**
     * session and cookie
     *
     * @return	String
     * @author	Yuchen Liang
     * @version 1.0 01-08-13
     *
     */
    function setSession($key,$s_array){
    	$_SESSION[$key] = $s_array;
    	return;
    }
    
    function clearSession($key){
    	unset($_SESSION[$key]);
    	return;
    }
