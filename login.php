<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> barberia Morera</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/registro.css">


	<link rel="stylesheet" href="multimedia/registro.php"> 
</head>
<body>

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Bienvenido a su Barberia..!  <small>es gratuita </small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form"  method="POST" action="php/login.php">
			    			

			    			<div class="form-group">
			    				<input type="text" name="email" id="email" class="form-control input-sm" placeholder="Email...">
			    			</div>
			    			<div class="form-group">
			    				<input type="password" name="contrasena" id="contrasena" class="form-control input-sm" placeholder="contrasena...">
			    			</div>		    			   
         							<input type="submit" value=" Ingresar.. " class="btn btn-info btn-block">
			    		<br>
                       	<div class="form-group">
                        <input type="reset">
                         <input type="submit">
                         		</div>
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>	
</body>
</html>