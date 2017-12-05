<?php

    
if(isset($_POST)){
	if(isset($_POST["provedor"]) && isset($_POST["nombre_producto"]) &&isset($_POST["costo_producto"]) &&isset($_POST["familia"]){
	
			include "conexion.php";
			
			$found=false;
	$sql= "INSERT INTO `producto`( `provedor`, `nombre_producto`, `costo_producto`, `familia`) VALUES(\"$_POST[provedor]\",\"$_POST[nombre_producto]\",\"$_POST[costo_producto]\",\"$_POST[familia]\")";
			
		
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