<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario GET & POST</title>
	</head>
	<body>
		<form action="imprimir.php" method="post">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" id="nombre">
			<br>
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email">

			<p>Pasatiempos:</p>
			<label>
				<input type="checkbox" name="hobbies[]" value="Le gusta Leer">
				Leer
			</label>
			<label>
				<input type="checkbox" name="hobbies[]" value="Le gusta comer">
				Comer
			</label>
			<label>
				<input type="checkbox" name="hobbies[]" value="Le gusta dormir">
				Dormir
			</label>

			<br><br>
			<button type="submit">Dale caña</button>
		</form>
	</body>
</html>
