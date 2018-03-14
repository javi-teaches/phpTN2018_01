<?php
	// Crear las siguientes variables y mostrarlas utilizando echo y var_dump:

	$alumna = [];
	$alumna["nombre"] = "Sofia";
	$alumna["cursada"] = "Full Stack";
	$alumna["turno"] = "Noche";
	$alumna["horario"] = 18.30;
	$alumna[] = "Un valor sin posición tipo clave";
	echo "<pre>";
	var_dump($alumna);
	echo "</pre>";

	$unAuto = [
		"marca" => "Renault",
		"modelo" => "Megane",
		"anio" => 2018,
		"color" => ["Plateado", "Negro"],
	];
	echo "<pre>";
	var_dump($unAuto);
	echo "</pre>";

	$miArray = [];
	$miArray[] = "Hola";
	$miArray[] = "Chau";
	var_dump($miArray);
	echo "<br>";

	$entero = 13;
	echo "$entero <br>";
	echo $entero . "<br>";
	var_dump($entero);
	echo "<br><br>";

	$decimal = 0.7;
	echo "$decimal <br>";
	var_dump($decimal);
	echo "<br><br>";

	$cadenaUno = 'Hello world';
	echo "$cadenaUno <br>";
	var_dump($cadenaUno);
	echo "<br><br>";

	$cadenaDos = 'Hola mundo';
	echo "$cadenaDos <br>";
	var_dump($cadenaDos);
	echo "<br><br>";

	$entero = "Lorem ipsum";
	echo "$entero <br>";
	var_dump($entero);
	echo "<br><br>";

	$cadenaUno = 3.5;
	echo "$cadenaUno <br>";
	var_dump($cadenaUno);
	echo "<br><br>";

	$entero = "13";
	echo "$entero <br>";
	var_dump($entero);
	echo "<br><br>";

	//En base a la frase “Tres tristes tigres tragan trigo en un trigal”, crear una variable por cada palabra, donde el nombre de cada variable indique la posición de la palabra en la frase.

	$uno = "Tres";
	$dos = "tristes";
	$tres = "tigres";
	$cuatro = "tragan";
	$cinco = "trigo";
	$seis = "en un";
	$siete = "trigal";

	$refran = $uno . $dos . $tres . $cuatro . $cinco . $seis . $siete;

	$miPalabra = "Me gustan los $tres que $cuatro $dos";

	echo "$refran <br>";
	echo "$miPalabra <br>";
