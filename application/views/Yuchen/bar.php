</head>

<body>
 	<div class="container" id="cover">
    	<div class="row-fluid">
    		<div class="span12">
    			<div class="container">
    				<div class="row-fluid">
    					<div class="span12" id="cover-photo">
			    			<div id="cover-barName">
			    				<h1 class="light-gray"><?= $barInfo['BarName'] ?></h1>
			    			</div>
			    			<div id="cover-map">
			    				<p id="cover-map-title">ON THE MAP</p>
			    				<div id="cover-map-route"></div>
			    			</div>
	    				</div>
	    			</div>
	    		</div>
    		</div>
    	</div>
    </div>
 	<div class="container" id="main">
    	<div class="row-fluid">
    		<div class="span12">
    			<div class="container" id="handleBar">
	    			<div class="handleBar-button-small"><a href="javascript:;">Back</a></div>
	    			<div class="handleBar-button-small">
		    			<a id="favourite" data="<?= $barInfo['BarID']?>" isFavourite="<?= !!$isFavourite?>"href="javascript:;">
		    				<?php if(!!$isFavourite){?>
		    					My Favourite
		    				<?php }else{?>
		    					Add to Favourite
		    				<?php }?>
	    				</a>
	    			</div>
	    			<div class="handleBar-button-small"><a href="javascript:;">Add to PubCrawl</a></div> 
	    			<div id="addBarlist" class="handleBar-button-small"><a href="javascript:;">Add bar to list</a></div>
	    			<div class="handleBar-button-rating"><a href="javascript:;">General Rating</a></div>
	    		</div>
    		</div>
    		<div id="handleBar-fake"></div>
    	</div>
		<div class="row-fluid">
			<div class="span2 z100">
				<div class="container" id="toBeFixed-span12">
	    			<div class="span2">
						<div class="" id="tab-list">
							<?php foreach($tabContent as $key => $value){?>
								<div id="tab">
									<a href="javascript:;" class="dark-grey side-tab" data="<?= $value['ajax'] ?>"><?= $value['content'] ?></a>
								</div>
							<?php }?>
								<div id="tab-list-fake"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="span7 z101" id="content"></div>
            <div class="span3 z101">
                <div class="well" id="right-box">
                	<div id="right-box-title">Opening Hours</div>
                	<div class="span4">
                		<ul>
	                		<li>Monday</li>
	                		<li>Tuesday</li>
	                		<li>Wednesday</li>
	                		<li>Thursday</li>
	                		<li>Friday</li>
	                		<li>Saturday</li>
	                		<li>Sunday</li>
	                	</ul>
                	</div>
                	<div class="span7" style="float: left;">
                		<ul>
                			<li>Closed</li>
	                		<li>14:00 - 01:00</li>
	                		<li>14:00 - 01:00</li>
	                		<li>14:00 - 01:00</li>
	                		<li>14:00 - 03:00</li>
	                		<li>14:00 - 03:00</li>
	                		<li>20:00 - 02:00</li>
	                	</ul>
                	</div>
                </div>
                <div class="well" id="right-box">
                	<div id="right-box-title">Address</div>
                	<div class="span12">
                		<ul>
	                		<li>Zwanenstraat 4</li>
		                	<li>6811 DD ARNHEM</li>
		               		<li>06 31001324</li>
		               	</ul>
                	</div>
                </div>
                <!--/.well -->
                <div class="well" id="right-box">
                	<span id="right-box-title">Friends who are here now</span>
                </div>
                <!--/.well -->
            </div>
            <!--/span-->
		</div>
    </div>
