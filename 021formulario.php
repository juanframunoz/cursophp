<?php
if(isset($_POST["submit"])){

	$array=array('Juanfra', 'Juan Francisco', 'Francis');
	$nombre=$_POST['nombre'];
	$password=$_POST['password'];

	/*if(strlen($nombre)>25){
		echo 'accede al sistema';
	}else{
		echo 'no puedes acceder al sistema';
	} */
		print '<br>';
	if(in_array($nombre,$array) && ($password=="juan")){ #la exclamación es que si no es verdad 
		echo 'acceda';
	}else{
		echo 'no acceda';
	}

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>
	<form action="" method='POST'>
		<input type='text' name='nombre' placeholder='usuario'>
		<br>
		<input type='text' name='password' placeholder='password'>
		<br>
		<input type='submit' name='submit' value='submit'>
	</form>
</body>
</html>