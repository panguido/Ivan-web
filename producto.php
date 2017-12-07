<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de usuario</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/producto.css">
   
</head>
<body>

 
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <form role="form" method="POST" action="php/producto.php">

                    <legend class="text-center">Registro Producto</legend>

                    <fieldset>
                        <legend> Detalles del Producto</legend>

                        <div class="form-group col-md-6">
                            <label for="nombre_producto">Nombre_producto</label>
                            <input type="text" class="form-control" name="nombre_producto" id="nombre_producto" placeholder="producto">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="provedor">Provedor</label>
                            <input type="text" class="form-control" name="provedor" id="provedor" placeholder="provedor">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Familia</label>
                            <input type="text" class="form-control" name="familia" id="familia" placeholder="familia">
                        </div>

                            <div class="form-group col-md-6">
                            <label for="">Costo_producto</label>
                            <input type="number" class="form-control" name="costo_producto" id="costo_producto" placeholder="costo">
                        </div>


                    </fieldset>

                    <fieldset>
                   

                        <div class="form-group col-md-6">
                            <label for="residencia"> Residencia </label>
                            <select class="form-control" name="residencia" id="residencia">
                                <option value="Alajuela ">Aguas Zarcas </option>
                                <option value="Fortuna ">Fortuna </option>
                                <option value="Santa Rosa ">Santa Rosa </option>
                                <option value="Ciudad Quesadad ">Ciudad Quesadad </option>
                            </select>
                        </div>
                    </fieldset>

                   

                    <div class="form-group">
                        <div class="col-md-12">
    <br>                        
                            <button type="submit"  class="btn btn-primary">
                                
                                Ingresado:
                            </button>
<br>
                       <br>
                        </div>
                    </div>

                </form>
            </div>

        </div>

   




  
    <div id="map"></div>
   <?php 
include "footer.php";

?>
    
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/registro.js"></script>
 <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD57dw2vzfLilDKh52ZwSYCv2vQWXicS78&callback=initMap">
    </script>
    </body>
</html>



