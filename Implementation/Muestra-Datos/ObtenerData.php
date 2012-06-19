<?php 
require "{$_SERVER['DOCUMENT_ROOT']}./Controllers/MuestraDatosController.php";
session_start();
$objMuestraData = new MuestraDatos();
$aludata = $objMuestraData->getuserdata($_SESSION['alu_cod']);
return $aludata;

?>
