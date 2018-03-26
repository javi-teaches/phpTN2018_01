<?php
	session_start();
	if (!isset($_SESSION['counter'])) {
		$_SESSION['counter'] = 0;
	}

	if (isset($_POST['incrementar'])) {
		$_SESSION['counter']++;
	}

	if (isset($_POST['reiniciar'])) {
		$_SESSION['counter'] = 0;
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Modificar</title>
	</head>
	<body>
		<h1> <?= $_SESSION['counter'] ?> </h1>
		<form method="post">
			<button type="submit" name="incrementar">INC</button>
			<button type="submit" name="reiniciar">REINICIAR</button>
		</form>
	</body>
</html>
