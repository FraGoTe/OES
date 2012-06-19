<?php
include "{$_SERVER['DOCUMENT_ROOT']}./Controllers/SeleccionaCursosController.php";

$objSeleccionaCursos = new SeleccionaCursos();
$prematri = $objSeleccionaCursos->getpreview($_POST['data']);
return $prematri;

?>
