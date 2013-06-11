<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?php echo base_url() ?>"/>
        <title><?php // echo $this->title;                      ?></title>

        <!-- CSS --> 
        <link href="common/css/styleO.css" rel="stylesheet" />
        <link href="common/css/style.css" rel="stylesheet" />
        <link href="common/css/sagud.css" rel="stylesheet" />
        <link href="common/css/bootstrap/bootstrap.css" rel="stylesheet" />
        <link href="common/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
        <link href="common/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
        <link href="common/css/jquery.calendarPicker.css" rel="stylesheet" type="text/css" />
        
        <!-- JS -->
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript" src="common/js/jquery/jquery.validate.js"></script>
        <script type="text/javascript" src="common/js/jquery/jquery.metadata.js"></script>
        <script type="text/javascript" src="common/js/jquery/jquery.mCustomScrollbar.concat.min.js"></script>        
        <!-- Bootstrap -->
        <script type="text/javascript" src="common/js/bootstrap/bootstrap.js"></script>
        <!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="common/js/barGoogleMaps.js"></script> 
        
        <script type="text/javascript" src="common/js/jquery/jquery.quick.pagination.min.js"></script>
        <script type="text/javascript" src="common/js/jquery/jquery.calendarPicker.js"></script>
        <script type="text/javascript" src="common/js/public.js"></script>
<!--        <script type="text/javascript" src="common/js/navi.js"></script>-->

        <!-- my jQuery -->
        <script type="text/javascript" src="common/js/jquery/jquery.sagud.js"></script>

        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>
    <body>
        <div id="background">
            <div id="layer-gradient"></div>
            <!-- <div id="layer-header"></div>-->
            <div id="layer-bubbles"></div>
        </div>

        <div id="header">
            <div id="locale">
                <div class="column-center">						
                    <ul id="locale-selector-list" class="dnl-ui-list vertical">
                        <li class=""><span class="dnl-ui-sprite nl-NL"></span><a href="/locale/nl_NL">nederlands</a></li>
                        <li class="divider">|</li>
                        <li class="active"><span class="dnl-ui-sprite en-US"></span><a href="/locale/en_US">english</a></li>
                    </ul>
                </div>			
            </div>

            <div id="userMenu" class="middle-screen">
                <a href="#" class="userMenu-inline"><img id="dnlUserPic" src="common/img/logo/dnl.png" width="55" height="55" alt="" /></a>
                <div id="loginPanel" class="userMenu-inline">
                    <p id="loggedInTextStyle"><?php echo $this->lang->line('bar_LOGGED_IN_AS'); ?></p>
                    <p id="loggedInNameStyle">HANS VAN DER STEEN</p>

                    <a href="#" class="userConfig"><i class="icon-wrench"></i>&nbsp<?php echo $this->lang->line('bar_SETTINGS'); ?></a>
                    <div class="userConfig verticalLine"></div>
                    <a href="#" class="userConfig"><i class="icon-pencil"></i>&nbsp<?php echo $this->lang->line('bar_EDIT_PROFILE'); ?></a>

                </div>
                <a href="#" class="userMenu-inline barNavPics picUserNotification"></a>
                <a href="#" class="userMenu-inline barNavPics picMessages"></a>
                <a href="#" class="userMenu-inline barNavPics picAddFanPage"></a>
                <a href="#" class="userMenu-inline barNavPics picMyDnl"></a>
                <a href="#" class="userMenu-inline barNavPics picMyBars"></a>

                <div class="userMenu-inline verticalLine verticalLineLogOut"></div>
                <a href="#" class="userMenu-inline picLogOut"></a>
            </div>

            <div id="layer-image"></div>

            <div class="column-center">			
                <!-- Google maps -->
                <div class="row">

                    <!-- Map -->
                    <div id="barGoogleMap"></div> 
                    <div id="contentMaps">
                        <a href=""><img src="common/img/plot.jpg" alt="" /></a>
                    </div>
                    <p id="onTheMap"><?php echo $this->lang->line('bar_ON_THE_MAP'); ?></p>

                </div>

                <p id="headerBarTitle">THE PEGASUS PUB</p>

            </div>

            <div id="barMenu" class="middle-screen">
                <a href="#" class="barMenu-inline barMenuPics1 picBackToOverview"></a>
                <a href="#" class="barMenu-inline barMenuPics2 picAddToFavoriteBars"></a>
                <a href="#" class="barMenu-inline barMenuPics2 picAddToPubCrawl"></a>
                <a href="#" class="barMenu-inline barMenuPics2 picAddToBarList"></a>              
                <img src="common/img/rating01.jpg" alt="" class="barMenu-inline" />
                <a href="#" class="barMenu-inline picRatingGrade grade1"></a>
                <a href="#" class="barMenu-inline picRatingGrade grade2"></a>
                <a href="#" class="barMenu-inline picRatingGrade grade3"></a>
                <a href="#" class="barMenu-inline picRatingGrade grade4"></a>
                <a href="#" class="barMenu-inline picRatingGrade grade5"></a>
                <a href="#" class="barMenu-inline picRatingGrade grade6"></a>
                <a href="#" class="barMenu-inline picRatingGrade grade7"></a>
                <a href="#" class="barMenu-inline picRatingGrade grade8"></a>
                <a href="#" class="barMenu-inline picRatingGrade grade9"></a>
                <a href="#" class="barMenu-inline picRatingGrade grade10"></a>
                <img src="common/img/rating02.jpg" alt="" class="barMenu-inline picRatingLast" />
            </div>

        </div>
