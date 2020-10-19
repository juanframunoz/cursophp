<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>for each</title>
</head>
<body>
	<?php

	$datos=array('nombre'=>'Juanfra','apellidos'=>'Muñoz','teléfono'=>'949491346');

	foreach($datos as $nom=>$valor){
		echo "el dato del array es es $nom y el valor asignado es $valor<br>";
	}

	?>
	
</body>
</html>