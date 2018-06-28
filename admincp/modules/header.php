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
							<p style="line-height:30px;display:unset;">Hello, <?php echo $_SESSION['admin'] ?> (administrator)</p>
							<button class="btn btn-success  pull-right" name="logout">Logout <span class="glyphicon glyphicon-log-out"></span></button>
						</div>
					</form>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9" style="z-index:100;">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style=" margin-right:0px">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="index.php">Products</a></li>
								<li><a href="index.php?view=bill">Bills</a></li>
								<li><a href="index.php?view=account">Account</a></li>
							</ul>
						</div>
					</div>
					<!--<div class="col-sm-3">
					 <form action ="index.php" method="POST">
						<div class="input-group pull-right" style="padding-right:60px">
							<input class="form-control" type="text" name="txt-search" value="" placeholder="Search Dota2 Set & Item..." required>
							<div class="input-group-btn">
							<button class="btn btn-default" name="btn-search" type="submit" >
							<i class="fa fa-search"></i></button> 
							</div>
						  
						</div>	
					 </form>
					</div>-->
					
				</div>
			</div>
		</div><!--/header-bottom-->
		
	</header><!--/header-->