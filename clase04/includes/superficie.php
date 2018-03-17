
		<h3>2. Generar un archivo llamado superficie.php:</h3>
		<ol type="a">
			<li>Definir una función triangulo() que retorne su superficie.</li>
			<li>Definir una función rectangulo() que retorne su superficie.</li>
			<li>Definir una función cuadrado() que retorne su superficie.</li>
			<li>Utilizando la función <a href="http://php.net/manual/es/function.pi.php">pi()</a>, definir una función circulo() que retorne su superficie.</li>
		</ol>

		<?php
			function triangulo($base, $altura) {
				global $funcionesEjecutadas;
				$funcionesEjecutadas++;
				return $base * ($altura / 2);
			}

			echo "<p>La superficie de un tríangulo de 6 x 4 es: " . triangulo(6, 4) . '</p>';

			function rectangulo($base, $altura) {
				global $funcionesEjecutadas;
				$funcionesEjecutadas++;
				return  ($base * $altura);
			}

			echo "<p>La superficie de un rectángulo de 6 x 4 es: " . rectangulo(6, 4) . '</p>';

			function cuadrado($base) {
				global $funcionesEjecutadas;
				$funcionesEjecutadas++;
				return $base * $base;
			}

			echo "<p>La superficie de un cuadrado de 6 en base es: " . cuadrado(6) . '</p>';

			function circulo($radio) {
				global $funcionesEjecutadas;
				$funcionesEjecutadas++;
				return pi()*$radio*$radio;
			}

			echo "<p>La superficie de un circulo de 6 en radio es: " . circulo(6) . '</p>';
		?>
