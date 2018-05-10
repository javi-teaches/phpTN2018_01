<?php
	require_once 'soporte.php';
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
			<div class="div-errores alert alert-info">
				<?php
					if ($auth->estaLogueado()) :
					$usuario = $db->traerPorId($_SESSION['id']);
				?>
					<h1>
						Bienvenido <?=$usuario->getName(); ?>
						<img class="img-rounded" src="<?=$usuario->getPicture()?>" width="70" style="border-radius: 8px;">
						<a class="btn btn-success" href="perfil.php">Ir a tu perfil</a>
						<a class="btn btn-success" href="logout.php">CERRAR SESIÓN</a>
					</h1>
				<?php else: ?>
					<h1>Bienvenido Inivitado</h1>
					<a class="btn btn-info" href="registro.php">Registrate</a>
					<a class="btn btn-info" href="login.php">Logueate</a>
				<?php endif ?>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</body>
</html>
