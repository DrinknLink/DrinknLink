	</head>
	<body>
		<div id="bg" class="bg" style="display:none;"></div>
		<div class="modal hide" id="loginModal">
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
			    New To DNL?
			    <a href="registerUser" class="btn btn-primary">Register</a>
		    </div>
	    </div>