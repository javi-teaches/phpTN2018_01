<?php
	require_once('connect.php');

	try {
		$sql = "
			INSERT INTO movies (title, rating, release_date)
			VALUES ('Mi pelimm', 10, '2017-12-24')
		";
		$query = $db->prepare($sql);
		$query->execute();
	} catch ( PDOException $Exception ) {
   	echo $Exception->getMessage() . '<br>';
   	echo $Exception->getFile();
	}

?>
