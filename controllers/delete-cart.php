<?php
	if (isset($_POST['delete-cart'])) {
		$id = $_POST['delete-cart'];
		unset ($_SESSION['cart'][$id]);
		
	}
	

?>