<?php
	include ("../modules/config.php");
	if (isset ($_POST['admin'])) {
		$user = $_POST['username'];
		$password = md5($_POST['password']);
		
		$sql = mysqli_query ($conn,"SELECT * FROM d2_users WHERE user_login = '$user'");
		
		$rows_sql = mysqli_fetch_array ($sql);
		
		
		if (mysqli_num_rows ($sql) == 0) {
			$kq = '<div class="alert alert-danger"><strong>Tài khoản không tồn tại!</strong></div>';
		}elseif ($password != $rows_sql['user_password']) {
			$kq = '<div class="alert alert-danger"><strong>Sai mật khẩu!</strong></div>';
		}elseif ($rows_sql['user_lv'] == 0) {
			$kq = '<div class="alert alert-danger"><strong>Bạn không đủ thẩm quyền để truy cập vào admin!</strong></div>';		
		}else {
			$_SESSION['admin'] = $user;
			
			echo '<script type="text/javascript">
				window.location.href = "index.php";
			</script>';
		}
		
		
	}













?>