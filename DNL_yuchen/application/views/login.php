<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Drink & Link</title>
        <base href="<?php echo base_url() ?>"/>

        <!-- CSS -->
        <link href="common/css/bootstrap/bootstrap.css" rel="stylesheet" />
        <link href="common/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />

        
        <!-- JS -->
        <script type="text/javascript" src="common/js/jquery/jquery.js"></script>
        <script type="text/javascript" src="common/js/jquery/jquery.validate.js"></script>
        <script type="text/javascript" src="common/js/jquery/jquery.metadata.js"></script>
        <!-- Bootstrap -->
        <script type="text/javascript" src="common/js/bootstrap/bootstrap.js"></script>
        <!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="common/js/googleMaps.js"></script> 
        
        <script type="text/javascript" src="common/js/public.js"></script>
        <script type="text/javascript" src="common/js/account.js"></script>

        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>
    <body>
    	<div style="height:200px;"></div>
		<div class="container login">
			<div class="row">
<!-- 				<div class="span6"> -->
<!-- 					<iframe id="ytplayer" type="text/html" width="500" height="300" src="https://www.youtube.com/embed/CzSCi-uTh94" frameborder="0" allowfullscreen></iframe> -->
<!-- 				</div> -->
				<div class="span6">
					<div class="tab-content">
						<!-- Login Tab -->
						<div class="tab-pane active" id="login">
							<form method="post" action='javascript:_login();' name="login_form">
							   	<p><input type="text" class="span3" name="eid" id="login-modal-email" placeholder="Email"></p>
						    	<p><input type="password" class="span3" name="passwd" id="login-modal-password" placeholder="Password"></p>
						    	<p><a class="" href="javascript:FB.login();"><img src="common/img/login_with_facebook.png"></a></p>
								<p><a class=""><img src="common/img/login_with_twitter.png"></a></p>
						    	<p><button type="submit" class="btn btn-primary">Log in</button>
						    		<a href="#forgotpassword" data-toggle="tab">Forgot Password?</a>
						    	</p>
							</form>
						    New To DNL?
						    <a href="#register" data-toggle="tab" class="btn btn-primary">Register</a>
					    </div>
						<!-- Register Tab -->
						<div class="tab-pane fade" id="register">
							<form id="frm-register" method="post" action='javascript:_register();' name="login_form">
							   	<p><input type="text" class="" name="reg_email" id="reg-email" placeholder="Email"></p>
						    	<p><input type="password" class="" name="reg_password" id="reg-password" placeholder="Password"></p>
						    	<p><a class="" href="javascript:FB.login();"><img src="common/img/login_with_facebook.png"></a></p>
								<p><a class=""><img src="common/img/login_with_twitter.png"></a></p>
						    	<p><button type="submit" class="btn btn-primary">Sign in</button></p>
							</form>
						    Already have DNL account?
						    <a href="#login" data-toggle="tab" class="btn btn-primary">Login</a>
					    </div>
					</div>
				</div>
			</div>
		</div>
<!-- 		<div class="container app"> -->
<!-- 			<a class=""><img src="common/img/icons/app-ios.png"></a> -->
<!-- 			<a class=""><img src="common/img/icons/app-android.png"></a> -->
<!-- 		</div> -->
	</body>
</html>
