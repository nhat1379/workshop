<?php
	if (isset ($_POST['login'])) {
		$user = $_POST['username'];
		$password = md5($_POST['password']);
		
		$check_user = mysqli_query ($conn,"SELECT * FROM d2_users WHERE user_login = '$user'");
		$check = mysqli_fetch_array ($check_user);
		
		if (mysqli_num_rows ($check_user) == 0) {
			$kq = '<div class="alert alert-warning"><strong>User is not exist!</strong></div>';
		}elseif ($password != $check['user_password']) {
			$kq = '<div class="alert alert-warning"><strong>Password is incorrect!</strong></div>';
		}else{
			$_SESSION['login'] = $check;
			
		
			
			$kq = '<div class="alert alert-success"><strong>Login successful!</strong></div>';
			
		}
		
	}













?>