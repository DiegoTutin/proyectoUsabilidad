<?php
    if(isset($_POST['id_dep']))
    {
        include '../../model/conectar.php';
        $codigo_dep = 0;
        $id_dep = $_POST['id_dep'];
        $nombre_dep = $_POST['nombre_dep'];
        $sql = "INSERT INTO departamento(codigo_dep,id_dep,nombre_dep)
                VALUE (0,'".$id_dep."','".$nombre_dep."')";
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('location: ../../view/departamento/index.php');
    }
?>