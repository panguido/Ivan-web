<?php
var_dump ($_POST);
if(isset($_POST)){
	if(isset($_POST["email"]) &&isset($_POST["contrasena"])){
		if($_POST["email"]!=""&&$_POST["contrasena"]!=""){
			include "conexion.php";
			
			$user_id=null;
			$sql1= "select * from usuario where email = \"$_POST[email]\" or contrasena=\"$_POST[contrasena]\"";
			$query = $con->query($sql1);
            $contador = 0;
			while ($r=$query->fetch_array()) {
				$contador++;
			}
			if($contador === 0){
				print "<script>alert(\"Acceso invalido.\");window.location='../login.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../index.php';</script>";				
			}
		}
	}
}



?>