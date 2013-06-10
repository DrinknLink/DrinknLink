<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <base href="<?php echo base_url() ?>"/>
        <title>Drink & Link</title>
     
        <link href="common/css/bootstrap/bootstrap.css" rel="stylesheet" />
        <link href="common/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
	</head>
	<body>
        <!-- JQuery -->
        <script type="text/javascript" src="common/js/jquery/jquery.js"></script>
		<!-- Bootstrap -->
        <script type="text/javascript" src="common/js/bootstrap/bootstrap.js"></script>
        
	    <!-- Button to trigger modal -->
	    <a href="#myModal" role="button" class="btn" data-toggle="modal">Login to Drink & Link</a>
	     
	    <!-- Modal -->
	    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-header">
			    <button type="button" class="close" id="modal-login-close">x</button>
			    <h3>Login to Drink & Link</h3>
			</div>
			    <div class="modal-body">
			    <form method="post" action='javascript:_login();' name="login_form">
			    	<p><input type="text" class="span3" name="eid" id="login-modal-email" placeholder="Email"></p>
			    	<p><input type="password" class="span3" name="passwd" id="login-modal-password" placeholder="Password"></p>
			    	<p><button type="submit" class="btn btn-primary">Sign in</button>
			    		<a href="#">Forgot Password?</a>
				    </p>
			    </form>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			    New To DNL?
			    <a href="registerUser" class="btn btn-primary">Register</a>
		    </div>
	    </div>
	</body>
</html>