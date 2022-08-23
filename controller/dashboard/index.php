<?php
    include '../../model/conectar.php';

    $sql = "SELECT count(codigo_dc) as total_doc_capacitados FROM docentes_capacitados";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_doc_capacitados = $row['total_doc_capacitados'];
    include '../../model/conectar.php';

    $sql = "SELECT count(codigo_doc) as total_docentes FROM docentes";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_docentes = $row['total_docentes']; 
    include '../../model/desconectar.php';

    include '../../model/conectar.php';

    $sql = "SELECT count(codigo_capa) as total_capacitaciones FROM capacitacion";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_capacitaciones = $row['total_capacitaciones']; 
    include '../../model/desconectar.php';

    include '../../model/conectar.php';
    
    $sql = "SELECT count(codigo_carr) as total_carreras FROM carrera";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_carrera = $row['total_carreras']; 
    include '../../model/desconectar.php';
?>