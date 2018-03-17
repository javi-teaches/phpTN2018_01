<?php
	function toPrintArray($type, $data){
		echo "$type <br>";
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}

	toPrintArray("\$_POST", $_POST);
	toPrintArray("\$_FILES", $_FILES);
	toPrintArray("getAllHeaders()", getAllHeaders());

	function printFromForm($data) {
		echo "<ul>";
		foreach ($data as $key => $value) {
			if (is_array($value)) {
				echo "<li> $key: ";
				for ($i=0; $i < count($value) ; $i++) {
					echo "<em>$value[$i],</em> ";
				}
				echo "</li>";
			} else {
				echo "<li>$key: $value</li>";
			}
		}
		echo "</ul>";
	}

	printFromForm($_POST);

	echo "foreach de \$_FILES['imagen'] <br><br>";

	$i = count($_FILES['imagen']['name']);
	$n = 0;

	do {
		foreach ($_FILES['imagen'] as $clave => $valor) {
			echo "$clave: $valor[$n] <br>";
		}
		echo "<br>";
		$n++;
	} while ($n < $i);
