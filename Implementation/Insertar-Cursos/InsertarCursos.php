<?php
include_once "{$_SERVER['DOCUMENT_ROOT']}/Controllers/InsertarCursosController.php";

$objInserta = new InsertarCursos();
$objInserta->Inserta(@$_REQUEST['data']);

?>
