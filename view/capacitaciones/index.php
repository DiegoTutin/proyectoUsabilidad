<?php  include '../template/header.php'?>
<?php  include '../../controller/capacitacion/index.php' ?>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-4"><b>Capacitaciones registradas</b></div>
                        <div class="col-6"></div>
                        <div class="col-2"><a href="create.php"><button type="button" class="btn btn-success">Agregar</button></a></div>
                    </div>
                </div>
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Ord</th>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Tiempo</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <?php
                            if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo'<tr>';
                                echo '<th scope="row">'.$row["codigo_capa"].'</th>';
                                echo'<td>'.$row["id_capa"].'</td>';
                                echo'<td>'.$row["nombre_capa"].'</td>';
                                echo'<td>'.$row["tipo_capa"].'</td>';
                                echo'<td>'.$row["tiempo_capa"].'</td>';
                                echo'
                                <td><button><a href="update.php?codigo_capa='.$row["codigo_capa"].'"><i class="fa fa-pen text-success"></i></a></button> 
                                <button><a href="view.php?codigo_capa='.$row["codigo_capa"].'"><i class="fa fa-eye text-primary"></i></a></button>';
                                echo '</tr>';
                            }
                            } else {
                            echo "0 results";
                            }
                        ?>  
                </table>
            </div>
        </div>
    </div>
<?php  include '../template/footer.php'?>