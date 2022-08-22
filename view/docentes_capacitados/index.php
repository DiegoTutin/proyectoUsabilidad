<?php  include '../template/header.php'?>
<?php  include '../../controller/docentes_capacitados/index.php' ?>
<div class="row">
    <div class=col-2></div>
    <div class="col1 px-5">
        <div class="card">
            <div class="card-header">
                <b>DOCENTES CAPACITADOS</b>
            </div>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">ID</th>
                        <th scope="col">Cedula</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Carrera</th>
                        <th scope="col">Capacitación</th>
                        <th scope="col">Horas</th>
                        <th scope="col">Inicio</th>
                        <th scope="col">Final</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo'<tr>';
                                echo '<th scope="row">'.$row["codigo_dc"].'</th>';
                                echo'<td>'.$row["id_doc"].'</td>';
                                echo'<td>'.$row["cedula_doc"].'</td>';
                                echo'<td>'.$row["nombre_doc"].'</td>';
                                echo'<td>'.$row["apellido_doc"].'</td>';
                                echo'<td>'.$row["titulo_doc"].'</td>';
                                echo'<td>'.$row["nombre_carr"].'</td>';
                                echo'<td>'.$row["nombre_capa"].'</td>';
                                echo'<td>'.$row["tiempo_capa"].'</td>';
                                echo'<td>'.$row["fecha_inicio_capa"].'</td>';
                                echo'<td>'.$row["fecha_fin_capa"].'</td>';
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