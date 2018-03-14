<?php
	// Crear un array numérico con 5 strings de animales diferentes. Luego de esto, ejecutar un var_dump para ver los resultados.

	$animales = ["León", "Perro", "Jirafa", "Elefante", "Ratón"];
	$animales[] = "Rinoceronte";
	$animales[] = "Oso panda";
	echo "<pre>";
	var_dump($animales);
	echo "</pre>";

	echo "Me gustan los animales: $animales[0] y $animales[4] <br>";

	$animales[0] = "Oso de anteojos";

	echo "Me gustan los animales: \"$animales[0]\" y $animales[4] porque son muy valiosos <br>";
