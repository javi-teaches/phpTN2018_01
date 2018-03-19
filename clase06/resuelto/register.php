<?PHP
	$paises = ['Argentina', 'Brasil', 'Colombia', 'Chile', 'Ecuador', 'Paraguay', 'Perú', 'Uruguay', 'Venezuela' ];

	$errorName = '';
	$errorUsername = '';
	$errorPassword = '';
	$errorEmail = '';

	if($_POST) {
		if (trim($_POST['name']) == '') {
			$errorName = 'Ingresá un nombre';
		}

		if (trim($_POST['email']) == '') {
			$errorEmail = 'Ingresá un email';
		} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errorEmail = 'Ingresá un email valido';
		}

		if (trim($_POST['username']) == '') {
			$errorUsername = 'Escribí tu nombre de usuario';
		}

		if (trim($_POST['password']) == '') {
			$errorPassword = 'Ingresá la contraseña';
		}

		if (trim($_POST['name']) !== '' && trim($_POST['email']) !== '' && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && trim($_POST['username'] !== '' && trim($_POST['password']) !== '')) {
			header('Location: felicitaciones.php');
			exit;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact us</title>
	 <style media="screen">
	 	* {
	 		box-sizing: border-box;
	 	}
	 	.form-control {
	 		border: solid 1px #dddddd;
			background-color: #eeeeee;
			padding: 5px;
			margin-bottom: 10px;
	 	}
		.form-control input:not([type=checkbox]) {
			display: block;
			height: 40px;
			width: 100%;
			margin-top: 5px;
			padding: 15px;
			font-size: 1em;
			outline: none;
		}
		.form-control select {
			width: 60%;
			height: 40px;
			font-size: 1em;
			outline: none;
		}
		.form-control button {
			background-color: #24c4d4;
			color: #FFFFFF;
			font-size: 1.2em;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
		}
		.error {
			color: red;
			font-weight: bold;
		}
	 </style>
</head>
<body>
   <!-- <form method='post' action='confirmacion.php'> -->
   <form method='post'>
      <fieldset >
			<legend>Registrate</legend>

			<strong>* campos requeridos</strong><br><br>

			<div class='form-control'>
				<label for='name' >Nombre completo*: </label>
				<input type='text' name='name' id='name' value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>">
				<span class="error"><?=$errorName?></span>
			</div>

			<div class='form-control'>
				<label for='email' >Email*:</label>
				<input type='text' name='email' id='email' value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
				<span class="error"><?=$errorEmail?></span>
			</div>

			<div class='form-control'>
				<label for='username' >Nombre de usuario*:</label>
				<input type='text' name='username' id='username' value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>">
				<span class="error"><?=$errorUsername?></span>
			</div>

			<div class='form-control'>
				<label for='password'>Contraseña*:</label>
				<input type='password' name='password' id='password'>
					<span class="error"><?=$errorPassword?></span>
			</div>

			<?php if (!isset($_GET['versionCorta'])) : ?>
				<div class='form-control'>
					<label for='rePassword'>Confirmar contraseña:</label>
					<input type='password' name='rePassword' id='rePassword'>
				</div>

				<div class='form-control'>
					<label for='phone'>Teléfono de contacto:</label>
					<input type='tel' name='phone' id='phone' value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>">
				</div>

				<div class='form-control'>
					<label for='address'>Dirección domicilio:</label>
					<input type='text' name='address' id='address' value="<?= isset($_POST['address']) ? $_POST['address'] : '' ?>">
				</div>
			<?php endif ?>

			<div class='form-control'>
				<label for='country'>País de nacimiento:</label>
				<select name="country">
					<option value="">Elegí</option>
					<?php foreach ($paises as $pais): ?>
						<?php if ($_POST['country'] === $pais ): ?>
							<option selected value="<?=$pais?>"><?=$pais?></option>
						<?php else: ?>
							<option value="<?=$pais?>"><?=$pais?></option>
						<?php endif; ?>
					<?php endforeach; ?>
				</select>
			</div>

			<div class='form-control'>
				<label>Pasatiempos:</label>
				<label><input type="checkbox" name="hobbies[]" value="Leer" <?= isset($_POST['hobbies']) && in_array('Leer', $_POST['hobbies']) ? 'checked' : null ?>  >Leer</label>
				<label><input type="checkbox" name="hobbies[]" value="Música" <?= isset($_POST['hobbies']) && in_array('Música', $_POST['hobbies']) ? 'checked' : null ?>> Música</label>
				<label><input type="checkbox" name="hobbies[]" value="Pasear" <?= isset($_POST['hobbies']) && in_array('Pasear', $_POST['hobbies']) ? 'checked' : null ?>>Pasear</label>
				<label><input type="checkbox" name="hobbies[]" value="Ir al Cine" <?= isset($_POST['hobbies']) && in_array('Ir al Cine', $_POST['hobbies']) ? 'checked' : null ?>>Ir al Cine</label>
			</div>

			<div class='form-control'>
				<button type="submit">ENVIAR</button>
			</div>

      </fieldset>
   </form>
</body>
</html>
