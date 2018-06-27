<?php 
	include ("controllers/logout.php");
; 
?>
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><h5 style="padding-right:20px;"><i class="fa fa-phone"></i> +84 165 326 8673</h5></li>
								<li><h5><i class="fa fa-envelope"></i> msv14106173@gmail.com</h5></li>
							</ul>
						</div>
					</div>
					
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="https://d1u5p3l4wpay3k.cloudfront.net/dota2_gamepedia/5/52/Dota_2.png" style="width: 200px;" alt="" /></a>
						</div>
					</div>
					<form action="index.php" method="POST">
						<div class="col-sm-4  pull-right" style="padding-right: 0px;">
							<button class="btn btn-success  pull-right" name="logout">Logout <span class="glyphicon glyphicon-log-out"></span></button>
						</div>
					</form>
				</div>
			</div>
		</div><!--/header-middle-->
	
		
	</header><!--/header-->