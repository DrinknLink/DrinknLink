</head>

<body class="hidden-phone">
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=APP_ID";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
 	<div class="container" id="header">
 		<div class="row">
 			<div id="getApp">
 				<p><span>GET THE APP</span></p>
 				<ul>
 					<li>
 						<span></span>
 						<span></span>
 					</li>
 					<li></li>
 					<li></li>
 				</ul>
 			</div>
 		</div>
 	</div>
 	<div class="container" id="main-content">
 		<div class="row-fluid">
	 		<div class="span10">
	 			<div id="content">
	 			 	<div class="span4" id="description">
	 			 		<h3 class="title-red"><?= $this->lang->line('registerAs');?></h3>
	 			 		<p><span><?= $this->lang->line('benefits');?></span></p>
	 			 		<p><span><?= $this->lang->line('benefit1');?></span></p>
	 			 		<p><span><?= $this->lang->line('benefit2');?></span></p>
	 			 		<p><span><?= $this->lang->line('benefit3');?></span></p>
	 			 		<p><span><?= $this->lang->line('benefit4');?></span></p>
	 			 		<img src="common/img/viewDemo.jpg" id=""/>
	 			 		<img src="common/img/howItWorks.jpg" id=""/>
	 			 	</div>
	 				<div class="span8">
	 					<form id="frm-register" method="post" action='javascript:_register<?= $type?>();' name="login_form">
		 					<div class="box-radius box-gradient" id="registerPanel">
		 						<div><h3 class="title-red sign-up"><?= $this->lang->line('signUp');?></h3></div>
		 						<?php if($type == 'User'){?>
			 						<div class="sign-up">
			 							<a href="javascript:;" id="connectFB_register"><img src="common/img/signup_with_facebook.png" id=""/></a>
			 							<a href="javascript:;" id="connectTW_register"><img src="common/img/signup_with_twitter.png" id=""/></a>
			 						</div>
			 						<div><h3 class="title-red sign-up">Or</h3></div>
			 					<?php }?>
		 						<div>
		 							<?php foreach(@$form as $key => $value){?>
			 							<div>
			 								<div class="item">
				 								<div class="title"><?= $value['title'] ?>:</div>
				 								<div class="input">
				 									<input class="input-box" type="<?= $value['type'] ?>" name="<?= $value['name'] ?>" id="<?= $value['id'] ?>" placeholder="<?= $value['placeholder'] ?>">
				 									<div></div>
				 								</div>
				 								<div class="info"></div>
				 							</div>
				 							<div class="error-panel"><label for="<?= $value['id'] ?>" class="error"></label></div>
			 							</div>
					 				<?php }?>
	 							</div>
		 					</div>
		 					<div>
		 						<p><?= $this->lang->line('policy');?></p>
		 						<button type="submit" class="btn btn-primary"><h3>Continue</h3></button>
		 					</div>
	 					</form>
	 				</div>
	 			</div>
	 		</div>
	 		<div class="span2" id="ad">
	 		</div>
	 	</div>

	</div>