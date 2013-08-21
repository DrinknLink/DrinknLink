	</head>
	<body>
		<div class="container" id="admin-container">
			<div class="row-fluid" id="admin-header">
				<img src="common/img/DnL-FB-header.jpg" id="admin-header-photo"/>
			</div>
			<div class="row-fluid" id="admin-info">
				<div class="span12 admin-index-title">
					<span class="dark-blue size25">Account Info</span>
				</div>
			</div>
			<div class="row-fluid" id="admin-info">
				<div class="span12">
					<p class="dark-blue">email: <?= $currentOwnerinfo['OwnerEmail'] ?></p>
					<p class="dark-blue">name: <?= $currentOwnerinfo['OwnerName'] ?></p>
				</div>
			</div>
			<div class="row-fluid" id="admin-barlist">
				<div class="span12 admin-index-title">
					<span class="dark-blue size25">Bar</span>
				</div>
			</div>
			<?php 
				if($myBarinfoList){
					foreach($myBarinfoList as $key => $value){?>
						<div class="row-fluid">
							<div class="span12">
								<a href="admin/bar?bid=<?= $value['BarID'] ?>" target="_blank" class="dark-blue"><?= $value['BarName']?></a>
							</div>
						</div>
			<?php
					} 
				}
			?>
			<button class="btn btn-primary" id="createNew">+ Create New</button>
		</div>
		
