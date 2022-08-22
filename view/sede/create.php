<?php  include '../template/header.php'?>
<?php  include '../../controller/sede/create.php'?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Registrar Sede</b>
                </div>
            </div>
            <form action='../../controller/sede/create.php' method="POST">
            <div class="mb-3">
                <label for="soc_nombre" class="form-label">Nombre de sede</label>
                <input type="text" class="form-control" id="nombre_sed" name="nombre_sed" required>
            </div>
            <div class="mb-3">
                <label for="soc_direccion" class="form-label">Provincia de sede</label>
                <input type="text" class="form-control" id="provincia_sed" name="provincia_sed" required>
            </div>
            <div class="mb-3">
                <label for="soc_telefono" class="form-label">Ciudad de la sede</label>
                <input type="text" class="form-control" id="ciudad_sed" name="ciudad_sed" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>