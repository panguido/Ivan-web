<?php

if(isset($_REQUEST["btnEliminar"])){
include "conexion.php";
 $id=$_POST["txtid"];
    
    $sql="DELETE FROM `usuario` WHERE id=$id";
    if ($con->query($sql)===false){
     die("<script> alert(\"error:".mysqli_error($con)."\")</script>");
}else{
   print"<script>alert(\"Datos eliminados correctamente\");window.location='../mantenimiento_usuario.php';</script>";
    
}
}
elseif(isset($_REQUEST["btnActualizar"]))
{
    include "conexion.php";
    $id=$_POST["txtid"];
    $nombre=$_POST{"txtnombre"};
    $apellido=$_POST{"txtapellido"};
    $email=$_POST{"txtemail"};
    $contrasena=$_POST{"txtcontrasena"};
    $residencia=$_POST{"txtresidencia"};
    
    
    $sql="UPDATE 'usuario' SET `nombre`='$nombre',`apellido`='$apellido',`email`='$email',`contrasena`='$contrasena',`residencia`='$residencia' WHERE id= $id";
    if ($con->query($sql)===false){
     die("<script> alert(\"error:".mysqli_error($con)."\")</script>");
}else{
   print"<script>alert(\"Datos actualizados correctamente\");window.location='../mantenimiento_usuario.php';</script>";
    
}
}


    
if(isset($_POST)){
	if(isset($_POST["first_name"]) && isset($_POST["last_name"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])&&isset($_POST["residencia"])&&isset($_POST["rol"])){
	
			include "conexion.php";
			
			$found=false;
	$sql= "INSERT INTO `usuario`( `nombre`, `apellido`, `email`, `contrasena`, `residencia`, `rol`) VALUES(\"$_POST[first_name]\",\"$_POST[last_name]\",\"$_POST[email]\",\"$_POST[password]\",\"$_POST[residencia]\",\"$_POST[rol]\")";
			
		
			$query = $con->query($sql);
        var_dump($query);
			if($query!=null){
				print "<script>alert(\"Registro exitoso\");window.location='../index.php';</script>";
			}else{
                print "<script>alert(\"ingrese todos los datos\");window.location='../registro.php';</script>";
                
            }
		
	}
}

?>
