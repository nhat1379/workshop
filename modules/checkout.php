<?php
	
	

	if (!isset ($_SESSION['login'])) {
		echo '<div class="container"><div class="well well-sm text-center" style="background-color:#f7f7f7;border-radius: 10px; border: 1px solid #dadad8; padding: 5px; font-size: 30px">
								<label style="margin:0px; color:#f79a75">You need Sign in to Check out!</label>
							</div></div>';
		include("modules/login.php");
		
		
	}else{
		
?>

<?php
	$grand_total = 0;
	$kt = 1;
	if (isset ($_SESSION['cart'])) {
		foreach ($_SESSION['cart'] as $key => $value) {
			if (isset ($key)) {
				$kt = 0;
			}
		}
	}
	
	if ($kt != 0) {
		echo '<div class= "container"><div class="alert alert-warning"><strong>You have no products!</strong></div></div>';
	}else{
		foreach ($_SESSION['cart'] as $k => $v) {
			$item_cart[] = $k;
		}
		$string = implode (",",$item_cart);
		$cartlist = mysqli_query ($conn,"SELECT * FROM d2_item where item_id in ($string)");
		$checkout = mysqli_query ($conn,"SELECT * FROM d2_item where item_id in ($string)");
?>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>
			<form action="index.php?view=bill" method="POST">
				<div class="table-responsive cart_info" style="margin-bottom:0px">
					<table class="table table-condensed">
						<thead>
							<tr class="cart_menu">
								<td class="image" width="130px">Item</td>
								<td class="description"></td>
								<td class="price">Price</td>
								<td class="quantity">Quantity</td>
								<td class="total">Total</td>
								<td></td>
							</tr>
						</thead>
				
						<tbody>
						<?php
							if (isset ($_SESSION['cart'])) {
								foreach ($_SESSION['cart'] as $key => $value) {
								$total = $_SESSION['cart'][$key]['price'] * $_SESSION['cart'][$key]['soluong'];
								$grand_total += $total;
						?>
							<tr>
								<td class="cart_product">
									<a href="index.php?view=detail&id=<?php echo $_SESSION['cart'][$key]['id']; ?>"><img src="images/images/<?php echo $_SESSION['cart'][$key]['image']; ?>" width="80px" height="55px" alt=""></a>
								</td>
								<td class="cart_description">
									<h4 style="padding-top: 10px;"><a><?php echo $_SESSION['cart'][$key]['name']; ?></a></h4>
									<p>Product ID: <?php echo $_SESSION['cart'][$key]['id']; ?></p>
									<!--<input class="hide" name="id[<?php echo $rows_cart['item_id'] ?>]" value="<?php echo $rows_cart['item_id']; ?>" >-->
								</td>
								<td class="cart_price">
									<p style="margin: 0px;"><?php echo number_format($_SESSION['cart'][$key]['price']); ?> VNĐ</p>
									<!--<input class="hide" name="dongia[<?php echo $rows_cart['item_id'] ?>]" value="<?php echo $rows_cart['item_price'] ?>" >-->
								</td>
								<td class="cart_quantity">
									<label class="cart_quantity_input" type="text" name="qty[<?php echo $_SESSION['cart'][$key]['id']; ?>]" value="" autocomplete="off" size="4"><?php echo $_SESSION['cart'][$key]['soluong']; ?></label>
									<!--<input class="hide" name="soluong[<?php echo $rows_cart['item_id'] ?>]" value="<?php echo $_SESSION['cart'][$rows_cart['item_id']] ?>" >-->
								</td>
								<td class="cart_total">
									<p class="cart_total_price" style="margin: 0px"><?php echo number_format($total); ?> VNĐ</p>
									<!--<input class="hide" name="thanhtien[<?php echo $rows_cart['item_id'] ?>]" value="<?php echo $total; ?>"  >-->
								</td>
								
							</tr>
						<?php
								}
							}
						?>
							<tr>
								<td colspan="4">&nbsp;</td>
								<td colspan="2">
									<table class="table table-condensed total-result">
										<tr>
											<td>Grand Total</td>
											<td><span><?php echo number_format($grand_total) ?> VNĐ</span></td>
										</tr>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			
				<div class="pull-right">
					<button class="btn btn-primary" name="cancel" style="margin-top: 2px; margin-bottom: 15px">Cancel</button>
					
					
					
					<input class="hide" name="billtotal" value="<?php echo $grand_total ?>" >
					<button class="btn btn-primary" name="continue" style="margin-top: 2px; margin-bottom: 15px">Continue</button>
				</div>
			</form>
		</div>
	</section>
	<?php
	}
	?>
		
		
<?php
	}
?>
	

	