<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario PHP</title>
	</head>
	<body>

	<form action="imprimir.php" method="post" enctype="multipart/form-data">
		<p>
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" id="nombre">
		</p>

		<p>
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email">
		</p>

		<p>
		<label>Género:</label> <br>
		<label>
			<input type="radio" name="genero" value="F">
			Femenino
		</label>
		<label>
			<input type="radio" name="genero" value="M">
			Masculino
		</label>
		<label>
			<input type="radio" name="genero" value="T">
			Transgenero
		</label>
		</p>

		<p>
		<label>Pasatiempos:</label> <br>
		<label>
			<input type="checkbox" name="hobbies[]" value="Lectura">
			Leer
		</label>
		<label>
			<input type="checkbox" name="hobbies[]" value="Cine">
			Ir a cine
		</label>
		<label>
			<input type="checkbox" name="hobbies[]" value="Deporte">
			Hacer deporte
		</label>
		</p>

		<p>
			<label for="como_dormiste">¿Cómo dormiste anoche?</label>
			<select name="como_dormiste" id="como_dormiste">
				<option value="">Elegí una opción</option>
				<option value="Muy Bien">Muy Bien</option>
				<option value="Bien">Bien</option>
				<option value="Regular">Regular</option>
				<option value="Mal">Mal</option>
				<option value="Muy Mal">Muy Mal</option>
			</select>
		</p>

		<p>
			<label>
				Subí tu avatar
				<input type="file" name="imagen[]" multiple>
			</label>
		</p>

		<button type="submit">ENVIAR</button>
	</form>

	</body>
</html>
