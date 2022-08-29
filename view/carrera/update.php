<?php  include '../template/header.php'?>
<?php include '../../controller/carrera/update.php' ?>
    <div class="row">
    <?php $row1 = $result1->fetch_assoc() ?>
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Actualizar Carrera</b>
                </div>
            </div>

            <form action="../../controller/carrera/update.php" method='POST' novalidate>
            <div class="mb-3 mt-3">
                <label for="id_carr" class="id_carr">ID</label>
                <input type="text" class="form-control" id="id_carr" name="id_carr"
                value="<?php  echo $row1['id_carr']?>" required>
            </div>
            <div class="mb-3">
                <label for="nombre_carr" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre_carr" name="nombre_carr"
                value="<?php  echo $row1['nombre_carr']?>" required>
            </div>
            <label class="form-label">Sede</label>
            <select class="form-control mb-3" id="codigo_sed" name="codigo_sed" required>
                    <?php
                    if ($result_sed->num_rows > 0){
                        while($row_sed = $result_sed->fetch_assoc()) {
                            if($row1["codigo_sed"]==$row_sed["codigo_sed"]){
                                echo '<option selected disable name="codigo_sed" value="'.$row_sed["codigo_sed"].'">'.$row_sed["nombre_sed"].'</option>';
                            }else{
                                echo '<option name="codigo_sed" value="'.$row_sed["codigo_sed"].'">'.$row_sed["nombre_sed"].'</option>';
                            }
                            
                        }
                    }
                    ?>
                    
            </select>
            <label class="form-label">Departamento</label>
            <select class="form-control mb-3" id="codigo_dep" name="codigo_dep" required>
                    <?php
                    if ($result_dep->num_rows > 0){
                        while($row_dep = $result_dep->fetch_assoc()) {
                            if($row1["codigo_dep"]==$row_dep["codigo_dep"]){
                                echo '<option selected disable name="codigo_dep" value="'.$row_dep["codigo_dep"].'">'.$row_dep["nombre_dep"].'</option>';
                            }else{
                                echo '<option name="codigo_dep" value="'.$row_dep["codigo_dep"].'">'.$row_dep["nombre_dep"].'</option>';
                            }
                            
                        }
                    }
                    ?>
                    
            </select>
            <input type="hidden" name="codigo_carr" value="<?php echo $row1['codigo_carr'];?>">
            <button type="submit" class="btn btn-success">Actualizar</button>
            </form>
        </div>
    </div>
    <script>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <?php  include '../template/footer.php'?>