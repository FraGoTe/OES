<?php

include "{$_SERVER['DOCUMENT_ROOT']}./Controllers/AdminEstadoMatriculaController.php";
//session_start();
$objMuestraEstado = new AdminEstadoMatriculaController();

$page = $_REQUEST['page']; 
$limit = $_REQUEST['rows']; 
$sidx = $_REQUEST['sidx']; 
$sord = $_REQUEST['sord']; 

@$alum = $objMuestraEstado->getalldata($_REQUEST['seleccionar']);

$i = 0;
$limit = 50;
$numRows = count($alum);

if( $numRows >0 ) {
	$total_pages = ceil($numRows/$limit);
} else {
	$total_pages = 0;
}
if ($page > $total_pages) $page=$total_pages;
$start = $limit*$page - $limit; 

@$alumnos = $objMuestraEstado->getuserdata($_REQUEST['seleccionar'],$start,$limit,$sidx,$sord); 

$responce->page = $page;
$responce->total = $total_pages;
$responce->records = $numRows;
$i=0;

foreach($alumnos as $alumno){
    $responce->rows[$i]['id']=$alumno['ALU_COD'];
    $responce->rows[$i]['cell']=array($alumno['ALU_COD'],
                        $alumno['ALU_NOM_COMPLETO'],
                        (@$alumno['mat_estado']?'Matriculado':'No Matriculado'));
    $i++;

}    
echo json_encode($responce);

?>