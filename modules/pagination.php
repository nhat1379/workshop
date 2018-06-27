<?php
	if (isset ($_GET['pg'])) {
		$page = $_GET['pg'];
	}else{
		$page = '';
	}
	if ($page == '' || $page ==1 || $page==0){
		$pg = 0;
	}else{
		$pg = ($page *6)-6;
	}
	
	$item = mysqli_query ("SELECT * FROM d2_item order by item_price desc limit $pg,6");
	if (mysqli_num_rows($item) == 0) {
		echo 'Chưa có sản phẩm nào!';
		die;
	}
?>

<?php
	$page = mysqli_query ("SELECT * FROM d2_item");
	$count = mysqli_num_rows ($page);
	$a = ceil($count / 6);
	
?>
<div class="page row" style="text-align:center;">
		<ul class="pagination">
			<!--Previous-->
			<?php 
				if (isset ($_GET['pg'])) {
					$page = $_GET['pg'];
				}else{
					$page = '';
				}
				if ($page <= 1)	{
			?>
				<li class="hide"><a href="?pg=<?php echo	 $_GET['pg'] - 1 ?>">Previous</a></li>
			<?php
				}else{
			?>
				<li><a href="?pg=<?php echo	 $_GET['pg'] - 1 ?>">Previous</a></li>
			<?php
				}
			?>	
			<!--/Previous-->
			<!--pagination-->
			<?php
				for ($b=1;$b<=$a;$b++){
				if ($page == $b) {
			?>
					<li class="active"><a href="?pg=<?php echo $b ?>"> <?php echo $b; ?></a></li>
			<?php
				}else{ 
			?>			
				<li><a href="?pg=<?php echo $b ?>"> <?php echo $b; ?></a></li>
			<?php
				}
			?>
			<?php
				}
			?>
			<!--/pagination-->
			<!--Next-->
			<?php
				if ($page ==''){
			?>
				<li><a href="?pg=2">Next</a></li>
			<?php
				}elseif ($page == $a) {
			?>
				<li class="hide"><a href="?pg=<?php echo $_GET['pg']+1 ?>">Next</a></li>
			<?php
				}else{
			?>
				<li><a href="?pg=<?php echo $_GET['pg']+1 ?>">Next</a></li>
			<?php
				}
			?>
			
			<!--/Next-->
		</ul>


</div>