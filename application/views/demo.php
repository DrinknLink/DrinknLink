</head>

<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
 	<div class="container" id="container">
 		<img src="common/img/dnl.png" id="dnl-logo-demo"/>
 		<div class="row">
	 		<div class="span4">
	 			<div id="overview" class="box-trio">
	 				<h3><a href="about" class="title-red"><?= $this->lang->line('0');?></a></h3>
	 				<p>
	 					<?= $this->lang->line('1');?>
	 					<a href="about" class="link-brown"><?= $this->lang->line('10');?><span data-icon="O"></span></a>
	 				</p>
	 				<p class="align-center visible-desktop"><a href="main"><img src="common/img/demo.png"/></a></p>
	 			</div>
	 			<div id="video" class="box-trio">
	 				<h3 class="title-red"><?= $this->lang->line('3');?></h3>
	 				<p>
	 					<?= $this->lang->line('5');?>
	 					<a href="javascript:;" class="link-brown" data-toggle="modal" data-target="#videoModal">YOUTUBE<span data-icon="O"></span></a>
	 				</p>
	 				<p class="align-center"><a href="javascript:;" data-toggle="modal" data-target="#videoModal"><img src="common/img/youtube.png"/></a></p>
	 			</div>
	 		</div>
	 		<div class="span8">
 				<div id="xxx-before" class="row">
	 				<div id="percentage" class="span4">
	 					<h4 class="white align-center"><?= $this->lang->line('2');?></h4>
	 					<h4 class="white align-center"><span data-icon="N"></span></h4>
	 					<div id="percentage-screen"></div>
	 				</div>
	 				<div id="social-media-feed" class="span4">
	 					<div id="social-media-feed-switch">
	 						<ul class="nav nav-tabs">
	 							<li class="active social-tab"><a href="#facebook" data-toggle="tab" class="size30"><font color="3c5a98"><i data-icon="S"></i></font></a></li>
	 							<li class="social-tab"><a href="#twitter" data-toggle="tab" class="size30"><font color="00acee"><i data-icon="1"></i></font></i></a></li>
	 						</ul>
	 					</div>
	 					<div class="tab-content" style="background-color:white;">
		 					<div id="twitter" class="tab-pane">
				 				<a class="twitter-timeline"  href="https://twitter.com/DrinknLink"  data-widget-id="356723697303830528">Tweets van @DrinknLink</a>
							</div>
							<div id="facebook" class="tab-pane active">
								<div class="fb-like-box" data-href="https://www.facebook.com/pages/Drink-n-Link/381869928546786" data-width="370" data-height="300" data-show-faces="true" data-stream="true" data-show-border="false" data-header="false"></div>
							</div>
						</div>
	 				</div>
	 			</div>
	 			<div id="xxx" class="box-trio y-outside-middle">
	 				<span id="xxx-span" class="y-inside"><a href="investment"><b class="title-red size25"><?= $this->lang->line('9');?></b></a>
	 				Neem een deel in het project en praesent pellentesque eleifend mi non eleifend. Sed eu placerat leo. Proin et mauris arcu. Nulla facilisi.
	 				<a href="investment" class="link-brown"><?= $this->lang->line('10');?><span data-icon="O"></span></a></span>
	 			</div>
	 		</div>
	 	</div>
 		
 	</div>
 	<div id="videoModal" class="modal hide fade" tabindex="-1">
		<iframe id="ytplayer" type="text/html" width="640" height="360" src="https://www.youtube.com/embed/CzSCi-uTh94" frameborder="0" allowfullscreen></iframe>
	</div>
	<div id="contactModal" class="modal hide fade" tabindex="-1">
		info@drinknlink.com
	</div>
</body>

</html>