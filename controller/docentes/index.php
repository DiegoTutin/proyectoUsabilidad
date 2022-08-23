<?php
    include '../../model/conectar.php';
    $sql = "SELECT do.id_doc , do.nombre_doc, do.nombre_doc, do.apellido_doc, do.titulo_doc,
    ca.nombre_carr
    FROM docentes do, carrera ca
    WHERE do.codigo_carr = ca.codigo_carr";
    $result = $conn->query($sql);
    include '../../model/desconectar.php';
?>