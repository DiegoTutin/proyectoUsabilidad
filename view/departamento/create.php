<?php include '../template/header.php' ?>
<?php include '../../controller/departamento/create.php'?>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 mt-5">
        <div class="card">
            <div class="card-header">
                <b>Crear Departamento</b>
            </div>
        </div>
        <form action='../../controller/departamento/create.php' method="POST" novalidate>
            <div class="mb-3">
                <label class="form-label">ID Departamento</label>
                <input type="text" class="form-control" id="id_dep" name="id_dep" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre Departamento</label>
                <input type="text" class="form-control" id="nombre_dep" name="nombre_dep" required>
            </div>
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