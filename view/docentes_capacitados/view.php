<?php  include '../template/header.php'?>
<?php  include '../../controller/generos/view.php'?>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <p class="lead"><b>Informacion Género</b></p>
            <?php
                    $row = $result->fetch_assoc();
            ?>
            <table class="table table-hover align-middle table-info">
                    <tbody>
                        <tr>
                            <th scope="row">Nombre</th>
                            <td><?php  echo $row['gen_nombre']?></td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
    <?php  include '../template/footer.php'?>