<?php

include "{$_SERVER['DOCUMENT_ROOT']}/Controllers/ValidaMatriculaController.php";

session_start();
$objma = new ValidaMatricula();
echo $objma->Valida($_SESSION['alu_cod']);
?>
