<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Clase 04 - PHP - Superficie</title>
		<style>
			body {
				font-family: sans-serif;
				padding: 20px 200px;
			}
			h3 {
				padding: 15px;
				background-color: #e1dde2;
				border-radius: 10px;
				font-weight: normal;
			}
			pre {
				background-color: #f0e7e6;
				border-radius: 8px;
				padding: 10px;
				font-size: 1.1em;
			}
		</style>
	</head>
	<body>
		<h3>3. Generar un archivo llamado incluir.php que retorne un echo con el siguiente string "Soy incluir.php".</h3>

		<?php
			echo "<h2>Soy incluir.php</h2>";
			require_once('includes/saludo.php');
			require_once('includes/funciones.php');
			require_once('includes/superficie.php');
		?>
	</body>
</html>
