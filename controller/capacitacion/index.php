<?php
    include '../../model/conectar.php';
    
    $sql = "SELECT * FROM capacitacion";
    $result = $conn->query($sql);
    include '../../model/desconectar.php';
?>