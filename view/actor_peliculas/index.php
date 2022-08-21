<?php  include '../template/header.php'?>
<?php  include '../../controller/actor_pelicula/index.php'?>
<div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col"><b>Actores-Películas Registrados</b></div>
                        <div class="col"></div>
                        <div class="col"><a href="create.php"><button type="button" class="btn btn-success">Agregar</button></a></div>
                    </div>
                </div>
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Ord</th>
                            <th scope="col">Actor ID</th>
                            <th scope="col">Película ID</th>
                            <th scope="col">Papel Actor</th>
                            <th scope="col" colspan="3" class="text-aling">Opciones</th>
                        </tr>
                    </thead>
                    <?php
                            if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo'<tr>';
                                echo '<th scope="row">'.$row["apl_id"].'</th>';
                                echo'<td>'.$row["act_nombre"].'</td>';
                                echo'<td>'.$row["pel_nombre"].'</td>';
                                echo'<td>'.$row["apl_papel"].'</td>';
                                echo'
                                <td><button><a href="update.php?apl_id='.$row["apl_id"].'"><i class="fa fa-pen text-success"></i></a></button> 
                                <button><a href="view.php?apl_id='.$row["apl_id"].'"><i class="fa fa-eye text-primary"></i></a></button>
                                <button><a href="delete.php?apl_id='.$row["apl_id"].'"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></button></td>';
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