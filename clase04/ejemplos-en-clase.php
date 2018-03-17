<?php
	function sumar($num1, $num2){
		return $num1 + $num2;
	}

	$numGrande1 = sumar(5, 3);
	$numGrande2 = sumar(6, 10);
	echo sumar(4, 12) . '<br>';

	echo "$numGrande1, $numGrande2. <br>";
	echo sumar($numGrande1, $numGrande2) . '<br>';

	function saludar ($nombre, $apellido = null) {
		if (!$apellido) {
			return "Hola $nombre, bienvenid@! Sería lindo que nos dejes saber tu apellido";
		}
		return "Hola $nombre $apellido, bienvenid@!";
	}

	echo "<p>" . saludar('Ana') . "</p>";
	echo "<p>" . saludar('Juan', 'Pérez') . "</p>";

	$hola = "Hello";
	function test2(){
		global $hola;
		return $hola;
	}
	echo test2() . "<br>";

	function test() {
		static $a = 0;
		return ++$a;
	}
	echo (test()) . "<br>";
	echo (test()) . "<br>";
	echo (test()) . "<br>";
	echo (test()) . "<br>";
	echo (test()) . "<br>";
	echo (test()) . "<br>";
	echo (test()) . "<br>";
