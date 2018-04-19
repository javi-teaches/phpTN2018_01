<?php
	require_once('conection.php');

	try {
		$sql = "SELECT id, name FROM genres";
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
		<title>Listado de Géneros</title>
	</head>
	<body>
		<ul>
			<?php foreach ($results as $genero): ?>
				<li> <?=$genero['name'] . ' - ID: ' . $genero['id']?> </li>
			<?php endforeach; ?>
		</ul>
	</body>
</html>
