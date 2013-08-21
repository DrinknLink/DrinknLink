<div id="social-media-feed-switch">
 	<ul class="nav nav-tabs">
 		<li class="active social-tab"><a href="#about" data-toggle="tab" class="size30"><font color="3c5a98"><i data-icon="7"></i></font></a></li>
 		<li class="social-tab"><a href="#crew" data-toggle="tab" class="size30"><font color="00acee"><i data-icon="B"></i></font></i></a></li>
 		<li class="social-tab"><a href="#news" data-toggle="tab" class="size30"><font color="3c5a98"><i data-icon="t"></i></font></a></li>
 		<li class="social-tab"><a href="#history" data-toggle="tab" class="size30"><font color="3c5a98"><i data-icon="f"></i></font></a></li>
 		<li class="social-tab"><a href="#beers" data-toggle="tab" class="size30"><font color="3c5a98"><i data-icon="m"></i></font></a></li>
 	</ul>
</div>
<div class="tab-content" style="background-color:white;">
	<div id="about" class="tab-pane active">
		<h3>About us</h3>
		<div>
			<span>
				<?= $barInfo['BarAbout'] ?>
			</span>
		</div>
	</div>
	<div id="crew" class="tab-pane">
		<h3>Crew</h3>	
	</div>
	<div id="news" class="tab-pane">
		<h3>News</h3>
	</div>
	<div id="history" class="tab-pane">
		<h3>History</h3>
		<div>
			<span>
				<?= $barInfo['BarHistory'] ?>
			</span>
		</div>
	</div>
	<div id="beers" class="tab-pane">
		<h3>Beers on draft</h3>
	</div>
</div>
