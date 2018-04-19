<?php
	require_once('conection.php');

	try {
		$sql = "
			SELECT m.title AS pelicula, g.name AS genero
			FROM movies AS m
			INNER JOIN genres AS g
			ON g.id = m.genre_id
			AND m.id =" . $_GET['id']
		;

		$query = $db->prepare($sql);
		$query->execute();
	}
	catch( PDOException $Exception ) {
		$message = '¡Problemas con la consulta!';
	}

	$results = $query->fetchAll(PDO::FETCH_ASSOC);
	// var_dump($results);
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Detalle</title>
	</head>
	<body>
		<ul>
			<?php foreach ($results as $detail): ?>
				<li><?=$detail['pelicula']?></li>
				<li><?=$detail['genero']?></li>
			<?php endforeach; ?>
		</ul>
		<a href="peliculas.php">Volver a películas</a>
	</body>
</html>
