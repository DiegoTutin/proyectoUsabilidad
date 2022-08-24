<?php include '../template/header.php' ?>
<?php include '../../controller/docentes/create.php'?>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 mt-5">
        <div class="card">
            <div class="card-header">
                <b>Registrar Docente</b>
            </div>
        </div>
        <form action='../../controller/docentes/create.php' method="POST" novalidate>
            <div class="mb-3">
                <label class="form-label">ID</label>
                <input type="text" class="form-control" id="id_doc" name="id_doc" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Cedula</label>
                <input type="text" class="form-control" id="cedula_doc" name="cedula_doc" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nombres</label>
                <input type="text" class="form-control" id="nombre_doc" name="nombre_doc" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellido_doc" name="apellido_doc" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo_doc" name="titulo_doc" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="codigo_carr" class="form-label">Carrera</label>
                <select name="codigo_carr" id="codigo_carr" required class="form-control">
                    <?php
                            while($row = $result_carrera->fetch_assoc())
                            {
                                echo '<option name="codigo_carr" value="'.$row['codigo_carr'].'">'.$row['nombre_carr'].'</option>';
                            }
                        ?>
                </select>
            </div>
            <div class="mb-3 mt-3">
                <label for="codigo_capa" class="form-label">CAPACITACION</label>
                <select name="codigo_capa" id="codigo_capa" required class="form-control">
                    <?php
                            while($row = $result_capacitacion->fetch_assoc())
                            {
                                echo '<option name="codigo_capa" value="'.$row['codigo_capa'].'">'.$row['nombre_capa'].'</option>';
                            }
                        ?>
                </select>
            </div>
            <input type="hidden" name="codigo_doc" value="<?php echo $row['codigo_doc']?>">
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
</div>
<script>
(function() {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
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