<?php

include "{$_SERVER['DOCUMENT_ROOT']}./Controllers/AdminEstadoMatriculaController.php";
//session_start();
$objMuestraData1 = new AdminEstadoMatriculaController();
$objMuestraEstado = new AdminEstadoMatriculaController();

@$alumnos = $objMuestraData1->getuserdata1($_REQUEST['seleccionar']);//cambiar
//$alumnos = $objMuestraData1->getuserdata($_SESSION['alu_cod']);
//return $alumnos;
                $i=0;
                $alum = "";
                $numRows = count($alumnos);
                //echo $alumnos[1]['alu_nom_completo'];
                while($numRows>$i)//$numRows>$i
		{
                    $estado = $objMuestraEstado->getuserestado($alumnos[$i]['alu_cod']);
                    if($numRows==$i-1)
                    {$alum .= "{cod:'".$alumnos[$i]['alu_cod']."',nombre:'".$alumnos[$i]['alu_nom_completo']."',estado:'".$estado."'}";
                     $i++;}
                     else{
                     $alum .= "{cod:'".$alumnos[$i]['alu_cod']."',nombre:'".$alumnos[$i]['alu_nom_completo']."',estado:'".$estado."'},";
                     $i++;}
		}
                ?>

<script>

</script>