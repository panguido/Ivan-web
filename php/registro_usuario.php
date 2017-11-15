<?php
if(isset($_POST)){
echo "entro";
	if(isset($_POST["username"]) &&isset($_POST["fullname"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])&&isset($_POST["residencia"])){
		if($_POST["username"]!=""&& $_POST["fullname"]!=""&&$_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]&&$_POST["residencia"]!=""){
			include "conexion.php";
			
			$found=false;
	$sql1= "select * from user where username=\"$_POST[username]\" or email=\"$_POST[email]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../registro_usuario.php';</script>";
			}
			$sql = "insert into user(username,fullname,email,password,created_at) value (\"$_POST[username]\",\"$_POST[fullname]\",\"$_POST[email]\",\"$_POST[password]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. Proceda a insertarce\");window.location='../login.php';</script>";
			}
		}
	}
}




?>