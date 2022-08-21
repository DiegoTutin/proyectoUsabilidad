<?php  include '../template/header.php'?>
<?php  include '../../controller/socios/view.php'?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <p class="lead"><b>Ver datos socio</b></p>
            <?php
                    $row = $result->fetch_assoc();
            ?>
            <table class="table table-hover align-middle table-info">
                    <tbody>
                        <tr>
                            <th scope="row">Cédula</th>
                            <td><?php  echo $row['soc_cedula']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Nombre</th>
                            <td><?php  echo $row['soc_nombre']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Direccion</th>
                            <td><?php  echo $row['soc_direccion']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Telefono</th>
                            <td><?php  echo $row['soc_telefono']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Correo</th>
                            <td><?php  echo $row['soc_correo']?></td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>