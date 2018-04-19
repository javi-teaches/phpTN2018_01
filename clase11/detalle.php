<?php
	require_once('connect.php');

	$query = $db->prepare('
		SELECT m.title AS peli, m.awards AS premios, m.rating, g.name AS gname
		FROM movies AS m
		LEFT JOIN genres AS g
		ON m.genre_id = g.id
		WHERE m.genre_id IS NULL
		AND m.id =' . $_GET['id']
	);
	$query->execute();
	$pelicula = $query->fetch(PDO::FETCH_ASSOC);

	// var_dump($pelicula); exit;
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Detalle de la película</title>
	</head>
	<body>
		<h2> <?=$pelicula['peli']?> </h2>
		<ul>
			<li> Premios: <?=$pelicula['premios']?> </li>
			<li> Rating: <?=$pelicula['rating']?> </li>
			<li> Género: <?=isset($pelicula['gname']) ? $pelicula['gname'] : 'No especificado'?> </li>
		</ul>
		<a href="consultas.php">VOLVER</a>
	</body>
</html>
