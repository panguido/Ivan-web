<?php

var_dump ($_POST);
    

	if(isset($_POST["nombre"])  &&isset($_POST["email"])&& isset($_POST["residencia"]) &&isset($_POST["empleado"])&& isset($_POST["fecha_Cita"]) && isset($_POST["hora"])){
	
			include "conexion.php";
			
			$found=false;
	$sql= "INSERT INTO `citas`(`nombre`, `email`, `residencia`, `empleado`, `fecha`, `hora`) VALUES ('$_POST[nombre]','$_POST[email]','$_POST[residencia]','$_POST[empleado]','$_POST[fecha_Cita]','$_POST[hora]')";

				$query = $con->query($sql);
			if($query!=null){
				$correo=$_POST["email"];
				echo($correo);
				$mesage="Gracias por preferir barberias moreras";
				mail($correo,'Notificacion',$mesage);
				print "<script>alert(\"Registro exitoso de su solicitar de cita\");window.location='../index.php';</script>";
			}else {
                die("Error ".mysqli_error($con));
            }
		
	}





?>