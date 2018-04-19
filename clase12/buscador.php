<?php
	require_once 'connect.php';
	if ($_POST) {
		if (isset($_POST['type'])) {
			if (isset($_POST["term"])) {
				$term = $_POST["term"];
				$table = $_POST['type'];
				$querySeries = $db->prepare("SELECT title AS titulo FROM $table WHERE title like '%" . $term . "%'");
				$querySeries->execute();
				$resultsSerie = $querySeries->fetchAll(PDO::FETCH_ASSOC);
				// echo "<pre>";
				// var_dump($resultsSerie);
				// echo "</pre>";
			}
		} else {
			$error = 'Elegí lo que querés buscar';
		}
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Series</title>
	</head>
	<style>
		body{
			font-family: sans-serif;
			background-color: #e3e7e1;
		}
	</style>
	<body>
		<h1 style="color: red;"><?= isset($error)? $error : NULL ?></h1>
		<h2>Busca tu peli/serie</h2>
		<form method="post">
			<label>
				<input type="radio" name="type" value="movies">
				Películas
			</label>
			<label>
				<input type="radio" name="type" value="series">
				Series
			</label>
			<br><br>
			<input type="text" name="term">
			<button type="submit">Buscar peli/serie</button>
		</form>
		<?php if (isset($resultsSerie) && count($resultsSerie) !== 0) : ?>
			<ul>
				<?php foreach ($resultsSerie as $value): ?>
					<li> <?= $value["titulo"]; ?> </li>
				<?php endforeach; ?>
			</ul>
		<?php elseif (isset($resultsSerie) && count($resultsSerie) == 0): ?>
			<h3> No hay resultados </h3>
		<?php endif ?>
	</body>
</html>
