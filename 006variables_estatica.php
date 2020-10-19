<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	function incrementa(){
		static $contador=0; #si static no conservaria el valor (por lo que siempre daria 1 cada vez que llamáramos a la función)
		$contador++;
		echo $contador.'<br>';
	}

	incrementa();
	incrementa();
	incrementa();
	incrementa();
	incrementa();


	?>
	
</body>
</html>