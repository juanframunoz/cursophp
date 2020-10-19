<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Función con parámetros y return</title>
</head>
<body>
	<?php

	function calcular($numero1, $numero2){
     $sumar= $numero1+$numero2;

     //echo $sumar; #esto daría el resultado directamene cuando llamamos a la funcion
     return $sumar; #esto almacenaría el resulado que posteriormente, asignaríamos la funcion a una variable y luego imprimirlo cuando queramo o trabajar con el.
 	}

     calcular(11,22);
     print '<br>';
     $resultado= calcular(5,2);
     echo $resultado


    /* $num1=1;
     $num2=2;

     calcular($num1,$num2);
     */
	
	?>

	
</body>
</html>