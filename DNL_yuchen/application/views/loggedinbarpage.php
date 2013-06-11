<div id="grid-home" class="column-center">
    <div class="column columnEvents">	

        <div class="row">
            <!-- Main body right -->
            <div id="mainPart2" class="column column-1-2">
                <div class="row">

                    <!-- left side nav -->
                    <div id="bigNav" class="span2">
                        <div class="tabbable">
                            <ul class="nav nav-tabs">                              
                                <li class="bigNavLinks">
                                    <a href="#tab1" data-toggle="tab">
                                        <table>
                                            <tr>
                                                <td><div id="picbarinfo" href="#"></div></td>
                                                <td>&nbsp<?php echo $this->lang->line('bigNav_BAR_INFO'); ?></td>
                                            </tr>
                                        </table>
                                    </a>
                                </li>
                                <li class="bigNavLinks active">
                                    <a href="#tab2" data-toggle="tab">
                                        <table>
                                            <tr>
                                                <td><div id="picenp" href="#"></div></td>
                                                <td>&nbsp<?php echo $this->lang->line('bigNav_EVENTS_AND_PROMOTIONS'); ?></td>
                                            </tr>
                                        </table>
                                    </a>
                                </li>
                                <li class="bigNavLinks">
                                    <a href="#tab3" data-toggle="tab">
                                        <table>
                                            <tr>
                                                <td><div id="picsm" href="#"></div></td>
                                                <td>&nbsp<?php echo $this->lang->line('bigNav_SOCIAL_MEDIA'); ?></td>
                                            </tr>
                                        </table>
                                    </a>
                                </li>
                                <li class="bigNavLinks">
                                    <a href="#tab4" data-toggle="tab">
                                        <table>
                                            <tr>
                                                <td><div id="picrnb" href="#"></div></td>
                                                <td>&nbsp<?php echo $this->lang->line('bigNav_RESERVE_OR_BOOK'); ?></td>
                                            </tr>
                                        </table>    
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div id="quick-search" class="dnl-ui-drop-shadow dnl-ui-rounded-corners eventsMainDiv size-addon2">								


                        <div class="tab-content eventsTabContent">

                            <div class="tab-pane" id="tab1">
                                Bar info....
                            </div>
                            <div class="tab-pane active" id="tab2">

                                <!-- EVENTS & PROMOTIONS -->
                                <h1><?php echo $this->lang->line('main_EVENTS_AND_PROMOTIONS'); ?></h1>

                                <div id="calendarFilterBox"></div>
                                
                                <!-- Event 1 -->
                                <hr style="background:#b3b3b3; border:0; height:1px" />
                                <p class="barEventDate"><?php echo $this->lang->line('bar_JANUARY'); ?>&nbsp 1</p>
                                <p class="barEventTitle">HAPPY 2013 - NEW YEAR PARTY!</p>
                                <img class="barEventImg" width="105" height="105" src="http://smashmaterials.com/wp-content/uploads/2012/12/2013-New-Year.jpg" alt="" />
                                <p class="barEventText">Have you ever copied some text from a web page or 
                                    a document and then wanted to paste it as simple text into another 
                                    application without getting all the formatting from the original 
                                    source? PureText makes this simple by adding a new Windows hot-key 
                                    (default is WINDOWS+V) that allows you to paste text to any 
                                    application without formatting.
                                </p>
                                <a class="barEventReminder" href="#"><?php echo $this->lang->line('bar_SET_REMINDER'); ?></a>
                                
                                
                                <!-- Event 2 -->
                                <hr style="background:#b3b3b3; border:0; height:1px" />
                                <p class="barEventDate"><?php echo $this->lang->line('bar_FEBRUARY'); ?>&nbsp 14</p>
                                <p class="barEventTitle">HAPPY 2013 - NEW YEAR PARTY!</p>
                                <img class="barEventImg" width="105" height="105" src="http://www.dragoart.com/tuts/pics/9/11693/96381/how-to-draw-arrow-hearts-step-1.gif" alt="" />
                                <p class="barEventText">The easiest way to use PureText is to simply 
                                    use its hot-key to paste text instead of using the standard CTRL+V 
                                    hot-key that is built into most Windows applications.  To configure 
                                    PureText, right-click on its tray icon and choose "Options" from the 
                                    pop-up menu.  The default hot-key is WINDOWS+V, but this can be changed.  
                                    In this Options window, you can also configure PureText to run each 
                                    time you log into Windows.
                                </p>
                                <a class="barEventReminder" href="#"><?php echo $this->lang->line('bar_SET_REMINDER'); ?></a>
                                
                                <!-- Event 3 -->
                                <hr style="background:#b3b3b3; border:0; height:1px" />
                                <img class="barEventImg" width="105" height="105" src="http://rlv.zcache.co.uk/yellow_colour_circle_christmas_ornament-rfdce0e4a51654ba98890fc707dd95385_x7s2y_8byvr_152.jpg" alt="" />
                                <p class="barEventText">PureText only removes rich formatting from text.  
                                    This includes the font face, font style (bold, italics, etc.), font color, 
                                    paragraph styles (left/right/center aligned), margins, character spacing, 
                                    bullets, subscript, superscript, tables, charts, pictures, embedded objects, etc.  
                                    However, it does not modify the actual text.  It will not remove or fix new-lines, 
                                    carriage returns, tabs, or other white-space.  It will not fix word-wrap or clean 
                                    up your paragraphs.
                                </p>
                                <a class="barEventReminder" href="#"><?php echo $this->lang->line('bar_SET_REMINDER'); ?></a>
                                
                                <!-- END OF EVENTS & PROMOTIONS -->

                            </div>
                            <div class="tab-pane" id="tab3">
                                Social media..
                            </div>
                            <div class="tab-pane" id="tab4">
                                Reserve or book..
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Overside -->

            <div class="dnl-ui-clearfix"></div>	
        </div>

    </div>

    <div class="column infoBar">				

        <div class="dnl-ui-drop-shadow dnl-ui-rounded-corners" id="openingHoursDiv">
            <h1><?php echo $this->lang->line('main_OPENING_HOURS'); ?></h1>
            <table>
                <tr>
                    <td><?php echo $this->lang->line('main_MONDAY'); ?></td>
                    <td><?php echo $this->lang->line('main_CLOSED'); ?></td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('main_TUESDAY'); ?></td>
                    <td>14:00 - 01:00</td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('main_WEDNESDAY'); ?></td>
                    <td>14:00 - 01:00</td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('main_THURSDAY'); ?></td>
                    <td>14:00 - 01:00</td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('main_FRIDAY'); ?></td>
                    <td>14:00 - 03:00</td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('main_SATURDAY'); ?></td>
                    <td>14:00 - 03:00</td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('main_SUNDAY'); ?></td>
                    <td>20:00 - 02:00</td>
                </tr>
            </table>
        </div>

        <div class="dnl-ui-drop-shadow dnl-ui-rounded-corners" id="addressDiv">
            <h1><?php echo $this->lang->line('main_ADDRESS'); ?></h1>

            <p><b>THE PEGASUS PUB</b></p>
            <table>
                <tr>
                    <td>Zwanenstraat 4</td>
                </tr>
                <tr>
                    <td>6811 DD ARNHEM</td>
                </tr>
                <tr>
                    <td>0631001324</td>
                </tr>
            </table>
            <br />
            <table>
                <tr>
                    <td><b>SOCIAL</b></td>
                </tr>
                <tr>
                    <td>Facebook </td>
                    <td>PegasusPub</td>
                </tr>
                <tr>
                    <td>Twitter</td>
                    <td>@PegasusPub</td>
                </tr>
            </table>
        </div>

        <div class="dnl-ui-drop-shadow dnl-ui-rounded-corners" id="friendsHereNowDiv">
            <h1><?php echo $this->lang->line('bar_FRIENDS_HERE_NOW'); ?></h1>

            <table>
                <tr>
                    <td><img src="http://r-net.rollins.edu/marketing-communications/images/facebook_silhouette.png" alt="" height="30" width="30" /></td>
                    <td>Peter van der Pol</td>
                </tr>
                <tr>
                    <td><img src="http://r-net.rollins.edu/marketing-communications/images/facebook_silhouette.png" alt="" height="30" width="30" /></td>
                    <td>Jennifer de Vries</td>
                </tr>      
                <tr>
                    <td><img src="http://r-net.rollins.edu/marketing-communications/images/facebook_silhouette.png" alt="" height="30" width="30" /></td>
                    <td>Michael Schut-Jansen</td>
                </tr>      
            </table>


        </div>
    </div>


    <!-- social media 
    <div class="dnl-ui-rounded-corners" id="footer-social-media">
        <div class="icon"><span class="dnl-ui-sprite facebook"></span></div>
        <div class="text"><span><?php echo $this->lang->line('social_media_STAY_INFORMED_WITH_FACEBOOK'); ?></span> <a href="#"><?php echo $this->lang->line('social_media_AND_LIKE_US_ON_FACEBOOK'); ?></span></a></div>
        <div class="divider"><hr></div>
        <div class="icon"><span class="dnl-ui-sprite twitter"></span></div>
        <div class="text"><span><?php echo $this->lang->line('social_media_STAY_EVEN_MORE_INFORMED_WITH_TWITTER'); ?></span> <a href=""><?php echo $this->lang->line('social_media_AND_FOLLOW_US_ON_TWITTER'); ?></a></div>
        <div class="divider"><hr></div>				
        <div class="icon"><span class="dnl-ui-sprite linkedin"></span></div>
        <div class="text"><span><?php echo $this->lang->line('social_media_JON_US_ON_LINKEDIN'); ?></span> <a href=""><?php echo $this->lang->line('social_media_VIA_LINKEDIN'); ?></a></div>		
    </div>-->


</div>

