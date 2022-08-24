<?php  include '../template/header.php'?>
<?php  include '../../controller/departamento/index.php' ?>
<div class="row">
    <div class="col-1"></div>
    <div class="col-10 mt-4">
        <div class="card">
            <div class="card-header">
                <b>DEPARTAMENTOS</b>

                <a href="create.php"><button type="button" class="btn btn-success"
                        style="margin-left:850px;">Agregar</button></a>
            </div>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col" colspan="3">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo'<tr>';
                                echo'<th scope="row">'.$row["codigo_dep"].'</th>';
                                echo'<td>'.$row["id_dep"].'</td>';
                                echo'<td>'.$row["nombre_dep"].'</td>';
                                echo'
                                <td><button><a href="update.php?codigo_dep='.$row["codigo_dep"].'"><i class="fa fa-pen text-success"></i></a></button> 
                                <button><a href="delete.php?codigo_dep='.$row["codigo_dep"].'"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></button></td>';
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
</div>
<?php  include '../template/footer.php'?>