<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de usuario</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/registro.css">
   
</head>
<body>

 
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <form role="form" method="POST" action="php/registro_usuario.php">

                    <legend class="text-center">Registro</legend>

                    <fieldset>
                        <legend> Detalles de la Cuenta</legend>

                        <div class="form-group col-md-6">
                            <label for="first_name">First name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="last_name">Last name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="email">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
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

                        <div class="form-group col-md-12">
                            <label for="found_site">¿Como se entero o informo sobre nosotros..?</label>
                            <select class="form-control" name="" id="found_site">
                                <option>Company</option>
                                <option>Friend</option>
                                <option>Colleague</option>
                                <option>Advertisement</option>
                                <option>Google Search</option>
                                <option>Online Article</option>
                                <option value="other" >Other</option>
                            </select>
                        </div>

                        <div class="form-group col-md-12 hidden">
                            <label for="specify">porfavor informenos</label>
                            <textarea class="form-control" id="specify" name=""></textarea>
                        </div>

                    </fieldset>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="" id="">s
                                    I accept the <a href="#">terms and conditions</a>.
                                </label>
                            </div>
                        </div>
                    </div>

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

</html>



