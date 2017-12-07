  
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
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder=" nombre">
                        </div>
                       
                        <div class="form-group col-md-6">
                            <label for="fecha_Cita">Fecha de la cita:</label>
                            <input type="date" class="form-control" name="fecha_Cita" id="fecha_Cita" placeholder=" fecha_Cita">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="hora">Hora</label>
                            <input type="time" class="form-control" name="hora" id="hora" placeholder=" hora">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="email">
                        </div>

                           <div class="form-group col-md-6">
                            <label for="compannero"> Empleado:</label>
                            <select class="form-control" name="compannero" id="compannero">
                                <option value="Yarol ">Yarol </option>
                                <option value="Alvin ">Alvin </option>
                                <option value="George ">George </option>
                                <option value=" William ">William </option>
                                <option value=" Jordi ">Jordi </option>
                            </select>
                        </div>
                          
               </fieldset>
                 <fieldset>
                       
                        <legend>Detalles opcionales de informacion..!!</legend>

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
                           <button type="submit"  class="btn btn-primary">
                                
                                Confirmado
                            </button>

                        </div>
                    </div>
             </form>
             
             
         </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
					<script src="js/bootstrap.min.js"> </script>	
					<script src="js/calendario.js"> </script>	
				</body>
				</html>
