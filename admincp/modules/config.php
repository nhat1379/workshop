<?php
	$db_type = "mysqli";
	$db_charset = "utf8";
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "";
	$database = "dota2";
	
	$conn = mysqli_connect ("$db_host","$db_username","$db_password","$database") or die ("Vui lòng kiểm tra cấu hình cơ sở dữ liệu!");
	mysql_query("SET NAMES utf8");
	


?>