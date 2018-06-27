<?php
	
	if (isset ($_SESSION['login'][3])) {
		$login2 = $_SESSION['login'][3];
	}else{
		$login2 ='';
	}
	
	$sql = mysqli_query ($conn,"SELECT * FROM d2_users WHERE user_login = '$login2'");
	$rows_sql = mysqli_fetch_array ($sql);
	
	
	
	if (isset ($_POST['change_password'])) {
		$old = md5($_POST['old_password']);
		$new = $_POST['new_password'];
		$confirm = $_POST['repassword'];
		if ($old != $rows_sql['user_password']) {
			$kq = 'sai mat khau';
		}elseif ($new != $confirm) {
			$kq = 'mat khau khong trung khop';
		}else{
			$password = md5($new);
			$sql = mysqli_query ($conn,"UPDATE d2_users SET user_password = '$password' WHERE user_login = '$login2'");
			if ($sql){
				$kq = 'thanh cong';
			}else{
				$kq = 'that bai';
			}
		}
		
	}




?>