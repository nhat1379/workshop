<?php
	if (isset ($_POST['btn-search'])) {
		$key = $_POST['txt-search'];
		$item = mysqli_query ($conn,"SELECT * FROM d2_item INNER JOIN d2_type ON d2_type.type_id = d2_item.type_id where item_title LIKE '%$key%' || type_title LIKE '%$key%'");	
	}
?>

<section>
	<div class="container">
		<div class="col-sm-12 padding-right">
			<div class="features_items"><!--features_items-->
				<h2 class="title text-center">Search</h2>
				<?php
				if (mysqli_num_rows ($item)==0){
					echo '<div class="container"><div class="alert alert-warning"><strong>Không tìm thấy sản phẩm trùng khớp</strong></div></div>';
				}else{
					while ($rows_item = mysqli_fetch_array ($item)) {
				?>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
					<div class="product-image-wrapper">
						<div class="single-products">	
						
							<div class="productinfo text-center">

								<img src="images/images/<?php echo $rows_item['item_image']; ?>" style="height: 150px; width: 225px" alt="" />
								<h4><?php echo number_format($rows_item['item_price']); ?> VNĐ</h4>
								<h2><?php echo $rows_item['item_title']; ?></h2>
							</div>
							<a href="index.php?view=detail&id=<?php echo $rows_item['item_id'] ?>">
							<div class="product-overlay">
								<div class="overlay-content">
									<img src="http://2.bp.blogspot.com/-zQLANHW_hmw/VB1eeb4d-OI/AAAAAAAAAEs/eWIoPuJ39eo/s1600/dota2_logo.png" width="130px;" >
									<h2><?php echo number_format($rows_item['item_price']); ?> VNĐ</h2>
									<p><?php echo $rows_item['item_title']; ?></p>
									<form action="index.php?" method="post">
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
				}
				?>
				
			</div><!--features_items-->						
		</div>
		
	</div>	
</section>



	

