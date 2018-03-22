<?php
	$losUsuarios = file_get_contents('usuarios.json');

	$usuariosArray = explode(PHP_EOL, $losUsuarios);

	array_pop($usuariosArray);

	$usuariosFinales = [];

	foreach ($usuariosArray as $usuario) {
		$usuariosFinales[] = json_decode($usuario, true);
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Usuarios</title>
	</head>
	<body>
		<?php foreach ($usuariosFinales as $elUsuario):
			if ($elUsuario['nombre'] == 'Goku'): ?>
				<h1>Hola <?=$elUsuario['nombre']?></h1>
			<?php endif;
		endforeach; ?>

		<ul>
			<?php foreach ($usuariosFinales as $elUsuario): ?>
				<li><?=$elUsuario['nombre'] . ' - ' . $elUsuario['email']?></li>
			<?php endforeach; ?>
		</ul>
	</body>
</html>
