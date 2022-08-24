<?php
    include '../../model/conectar.php';
    $sql = "SELECT * FROM sede";
    $result_sed = $conn->query($sql);
    include '../../model/desconectar.php';

    include '../../model/conectar.php';
    $sql = "SELECT * FROM departamento";
    $result_dep = $conn->query($sql);
    include '../../model/desconectar.php';
    
    if(isset($_GET['codigo_carr'])){
    include '../../model/conectar.php';
    $id = $_GET['codigo_carr'];
    $sql = "SELECT c.codigo_carr, c.id_carr, c.nombre_carr, s.nombre_sed, d.nombre_dep FROM carrera c 
            INNER JOIN sede s ON c.codigo_sed = s.codigo_sed 
            INNER JOIN departamento d ON c.codigo_dep = d.codigo_dep
            AND c.codigo_carr = ".$id;
    $result = $conn->query($sql);
    include '../../model/desconectar.php';
    }
    if(isset($_POST['codigo_carr'])){
        include '../../model/conectar.php';
        $id = $_POST['codigo_carr'];
        $sql = "DELETE FROM carrera  WHERE codigo_carr =".$id;
        $result = $conn->query($sql);
        header('Location: ../../view/carrera/index.php');
        include '../../model/desconectar.php';
    }


?>