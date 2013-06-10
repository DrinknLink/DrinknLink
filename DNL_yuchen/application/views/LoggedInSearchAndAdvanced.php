<div id="grid-home" class="column-center">
    <div class="column column-1">	

        <div class="row">          
            <!-- Login -->
            <div id="login-bar" class="dnl-ui-rounded-corners dnl-ui-gradient-1">									
                <div>
                    <div><a href="#"><img alt="Login with Facebook" src='common/img/login_with_facebook.png' /></a></div>
                    <div><a href="#"><img alt="Login with twitter" src='common/img/login_with_twitter.png' /></a></div>
                </div>	
                <div class="divider"><hr style="padding-bottom: -20px;"><?php echo $this->lang->line('main_OR'); ?><hr></div>
                <div>
                    <form id="frm-login" action="/auth/login/barowner" method="post" style="margin-top: 25px;">
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
        <!-- Google maps -->
        <div class="row">
            <div id="gmaps">
                <!-- Map -->
                <div id="googleMap" style="width:918px;height:250px;"></div> 
                <!--  -->
                <div id="choiceDiv" style="position: absolute; width: 200px; height: 220px; margin:-235px 0 0 15px;" class="dnl-ui-gradient-1 dnl-ui-drop-shadow dnl-ui-rounded-corners">
                    <h1 style="font-size: 22px; margin-left: 15px; margin-top: 15px;"><?php echo $this->lang->line('main_YOUR_CHOICES'); ?></h1>
                    <a id="minimizeBtn" href ="javascript:void(0);" style="float: right; font-size: 10px; margin-top: -45px; margin-right: 5px; color: #93a2c4;"><?php echo $this->lang->line('main_MINIMIZE'); ?></a>
                    <p style="margin-left: 12px; font-size: 13px; margin-top: 10px;"><?php echo $this->lang->line('main_FOR'); ?> CityName</p>
                    <div class="content" style="width: 185px; height: 120px; margin-left: 8px; margin-top: -15px;">
                        <p style="margin-left: 10px;">- Bar</p>
                        <p style="margin-top: -20px; margin-left: 10px;">- Terras</p>
                        <p style="margin-top: -20px; margin-left: 10px;">- wifi</p>
                        <p style="margin-top: -20px; margin-left: 10px;">- live sport</p>
                        <p style="margin-top: -20px; margin-left: 10px;">- bla</p>
                        <p style="margin-top: -20px; margin-left: 10px;">- bla</p>
                        <p style="margin-top: -20px; margin-left: 10px;">- bla</p>
                        <p style="margin-top: -20px; margin-left: 10px;">- bla</p>
                        <p style="margin-top: -20px; margin-left: 10px;">- bla</p>
                    </div>
                </div>
                <a id="maximizeBtn" href ="javascript:void(0);" class="btn btn-small" style="position: absolute; height: 20px; margin:-32px 0 0 0px;"><?php echo $this->lang->line('main_MAXIMIZE'); ?></a>
            </div>

        </div>
        <div class="row">
            <!-- Main body right -->
            <div class="column column-1-2">
                <div class="row" style="height: 500px;">
                    <div id="quick-search" class="dnl-ui-drop-shadow dnl-ui-rounded-corners" style="padding-top: 10px;">								

                        <div class="row" style="width: 900px;">
                            <div class="twofifth bg-lightblue" style="width: auto;">
                                <h1><?php echo $this->lang->line('main_ADVANCED_SEARCH'); ?></h1>
                            </div>
                            <div class="threefifth bg-lightblue" style="width: auto;">
                                <div class="row" style="width: 600px; margin-top: 10px; margin-left: 40px;">
                                    <div class="third bg-blue" style="width: auto; margin-top: 7px;">
                                        <p><b><?php echo $this->lang->line('main_CITY_SEARCH'); ?></b></p>
                                    </div>
                                    <div class="third bg-blue" style="width: auto;">
                                        <input name="csearch" type="text" style="display:block; width: 300px; height: 34px;" placeholder="<?php echo $this->lang->line('main_WRITE_NAME_SUGGESTIONS_WILL_APPEAR'); ?>" value="" />
                                    </div>
                                    <div class="third bg-blue" style="width: auto;">
                                        <button type="button" id="" style="width: 150px; height: 36px; border:1px solid silver;" class="dnl-ui-button dnl-ui-button-black dnl-ui-text-shadow"><?php echo $this->lang->line('main_SEARCH'); ?></button>
                                    </div>
                                </div>   
                            </div>
                        </div>

                        <nav class="nav-tabs" data-toggle="tabs" data-height="equal" style="margin-left: 20px; margin-bottom: 40px;">
                            <ul>
                                <li><a href="#tab1"><?php echo $this->lang->line('main_BAR_GRADING'); ?></a></li>
                                <li><a href="#tab2"><?php echo $this->lang->line('main_BAR_PUB_TYPE'); ?></a></li>
                                <li><a href="#tab3"><?php echo $this->lang->line('main_BEERS_ON_DRAFT'); ?></a></li>
                                <li><a href="#tab4" class="active"><?php echo $this->lang->line('main_MUSIC'); ?></a></li>
                                <li><a href="#tab5"><?php echo $this->lang->line('main_ATMOSPHERE'); ?></a></li>
                                <li><a href="#tab6"><?php echo $this->lang->line('main_PRICES'); ?></a></li>
                                <li><a href="#tab7"><?php echo $this->lang->line('main_BAR_SERVICES'); ?></a></li>
                                <li><a href="#tab8"><?php echo $this->lang->line('main_EVENTS_AND_PROMOTIONS'); ?></a></li>
                            </ul>
                        </nav>
                        <div style="margin-left: 35px;">
                            <div id="tab1">
                                ...
                            </div>
                            <div id="tab2">
                                ...
                            </div>
                            <div id="tab3">
                                ...
                            </div>
                            <div id="tab4">
                                <input style="margin-left: 10px;" type="checkbox" name="vehicle" value="Car"> <?php echo $this->lang->line('main_DANCE'); ?>
                                <input style="margin-left: 80px;" type="checkbox" name="vehicle" value="Car"> <?php echo $this->lang->line('main_LIVE_MUSIC'); ?>
                                <input style="margin-left: 80px;" type="checkbox" name="vehicle" value="Car"> <?php echo $this->lang->line('main_KARAOKE'); ?>
                                <input style="margin-left: 80px;" type="checkbox" name="vehicle" value="Car"> <?php echo $this->lang->line('main_PUB_QUIZ'); ?>
                            </div>
                            <div id="tab5">
                                ...
                            </div>
                            <div id="tab6">
                                ...
                            </div>
                            <div id="tab7">
                                ...
                            </div>
                            <div id="tab8">
                                ...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dnl-ui-clearfix"></div>	
        </div>
    </div>

    <!-- Overside -->
    <div class="column column-2">				
        <div class="row">
            <div id="create-fan-page" class="image-button">
                <a href="#"><?php echo str_replace(' ', '<br/>', $this->lang->line('main_CREATE_FAN_PAGE')); ?></a>
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

    <!-- social media -->
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

