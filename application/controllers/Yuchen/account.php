<?php
/**
 * Account 
 *
 * @return	json
 * @author	Yuchen Liang
 * @version 1.0 02-08-13
 *
 */
class account extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('dbsql');
        session_start();
    }

    public function index() {
    }

    /**
     * Facebook connection
     *
     * @return	json
     * @author	Yuchen Liang
     * @version 1.2 09-08-13
     *
     */
    public function connection_fb(){
    	$name = $_POST['name'];
    	$fbID = $_POST['fbID'];
        
    	//check email
    	$result = selectSql('Account',array('AccountFBID'=>$fbID));
    	setcookie("fbID", $fbID, time()+3600*24*7);
    	if ($result->num_rows() != 0){//login
    		$row = $result->row_array();
    		$result = selectSql('User',array('AccountID'=>$row['AccountID']));
    		if ($result->num_rows() != 0){
    			$row = $result->row_array();
	    		$_SESSION['userinfo'] = array('userID'=>$row['UserID'],'userName'=>$row['UserName']);
	    		echo json_encode( array('code' => '100000', 'msg'=>'login success'));
	    		exit;
    		}
    	}else{//sign up
    		insertSql('Account',
	    		array(
	    		'AccountFBID'=>$fbID,
	    		'AccountType'=>1
	    		)
    		);
    		insertSql('User',
	    		array(
	    		'AccountID'=>lastInsertID(),
				'UserName'=>$name
	    		)
    		);
    		$_SESSION['userinfo'] = array('userName'=>$name);
    		echo json_encode( array('code' => '100001', 'msg'=>'register success'));
    		exit;
    	}
    	
    }
    
    /**
     * Twitter connection
     *
     * @return	json
     * @author	Yuchen Liang
     * @version 1.0 02-08-13
     *
     */
    public function connection_tw(){
    	//
    	//***********
    	//setcookie("twID", $twID, time()+3600*24*7);
    	//check email
    	$result = selectSql('Account',array('AccountTWID'=>$twID));
    	if ($result->num_rows() != 0){//login
    		$row = $result->row_array();
    		$result = selectSql('User',array('AccountID'=>$row['AccountID']));
    		if ($result->num_rows() != 0){
    			$row = $result->row_array();
    			$_SESSION['userinfo'] = array('userName'=>$row['UserName']);
    			echo json_encode( array('code' => '100000', 'msg'=>'login success'));
    			exit;
    		}
    	}else{//sign up
    		insertSql('Account',
    		array(
	    		'AccountTWID'=>$twID,
	    		'AccountType'=>1
	    		)
    		);
    		insertSql('User',
	    		array(
	    		'AccountID'=>lastInsertID(),
	    		'UserName'=>$userName
	    		)
    		);
    		$_SESSION['userinfo'] = array('userName'=>$userName);
    		echo json_encode( array('code' => '100001', 'msg'=>'register success'));
    		exit;
    	}
    }
    
    
    /** NOT USE ***************************************
     * Facebook Login
     *
     * @return	json
     * @author	Yuchen Liang
     * @version 1.0 23-07-13
     *
     */
    public function loginFB(){
    	//POST
    	//     	$req_url = $_POST['req_url'];
    	$AccountFBID = $_POST['fbID'];
    	$result = selectSql('Account',array('AccountFBID'=>$AccountFBID));//is email exsited
    	if ($result->num_rows() == 0){
    		echo json_encode( array('code' => '100001', 'msg'=>'Facebook Account never registered'));
    		exit;
    	}else{
    		$row = $result->row_array();
    		$result = selectSql('User',array('AccountID'=>$row['AccountID']));
    		if ($result->num_rows() != 0){
    			$row = $result->row_array();
	    		$_SESSION['userinfo'] = array('userName'=>$row['UserFirstName'].' '.$row['UserLastName']);
	    		echo json_encode( array('code' => '100000', 'msg'=>'login success'/*, 'req_url'=>$req_url*/));
	    		exit;
    		}
   		}
    }

    /** NOT USE
     * Register User FB
     *
     * @return	json
     * @author	Yuchen Liang
     * @version 1.0 23-07-13
     *
     */
    public function registerUserFB(){
    	$firstName = $_POST['firstName'];
    	$lastName = $_POST['lastName'];
    	$fbID = $_POST['fbID'];
    
    	//check email
    	$result = selectSql('Account',array('fbID'=>$fbID));
    	if ($result->num_rows() != 0){
    		echo json_encode( array('code' => '100001', 'msg'=>'email used'));
    		exit;
    	}
    	 
    	insertSql('Account',
	    	array(
		    	'AccountFBID'=>$fbID,
		    	'AccountType'=>1
	    	)
    	);
    	insertSql('User',
	    	array(
		    	'AccountID'=>lastInsertID(),
		    	'UserFirstName'=>$firstName,
		    	'UserLastName'=>$lastName
	    	)
    	);
    
    	// 		$_SESSION['userinfo'] = array('UserEmail'=>$UserEmail);
    
    	//     	if(strpos($req_url,"login") != false || $req_url == null){
    	//     		$req_url = "main";
    	//     	}
    	echo json_encode( array('code' => '100000', 'msg'=>'register success'/*, 'req_url'=>$req_url*/));
    	exit;
    }
    
    /**  NOT USE
     * Register User TW
     *
     * @return	json
     * @author	Yuchen Liang
     * @version 1.0 31-07-13
     *
     */
    public function registerUserTW(){
    	$this->load->model('t');
    
    	$request_token = $this->t->request_token();
    	$result = explode('&',$request_token);
    	 
    	foreach($result as $key => $value){
    		$result[$key] = explode('=',$value);
    		$result_array[$result[$key][0]] = $result[$key][1];
    	}
    
    	$authorize_url = $this->t->authorize($result_array);//redirect
    	echo json_encode( array('code' => '100000', 'msg'=>'register success', 'authorize_url'=>$authorize_url));
    	exit;
    }
    /**
     *  ***************************************
     */
    
    
    /**
     * Register User
     *
     * @return	json
     * @author	Yuchen Liang
     * @version 1.2 08-08-13
     *
     */
    public function registerUser(){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = self::hashSalt($_POST['password']);
		//check
		$result = selectSql('Account',array('AccountEmail'=>$email));
		if ($result->num_rows() != 0){
			echo json_encode( array('code' => '100001', 'msg'=>'email used'));
			exit;
		}
		
    	insertSql('Account',
    		array(
    			'AccountEmail'=>$email,
    			'AccountPassword'=>$password,
    			'AccountType'=>1
    		)
    	);
    	insertSql('User',
    		array(
    		'AccountID'=>lastInsertID(),
			'UserName'=>$name,
    		)
    	);
    	
		$_SESSION['userinfo'] = array('userName'=>$name,'userID'=>lastInsertID());

    	echo json_encode( array('code' => '100000', 'msg'=>'register success'));
    	exit;
    }
    
    /**
     * Register Owner
     *
     * @return	json
     * @author	Yuchen Liang
     * @version 1.1 22-07-13
     *
     */
    public function registerOwner(){
		$post = $_POST;
		$this->load->model('accountmodel');
    	//check
    	$result = selectSql('Account',array('AccountEmail'=>$post['email']));
    	if ($result->num_rows() != 0){
    		echo json_encode( array('code' => '100001', 'msg'=>'email used'));
    		exit;
    	}
    	
    	$post['password'] = self::hashSalt($post['password']);
    	
    	
    	$this->accountmodel->signupOwner($post);

    	// 		$_SESSION['userinfo'] = array('UserEmail'=>$UserEmail);
    	echo json_encode( array('code' => '100000', 'msg'=>'register success'));
    	exit;
    }

    /**
     * Account Login
     *
     * @return	json
     * @author	Yuchen Liang
     * @version 1.1 22-07-13
     *
     */
    public function login(){
    	//POST
    	$AccountEmail = $_POST['email'];
    	$AccountPassword = self::hashSalt($_POST['password']);//save hash password with salt in database
    	$result = selectSql('Account',array('AccountEMail'=>$AccountEmail));//is email exsited
    	if ($result->num_rows() == 0){
    		echo json_encode( array('code' => '100001', 'msg'=>'Email does not exist'));
    		exit;
    	}else{
// 			setcookie("accountEmail", $AccountEmail, time()+3600*24*7);
//     		setcookie("accountKey", $AccountPassword, time()+3600*24*7);
    		$row = $result->row_array();
    		if($row['AccountPassword'] == $AccountPassword){//is password correct
    			if($row['AccountType'] == 0){//Owner
    				$result = selectSql('Owner',array('AccountID'=>$row['AccountID']));
    				if ($result->num_rows() != 0){
    					$row = $result->row_array();
    					$_SESSION['ownerinfo'] = array('ownerID'=>$row['OwnerID'],'ownerName'=>$row['OwnerName']);
    					session_write_close();
    					echo json_encode( array('code' => '100003', 'msg'=>'Owner login success'));
    					exit;
    				}
    			}else if($row['AccountType'] == 1){//User
    				$result = selectSql('User',array('AccountID'=>$row['AccountID']));
    				if ($result->num_rows() != 0){
    					$row = $result->row_array();
 						$_SESSION['userinfo'] = array('userID'=>$row['UserID'],'userName'=>$row['UserName']);
    					session_write_close();
    					echo json_encode( array('code' => '100004', 'msg'=>'User login success'));
    					exit;
    				}    				
    			}
    		}else{
    			echo json_encode( array('code' => '100002', 'msg'=>'wrong password'));
    			exit;
    		}
    	}
    }
    
    /**
     * Account Logout
     *
     * @return	json
     * @author	Yuchen Liang
     * @version 1.1 22-07-13
     *
     */
    public function logout(){
		//clear session
    	unset($_SESSION['userinfo']);
    	unset($_SESSION['ownerinfo']);
    	//clear cookie
       	setcookie("accountEmail", '', time()-3600);
    	setcookie("accountKey", '', time()-3600);
    	setcookie("fbID", '', time()-3600);
    	setcookie("teID", '', time()-3600);
    	echo json_encode( array('code' => '100000', 'msg'=>'logout success'));
    	exit;
    }
    
    /**
     * Check Email for AJAX
     *
     * @return	json
     * @author	Yuchen Liang
     * @version 1.0 22-07-13
     *
     */
    public function isEmailUsed(){
    	$email = $_POST['email'];
    	$type = $_POST['type'];
    	$result = selectSql('Account',array('AccountEmail'=>$email,'AccountType'=>$type));
    	if ($result->num_rows() > 0){
    		echo json_encode(false);
    		exit;
    	}else{
    		echo json_encode(true);
    		exit;
    	}
    }
    
    /**
     * make hash password with salt
     *
     * @return	String
     * @author	Yuchen Liang
     * @version 1.0 22-07-13
     *
     */
    public function hashSalt($password){
    	$salt = sha1(md5($password));
    	$password = md5($password.$salt);
    	return $password;
    }
    
}
