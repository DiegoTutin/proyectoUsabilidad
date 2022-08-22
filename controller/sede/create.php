<?php
    if(isset($_POST['nombre_sed']))
    {
        include '../../model/conectar.php';
        $codigo_sed = 0;
        $nombre_sed = $_POST['nombre_sed'];
        $provincia_sed = $_POST['provincia_sed'];
        $ciudad_sed = $_POST['ciudad_sed'];
        $sql = "INSERT INTO sede(codigo_sed,Nombre_sed,provincia_sed,ciudad_sed)
                VALUE (0,'".$nombre_sed."','".$provincia_sed."','".$ciudad_sed."')";
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('location: ../../view/sede/index.php');
    }
?>