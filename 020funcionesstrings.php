<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>funciones de strings</title>
</head>
<body>
	<?php
	//strlen nos da la longitud de un string
	$cad= 'Juan Francisco';
	echo strlen($cad);
	print'<br>';
	//convierte a mayúsculas
	echo strtoupper($cad);
	print'<br>';
	//convierte todo el string en minúsculas
	echo strtolower($cad);
	print'<br>';
	// La primera palabra que sea en mayúscula
	echo ucfirst($cad);
	print'<br>';

	//buscar strings de php para mas funcionalidades
	?>


</body>
</html>