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
$sql="SELECT * FROM `citas`  $where ";
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
                                 <button class="btn btn-default"><a href="principal.php">Regresar</a></button>
                            </div>
                        </div>
                    </form>
                    <div id="div-table">
                        <h4 class="text-center">Citas registradas
                            <h4>
                                <div class="table-responsive" id="div-table">
                                    <form name="mantenimeintoUsuairo" action="php/registroUsuario.php" method="POST">
                                        <table id="mytable" class="table table-bordred table-inverse">
                                            <thead>
                                                <th style="display: none">id</th>

                                                <th>Nombre</th>
                                                <th>Email</th>
                                                <th>Residencia</th>
                                                <th>Compañero</th>
                                                <th>Fecha</th>

                                            </thead>
                                            <tbody>
                                                <?php
                                        $contador = 0;
                                        while ($row = $query->fetch_array()) {
                                            $contador++;
                                            $idT = $row['id'];
                                            $nombreT = $row['nombre'];
                                              $emailT = $row['email'];
                                           $residencia = $row['residencia'];
                                                  $empleado = $row['empleado'];
                                            $fecha = $row['fecha'];
                                          
                                          
                                            
                                            ?>
                                                    <tr>
                                                        <td style="display: none">
                                                            <?php echo $idT; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $nombreT; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $emailT; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $residencia; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $empleado; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $fecha; ?>
                                                        </td>
                                                        <td>
                                                            <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" name="editar" type="button" data-target="#squarespaceModal" value="<?php echo $Tid_Usuario; ?>"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                                        </td>
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
                            </h4>
                        </h4>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h3 class="modal-title" id="lineModalLabel">Mantenimiento Citas</h3>
                    </div>
                    <form action="php/registro_citas.php" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Id</label>
                                <input type="text" id="txtid" name="txtid" class="form-control" style="align-content:center">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" id="txtnombre"  name="txtnombre" class="form-control" style="align-content:center">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" name="txtemail" id="txtemail" style="align-content:center">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Residecia</label>
                                <input type="text" class="form-control" name="txtresidencia" id="txtresidencia" style="align-content:center">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Empleado</label>
                                <input type="text" class="form-control" name="txtempleado" id="txtempleado">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Fecha</label>
                                <input type="text" class="form-control" name="txtfecha" id="txtfecha">
                            </div>

                            <input type="submit" class="btn btn-danger btn-xs" name="btnEliminar" value="Eliminar">

                        </div>
                        <div class="modal-footer">
                            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default" data-dismiss="modal" role="button">Cerrar</button>
                                </div>
                                <div class="btn-group" role="group">
                                    <input type="submit" class="btn btn-default btn-hover-green" value="Actualizar" name="btnActualizar" role="button" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php 
include "footer.php";

?>

        <script>
            var table = document.getElementsByTagName("table")[0];
            var tbody = table.getElementsByTagName("tbody")[0];
            tbody.onclick = function(e) {
                var todo = "";
                e = e || window.event;
                var target = e.srcElement || e.target;
                while (target && target.nodeName !== "TR") {
                    target = target.parentNode;
                }
                if (target) {
                    var cells = target.getElementsByTagName("td");
                    document.getElementById("txtid").value = cells[0].innerHTML;
                    document.getElementById("txtnombre").value = cells[1].innerHTML;
                    document.getElementById("txtemail").value = cells[2].innerHTML;
                    document.getElementById("txtresidencia").value = cells[3].innerHTML;
                    document.getElementById("txtempleado").value = cells[4].innerHTML;
                    document.getElementById("txtfecha").value = cells[5].innerHTML;
                }
            };

        </script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mantenimiento.js"></script>
</body>
</html>
<style>
    .center {
        margin-top:100px;   
    }

    .modal-header {
        padding-bottom: 5px;
    }

    .modal-footer {
        padding: 0;
    }

    .modal-footer .btn-group input button{
        height:30px;
        border-top-left-radius : 0;
        border-top-right-radius : 0;
        border: none;
        border-right: 1px solid #ddd;
    }

    .modal-footer .btn-group:last-child > button {
        border-right: 0;
    }
</style>
