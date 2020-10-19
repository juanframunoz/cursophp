<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Flujo de ejecución</title>
</head>
<body>
	<?php
 # creamos la función en el mismo html
	function saludo(){
		$nombre="Juanfra";
		echo "saludando a $nombre desde la función<br>";
	}
	saludo();
	$nombre="Juanfra";
	echo $nombre." saludo2";
	echo '<br>';
	# desde este código vamos a crear la funcion en otro archivo medinte includes(0funciones.php)

	include '0funciones.php'; # mediante include si no existe el archivo dará un error y se ejecutará lo que hay debajo
	echo 'llamado desde include';
	saludos();
	echo '<br>';

	/*
	echo 'llamado desde require'; 
	require '0funciones.php'; #mediante este metodo, el programa no se seguira ejecutando
	saludos();
	*/
	echo 'fin';
	*/
	?>
	</body>
</html>