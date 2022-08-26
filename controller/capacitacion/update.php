<?php
    if(isset($_GET['codigo_capa']))
    {
        include '../../model/conectar.php';
        $id = $_GET['codigo_capa'];
        $sql = "SELECT * FROM capacitacion WHERE capacitacion.codigo_capa=".$id;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
    }
    if(isset($_POST['codigo_capa']))
    {
        include '../../model/conectar.php';
        $codigo_capa = $_POST['codigo_capa'];
        $id_capa = $_POST['id_capa'];
        $nombre_capa = $_POST['nombre_capa'];
        $tipo_capa = $_POST['tipo_capa'];
        $tiempo_capa = $_POST['tiempo_capa'];
        $fecha_inicio_capa = $_POST['fecha_inicio_capa'];
        $fecha_fin_capa = $_POST['fecha_fin_capa'];
        $sql = "UPDATE capacitacion 
                SET id_capa='".$id_capa."',
                nombre_capa='".$nombre_capa."',
                tipo_capa='".$tipo_capa."',
                tiempo_capa='".$tiempo_capa."',
                fecha_inicio_capa='".$fecha_inicio_capa."',
                fecha_fin_capa='".$fecha_fin_capa."'
                WHERE codigo_capa =".$codigo_capa;
        $result = $conn->query($sql);
        echo 'hola 1';
        include '../../model/desconectar.php';
        header('location: ../../view/capacitaciones/index.php');
    }
?>