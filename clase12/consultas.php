<?php
	require_once('connect.php');

	// $stmt2 = $db->prepare('SELECT id FROM genres');
	// $stmt2->execute();
	// $results = $stmt2->rowCount();

	// $sql = "
	// 		INSERT INTO movies (title, rating, release_date)
	// 		VALUES ('Mi peliculon', 10, '2017-12-24')
	// 	";
	// $query = $db->prepare($sql);
	// $query->execute();
	//
	// $lastId = $db->lastInsertId(); // id de la última fila insertada


	// $stmt = $db->prepare("SELECT * FROM movies WHERE id=? AND title=?");
	// $stmt->execute([1, 'Avatar']);
	// $results = $stmt->fetch(PDO::FETCH_ASSOC);


	// try {
	// 	$sql = "
	// 		INSERT INTO movies (title, rating, release_date)
	// 		VALUES ('Mi peliculon', 10, '2017-12-24')
	// 	";
	// 	$query = $db->prepare($sql);
	// 	$query->execute();
	// } catch ( PDOException $Exception ) {
   // 	echo $Exception->getMessage();
	// }
	//

	// $stmt = $db->prepare("SELECT * FROM movies WHERE id = ? AND title = ?");
	// $stmt->bindValue(2, "El rey león", PDO::PARAM_STR);
	// $stmt->bindValue(1, 10, PDO::PARAM_INT);
	// $stmt->execute();
	// $results = $stmt->fetch(PDO::FETCH_ASSOC);

	// $stmt = $db->prepare("SELECT * FROM movies WHERE title LIKE ?");
	// $stmt->bindValue(1, "%gue%", PDO::PARAM_STR);
	// $stmt->execute();
	// $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$aBuscar = '%gue%';
	$stmt = $db->prepare("SELECT * FROM movies WHERE title LIKE ?");
	$stmt->bindValue(1, $aBuscar, PDO::PARAM_STR);
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo "<pre>";
	if (isset($results)) {
		var_dump($results);
	}

	// $stmt = $db->prepare('SELECT * FROM movies WHERE id=:id AND title=:title');
	// $id = 1;
	// $titulo = "Avatar";
	// $stmt->bindValue(':id', $id, PDO::PARAM_INT);
	// $stmt->bindValue(':title', $titulo, PDO::PARAM_STR);
	// $stmt->execute();
	// $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	// $stmt = $db->prepare("SELECT * FROM movies WHERE id=:id AND title=:title");
	// $id = 1;
	// $title = "Avatar";
	// $stmt->bindParam(':id', $id, PDO::PARAM_INT);
	// $stmt->bindParam(':title', $title, PDO::PARAM_STR);
	// $title = "Buscando a Nemo"; //Se termina insertando este valor
	// $stmt->execute();
	// $results = $stmt->fetch(PDO::FETCH_ASSOC);


	// desactiva el modo auto-commit
	// $db->beginTransaction();
	// //código a ejecutar en la base de datos
	// $stmt = $db->exec("DELETE FROM movies WHERE title LIKE '%rogue%'");
	// $db->commit();
	// $db->rollBack();

	// $db->beginTransaction();
	// try {
	// 	// $db->exec("DELETE FROM movies WHERE title LIKE 'Avengers'");
	// 	$stmt = $db->prepare("SELECT title FROM movies");
	// 	$stmt->execute();
	// 	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	// 	$db->commit();
	// }
	// catch(PDOException $Exception) {
	// 	// Houston tenemos un problema
	// 	$db->rollBack();
	// 	echo $Exception->getMessage();
	// }



?>
