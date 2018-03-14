<?php

	$personas = ["Gise", "Vanesa", "Fede", "Pau", "Javi"];

	foreach ($personas as $persona) {
		if ($persona == "Pau") {
			echo "<p>Hola $persona</p>";
		}
	}

	echo "<p>++++++++++++++++++</p>";

	$unAuto = [
		'Marca' => 'Renault',
		'Color' => ['Amarillo', 'Verde', 'Rojo'],
		'Modelo' => 'Megane',
		'Año' => 2018,
	];

	foreach ($unAuto as $key => $value) {
		if ($key == 'Color') {
			echo "<p> $key : ";
			foreach ($value as $color) {
				echo "$color, ";
			}
			echo "</p>";
		} else {
			echo "<p>$key : $value</p>";
		}
	}
