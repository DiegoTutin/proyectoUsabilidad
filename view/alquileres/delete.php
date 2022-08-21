<?php  include '../template/header.php'?>
<?php  include '../../controller/alquileres/delete.php'?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Actualizar Alquileres</b>
                </div>
            </div>
            <form action="../../controller/alquileres/delete.php" method="post">
                <div>
                <?php
                    $row = $result->fetch_assoc();
                ?>
                <div class="mb-3">
                    <label for="ID" class="form-label"> ID</label>
                    <input type="number" class="form-control" id="ID" readonly
                    value="<?php echo $row['alq_id']?>">
                </div>
                <div class="mb-3">
                    <label for="SocioNombre" class="form-label">Socio</label>
                    <input type="text" class="form-control" id="SocioNombre" readonly
                    value="<?php echo $row['soc_nombre']?>">
                </div>
                <div id="emailHelp" class="form-text">No compartiremos sus datos personales con nadie.</div>
                </div>
                <div class="mb-3">
                    <label for="PeliculaNombre" class="form-label">Pelicula</label>
                    <input type="text" class="form-control" id="PeliculaNombre" readonly
                    value="<?php echo $row['pel_nombre']?>">
                </div>
                <div class="mb-3">
                    <label for="valorPagar" class="form-label">Fecha de Inicio del Alquiler</label>
                    <input type="date" class="form-control" id="valorPagar" readonly
                    value="<?php echo $row['alq_fecha_desde']?>">
                </div>
                <div class="mb-3">
                    <label for="valorPagar" class="form-label">Fecha Final del Alquiler</label>
                    <input type="date" class="form-control" id="valorPagar" readonly
                    value="<?php echo $row['alq_fecha_hasta']?>">
                </div>
                <div class="mb-3">
                    <label for="valorPagar" class="form-label">Valor a Pagar</label>
                    <input type="number" class="form-control" id="valorPagar" readonly
                    value="<?php echo $row['alq_valor']?>">
                </div>
                <div class="mb-3">
                    <label for="valorPagar" class="form-label">Fecha de Entrega del Alquiler</label>
                    <input type="date" class="form-control" id="valorPagar" readonly
                    value="<?php echo $row['alq_fecha_entrega']?>">
                </div>
                <input type="hidden" name="alq_id" value="<?php echo $row['alq_id']?>">
                <input type="submit" class="btn btn-danger" value="Eliminar"></input>
            </form>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>