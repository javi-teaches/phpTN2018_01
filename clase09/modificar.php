<?php
	session_start();

	if (!isset($_SESSION['contador'])) {
		$_SESSION['contador'] = 0;
	}

	if (isset($_SESSION['color'])) {
		$color = $_SESSION['color'];
	}

	if (isset($_POST['aumentar'])) {
		$_SESSION['contador'] += 1;
	}
	if (isset($_POST['reiniciar'])) {
		$_SESSION['contador'] = 0;
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Modificar</title>
	</head>
	<body style="background-color: <?= isset($color) ? $color : ''?>">

		<h1><?= $_SESSION['contador'] ?></h1>

		<form method="post">
			<button type="submit" name="aumentar">Incrementar</button>
			<button type="submit" name="reiniciar">Reiniciar</button>
		</form>
	</body>
</html>
