<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Drink 'n Link</title>
    <base href="<?php echo base_url() ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="common/css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="common/bootstrap/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
    <link href="common/css/bootstrap/timePicker.css" rel="stylesheet" type="text/css" />
    <link href="common/css/basic.css" rel="stylesheet" type="text/css" />
    <link href="common/css/icon-fonts.css" rel="stylesheet" type="text/css" />
    
    <!-- Google Map -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="common/js/googleMaps.js"></script>
        
    <script src="common/js/jquery/jquery.js"></script>
    <script type="text/javascript" src="common/js/jquery/jquery.validate.js"></script>
    <script type="text/javascript" src="common/js/jquery/jquery.metadata.js"></script>
    <script type="text/javascript" src="common/js/jquery/placeholderIE.js"></script>
    <script type="text/javascript" src="common/js/bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="common/js/bootstrap/timePicker.js"></script>
    <script type="text/javascript" src="common/js/plugins/stellar.js"></script>
    <script type="text/javascript" src="common/js/public.js"></script>
    <script type="text/javascript" src="common/js/initial.js"></script>

    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script type="text/javascript" src="common/js/PIE.js"></script>
    <![endif]-->
    <script src="common/js/initialPIE.js"></script>

    <?php
    	if(@$css){ 
    		foreach($css as $value){
	?>
   				<link href="common/css/<?= $value ?>.css" rel="stylesheet" type="text/css" />
    <?php
			}
		}
	?>
    <?php
    	if(@$js){ 
			foreach($js as $value){
	?>
    			<script type="text/javascript" src="common/js/<?= $value ?>.js"></script>
    <?php
			}
		}
    ?>
    