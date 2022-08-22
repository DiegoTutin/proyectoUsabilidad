<?php
    if(isset($_POST['id_capa']))
    {
        include '../../model/conectar.php';
        $codigo_capa = 0;
        $id_capa = $_POST['id_capa'];
        $nombre_capa = $_POST['nombre_capa'];
        $tipo_capa = $_POST['tipo_capa'];
        $tiempo_capa = $_POST['tiempo_capa'];
        $fecha_inicio_capa = $_POST['fecha_inicio_capa'];
        $fecha_fin_capa = $_POST['fecha_fin_capa'];
        $sql = "INSERT INTO capacitacion(codigo_capa, id_capa, nombre_capa, tipo_capa, tiempo_capa, fecha_inicio_capa, fecha_fin_capa)
                VALUE (0,'".$id_capa."','".$nombre_capa."','".$tipo_capa."','".$tiempo_capa."','".$fecha_inicio_capa."','".$fecha_fin_capa."')";
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('location: ../../view/capacitaciones/index.php');
    }
?>