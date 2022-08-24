<?php
    include '../../model/conectar.php';
    $sql = "SELECT * FROM carrera ORDER BY nombre_carr";
    $result_carrera= $conn->query($sql);
    include '../../model/desconectar.php';

    include '../../model/conectar.php';
    $sql = "SELECT * FROM capacitacion ORDER BY nombre_capa";
    $result_capacitacion= $conn->query($sql);
    include '../../model/desconectar.php';

    if(isset($_POST['id_doc'])){
        include '../../model/conectar.php';
        $codigo_doc = 0;
        $id_doc = $_POST['id_doc'];
        $cedula_doc = $_POST['cedula_doc'];
        $nombre_doc = $_POST['nombre_doc'];
        $apellido_doc = $_POST['apellido_doc'];
        $titulo_doc = $_POST['titulo_doc'];
        $codigo_carr = $_POST['codigo_carr'];
        $codigo_capa = $_POST['codigo_capa'];

        if($codigo_capa != 6){
            $sql = "INSERT INTO docentes (codigo_doc,id_doc,cedula_doc, nombre_doc,
            apellido_doc,titulo_doc,codigo_carr,codigo_capa) 
            VALUES (0,'".$id_doc."','".$cedula_doc."','".$nombre_doc."','".$apellido_doc."','".$titulo_doc."',
            '".$codigo_carr."','".$codigo_capa."') ";
            $result = $conn->query($sql);
            function getData(string $id_doc){
                include '../../model/conectar.php';
                $result = mysqli_query($conn, "SELECT * FROM docentes WHERE id_doc = '".$id_doc."'") or die(mysqli_error($conn));
        
                $result = NULL;
        
                while($row = mysqli_fetch_assoc($result)) {
                    $result = $row['codigo_doc'];
                }
                include '../../model/desconectar.php';
                return $result;
            }
            $auxiliar = getData($id_doc);
            $sql1 = "INSERT INTO docentes_capacitados (codigo_dc, codigo_doc) VALUES (0,".$auxiliar.")";
            $result2 = $conn->query($sql1);
            if($result2 == TRUE){
                header('Location: ../../view/docentes_capacitados/index.php');
            }else{
                header('Location: ../../view/docentes/index.php');
            } 
            
            include '../../model/desconectar.php';
        }else{
            $sql = "INSERT INTO docentes (codigo_doc,id_doc,cedula_doc, nombre_doc,
            apellido_doc,titulo_doc,codigo_carr,codigo_capa) 
            VALUES (0,'".$id_doc."','".$cedula_doc."','".$nombre_doc."','".$apellido_doc."','".$titulo_doc."',
            '".$codigo_carr."','".$codigo_capa."') ";
            $result = $conn->query($sql);
            header('Location: ../../view/docentes/index.php');
            include '../../model/desconectar.php';
        }
    }

?>