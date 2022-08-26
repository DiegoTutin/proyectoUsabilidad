<?php
    include '../../model/conectar.php';

    $sql = "SELECT count(codigo_dc) as total_doc_capacitados FROM docentes_capacitados";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_doc_capacitados = $row['total_doc_capacitados'];
    include '../../model/conectar.php';

    $sql = "SELECT count(codigo_doc) as total_docentes FROM docentes";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_docentes = $row['total_docentes']; 
    include '../../model/desconectar.php';

    include '../../model/conectar.php';

    $sql = "SELECT count(codigo_capa) as total_capacitaciones FROM capacitacion";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_capacitaciones = $row['total_capacitaciones']; 
    include '../../model/desconectar.php';

    include '../../model/conectar.php';
    
    $sql = "SELECT count(codigo_carr) as total_carreras FROM carrera";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_carrera = $row['total_carreras']; 
    include '../../model/desconectar.php';

    include '../../model/conectar.php';
    $sql = "SET lc_time_names = 'es_ES'; ";
    //Obtencion de meses de docentes capacitados
    $sql_mes = "SELECT DISTINCT MONTHNAME(fecha_inicio_capa) AS 
    mesCapacitacionDocente FROM docentes_capacitados dc, docentes d, capacitacion ca 
    WHERE dc.codigo_doc = d.codigo_doc AND d.codigo_capa = ca.codigo_capa
    ORDER BY MONTH(fecha_inicio_capa);";
    $result = $conn->query($sql);
    $result_mes = $conn->query($sql_mes);
    $i = 0; 
    $total_mesesDocentesCa=array();
    if ($result_mes->num_rows > 0) {          
        while($row = $result_mes->fetch_assoc()) {
            $total_mesesDocentesCa[$i]=("'".$row['mesCapacitacionDocente']."'");
            $i++;
        }
    }
    $meses_Doc_Capa = "['',".implode(",",$total_mesesDocentesCa)."]";
    //contadorDocCapa de docentes capacitados por mes
    $sql_alq_mes = "SELECT COUNT(dc.codigo_doc) as contadorDocCapa 
    FROM docentes_capacitados dc, docentes d, capacitacion ca 
    WHERE dc.codigo_doc = d.codigo_doc AND d.codigo_capa = ca.codigo_capa 
    GROUP BY MONTH(fecha_fin_capa) ORDER BY MONTH(fecha_fin_capa);";
    $result = $conn->query($sql);
    $result_doc_mes = $conn->query($sql_alq_mes);
    $i = 0; 
    $total_doc_capa=array();

    if ($result_doc_mes->num_rows > 0) {          
        while($row = $result_doc_mes->fetch_assoc()) {
            $total_doc_capa[$i]=("'".$row['contadorDocCapa']."'");
            $i++;
        }
    }
    $total_docen_capa_mes = "['0',".implode(",",$total_doc_capa)."]";
    //total docentes capacitados general
    $sql_alq = "SELECT COUNT(dc.codigo_doc) as contadorDocCapa 
    FROM docentes_capacitados dc, docentes d, capacitacion ca 
    WHERE dc.codigo_doc = d.codigo_doc AND d.codigo_capa = ca.codigo_capa;";

    $result_alq = $conn->query($sql_alq);
    $row = $result_alq->fetch_assoc();
    $total_doc_Capacitados = $row['contadorDocCapa'];

    //
    //
    //

?>