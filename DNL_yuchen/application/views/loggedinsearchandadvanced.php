<div id="grid-home" class="column-center">
    <div class="column column-1">	

        <div class="row">          
            <!-- Login -->
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
                    <a href="/registerfree" id="register-free" class="dnl-ui-button"><span class="icon-container"><span class="dnl-ui-sprite plus"></span></span><label><?php echo $this->lang->line('main_CREATE_FREE_USER_ACCOUNT'); ?></label></a>							
                </div>
                <div>
                    <a href="/registerbar" id="register-barowner" class="dnl-ui-button"><span class="icon-container"><span class="dnl-ui-sprite plus"></span></span><label><?php echo $this->lang->line('main_REGISTER_AS_BAR_OWNER'); ?></label></a>							
                </div>
            </div>
        </div>
        <!-- Google maps -->
        <div class="row">
            <div id="gmaps">
                <!-- Map -->
                <div id="googleMap"></div> 
                <div id="choiceDiv" class="dnl-ui-gradient-1 dnl-ui-drop-shadow dnl-ui-rounded-corners">
                    <h1></i><?php echo $this->lang->line('main_YOUR_CHOICES'); ?></h1>
                    <a id="minimizeBtn" href ="javascript:void(0);"><?php echo $this->lang->line('main_MINIMIZE'); ?></a>
                    <p><?php echo $this->lang->line('main_FOR'); ?> CityName</p>
                    <div class="content" id="contentDiv">
                        <ul class="nav nav-list">
                            <li><p><i class="icon-ok"></i> bar</p></li>
                            <li><p><i class="icon-ok"></i> terras</p></li>
                            <li><p><i class="icon-ok"></i> wifi</p></li>
                            <li><p><i class="icon-ok"></i> live sport</p></li>
                        </ul>
                    </div>
                </div>
                <a id="maximizeBtn" href ="javascript:void(0);" class="btn btn-small"><i class="icon-resize-full"></i></a>
            </div>

        </div>
        <div class="row">
            <!-- Main body right -->
            <div id="mainPart" class="column column-1-2">
                <div class="row">
                    <div id="quick-search" class="dnl-ui-drop-shadow dnl-ui-rounded-corners">								


                        <div class="span3">
                            <h1><?php echo $this->lang->line('main_ADVANCED_SEARCH'); ?></h1>
                        </div>
                        <div class="span6" id="divSearch">
                            <div class="span2" id="textSearch">
                                <p><b><?php echo $this->lang->line('main_CITY_SEARCH'); ?></b></p>
                            </div>
                            <div class="span1" id="inputSearch">
                                <input name="csearch" type="text" id="inputS" placeholder="<?php echo $this->lang->line('main_WRITE_NAME_SUGGESTIONS_WILL_APPEAR'); ?>" value="" />
                            </div>
                            <div class="span1" id="btnSearch">
                                <button type="button" id="buttonS" class="dnl-ui-button dnl-ui-button-black dnl-ui-text-shadow"><i class="icon-search icon-white"></i>&nbsp<?php echo $this->lang->line('main_SEARCH'); ?></button>
                            </div>
                        </div>

                        <div id="choicesSearch" class="span9">
                            <div class="tabbable">
                                <ul class="nav nav-tabs">                              
                                    <li><a href="#tab1" data-toggle="tab"><i class="icon-star-empty"></i>&nbsp<?php echo $this->lang->line('main_BAR_GRADING'); ?></a></li>
                                    <li><a href="#tab2" data-toggle="tab"><i class="icon-glass"></i>&nbsp<?php echo $this->lang->line('main_BAR_PUB_TYPE'); ?></a></li>
                                    <li><a href="#tab3" data-toggle="tab"><i class="icon-list-alt"></i>&nbsp<?php echo $this->lang->line('main_BEERS_ON_DRAFT'); ?></a></li>
                                    <li class="active"><a href="#tab4" data-toggle="tab"><i class="icon-music"></i>&nbsp<?php echo $this->lang->line('main_MUSIC'); ?></a></li>
                                    <li><a href="#tab5" data-toggle="tab"><i class="icon-retweet"></i>&nbsp<?php echo $this->lang->line('main_ATMOSPHERE'); ?></a></li>
                                    <li><a href="#tab6" data-toggle="tab"><i class="icon-shopping-cart"></i>&nbsp<?php echo $this->lang->line('main_PRICES'); ?></a></li>
                                    <li><a href="#tab7" data-toggle="tab"><i class="icon-wrench"></i>&nbsp<?php echo $this->lang->line('main_BAR_SERVICES'); ?></a></li>
                                    <li><a href="#tab8" data-toggle="tab"><i class="icon-certificate"></i>&nbsp<?php echo $this->lang->line('main_EVENTS_AND_PROMOTIONS'); ?></a></li>
                                </ul>
                                <div class="tab-content">

                                    <div class="tab-pane" id="tab1">
                                        <div class="span8 spaceCheckbox">
                                            ...
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div class="span8 spaceCheckbox">
                                            ...
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <div class="span8 spaceCheckbox">
                                            ...
                                        </div>
                                    </div>
                                    <div class="tab-pane active" id="tab4">
                                        <div class="span8 spaceCheckbox">
                                            <input type="checkbox" name="vehicle" value="Car"> <?php echo $this->lang->line('main_DANCE'); ?>
                                            <input type="checkbox" name="vehicle" value="Car"> <?php echo $this->lang->line('main_LIVE_MUSIC'); ?>
                                            <input type="checkbox" name="vehicle" value="Car"> <?php echo $this->lang->line('main_KARAOKE'); ?>
                                            <input type="checkbox" name="vehicle" value="Car"> <?php echo $this->lang->line('main_PUB_QUIZ'); ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab5">
                                        <div class="span8 spaceCheckbox">
                                            ...
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab6">
                                        <div class="span8 spaceCheckbox">
                                            ...
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab7">
                                        <div class="span8 spaceCheckbox">
                                            ...
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab8">
                                        <div class="span8 spaceCheckbox">
                                            ...
                                        </div>
                                    </div>

                                </div>
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
                <a href="<?php echo base_url(); ?>home/loggedinsearchresults"><?php echo str_replace(' ', '<br/>', $this->lang->line('main_CREATE_FAN_PAGE')); ?></a>
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

