<?php
include "{$_SERVER['DOCUMENT_ROOT']}./Controllers/MuestraDatosController.php";

$objMuestraData = new MuestraDatos();
return $objMuestraData->UploadImage($_POST, $_FILES, $_SERVER);

?>
