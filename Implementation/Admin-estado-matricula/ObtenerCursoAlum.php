<?php
include "{$_SERVER['DOCUMENT_ROOT']}./Controllers/AdminEstadoMatriculaController.php";
//session_start();
$objMuestraCursos = new AdminEstadoMatriculaController();

$page = $_REQUEST['page']; 
$limit = $_REQUEST['rows']; 
$sidx = $_REQUEST['sidx']; 
$sord = $_REQUEST['sord']; 

@$cur= $objMuestraCursos->getcursos($_REQUEST['codigoalum']);
//echo $cur[1][cur_nom];
$i = 0;
$limit = 50;
$numRows = count($cur);

if( $numRows >0 ) {
	$total_pages = ceil($numRows/$limit);
} else {
	$total_pages = 0;
}
if ($page > $total_pages) $page=$total_pages;
$start = $limit*$page - $limit; 


/*$responce2->page = $page;
$responce2->total = $total_pages;
$responce2->records = $numRows;*/
$i=0;

foreach($cur as $curso){
    $responce2->rows[$i]['id']=$curso['cur_cod'];
    $responce2->rows[$i]['cell']=array($curso['cua_per'],
                        $curso['cur_cod'],
                        $curso['cua_turn'],
                        $curso['cua_sec'],
                        $curso['cur_nom'],
                        $curso['cur_cred']
                        //,$curso['cua_vez']
        );
    
    /*$responce2->rows[$i]['cell']=array($curso['cur_ciclo'],
                        $curso['cur_cod'],
                        $curso['cur_sem'],
                        $curso['cur_sem'],
                        $curso['cur_nom'],
                        $curso['cur_cred'],
                        $curso['cur_sem']);*/
    $i++;

}    
echo json_encode($responce2);


?>
