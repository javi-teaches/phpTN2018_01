<?php $files = glob('images/*'); ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Mostrar</title>
	</head>
	<body>
		<div style="display: flex; flex-wrap: wrap; align-items: flex-start;">
			<?php foreach ($files as $imagen): ?>
				<img src="<?=$imagen?>" width="120">
			<?php endforeach; ?>
		</div>
	</body>
</html>
