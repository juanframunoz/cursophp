<style>
.colorverde{
	color: green;
}
.colorrojo{
	color: red;
}
</style>
	<?php

if(isset($_POST['enviar'])){

	$nombre=$_POST['nombre'];
	$edad=$_POST['edad'];


	if($nombre=="Juanfra" and $edad==48){
		echo '<p class="colorverde">puede acceder al sistema</p>';
	}else{
		echo '<p class="colorrojo">no puede acceder al sistema</p>';
	}
}

echo " ".$nombre." ".$edad;

?>
