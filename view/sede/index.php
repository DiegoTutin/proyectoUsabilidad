<?php  include '../template/header.php'?>
<<<<<<< HEAD
<?php  include '../../controller/sede/index.php' ?>
<div class="row">
    <div class=col-2></div>
    <div class="col1 px-5">
        <div class="card">
            <div class="card-header">
                <b>SEDES</b>
=======
<?php  include '../../controller/peliculas/index.php' ?>
<div class="row">
    <div class="col-1"></div>
    <div class="col-8 mt-5">
        <div class="card">
            <div class="card-header">
                <b>Docentes Capacitados</b>
                <a href="create.php"><button type="button" class="btn btn-success"
                        style="margin-left:450px;">Agregar</button></a>
>>>>>>> 08dd3a5aa5e24f90b750a0b144364ec33e67ffeb
            </div>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
<<<<<<< HEAD
                        <th scope="col">Código</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Provincia</th>
                        <th scope="col">Ciudad</th>
=======
                        <th scope="col">Numero</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Fechas de estreno</th>
                        <th scope="col" colspan="3">Opciones</th>
>>>>>>> 08dd3a5aa5e24f90b750a0b144364ec33e67ffeb
                    </tr>
                </thead>
                <tbody>
                    <?php
                            if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo'<tr>';
<<<<<<< HEAD
                                echo '<th scope="row">'.$row["codigo_sed"].'</th>';
                                echo'<td>'.$row["nombre_sed"].'</td>';
                                echo'<td>'.$row["provincia_sed"].'</td>';
                                echo'<td>'.$row["ciudad_sed"].'</td>';
                                echo'';
=======
                                echo '<th scope="row">'.$row["pel_id"].'</th>';
                                echo'<td>'.$row["gen_nombre"].'</td>';
                                echo'<td>'.$row["pel_nombre"].'</td>';
                                echo'<td>'.$row["pel_costo"].'</td>';
                                echo'<td>'.$row["pel_fecha_estreno"].'</td>';
                                echo'
                                <td><button><a href="update.php?pel_id='.$row["pel_id"].'"><i class="fa fa-pen text-success"></i></a></button> 
                                <button><a href="view.php?pel_id='.$row["pel_id"].'"><i class="fa fa-eye text-primary"></i></a></button>
                                <button><a href="delete.php?pel_id='.$row["pel_id"].'"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></button></td>';
>>>>>>> 08dd3a5aa5e24f90b750a0b144364ec33e67ffeb
                                echo '</tr>';
                            }
                            } else {
                            echo "0 results";
                            }
                        ?>
                </tbody>
            </table>
<<<<<<< HEAD
    </div>
</div>
</div>
=======
        </div>
    </div>
</div>
>>>>>>> 08dd3a5aa5e24f90b750a0b144364ec33e67ffeb
<?php  include '../template/footer.php'?>