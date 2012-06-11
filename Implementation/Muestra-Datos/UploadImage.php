<?php
include '../../Controllers/MuestraDatosController.php';

$objMuestraData = new MuestraDatos();
return $objMuestraData->UploadImage($_POST, $_FILES, $_SERVER);

?>
