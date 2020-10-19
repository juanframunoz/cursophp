<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>varialbes locales y globales</title>
</head>
<body>

	<?php


	function saludo(){

		global $nombre; #las variables globales se han de definir dentro de una función
		$nombre='Juan';

		echo 'funcion'.$nombre;
	}

	saludo();

	echo 'fuera '.$nombre;


	?>

	  

	
</body>
</html>