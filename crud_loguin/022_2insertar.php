<?php
require_once('scripts/022db.php'); //hago llamada al archivo de conexion a la bbdd
require_once('scripts/022funciones.php'); // hago llamada al archivo de las funciones donde esta la funcion insertar

if (isset($_POST['submit'])){

	insertar();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD</title>
</head>
<body>
	
	<h2> Insertar usuarios</h2>

	<br>
	<a href="022index.php">Inicio</a>
	<a href="022_2insertar.php">Crear</a>
	<a href="022_3listar.php">Listar</a>
	<a href="022_4editar.php">Editar</a>
	<a href="022_5eliminar.php">Eliminar</a>
	<br><hr>


	<form action="" method='POST'>
		<input type='text' name='usuario' placeholder='usuario'>
		<br>
		<input type='text' name='password' placeholder='password'>
		<br>
		<input type='submit' name='submit' value='enviar'>
	</form>


	
</body>
</html>