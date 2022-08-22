<?php  include '../template/header.php'?>
<?php include '../../controller/peliculas/view.php' ?>
<section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <p class="lead"><b>Informacion Pelicula</b></p>

            <table class="table table-hover align-middle table-info">
                <?php
            $row = $result->fetch_assoc();
            ?>
                <tbody>
                    <tr>
                        <th scope="row">ID</th>
                        <td><?php echo $row['pel_id']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Género</th>
                        <td><?php  echo $row['gen_nombre']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Nombre</th>
                        <td><?php  echo $row['pel_nombre']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Costo</th>
                        <td><?php  echo $row['pel_costo']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Fecha de estreno</th>
                        <td><?php  echo $row['pel_fecha_estreno']?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php  include '../template/footer.php'?>