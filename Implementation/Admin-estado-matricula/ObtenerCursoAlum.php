<?php
include "{$_SERVER['DOCUMENT_ROOT']}/Controllers/AdminEstadoMatriculaController.php";
//session_start();
$objMuestraCursos = new AdminEstadoMatriculaController();

@$cur= $objMuestraCursos->getcursos($_REQUEST['codigoalum']);
//echo $cur[1][cur_nom];

/*$responce2->page = $page;
$responce2->total = $total_pages;
$responce2->records = $numRows;*/
$i=0;

foreach($cur as $curso){
    $responce2->rows[$i]['id']=$curso['cur_cod'];
    $responce2->rows[$i]['cell']=array(
                        $curso['cua_per'],
                        $curso['cur_cod'],
                        $curso['cua_turn'],
                        $curso['cua_sec'],
                        utf8_decode($curso['cur_nom']),
                        $curso['cur_cred']
                        //,$curso['cua_vez']
        );
    
    $i++;

}    
echo json_encode($responce2);
?>
