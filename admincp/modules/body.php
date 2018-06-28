<?php
	include_once("modules/access.php");
?>


<div class="container" >
	<div class="row">
		<div class="col-md-12">
	 <?php
				if (isset($_POST['add'])){
					echo $kq;
				}elseif (isset($_POST['del'])){
					echo $kq;
				}elseif (isset($_POST['save'])){
					echo $kq;
				}
	?>
		</div>
	</div>
	
	
	<div class="row">
	
	<?php 
	
	if (isset ($_GET['view'])){
		$view = $_GET['view'];
	}else{
		$view = '';
	}
	if ($view == 'bill'){
		include ("modules/bill.php");
	}elseif ($view == 'account') {
		include ("modules/account.php"); 
	}else{
		include ("modules/body-left.php"); 	
		include ("modules/body-right.php");
	}
	?>
	</div>
	
	

</div>
