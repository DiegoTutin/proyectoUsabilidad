<?php
    include '../../model/conectar.php';
    $sql = "SELECT * FROM sede";
    $result = $conn->query($sql);
    include '../../model/desconectar.php';

    include '../../model/conectar.php';
    $sql = "SELECT * FROM departamento";
    $result = $conn->query($sql);
    include '../../model/desconectar.php';

    if(isset($_GET['codigo_carr'])){
        include '../../model/conectar.php';
        $id = $_GET['codigo_carr'];
        $sql = "SELECT c.codigo_carr, c.id_carr, c.nombre_carr, s.nombre_sed, d.nombre_dep FROM carrera c 
                INNER JOIN sede s ON c.codigo_sed = s.codigo_sed 
                INNER JOIN departamento d ON c.codigo_dep = d.codigo_dep
                AND c.codigo_carr = ".$id;
        $result1 = $conn->query($sql);
        include '../../model/desconectar.php';
        }

    if(isset($_POST['id_carr'])){
        include '../../model/conectar.php';
        $codigo_carr = $_POST['codigo_carr'];
        $id_carr = $_POST['id_carr'];
        $nombre_carr = $_POST['nombre_carr'];
        $codigo_sed = $_POST['codigo_sed'];
        $codigo_dep = $_POST['codigo_dep'];
        
        $sql = "UPDATE carrera SET id_carr = '".$id_carr."', nombre_carr = '".$nombre_carr."', codigo_sed = ".$codigo_sed.", codigo_dep = '".$codigo_dep."'
        WHERE codigo_carr = ".$codigo_carr;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('Location: ../../view/peliculas/index.php');
    }
?>