<?php
include "{$_SERVER['DOCUMENT_ROOT']}./Controllers/SeleccionaCursosController.php";
session_start();
$objSeleccionaCursos = new SeleccionaCursos();
$cursos = $objSeleccionaCursos->getCursos($_SESSION['alu_cod']);
return $cursos;

?>
