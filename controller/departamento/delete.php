<?php
    if(isset($_GET['codigo_dep']))
    {
        include '../../model/conectar.php';
        $id = $_GET['codigo_dep'];
        $sql = "SELECT * FROM departamento WHERE departamento.codigo_dep=".$id;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
    }
    if(isset($_POST['codigo_dep']))
    {
        include '../../model/conectar.php';
        $id = $_POST['codigo_dep'];
        $sql = "DELETE  FROM departamento WHERE departamento.codigo_dep=".$id;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('location: ../../view/departamento/index.php');
    }
    
?>