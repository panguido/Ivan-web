  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> barberia Morera</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/calendario.css">  
</head>
<body>

 <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <form role="form" method="POST" action="php/calendario.php">

                    <legend class="text-center">Control de citas</legend>

                    <fieldset>
                        <legend> Detalles de la Cita</legend>

                        <div class="form-group col-md-6">
                            <label for="fecha_Cita">Fecha de la cita:</label>
                            <input type="text" class="form-control" name="fecha_Cita" id="fecha_Cita" placeholder=" fecha_Cita">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="Hora">Hora  y tipo </label>
                            <input type="text" class="form-control" name="Hora" id="Hora" placeholder=" Hora">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="email">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="Compañero">Compañero de su preferencia: </label>
                            <input type="text" class="form-control" name="Compañero" id="Compañero" placeholder="Compañero">
                        </div>
                          
               </fieldset>
                 <fieldset>
                       
                        <legend>Detalles opcionales de informacion..!!</legend>

                        <div class="form-group col-md-6">
                            <label for="residencia"> Residencia </label>
                            <select class="form-control" name="residencia" id="residencia">
                                <option value="Alajuela 1">Aguas Zarcas 1</option>
                                <option value="Fortuna 2">Fortuna 2</option>
                                <option value="Santa Rosa 3">Santa Rosa 3</option>
                                <option value="Ciudad Quesadad 4">Ciudad Quesadad 4</option>
                            </select>
                        </div>
                        
                        
                        
                          <div class="form-group col-md-6">
                                            <label for="Cancelacion">Cancelacion de cita </label>
                            <input type="text" class="form-control" name="Cancelacion" id="Cancelacion" placeholder=" Cancelacion">
                        </div>
                          
                         </fieldset>
             </form>
             
             
         </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
					<script src="js/bootstrap.min.js"> </script>	
					<script src="js/calendario.js"> </script>	
				</body>
				</html>
