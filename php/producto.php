<?php
if(isset($_REQUEST["btnEliminar"])){
include "conexion.php";
 $id=$_POST["txtid"];
     var_dump($id);
    $sql="DELETE FROM `producto` WHERE id=$id";
    if ($con->query($sql)===false){
     die("<script> alert(\"error:".mysqli_error($con)."\")</script>");
}else{
   print"<script>alert(\"Datos eliminados correctamente\");window.location='../mantenimiento_producto.php';</script>";
    
}
}
elseif(isset($_REQUEST["btnActualizar"]))
{
    include "conexion.php";
      $id= trim($_POST["txtid"]);
  
    $nombre=trim($_POST["txtnombre_producto"]);
    $provedor=trim($_POST["txtprovedor"]);
    $costo_producto=trim($_POST["txtcosto_producto"]);
    $familia=trim($_POST["txtfamilia"]);
    $residencia=trim($_POST["txtresidencia"]);
    
    $sql="UPDATE producto SET nombre_producto ='$nombre',provedor ='$provedor',costo_producto ='$costo_producto',familia ='$familia',residencia ='$residencia' WHERE id=$id";
    var_dump($sql);
    if ($con->query($sql)===false){
     die("<script> alert(\"error:".mysqli_error($con)."\")</script>");
}else{
   print"<script>alert(\"Datos actualizados correctamente\");window.location='../mantenimiento_citas.php';</script>";
    
}
}    





	if(isset($_POST["nombre_producto"]) &&(isset($_POST["provedor"]) && isset($_POST["costo_producto"]) &&isset($_POST["familia"]) && isset($_POST['residencia']))){

			include "conexion.php";
			$found=false;
	        $sql= "INSERT INTO `producto`( `nombre_producto`, `provedor`, `costo_producto`, `familia`,`residencia`) VALUES(\"$_POST[nombre_producto]\",\"$_POST[provedor]\",$_POST[costo_producto],\"$_POST[familia]\",\"$_POST[residencia]\")";
			
		
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso\");window.location='../producto.php';</script>";
			}else{
               print "<script>alert(\"ingrese todos los datos\");window.location='../producto.php';</script>";
                
            }		
	}

?>