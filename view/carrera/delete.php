<?php  include '../template/header.php'?>
<?php  include '../../controller/carrera/delete.php'?>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 mt-5">
        <div class="card">
            <div class="card-header">
                <b>Eliminar Carrera</b>
            </div>
        </div>
        <form action="../../controller/carrera/delete.php" method="post">
            <?php
                $row = $result->fetch_assoc();
            ?>
            <?php
                $row1 = $result_sed->fetch_assoc();
            ?>
            <?php
                $row2 = $result_dep->fetch_assoc();
            ?>   
            <div class="mb-3 mt-3">
                <label for="id_carr" class="form-label">ID</label>
                <input type="text" class="form-control" readonly id="id_carr" aria-describedby="emailHelp"
                    value="<?php echo $row['id_carr']?>" name="id_carr">
            </div>
            <div class="mb-3">
                <label for="nombre_carr" class="form-label">Nombre</label>
                <input type="text" class="form-control" readonly id="nombre_carr"
                    value="<?php echo $row['nombre_carr']?>" name="nombre_carr">
            </div>
            <div class="mb-3">
                <label for="nombre_sed" class="form-label">Sede</label>
                <input type="text" class="form-control" readonly id="nombre_sed"
                    value="<?php echo $row1['nombre_sed']?>" name="nombre_sed">
            </div>
            <div class="mb-3">
                <label for="nombre_dep" class="form-label">Departamento</label>
                <input type="text" class="form-control" readonly id="nombre_dep"
                    value="<?php echo $row2['nombre_dep']?>" name="nombre_dep">
            </div>
            <form action="../../controller/peliculas/delete.php" method="post">
                <input type="hidden" name="codigo_carr" value="<?php echo $row['codigo_carr'];?>">
                <script type="text/javascript">
                    function noBorrar(){
                        swal("Cuidado!", "No puedes borrar un registro relacionado con otra tabla!", "error");
                    }
                </script>
            </form>
        </form>
        <input type="submit" value="Eliminar" class="btn btn-danger mb-3" onclick=noBorrar()>
    </div>
</div>

<?php  include '../template/footer.php'?>