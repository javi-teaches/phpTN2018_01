<?php
	$variable01 = true;
	$variable02 = false;
	$variable03 = 0;
	$variable04 = 1;
	$variable05 = 6;
	$variable06 = '';
	$variable07 = "3";
	$variable08 = "true";
	$variable09 = 'false';
	$variable10 = null;

	function tipoDato($varN) {
		if ($varN == true) {
			echo 'el valor ' . $varN . ' es verdadero. <br>';
	 	} else {
			echo 'el valor ' . $varN . ' es falso. <br>';
		}
	}

	$variablesList = [$variable01, $variable02, $variable03, $variable04, $variable05, $variable06, $variable07, $variable08, $variable09, $variable10];

	for ($i = 0; $i < count($variablesList); $i++) {
		tipoDato($variablesList[$i]);
	}
