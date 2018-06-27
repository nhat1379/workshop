<?php
	$item_new = mysqli_query ($conn,"SELECT * FROM d2_item order by item_id desc limit 0,8");
	$item_hot = mysqli_query ($conn, "SELECT * FROM d2_item order by item_price desc limit 0,8");
	$item_item = mysqli_query ($conn, "SELECT * FROM d2_item where type_id = 1 order by rand() limit 0,8");
	$item_set = mysqli_query ($conn, "SELECT *FROM d2_item where type_id = 7 order by rand() limit 0,8");
?>


<div class="col-sm-12">

	<div class="features_items"><!--features_items-->
		<h2 class="title text-center">New items</h2>
		
		<?php
			while ($row_new = mysqli_fetch_array ($item_new)) {
		?>
		
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="product-image-wrapper">
				<div class="single-products">	
					<div class="productinfo text-center">

						<img src="images/images/<?php echo $row_new['item_image']; ?>" style="height: 150px; width:225px;" alt="" />
						<h4><?php echo number_format($row_new['item_price']); ?> VNĐ</h4>
						<h2><?php echo $row_new['item_title']; ?></h2>
					</div>
					<a href="index.php?view=detail&id=<?php echo $row_new['item_id'] ?>">
					<div class="product-overlay">
						<div class="overlay-content">
							<img src="images/images/dota2_logo.png" width="130px;" >
							<h2><?php echo number_format($row_new['item_price']); ?> VNĐ</h2>
							<p><?php echo $row_new['item_title']; ?></p>
							<form action="index.php" method="post">
								<input name="id" class="hide" type="text" value="<?php echo $row_new['item_id']; ?>">
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
	
	<div class="features_items"><!--features_items-->
		<h2 class="title text-center"><i class="fa fa-star"></i> Hot <i class="fa fa-star"></i></h2>
		
		<?php
			while ($rows_hot = mysqli_fetch_array ($item_hot)) {
		?>
		
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="product-image-wrapper">
				<div class="single-products">	
				
					<div class="productinfo text-center">

						<img src="images/images/<?php echo $rows_hot['item_image']; ?>" style="height: 150px; width:225px;" alt="" />
						<h4><?php echo number_format($rows_hot['item_price']); ?> VNĐ</h4>
						<h2><?php echo $rows_hot['item_title']; ?></h2>
					</div>
					<a href="index.php?view=detail&id=<?php echo $rows_hot['item_id'] ?>">
					<div class="product-overlay">
						<div class="overlay-content">
							<img src="images/images/dota2_logo.png" width="130px;" >
							<h2><?php echo number_format($rows_hot['item_price']); ?> VNĐ</h2>
							<p><?php echo $rows_hot['item_title']; ?></p>
							<form action="index.php" method="post">
								<input name="id" class="hide" type="text" value="<?php echo $rows_hot['item_id']; ?>">
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
	
	<div class="features_items"><!--features_items-->
		<h2 class="title text-center">immortal</h2>
		
		<?php
			while ($rows_item = mysqli_fetch_array ($item_item)) {
		?>
		
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="product-image-wrapper">
				<div class="single-products">	
				
					<div class="productinfo text-center">

						<img src="images/images/<?php echo $rows_item['item_image']; ?>" style="height: 150px; width:225px;" alt="" />
						<h4><?php echo number_format($rows_item['item_price']); ?> VNĐ</h4>
						<h2><?php echo $rows_item['item_title']; ?></h2>
					</div>
					<a href="index.php?view=detail&id=<?php echo $rows_item['item_id'] ?>">
					<div class="product-overlay">
						<div class="overlay-content">
							<img src="images/images/dota2_logo.png" width="130px;" >
							<h2><?php echo number_format($rows_item['item_price']); ?> VNĐ</h2>
							<p><?php echo $rows_item['item_title']; ?></p>
							<form action="index.php" method="post">
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
	<div class="col-sm-12"><a href="index.php?view=items&pg=1"><h4 class="pull-right">Load more <i class="fa fa-angle-double-right"></i></h4></a></div>
	</div><!--features_items-->
	
	<div class="features_items"><!--features_items-->
		<h2 class="title text-center">Full set</h2>
		
		<?php
			while ($rows_set = mysqli_fetch_array ($item_set)) {
		?>
		
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="product-image-wrapper">
				<div class="single-products">	
				
					<div class="productinfo text-center">

						<img src="images/images/<?php echo $rows_set['item_image']; ?>" style="height: 150px; width:225px;" alt="" />
						<h4><?php echo number_format($rows_set['item_price']); ?> VNĐ</h4>
						<h2><?php echo $rows_set['item_title']; ?></h2>
					</div>
					<a href="index.php?view=detail&id=<?php echo $rows_set['item_id'] ?>">
					<div class="product-overlay">
						<div class="overlay-content">
							<img src="images/images/dota2_logo.png" width="130px;" >
							<h2><?php echo number_format($rows_set['item_price']); ?> VNĐ</h2>
							<p><?php echo $rows_set['item_title']; ?></p>
							<form action="index.php" method="post">
								<input name="id" class="hide" type="text" value="<?php echo $rows_set['item_id']; ?>">
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
		<div class="col-sm-12"><a href="index.php?view=set&pg=1"><h4 class="pull-right">Load more <i class="fa fa-angle-double-right"></i></h4></a></div>
	</div><!--features_items-->
	
	
		
</div>


	

	
