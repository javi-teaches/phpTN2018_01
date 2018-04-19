<?php
	$dsn = 'mysql:host=localhost; dbname=movies_db; port=3306; charset=utf8';
	$db_user = 'root';
	$db_pass = '';
	$opt = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

	try {
   	$db = new PDO($dsn, $db_user, $db_pass, $opt);
	}catch( PDOException $Exception ) {
   	echo $Exception->getMessage();
	}
