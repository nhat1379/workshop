<?php
	if (isset ($_POST['register'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$diachia = $_POST['diachi'];
		$user = $_POST['username'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		
		$check_user = mysqli_query ($conn,"SELECT * FROM d2_users WHERE user_login = '$user'");
		$check_email = mysqli_query ($conn,"SELECT * FROM d2_users WHERE user_email = '$email'");
		
		
		if (mysqli_num_rows ($check_user) == 1) {
			$kq = '<div class="alert alert-warning"><strong>User exist</strong></div>';
		}elseif (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)) {
			$kq = '<div class="alert alert-warning"><strong>Email này không hợp lệ. Vui long nhập email khác</strong></div>';
		}elseif (mysqli_num_rows($check_email) == 1 ) {
			$kq = '<div class="alert alert-warning"><strong>Email exist</strong></div>';
		}elseif ($repassword != $password) {
			$kq = '<div class="alert alert-warning"><strong>Incorrect repassword!</strong></div>';
		}else{
			$pw = md5($password);
			$sql = mysqli_query ($conn,"INSERT INTO d2_users (user_name, user_email, user_login, user_password,user_lv) VALUES ('$name','$email','$user','$pw',0)");
				if ($sql) {
					$kq = '<div class="alert alert-success"><strong>Sign Up Success!</strong></div>';
				}else{
					$kq = '<div class="alert alert-success"><strong>Sign Up failed!</strong></div>';
				}
		}
	}else {
		$kq = '<div class="alert alert-warning"><strong>Have error during registration process!</strong></div>';
	}












?>