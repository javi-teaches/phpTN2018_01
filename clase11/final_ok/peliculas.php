<?php
	require_once('conection.php');

	try {
		$sql = "SELECT id, title FROM movies ORDER BY title";
		$query = $db->prepare($sql);
		$query->execute();
	}
	catch( PDOException $Exception ) {
		$message = '¡Problemas con la consulta!';
	}

	$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Listado de Películas</title>
	</head>
	<body>
		<ul>
			<?php foreach ($results as $movie): ?>
				<li> <?=$movie['title']?> <a href="detalle.php?id=<?=$movie['id']?>">[ver detalle]</a></li>
			<?php endforeach; ?>
		</ul>
	</body>
</html>
