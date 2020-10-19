<?php

require_once('scripts/022db.php'); //hago llamada al archivo de conexion a la bbdd
require_once('scripts/022funciones.php'); // hago llamada al archivo de las funciones donde esta la funcion insertar


?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Listar</title>
</head>
<body>

	<h2> Listar Usuarios </h2>

	<br>
	<a href="022index.php">Inicio</a>
	<a href="022_2insertar.php">Crear</a>
	<a href="022_3listar.php">Listar</a>
	<a href="022_4editar.php">Editar</a>
	<a href="022_5eliminar.php">Eliminar</a>
	<br><hr>



<?php listar(); ?>
	
</body>
</html>