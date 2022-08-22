<?php  include '../template/header.php'?>
<?php  include '../../controller/capacitacion/view.php'?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-4"><b>Ver capacitaciones</b></div>
                        </div>
                    </div>
                <?php
                        $row = $result->fetch_assoc();
                ?>
                <table class="table table-hover align-middle">
                    <tbody>
                        <tr>
                            <th scope="row">ID</th>
                            <td><?php  echo $row['codigo_capa']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Nombre</th>
                            <td><?php  echo $row['nombre_capa']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Tipo</th>
                            <td><?php  echo $row['tipo_capa']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Tiempo</th>
                            <td><?php  echo $row['tiempo_capa']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Fecha de inicio</th>
                            <td><?php  echo $row['fecha_inicio_capa']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Fecha de cierre</th>
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