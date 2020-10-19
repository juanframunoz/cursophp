<?php
require_once('scripts/022db.php'); //hago llamada al archivo de conexion a la bbdd
require_once('scripts/022funciones.php'); // hago llamada al archivo de las funciones donde esta la funcion insertar

if (isset($_POST['submit'])){

	$usuario=$_POST["usuario"];
	$password=$_POST["password"];

	if ($usuario && $password){
		login();
	}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
</head>
<body>
<?php 
	if(isset($_GET["m"])){

		switch($_GET["m"]){

			case "1":
			echo "los datos no se encuentran en la base de datos";
			break;
		}
	}
?>

<h2> Formulario de contacto </h2>

	<form action="" method='POST'>
		<input type='text' name='usuario' placeholder='usuario'>
		<br>
		<input type='text' name='password' placeholder='password'>
		<br>
		<input type='submit' name='submit' value='enviar'>
	</form>


	
</body>
</html>