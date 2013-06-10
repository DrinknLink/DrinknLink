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
									<a href="javascript:;" data-toggle="modal" data-target="#loginModal"><font color="red">Login</font></a>
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
		<div class="modal hide fade" id="loginModal">
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
	    