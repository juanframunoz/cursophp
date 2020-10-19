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
	$password=$_POST['password'];
	
		#echo $password==1234 ? 'eres menor de edad no puedes acceder':'eres mayor de edad y puedes acceder'; #la primera es si es verdad, la segunda si es mentira

		echo $nombre=="Juanfra" && $password==1234 ? 'puedes acceder':'no puedes acceder'; 
	}

echo " ".$nombre." ".$password;


?>
