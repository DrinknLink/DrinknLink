		<div id="grid-home" class="container">
			<div class="column column-1">				
				<div class="row">
					<div class="column column-1-1">
						<div class="row">
							<div id="meet-up-with-friends" class="image-button dnl-ui-drop-shadow">
								<a href="#"><?php echo $this->lang->line('main_MEET_UP_WITH_FRIENDS'); ?></a>
							</div>
						</div>
						<div class="row">
							<div id="pub-crawl" class="image-button dnl-ui-drop-shadow">
								<a href="#"><?php echo $this->lang->line('main_CREATE_PUB_CRAWL'); ?></a>
							</div>
						</div>
					</div>
					<div class="column column-1-2">
						<div class="row">
							<div id="quick-search" class="dnl-ui-drop-shadow dnl-ui-rounded-corners">								
								<div>
									<h1><?php echo $this->lang->line('main_QUICK_SEARCH'); ?></h1>
									<span><?php echo $this->lang->line('main_LOGIN_OR_CREATE_ACCOUNT_TO_USE'); ?></span>
								</div>
								<ul>									
									<li>
										<button type="button" class="dnl-ui-rounded-corners dnl-ui-drop-shadow"><span><span class="dnl-ui-sprite calendar"></span></span><span><?php echo $this->lang->line('main_VIEW_TODAY_NEARBY_EVENTS'); ?></span></button>
									</li>
									<li class="dnl-ui-rounded-corners dnl-ui-drop-shadow">
										<button type="button" class="dnl-ui-rounded-corners dnl-ui-drop-shadow"><span><span class="dnl-ui-sprite discount"></span></span><span><?php echo $this->lang->line('main_FIND_THE_BEST_DISCOUNTS'); ?></span></button>
									</li>
									<li class="dnl-ui-rounded-corners dnl-ui-drop-shadow">
										<button type="button" class="dnl-ui-rounded-corners dnl-ui-drop-shadow"><span><span class="dnl-ui-sprite clock"></span></span><span><?php echo $this->lang->line('main_HAPPY_HOUR_WHEN_AND_WHERE'); ?></span></button>										
									</li>
								</ul>
								<ul>
									<li class="dnl-ui-rounded-corners dnl-ui-drop-shadow">
										<button type="button" class="dnl-ui-rounded-corners dnl-ui-drop-shadow"><span><span class="dnl-ui-sprite wifi"></span></span><span><?php echo $this->lang->line('main_FREE_WIFI_AT_LOCAL_BARS'); ?></span></button>
									</li>
									<li class="dnl-ui-rounded-corners dnl-ui-drop-shadow">
										<button type="button" class="dnl-ui-rounded-corners dnl-ui-drop-shadow"><span><span class="dnl-ui-sprite beans"></span></span><span><?php echo $this->lang->line('main_FIND_NEAREST_AND_BEST_COFFEE'); ?></span></button>
									</li>
									<li class="dnl-ui-rounded-corners dnl-ui-drop-shadow">
										<button type="button" class="dnl-ui-rounded-corners dnl-ui-drop-shadow"><span><span class="dnl-ui-sprite beer"></span></span><span><?php echo $this->lang->line('main_FIND_THOSE_SPECIAL_BEERS'); ?></span></button>										
									</li>
								</ul>
								<ul class="requires-login">
									<li class="dnl-ui-rounded-corners dnl-ui-drop-shadow">
										<button type="button" class="dnl-ui-rounded-corners dnl-ui-drop-shadow"><span><span class="dnl-ui-sprite silhouettes"></span></span><span><?php echo $this->lang->line('main_FIND_FRIENDS_CHECKED_IN_AT_BAR'); ?></span></button>									
									</li>
									<li class="dnl-ui-rounded-corners dnl-ui-drop-shadow">
										<button type="button" class="dnl-ui-rounded-corners dnl-ui-drop-shadow"><span><span class="dnl-ui-sprite"></span></span><span><?php echo $this->lang->line('main_FIND_SOMETHING_ELSE'); ?></span></button>
									</li>
									<li class="dnl-ui-rounded-corners dnl-ui-drop-shadow">
										<button type="button" class="dnl-ui-rounded-corners dnl-ui-drop-shadow"><span><span class="dnl-ui-sprite"></span></span><span><?php echo $this->lang->line('main_FIND_EVEN_MORE'); ?></span></button>
									</li>
								</ul>													
								<div id="advanced-search" class="dnl-ui-button dnl-ui-button-black dnl-ui-text-shadow"><div class="dnl-ui-sprite loop"></div><h2><?php echo $this->lang->line('main_ADVANCED_SEARCH'); ?></h2></div>								
							</div>
						</div>
					</div>
					<div class="dnl-ui-clearfix"></div>	
				</div>
				<div class="row">
					<div id="gmaps">
						<iframe width="918" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.nl/?ie=UTF8&amp;t=m&amp;ll=52.095038,5.1192&amp;spn=0.00791,0.039353&amp;z=15&amp;output=embed"></iframe>
					</div>
				</div>
				<div class="row">
					<div class="column column-1-3">
						<div id="dnl-about" class="dnl-ui-rounded-corners">
							<span class="dnl-balloon"></span>
							<div>
								<h1><?php echo $this->lang->line('main_ABOUT_DRINK_N_LINK'); ?></h1>
								<p><?php echo $this->lang->line('main_ABOUT_DRINK_N_LINK_DESCRIPTION'); ?> <a href="#"><?php echo $this->lang->line('main_CONTINUE_READING'); ?></a></p>															
							</div>
						</div>
					</div>
					
					<div class="column column-1-4">
						<div id="dnl-how-it-works">
							<div>
								<h1><?php echo $this->lang->line('main_HOW_IT_WORKS'); ?></h1>
								<h2><?php echo $this->lang->line('main_A_NEW_WAY_TO_EXPERIENCE_NIGHTLIFE'); ?></h2>
								<p><?php echo $this->lang->line('main_HOW_IT_WORKS_DESCRIPTION'); ?></p>
								<a href="#"><?php echo $this->lang->line('main_YOUTUBE'); ?></a>							
								<div><a href="#"><img src="common/img/how_it_works_youtube.png" /></a></div>
							</div>
						</div>
					</div>
														
					<div class="column column-1-5">
						<div id="social-media-tab" class='dnl-ui-simple-tab'>
							<ul>
								<li class="tab-twitter"><a href="#tab-twitter-followers"><div><span class="dnl-ui-sprite twitter-small"></span></div><div><span><p><?php echo $this->lang->line('social_media_TWITTER_FOLLOWERS'); ?></p><p>368</p></span></div></a></li>
								<li class="tab-facebook"><a href="#tab-facebook-likes"><div><span class="dnl-ui-sprite facebook-small"></span></div><div><p><?php echo $this->lang->line('social_media_FACEBOOK_LIKES'); ?></p><p>102</p></div></a></li>
							</ul>
							<div id="tab-twitter-followers">
								<div>twitter tab content</div>
							</div>
							<div id="tab-facebook-likes">
								<div>Facebook tab content</div>
							</div>							
						</div>						
					</div>
					<div class="dnl-ui-clearfix"></div>
				</div>
			</div>
			<div class="column column-2">				
				<div class="row">
					<div id="create-fan-page" class="image-button">
						<a href="#"><?php  echo str_replace(' ', '<br/>', $this->lang->line('main_CREATE_FAN_PAGE')); ?></a>
					</div>
				</div>
				<div class="row">
					<div class="advert"></div>
				</div>
				<div class="row">
					<div class="advert"></div>
				</div>
				<div class="row">
					<div class="advert"></div>
				</div>
			</div>
			<div class="dnl-ui-rounded-corners" id="footer-social-media">
				<div class="icon"><span class="dnl-ui-sprite facebook"></span></div>
				<div class="text"><span><?php echo $this->lang->line('social_media_STAY_INFORMED_WITH_FACEBOOK'); ?></span> <a href="#"><?php echo $this->lang->line('social_media_AND_LIKE_US_ON_FACEBOOK'); ?></span></a></div>
				<div class="divider"><hr></div>
				<div class="icon"><span class="dnl-ui-sprite twitter"></span></div>
				<div class="text"><span><?php echo $this->lang->line('social_media_STAY_EVEN_MORE_INFORMED_WITH_TWITTER'); ?></span> <a href=""><?php echo $this->lang->line('social_media_AND_FOLLOW_US_ON_TWITTER'); ?></a></div>
				<div class="divider"><hr></div>				
				<div class="icon"><span class="dnl-ui-sprite linkedin"></span></div>
				<div class="text"><span><?php echo $this->lang->line('social_media_JON_US_ON_LINKEDIN'); ?></span> <a href=""><?php echo $this->lang->line('social_media_VIA_LINKEDIN'); ?></a></div>		
			</div>
		</div>
		
		