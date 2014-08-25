<?php

include_once "{$_SERVER['DOCUMENT_ROOT']}/Models/Alumno.php";

$page = $_REQUEST['page']; 
$limit = $_REQUEST['rows']; 
$sidx = $_REQUEST['sidx']; 
$sord = $_REQUEST['sord']; 

$datos=array();

if (!empty($_REQUEST['ALU_NOM_COMPLETO'])) {
    $datos['ALU_NOM_COMPLETO'] = $_REQUEST['ALU_NOM_COMPLETO'];
}

if (!empty($_REQUEST['ALU_COD'])) {
    $datos['ALU_COD'] = $_REQUEST['ALU_COD'];
}

$objAlumno = new Alumno();
@$alumnos =  $objAlumno->getAllAluFiltro2($datos,$sidx,$sord);
 
$responce->page = '1';
$responce->total = '1';
$responce->records = count($alumnos);
$i=0;

if ($alumnos) {
    foreach ($alumnos as $alumno) {
        $responce->rows[$i]['id'] = $alumno['ALU_COD'];
        $responce->rows[$i]['cell'] = array(
            $alumno['ALU_COD'],
            utf8_encode($alumno['ALU_NOM_COMPLETO'])
        );
        $i++;
    }
}    
echo json_encode($responce);


?>
