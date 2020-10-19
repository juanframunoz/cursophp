<?php

// FUNCION LISTAR


function listar(){

	global $conectar;

	$sql="select * from usuarios"; // le decimos que se seleccione todo desde la tabla usuarios

	$resultado= mysqli_query($conectar,$sql);

	if(!$resultado){
		die('fallo de la ejecución con la base de datos'.mysqli_error($conectar));
	}else{
		echo'se muestra el listado';
	}

	//$fila=mysqli_fetch_row($resultado); //le decimos que me muestre el resultado del primer registro
	/* ?>
	<pre>
	<?php
	while($fila=mysqli_fetch_row($resultado)){  //mysqli_fetch_row nos da numero 
		print_r($fila);
	?>
	<pre>
	<?php
	
	?>
	<pre>
	<?php
	while($fila=mysqli_fetch_assoc($resultado)){  //mysqli_fetch_assoc nos da el campo al que pertenece 
		print_r($fila);
	?>
	<pre>
	<?php
	}*/
	while($fila=mysqli_fetch_assoc($resultado)){  //mysqli_fetch_assoc nos da el campo al que pertenece 
		echo '<br>';
		echo $fila['usuario'];
		echo '<br>';
		echo $fila['password'];
		echo '<br><br>';
	}

}

// FUNCION INSERTAR

function insertar(){

	global $conectar;

	$usuario=$_POST['usuario'];
	$password=$_POST['password'];

	if (empty($usuario) || empty($password)){
		die('uno o más campos obligatorios están vacíos');
	}


	//insertar un registro en la BBDD

	$sql = "insert into usuarios(id_usuario, usuario, password) values (null,'$usuario','$password')";

	$resultado=mysqli_query($conectar,$sql);

	if(!$resultado){
		die('fallo de la ejecución con la base de datos'.mysqli_error($conectar));
	}else{
		if(mysqli_affected_rows($conectar)==0){
			echo 'no se puede insertar';
		}else{
			echo 'se ha insertado '.mysqli_affected_rows($conectar).' registros';

		}
	}
}


//FUNCION LISTAR PARA EDITAR

function listar_id_usuarios(){
	
	global $conectar;

	$sql='select id_usuario from usuarios';

	$resultado= mysqli_query($conectar,$sql);

	if(!$resultado){
		die('fallo de la ejecución con la base de datos'.mysqli_error($conectar));
	}

	
		while($fila=mysqli_fetch_assoc($resultado)){

			$id= $fila["id_usuario"];

			echo "<option value=".$id.">".$id."</option>";
		}
}


//FUNCIÓN EDITAR

function editar_usuario(){

	global $conectar;

	$usuario=$_POST['usuario'];
	$password=$_POST['password'];
	$id=$_POST['id_usuario'];

	if (empty($usuario) && empty($password)){
		die('los campos están vacíos');
	}

	$sql="update usuarios set
	usuario='$usuario',
	password='$password'
	where id_usuario=$id";

	$resultado= mysqli_query($conectar,$sql);

	if(!$resultado){
		die('fallo de la ejecución con la base de datos'.mysqli_error($conectar));
	}else{
		if(mysqli_affected_rows($conectar)==0){
			echo 'no se puede editar';
		}else{
			echo 'se ha editado '.mysqli_affected_rows($conectar).' registros';

		}
	}


}
?>

<?php 

//FUNCION ELIMINAR

function eliminar_usuario($id_usuario){

	global $conectar;

	$id=$_POST['id_usuario'];

	$sql="delete from usuarios where id_usuario=$id";

	$resultado= mysqli_query($conectar,$sql);

	if(!$resultado){
		die('fallo de la ejecución con la base de datos'.mysqli_error($conectar));
	}else{
		if(mysqli_affected_rows($conectar)==0){
			echo 'no se puede eliminar';
		}else{
			echo 'se ha eliminado '.mysqli_affected_rows($conectar).' registros';

		}
	}

}


?>