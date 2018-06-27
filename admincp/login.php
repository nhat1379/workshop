<?php
	session_start();
	include ("controllers/access-login.php");
	
	if (isset($_SESSION['admin'])) {
		echo '<script type="text/javascript">
				window.location.href = "index.php";
			</script>';
	}
	
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ADMIN | Dota 2 WorkShop</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	
</head><!--/head-->
<body>

<div class="container">
	<div class="row">
	  <div class="col-sm-3">
	  </div>
	  <div class="col-sm-6">
		<div class="panel-heading">
		   <div class="panel-title text-center">
				<h1 class="title">Dota2 Community</h1>
			</div>
		</div> 
		<div class="main-login main-center">
		
			<form class="form-horizontal" method="post" action="login.php">
				<div class="form-group">
					<?php
						if (isset ($_POST['login'])) {
							echo $kq;
						}
					?>
				</div>
				<div class="form-group">
				<?php
					if (isset ($_POST['admin'])){
					echo $kq;
					}
				?>
					<label for="username" class="cols-sm-2 control-label">Username</label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username	" required />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="confirm" class="cols-sm-2 control-label">Password</label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
							<input type="password" class="form-control" name="password" id="password"  placeholder="Confirm your Password" required />
						</div>
					</div>
				</div>

				<div class="form-group ">
					<button type="submit" name="admin" class="btn btn-primary btn-lg btn-block login-button">Login</button>
				</div>
				
				
			</form>
		</div>
	  </div>
	  <div class="col-sm-3">
	  </div>
	</div>	
</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

