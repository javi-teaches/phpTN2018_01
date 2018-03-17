<header>
	<h1><?= isset($title) ? $title : 'Sin nombre';?> de la web</h1>
	<nav>
		<?= (!isset($sinLinkContacto)) ? "<a href=\"#\">Login</a>" : "";?>
		<a href="#">Register</a>
		<ul>
			<?php
				$enlaces = [
					'Home' => 'index.php',
					'Contacto' => 'contacto.php',
					'Quienes Somos' => 'quienes.php',
					'Servicios' => 'servicios.php',
				];
				foreach ($enlaces as $key => $value) {
					echo "<li> <a href=\"$value\"> $key </a></li>";
				}
			?>
		</ul>
	</nav>
</header>
