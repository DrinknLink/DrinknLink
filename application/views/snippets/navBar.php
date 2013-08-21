	<div id="loginBar-full"></div>
	<div class="container" id="navbar">
 		<div class="row-fluid" id="navbar-inner">
 			<div class="span12">
				<?php if(@$isAdmin){ ?>
					<div id="navbar-admin-logo">
						<a href="/"><img src="common/img/DnL-logo-02.png" id="admin-logo"/></a>
					</div>
				<?php }else{?>
					<div id="navbar-logo">
						<a href="/"><img src="common/img/dnl.png" id="dnl-logo"/></a>
					</div>
				<?php }?>
				<?php if(@$isAdmin){?>
					<div id="navbar-welcome">
						<span id="loggedInText" class="light-blue"><b>HELLO</b></span>
					</div>
					<div id="navbar-name">
						<a href="#"id="loggedInName" class="dark-blue"><b><?= $ownerName ?></b></a>
					</div>
					<div id="navbar-menu">
						<ul>
							<li class="navbar-button pull-right"><a id="logout" href="javascript:;" class="dark-blue"><b>Log out</b></a></li>
							<li class="navbar-button pull-right">
								<a href="javascript:;" class="dark-blue"><b>Messages</b></a>
								<!-- <li class="navbar-alert">3</li> -->
							</li>
							<li class="navbar-button pull-right">
								<a href="javascript:;" class="dark-blue" id="notification">
									<b>Notifications</b>
								</a>
								<div id="notification-popover" class="popover fade bottom">
									<div class="arrow"></div>
									<h3 class="popover-title"></h3>
									<div class="popover-content"></div>
								</div>
							</li>
							<li class="navbar-button pull-right">
								<a href="javascript:;" class="dark-blue"><b>BarName</b></a>
								<!-- <li class="navbar-alert">3</li> -->
							</li>
						</ul>
					</div>
				<?php }elseif(@$isLogin){?>
					<div id="navbar-welcome">
						<span id="loggedInText" class="light-blue"><b>HELLO</b></span>
					</div>
					<div id="navbar-name">
						<a href="profil"id="loggedInName" class="dark-blue"><b><?= $userName ?></b></a>
					</div>
					<div id="navbar-menu">
						<ul>
							<li class="navbar-button pull-right"><a id="logout" href="javascript:;" class="dark-blue"><b>Log out</b></a></li>
							<li class="navbar-button pull-right">
								<a href="javascript:;" class="dark-blue"><b>Messages</b></a>
								<!-- <li class="navbar-alert">3</li> -->
							</li>
							<li class="navbar-button pull-right">
								<a href="javascript:;" class="dark-blue" id="notification">
									<b>Notifications</b>
								</a>
								<div id="notification-popover" class="popover fade bottom" style="top: 22.5px; left: 12px; display: block; width: 200px;">
									<div class="arrow"></div>
									<h3 class="popover-title"></h3>
									<div class="popover-content"></div>
								</div>
							</li>
						</ul>
					</div>
					<div id="navbar-search">
						<div id="navbar-search-inputbox">
							<input id="navbar-search-input" placeholder="Search for bars and friends">
							<i data-icon="M"></i>
						</div>
					</div>
				<?php }else{?>
					<div id="navbar-login" class="pull-left">
						<ul>
							<li class="navbar-button pull-left">Login with</li>
							<li class="navbar-button pull-left"><a href="javascript:;" class="color-fb" id="connectFB"><i data-icon="R"></i><b>Facebook</b></a></li>
							<li class="navbar-button pull-left"><a href="javascript:;" class="color-tw" id="connectTW"><i data-icon="1"></i><b>Twitter</b></a></li>
							<li class="navbar-button pull-left"><a href="javascript:;" class="title-red" data-toggle="modal" data-target="#emailLogin"><i data-icon="%"></i><b>Email</b></a></li>
							<li class="navbar-button pull-right"><a href="registerUser" class="dark-blue"><i data-icon="C"></i><b>Sign up</b></a></li>
						</ul>
					</div>
					<div id="navbar-register" class="pull-right">
						<ul>
<!-- 							<li class="navbar-button pull-right"><a href="registerUser" class="dark-blue"><b>User</b></a></li> -->
<!-- 							<li class="navbar-button pull-right"><a href="registerOwner" class="dark-blue"><b>Bar Owner</b></a></li> -->
<!-- 							<li class="navbar-button pull-right">Create account as</li> -->
								<li class="navbar-button pull-right"><a href="javascript:;" class="dark-blue" data-toggle="modal" data-target="#iamOwner"><i data-icon="C"></i><b>I am Owner</b></a></li>
						 		
						</ul>
					</div>
				<?php }?>
			</div>
 		</div>
 	</div>
 	<div id="emailLogin" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">x</button>
			<h3>Login with Email</h3>
		</div>
		<div class="modal-body">
			<form id="frm-login" method="post" action='javascript:_login();' name="login_form">
	 				<div id="registerBar-login-email">
	 					<div>
	 						<input class="input-box" type="text" name="emial" id="login-email" placeholder="Email">
	 					</div>
	 					<div>
	 						<input class="input-box" type="password" name="password" id="login-password" placeholder="Password">
	 					</div>
	 				</div>
	 				<a onclick="$('#frm-login').submit()" class="btn btn-primary">LOGIN</a>
	 		</form>
		</div>
		<div class="modal-footer">
			New To Drink 'n Link?
			<a href="registerUser" class="btn btn-primary">Register</a>
		</div>
	</div>
	<div id="iamOwner" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">x</button>
			<h3>Login as Bar Owner</h3>
		</div>
		<div class="modal-body">
			<form id="frm-ownerLogin" method="post" action='javascript:_login();' name="login_form">
	 				<div id="registerBar-login-email">
	 					<div>
	 						<input class="input-box" type="text" name="emial" id="owner-email" placeholder="Email">
	 					</div>
	 					<div>
	 						<input class="input-box" type="password" name="password" id="owner-password" placeholder="Password">
	 					</div>
	 				</div>
	 				<!-- <a onclick="$('#frm-login').submit()" class="btn btn-primary">LOGIN</a> -->
	 				<button type="submit" class="btn btn-primary">LOGIN</button>
	 		</form>
		</div>
		<div class="modal-footer">
			Don't have Bar Owner Account?
			<a href="registerOwner" class="btn btn-primary">Register</a>
		</div>
	</div>
 	<script src="common/js/navbar.js"></script>	