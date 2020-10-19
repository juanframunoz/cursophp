<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Array</title>
</head>
<body>
	<?php
		$datos= array('juanfra','18','muñoz'); #tienes dos formas de escribirlo 
		//$datos= ['juanfra','18','muñoz'];#esta es la segunda forma
		print_r($datos); #imprime todo
		print '<br>';
		echo $datos[0]; #imprime uno solo
	?>
	<pre>
		<?php echo print_r($datos);?>
	</pre>
</body>
</html>