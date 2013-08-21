    </head>

    <body>
		<div class="container" id="admin-tab">
			<div class="row-fluid">
	 			<div class="span12">
	 				<ul style="margin:0;">
		 				<?php foreach($tab_content as $key => $value){?>
			 				<li class="admin-tab-button <?php if($key=='content') echo 'active';?> span3">
			 					<span class="admin-sprite-load <?= $key ?>-img"></span>
	                            <a href="#tab-content-<?= $key ?>" data-toggle="tab"><span class="admin-tab-link dark-blue"><?= $key ?></span></a>
	                        </li>
	                	<?php }?>
                	</ul>
				</div>
	 		</div>
	 		<div class="row-fluid">
	 			<div class="span12 tab-content" id="admin-subbar">
	 				<?php foreach($tab_content as $key => $value){?>
	 					<div id="tab-content-<?= $key ?>" class="tab-pane active">
		 					<?php foreach($value as $k => $v){?>
		 						<div class="span2 sub-tab-div">
			 						<a class="sub-tab dark-blue" href="javascript:void(0);" data="<?= $v['ajax']?>"><?= $v['content'] ?></a>
			 					</div>
							<?php }?>
						</div>
					<?php }?>
	 			</div>
	 		</div>
		</div>
        <div class="container" id="main">
            <!-- ajax refreshing here -->
            <div class="row-fluid">

				</div>
				<div class="row-fluid">
				    <div class="span3 z100">
				        <div class="container">
				            <div class="span12">
				                <div class="container">
				                    <div class="span3">
				
				                        <h5 class="h5-title">BEWERK:</h5>
				                        <p class="rightText">Toon op de site:</p>
				                        <br /><br />
				
				                        <div>
				                            <a id="Algemene" class="sideBar-fun-link inline-elements active" href="javascript:void(0);">
				                                <div class="function-name inline-elements"><span>Algemene gegevens</span></div>
				                            </a>
				                            <div class="nav-fun-buttons jaButtonActive inline-right-elements" onclick="switchFunction()">
				                                <div class="inline-right-elements ">Nee</div>
				                                <div class="inline-right-elements ">Ja</div>
				                            </div>
				                        </div>
				                        <br /><br />
				
				                        <div>
				                            <a id="Openingstijden" class="sideBar-fun-link inline-elements" href="javascript:void(0);">
				                                <div class="function-name inline-elements"><span>Openingstijden</span></div>
				                            </a>
				                            <div class="nav-fun-buttons jaButtonActive inline-right-elements" onclick="switchFunction()">
				                                <div class="inline-right-elements ">Nee</div>
				                                <div class="inline-right-elements ">Ja</div>
				                            </div>
				                        </div>
				                        <br /><br /><hr class="admin-horizontal" />
				
				                        <div>
				                            <a id="About" class="sideBar-fun-link inline-elements" href="javascript:void(0);">
				                                <div class="function-name inline-elements"><span>About the bar</span></div>
				                            </a>
				                            <div class="nav-fun-buttons neeButtonActive inline-right-elements" onclick="switchFunction()">
				                                <div class="inline-right-elements ">Nee</div>
				                                <div class="inline-right-elements ">Ja</div>
				                            </div>
				                        </div>
				                        <br /><br />
				
				                        <div>
				                            <a id="Crew" class="sideBar-fun-link inline-elements" href="javascript:void(0);">
				                                <div class="function-name inline-elements"><span>Crew</span></div>
				                            </a>
				                            <div class="nav-fun-buttons neeButtonActive inline-right-elements" onclick="switchFunction()">
				                                <div class="inline-right-elements ">Nee</div>
				                                <div class="inline-right-elements ">Ja</div>
				                            </div>
				                        </div>
				                        <br /><br />
				
				                        <div>
				                            <a id="News" class="sideBar-fun-link inline-elements" href="javascript:void(0);">
				                                <div class="function-name inline-elements"><span>News</span></div>
				                            </a>
				                            <div class="nav-fun-buttons jaButtonActive inline-right-elements" onclick="switchFunction()">
				                                <div class="inline-right-elements ">Nee</div>
				                                <div class="inline-right-elements ">Ja</div>
				                            </div>
				                        </div>
				                        <br /><br />
				
				                        <div>
				                            <a id="History" class="sideBar-fun-link inline-elements" href="javascript:void(0);">
				                                <div class="function-name inline-elements"><span>History</span></div>
				                            </a>
				                            <div class="nav-fun-buttons jaButtonActive inline-right-elements" onclick="switchFunction()">
				                                <div class="inline-right-elements ">Nee</div>
				                                <div class="inline-right-elements ">Ja</div>
				                            </div>
				                        </div>
				                        <br /><br />
				
				                        <div>
				                            <a id="Beers" class="sideBar-fun-link inline-elements" href="javascript:void(0);">
				                                <div class="function-name inline-elements"><span>Beers on draft</span></div>
				                            </a>
				                            <div class="nav-fun-buttons jaButtonActive inline-right-elements" onclick="switchFunction()">
				                                <div class="inline-right-elements ">Nee</div>
				                                <div class="inline-right-elements ">Ja</div>
				                            </div>
				                        </div>
				                        <br /><br />
				
				                        <!-- Button for help -->
				                        <a id="helpButton" href="javascript:void(0);"><img alt="" src="common/img/questionMArk2.png" /></a>
				
				
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
				    <div class="span9 z101" id="content">
				
				        <h3>Algemene gegevens</h3>
				        <p class="colorRed">* Verplicht invullen</p>
				        <span><span class="colorRed">*</span> Naam café</span>
				        <input class="inline-right-elements algemeneInput" type="text" name="naamCafe"><br /><br />
				        <span><span class="colorRed">*</span> Adres</span>
				        <input class="inline-right-elements algemeneInput" type="text" name="adres"><br /><br />
				        <span><span class="colorRed">*</span> Postcode</span>
				        <input class="inline-right-elements algemeneInput" type="text" name="postcode"><br /><br />
				        <span><span class="colorRed">*</span> Plaats</span>
				        <input class="inline-right-elements algemeneInput" type="text" name="plaats"><br /><br />
				        <span><span class="colorRed">*</span> Telefoon</span>
				        <input class="inline-right-elements algemeneInput" type="text" name="telefoon"><br /><br />
				        <span>Email</span>
				        <input class="inline-right-elements algemeneInput" type="text" name="email"><br /><br />
				        <span>Website</span>
				        <input class="inline-right-elements algemeneInput" type="text" name="website">
				
				        <div class="row-fluid controls">
				            <div class="span4"><a id="annuleren" href="">Annuleren</a></div>
				            <div class="span4"><a id ="voorbeeld" href="">Voorbeeld bekijken</a></div>
				            <div class="span4"><a id="opslaan" href="">Wijzigingen opslaan</a></div>
				        </div>
				
				    </div>
				</div>
				
				
				<!-- Modal -->
				<div id="holidayModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="holidayModalLabel" aria-hidden="true">
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
		</div>

