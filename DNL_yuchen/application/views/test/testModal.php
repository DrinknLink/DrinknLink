<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <base href="<?php echo base_url() ?>"/>
        <title>Drink & Link</title>
     
        <link href="common/css/bootstrap/bootstrap.css" rel="stylesheet" />
        <link href="common/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
	</head>
	<body>
        <!-- JQuery -->
        <script type="text/javascript" src="common/js/jquery/jquery.js"></script>
		<!-- Bootstrap -->
        <script type="text/javascript" src="common/js/bootstrap/bootstrap.js"></script>
        
	    <!-- Button to trigger modal -->
	    <a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
	     
	    <!-- Modal -->
	    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			    <h3 id="myModalLabel">Modal header</h3>
		    </div>
		    <div class="modal-body">
		    	<p>One fine body…</p>
		    </div>
		    <div class="modal-footer">
			    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			    <button class="btn btn-primary">Save changes</button>
		    </div>
	    </div>
	</body>
</html>