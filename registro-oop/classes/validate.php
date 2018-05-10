<?php

	class Validator {
		public function validateRegister(DB $db, $archivo) {
			$errores = [];

			$name = trim($_POST['name']);
			$email = trim($_POST['email']);
			$pais = trim($_POST['country']);
			$pass = trim($_POST['pass']);
			$rpass = trim($_POST['rpass']);

			// Valido cada campo del formulario y por cada error genero una posición en el array de errores ($errores) que inicialmente estaba vacío

			if ($name == '') { // Si el nombre está vacio
				$errores['name'] = "Completa tu nombre";
			}

			if ($pais == '') { // Si el país no fué elegido
				$errores['country'] = "Decime de donde sos";
			}

			if ($email == '') { // Si el email está vacio
				$errores['email'] = "Completa tu email";
			} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				// Si el email no es un formato valido
				$errores['email'] = "Por favor poner un email de verdad, gatx.";
			} elseif ($db->existeEmail($email)) { // Si el email ya está registrado vacio
				$errores['email'] = "Este email ya existe.";
			}

			if ($pass == '' || $rpass == '') { // Si la contraseña o repetir contraseña está(n) vacio(s)
				$errores['pass'] = "Por favor completa tus passwords";
			} elseif ($pass != $rpass) {
				$errores['pass'] = "Tus contraseñas no coinciden";
			}

			if ($_FILES[$archivo]['error'] != UPLOAD_ERR_OK) { // Si no subieron ninguna imagen
				$errores['avatar'] = "Che subí una foto";
			} else {
				$ext = strtolower(pathinfo($_FILES[$archivo]['name'], PATHINFO_EXTENSION));

				if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
					$errores['avatar'] = "Formatos admitidos: JPG o PNG";
				}

			}

			return $errores;
		}

		public function validarLogin(DB $db) {
			$arrayADevolver = [];
			$email = trim($_POST['email']);
			$pass = trim($_POST['pass']);

			if ($email == '') {
				$arrayADevolver['email'] = 'Completá tu email';
			} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$arrayADevolver['email'] = 'Poné un formato de email válido';
			} elseif (!$usuario = $db->existeEmail($email)) {
				$arrayADevolver['email'] = 'Este email no está registrado';
			} else {
				// Si el mail existe, me guardo al usuario dueño del mismo
				// $usuario = existeEmail($email);

	 			// Pregunto si coindice la password escrita con la guardada en el JSON
	      	if (!password_verify($pass, $usuario->getPassword())) {
	         	$arrayADevolver['pass'] = "Credenciales incorrectas";
	      	}
			}

			return $arrayADevolver;
		}
	}
