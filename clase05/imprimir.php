<?php
	$data = $_POST;

	if ($data) {
		echo "<pre>";
		var_dump($data);
		echo "</pre>";
	}

	echo "<br>";
	echo $data['nombre'];
	echo "<br>";

	foreach ($data as $key => $value) {
		// En la $key los name's de los inputs
		// En $value tengo el valor de cada input

		// che el valor es un array
		// if ($key == 'hobbies') {
		if (is_array($value)) {
			echo "<p> $key: ";
			foreach ($value as $hobbie) {
				echo "<em> $hobbie, </em>";
			}
			echo "</p>";
		} else {
			echo "<p>$key: $value</p>";
		}
	}
?>
