<?php
	$kt = 1;
	if (isset ($_SESSION['cart'])) {
		foreach ($_SESSION['cart'] as $key => $value) {
			if (isset ($key)) {
				$kt = 0;
			}
		}
	}
	if ($kt != 0) {
		$cart = '0';
	}else{
		$cart1 = $_SESSION['cart'];
		$cart = count ($cart1);
	}
?>
<header id="header" style="margin-bottom: 10px"><!--header-->
		<div class="header_top"> <!--header top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +84 1653 268 673</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> msv14106173@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div> <!--/header top-->
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/images/Dota_2.png" style="width: 200px;" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php 
									if (isset ($_SESSION['login'])) {
								?>
								
									<li><a href="index.php?view=account/<?=$_SESSION['login'][3]?>"><i class="fa fa-user"></i> <?=$_SESSION['login'][1] ?><?php if ($_SESSION['login']['user_lv']==1){ echo ' (administrator)';  } ?></a></li>
									
								<?php
									}else{
										echo '<li><a href="index.php?view=register"><i class="fa fa-user"></i> Register</a></li>';
									}
								?>
								
								<li><a href="index.php?view=cart"><i class="fa fa-shopping-cart"></i> Cart (<?php echo $cart ?>)</a></li>
								<?php
										if (isset ($_SESSION['login'])) {
											echo '<li><a href="index.php?view=logout"><i class="fa fa-sign-out"></i> Logout</a></li>';
										}else{
											echo '<li><a href="index.php?view=login"><i class="fa fa-sign-in"></i> Login</a></li>';
										}
									?>
							</ul>
						</div>
					</div>
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
								<li class="dropdown"><a>Workshop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="index.php?view=set&pg=1">Set</a></li>
										<li><a href="index.php?view=items&pg=1">Item</a></li> 
										<li><a href="#">Arcana</a></li> 
										<li><a href="index.php?view=immortal&pg=1">Immortal</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a>Guide<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="#">Hero Guide</a></li>
										<li><a href="#">Item Guide</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="index.php?view=contact">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
					 <form action ="index.php" method="POST">
						<div class="input-group pull-right" style="padding-right:60px">
							<input class="form-control" type="text" name="txt-search" value="" placeholder="Search Dota2 Set & Item..." required>
							<div class="input-group-btn">
							<button class="btn btn-default" name="btn-search" type="submit" >
							<i class="fa fa-search"></i></button> 
							</div>
						  
						</div>	
					 </form>
					</div>
					
				</div>
			</div>
		</div><!--/header-bottom-->
		
			
		
		
		
		
	</header><!--/header-->