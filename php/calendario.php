<?php

    
if(isset($_POST)){
	if(isset($_POST["fecha_Cita"]) && isset($_POST["Hora"]) &&isset($_POST["email"]) &&isset($_POST["Compañero"]) &&isset($_POST["residencia"])){
	
			include "conexion.php";
			
			$found=false;
	$sql= "INSERT INTO `usuario`( `fecha_Cita`, `Hora`, `email`, `Compannero`, `residencia`) VALUES(\"$_POST[fecha_Cita]\",\"$_POST[Hora]\",\"$_POST[email]\",\"$_POST[Compannero]\",\"$_POST[residencia]\")";
			
		
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. Proceda a solicitar cita\");window.location='../calendario.php';</script>";
			}
		
	}
}




?>