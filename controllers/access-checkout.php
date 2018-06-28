<?php
	if (isset ($_POST['cancel'])) {
		unset ($_SESSION['cart']);
		
		echo '<script type="text/javascript"> 
				window.location.href="index.php";
			</script>';
	}
	
	/*if (isset ($_SESSION['login'][3])) {
		$login2 = $_SESSION['login'][3];
	}else{
		$login2 = '';
	}
	$user = mysqli_query ($conn,"SELECT * FROM d2_users WHERE user_login = '$login2' ");
	$rows_user = mysqli_fetch_array ($user);
	$id = $rows_user['user_id'];*/
	
	
	if (isset ($_POST['continue'])) {
		$billtotal = $_POST['billtotal'];
		$user_id = $_SESSION['login']['user_id'];
		/*echo '<pre>';
		var_dump($_SESSION['cart']);
		echo '</pre>';*/
		$date = date('Y-m-d H:i:s');
		$sql = mysqli_query ($conn,"INSERT INTO d2_bill (bill_date, user_id, bill_total, bill_stt) VALUES ('$date','$user_id','$billtotal','Processing')");
		if ($sql) {
			$kq = 'thanh cong';
		}else{
			$kq = 'that bai';
		}
		
		$last_id = mysqli_insert_id($conn);
		$_SESSION['id'] = $last_id;
		foreach ($_SESSION['cart'] as $key => $value) {
			$soluong = $value['soluong'];
			$price = $value['price'];
			$thanhtien = $soluong * $price;
			
			$sql1 = mysqli_query ($conn,"INSERT INTO d2_billdetail (bill_id, item_id, detail_qty, detail_dongia, detail_thanhtien) VALUES ('$last_id','$key','$soluong','$price','$thanhtien')");
			if ($sql1){
				$kq = 'thanh cong roi';
			}else{
				$kq = 'deo thanh cong';
			}
			
			
		}
		
		
		unset ($_SESSION['cart']);
		
		
		//$billtotal = $_POST['billtotal'];
		
		/*$id2 = $_POST['id'];
		$dongia = $_POST['dongia'];
		$soluong = $_POST['soluong'];
		$thanhtien = $_POST['thanhtien'];*/
		
		/*$hoadon = array(
			$id2 => $mang = array(
				'dongia' => $dongia
				'soluong' => $soluong
				'thanhtien'=>$thanhtien
			)
		)
		var_dump ($hoadon);*/
		
		
/*echo '<pre>';
		echo 'id la: '; var_dump( $id2);
		echo 'don gia la: '; var_dump($dongia);
		echo 'so luong la: '; var_dump( $soluong);
		echo 'thanh tien la: '; var_dump( $thanhtien);
echo '</pre>';*/
		
		/*$sql = mysqli_query ($conn,"INSERT INTO d2_bill (bill_date, user_id, bill_total) VALUES ('$date','$id','$billtotal')");
		if ($sql) {
			echo 'thanh cong';
		}else{
			echo 'that bai';
		}
		$last_id = mysqli_insert_id($conn);
		
		$sql1 = mysqli_query ($conn,"INSERT INTO d2_billdetail (bill_id, item_id, detail_qty, detail_dongia, detail_thanhtien) VALUES ('$last_id','$id2','$soluong','$dongia','$thanhtien')");
		if ($sql1){
			echo 'thanh cong ro';
		}else{
			echo 'deo thanh cong';
		}*/
	}
	
	

?>