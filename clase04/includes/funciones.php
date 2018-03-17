
		<h3>1. Generar un archivo llamado funciones.php:</h3>
		<ol type="a">
			<li>Definir una función mayor() que reciba 3 números y devuelva el mayor, imprimir el resultado. </li>
			<li>Definir una función tabla() que reciba un parámetro base, un parámetro límite, y devuelve un array con la secuencia de números desde el numero base hasta el numero limite, imprimir el resultado </li>
			<li>Definir una variable llamada numeroMagico, que contenga un número, dicha variable deberá estar en la 1er línea de nuestro código PHP.</li>
			<li>Modificar mayor() para que si recibe sólo 2 parámetros o si el tercer parámetro NO es un número (<a href="http://php.net/manual/es/function.is-numeric.php">is_numeric()</a>), compare a esos dos números con numeroMagico.</li>
			<li>Modificar tabla para que si recibe un sólo parámetro o si el segundo parámetro NO es un número, utilice numeroMagico como límite.</li>
		</ol>

		<?php
			$numeroMagico = 13;

			function mayor($num1, $num2, $num3 = null){
				global $funcionesEjecutadas;
				$funcionesEjecutadas++;
				global $numeroMagico;
				$num3 = (!$num3 || !is_numeric($num3)) ? $numeroMagico : $num3;
				if ($num1 > $num2 && $num1 > $num3) {
					return $num1;
				} elseif ($num2 > $num1 && $num2 > $num3) {
					return $num1;
				} else {
					return $num3;
				}
			}
			echo "<p>Función mayor(): </p>";
			echo("El número mayór es " . mayor(5, 6, 'a'));

			function tabla($base, $limite = null){
				global $funcionesEjecutadas;
				$funcionesEjecutadas++;
				global $numeroMagico;
				$limite = (!$limite || !is_numeric($limite)) ? $numeroMagico : $limite;
				$result = [];
				for ($i= $base; $i <= $limite ; $i++) {
					array_push($result, $i);
				}
				return $result;
			}

			echo "<p>Función tabla(): </p>";
			echo "<pre>";
			print_r(tabla(2, 'a'));
			echo "</pre>";
		?>
