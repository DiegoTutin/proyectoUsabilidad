<?php
    if(isset($_GET['codigo_dep']))
    {
        include '../../model/conectar.php';
        $id = $_GET['codigo_dep'];
        $sql = "SELECT * FROM departamento WHERE departamento.codigo_dep=".$id;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
    }
    if(isset($_POST['id_dep']))
    {
        include '../../model/conectar.php';
        $codigo_dep = $_POST['codigo_dep'];
        $id_dep = $_POST['id_dep'];
        $nombre_dep = $_POST['nombre_dep'];
        $sql = "UPDATE departamento SET 
                id_dep='".$id_dep."',
                nombre_dep='".$nombre_dep."'
                WHERE codigo_dep= ".$codigo_dep;

        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('location: ../../view/departamento/index.php');
    }
    

    
?>