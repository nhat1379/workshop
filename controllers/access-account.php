<?php 
	if (isset ($_SESSION['login'])) {
		$login2 = $_SESSION['login']['user_login'];
		$login3 = $_SESSION['login']['user_id'];
	}else{
		$login2 ='';
		$login3 ='';
	}
	$sql = mysqli_query ($conn,"SELECT bill_id FROM d2_bill WHERE user_id = '$login3'");
	if (mysqli_num_rows ($sql) != 0) {
		while ($rows_sql = mysqli_fetch_array ($sql)) {
			$item[] = $rows_sql['bill_id'];
			$string = implode (",",$item);	
		}
		
		if (isset ($_POST['clear'])) {
			$deldetail = mysqli_query ($conn,"DELETE FROM d2_billdetail WHERE bill_id in ($string)");
			$delbill = mysqli_query ($conn,"DELETE FROM d2_bill WHERE user_id = '$login3'");
			if ($delbill){
				$kq = 'Xóa lịch sử thành công!';
			}else{
				$kq = '<div class="alert alert-success"><strong>Có lỗi trong quá trình xử lí vui lòng thử lại!</strong</div>';
			}
		}
	}else{
		$kq2 ='ss';
	}
?>