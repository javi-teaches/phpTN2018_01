<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Enlaces</title>
	</head>
	<body>
		<ul>
			<li><a href="celular.php?idCel=0">iPhone</a></li>
			<li><a href="celular.php?idCel=1">Samsung</a></li>
			<li><a href="celular.php?idCel=2">Motorola</a></li>
			<li><a href="celular.php?idCel=5">Blackberry</a></li>
		</ul>
		<?php if (isset($_GET['noEncontrado'])): ?>
			<h3>No encontramos lo que buscabas..</h3>
		<?php endif; ?>
	</body>
</html>
