<?php
	session_start();

	if (isset($_SESSION['contador'])) {
		echo '<h1>' . $_SESSION['contador'] . '</h1>';
	}
?>
