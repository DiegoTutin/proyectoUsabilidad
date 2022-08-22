<?php
    include '../../model/conectar.php';
    
    $sql = "SELECT * FROM sede";
    $result = $conn->query($sql);
    include '../../model/desconectar.php';
?>