<?php
include "{$_SERVER['DOCUMENT_ROOT']}/Models/Usuario.php";
session_start();
$objUsuario = new Usuario();
$datos = $objUsuario->getuseq($_SESSION['alu_cod']);

if(@!empty($datos))
        echo "NO";
else
        echo "SI";

?>
