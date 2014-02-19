<?php

include "{$_SERVER['DOCUMENT_ROOT']}./Controllers/AdminEstadoMatriculaController.php";

//session_start();
$objMuestraEstado = new AdminEstadoMatriculaController();

$datos=array();

if(isset($_REQUEST['ALU_COD']))
    $datos['AL.ALU_COD']=$_REQUEST['ALU_COD'];
if(isset($_REQUEST['ALU_NOM_COMPLETO']))
    $datos['AL.ALU_NOM_COMPLETO']=$_REQUEST['ALU_NOM_COMPLETO'];
if(isset($_REQUEST['MAT_ESTADO']))
    $datos['MAT.MAT_ESTADO']=$_REQUEST['MAT_ESTADO'];

$numdatos=count($datos);

$page = $_REQUEST['page']; 
$limit = $_REQUEST['rows']; 
$sidx = $_REQUEST['sidx']; 
$sord = $_REQUEST['sord']; 

if($numdatos<1){
@$alum = $objMuestraEstado->getalldata($_REQUEST['seleccionar']);
}
else
    {
    @$alum =  $objMuestraEstado->getaludata($datos,$_REQUEST['seleccionar']);
    }
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

if($numdatos<1){
@$alumnos = $objMuestraEstado->getuserdata($_REQUEST['seleccionar'],$start,$limit,$sidx,$sord); 
}
else
    {
    @$alumnos =  $objMuestraEstado->getaludata($datos,$_REQUEST['seleccionar']);
    }
$responce->page = $page;
$responce->total = $total_pages;
$responce->records = $numRows;
$i=0;

if($alumnos)
{
foreach($alumnos as $alumno){
    $responce->rows[$i]['id']=$alumno['ALU_COD'];
    $responce->rows[$i]['cell']=array($alumno['ALU_COD'],
                        utf8_encode($alumno['ALU_NOM_COMPLETO']),
                        (@$alumno['mat_estado']?'No Matriculado':'Matriculado'));
    $i++;
}
}    
echo json_encode($responce);

?>