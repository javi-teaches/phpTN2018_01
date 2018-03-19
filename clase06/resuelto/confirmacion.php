<?php
	if (trim($_POST['name']) == '') {
		header('Location: register.php');
		exit;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Confirmación</title>
	</head>
	<body>
		<?php
			echo "<pre>";
			var_dump($_POST);
			echo "</pre>";
		?>
		<p>
			<em>
				Muchas Gracias por registrarte <?=$_POST['name']?>, nos has dicho que tu país de nacimiento es <?=$_POST['country']?>. Hemos registrado tu email, <?=$_POST['email']?>.
				<br><br>
				<?php if (isset($_POST['hobbies'])): ?>
					Tus pasatiempos son:
					<?php foreach ($_POST['hobbies'] as $hobbie): ?>
						 <?=$hobbie?>,
					<?php endforeach; ?>
				<?php else: ?>
					<strong>No has especificado tus pasatiempos.</strong>
				<?php endif; ?>
				<br><br>
				¡Gracias!
			</em>
		</p>

	</body>
</html>
