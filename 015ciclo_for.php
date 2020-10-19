<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclo For</title>
</head>
<body>
	<?php
	//le decimos que la variables contador es 0,. que si es menor de 20 sea true, y que sume un valorcada vez.
	/* for($contador=0; $contador<20; $contador++){
		echo $contador.'<br>';
	}
	*/
   # creamos un array dias de la semana, con 7 valores, creamos un bucle for y una variable $i, a la que asignamos valor 0. luego le decimos, que si $i es menor que el número de valores que contiene el array $semana, sigue, posteriormente le sumamos uno a $i.
	$semana = array('lunes','martes','miércoles','jueves','viernes','sábado','domingo' );

	for($i=0; $i<count($semana);$i++){
		echo $semana[$i].'<br>';
	}
	?>
	
</body>
</html>