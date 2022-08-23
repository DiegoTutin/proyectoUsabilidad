<?php  include '../template/header.php'?>
<?php include '../../controller/sede/update.php' ?>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Actualizar Sede</b>
                </div>
            </div>

            <form action="../../controller/sede/update.php" method='POST' >
            <?php
                $row = $result->fetch_assoc();
            ?>
            <div class="mb-3">
                <label for="nombre_sed" class="form-label">Nombre</label>
                <input type="text" class="form-control"
                value="<?php echo $row["nombre_sed"]?>" required id="nombre_sed" name="nombre_sed">
            </div>
            <div class="mb-3">
                <label for="provincia_sed" class="form-label">Provincia</label>
                <input type="text" class="form-control" id="provincia_sed" name="provincia_sed"
                value="<?php  echo $row['provincia_sed']?>" required>
            </div>
            <div class="mb-3">
                <label for="ciudad_sed" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudad_sed" name="ciudad_sed"
                value="<?php  echo $row['ciudad_sed']?>" required>
            </div>
            <input type="hidden" name="codigo_sed" value="<?php echo $row['codigo_sed'];?>">
            <button type="submit" class="btn btn-success">Actualizar</button>
            </form>
        </div>
    </div>
    <?php  include '../template/footer.php'?>