<?php
	if (isset ($_POST['logout'])) {
		unset ($_SESSION['admin']);
		echo '<script type="text/javascript">
				window.location.href = "index.php";
			</script>';

	}
?>