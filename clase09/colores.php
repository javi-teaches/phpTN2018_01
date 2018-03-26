<?php

	$color = '';

	if (isset($_POST['cambiarColor'])) {
		$color = $_POST['color'];
		setcookie('colorUsuario', $color, time() + 900);
	} else if (isset($_COOKIE['colorUsuario'])){
		$color = $_COOKIE['colorUsuario'];
	}

	if (isset($_POST['resetearColor'])) {
		$color = '';
		setcookie('colorUsuario', '', -1);
	}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Colores</title>
	</head>
	<body style="background-color: <?= isset($color) ? $color : '' ?>">
		<form method="post">
			<select name="color">
				<option value="">Elegir color</option>
				<option value="blue" <?= ($color == 'blue') ? 'selected' : null ?>>Celeste</option>
				<option value="green" <?= ($color == 'green') ? 'selected' : null ?>>Verde</option>
				<option value="red" <?= ($color == 'red') ? 'selected' : null ?>>Rojo</option>
			</select>
			<button type="submit" name="cambiarColor">Cambiar color</button>
			<button type="submit" name="resetearColor">Resetear color</button>
		</form>
	</body>
</html>
