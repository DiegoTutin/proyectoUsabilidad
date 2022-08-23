<?php
    include '../../model/conectar.php';
    $sql = "SELECT c.codigo_carr, c.id_carr, c.nombre_carr, s.nombre_sed, d.nombre_dep FROM carrera c 
    INNER JOIN sede s ON c.codigo_sed = s.codigo_sed 
    INNER JOIN departamento d ON c.codigo_dep = d.codigo_dep";
    $result = $conn->query($sql);
    include '../../model/desconectar.php';
?>