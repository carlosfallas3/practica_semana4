 <?php

 $user = $_POST["usuario"];
 $pass = $_POST["password"];
 $email = $_POST["email"];
 $fecha = $_POST["nacimiento"];
 $oculto = $_POST["oculto"];

if( $oculto != "" ){
 	echo "Se encontrado una amenza! campo oculto";
 }else
 {
	echo "Datos recibidos correctamente!" ;
 }

 ?>