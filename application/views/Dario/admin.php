<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Admin</title>
        <base href="<?php echo base_url() ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Le styles -->
        <!-- TODO: make sure bootstrap.min.css points to BootTheme generated file
        -->
        <link href="common/css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="common/css/admin.css" rel="stylesheet" type="text/css" />
        <link href="common/css/adminBasic.css" rel="stylesheet" type="text/css" />
        <link href="common/css/bootstrap/timePicker.css" rel="stylesheet" type="text/css" />
        <link href="common/css/bootstrap/datepicker.css" rel="stylesheet" type="text/css" />
        <link href="common/css/icon-fonts_Dario.css" rel="stylesheet" type="text/css" />
        <script src="common/js/jquery/jquery.js"></script>
        <script src="common/js/bootstrap/bootstrap.js"></script>
        <!-- TODO: make sure bootstrap-responsive.min.css points to BootTheme
            generated file -->
        <link href="common/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
        <script src="common/js/bootstrap/timePicker.js"></script> 
        <script src="common/js/bootstrap/datepicker.js"></script> 
        <script src="common/js/public.js"></script>
        <script src="common/js/events.js"></script>
        <script src="common/js/general.js"></script>
        <script type="text/javascript" src="common/js/jquery/jquery.validate.js"></script>
        <script type="text/javascript" src="common/js/jquery/jquery.metadata.js"></script>
        <script src="common/js/jquery/jquery.sagud.js" type="text/javascript"></script>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <link href="common/css/adminIE.css" rel="stylesheet" type="text/css" />
        <![endif]-->

    </head>

    <body>
        <div id="languageBar">
            <div class="container">
                <a id="switch-language">English</a>
                <span id="switch-language" class="dnl-ui-sprite en-US"></span>
                <div id="switch-language" class="divider-language">|</div>
                <a id="switch-language">Netherlands</a>
                <span id="switch-language" class="dnl-ui-sprite nl-NL"></span>
            </div>
        </div>

        <div class="container" id="navbar">
            <div class="row" id="navbar-inner">
                <div class="span12 ">


                    <div id="navbar-info">
                        <div id="navbar-welcome"><span id="loggedInText">HELLO</span></div>
                        <div id="navbar-name"><span id="loggedInName" class="">THE PEGASUS PUB ADMIN</span></div>
                        <div id="navbar-button"><a href="http://www.drinknlink.com/Dario/admin">Log out</a></div>
                        <div id="navbar-button"><a href="http://www.drinknlink.com/Dario/admin">Messages</a></div>
                        <div id="navbar-button"><a href="http://www.drinknlink.com/Dario/admin">Notifications</a></div>
                        <div id="navbar-lock" class="admin-sprite-load2 lock-img"></div>
                    </div>

                    <hr class="admin-horizontal admin-horizontal3" />

                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 nav-up">

                    <a href="#" ><div class="sprite-load2 logo-img"></div></a>

                    <a href="http://www.drinknlink.com/Dario/admin" class="handleBar-title-size">
                        <div id="handleBar-button-active">
                            <div class="admin-sprite-load content-img"></div>
                            <span class="handleBar-text visible-desktop">Content</span>
                        </div>
                    </a>
                    <a href="http://www.drinknlink.com/Dario/admin" class="handleBar-title-size">
                        <div id="handleBar-button-large">
                            <div class="admin-sprite-load design-img"></div>
                            <span class="handleBar-text visible-desktop">Design</span>
                        </div>
                    </a>
                    <a href="http://www.drinknlink.com/Dario/admin" class="handleBar-title-size">
                        <div id="handleBar-button-large">
                            <div class="admin-sprite-load category-img"></div>
                            <span class="handleBar-text visible-desktop">Category settings</span>
                        </div>
                    </a>
                    <a href="http://www.drinknlink.com/Dario/admin" class="handleBar-title-size">
                        <div id="handleBar-button-large">
                            <div class="admin-sprite-load account-img"></div>
                            <span class="handleBar-text visible-desktop">Account, Payment</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12" id="handleBar-subBar">

                    <a id="pageLayout" href="javascript:void(0);" class="inline-elements">Page layout</a>
                    <div class="handleBar-space inline-elements">-</div>
                    <a id="generalInfo" href="javascript:void(0);" class="inline-elements active">General info</a>
                    <div class="handleBar-space inline-elements">-</div>
                    <a id="eventsPromotions" href="javascript:void(0);" class="inline-elements">Events & Promotions</a>
                    <div class="handleBar-space inline-elements">-</div>
                    <a id="interactionSM" href="javascript:void(0);" class="inline-elements">Interaction & Social Media</a>
                    <div class="handleBar-space inline-elements">-</div>
                    <a id="reviews" href="javascript:void(0);" class="inline-elements">Reviews</a>
                    <div class="handleBar-space inline-elements">-</div>
                    <a id="menuReservations" href="javascript:void(0);" class="inline-elements">Menu & Reservations</a>
                    <div class="handleBar-space inline-elements">-</div>
                    <a id="media" href="javascript:void(0);" class="inline-elements">Media</a>
                    <br class="inline-elements-clear" />

                </div>
            </div>
        </div>
        <div class="container" id="main">
            <!-- ajax refreshing here -->



