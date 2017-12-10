<!DOCTYPE html>
<html>

<head>
    <title>mantenimiento Usuarios</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="css/mantenimiento.css">
</head>

<body>
    <?php
    
$where = "";
        $mensaje = "";
        if (isset($_POST['buscarValor'])) {
            $filtro = $_POST['tipoFiltro'];
            $valor = $_POST['valor'];
            if ($filtro === "Todo" && $valor === "") {
                $where = "ORDER by nombre DESC limit 5";
            } else if ($filtro === "Todo" && $valor === "todo") {
                $where = "";
            } else if ($filtro != "Todo" && $valor != "todo") {
                $where = "where " . $filtro . " like '" . $valor . "%'";
            } else {
                $where = "ORDER by nombre DESC limit 5";
            }
        }
include'php/conexion.php';
$sql="SELECT * FROM `usuario`  $where ";
if(!$query=$con->query($sql)){
 echo("Error description :" .mysqli_error($sql));
  return;
}
?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" method="post">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic"></label>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Buscar..." class="input" id="input-buscar" name="valor" />
                                <select name="tipoFiltro" class="selectpicker" id="search-select">
                                    <option value="Todo">Todo</option>
                                    <option value="nombre">Nombre</option>
                                    <option value="fechal">Fecha</option>
                                    <option value="residencia">Residencia</option>
                                    <option value="email">correo</option>
                                </select>
                                <button name="buscarValor" class="btn btn-default" type="submit">Buscar</button>

                            </div>
                        </div>
                    </form>
                    <div id="div-table">
                        <h4 class="text-center">Usuarios registrados</h4>
                        <div class="table-responsive" id="div-table">
                            <form name="mantenimeintoUsuairo" action="php/registroUsuario.php" method="POST">
                                <table id="mytable" class="table table-bordred table-inverse">
                                    <thead>
                                        <th style="display: none">id</th>
                                       
                                         <th>Nombre</th>
                                      <th>Apellido</th>
                                       <th>Email</th> 
                                      <th>Contasena</th>
                                     <th>Residencia</th> 
                                   
                                        
                                      
                                    </thead>
                                    <tbody>
                                        <?php
                                        $contador = 0;
                                        while ($row = $query->fetch_array()) {
                                            $contador++;
                                            $idT = $row['id'];
                                            $nombreT = $row['nombre'];
                                            $apellido = $row['apellido'];  
                                            $emailT = $row['email'];
                                           $contrasena = $row['contrasena'];
                                            $residencia = $row['residencia'];
                                                  
                                            
                                          
                                          
                                            
                                            ?>
                                            <tr>
                                                <td style="display: none">
                                                    <?php echo $idT; ?>
                                                </td>
                                                <td>
                                                    <?php echo $nombreT; ?>
                                                </td>
                                                   <td>
                                                    <?php echo $apellido; ?>
                                                </td>
                                                   <td>
                                                    <?php echo $emailT; ?>
                                                </td>
                                                 <td>
                                                    <?php echo $contrasena; ?>
                                                </td>
                                                <td>
                                                    <?php echo $residencia; ?>
                                                </td>
                                              
                                                
                                                <td>
                                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" name="editar" type="button" data-target="#edit" onclick="editarRutina(this.value)" value="<?php echo $idT; ?>"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                                </td>
                                             
                                              <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                                </tr>
                                            <?php
                                        }
                                        if ($contador === 0) {
                                            $mensaje = "<h1 class = 'text-center' style='color:red;'>No se encontraron registros</h1>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
include "footer.php";

?>


        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mantenimiento.js"></script>
</body>

</html>
