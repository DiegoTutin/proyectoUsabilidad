<?php  include '../template/header.php'?>
<?php  include '../../controller/departamento/update.php'?>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 mt-5">
        <div class="card">
            <div class="card-header">
                <b>Eliminar Departamento</b>
            </div>
        </div>
        <form action='../../controller/departamento/update.php' method="POST" novalidate>
            <?php
                $row = $result->fetch_assoc();
            ?>    
        <div class="mb-3">
                <label class="form-label">ID Departamento</label>
                <input type="text" class="form-control" id="id_dep" name="id_dep" requerid
                value="<?php echo $row['id_dep']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre Departamento</label>
                <input type="text" class="form-control" id="nombre_dep" name="nombre_dep" requerid
                value="<?php echo $row['nombre_dep']?>">
            </div>
            <input type="hidden" name="codigo_dep" value="<?php echo $row['codigo_dep']?>">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>

<?php  include '../template/footer.php'?>