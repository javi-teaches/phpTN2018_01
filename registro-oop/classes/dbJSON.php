<?php
	require_once 'db.php';

	class dbJSON extends DB {
		private $archive;

		public function __construct() {
    		$this->archive = "usuarios.json";
  		}

		public function existeEmail($email){
			// Traigo todos los usuarios
			$todos = $this->traerTodos();

			// Recorro ese array
			foreach ($todos as $unUsuario) {
				// Si el mail del usuario en el array es igual al que me llegó por POST, devuelvo al usuario
				if ($unUsuario->getEmail() == $email) {
					return $unUsuario;
				}
			}

			return false;
		}

		public function traerTodos() {
			// Traigo la data de todos los usuarios de 'usuarios.json'
			$todosJson = file_get_contents($this->archive);

			// Esto me arma un array con todos los usuarios
			$usuariosArray = explode(PHP_EOL, $todosJson);

			// Saco el último elemento que es una línea vacia
			array_pop($usuariosArray);

			// Creo un array vacio, para guardar los usuarios
			$usuarios = [];

			// Recorremos el array y generamos por cada usuario un array del usuario
			foreach ($usuariosArray as $usuario) {
				$usuarioJSON = json_decode($usuario, true);
				$usuario = new Usuario($usuarioJSON["name"], $usuarioJSON["email"], $usuarioJSON["pass"], $usuarioJSON["country"], $usuarioJSON['picture']);
				$usuario->setId($usuarioJSON['id']);
				$usuarios[] = $usuario;
			}

			return $usuarios;
		}

		public function guardarUsuario(Usuario $usuario, DB $db){
			$user = $usuario->crearUsuario($db);

			$usuarioJSON = json_encode($user);

			// Inserta el objeto JSON en nuestro archivo de usuarios
			file_put_contents($this->archive, $usuarioJSON . PHP_EOL, FILE_APPEND);

			// Devuelvo al usuario para poder auto loguearlo después del registro
			return $usuario;
		}

		public function traerUltimoID(){
			// me traigo todos los usuarios
			$usuarios = $this->traerTodos();

			if (count($usuarios) == 0) {
				return 1;
			}

			// En caso de que haya usuarios agarro el ultimo usuario
			$elUltimo = array_pop($usuarios);

			// Pregunto por le ID de ese ultimo usuario
			$id = $elUltimo->getId();

			// A ese ID le sumo 1, para asignarle el nuevo ID al usuario que se esta registrando
			return $id + 1;
		}

		public function guardarImagen($laImagen, $email){
			$errores = [];

			if ($_FILES[$laImagen]['error'] == UPLOAD_ERR_OK) {
				// Capturo el nombre de la imagen, para obtener la extensión
				$nombreArchivo = $_FILES[$laImagen]['name'];
				// Obtengo la extensión de la imagen
				$ext = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
				// Capturo el archivo temporal
				$archivoFisico = $_FILES[$laImagen]['tmp_name'];

				// Pregunto si la extensión es la deseada
				if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png') {
					// Armo la ruta donde queda gurdada la imagen
					$dondeEstoyParado = dirname(__FILE__);

					$rutaFinalConNombre = $dondeEstoyParado . '/../img/' . $email . '.' . $ext;

					// Subo la imagen definitivamente
					move_uploaded_file($archivoFisico, $rutaFinalConNombre);
				} else {
					$errores['imagen'] = 'El formato tiene que ser JPG, JPEG, PNG o GIF';
				}
			} else {
				// Genero error si no se puede subir
				$errores['imagen'] = 'No subiste nada';
			}

			return $errores;
		}

		public function traerPorId($id){
			// me traigo todos los usuarios
			$todos = $this->traerTodos();

			// Recorro el array de todos los usuarios
			foreach ($todos as $usuario) {
				if ($id == $usuario->getId()) {
					return $usuario;
				}
			}

			return false;
		}
	}
