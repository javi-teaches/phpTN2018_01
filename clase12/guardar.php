<?php
	require_once('connect.php');

	if ($_POST) {
		$title = $_POST['title'];
		$rating = $_POST['rating'];
		$awards = $_POST['awards'];
		$length = $_POST['length'];
		$genre_id = $_POST['genre_id'];
		$release_date = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];

		try {
			$search = "SELECT id, title FROM movies WHERE title LIKE :title";
			$query = $db->prepare($search);
			$query->bindParam(':title', $title, PDO::PARAM_STR);
			$query->execute();
			$result = $query->fetch(PDO::FETCH_ASSOC);

			if (!empty($result)) {
				$sql = "
					UPDATE movies
					SET
						rating = :rating,
						release_date = :release_date,
						awards = :awards,
						length = :length,
						genre_id = :genre_id
					WHERE id = :id
				";

				$query = $db->prepare($sql);

				$query->bindParam(':id', $result['id'], PDO::PARAM_INT);
				$query->bindParam(':rating', $rating, PDO::PARAM_INT);
				$query->bindParam(':release_date', $release_date, PDO::PARAM_STR);
				$query->bindParam(':awards', $awards, PDO::PARAM_INT);
				$query->bindParam(':length', $length, PDO::PARAM_INT);
				$query->bindParam(':genre_id', $genre_id, PDO::PARAM_INT);

				$query->execute();

				$message = '¡Película existente, información actualizada!';
			} else {
				$sql = "INSERT INTO movies (title, rating, release_date, awards, length, genre_id) VALUES (:title, :rating, :release_date, :awards, :length, :genre_id)";

				$query = $db->prepare($sql);

				$query->bindParam(':title', $title, PDO::PARAM_STR);
				$query->bindParam(':rating', $rating, PDO::PARAM_INT);
				$query->bindParam(':release_date', $release_date, PDO::PARAM_STR);
				$query->bindParam(':awards', $awards, PDO::PARAM_INT);
				$query->bindParam(':length', $length, PDO::PARAM_INT);
				$query->bindParam(':genre_id', $genre_id, PDO::PARAM_INT);

				$query->execute();

				$message = '¡Película insertada con éxito!';
			}
		}
		catch( PDOException $Exception ) {
			$message = '¡Problemas al insertar el registro!';
			echo $Exception->getMessage();
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Película Agregada</title>
	</head>
	<body>
		<h2><?=$message?></h2>
		<a href="agregarPelicula.php">Volver al formulario</a>
	</body>
</html>
