<?php  include '../template/header.php'?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Actualizar Actor-Pelicula</b>
                </div>
            </div>
            <form>
                <div>
                    <label for="ActorId" class="form-label mb-3 mt-3">Actor ID</label>
                    <select class="form-select" aria-label="Default select example" id="ActorId">
                        <option selected>Seleccione</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div id="emailHelp" class="form-text">No compartiremos sus datos personales con nadie.</div>
                </div>
                <div>
                    <label for="PeliculaId" class="form-label mb-3 mt-3">Pelicula ID</label>
                    <select class="form-select mb-3" aria-label="Default select example" id="PeliculaId">
                        <option selected>Seleccione</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="correoSocio" class="form-label">Papel de la Pelicula</label>
                    <input type="text" class="form-control" id="correoSocio">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>