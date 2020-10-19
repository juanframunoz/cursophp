<?php

$conectar= mysqli_connect('localhost', 'root','','php'); // servidor, usuario, contraseña y base de datos

	if(!$conectar){
		die('ha habido un fallo en la conexion de la base de datos');
	}
	mysqli_set_charset($conectar,"uft8"); //arreglar que los datos de la BBDD funcionen caracteres especiales como acentos.
?>