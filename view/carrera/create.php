<?php include '../template/header.php' ?>
<?php include '../../controller/carrera/create.php'?>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 mt-5">
        <div class="card">
            <div class="card-header">
                <b>Registrar Carrera</b>
            </div>
        </div>
        <form action='../../controller/carrera/create.php' method="POST">
            <div class="mb-3 mt-3">
                <label class="form-label">ID</label>
                <input type="text" class="form-control" id="id_carr" name="id_carr" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre_carr" name="nombre_carr" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Sede</label>
                <select name="codigo_sed" id="codigo_sed" class="form-control">
                    <?php
                        while($row = $result_sed->fetch_assoc())
                        {
                            echo '<option value="'.$row['codigo_sed'].'">'.$row['nombre_sed'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Departamento</label>
                <select name="codigo_dep" id="codigo_dep" class="form-control">
                    <?php
                        while($row1 = $result_dep->fetch_assoc())
                        {
                            echo '<option value="'.$row1['codigo_dep'].'">'.$row1['nombre_dep'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
</div>
<?php  include '../template/footer.php'?>