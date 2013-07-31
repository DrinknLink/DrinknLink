<?php

function checkTopDomain(){
	//add www to top domain	
	if($_SERVER['HTTP_HOST'] == 'drinknlink.com')
		redirect('http://www.drinknlink.com'.$_SERVER['REQUEST_URI']);
}