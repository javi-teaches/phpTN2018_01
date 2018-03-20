<?php
	$hash1 = password_hash("Hola", PASSWORD_DEFAULT);
	$hash2 = password_hash("Chau", PASSWORD_DEFAULT);

	var_dump($hash1);
	echo "<br>";
	var_dump($hash2);
	echo "<br>";

	if (password_verify($_POST['password'], $hash1)) {
		echo "Si son iguales";
	}

	// echo password_verify("Chau", $hash2);

	if ($_POST) {
		$_POST['clave'] = password_hash($_POST['clave'], PASSWORD_DEFAULT);
		$usuario = json_encode($_POST);
		file_put_contents('usuarios.json', $usuario . PHP_EOL, FILE_APPEND);
	}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Register</title>
	</head>
	<body>
		<form method="post">
			<label>Nombre:</label>
			<input type="text" name="nombre">
			<br><br>
			<label>Email:</label>
			<input type="text" name="email">
			<br><br>
			<label>Password:</label>
			<input type="password" name="clave">
			<br><br>
			<button type="submit">ENVIAR</button>
		</form>
	</body>
</html>
