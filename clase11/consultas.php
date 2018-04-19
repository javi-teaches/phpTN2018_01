<?php
	require_once('connect.php');

	$query = $db->prepare('
		SELECT id, title AS pelicula, rating AS buena
		FROM movies
		ORDER BY title
	');
	$query->execute();
	$resultados = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Consulta PDO</title>
	</head>
	<body>
		<h2>Listado de películas</h2>
		<ul>
			<?php foreach ($resultados as $pelicula): ?>
				<li>
					<?=$pelicula['pelicula'] . ' - ' . $pelicula['buena']?>
					<a href="detalle.php?id=<?=$pelicula['id']?>">[ver más]</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</body>
</html>
