<?php

    
if(isset($_POST)){
	if(isset($_POST["first_name"]) && isset($_POST["last_name"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])&&isset($_POST["residencia"])){
	
			include "conexion.php";
			
			$found=false;
	$sql= "INSERT INTO `usuario`( `nombre`, `apellido`, `email`, `contrasena`, `residencia`) VALUES(\"$_POST[first_name]\",\"$_POST[last_name]\",\"$_POST[email]\",\"$_POST[password]\",\"$_POST[residencia]\")";
			
		
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. Proceda a insertarce\");window.location='../login.php';</script>";
			}
		
	}
}




?>