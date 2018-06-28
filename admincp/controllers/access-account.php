<?php
	if (isset ($_POST['edit-acc'])) {
		$id = $_POST['id'];
		$lv = $_POST['lv'];
		$sql = mysqli_query ($conn,"UPDATE d2_users SET user_lv = '$lv' WHERE user_id = '$id'");
		if ($sql){
			echo 'thanh cong';
		}else{
			echo 'that bai';
		}
		
	}
?>