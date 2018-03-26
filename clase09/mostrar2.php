<?php
	session_start();

	if (isset($_SESSION['counter'])) {
		echo '<h1>' . $_SESSION['counter'] . '</h1>';
	}
?>
