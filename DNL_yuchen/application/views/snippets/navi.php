		<!-- Navi Bar -->
		<div class="navbar navbar-fixed-top">
		    <div class="navbar navbar-inverse">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-target="#navbar-responsive-collapse" data-toggle="collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<a class="brand" href="">Drink & Link</a>
						<div id="navbar-responsive-collapse" class="nav-collapse collapse">
							<ul class="nav">
								<li class="active">
									<a href="javascript:;">Home</a>
								</li>
								<li>
									<a href="javascript:;">Notifications</a>
								</li>
								<li>
									<a href="javascript:;">Messages</a>
								</li>
								<li class="dropdown">
									<a href="javascript:;">Collections</a>
								</li>
							</ul>
							
							<form class="navbar-search pull-left" action="">
								<input class="search-query span2" type="text" placeholder="Search">
							</form>
							
							<ul class="nav pull-right">
								<li>
									<a href="#loginModal" role="button" data-toggle="modal" ><font color="red">Login</font></a>
								</li>
								<li class="divider-vertical"></li>
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
										Setting
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu">
										<li>
											<a href="javascript:;">Action</a>
										</li>
										<li>
											<a href="javascript:;">Another action</a>
										</li>
										<li>
											<a href="javascript:;">Something else here</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="javascript:;">Separated link</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Login Modal -->
		<div class="fb-root"></div>
		<script type="text/javascript" src="common/js/facebook/fbLogin.js" ></script>
	    <div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
	    	<div class="tab-content">
				<div class="tab-pane active" id="login">
				    <div class="modal-header">
					    <button type="button" class="close" id="modal-login-close" data-dismiss="modal">x</button>
					    <h3>Login to Drink & Link</h3>
					</div>
					<div class="modal-body">
						<form method="post" action='javascript:_login();' name="login_form">
						   	<p><input type="text" class="span3" name="eid" id="login-modal-email" placeholder="Email"></p>
					    	<p><input type="password" class="span3" name="passwd" id="login-modal-password" placeholder="Password"></p>
					    	<p><a class="" href="javascript:FB.login();"><img src="common/img/login_with_facebook.png"></a></p>
							<p><a class=""><img src="common/img/login_with_twitter.png"></a></p>
					    	<p><button type="submit" class="btn btn-primary">Log in</button>
					    		<a href="#forgotpassword" data-toggle="tab">Forgot Password?</a>
					    	</p>
						</form>
	               	</div>
					<div class="modal-footer">
					    New To DNL?
					    <a href="#register" data-toggle="tab" class="btn btn-primary">Register</a>
				    </div>
				</div>
				<div class="tab-pane fade" id="register">
	                <div class="modal-header">
					    <button type="button" class="close" id="modal-login-close" data-dismiss="modal">x</button>
					    <h3>Register to Drink & Link</h3>
					</div>
					<div class="modal-body">
						<form method="post" action='javascript:_login();' name="login_form">
						   	<p><input type="text" class="span3" name="eid" id="login-modal-email" placeholder="Email"></p>
					    	<p><input type="password" class="span3" name="passwd" id="login-modal-password" placeholder="Password"></p>
					    	<p><a class="" href="javascript:FB.login();"><img src="common/img/login_with_facebook.png"></a></p>
							<p><a class=""><img src="common/img/login_with_twitter.png"></a></p>
					    	<p><button type="submit" class="btn btn-primary">Sign in</button></p>
						</form>
	               	</div>
					<div class="modal-footer">
					    Already have DNL account?
					    <a href="#login" data-toggle="tab" class="btn btn-primary">Login</a>
				    </div>
	            </div>
			</div>
	    </div>