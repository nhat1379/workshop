<?php
	
	$detail = mysqli_query($conn,"SELECT * FROM d2_item INNER JOIN d2_slot ON d2_slot.slot_id=d2_item.slot_id INNER JOIN d2_type ON d2_type.type_id=d2_item.type_id WHERE item_id=".$_GET['id']);
	if (mysqli_num_rows($detail) == 0) {
		echo 'k co san pham nao';
		die;
	}
	$rows_detail = mysqli_fetch_array ($detail);
	$type_id = $rows_detail['type_id'];
	$id = $rows_detail['item_id'];
	$tag = mysqli_query ($conn,"SELECT * FROM d2_item WHERE type_id =".$type_id."&&item_id !=".$id." order by rand() limit 4");
	
?>
	
	<div class="col-sm-12">
		<div class="product-details"><!--product-details-->
			<div class="col-sm-1">
			</div>
			<div class="col-sm-5">
				<div class="view-product">
					<img src="images/images/<?php echo $rows_detail['item_image']; ?>" style="height:auto" alt="" />
				</div>
				
			</div>
			<div class="col-sm-6 ">
				<div class="product-information"><!--/product-information-->
					
					<h2><?php echo $rows_detail['item_title']; ?></h2>
					<p>Product ID: <?php echo $rows_detail['item_id']; ?></p>
					<span><span><?php echo number_format($rows_detail['item_price']); ?> VNĐ</span></span>
					<form action="index.php?view=detail&id=<?php echo $rows_detail['item_id'] ?>" method="POST">
						<span>									
							<label>Quantity: </label>
							<input class="hide" name="id" type="text" value=<?php echo $rows_detail['item_id']; ?> />
							<input type="text" name="qty" value="1" />
							<button type="submit" name="add-cart" class="btn btn-fefault cart">
								<i class="fa fa-shopping-cart"></i>
								Add to cart 
							</button>
						</span>
					</form>
					<p><b>Availability:</b> In Stock</p>
					<p><b>Slot:</b> <?php echo $rows_detail['slot_title'] ?></p>
					<p><b>Type:</b> <?php echo $rows_detail['type_title'] ?></p>
					<?php
						if (isset ($_POST['add-cart'])) {
							echo $kq;
						}
					?>
				</div><!--/product-information-->
			</div>
		</div><!--/product-details-->
		

		<div class="category-tab shop-details-tab"><!--category-tab-->
			<div class="col-sm-12">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tag" data-toggle="tab">Tag</a></li>
					<li><a href="#reviews" data-toggle="tab">Reviews</a></li>
				</ul>
			</div>
			<div class="tab-content">
				<div class="tab-pane fade active in" id="tag" >
				  <?php
					while ($rows_tag = mysqli_fetch_array($tag)) {
				  ?>
					<div class="col-sm-3 col-sm-4 col-sm-6">
						<div class="product-image-wrapper" style="margin-bottom:0px">
							<div class="single-products">	
								<div class="productinfo text-center" style="height:auto">
								  <a href="index.php?view=detail&id=<?php echo $rows_tag['item_id']; ?>">
									<img src="images/images/<?php echo $rows_tag['item_image'] ?>" alt="" height="150px" width="225px" />
									<h2><?php echo number_format($rows_tag['item_price']) ?> VNĐ</h2>
									<p><?php echo $rows_tag['item_title'] ?></p>
								  </a>		
								</div>
							</div>
						</div>
					</div>
				  <?php
					}
				  ?>
				</div>
				
				<div class="tab-pane fade" id="reviews" >
					<div class="col-sm-12">
						
						
						<p><b>Write Your Review</b></p>
						
						<form action="#">
							<span>
								<input type="text" placeholder="Your Name"/>
								<input type="email" placeholder="Email Address"/>
							</span>
							<textarea name="" ></textarea>
							
							<button type="button" class="btn btn-default pull-right">
								Submit
							</button>
						</form>
					</div>
				</div>
				
			</div>
		</div><!--/category-tab-->
		
		
		
		
	</div>
	
	
	
	
	
	
	