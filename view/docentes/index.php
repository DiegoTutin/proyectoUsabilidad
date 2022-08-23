<?php  include '../template/header.php'?>
<?php  include '../../controller/docentes/index.php' ?>
<div class="row">
    <div class="col-1"></div>
    <div class="col-10 mt-5">
        <div class="card">
            <div class="card-header">
                <b>DOCENTES</b>
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
                        <th scope="col">CURSO REALIZADO</th>
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
                                echo'<td>'.$row["nombre_capa"].'</td>';
                                echo'';
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