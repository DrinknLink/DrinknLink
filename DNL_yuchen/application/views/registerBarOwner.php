		<div id="grid-register" class="column-center">
			<div class="column column-1">				
				<div class="row">
					<div id="login-bar" class="dnl-ui-rounded-corners dnl-ui-gradient-1">									
						<div>
							<div><a href="#"><img alt="Login with Facebook" src='common/img/login_with_facebook.png' /></a></div>
							<div><a href="#"><img alt="Login with twitter" src='common/img/login_with_twitter.png' /></a></div>
						</div>	
						<div class="divider"><hr><?php echo $this->lang->line('main_OR'); ?><hr></div>
						<div>
							<form id="frm-login" action="/auth/login/barowner" method="post">
								<div>
									<div><input name="username" type="text" placeholder="<?php echo $this->lang->line('main_EMAIL_OR_USERNAME'); ?>" value="" /></div>
									<div><input name="password" type="password" placeholder="<?php echo $this->lang->line('main_PASSWORD'); ?>" value="" /></div>
								</div>
								<div>					
									<div><button type="submit" class="dnl-ui-button"><?php echo $this->lang->line('main_LOGIN'); ?></button></div>
									<div><a href="#"><?php echo $this->lang->line('main_FORGOT_PASSWORD'); ?></a></div>	
								</div>		
							</form>
						</div>	
						<div class="divider"><hr><?php echo $this->lang->line('main_OR'); ?><hr></div>	
						<div>
							<a href="registerUser" id="register-free" class="dnl-ui-button"><span class="icon-container"><span class="dnl-ui-sprite plus"></span></span><label><?php echo $this->lang->line('main_CREATE_FREE_USER_ACCOUNT'); ?></label></a>							
						</div>
						<div>
							<a href="registerBarOwner" id="register-barowner" class="dnl-ui-button"><span class="icon-container"><span class="dnl-ui-sprite plus"></span></span><label><?php echo $this->lang->line('main_REGISTER_AS_BAR_OWNER'); ?></label></a>							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="column column-1-1">
						<h1><?php echo $this->lang->line('main_REGISTER_BAR_OWNER'); ?></h1>
						<h2><?php echo $this->lang->line('main_BENEFITS'); ?></h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<p><a href="#"><img src="common/img/view_the_demo_bar_page.png" /></a></p>
						<p><a href="#"><img src="common/img/how_it_works_youtube2.png" /></a></p>
					</div>			
					<div class="column column-1-2">
						<div class="dnl-section">
							<form id="frm-register" class="dnl-ui-form" action="/auth/register/barowner" method="post">
								<fieldset>
									<h1><?php echo $this->lang->line('main_SIGN_UP'); ?></h1>
									<ul>
										<li><label><?php echo $this->lang->line('main_NAME_OF_BAR'); ?></label><input type="text" name="name_of_bar" tabindex="1" /></li>									
										<li><label><?php echo $this->lang->line('main_YOUR_NAME'); ?></label><input type="text" name="your_name" tabindex="2" /></li>
										<li><label><?php echo $this->lang->line('main_ADDRESS'); ?></label><input type="text" name="address" tabindex="3" /></li>
										<li><label><?php echo $this->lang->line('main_ADDRESS_NUMBER'); ?></label><input type="text" name="address_number" tabindex="4" /></li>
										<li><label><?php echo $this->lang->line('main_POSTAL_CODE'); ?></label><input type="text" name="postal_code" tabindex="5" /></li>
										<li><label><?php echo $this->lang->line('main_CITY'); ?></label><input type="text" name="city" tabindex="6" /></li>
										<li><label><?php echo $this->lang->line('main_PHONE_NUMBER'); ?></label><input type="text" name="phone_number" tabindex="7" /></li>
										<li><label><?php echo $this->lang->line('main_COC_REGISTRATION_NUMBER'); ?></label><input type="text" name="coc_registration_number" tabindex="8" /></li>
										<li><label><?php echo $this->lang->line('main_EMAIL_ADDRESS'); ?></label><input type="text" id="email" name="email_address" tabindex="9" /></li>
										<li><label><?php echo $this->lang->line('main_CONFIRM_EMAIL'); ?></label><input type="text" name="email_address_confirm" tabindex="10" /></li>
										<li><label><?php echo $this->lang->line('main_PASSWORD'); ?></label><input type="password" name="password" tabindex="11" /></li>	
										<li>
											<label><?php echo $this->lang->line('main_PAYMENT_METHOD'); ?></label>
											<div>
												<input type="radio" id="r-ideal" checked="checked" name="payment_method" value="ideal"><label for="r-ideal"><img src="common/img/payment_method_ideal.png" /></label>
												<input type="radio" id="r-paypal" name="payment_method"><label for="r-paypal" value="paypal"><img src="common/img/payment_method_paypal.png" /></label>
											</div>
										</li>														
									</ul>
								</fieldset>	
								<p class="fineprint">By clicking Continue you agree to our Terms and conditions and our Privacy policy.</p>
								<button type="submit" class="dnl-ui-button dnl-ui-button-black"><h2><?php echo $this->lang->line('main_CONTINUE'); ?></h2></button>					
							</form>
						</div>
					</div>
					<div class="dnl-ui-clearfix"></div>
				</div>
				
			</div>
			<div class="column column-2">
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
			
	

			
	