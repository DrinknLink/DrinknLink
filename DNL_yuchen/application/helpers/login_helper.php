<?php

function checkLogin(){
    if(empty($_SESSION['user_info'])){
        if(empty($_COOKIE['username']) || empty($_COOKIE['password'])){
            header("location:login.php?req_url=".$_SERVER['REQUEST_URI']);
        }else{
            $user = getUser($_COOKIE['username'],$_COOKIE['password']);
            if(empty($user)){
                header("location:login.php?req_url=".$_SERVER['REQUEST_URI']);
            }else{
                $_SESSION['user_info'] = $user;
            }
        }
    }
}

function logout(){
	unset($_SESSION['user_info']);
	if(!empty($_COOKIE['username']) || !empty($_COOKIE['password'])){
		setcookie("username", null, time()-3600*24*7);
		setcookie("password", null, time()-3600*24*7);
	}
}

// $username = trim($_POST['username']);
// $password = md5(trim($_POST['password']));
// $validatecode = $_POST['validateCode'];
// $ref_url = $_GET['req_url'];
// $remember = $_POST['remember'];
// $err_msg = '';

// if($validatecode!=$_SESSION['checksum']){
// 	$err_msg = "��֤�벻��ȷ";
// }elseif($username=='' || $password==''){
// 	$err_msg = "�û��������붼����Ϊ��";
// }else{
// 	$row = getUser($username,$password);
// 		$_SESSION['user_info'] = $row;
// 		//����û�ѡ���ˣ���¼��¼״̬�Ͱ��û����ͼ����ܵ�����ŵ�cookie����
// 		if(!empty($remember)){
// 			//����һ��
// 			setcookie("username", $username, time()+3600*24*7);
// 			setcookie("password", $password, time()+3600*24*7);
// 		}
// 		if(strpos($ref_url,"login.php") === false){
// 			header("location:".$ref_url);
// 		}else{
// 			header("location:main_user.php");
// 		}
