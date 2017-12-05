<?php
if(isset($_POST)){
	if(isset($_POST["email"]) &&isset($_POST["contrasena"])){
		if($_POST["email"]!="" &&$_POST["contrasena"]!=""){
			include "conexion.php";
			$user_id=null;
			$sql1= "select * from usuario where email = \"$_POST[email]\" and contrasena=\"$_POST[contrasena]\"";
			$query = $con->query($sql1);
            $contador = 0; 
            if(!isset($_SESSION)){  
               session_start();
            }
			while ($r=$query->fetch_array()) {
                
				$contador++;
         
                $_SESSION["nombre"]=$r["nombre"];
                 $_SESSION["apellido"]=$r["apellido"];
                 $_SESSION["rol"]=$r["rol"];
                
			}
			if($contador === 0){
				print "<script>alert(\"Acceso invalido.\");window.location='../index.php';</script>";
			}else{
				
				print "<script>window.location='../principal.php';</script>";				
			}        
		}
	}
}



?>