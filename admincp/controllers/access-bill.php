<?php
	if (isset ($_POST['update_stt'])) {
		
		
		($id = $_POST['id']);
		($stt = $_POST['stt']);
		$sql = mysqli_query ($conn,"UPDATE d2_bill SET bill_stt = '$stt' WHERE bill_id = '$id'");
		
	}








?>