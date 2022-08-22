<?php  include '../template/header.php'?>
<?php  include '../../controller/sede/index.php' ?>
<div class="row">
    <div class=col-2></div>
    <div class="col1 px-5">
        <div class="card">
            <div class="card-header">
                <b>SEDES</b>
            </div>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Provincia</th>
                        <th scope="col">Ciudad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo'<tr>';
                                echo '<th scope="row">'.$row["codigo_sed"].'</th>';
                                echo'<td>'.$row["nombre_sed"].'</td>';
                                echo'<td>'.$row["provincia_sed"].'</td>';
                                echo'<td>'.$row["ciudad_sed"].'</td>';
                                echo'';
                                echo '</tr>';
                            }
                            } else {
                            echo "0 results";
                            }
                        ?>
                </tbody>
            </table>
    </div>
</div>
</div>
<?php  include '../template/footer.php'?>