<?php
	$nombreCelu = ['iPhone X', 'Samsung 8', 'Moto Z'];
	$imgCelu = [
		'https://images-na.ssl-images-amazon.com/images/I/61lMn0%2BjtRL._SY355_.jpg',
		'https://storehd.com.ar/wp-content/uploads/2017/09/s8-black-si.jpg',
		'https://www.motorola.es/sites/default/files/library/storage/products/moto-z-promo-vendor/moto-z-blk.jpg'
	];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Celular</title>
	</head>
	<body>
		<?php if ($_GET['idCel'] >= 0 && $_GET['idCel'] < count($nombreCelu)): ?>
			<h2><?= isset($_GET['idCel']) ? $nombreCelu[$_GET['idCel']] : 'Sin nombre' ?></h2>
			<img src="<?= isset($_GET['idCel']) ? $imgCelu[$_GET['idCel']] : 'img/not-found.png' ?>" width="400px">
		<?php else:
			header('Location: enlaces.php?noEncontrado');
			exit;
		endif; ?>
	</body>
</html>
