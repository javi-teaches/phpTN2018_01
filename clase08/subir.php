<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Subir Archivos</title>
	</head>
	<body>
		<form method="post" action="procesar.php" enctype="multipart/form-data">
			<div>
				<label>Email:</label>
				<input type="text" name="email">
			</div>
			<div>
				<label>Avatar:</label>
				<input type="file" name="avatar">
			</div>
			<button type="submit">Subir imagen</button>
		</form>
	</body>
</html>
