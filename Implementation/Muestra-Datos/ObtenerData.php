<?php 
require "{$_SERVER['DOCUMENT_ROOT']}./Controllers/MuestraDatosController.php";

$objMuestraData = new MuestraDatos();
$aludata = $objMuestraData->getuserdata($_SESSION['usucod']);
return $aludata;

?>
