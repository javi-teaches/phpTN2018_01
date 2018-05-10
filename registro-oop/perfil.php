<?php
	require_once 'soporte.php';

	if (!$auth->estaLogueado()) {
		header('location: login.php');
		exit;
	}

	$usuario = $db->traerPorId($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<title>Perfil del usuario</title>
	</head>
	<body>
		<div class="container">
			<div class="div-errores alert alert-warning">
				<h1>Hola <?=$usuario->getName()?></h1>
				<img class="img-rounded" src="<?=$usuario->getPicture()?>" width="200">
				<br><br>
				<a class="btn btn-warning" href="logout.php">CERRAR SESIÓN</a>
			</div>
		</div>
	</body>
</html>
