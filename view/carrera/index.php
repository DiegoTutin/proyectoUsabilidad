<?php  include '../template/header.php'?>
<?php  include '../../controller/carrera/index.php' ?>
<div class="row">
    <div class="col-1"></div>
    <div class="col-10 mt-5">
        <div class="card">
            <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-4"><b>Carreras registradas</b></div>
                        <div class="col-6"></div>
                        <div class="col-2"><a href="create.php"><button type="button" class="btn btn-success">Agregar</button></a></div>
                    </div>
                </div>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Sede</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo'<tr>';
                                echo'<td>'.$row["id_carr"].'</td>';
                                echo'<td>'.$row["nombre_carr"].'</td>';
                                echo'<td>'.$row["nombre_sed"].'</td>';
                                echo'<td>'.$row["nombre_dep"].'</td>';
                                echo'
                                <td><button><a href="delete.php?codigo_carr='.$row["codigo_carr"].'"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></button>
                                <button><a href="update.php?codigo_carr='.$row["codigo_carr"].'"><i class="fa fa-pen text-success" aria-hidden="true"></i></a></button></td>';
                                echo '</tr>';
                            }
                            } else {
                            echo "0 results";
                            }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-1"></div>
</div>
<?php  include '../template/footer.php'?>