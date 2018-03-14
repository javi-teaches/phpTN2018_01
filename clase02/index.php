<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Clase 02 - PHP</title>
		<style>
			body {
				font-family: sans-serif;
				padding: 20px 200px;
			}
			h3 {
				padding: 15px;
				background-color: #e1dde2;
				border-radius: 10px;
				font-weight: normal;
			}
			pre {
				background-color: #f0e7e6;
				border-radius: 8px;
				padding: 10px;
				font-size: 1.1em;
			}
		</style>
	</head>
	<body>
	<?php

		echo "<h3>1. Definir dos variable con números y compararlos con un if para decidir cuál número es mayor e imprimir “El número mayor es N” donde N sea el valor de la variable que resultó ser mayor, y un else para cubrir el caso inverso.</h3>";

		$n1 = 55;
		$n2 = 10;

		if ($n1 > $n2) {
			echo "<p> El número mayor es $n1 </p>";
		} else {
			echo "<p> El número mayor es $n2 </p>";
		}

		echo "<h3>2 y 3. Utilizando la función propia de PHP rand(x,y), donde \"x\" es el número mínimo e \"y\" el número máximo, generar un número aleatorio entre 1 y 5, asignarlo a una variable e imprimir la variable si y sólo si el número generado es 3 o 5. Utilizando la variable del ejercicio anterior, imprimir \"El número NO es 3\" en el caso que sea verdad esa premisa. En el caso que sí lo sea que simplemente se imprima el número 3. </h3>";

		$randNum = rand(1, 5);
		echo "<p><strong> \$randNum: $randNum </strong></p>";

		if ($randNum == 3) {
			echo "<p> El número es $randNum </p>";
		} elseif ($randNum == 5) {
			echo "<p> El número es $randNum </p>";
		} else {
			echo "<p> El número no es 3 ni 5 </p>";
		}

		echo "<h3>4. En otra variable, generar un número entre 1 y 100, controlar si es mayor que 50. En el caso que sea verdadero, imprimir \"El número es mayor a 50\", en el caso que sea falso: \"El número es menor a 50\". ¿Qué pasa si el número es 50?</h3>";

		$randNum2 = rand(1, 100);
		echo "<p><strong> \$randNum2: $randNum2 </strong></p>";

		if ($randNum2 > 50) {
			echo "<p> El número es mayor a 50 </p>";
		} else {
			echo "<p> El número es menor a 50 </p>";
		}

		echo "<h3>5. Generar dos variables, una \$nombreDeUsuario y \$claveDeUsuario, ambos strings. Validar que el usuario corresponda a \"admin\" y la contraseña a \"1234\". De ser así, que imprima \"¡Bienvenido a tu cuenta!\", sino, que imprima \"Lo sentimos, hay un error de credenciales. Modificar al ejercicio anterior, y agregar los else necesarios para poder identificar si el error está en el usuario, la contraseña, o en ambos. </h3>";

		$nombreDeUsuario = 'admin';
		$claveDeUsuario = 1234;

		if ($nombreDeUsuario == 'admin' && $claveDeUsuario == 1234) {
			echo "<p> ¡Bienvenido a tu cuenta! </p>";
		}
		elseif ($nombreDeUsuario !== 'admin' && $claveDeUsuario === 1234) {
			echo "<p> Nombre de usuario errado. </p>";
		}
		elseif ($nombreDeUsuario == 'admin' && $claveDeUsuario != 1234) {
			echo "<p> Clave errada. </p>";
		} else {
			echo "<p> Lo sentimos, hay un error de credenciales </p>";
		}

		echo "<h3>6. Tendremos 3 variables: edad (un número), casado (un booleano) y sexo (string que puede ser \"Masculino\", \"Femenino\" u \"Otro\"). Si la persona es mayor a 18 años y no está casado se imprimirá el mensaje \"Bienvenido\" </h3>";

		$edad = 13;
		$casado = false;
		$sexo = 'Otro';

		if ($edad >= 18 && !$casado || $sexo == 'Otro') {
			echo "<p> Bienvenido, mayor de edad y no casado </p>";
		}

		echo "<h3>7. Definir una variable que se llame cantidadDeAlumnos que contenga un valor numérico. Luego, escribir el siguiente código: (¡sin copiar y pegar!)</h3>";

		echo "<pre>
			if (\$cantidadDeAlumnos) {
				echo true;
			} else {
				echo false;
			}
		</pre>";

		$cantidadDeAlumnos = 10;

		if ($cantidadDeAlumnos) {
			echo true;
		} else {
			echo false;
		}

		echo "<h3>8. Probar el siguiente código: </h3>";

		echo "<pre>
			if (\$i = 1) {
				echo true;
			} else {
				echo false;
			}
		</pre>";

		echo "<p>¿Qué imprime?. Si modificamos el 1 por un 0 en el ejercicio anterior, ¿Qué vuelve a imprimir?</p>";

		if ($i = 1) {
			echo true;
		} else {
			echo false;
		}

		echo "<h3>9. Definir una variable \$numero con un número. Imprimir \"El número es par\" si lo es o \"El número es impar\" si no lo es. Se pide resolver este ejercicio con un if ternario: pregunta ? respuestaPositiva : respuestaNegativa;</h3>";

		$numero = 3;

		echo $numero % 2 == 0 ? 'El número es par' : 'El número es impar';

		echo "<h3>Crear una variable tipo string que guarde un nombre (Ej: \"Pedro\"). Utilizando switch, hacer 5  casos (para 5 nombres diferentes) e imprimir \"Hola nombre_persona\". Tener en cuenta que si no se coincide con ningún nombre de la variable, imprimir \"No hay a quien saludar\".</h3>";

		$nombreUsuario = 'Juana';

		switch ($nombreUsuario) {
			case 'Pedro':
				echo "<p> Bienvenido, $nombreUsuario </p>";
				break;
			case 'Juana':
				echo "<p> Bienvenido, $nombreUsuario </p>";
				break;
			case 'Maria':
				echo "<p> Bienvenido, $nombreUsuario </p>";
				break;
			default:
				echo "<p> No hay a quien saludar </p>";
				break;
		}

		echo "<h3>Crear una variable colorRemera que tenga un valor tipo string, con un color primario. Utilizando switch, dejar los casos necesarios usando un solo echo y además el default. En el caso que el color sea \"amarillo\", \"rojo\" o \"verde\" debe entrar en el caso correspondiente e imprimir \"El color de la remera es un color primario\", si es otro color, deberá imprimir \"La remera es de color desconocido\".</h3>";

		$colorRemera = 'Rojo';

		switch ($colorRemera) {
			case 'Rojo':
			case 'Verde':
			case 'Azul':
				echo "<p> La remera es de color $colorRemera </p>";
				break;
			default:
				echo "<p> La remera es de color desconocido </p>";
				break;
		}
		
	?>
	</body>
</html>
