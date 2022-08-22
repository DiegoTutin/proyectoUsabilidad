<?php
    include '../../model/conectar.php';
    
    $sql = "SELECT do.id_doc, do.cedula_doc, do.nombre_doc, do.apellido_doc, do.titulo_doc,
    ca.nombre_carr, capa.nombre_capa, capa.tipo_capa, capa.tiempo_capa, capa.fecha_inicio_capa, capa.fecha_fin_capa
    FROM docentes_capacitados dc, docentes do, carrera ca, capacitacion capa
    WHERE dc.codigo_doc = do.codigo_doc AND do.codigo_carr = ca.codigo_carr AND do.codigo_capa = capa.codigo_capa";
    $result = $conn->query($sql);
    include '../../model/desconectar.php';
?>