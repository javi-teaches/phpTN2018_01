<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Clase 03 - PHP</title>
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
	<?php

		echo "<h3>1. Utilizando un for imprimir los números del 1 al 100.</h3>";

		for ($i = 1; $i <= 100; $i++) {
			echo "$i, ";
		}

		echo "<h3>2. Modificar el ejercicio anterior para que en vez de frenar en el número 100 frene en un número generado aleatoriamente entre 0 y 100. (Utilizar funcion rand(\$x, \$y)) .</h3>";

		$numAlea = rand(0, 100);
		echo "# Aleatorio: $numAlea<br>";
		for ($i = 0; $i <= $numAlea; $i++) {
			echo "$i, ";
		}

		echo "<h3>3. Mostrar la tabla de multiplicar del 2  (hasta 2 x 10)  utilizando un for.</h3>";

		for ($i = 1; $i <= 10; $i++) {
			echo "2 x $i = " . 2 * $i . " | ";
		}

		echo "<h3>4. Un bucle while que cuente desde 100 hasta 85 (fíjate que en este caso es decreciente).</h3>";

		$the100 = 100;

		while ($the100 >= 85) {
			echo "$the100, ";
			$the100--;
		}

		echo "<h3>5. Un bucle while que a partir de una variable \$contador que comience en 1 vaya aumentando hasta llegar a 5, y que muestre por pantalla el doble del valor de \$contador, es decir, que muestre 2, 4, 6, 8, 10.</h3>";

		$contador = 1;

		while ($contador <= 5) {
			echo $contador * 2 . ", ";
			$contador++;
		}

		echo "<h3>6. Utilizando un while haremos un script que tire una moneda (seleccionará un número al azar que puede ser 0 o 1) hasta que saque 5 veces cara (el número 1). Al terminar, debe imprimir cuántos tiros de monedas llevó obtener 5 veces cara.</h3>";

		$contadorCaras = 0;
		$intentos = 0;

		while ($contadorCaras < 5) {
			$moneda = rand(0, 1);
			$intentos++;
			echo "[Moneda: $moneda -- Intento: $intentos] <br>";
			$contadorCaras = ($moneda == 1) ? $contadorCaras + 1 : $contadorCaras;
		}

		echo "Se tomaron $intentos intentos para sacar 5 veces el número 1";

		echo "<h3>7. Utilizando un do/while realizar un script que tire la moneda hasta que se obtenga cara (el número 1). Al final del programa imprimir cuántos tiros de moneda llevó..</h3>";

		$intentos2 = 0;

		do {
			$moneda = rand(0, 1);
			$intentos2++;
			echo "Moneda: $moneda | Intento: $intentos2 <br>";
		} while ($moneda == 0);

		echo "Se tomaron $intentos2 intentos para sacar una vez el número 1";

		echo "<h3>8. Definir un array con 5 strings que sean nombres. Recorrer este array para imprimir cada uno de los nombres en pantalla. Resolver este problema con un for. Resolver este problema con while. Resolver este problema con un do/while.</h3>";

		$listadoPersonas = ["Diana", "Carolina", "Patricia", "Diego", "Oscar"];

		echo "<h4>Con FOR</h4>";

		for ($i = 0; $i < count($listadoPersonas) ; $i++) {
			echo "$listadoPersonas[$i] / ";
		}

		echo "<h4>Con WHILE</h4>";

		$n = 0;

		while ($n < count($listadoPersonas)) {
			echo "$listadoPersonas[$n] / ";
			$n++;
		}

		echo "<h4>Con DO-WHILE</h4>";

		$x = 0;

		do {
			echo "$listadoPersonas[$x] / ";
			$x++;
		} while ($x < count($listadoPersonas));

		echo "<h3>9. Definir un array con 10 números aleatorios entre 0 y 10. Recorrer este array para imprimir todos los números. La ejecución debe terminarse si alguno de los números encontrados es un 5 (Se debe imprimir “Se encontró un 5!”) Resolver este problema con un for. Resolver este problema con un while. Resolver este problema con un do/while.</h3>";

		$arrayNuevo = [];

		for ($i = 0; $i < 10 ; $i++) {
			$arrayNuevo[] = rand(0, 10);
		}

		echo "<pre>";
		var_dump($arrayNuevo);
		echo "</pre>";

		echo "<h4>Con FOR</h4>";

		for ($i = 0; $i < count($arrayNuevo); $i++) {
			if ($arrayNuevo[$i] == 5) {
				echo "<p>Se encontró el 5</p>";
				break;
			}
			echo "$arrayNuevo[$i], ";
		}

		echo "<h4>Con WHILE</h4>";

		$y = 0;

		while ($y < count($arrayNuevo)) {
			if ($arrayNuevo[$y] == 5) {
				echo "<p>Se encontró el 5</p>";
				break;
			}
			echo "$arrayNuevo[$y], ";
			$y++;
		}

		echo "<h4>Con DO-WHILE</h4>";

		$z = 0;

		do {
			if ($arrayNuevo[$z] == 5) {
				echo "<p>Se encontró el 5</p>";
				break;
			}
			echo "$arrayNuevo[$z], ";
			$z++;
		} while ($z < count($arrayNuevo));

		echo "<h3>10. Utilizando la funcion 'Range'(http://php.net/manual/en/function.range.php) crear un rango de letras (de la a hasta la o), imprimir un valor que diga 'En la posición [index] se encuentra el valor [value]'' donde [value] se reemplazará por cada valor del array y [index] representa el índice.</h3>";

		$arrayLetras = range('a', 'o');
		echo "<pre>";
		var_dump($arrayLetras);
		echo "</pre>";

		for ($i = 0; $i < count($arrayLetras) ; $i++) {
			echo "<p>En la posición $i está el valor $arrayLetras[$i]</p>";
		}

		echo "<h3>11 y 12. Definir una variable \$mascota que sea un array asociativo. En el índice animal debe decir qué animal es. En el índice edad debe decir la edad. En el índice altura debe decir la altura. En el índice nombre debe decir el nombre</h3>";
		$mascota = [
			'animal' => ['Gato', 'Perro'],
			'edad' => [20, 10],
			'altura' => [0.30, 0.70],
			'nombre' => ['Michi', 'Koko'],
		];

		$xz = count($mascota['animal']);
		$nn = 0;

		do {
			foreach ($mascota as $clave => $valor) {
				echo "$clave: $valor[$nn] <br>";
			}
			$nn++;
		} while ($nn < $xz);

		echo "<h3>13. Partiendo de un archivo con la siguiente variable definida. Crear un script que muestre el nombre de la capital y el país desde la variable \$ceu</h3>";

		$ceu = [
			"Italia"=>"Roma",
			"Luxembourg"=>"Luxembourg",
			"Bélgica"=> "Bruselas",
			"Dinamarca"=>"Copenhagen",
			"Finlandia"=>"Helsinki",
			"Francia" => "Paris",
			"Slovakia"=>"Bratislava",
			"Eslovenia"=>"Ljubljana",
			"Alemania" => "Berlin",
			"Grecia" => "Athenas",
			"Irlanda"=>"Dublin",
			"Holanda"=>"Amsterdam",
			"Portugal"=>"Lisbon",
			"España"=>"Madrid",
			"Suecia"=>"Stockholm",
			"Reino Unido"=>"London",
			"Chipre"=>"Nicosia",
			"Lithuania"=>"Vilnius",
			"Republica Checa"=>"Prague",
			"Estonia"=>"Tallin",
			"Hungría"=>"Budapest",
			"Latvia"=>"Riga",
			"Malta"=>"Valletta",
			"Austria" => "Vienna",
			"Polonia"=>"Warsaw"
		];

		ksort($ceu);

		foreach ($ceu as $key => $value) {
			echo "<p>La capital de $key es $value</p>";
		}

		echo "<h3>14 y 15. Ciudades de países que son americanas: </h3>";

		$ceu2 = [
			"Colombia" => [
				'esAmericano' => true,
				'ciudades' => ["Cartagena", "Bogota", "Barranquilla"]
			],
			"Argentina"	=> [
				'esAmericano' => true,
				'ciudades' => ["Buenos Aires", "Córdoba", "Santa Fé"]
			],
			"Brasil" => [
				'esAmericano' => true,
				'ciudades' => ["Brasilia", "Rio de Janeiro", "Sao Pablo"]
			],
			"Francia" => [
				'esAmericano' => false,
				'ciudades' => ["Paris", "Nantes", "Lyon"]
			],
			"Italia" => [
				'esAmericano' => false,
				'ciudades' => ["Roma", "Milan", "Venecia"]
			],
			"Alemania" => [
				'esAmericano' => false,
				'ciudades' => ["Munich", "Berlin", "Frankfurt"]
			]
		];

		ksort($ceu2);

		foreach ($ceu2 as $pais => $data) {
			if ($data['esAmericano']) {
				echo "<p>Las ciudades de $pais son:";
				echo "<ul>";
				foreach ($data['ciudades'] as $ciudad) {
					echo "<li>$ciudad</li>";
				}
				echo "</ul>";
			}
		}

		?>

	</body>
</html>
