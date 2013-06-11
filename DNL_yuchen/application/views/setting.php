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
                    <div id="quick-search" class="dnl-ui-drop-shadow dnl-ui-rounded-corners size-addon">								

                        <div class="span3">
                            <h1><?php echo $this->lang->line('main_SEARCH_RESULTS'); ?></h1>
                        </div>
                        <div class="span2" id="searchResults01">
                            <p><?php echo $this->lang->line('main_MATCHING_YOUR_CRITERIA'); ?> 31</p>
                        </div>
                        <div class="span4" id="searchResults02">
                            <div class="pagination pagination-centered dnl-color">
                                <ul>
                                    <li><a href="#"><i class="icon-chevron-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#"><i class="icon-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="span9" id="searchResultsCenter">              
                            <ul class="pager">
                                <li class="previous">
                                    <a id="pager-previous" href="#"></a>
                                </li>
                                <div id="myResults" class="span8">
                                    <div class="span3" id="results1">
                                        <img class="maxImageSize" src="http://chasingthepint.com/img/companies/CompanyB.jpg" alt="" width="205" height="107" />
                                        <br />
                                        <div class="span1 addToList"><a href="#" class="addToListA"><?php echo $this->lang->line('main_ADD_TO_BAR_LIST'); ?></a></div>
                                        <div class="span1 addToList"><a href="#" class="addToListA"><?php echo $this->lang->line('main_ADD_TO_FAVORITES'); ?></a></div>
                                        <div class="span1 addToList"><a href="#" class="addToListA"><?php echo $this->lang->line('main_ADD_TO_PUB_CRAWL'); ?></a></div>
                                        <br /><br /><br /><br />
                                        <p class="resultsName">THE PEGASUS PUB</p>
                                        <br />
                                        <p class="resultsInfo">ARNHEM</p>
                                        <br /><br /><br />
                                        <p class="resultsInfo"><?php echo $this->lang->line('main_OPEN_TODAY'); ?> 20:00 - 02:00 am</p>
                                        <br />
                                        <p class="resultsInfo"><?php echo $this->lang->line('main_RATED'); ?> 7/10</p>
                                        <br /><br />
                                        <p class=""><?php echo $this->lang->line('main_BEERS_ON_DRAFT'); ?></p>

                                        <img class="maxImageSize2" src="http://www.2beerguys.com/images/forblog/guinness_logo_white.jpg" alt="" width="50" height="38" />
                                        <img class="maxImageSize2" src="http://www.seeklogo.com/images/M/Murphy_s-logo-DF494E2AAD-seeklogo.com.gif" alt="" width="50" height="38" />
                                        <img class="maxImageSize2" src="http://greatbrewers.com/sites/default/files/images/Palm%20Beer%20Logo.jpg" alt="" width="50" height="38" />
                                        <br /><br /><br />
                                        <p class="resultsInfo"><?php echo $this->lang->line('main_FIRST_EVENT_TONIGHT'); ?></p>
                                        <br /><br />
                                        <p class="resultsInfo firstEvent">n/a</p>
                                        <br /><br />
                                        <p class="resultsInfo"><?php echo $this->lang->line('main_FIRST_PROMO_TONIGHT'); ?></p>
                                        <br /><br />
                                        <p class="resultsInfo firstEvent">n/a</p>
                                        <br />
                                        <button type="button" id="buttonS" class="dnl-ui-button dnl-ui-button-black dnl-ui-text-shadow textSizeButton"><?php echo $this->lang->line('main_VISIT_BAR_PAGE'); ?>&nbsp<i class="icon-play icon-white"></i></button>
                                    </div>
                                    <div class="span3" id="results2">
                                        <img class="maxImageSize" src="http://www.disco-panel.com/NIGHTCLUB%20AND%20BAR%20LIGHTING%20DESIGN%20AND%20DECOR.jpg" alt="" width="205" height="107" />

                                        <!-- REPETED -->
                                        <br />
                                        <div class="span1 addToList"><a href="#" class="addToListA"><?php echo $this->lang->line('main_ADD_TO_BAR_LIST'); ?></a></div>
                                        <div class="span1 addToList"><a href="#" class="addToListA"><?php echo $this->lang->line('main_ADD_TO_FAVORITES'); ?></a></div>
                                        <div class="span1 addToList"><a href="#" class="addToListA"><?php echo $this->lang->line('main_ADD_TO_PUB_CRAWL'); ?></a></div>
                                        <br /><br /><br /><br />
                                        <p class="resultsName">FLORIAN</p>
                                        <br />
                                        <p class="resultsInfo">ARNHEM</p>
                                        <br /><br /><br />
                                        <p class="resultsInfo"><?php echo $this->lang->line('main_OPEN_TODAY'); ?> 20:00 - 02:00 am</p>
                                        <br />
                                        <p class="resultsInfo"><?php echo $this->lang->line('main_RATED'); ?> 8/10</p>
                                        <br /><br />
                                        <p class=""><?php echo $this->lang->line('main_BEERS_ON_DRAFT'); ?></p>

                                        <img class="maxImageSize2" src="http://www.2beerguys.com/images/forblog/guinness_logo_white.jpg" alt="" width="50" height="38" />
                                        <img class="maxImageSize2" src="http://www.seeklogo.com/images/M/Murphy_s-logo-DF494E2AAD-seeklogo.com.gif" alt="" width="50" height="38" />
                                        <img class="maxImageSize2" src="http://greatbrewers.com/sites/default/files/images/Palm%20Beer%20Logo.jpg" alt="" width="50" height="38" />
                                        <br /><br /><br />
                                        <p class="resultsInfo"><?php echo $this->lang->line('main_FIRST_EVENT_TONIGHT'); ?></p>
                                        <br /><br />
                                        <p class="resultsInfo firstEvent">Irish dance contest @22:30</p>
                                        <br /><br />
                                        <p class="resultsInfo"><?php echo $this->lang->line('main_FIRST_PROMO_TONIGHT'); ?></p>
                                        <br /><br />
                                        <p class="resultsInfo firstEvent">n/a</p>
                                        <br />
                                        <button type="button" id="buttonS" class="dnl-ui-button dnl-ui-button-black dnl-ui-text-shadow textSizeButton"><?php echo $this->lang->line('main_VISIT_BAR_PAGE'); ?>&nbsp<i class="icon-play icon-white"></i></button>
                                        <!-- END OF REPETED -->
                                    </div>
                                    <div class="span3" id="results3">
                                        <img class="maxImageSize" src="http://0.tqn.com/d/cruises/1/0/1/V/4/Casino_Bar_121.JPG" alt="" width="205" height="107" />
                                        <!-- REPETED -->
                                        <br />
                                        <div class="span1 addToList"><a href="#" class="addToListA"><?php echo $this->lang->line('main_ADD_TO_BAR_LIST'); ?></a></div>
                                        <div class="span1 addToList"><a href="#" class="addToListA"><?php echo $this->lang->line('main_ADD_TO_FAVORITES'); ?></a></div>
                                        <div class="span1 addToList"><a href="#" class="addToListA"><?php echo $this->lang->line('main_ADD_TO_PUB_CRAWL'); ?></a></div>
                                        <br /><br /><br /><br />
                                        <p class="resultsName">CAFE MEIJERS</p>
                                        <br />
                                        <p class="resultsInfo">ARNHEM</p>
                                        <br /><br /><br />
                                        <p class="resultsInfo"><?php echo $this->lang->line('main_OPEN_TODAY'); ?> 20:00 - 02:00 am</p>
                                        <br />
                                        <p class="resultsInfo"><?php echo $this->lang->line('main_RATED'); ?> 8.5/10</p>
                                        <br /><br />
                                        <p class=""><?php echo $this->lang->line('main_BEERS_ON_DRAFT'); ?></p>

                                        <img class="maxImageSize2" src="http://www.2beerguys.com/images/forblog/guinness_logo_white.jpg" alt="" width="50" height="38" />
                                        <img class="maxImageSize2" src="http://www.seeklogo.com/images/M/Murphy_s-logo-DF494E2AAD-seeklogo.com.gif" alt="" width="50" height="38" />
                                        <img class="maxImageSize2" src="http://greatbrewers.com/sites/default/files/images/Palm%20Beer%20Logo.jpg" alt="" width="50" height="38" />
                                        <br /><br /><br />
                                        <p class="resultsInfo"><?php echo $this->lang->line('main_FIRST_EVENT_TONIGHT'); ?></p>
                                        <br /><br />
                                        <p class="resultsInfo firstEvent">n/a</p>
                                        <br /><br />
                                        <p class="resultsInfo"><?php echo $this->lang->line('main_FIRST_PROMO_TONIGHT'); ?></p>
                                        <br /><br />
                                        <p class="resultsInfo firstEvent">n/a</p>
                                        <br />
                                        <button type="button" id="buttonS" class="dnl-ui-button dnl-ui-button-black dnl-ui-text-shadow textSizeButton"><?php echo $this->lang->line('main_VISIT_BAR_PAGE'); ?>&nbsp<i class="icon-play icon-white"></i></button>
                                        <!-- END OF REPETED -->
                                    </div>
                                </div>
                                <li class="next">
                                    <a id="pager-next" href="#"></a>
                                </li>
                            </ul>
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

