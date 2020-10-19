<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Operadores logícos</title>
	</head>
	<body>

		<p>
			operadores lógicos
			==  igual que
			=== identico a 
			> mayor que
			< menor que
			>= mayor o igual
			<= menor o igual
			!= diferente que

			operadores lógicos
			
			operadores de comparación
			and &&
			or ||
			not !
		</p>


		<?php
		$variable1=8;
		$variable2='8';
		$variable3='juanfra';

		if ($variable1==$variable2) {
			echo 'son iguales';
		}else{
			echo 'no son iguales';
		}
			
		echo '<br>';

		if ($variable1===$variable2) {
			echo 'son idénticos';
		}else{
			echo 'no son idénticos';
		}

		echo '<br>';

		if ($variable1!=$variable3) {
			echo 'son distintos';
		}else{
			echo 'no son distintos';
		}



		?>

		
	</body>
	</html>	