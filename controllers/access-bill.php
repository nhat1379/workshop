<?php
	if (isset ($_POST['done'])) {
		unset ($_SESSION['id']);
		echo '<script type="text/javascript">
			window.location.href="index.php";
		</script>';
	}
?>