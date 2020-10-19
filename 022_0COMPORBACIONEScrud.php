<?php function editar_usuario($id_usuario){
           
          global $conectar;
           
            $usuario=$_POST["usuario"];
            $password=$_POST["password"];
            $id=$_POST["id_usuario"];
        
          if(empty($usuario) and empty($password)){
             
              die("los campos estan vacios");
              
          }
           
           $sql="update usuarios set
           
            usuario='$usuario',
            password='$password'
            where 
            id_usuario=$id
           
           ";


           // METODOS PARA COMPROBAR QUE ES LO QUE ESTÁ SALIENDO Y PIDIENDO A LA BBDD HAN DE IR DEBAJO DE LA CONSULTA

           
           //echo $sql; exit(); //LO QUE APARECE AQUI, PONERLO EN CONSULTA EN PHPMYADMIN Y DEBERÁ SALIRTE LO QUE PIDES
                                             
           //print_r($_POST); exit(); LO QUE PONE AQUI ES LO QUE HA RECOGIDO DE LA BBDD

            
           $resultado= mysqli_query($conectar,$sql);
           
           if(!$resultado){ 
                
                die("fallo de la ejecucion".mysqli_error($conectar));
            
            } else {
                 
                  if(mysqli_affected_rows($conectar)==0){
                       
                      echo "no se puede editar";
                  
                  } else {
                      
                      echo "se ha editado ".mysqli_affected_rows($conectar)." registros ";
                  }
            }
           
    }

    ?>