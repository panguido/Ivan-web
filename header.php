<div class="menu">
		<header class="container">
			<div class="navbar navbar-inner">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a id="closepage" menuid="0" class="brand" href="#" followlink="true"><img id="logoimg" height="100px" src="multimedia/Captura.PNG"  alt=""></a>
					</div>
					<div class="collapse navbar-collapse pull-right" id="main-menu">
						<ul class="nav">
						
							<li class="fadeInDown animated d2"><a href="./login.php" menuid="1" followlink="true">Cuenta </a></li>
							<li class="dropdown fadeInDown animated d3">
								<a href="Registro.php" class="trigger right-caret">Registro</a>
							</li>
							<li class="fadeInDown animated d3"><a href="./informacion.php" menuid="11" followlink="true">Sugerencias administrativos </a></li>
							<?php
                            
                         if(!isset($_SESSION)){            
                            session_start();
                            }
                            if($_SESSION['rol']=== "admin"){
	                           ?>                         
							<li class="fadeInDown animated d2"><a href="calendario.php" menuid="1" followlink="true">Citas</a></li>
							<li class="fadeInDown animated d2"><a href="mantenimiento_citas.php" menuid="1" followlink="true">Mantenimiento_citas</a></li>
							<li class="fadeInDown animated d2"><a href="mantimiento_empleado.php" menuid="1" followlink="true">Mantenimiento_empleado</a></li>
							<li class="fadeInDown animated d2"><a href="mantenimiento_usuario.php" menuid="1" followlink="true">Mantenimiento_usuario</a></li>
							<?php }
                            ?>
						</ul>
                    </div>
				</div>
                </div>
        </header>
</div>