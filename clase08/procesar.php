<?php
	if ($_POST) {
		if ($_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
			$nombreArchivo = $_FILES['avatar']['name'];
			$ext = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
			$archivoTemp = $_FILES['avatar']['tmp_name'];

			$ubicacion = dirname(__file__);
			$ubicacion = $ubicacion . '/images/' . $_POST['email'] . '.' . $ext;

			if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png') {

				/* === Validación para que se repita el nombre de la imagen === */

				// Traigo todas las imágenes que hay en la carpeta
				$files = glob('images/*');

				// Genero un array vacio para guardar solo el nombre de cada imagen, sin la extensión
				$newFiles = [];

				// 'Foricheo' el array que trajo todas las imágenes que están en la carpeta
				foreach ($files as $imagen) {
					// A cada una de la imágenes les quito la extensión (.jpg ó .png) con el substr y pusheo cada nombre sin extensión en el array nuevo
					$newFiles[] = substr($imagen, 0, -4);
				}

				// Armo el nombre de la imagen que están tratando de subir (sin la extensión)
				$imagenActual = 'images/' . $_POST['email'];

				// Busco si en el array que contiene solo el nombre de las imágenes existe un nombre igual a la imagen que quiero subir
				if (in_array($imagenActual, $newFiles)) {
					// Si existe arrojo un mensaje
					$seSubio = 'Ya existe la imagen';
				} else {
					// Si no existe, subo la imagen
					move_uploaded_file($archivoTemp, $ubicacion);
					$seSubio = 'Archivo subido exitosamente';
				}

			} else {
				$seSubio = 'Formato no reconocido, subi solo JPG, JPEG y PNG';
			}
		} else {
			$seSubio = 'No mandaste imagen';
		}
	}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Subido</title>
	</head>
	<body>
		<?=$seSubio;?>
		<br>
		<a href="subir.php">Volver</a>
	</body>
</html>
