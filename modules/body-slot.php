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
	
	$slot = $nhat->select ("d2_item","where slot_id=".$_GET['id'],"order by item_price desc limit ".$pg.",6");
	
	
?>


<div class="col-sm-9 padding-right">
	<div class="features_items"><!--features_items-->
		<h2 class="title text-center">Features Items</h2>
		
		<?php
			while ($rows_item = mysqli_fetch_array ($slot)) {
		?>
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="<?php echo $rows_item['item_image']; ?>" style="height: 150px; width: 225px" alt="" />
						<h4><?php echo number_format($rows_item['item_price']); ?> VNĐ</h4>
						<h2><?php echo $rows_item['item_title']; ?></h2>
						
					</div>
					<a href="index.php?view=detail&id=<?php echo $rows_item['item_id'] ?>">
					<div class="product-overlay">
						<div class="overlay-content">
							<img src="http://2.bp.blogspot.com/-zQLANHW_hmw/VB1eeb4d-OI/AAAAAAAAAEs/eWIoPuJ39eo/s1600/dota2_logo.png" width="130px" >
							<h2><?php echo number_format($rows_item['item_price']); ?> VNĐ</h2>
							<p><?php echo $rows_item['item_title']; ?></p>
							<form action="index.php?view=slot&id=<?php echo $rows_item['slot_id']; ?>&pg=<?php echo $_GET['pg'] ?>" method="post">
								<input name="id" class="hide" type="text" value="<?php echo $rows_item['item_id']; ?>">
								<input name="qty" class="hide" type="text" value="1" >
								<button style="margin-bottom:5px;"  onclick="alert('Added to cart')" name="add-cart" type="submit" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
							</form>
						</div>
					</div>
					</a>
				</div>
			</div>
		</div>
		<?php
			}
		?>
	</div><!--features_items-->
					
</div>
<div class="page row" style="text-align:center;">
<?php
	$page = mysqli_query ("SELECT * FROM d2_item WHERE slot_id=".$_GET['id']."");
	$count = mysqli_num_rows ($page);
	$a = ceil($count / 6);
	
?>

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
				<li class="disabled"><a href=""><i class="fa fa-angle-left"></i> Prev</a></li>
			<?php
				}else{
			?>
				<li><a href="index.php?view=slot&id=<?php echo $_GET['id']; ?>&pg=<?php echo	 $_GET['pg'] - 1 ?>"><i class="fa fa-angle-left"></i> Prev</a></li>
			<?php
				}
			?>	
			<!--/Previous-->
			<!--pagination-->
			<?php
				for ($b=1;$b<=$a;$b++){
				if ($page == $b) {
			?>
					<li class="active"><a href="index.php?view=slot&id=<?php echo $_GET['id']; ?>&pg=<?php echo $b ?>"> <?php echo $b; ?></a></li>
			<?php
				}else{ 
			?>			
				<li><a href="index.php?view=slot&id=<?php echo $_GET['id']; ?>&pg=<?php echo $b ?>"> <?php echo $b; ?></a></li>
			<?php
				}
			?>
			<?php
				}
			?>
			<!--/pagination-->
			<!--Next-->
			
			<?php
				if ($page >= $a) {
			?>
				<li class="disabled"><a href="">Next <i class="fa fa-angle-right"></i></a></li> 
			<?php
				}else{
			?>
				<li><a href="index.php?view=slot&id=<?php echo $_GET['id']; ?>&pg=<?php echo $_GET['pg']+1 ?>">Next <i class="fa fa-angle-right"></i></a></li>
			<?php
				} 
			?>
			
			<!--/Next-->
		</ul>


</div>