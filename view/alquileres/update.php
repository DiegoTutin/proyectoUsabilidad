<?php  include '../template/header.php'?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Actualizar Alquileres</b>
                </div>
            </div>
            <form>
                <div>
                    <label for="SocioId" class="form-label mb-3 mt-3">Socio ID</label>
                    <select class="form-select" aria-label="Default select example" id="SocioId">
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
                    <label for="FechaInicio" class="form-label mb-3 mt-3">Fecha de Inicio del Alquiler</label>
                    <br>
                    <input type="date" id="FechaInicio" value="2022-01-12">
                </div>
                <div class="mb-3">
                    <label for="FechaFin" class="form-label mb-3 mt-3">Fecha Final del Alquiler</label>
                    <br>
                    <input type="date" id="FechaFin" value="2022-01-12">
                </div>
                <div class="mb-3">
                    <label for="valorPagar" class="form-label">Valor a Pagar</label>
                    <input type="number" class="form-control" id="valorPagar">
                </div>
                <div class="mb-3">
                    <label for="FechaEntrega" class="form-label mb-3 mt-3">Fecha de Entrega del Alquiler</label>
                    <br>
                    <input type="date" id="FechaEntrega" value="2022-01-12">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>
    
