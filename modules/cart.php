<?php
	include ("controllers/edit-cart.php");
	include ("controllers/delete-cart.php");
	$grand_total = 0;
	$kt = 1;
	if (isset ($_SESSION['cart'])) {
		foreach ($_SESSION['cart'] as $key => $value) {
			if (isset ($key)) {
				$kt = 0;
			}
		}
	}
	
	if ( $kt != 0) {
		echo '<div class= "container"><div class="alert alert-warning"><strong>You have no products!</strong></div></div>';
	}else{
		


 
?>
<form action="index.php?view=cart" method="POST">
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
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
					/*echo '<pre>';
					var_dump($_SESSION['cart']);
					echo '</pre>';*/
						if (isset($_SESSION['cart'])) {
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
							</td>
							<td class="cart_price">
								<p style="margin: 0px;"><?php echo number_format($_SESSION['cart'][$key]['price']); ?> VNĐ</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									
									<input class="cart_quantity_input" type="text" name="qty[<?php echo $_SESSION['cart'][$key]['id']; ?>]" value="<?php echo $_SESSION['cart'][$key]['soluong']; ?>" autocomplete="off" size="4">
									
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price" style="margin: 0px"><?php echo number_format($total); ?> VNĐ</p>
							</td>
							
							<td class="cart_delete">
								<button class="btn btn-default update" style="margin: 0; margin-right: 10px; " type="submit" name="delete-cart" value="<?php echo $_SESSION['cart'][$key]['id'] ?>"><i class="fa fa-times"></i></button>
							</td>
						
						</tr>
					<?php
							}
						}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
<?php
	}
?>
	<section id="do_action">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-6">
					
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li><strong>Grand Total</strong> <span><?php echo number_format($grand_total) ?> VNĐ</span></li>
						</ul>
							<button class="btn btn-default update" name="edit">Update</button>
							<a class="btn btn-default check_out" href="index.php?view=checkout">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
</form>

