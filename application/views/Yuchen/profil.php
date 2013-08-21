</head>

<body>
	<div class="container" id="cover">
    	<div class="row-fluid">
    		<div class="span12" id="cover-photo">
    			<div id="cover-barName">
    				<h1 class="light-gray"><?= $profilInfo['UserName'] ?></h1>
    			</div>
    			<div id="cover-map">
    				<p id="cover-map-title">ON THE MAP</p>
    				<div id="cover-map-route"></div>
    			</div>
    		</div>
    	</div>
    </div>
	<div class="container" id="main">
		<div class="row-fluid">
    		<div class="span12">
    			<div class="container" id="handleBar">
    				<div class="handleBar-button-small">a</div> 
	    			<div class="handleBar-button-small">
	    				<a id="friendConnection" data="<?= $profilInfo['UserID']?>" friendStatus="<?= $friendRelationship?>"href="javascript:;">
		    			<?if($friendRelationship == 0){ ?>
		    				Send Request
		    			<?php }elseif($friendRelationship == 1){?>
		    				Request Sent
		    			<?php }elseif($friendRelationship == 2){?>
		    				My Friend
		    			<?php }?>
		    			</a>
	    			</div>
	    			<div class="handleBar-button-small">c</div> 
	    			<div class="handleBar-button-small">d</div>
	    			<div class="handleBar-button-rating">e</div>
	    		</div>
    		</div>
    		<div id="handleBar-fake"></div>
    	</div>
    	<div class="row-fluid">
    		<div class="container" id="toBeFixed">
    			<div class="span12">
    				<div class="container" id="toBeFixed-span12">
						<div class="span3" id="tab-list">
							<div id="tab">GENERAL INFO</div>
							<div id="tab">EVENTS & PROMOTIONS</div>
							<div id="tab">
								INTERACTION & SOCIAL MEDIA
							</div>
							<div id="tab">REVIEW</div>
							<div id="tab">MENU & RESERVATIONS</div>
							<div id="tab">MEDIA</div>
							<div id="tab">FREE FORMAT</s></div>
							<div id="tab-list-fake"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span9 offset3" id="content"></div>
		</div>
    </div>