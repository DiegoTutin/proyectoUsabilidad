<?php  include '../template/header.php'?>
<?php include '../../controller/capacitacion/update.php' ?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Actualizar capacitacion</b>
                </div>
            </div>
            <?php
                $row = $result->fetch_assoc();
            ?>
            <form action="../../controller/capacitacion/update.php" method='POST'>
            <div class="mb-3 mt-3">
                <label for="id_capa" class="form-label">ID</label>
                <input type="text" class="form-control" id="id_capa" name="id_capa" aria-describedby="emailHelp" required
                value="<?php  echo $row['id_capa']?>">
                <div id="emailHelp" class="form-text">No compartiremos sus datos personales con nadie.</div>
            </div>
            <div class="mb-3">
                <label for="nombre_capa" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre_capa" name="nombre_capa" required
                value="<?php  echo $row['nombre_capa']?>">
            </div>
            <div class="mb-3">
                <label for="tipo_capa" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="tipo_capa" name="tipo_capa" required
                value="<?php  echo $row['tipo_capa']?>">
            </div>
            <div class="mb-3">
                <label for="tiempo_capa" class="form-label">Tiempo</label>
                <input type="text" class="form-control" id="tiempo_capa" name="tiempo_capa" required
                value="<?php  echo $row['tiempo_capa']?>">
            </div>
            <div class="mb-3">
                <label for="fecha_inicio_capa" class="form-label">Fecha de inicio</label>
                <input type="date" class="form-control" id="fecha_inicio_capa" name="fecha_inicio_capa" required
                value="<?php  echo $row['fecha_inicio_capa']?>">
            </div>
            <div class="mb-3">
                <label for="fecha_fin_capa" class="form-label">Fecha de cierre</label>
                <input type="date" class="form-control" id="fecha_fin_capa" name="fecha_fin_capa" required
                value="<?php  echo $row['fecha_fin_capa']?>">
            </div>
            <input type="hidden" name='codigo_capa' value="<?php  echo $row['codigo_capa']?>">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>