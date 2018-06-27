<?php
	$slider = mysqli_query($conn,"SELECT * FROM d2_item order by rand() limit 16");
	
	
?>


<h2 class="title text-center">Recommended items</h2>
<div class="owl-carousel owl-theme">
	
	<?php
		while ($rows_slider = mysqli_fetch_array ($slider)) {
	?>
		<div class="item" style="padding-left:0px;">
		  <a href="index.php?view=detail&id=<?php echo $rows_slider['item_id']; ?>"> 
			<img src="images/images/<?php echo $rows_slider['item_image']; ?>" style="height: 125px; width: 186px; margin:auto" >
			<h4 style="text-align:center; color: #FE980F"><?php echo number_format($rows_slider['item_price']); ?> VNĐ</h4>
			<h5 style="text-align:center"><?php echo $rows_slider['item_title'] ?></h5>
		  
			<form action="index.php" method="post" style="text-align:center;">
				<input name="id" class="hide" type="text" value="<?php echo $rows_slider['item_id']; ?>">
				<input name="qty" class="hide" type="text" value="1" >
				<button style="margin-bottom:5px;"  onclick="alert('Added to cart')" name="add-cart" type="submit" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
			</form>
		  </a>
		</div>
	<?php
		}
	?>
	
    
</div>