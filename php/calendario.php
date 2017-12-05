<?php

var_dump ($_POST);
    

	if(isset($_POST["nombre"])  &&isset($_POST["email"])&& isset($_POST["residencia"]) &&isset($_POST["compannero"])&& isset($_POST["fecha_Cita"]) && isset($_POST["hora"])){
	
			include "conexion.php";
			
			$found=false;
	$sql= "INSERT INTO `citas`(`nombre`, `email`, `residencia`, `compannero`, `fecha`, `hora`) VALUES ('$_POST[nombre]','$_POST[email]','$_POST[residencia]','$_POST[compannero]','$_POST[fecha_Cita]','$_POST[hora]')";
			
		
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso de su solicitar de cita\");window.location='../index.php';</script>";
			}else {
                die("Error ".mysqli_error($con));
            }
		
	}





?>