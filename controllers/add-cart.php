<?php
	include_once("modules/config.php");
	if (isset ($_POST['add-cart'])) {
		$product_id = $_POST['id'];
		$product_qty = $_POST['qty'];	
		$detail = mysqli_query($conn,"SELECT * FROM d2_item WHERE item_id =".$product_id);
		$rows_detail = mysqli_fetch_array  ($detail);
		
		if ($product_qty <= 0) {
			$kq = '<div class="alert alert-danger"><strong>Quantity must be greater than 1!</strong></div>';
		}else{	
			if (isset($_SESSION['cart'])) {
				$cart = $_SESSION['cart'];
				if (array_key_exists ($product_id,$cart)){
					$cart[$product_id] = array (
						'soluong'=>(int)$cart[$product_id]['soluong']+$product_qty,
						'price'=>$rows_detail['item_price'],
						'name'=>$rows_detail['item_title'],
						'image'=>$rows_detail['item_image'],
						'id'=>$rows_detail['item_id']
					);
					$kq = '<div class="alert alert-success"><strong>Added to cart</strong></div>';
				}else{
					$cart[$product_id] = array (
						'soluong'=>(int)$product_qty,
						'price'=>$rows_detail['item_price'],
						'name'=>$rows_detail['item_title'],
						'image'=>$rows_detail['item_image'],
						'id'=>$rows_detail['item_id']
					);
					$kq = '<div class="alert alert-success"><strong>Added to cart</strong></div>';
				}
				
				
			}else{
				$cart[$product_id] = array (
					'soluong'=>(int)$product_qty,
					'price'=>$rows_detail['item_price'],
					'name'=>$rows_detail['item_title'],
					'image'=>$rows_detail['item_image'],
					'id'=>$rows_detail['item_id']
				);
				$kq = '<div class="alert alert-success"><strong>Added to cart</strong></div>';
			}
			$_SESSION['cart'] = $cart;	
		}	
	}else{
		//quay ve trang chu
	}
	
?>









