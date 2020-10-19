<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Funciones</title>
</head>
<body>


	<?php 
#creamos el include en el mismo html
		function calcular1(){
			echo 10 + 20;
		}

		function calcular2(){
			echo 2 + 5;
		}

		#unir dos funciones en una
		function inicio(){
			calcular1();
			echo '<br>';
			calcular2();
		}



		// calcular1();
		calcular2();
		echo '<br>';
		inicio();

	?>
	
</body>
</html>