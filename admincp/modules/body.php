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
	
	<?php include ("modules/body-left.php"); ?>	
	
	<?php include ("modules/body-right.php"); ?>
	</div>
	
	

</div>
