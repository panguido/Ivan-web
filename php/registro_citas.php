<?php

if(isset($_REQUEST["btnEliminar"])){
include "conexion.php";
 $id=$_POST["txtid"];
     var_dump($id);
    $sql="DELETE FROM `citas` WHERE id=$id";
    if ($con->query($sql)===false){
     die("<script> alert(\"error:".mysqli_error($con)."\")</script>");
}else{
   print"<script>alert(\"Datos eliminados correctamente\");window.location='../mantenimiento_citas.php';</script>";
    
}
}
elseif(isset($_REQUEST["btnActualizar"]))
{
    include "conexion.php";
      $id= trim($_POST["txtid"]);
  
    $nombre=trim($_POST["txtnombre"]);
    $email=trim($_POST["txtemail"]);
    $residencia=trim($_POST["txtresidencia"]);
    $empleado=trim($_POST["txtempleado"]);
    $fecha=trim($_POST["txtfecha"]);
    
    $sql="UPDATE citas SET nombre ='$nombre',email ='$email',residencia ='$residencia',empleado ='$empleado',fecha ='$fecha' WHERE id=$id";
    var_dump($sql);
    if ($con->query($sql)===false){
     die("<script> alert(\"error:".mysqli_error($con)."\")</script>");
}else{
   print"<script>alert(\"Datos actualizados correctamente\");window.location='../mantenimiento_citas.php';</script>";
    
}
}



    
if(isset($_POST)){
	if(isset($_POST["first_name"]) && isset($_POST["email"]) &&isset($_POST["residencia"]) &&isset($_POST["empleado"])&&isset($_POST["fecha"])){
	
			include "conexion.php";
			
			$found=false;
	$sql= "INSERT INTO `citas`(`id`, `nombre`, `email`, `residencia`, `empleado`, `fecha`) VALUES(\"$_POST[first_name]\",\"$_POST[email]\",\"$_POST[residencia]\",\"$_POST[empleado]\,\"$_POST[fecha]\")";
			$query = $con->query($sql);
        var_dump($query);
$correo=$_POST["email"];
$mesage="bienvenido ala Familia Morera";

mail($correo,'ingreso citas','la cita se realizo correctamente',$mesage);

        
			if($query!=null){
				print "<script>alert(\"Registro exitoso\");window.location='../index.php';</script>";
			}else{
                print "<script>alert(\"ingrese todos los datos\");window.location='../registro.php';</script>";
                
            }
		
	}
}

?>
