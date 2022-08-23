<?php
    include '../../model/conectar.php';
    $sql = "SELECT do.id_doc , do.nombre_doc, do.nombre_doc, do.apellido_doc, do.titulo_doc,
    ca.nombre_carr, capa.nombre_capa
    FROM docentes do, carrera ca, capacitacion capa
    WHERE do.codigo_carr = ca.codigo_carr
    AND do.codigo_capa = capa.codigo_capa";
    $result = $conn->query($sql);
    include '../../model/desconectar.php';
?>