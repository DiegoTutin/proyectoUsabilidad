<?php
    include '../../model/conectar.php';
    $sql = "SELECT * FROM sede ORDER BY nombre_sed;";
    $result_sed = $conn->query($sql);
    include '../../model/desconectar.php';

    include '../../model/conectar.php';
    $sql = "SELECT * FROM departamento ORDER BY nombre_dep;";
    $result_dep = $conn->query($sql);
    include '../../model/desconectar.php';

    if(isset($_POST['id_carr']) && isset($_POST['nombre_carr'])&& isset($_POST['codigo_sed'])&& isset($_POST['codigo_dep'])){
        include '../../model/conectar.php';
        $codigo_carr = 0;
        $id_carr = $_POST['id_carr'];
        $nombre_carr = $_POST['nombre_carr'];
        $codigo_sed = $_POST['codigo_sed'];
        $codigo_dep = $_POST['codigo_dep'];

        $sql = "INSERT INTO carrera(codigo_carr, id_carr, nombre_carr, codigo_sed, codigo_dep) 
        VALUES (0,'".$id_carr."','".$nombre_carr."','".$codigo_sed."','".$codigo_dep."') ";
        $result = $conn->query($sql);

        include '../../model/desconectar.php';
        header('Location: ../../view/carrera/index.php');
    }
    
?>