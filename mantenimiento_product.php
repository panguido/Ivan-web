<!DOCTYPE html>
<html>

<head>
    <title>mantenimiento Producto</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mantenimiento.css">
</head>

<body>
    <?php
    
$where = "";
        $mensaje = "";
        if (isset($_POST['buscarProduct'])) {
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
$sql="SELECT * FROM `producto`  $where ";
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
                                    <option value="provedor">provedor</option>
                                    <option value="nombre_producto">nombre producto</option>
                                    <option value="residencia">Residencia</option>
                                    <option value="familia">familia</option>
                                </select>
                                <button name="buscarValor" class="btn btn-default" type="submit">Buscar</button>
                         <button class="btn btn-default"><a href="principal.php">Regresar</a></button>
                            </div>
                        </div>
                    </form>
                    <div id="div-table">
                        <h4 class="text-center">Producto registrados</h4>
                        <div class="table-responsive" id="div-table">
                            <form name="mantenimeintoProduct" action="php/producto.php" method="POST">
                                <table id="mytable" class="table table-bordred table-inverse">
                                    <thead>
                                        <th style="display: none">id</th>

                                        <th>provedor</th>
                                        <th>Nombre-producto</th>
                                        <th>Costo-producto</th>
                                        <th>Familia</th>
                                        <th>Residencia</th>



                                    </thead>
                                    <tbody>
                                        <?php
                                        $contador = 0;
                                        while ($row = $query->fetch_array()) {
                                            $contador++;
                                            $idT = $row['id'];
                                              $provedor = $row['provedor'];
                                            $nombre_producto = $row['nombre_producto'];
                                            $costo_product = $row['costo_producto'];  
                                            $familia = $row['familia'];
                                           $residencia = $row['residencia'];
                                    
                                                  
                                            
                                          
                                          
                                            
                                            ?>
                                            <tr>
                                                <td style="display: none">
                                                    <?php echo $idT; ?>
                                                </td>
                                                <td>
                                                    <?php echo $provedor; ?>
                                                </td>
                                                <td>
                                                    <?php echo $nombre_producto; ?>
                                                </td>
                                                <td>
                                                    <?php echo $costo_product; ?>
                                                </td>
                                                <td>
                                                    <?php echo $familia; ?>
                                                </td>
                                                <td>
                                                    <?php echo $residencia; ?>
                                                </td>
                                                
                                               <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" name="editar" type="button" data-target="#squarespaceModal" value="<?php echo $Tid_Producto; ?>"><span class="glyphicon glyphicon-pencil"></span></button></p>
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
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h3 class="modal-title" id="lineModalLabel">Manteniminet Producto</h3>
                    </div>
                    <form action="php/producto.php" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Id</label>
                                <input type="text" class="form-control" name="txtid" id="txtid" readonly>
                            </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Provedor</label>
                                <input type="text" class="form-control" name="txtprovedor" id="txtprovedor">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre-producto</label>
                                <input type="text" class="form-control" name="txtnombre" id="txtnombre_producto">
                            </div>
                           

                            <div class="form-group">
                                <label for="exampleInputEmail1">Costo-producto</label>
                                <input type="text" class="form-control" name="txtcosto_producto" id="txtcosto_producto">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Familia</label>
                                <input style="text-al" type="text" class="form-control" name="txtfamilia"id="txtfamilia" >
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Residecia</label>
                                <input type="text" class="form-control" name="txtresidencia" id="txtresidencia">
                            </div>

                            <input type="submit" class="btn btn-danger btn-xs" name="btnEliminar" value="Eliminar">

                        </div>
                        <div class="modal-footer">
                            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default" data-dismiss="modal" role="button">Cerrar</button>
                                </div>
                                <div class="btn-group" role="group">
                                    <input type="submit" class="btn btn-default btn-hover-green" value="Actualizar" name="btnActualizar" role="button"/>
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
    tbody.onclick = function (e) {
        var todo = "";
        e = e || window.event;
        var target = e.srcElement || e.target;
        while (target && target.nodeName !== "TR") {
            target = target.parentNode;
        }
        if (target) {
            var cells = target.getElementsByTagName("td");
            document.getElementById("txtid").value = cells[0].innerHTML;
            document.getElementById("txtprovedor").value = cells[1].innerHTML;
            document.getElementById("txtnombre_producto").value = cells[2].innerHTML;   
            document.getElementById("txtcosto_producto").value = cells[3].innerHTML;
                document.getElementById("txtfamilia").value = cells[4].innerHTML;   
            document.getElementById("txtresidencia").value = cells[5].innerHTML;
        }
    };
</script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mantenimiento.js"></script>
</body>

</html>
