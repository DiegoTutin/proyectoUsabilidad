<?php  include '../template/header.php'?>
<?php  include '../../controller/docentes/index.php' ?>
<div class="row">
    <div class="col-1"></div>
    <div class="col-10 mt-5">
        <div class="card">
            <div class="card-header">
                <b>Docentes</b>
                <a href="create.php"><button type="button" class="btn btn-success"
                        style="margin-left:815px;">Agregar</button></a>
            </div>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Carrera Perteneciente</th>
                        <th scope="col" colspan="3">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo'<tr>';
                                echo '<th scope="row">'.$row["id_doc"].'</th>';
                                echo'<td>'.$row["nombre_doc"].'</td>';
                                echo'<td>'.$row["apellido_doc"].'</td>';
                                echo'<td>'.$row["titulo_doc"].'</td>';
                                echo'<td>'.$row["nombre_carr"].'</td>';
                                echo'
                                <td><button><a href="update.php?id_doc='.$row["id_doc"].'"><i class="fa fa-pen text-success"></i></a></button> 
                                <button><a href="view.php?id_doc='.$row["id_doc"].'"><i class="fa fa-eye text-primary"></i></a></button>
                                <button><a href="delete.php?id_doc='.$row["id_doc"].'"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></button></td>';
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