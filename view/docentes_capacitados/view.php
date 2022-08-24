<?php  include '../template/header.php'?>
<?php  include '../../controller/docentes_capacitados/view.php'?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-6"><b>Información docentes Capacitados</b></div>
                        </div>
                    </div>
                <?php
                        $row = $result->fetch_assoc();
                ?>
                <table class="table table-hover align-middle">
                    <tbody>
                        <tr>
                            <th scope="row">ID</th>
                            <td><?php  echo $row['id_doc']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Cédula</th>
                            <td><?php  echo $row['cedula_doc']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Nombres</th>
                            <td><?php  echo $row['nombre_doc']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Apellidos</th>
                            <td><?php  echo $row['apellido_doc']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Título</th>
                            <td><?php  echo $row['titulo_doc']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Carrera</th>
                            <td><?php  echo $row['nombre_carr']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Capacitación</th>
                            <td><?php  echo $row['nombre_capa']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Horas</th>
                            <td><?php  echo $row['tiempo_capa']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Inicio de capacitación</th>
                            <td><?php  echo $row['fecha_inicio_capa']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Final de capacitación</th>
                            <td><?php  echo $row['fecha_fin_capa']?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>