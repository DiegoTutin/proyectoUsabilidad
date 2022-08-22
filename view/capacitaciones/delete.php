<?php  include '../template/header.php'?>
<?php  include '../../controller/socios/delete.php'?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Eliminar socio</b>
                </div>
            </div>
            <form action="../../controller/socios/delete.php" method="post">
                <?php
                    $row = $result->fetch_assoc();
                ?>
                <div class="mb-3 mt-3">
                    <label for="IDSocio" class="form-label">Socio ID</label>
                    <input type="number" class="form-control" readonly id="idSocio"
                    value="<?php echo $row['soc_id']?>">
                </div>
                <div class="mb-3">
                    <label for="cedulaSocio" class="form-label">Cédula</label>
                    <input type="text" class="form-control" readonly id="cedulaSocio"
                    value="<?php echo $row['soc_cedula']?>">
                    <div id="cedulaHelp" class="form-text">No compartiremos sus datos personales con nadie.</div>
                </div>
                <div class="mb-3">
                    <label for="nombreSocio" class="form-label">Nombre</label>
                    <input type="text" class="form-control" readonly id="nombreSocio"
                    value="<?php echo $row['soc_nombre']?>">
                </div>
                <div class="mb-3">
                    <label for="direccionSocio" class="form-label">Direccion</label>
                    <input type="text" class="form-control" readonly id="direccionSocio"
                    value="<?php echo $row['soc_direccion']?>">
                </div>
                <div class="mb-3">
                    <label for="telefonoSocio" class="form-label">Telefono</label>
                    <input type="text" class="form-control" readonly id="telefonoSocio"
                    value="<?php echo $row['soc_telefono']?>">
                </div>
                <div class="mb-3">
                    <label for="correoSocio" class="form-label">Correo</label>
                    <input type="text" class="form-control" readonly id="correoSocio"
                    value="<?php echo $row['soc_correo']?>">
                </div>
                <input type="hidden" name="soc_id" value="<?php echo $row['soc_id']?>">
                <input type="submit" class="btn btn-danger" value="Eliminar"></input>
            </form>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>