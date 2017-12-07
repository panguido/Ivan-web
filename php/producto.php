<?php
    
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