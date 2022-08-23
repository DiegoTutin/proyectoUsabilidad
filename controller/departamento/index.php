<?php
    include '../../model/conectar.php';
    $sql = "SELECT dep.codigo_dep,dep.id_dep,nombre_dep
    FROM departamento dep";
    $result = $conn->query($sql);
    include '../../model/desconectar.php';
?>