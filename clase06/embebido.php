<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP Embebido</title>
	</head>
	<body>
		<?php
			$nombre = 'Ana';
			$edad = 15;
			$paises = ['Argentina', 'Brasil', 'Colombia'];
			echo "<h2 class=\"title\">Hola <em>$nombre</em>, tenés $edad años</h2>";
		?>
		<h2>Hola <em><?=$nombre?></em>, tenés <?=$edad?> años</h2>

		<?php if ($edad >= 18): ?>
			<h2 class="title">Hola <em><?=$nombre?></em>, sos mayor</h2>
		<?php else: ?>
			<h2 class="title">Hola <em><?=$nombre?></em>, sos menor</h2>
		<?php endif; ?>

		<ul>
			<?php foreach ($paises as $pais): ?>
				<li><?=$pais?></li>
			<?php endforeach; ?>
		</ul>
	</body>
</html>
