<?php
	session_start();
	
	include ("controllers/add-cart.php");

	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$date = date('Y-m-d H:i');
	
	
	
	
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="https://seeklogo.com/images/D/dota-2-logo-A8CAC9B4C9-seeklogo.com.png" type="image/gif" sizes="16x16">
    <title>Home | Dota 2 WorkShop</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
	
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	
	<link href="./owl/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css">
	<link href="./owl/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">
	

</head><!--/head-->

<body>
	
	<?php
		
		include("modules/config.php");
		include("modules/header.php");
		if (empty ($_GET) && !isset($_POST['btn-search'])) {
			include ('modules/slider.php'); 
		}
	?>
	
	<?php
		if (isset ($_SESSION['login'][3])) {
			$login2 = $_SESSION['login'][3];
		}else{
			$login2 = '';
		}
		
		if (isset ($_GET['view'])){
			$view = $_GET['view'];
		}else{
			$view = '';
		}
		
		if ($view == 'cart') {
			include("modules/cart.php");
		}elseif ($view == 'register') {
			include ("modules/register.php");
		}elseif ($view == 'login') {
			include ("modules/login.php");
		}elseif ($view == 'logout') {
			include ("modules/logout.php");
		}elseif ($view == 'checkout') {
			include ("modules/checkout.php");
		}elseif ($view == 'test') {
			include ("modules/test.php");
		}elseif ($view == 'account/'.$login2.'') {
			include ("modules/account.php");
		}elseif ($view == 'password') {
			include ("modules/password.php");
		}elseif ($view == 'contact') {
			include ("modules/contact-us.php");
		}elseif (isset ($_POST['btn-search'])) {
			include ("modules/search.php");
		}elseif ($view == 'bill') {
			include ("modules/bill.php");	
		}else{
			include("modules/body.php");
		}
	?>
	
	<?php
		include("modules/footer.php");
	?>
	
	<script src="./owl/docs/assets/vendors/jquery.min.js" type="text/javascript"></script>
	<script src="./owl/dist/owl.carousel.js" type="text/javascript"></script>
<style>
.owl-nav{
	font-size:35px;
}
</style>

<script type="text/javascript">
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
	nav:true,
	autoplay:true,
	autoplayTimeout:2000,
	autoplayHoverPause:false,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
			nav:false,
            
        },
        600:{
			nav:true,
            items:3,
          
        },
        1000:{
            items:5,
          nav:true,
            loop:true,
        }
    }
})
</script>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	
</body>
</html>