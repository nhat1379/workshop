<?php
	


	if (isset ($_POST['edit'])) {
		foreach ($_POST['qty'] as $key => $value) {
			if ($value <= 0) {
				unset ($_SESSION['cart'][$key]);
			}else{
				$_SESSION['cart'][$key]['soluong'] = $value;
			}
		}
	}


?>