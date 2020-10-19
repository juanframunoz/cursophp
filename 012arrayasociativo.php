<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Array Asociativo	</title>
</head>
<body>
	<?php
	$datos= array('juanfra','18','muñoz');
	$array_asoc= array('nombre'=>'Juanfra','apellidos'=>'Muñoz','edad'=>'48');

	//is_array - comprobar si una variable es un array
	if(is_array($array_asoc)){
		print 'es un array';
	}else{
		print 'no es array';
	}
	?>

	<pre>
		<?php 
		print_r($datos); 

		print_r($array_asoc);
		?>
	<pre>
	
</body>
</html>