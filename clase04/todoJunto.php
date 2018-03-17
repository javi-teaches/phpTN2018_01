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
		<h3>4. Crear un archivo todoJunto.php que incluya el archivo funciones.php y superficie.php en donde se definirá una  función que reciba los radios de 3 círculos y retorna la mayor superficie entre ambos. Para este ejercicio se deberá reutilizar las funciones ya definidas..</h3>

		<p>Modificar todoJunto.php para que en su primer línea diga $funcionesEjecutadas = 0. Luego, modificar cada función de funciones.php y superficie.php para que al comenzar hagan $funcionesEjecutadas++. Probar llamar a varias funciones y ver cuanto vale $funcionesEjecutadas en cada momento. ¿Esto esta permitido? ¿Qué sucede?</p>

		<?php
			$funcionesEjecutadas = 0;
			echo "<strong>Funciones ejecutadas:  $funcionesEjecutadas</strong>";
			require_once('includes/funciones.php');
			require_once('includes/superficie.php');

			echo '<strong>Fin de los archivos incluidos ++++++++++++++++++++++++++++++++++++++++++</strong><br>';

			function tresCirculos($c1, $c2, $c3) {
				$c1f = circulo($c1);
				$c2f = circulo($c2);
				$c3f = circulo($c3);
				return mayor($c1f, $c2f, $c3f);
			}

			echo "<h3>Resultado del punto 4</h3>";

			echo tresCirculos(4, 5, 6);

			echo "<h3>Funciones ejecutadas</h3>";

			echo "<strong>Cantidad final de funciones ejecutadas:  $funcionesEjecutadas</strong>";

			echo "<h3>Utilizando strpos(), encontrar la posición de la primera aparición de \"php\" dentro de la cadena: \"Me encanta php, A Mi tambien me encanta php!\"</h3>";

			$elTexto = 'Me encanta php, A Mi tambien me encanta php!';
			echo "¿Donde está <b>php</b> en esta frase <em>$elTexto</em>?, la posición es: " . strpos($elTexto, 'php');
		?>
	</body>
</html>
