<?php

	class Usuario {
		private $id;
		private $name;
		private $email;
		private $pass;
		private $country;
		private $picture;

		public function __construct ($name, $email, $pass, $country, $picture) {
			$this->name = $name;
			$this->email = $email;
			$this->pass = $pass;
			$this->country = $country;
			$this->picture = $picture;
		}

		public function crearUsuario(DB $db) {
			return [
				'id' => $db->traerUltimoID(),
				'name' => $this->name,
				'email' => $this->email,
				'pass' => $this->setPassword($this->pass),
				'country' => $this->country,
				'picture' => $this->picture
			];

		   // return $usuario;
		}

		public function setname($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}

		public function getId() {
			return $this->id;
		}

		public function setId($id) {
			$this->id = $id;
		}

		public function getEmail() {
			return $this->email;
		}

		public function setEmail($email) {
			$this->email = $email;
		}

		public function getPassword() {
			return $this->pass;
		}

		public function setPassword($pass) {
			return password_hash($pass, PASSWORD_DEFAULT);
		}

		public function getCountry() {
			return $this->country;
		}

		public function setCountry($country) {
			$this->country = country;
		}

		public function getPicture() {
			return $this->picture;
		}
	}
