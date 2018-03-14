<?php
	$ceu = [
		"Colombia" => [
			"esAmericano" => true,
			"ciudades" => ["Cartagena", "Bogota", "Barranquilla"]
		],
		"Alemania" => [
			"esAmericano" => false,
			"ciudades" => ["Munich", "Berlin", "Frankfurt"]
		],
		"Argentina"	=> [
			"esAmericano" => true,
			"ciudades" => ["Buenos Aires", "Córdoba", "Santa Fé"]
		],
		"Brasil" => [
			"esAmericano" => true,
			"ciudades" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"]
		],
		"Francia" => [
			"esAmericano" => false,
			"ciudades" => ["Paris", "Nantes", "Lyon"]
		],
		"Italia" => [
			"esAmericano" => false,
			"ciudades" => ["Roma", "Milan", "Venecia"]
		],

	];

	ksort($ceu);

	foreach ($ceu as $pais => $data) {
		if ($data["esAmericano"]) {
			echo "Las ciudades de $pais son:";
			// echo "<ul>";
			foreach ($data["ciudades"] as $ciudad) {
				echo "$ciudad \n";
			}
			// echo "</ul>";
		}
	}
